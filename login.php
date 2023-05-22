<!-- Formulaire de connection de l'utilisateur ou de l'administrateur
     Redirection vers la page de profil pour l'utilisateur et la page board (tableau de bord) pour l'administrateur -->

<?php
session_start();
include 'Assets/includes/head.html';
include 'Assets/includes/navbar.php';
require './espace-admin/database.php';

$pdo = Database::connect(); // Etablissement de la connexion à la base de données via la variable de l'objet PDO (classe PHP pour intéragir avec la BDD)

if ($pdo) {
  echo "Connexion réussie à la base de données";
} else {
  echo "Échec de la connexion à la base de données";
}

$error = "";
if (!empty($_POST)) {
    if (isset($_POST["email"], $_POST["password"]) && !empty($_POST['email']) && !empty($_POST["password"])) {
        if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
            $error = "Email non valide";
        }else{
            $email = $_POST["email"];
            $password = $_POST["password"];

            if ($email === 'denis.gauthier@retz-o-lution-informatique.fr') {
                $sql = "SELECT * FROM users WHERE email = :email AND role = 'admin'";
                $query = $pdo->prepare($sql);
                $query->bindValue(":email", $email, PDO::PARAM_STR);
                $query->execute();
                $admin = $query->fetch();

                if (!$admin || !password_verify($password, $admin["password"]) || strlen($password) < 8) {
                    $error = "Mauvais login ou mot de passe !";
                } else {
                    $_SESSION["role"] = "admin"; // Définition du rôle Administrateur
                    header("Location: Espace-admin/board.php");
                    exit();
                }
            }else{
              $sql = "SELECT * FROM users WHERE email = :email";
              $query = $pdo->prepare($sql);
              $query->bindvalue(":email", $_POST["email"], PDO::PARAM_STR);
              $query->execute();
              $user = $query->fetch();
          
              if (!$user || !password_verify($_POST["password"], $user["password"]) || strlen($_POST['password']) < 8) {
                  $error = "Mauvais login ou mot de passe!";
              } else {
                  $user_id = $user["id"];
                  $_SESSION["users"] = [
                      "id"        => $user_id,
                      "firstname" => $user["firstname"],
                      "lastname"  => $user['lastname'],
                      "email"     => $_POST["email"],
                      "allergies" => $user["allergies"],
                  ];
                  header("Location: profil.php");
                  exit();
              }
          }
        }
      }
    }


?>


<body>

    
<!-- formulaire de connexion -->
<main id="main">
<div class="form-container">
    <form action="login.php" method="post">
    <h3>Se connecter</h3>

    
    <input type="email" name="email" required="" placeholder="Votre Email">
    <input type="password" name="password" required="" placeholder="Votre Mot de Passe">
    <input type="submit" name="submit" value="Se connecter" class="form-btn">
    <p>Vous n'avez pas de compte ? <a href="./register.php">S'enregistrer</a></p>
    </form>

</div>
    
</main>

                  
 
</body>

</html>

<?php
include './Assets/includes/footer.html';
?>



