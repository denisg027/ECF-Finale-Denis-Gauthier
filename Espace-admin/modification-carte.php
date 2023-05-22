<?php
session_start();
include './board-head.html';
include './board-navbar.php';
require './database.php';
?>

<div class="container admin">
  <h1><span>Modification des plats de la carte</span></h1>
  <div class="row">
    <h1><strong>Liste des plats</strong><a href="ajout-carte.php" class="btn btn-success btn-lg"><svg
          xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus"
          viewBox="0 0 16 16">
          <path
            d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
        </svg></span> Ajouter</a></h1>
    <table class="table table-striped table-bordered">
      <thead>
        <tr>
          <th>Nom</th>
          <th>Description</th>
          <th>Prix</th>
          <th>Catégorie</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $db = Database::connect();
        $statement = $db->query('SELECT plats.id, plats.nom, plats.description, plats.prix, p_categories.nom AS p_categories FROM plats LEFT JOIN p_categories ON plats.p_categories = p_categories.id ORDER BY plats.id DESC');
        while ($item = $statement->fetch()) {
          echo '<tr>';
          echo '<td>' . $item['nom'] . '</td>';
          echo '<td>' . $item['description'] . '</td>';
          echo '<td>' . number_format($item['prix'], 2, '.', '') . '</td>';
          echo '<td>' . $item['p_categories'] . '</td>';
          echo '<td width=300>';
          echo '<a class="btn btn-default" href="view.php?id=' . $item['id'] . '"><span class="glyphicon glyphicon-eye-open"></span> Voir</a>';
          echo ' ';
          echo '<a class="btn btn-primary" href="update.php?id=' . $item['id'] . '"><span class="glyphicon glyphicon-pencil"></span> Modifier</a>';
          echo ' ';
          echo '<a class="btn btn-danger" href="delete.php?id=' . $item['id'] . '"><span class="glyphicon glyphicon-remove"></span> Supprimer</a>';
          echo '</td>';
          echo '</tr>';
        }
        Database::disconnect();
        ?>
      </tbody>
    </table>
  </div>
</div>



<?php
include 'board-footer.html';
?>