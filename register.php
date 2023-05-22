<!-- Formulaire d'enregistrement de l'utilisateur 
     Redirection vers la page de profil utilisateur-->

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

$error="";
if(!empty($_POST)){
  if(isset($_POST["firstname"], $_POST["lastname"], $_POST["email"], $_POST["password"], $_POST["cpassword"], $_POST["allergies"])
  && !empty($_POST["firstname"]) && !empty($_POST["lastname"]) && !empty($_POST["email"]) && !empty($_POST["password"]) && !empty($_POST["cpassword"])
  && !empty($_POST["allergies"])) 
  {

  // strip_tags — Supprime les balises HTML et PHP d'une chaîne
      $firstname = strip_tags($_POST["firstname"]);
      $lastname  = strip_tags($_POST["lastname"]);
      $email     = $_POST["email"];
      if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
    $error="L'adresse e-mail est incorrecte";
      }
      // hash du mot de passe
      $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
      $cpassword = password_hash($_POST["cpassword"], PASSWORD_DEFAULT);
      $allergies = $_POST["allergies"];
  
  //Vérification si l'e-mail existe
  $sql ="SELECT email FROM users WHERE email=:email";
  $query= $pdo -> prepare($sql);
  $query-> bindParam(':email', $email, PDO::PARAM_STR);
  $query-> execute();
  $results = $query -> fetchAll(PDO::FETCH_OBJ);
  $cnt=1;

  if($query -> rowCount() > 0)
  {
  echo "<span style='color:red'>Cette adresse e-mail existe déjà !</span>";
   $error="Cette adresse e-mail existe déjà !";
  }else{
    // insertion de l'utilisateur dans la base de données en utilisant des requêtes préparées pour éviter les injections SQL
    $sql = "INSERT INTO users (firstname, lastname, email, password, cpassword, allergies, role) VALUES (:firstname, :lastname, :email, :password, :cpassword, :allergies, 'user')";

    $query = $pdo->prepare($sql);
    $query->bindParam(":firstname", $firstname, PDO::PARAM_STR);
    $query->bindParam(":lastname", $lastname, PDO::PARAM_STR);
    $query->bindParam(":email", $email, PDO::PARAM_STR);
    $query->bindParam(":password", $password, PDO::PARAM_STR);
    $query->bindParam(":cpassword", $cpassword, PDO::PARAM_STR);
    $query->bindParam(":allergies", $allergies, PDO::PARAM_STR);
    $query->execute();
    
  //récupérer l'ID de l'utilisateur créé
  $user_id = $pdo->lastInsertId();

  //session
  
      $_SESSION["users"] = [
        "id"        => $user_id,
        "firstname" => $_POST["firstname"],
        "lastname"  => $_POST['lastname'],
        "email"     => $_POST["email"],
        "allergies" =>$_POST["allergies"],
        // "role"      => "user"
      ];
      
      header("Location: profil.php");
    }
  
  }
}

?>

<body>
    
<main id="main">
<!-- formulaire d'enregistrement -->
<div class="form-container">
    <form action="" method="post">
    <h3>S'inscrire</h3>
    
    <label for="name">Prénom</label>
    <input type="text" name="firstname" required="" placeholder="Votre Prénom">
    <label for="name">Nom</label>
    <input type="text" name="lastname" required="" placeholder="Votre Nom">
    <label for="email">Email</label>
    <input type="email" name="email" required="" placeholder="Votre Email">
    <label for="password">Mot de passe</label>
    <input type="password" name="password" required="" placeholder="Votre Mot de Passe">
    <label for="password">Confirmer votre mot de passe</label>
    <input type="password" name="cpassword" required="" placeholder="Confirmer votre Mot de Passe">
    <!-- <label for="role">Rôle : </label>
    <select id="role" name="role">
      <option value="user">Utilisateur</option>
      <option value="admin">Administrateur</option>
    </select> -->
    <label for="allergies">Allergies</label>
                <select class="form-select" name="allergies" id="allergies" required>
                <option value="1">Aucune</option>
                <option value="2">Gluten</option>
                <option value="3">Oeufs</option>
                <option value="4">Lait</option>
                <option value="5">Arachides</option>
                <option value="6">Fruits à coques</option>
                <option value="7">Crustacés / Poissons</option>
                <option value="8">Autres</option>
            </select>
    <input type="submit" name="submit" value="Enregistrez-vous" class="form-btn">
    <p>Vous avez déjà un compte? <a href="./login.php">Connexion</a></p>
    </form>

</div>
    
    
</main>
</body>

</html>
 
<?php
include './Assets/includes/footer.html';
?>
                  
