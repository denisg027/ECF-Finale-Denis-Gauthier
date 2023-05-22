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


?>

<main id="main">
  <div class="container">
    <h1>Le Quai Antique, Spécialités Savoyardes. Découvrez nos Menus.</h1>
    <div class="card-header">
      <a class="btn collapsed" data-bs-toggle="collapse" href="#dropdown" role="button" aria-expanded="false"
        aria-controls="dropdown">
        <!-- Menu -->
        <!-- Exécution de la requête pour récupérer les menus -->
        <?php
        $query = "SELECT * FROM menus";
        $statement = $pdo->query($query);
        $menus = $statement->fetchAll(PDO::FETCH_ASSOC); ?>
        MENUS

      </a>
      <div class="collapse" id="dropdown">
        <div class="card card-body">
          <h3>NOS MENUS ET FORMULES DU SAVOYARD</h3>
          <?php foreach ($menus as $menu): ?>
            <div class="media menu-item">
              <p class="plats">
                <?php echo $menu['m_nom']; ?>
              </p>
              <p>
              <?php echo $menu['m_description']; ?>
              </p>
              <p class="prix">
                <?php echo $menu['m_prix']; ?> €
              </p>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
    <div class="card-header">
      <a class="btn collapsed" data-bs-toggle="collapse" href="#dropdown1" role="button" aria-expanded="false"
        aria-controls="dropdown1">
        <!-- Carte : les Entrées -->
        <!-- Exécution de la requête pour récupérer les entrées -->
        <?php
        $query = "SELECT * FROM entrees";
        $statement = $pdo->query($query);
        $entrees = $statement->fetchAll(PDO::FETCH_ASSOC); ?>
        ENTRÉES
      </a>
      <div class="collapse" id="dropdown1">
        <div class="card card-body">
          <?php foreach ($entrees as $entree): ?>
            <div class="media menu-item">
            <img class="images" src="../Assets/images/<?php echo $entree['photos']; ?>" alt="Le Quai Antique">
              <div class="media-body">
                <h2 class="mt-0">
                  <?php echo $entree['nom']; ?>
                </h2>
                <p>
                  <?php echo $entree['description']; ?>
                </p>
                <h3 class="menu-price">
                  <?php echo $entree['prix']; ?> €
                </h3>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
    <div class="card-header">
      <a class="btn collapsed" data-bs-toggle="collapse" href="#dropdown2" role="button" aria-expanded="false"
        aria-controls="dropdown2">
        PLATS
        <!-- Carte : les Plats -->
        <!-- Exécution de la requête pour récupérer les plats des cartes -->
        <?php
        $query = "SELECT * FROM plats";
        $statement = $pdo->query($query);
        $plats = $statement->fetchAll(PDO::FETCH_ASSOC); ?>
      </a>
      <div class="collapse" id="dropdown2">
        <div class="card card-body">
          <?php foreach ($plats as $plat): ?>
            <div class="media menu-item">
              <img class="images" src="../Assets/images/<?php echo $plat['photos']; ?>" alt="Le Quai Antique">
              <div class="media-body">
                <h2 class="mt-0">
                  <?php echo $plat['nom']; ?>
                </h2>
                <p>
                  <?php echo $plat['description']; ?>
                </p>
                <h3 class="menu-price">
                  <?php echo $plat['prix']; ?> €
                </h3>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
    <div class="card-header">
      <a class="btn collapsed" data-bs-toggle="collapse" href="#dropdown3" role="button" aria-expanded="false"
        aria-controls="dropdown3">
        DESSERTS
        <!-- Carte : les Desserts -->
        <!-- Exécution de la requête pour récupérer les Desserts -->
        <?php
        $query = "SELECT * FROM desserts";
        $statement = $pdo->query($query);
        $desserts = $statement->fetchAll(PDO::FETCH_ASSOC); ?>
      </a>
      <div class="collapse" id="dropdown3">
        <div class="card card-body">
          <?php foreach ($desserts as $dessert): ?>
            <div class="media menu-item">
              <img class="images" src="../Assets/images/<?php echo $dessert['photos']; ?>" alt="Le Quai Antique">
              <div class="media-body">
                <h2 class="mt-0">
                  <?php echo $dessert['nom']; ?>
                </h2>
                <p>
                  <?php echo $dessert['description']; ?>
                </p>
                <h3 class="menu-price">
                  <?php echo $dessert['prix']; ?> €
                </h3>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
    <div class="card-header">
      <a class="btn collapsed" data-bs-toggle="collapse" href="#dropdown4" role="button" aria-expanded="false"
        aria-controls="dropdown4">
        <!-- Carte : les plats à emporter -->
        <!-- Exécution de la requête pour récupérer les plats à emporter  -->
        <?php
        $query = "SELECT * FROM plats_emporter";
        $statement = $pdo->query($query);
        $plats_emporter = $statement->fetchAll(PDO::FETCH_ASSOC); ?>
        NOS PLATS À EMPORTER
      </a>
      <div class="collapse" id="dropdown4">
        <div class="card card-body">
          <?php foreach ($plats_emporter as $platEmporter): ?>
            <div class="media menu-item">
              <img class="images" src="../Assets/images/<?php echo $platEmporter['photos']; ?>" alt="Le Quai Antique">
              <div class="media-body">
                <h2 class="mt-0">
                  <?php echo $platEmporter['nom']; ?>
                </h2>
                <p>
                  <?php echo $platEmporter['description']; ?>
                </p>
                <h3 class="menu-price">
                  <?php echo $platEmporter['prix']; ?> €
                </h3>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
    <div class="card-header">
      <a class="btn collapsed" data-bs-toggle="collapse" href="#dropdown5" role="button" aria-expanded="false"
        aria-controls="dropdown5">
        SPÉCIALITÉS
        <!-- Carte : les Spécialités -->
        <!-- Exécution de la requête pour récupérer les spécialités -->
        <?php
        $query = "SELECT * FROM specialites";
        $statement = $pdo->query($query);
        $specialites = $statement->fetchAll(PDO::FETCH_ASSOC); ?>
      </a>
      <div class="collapse" id="dropdown5">
        <div class="card card-body">
          <?php foreach ($specialites as $specialite): ?>
            <div class="media menu-item">
              <img class="images" src="../Assets/images/<?php echo $specialite['photos']; ?>" alt="Le Quai Antique">
              <div class="media-body">
                <h2 class="mt-0">
                  <?php echo $specialite['nom']; ?>
                </h2>
                <p>
                  <?php echo $specialite['description']; ?>
                </p>
                <h3 class="menu-price">
                  <?php echo $specialite['prix']; ?> €
                </h3>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
    <div class="card-header">
      <a class="btn collapsed" data-bs-toggle="collapse" href="#dropdown6" role="button" aria-expanded="false"
        aria-controls="dropdown6">
        BOISSONS
        <!-- Carte : les Boissons -->
        <!-- Exécution de la requête pour récupérer les Boissons -->
        <?php
        $query = "SELECT * FROM boissons";
        $statement = $pdo->query($query);
        $boissons = $statement->fetchAll(PDO::FETCH_ASSOC); ?>
      </a>
      <div class="collapse" id="dropdown6">
        <div class="card card-body">
          <?php foreach ($boissons as $boisson): ?>
            <div class="media menu-item">
              <img class="images" src="../Assets/images/<?php echo $boisson['photos']; ?>" alt="Le Quai Antique">
              <div class="media-body">
                <h2 class="mt-0">
                  <?php echo $boisson['nom']; ?>
                </h2>
                <p>
                  <?php echo $boisson['description']; ?>
                </p>
                <h3 class="menu-price">
                  <?php echo $boisson['prix']; ?> €
                </h3>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
    <div class="card-header">
      <a class="btn collapsed" data-bs-toggle="collapse" href="#dropdown7" role="button" aria-expanded="false"
        aria-controls="dropdown7">
        VINS
        <!-- Carte : les Vins -->
        <!-- Exécution de la requête pour récupérer les Vins -->
        <?php
        $query = "SELECT * FROM vins";
        $statement = $pdo->query($query);
        $vins = $statement->fetchAll(PDO::FETCH_ASSOC); ?>
      </a>
      <div class="collapse" id="dropdown7">
        <div class="card card-body">
          <?php foreach ($vins as $vin): ?>
            <div class="media menu-item">
              <img class="images" src="../Assets/images/<?php echo $vin['photos']; ?>" alt="Le Quai Antique">
              <div class="media-body">
                <h2 class="mt-0">
                  <?php echo $vin['nom']; ?>
                </h2>
                <p>
                  <?php echo $vin['description']; ?>
                </p>
                <h3 class="menu-price">
                  <?php echo $vin['prix']; ?> €
                </h3>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
    <div class="card-header">
      <a class="btn collapsed" data-bs-toggle="collapse" href="#dropdown8" role="button" aria-expanded="false"
        aria-controls="dropdown8">
        ALLERGÈNES

      </a>
      <div class="collapse" id="dropdown8">
        <div class="card card-body">
          <div class="media menu-item">
            <p><a href="./Assets/images/tableau-allergenes-le-quai-antique.pdf" target="_blank">
                <h4>VOIR LE TABLEAU DES ALLERGÈNES</h4>
              </a></p>
          </div>
        </div>
      </div>
    </div>

    <h4>PRIX NETS - SERVICE COMPRIS</h4>

    <h5>* L'abus d'alcool est dangereux pour la santé, <br>à consommer avec modération</h5>

  </div>
</main>

<?php
include './Assets/includes/footer.html';
?>