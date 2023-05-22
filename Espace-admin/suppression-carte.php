<?php
session_start();
include './board-head.html';
include './board-navbar.php';
require './database.php';

$plat_nameError = $plat_descriptionError = $plat_priceError = $plat_categoryError = $plat_imageError = "";
$plat_name = $plat_description = $plat_price = $plat_category = $plat_image = "";

if (!empty($_POST)) {
    $plat_name              = checkInput($_POST['p_nom']);
    $plat_description       = checkInput($_POST['p_description']);
    $plat_price             = checkInput($_POST['p_prix']);
    $plat_category          = checkInput($_POST['p_categories']);
    $plat_image             = $_FILES["p_photos"]["name"];
    $plat_imagePath         = '../Assets/images/' . basename($plat_image);
    $plat_imageExtension    = pathinfo($plat_imagePath, PATHINFO_EXTENSION);
    $isSuccess              = true;
    $isUploadSuccess        = false;

    if (empty($plat_name)) {
        $plat_nameError = 'Ce champ ne peut pas être vide';
        $isSuccess = false;
    }
    if (empty($plat_description)) {
        $plat_descriptionError = 'Ce champ ne peut pas être vide';
        $isSuccess = false;
    }
    if (empty($plat_price)) {
        $plat_priceError = 'Ce champ ne peut pas être vide';
        $isSuccess = false;
    }
    if (empty($plat_category)) {
        $plat_categoryError = 'Ce champ ne peut pas être vide';
        $isSuccess = false;
    }
    if (empty($plat_image)) {
        $plat_imageError = 'Ce champ ne peut pas être vide';
        $isSuccess = false;
    } else {
        $isUploadSuccess = true;
        if ($plat_imageExtension != "jpg" && $plat_imageExtension != "png" && $plat_imageExtension != "jpeg" && $plat_imageExtension != "gif") {
            $plat_imageError = "Les fichiers autorisés sont: .jpg, .jpeg, .png, .gif";
            $isUploadSuccess = false;
        }
        if (file_exists($plat_imagePath)) {
            $plat_imageError = "Le fichier existe déjà";
            $isUploadSuccess = false;
        }
        if ($_FILES["p_photos"]["size"] > 1000000) {
            $plat_imageError = "Le fichier ne doit pas dépasser 1 Mo";
            $isUploadSuccess = false;
        }
        if ($isUploadSuccess) {
            if (!move_uploaded_file($_FILES["p_photos"]["tmp_name"], $plat_imagePath)) {
                $plat_imageError = "Il y a eu une erreur lors de l'upload";
                $isUploadSuccess = false;
            }
        }
    }

    if ($isSuccess && $isUploadSuccess) {
        $pdo = Database::connect();
        $statement = $pdo->prepare("INSERT INTO plats (p_nom, p_description, p_prix, p_categories, p_photos) VALUES (?, ?, ?, ?, ?)");
        $statement->execute(array($plat_name, $plat_description, $plat_price, $plat_category, $plat_image));
        Database::disconnect();
        header("Location: board.php");
        exit();
    }
}

function checkInput($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<body>
    <div class="space"></div>
    <div class="container admin">
        <div class="row">
            <h1 class="ajouter"><strong>Ajouter un plat</strong></h1>
            <br>
            <form class="form" action="ajout-carte.php" role="form" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="p_nom">Nom :</label>
                    <input type="text" class="form-control" id="p_nom" name="p_nom" placeholder="Nom" value="<?php echo $plat_name; ?>">
                    <span class="help-inline"><?php echo $plat_nameError; ?></span>
                </div>
                <div class="form-group">
                    <label for="p_description">Description :</label>
                    <input type="text" class="form-control" id="p_description" name="p_description" placeholder="Description" value="<?php echo $plat_description; ?>">
                    <span class="help-inline"><?php echo $plat_descriptionError; ?></span>
                </div>
                <div class="form-group">
                    <label for="p_prix">Prix (en €) :</label>
                    <input type="number" step="0.01" class="form-control" id="p_prix" name="p_prix" placeholder="Prix" value="<?php echo $plat_price; ?>">
                    <span class="help-inline"><?php echo $plat_priceError; ?></span>
                </div>
                <div class="form-group">
                    <label for="p_categories">Catégorie :</label>
                    <select class="form-control" id="p_categories" name="p_categories">
                        <?php
                        $pdo = Database::connect();
                        $categories = $pdo->query('SELECT * FROM p_categories')->fetchAll();
                        foreach ($categories as $row) {
                            echo '<option value="' . $row['id'] . '">' . $row['nom'] . '</option>';
                        }
                        Database::disconnect();
                        ?>
                    </select>
                    <span class="help-inline"><?php echo $plat_categoryError; ?></span>
                </div>
                <div class="form-group">
                    <label for="p_photos">Sélectionner une image :</label>
                    <input type="file" id="p_photos" name="p_photos">
                    <span class="help-inline"><?php echo $plat_imageError; ?></span>
                </div>
                <br>
                <div class="form-actions">
                    <button type="submit" class="btn btn-success">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                            <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z" />
                        </svg>
                        Ajouter
                    </button>
                    <a class="btn btn-primary" href="modification-carte.php">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
                        </svg>
                        Retour
                    </a>
                </div>
            </form>
        </div>
    </div>
</body>

<?php
include 'board-footer.html';
?>
