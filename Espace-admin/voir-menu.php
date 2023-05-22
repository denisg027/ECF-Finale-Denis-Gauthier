<?php
session_start();
include './board-head.html';
include './board-navbar.php';
require './database.php';


// Récupérer l'ID en get 
if(!empty($_GET['id'])) {
    $id = checkInput($_GET['id']);
}
 
$db = Database::connect();
$statement = $db->prepare("SELECT menus.id, menus.m_nom, menus.m_description, menus.m_prix, m_categories.nom AS m_categories FROM menus LEFT JOIN m_categories ON menus.m_categories_id = m_categories.id WHERE menus.id = ?");
$statement->execute(array($id));
$menu = $statement->fetch();
Database::disconnect();

function checkInput($data) {
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
      <div class="col-md-12">
        <h1><strong>Voir un menu</strong></h1>
        
        <form class="form" role="form" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label for="m_nom">Nom:</label>
            <input type="text" class="form-control" id="m_nom" value="<?php echo $menu['m_nom']; ?>" readonly>
          </div>
          
          <div class="form-group">
            <label for="m_description">Description:</label>
            <input type="text" class="form-control" id="m_description" value="<?php echo $menu['m_description']; ?>" readonly>
          </div>
          
          <div class="form-group">
            <label for="m_prix">Prix:</label>
            <input type="text" class="form-control" id="m_prix" value="<?php echo number_format((float)$menu['m_prix'], 2, '.', '') . ' €'; ?>" readonly>
          </div>
          
          <div class="form-group">
            <label for="m_categories">Catégorie:</label>
            <input type="text" class="form-control" id="m_categories" value="<?php echo $menu['m_categories']; ?>" readonly>
          </div>
          
        </form>
        
        <div class="form-actions">
        <a class="btn btn-primary" href="liste-menu.php">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-arrow-left" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
                        </svg>
                        Retour
                    </a>
        </div>
      </div>
      
    </div>
  </div>   
</body>

<?php
include 'board-footer.html';
?>