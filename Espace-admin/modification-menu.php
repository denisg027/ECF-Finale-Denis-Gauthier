<?php
session_start();
include './board-head.html';
include './board-navbar.php';
require './database.php';

// Fonction pour valider et nettoyer les données d'entrée
function checkInput($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Récupérer l'ID en get 
if (!empty($_GET['id'])) {
    $id = checkInput($_GET['id']);
}

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

    if (empty($menu_name)) {
        $menu_nameError = 'Ce champ ne peut pas être vide';
        $isSuccess = false;
    }
    if (empty($menu_description)) {
        $menu_descriptionError = 'Ce champ ne peut pas être vide';
        $isSuccess = false;
    }
    if (empty($menu_price)) {
        $menu_priceError = 'Ce champ ne peut pas être vide';
        $isSuccess = false;
    }
    if (empty($menu_category)) {
        $menu_categoryError = 'Ce champ ne peut pas être vide';
        $isSuccess = false;
    } else {
        $isUploadSuccess = true;
    }
}

if ($isSuccess && $isUploadSuccess) {
    $db = Database::connect();
    $statement = $db->prepare("UPDATE menus SET m_nom = ?, m_description = ?, m_prix = ?, m_categories_id = ? WHERE id = ?");
    $statement->execute(array($menu_name, $menu_description, $menu_price, $menu_category, $id));
    Database::disconnect();
    header("Location: liste-menu.php");
} else {
    $db = Database::connect();
    $statement = $db->prepare("SELECT * FROM menus WHERE id = ?");
    $statement->execute(array($id));
    $menu = $statement->fetch();
    $menu_name = $menu['m_nom'];
    $menu_description = $menu['m_description'];
    $menu_price = $menu['m_prix'];
    $menu_category = $menu['m_categories_id'];
    Database::disconnect();
}
?>

<body>
    <div class="space"></div>
    <div class="container admin">
        <div class="row">
            <div class="col-md-12">
                <h1><strong>Modifier un menu</strong></h1>
                
                <form class="form" action="<?php echo 'modification-menu.php?id=' . $id; ?>" role="form" method="post" enctype="multipart/form-data">
                    
                    <div>
                        <label class="form-label" for="m_nom">Nom:</label>
                        <input type="text" class="form-control" id="m_nom" name="m_nom" placeholder="Nom" value="<?php echo $menu_name; ?>">
                        <span class="help-inline"><?php echo $menu_nameError; ?></span>
                    </div>
                    
                    <div>
                        <label class="form-label" for="m_description">Description:</label>
                        <input type="text" class="form-control" id="m_description" name="m_description" placeholder="Description" value="<?php echo $menu_description; ?>">
                        <span class="help-inline"><?php echo $menu_descriptionError; ?></span>
                    </div>
                    
                    <div>
                        <label class="form-label" for="m_prix">Prix: (en €)</label>
                        <input type="number" step="0.01" class="form-control" id="m_prix" name="m_prix" placeholder="Prix" value="<?php echo $menu_price; ?>">
                        <span class="help-inline"><?php echo $menu_priceError; ?></span>
                    </div>
                    
                    <div>
                        <label class="form-label" for="m_categories_id">Catégorie:</label>
                        <select class="form-control" id="m_categories_id" name="m_categories_id">
                            <?php
                            $db = Database::connect();
                            foreach ($db->query('SELECT * FROM m_categories') as $row) {
                                if ($row['id'] == $menu_category)
                                    echo '<option selected="selected" value="' . $row['id'] . '">' . $row['nom'] . '</option>';
                                else
                                    echo '<option value="' . $row['id'] . '">' . $row['nom'] . '</option>';
                            }
                            Database::disconnect();
                            ?>
                        </select>
                        <span class="help-inline"><?php echo $menu_categoryError; ?></span>
                    </div>
                    <br>

                    <br>
                    <div class="form-actions">
                        <button type="submit" class="btn btn-success"><span class="bi bi-pencil"></span> Modifier</button>
                        <a class="btn btn-primary" href="liste-menu.php"><span class="bi-arrow-left"></span> Retour</a>
                    </div>
                </form>
            </div>

        </div>
    </div>
    <div class="space"></div>
</body>

<?php
include 'board-footer.html';
?>
