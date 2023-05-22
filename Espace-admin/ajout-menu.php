<?php
session_start();
include './board-head.html';
include './board-navbar.php';
require './database.php';

$menu_nameError = $menu_descriptionError = $menu_priceError = $menu_categoryError = "";
$menu_name = $menu_description = $menu_price = $menu_category = "";

$isSuccess = false;
if (!empty($_POST)) {
    $menu_name = checkInput($_POST['m_nom']);
    $menu_description = checkInput($_POST['m_description']);
    $menu_price = checkInput($_POST['m_prix']);
    $menu_category = checkInput($_POST['m_categories_id']);
    $isSuccess = true;
    $isUploadSuccess = false;

    // // Affichez les valeurs pour le débogage
    // echo "Nom du menu : " . $menu_name . "<br>";
    // echo "Description du menu : " . $menu_description . "<br>";
    // echo "Prix du menu : " . $menu_price . "<br>";
    // echo "Catégorie du menu : " . $menu_category . "<br>";

    if (empty($menu_name)) {
        $menu_nameError = 'Ce champ ne peut pas être vide';
        $isSuccess = false;
    }
//     // Ajoutez des instructions echo pour le débogage
// echo "Erreur Nom du menu : " . $menu_nameError . "<br>";
    if (empty($menu_description)) {
        $menu_descriptionError = 'Ce champ ne peut pas être vide';
        $isSuccess = false;
//         // Ajoutez des instructions echo pour le débogage
// echo "Erreur Description du menu : " . $menu_descriptionError . "<br>";
    }
    if (empty($menu_price)) {
        $menu_priceError = 'Ce champ ne peut pas être vide';
        $isSuccess = false;
// // Ajoutez des instructions echo pour le débogage
// echo "Erreur Prix du menu : " . $menu_priceError . "<br>";
    }
    if (empty($menu_category)) {
        $menu_categoryError = 'Ce champ ne peut pas être vide';
        $isSuccess = false;
//         // Ajoutez des instructions echo pour le débogage
// echo "Erreur Nom du menu : " . $menu_categoryError . "<br>";
    } else {
        $isUploadSuccess = true;
    }
}

if ($isSuccess && $isUploadSuccess) {
    $pdo = Database::connect();
    $statement = $pdo->prepare("INSERT INTO menus (m_nom, m_description, m_prix, m_categories_id) VALUES (?, ?, ?, ?)");
    $statement->execute(array($menu_name, $menu_description, $menu_price, $menu_category));
    Database::disconnect();
    header("Location: liste-menu.php");
    exit();
}


function checkInput($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
<html>

<body>

    <div class="space"></div>
    <div class="container admin">
        <div class="row">
            <h1 class="ajouter"><strong>Ajouter un menu</strong></h1>
            <br>
            <form class="form" action="ajout-menu.php" role="form" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="m_nom">Nom :</label>
                    <input type="text" class="form-control" id="m_nom" name="m_nom" placeholder="Nom"
                        value="<?php echo $menu_name; ?>">
                    <span class="help-inline">
                        <?php echo $menu_nameError; ?>
                    </span>
                </div>
                <div class="form-group">
                    <label for="m_description">Description :</label>
                    <input type="text" class="form-control" id="m_description" name="m_description"
                        placeholder="Description" value="<?php echo $menu_description; ?>">
                    <span class="help-inline">
                        <?php echo $menu_descriptionError; ?>
                    </span>
                </div>
                <div class="form-group">
                    <label for="m_prix">Prix (en €) :</label>
                    <input type="number" step="0.01" class="form-control" id="m_prix" name="m_prix" placeholder="Prix"
                        value="<?php echo $menu_price; ?>">
                    <span class="help-inline">
                        <?php echo $menu_priceError; ?>
                    </span>
                </div>
                <div class="form-group">
    <label for="m_categories_id">Catégorie :</label>
    <select class="form-control" id="m_categories_id" name="m_categories_id">
        <?php
        try {
            $pdo = Database::connect();
            $m_categories = $pdo->query('SELECT * FROM m_categories')->fetchAll();
            foreach ($m_categories as $row) {
                echo '<option value="' . $row['id'] . '">' . $row['nom'] . '</option>';
            }
            Database::disconnect();
        } catch (PDOException $e) {
            echo 'Erreur de récupération des catégories : ' . $e->getMessage();
        }
        ?>
    </select>
                    <span class="help-inline">
                        <?php echo $menu_categoryError; ?>
                    </span>
                </div>
                <br>
                <div class="form-actions">
                    <button type="submit" class="btn btn-success">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-pencil" viewBox="0 0 16 16">
                            <path
                                d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z" />
                        </svg>
                        Ajouter
                    </button>
                    <a class="btn btn-primary" href="liste-menu.php">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-arrow-left" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
                        </svg>
                        Retour
                    </a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
<?php
include 'board-footer.html';
?>