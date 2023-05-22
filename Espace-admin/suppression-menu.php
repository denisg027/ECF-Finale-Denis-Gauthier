<?php
session_start();
include './board-head.html';
include './board-navbar.php';
require './database.php';
 
// Récupérer l'ID en get 
    if (!empty($_GET['id'])) {
        $id = checkInput($_GET['id']);
    }

    if (!empty($_POST)) {
        $id = checkInput($_POST['id']);
        $db = Database::connect();
        $statement = $db->prepare("DELETE FROM menus WHERE id = ?");
        $statement->execute(array($id));
        Database::disconnect();
        header("Location: list-menu.php"); 
    }

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
                <h1><strong>Supprimer un menu</strong></h1>
                <br>
                <form class="form" action="suppression-menu.php" role="form" method="post">
                    <br>
                    <input type="hidden" name="id" value="<?php echo $id;?>"/>
                    <p class="alert alert-warning">Êtes-vous sûr de vouloir supprimer le menu ?</p>
                    <div class="form-actions">
                      <button type="submit" class="btn btn-warning">Oui</button>
                      <a class="btn btn-secondary" href="liste-menu.php">Non</a>
                    </div>
                </form>
            </div>
        </div>   
    </body>
</html>

<?php
include 'board-footer.html';
?>