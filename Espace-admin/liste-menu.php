<?php
session_start();
include './board-head.html';
include './board-navbar.php';
require './database.php';

?>
<div class="space-list"></div>
<div class="container admin">
  <h1><span>Modification des Menus</span></h1>
  <div class="row">
    <h1><strong>Liste des Menus</strong><a href="ajout-menu.php" class="btn btn-success btn-lg"><svg
          xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus"
          viewBox="0 0 16 16">
          <path
            d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
        </svg></span>Ajouter</a></h1>
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
        $statement = $db->query('SELECT menus.id, menus.m_nom, menus.m_description, menus.m_prix, m_categories.nom AS m_categorie FROM menus LEFT JOIN m_categories ON menus.m_categories_id = m_categories.id ORDER BY menus.id DESC');
        while ($menu = $statement->fetch()) {
          echo '<tr>';
          echo '<td>' . $menu['m_nom'] . '</td>';
          echo '<td>' . $menu['m_description'] . '</td>';
          echo '<td>' . number_format($menu['m_prix'], 2, '.', '') . '</td>';
          echo '<td>' . $menu['m_categorie'] . '</td>';
          echo '<td width=300>';
          echo '<a class="btn btn-info" href="voir-menu.php?id=' . $menu['id'] . '"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
          <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
          <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
        </svg> Voir</a>';
          echo ' ';
          echo '<a class="btn btn-primary" href="modification-menu.php?id=' . $menu['id'] . '"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
            <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
          </svg></span> Modifier</a>';
          echo ' ';
          echo '<a class="btn btn-danger" href="suppression-menu.php?id=' . $menu['id'] . '"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
          <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
        </svg> Supprimer</a>';
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