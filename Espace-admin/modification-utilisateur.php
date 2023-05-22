<?php
session_start();
include 'board-head.html';
include 'board-navbar.php';
require 'database.php';


// Vérification si l'utilisateur est connecté et est un administrateur

if(!isset($_SESSION['user']) || $_SESSION['user']['role'] != 'admin') {
  header("Location: index.php"); // Rediriger vers la page d'accueil si l'utilisateur n'est pas connecté ou n'est pas un administrateur
  exit();
}


// Vérification si un ID utilisateur a été envoyé en paramètre GET
if(!isset($_GET['id'])) {
  header("Location: users.php"); // Rediriger vers la liste des utilisateurs si aucun ID utilisateur n'a été fourni
  exit();
}

// Récupération de l'ID de l'utilisateur à modifier
$id = $_GET['id'];

// Vérification si l'utilisateur à modifier existe
$sql = "SELECT * FROM users WHERE user_id = :id";
$query = $pdo->prepare($sql);
$query->bindParam(':id', $id, PDO::PARAM_INT);
$query->execute();

$user = $query->fetch(PDO::FETCH_ASSOC);

if(!$user) {
  header("Location: users.php"); // Rediriger vers la liste des utilisateurs si l'utilisateur à modifier n'existe pas
  exit();
}

// Vérification si le formulaire a été soumis
if(isset($_POST['submit'])) {
  // Validation des données du formulaire
  $role = $_POST['role'];

  // Vérification si le rôle est valide
  $allowed_roles = array('user', 'admin');
  if(!in_array($role, $allowed_roles)) {
    $error = "Le rôle sélectionné n'est pas valide.";
  } else {
    // Mise à jour du rôle de l'utilisateur dans la base de données
    $sql = "UPDATE users SET role = :role WHERE user_id = :id";
    $query = $pdo->prepare($sql);
    $query->bindParam(':id', $id, PDO::PARAM_INT);
    $query->bindParam(':role', $role, PDO::PARAM_STR);
    $query->execute();

    header("Location: users.php"); // Rediriger vers la liste des utilisateurs après la mise à jour réussie
    exit();
  }
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Modifier le profil d'un utilisateur</title>
</head>
<body>
  <h1>Modifier le profil d'un utilisateur</h1>
  
  <?php if(isset($error)): ?>
    <div style="color: red;"><?php echo $error; ?></div>
  <?php endif; ?>
  
  <form method="POST">
    <label for="role">Rôle:</label>
    <select id="role" name="role">
      <option value="user" <?php if($user['role'] == 'user') echo 'selected'; ?>>Utilisateur</option>
      <option value="admin" <?php if($user['role'] == 'admin') echo 'selected'; ?>>Administrateur</option>
    </select>
    
    <br><br>
    
    <button type="submit" name="submit">Enregistrer</button>
  </form>
</body>
</html>

   
<?php
include 'board-footer.html';
?>

