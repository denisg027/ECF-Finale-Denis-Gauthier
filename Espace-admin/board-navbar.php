<?php
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}

// Vérifier si l'utilisateur est connecté
if (isset($_SESSION["users"])) {
    $firstname = $_SESSION["users"]["firstname"];
    $lastname = $_SESSION["users"]["lastname"];
    $loggedIn = true;

    // Vérifier si l'utilisateur est un administrateur
    if ($_SESSION["users"]["role"] === "admin") {
        $isAdmin = true;
    } else {
        $isAdmin = false;
    }
} else {
    $loggedIn = false;
    $isAdmin = false;
}

// // Vérification si l'administrateur est connecté
// if ($_SESSION["role"] === "admin") {
//   echo "L'administrateur est connecté.";
// } else {
//   echo "L'administrateur n'est pas connecté.";
// }


?>


<!-- Barre de navigation -->
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand" href="../index.php">
        <img
        src="../Assets/images/logo-admin.png"
        alt="Le Quai Antique à Chambéry"
        />
        <span class="site-name pull-left">Le Quai antique</span>
      </a>
    </div>
    <a id="link" href="#"><span id="burger"></span></a>
    
    
    <ul class="nav navbar-nav navbar-right">
      <li><a href="board.php">Accueil administration</a></li>
      <!-- Administrateur connecté -->
      <li><a href="#">Bienvenue, Administrateur</a></li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Carte
        </a>
        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
          <li><a href="ajout-carte.php">Ajouter un plat</a></li>
          <li>
            <hr class="dropdown-divider">
          </li>
          <li><a href="modification-carte.php">Modifier un plat</a></li>
          <li>
            <hr class="dropdown-divider">
          </li>
          <li><a href="suppression-carte.php">Supprimer un plat</a></li>
        </ul>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Menus
        </a>
        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
          <li><a href="liste-menu.php">Liste des menus</a></li>
          <li>
            <hr class="dropdown-divider">
          </li>
          <li><a href="ajout-menu.php">Ajouter un menu</a></li>
          <li>
            <hr class="dropdown-divider">
          </li>
          <li><a href="modification-menu.php">Modifier un menu</a></li>
          <li>
            <hr class="dropdown-divider">
          </li>
          <li><a href="suppression-menu.php">Supprimer un menu</a></li>
        </ul>
      </li>
      <li><a href="a-propos.php">À Propos</a></li>
<!-- Afficher le nom et prénom de l'administrateur s'il est connecté -->
<?php if (isset($_SESSION["users"])): ?>
      <!-- Utilisateur connecté -->
      <li>Bienvenue, <?php echo $_SESSION["users"]["firstname"]; ?></li>
      <li><a href="../logout.php">Se déconnecter</a></li>
    <?php elseif (isset($_SESSION["role"]) && $_SESSION["role"] === "admin"): ?>
      <li><a href="../logout.php">Se déconnecter</a></li>
    <?php else: ?>
      <!-- Utilisateur non connecté -->
      <li><a href="../login.php">Se connecter</a></li>
      
    <?php endif; ?>
      </ul>
    </div>
  </nav>