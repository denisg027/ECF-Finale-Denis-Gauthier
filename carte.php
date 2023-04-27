<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
  <link href="https://fonts.googleapis.com/css2?family=Parisienne&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Jim+Nightshade&display=swap" rel="stylesheet">
  <title>Le Quai Antique</title>
  <meta name="description"
    content="Le restaurant Le Quai Antique à
    Chambéry vous propose ses spécialités de la Savoie, la Tartiflette, 
    la célèbre raclette savoyarde traditionnelle ou à l’ancienne, une expérience gastromique et une cuisine sans artifice" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
  <script src="https://kit.fontawesome.com/df1c766fa7.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="./Assets/css/style.css" />

</head>
<!-- Barre de navigation -->
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand" href="./Assets/images/logo.png">
        <img src="./Assets/images/logo.png" alt="Le Quai Antique à Chambéry" />
        <span class="site-name pull-left">Le Quai antique</span>
      </a>
    </div>
    <a id="link" href="#"><span id="burger"></span></a>

    <ul class="nav navbar-nav navbar-right">
      <li><a href="./index.php">Accueil</a></li>
      <li><a href="./carte.php">La Carte</a></li>
      <li><a href="./acces.php">Accès</a></li>
    </ul>
  </div>
</nav>

<main id="main">
  <div class="container">
    <h1>Le Quai Antique, Spécialités Savoyardes. Découvrez nos Menus.</h1>
    <div class="card-header">
      <a class="btn collapsed" data-bs-toggle="collapse" href="#dropdown" role="button" aria-expanded="false"
        aria-controls="dropdown">
        NOS PLATS À EMPORTER

      </a>
      <div class="collapse" id="dropdown">
        <div class="card card-body">
          <div class="media menu-item">
            <img class="images" src="./Assets/images/Raclette-traditionnelle.png" alt="Le Quai Antique">
            <div class="media-body">
              <h2 class="mt-0">Raclette traditionnelle </h2>
              <p>Charcuteries, fromage au lait cru, pomme de terres. </p>
              <h3 class="menu-price">18 €</h3>
            </div>
          </div>
          <div class="media menu-item">
            <img class="images" src="./Assets/images/pierrade-2pers.png" alt="Le Quai Antique">
            <div class="media-body">
              <h2 class="mt-0">Pierrade au boeuf ( 2 pers )</h2>
              <p>Cœur de rumsteck, légumes à griller, sauce béarnaise, cocktail, mayonnaise, câpres cornichons, pomme de
                terre au four. </p>
              <h3 class="menu-price">36 €</h3>
            </div>
          </div>
          <div class="media menu-item">
            <img class="images" src="./Assets/images/Tartiflette-Traditionnelle.png" alt="Le Quai Antique">
            <div class="media-body">
              <h2 class="mt-0">Tartiflette Traditionnelle</h2>
              <p>Pommes de terre, lardons, reblochon, salade.</p>
              <h3 class="menu-price">18 €</h3>
            </div>
          </div>
          <div class="media menu-item">
            <img class="images" src="./Assets/images/Planche de charcuterie et fromage.png" alt="Le Quai Antique">
            <div class="media-body">
              <h2 class="mt-0">Planche de charcuterie et fromage.</h2>
              <p>Jambon blanc et sec de Savoie, saucisson, coppa, speck, reblochon, comte.</p>
              <h3 class="menu-price">16 €</h3>
            </div>
          </div>
          <div class="media menu-item">
            <img class="images" src="./Assets/images/Burger Au Reblochon.png" alt="Le Quai Antique">
            <div class="media-body">
              <h2 class="mt-0">Burger Au Reblochon.</h2>
              <p>Buns, Steack hache, Reblochon, Salade,Tomate, Oignon, Mayonnaise, Frites.</p>
              <h3 class="menu-price">12 €</h3>
            </div>
          </div>
          <div class="media menu-item">
            <img class="images" src="./Assets/images/Salade Savoyarde.png" alt="Le Quai Antique">
            <div class="media-body">
              <h2 class="mt-0">Salade Savoyarde.</h2>
              <p>Salade, Tomate, Jambon blanc et sec de Savoie, Fromage, Pomme de terre, Cerneaux de noix.</p>
              <h3 class="menu-price">9 €</h3>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="card-header">
      <a class="btn collapsed" data-bs-toggle="collapse" href="#dropdown2" role="button" aria-expanded="false"
        aria-controls="dropdown2">
        SPÉCIALITÉS

      </a>
      <div class="collapse" id="dropdown2">
        <div class="card card-body">
          <div class="media menu-item">
            <img class="images" src="./Assets/images/tartiflette.png" alt="Le Quai Antique">
            <div class="media-body">
              <h2 class="mt-0">Tartiflette traditionnelle.</h2>
              <p>Lardons, pomme de terre, reblochon, crème fraîche, vin blanc.</p>
              <h3 class="menu-price">13 €</h3>
            </div>
          </div>
          <div class="media menu-item">
            <img class="images" src="./Assets/images/Burger-le-savoyard.png" alt="Le Quai Antique">
            <div class="media-body">
              <h2 class="mt-0">Le burger du Savoyard.</h2>
              <p>Pains burger, Jambon cru de Savoie, Steack haché pur boeuf, Salade verte, tomate, accompagné de Röstis.
              </p>
              <h3 class="menu-price">19 €</h3>
            </div>
          </div>
          <div class="media menu-item">
            <img class="images" src="./Assets/images/reblochonade.png" alt="Le Quai Antique">
            <div class="media-body">
              <h2 class="mt-0">La Reblochonnade.</h2>
              <p>Reblochon, pomme de terre, charcuterie.</p>
              <h3 class="menu-price">19.80 €</h3>
            </div>
          </div>
          <div class="media menu-item">
            <img class="images" src="./Assets/images/fondue.png" alt="Le Quai Antique">
            <div class="media-body">
              <h2 class="mt-0">Fondue Savoyarde.</h2>
              <p>Vin blanc, 3 fromages (Comté, Beaufort, Emmental).</p>
              <h3 class="menu-price">13 €</h3>
            </div>
          </div>
          <div class="media menu-item">
            <img class="images" src="./Assets/images/La-Fribourgeoise.png" alt="Le Quai Antique">
            <div class="media-body">
              <h2 class="mt-0">Fondue Fribourgeoise (4 personnes).</h2>
              <p>1/2 Vacherin Fribourgeois AOP, 1/2 Gruyère Suisse AOP 1é mois d'affinage, crème fraîche, vin blanc.</p>
              <h3 class="menu-price">36 €</h3>
            </div>
          </div>
          <div class="media menu-item">
            <img class="images" src="./Assets/images/raclette-2pers.png" alt="Le Quai Antique">
            <div class="media-body">
              <h2 class="mt-0">Raclette (2 personnes).</h2>
              <p>Fromage, charcuterie, pommes de terre.</p>
              <h3 class="menu-price">36 €</h3>
            </div>
          </div>
          <div class="media menu-item">
            <img class="images" src="./Assets/images/fondue-bourguignonne.png" alt="Le Quai Antique">
            <div class="media-body">
              <h2 class="mt-0">Fondue Bourguignonne huile ( Tournesol ).</h2>
              <p>Rumsteck, 3 sauces (Béarnaise, cocktail, Tartare), pomme noisette et légumes.</p>
              <h3 class="menu-price">13 €</h3>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="card-header">
      <a class="btn collapsed" data-bs-toggle="collapse" href="#dropdown3" role="button" aria-expanded="false"
        aria-controls="dropdown3">
        MENUS

      </a>
      <div class="collapse" id="dropdown3">
        <div class="card card-body">
          <div class="media menu-item">
              <h4>MENU AU CHOIX</h4>
              <p class="plats">Entrée + Plat + Dessert</p>
              <p class="prix">33.50 €</p>
              <p class="plats">Entrée + Plat ou Plats + Dessert</p>
              <p class="prix">28.00 €</p>
              
          </div>
          <div class="media menu-item">
              <h4>NOS FORMULES DU SAVOYARD</h4>
              <h5 class="menu">Servie uniquement le midi, hors <br> week-end et jour férié</h5>
              <h4>FORMULE 3 PLATS</h4>
              <p class="plats">Entrée + Plat + Dessert</p>
              <p class="prix">19.00 €</p>
              <h4>FORMULE 2 PLATS</h4>
              <p class="plats">Entrée + Plat ou Plats + Dessert</p>
              <p class="prix">16.50 €</p>
              <h4>PLAT DU JOUR</h4>
              <p class="plats">Consulter nos ardoises du jour</p>
              <p class="prix">14.00 €</p>
              
          </div>

          <div class="media menu-item">
              <h4>MENU ENFANT</h4>
              <h4 class="menu">Un menu pour les enfants de moins de 10 ans – 11 €</h4>
              <h5 class="menu">PLATS</h5>
              <p class="plats">Steack Haché</p>
              <h6>ou</h6>
              <p class="plats">Mini tartiflette</p>
              <h6>ou</h6>
              <p class="plats">Poisson du jour</p>
              <h6>ou</h6>
              <p class="plats">Assiette de raclette</p>
              <h5 class="menu">DESSERT</h5>
              <p class="plats">Assiette gourmande</p>
              <h6>ou</h6>
              <p class="plats">Glace artisanale 2 boules</p>
              
          </div>
        </div>
      </div>
    </div>
    <div class="card-header">
      <a class="btn collapsed" data-bs-toggle="collapse" href="#dropdown4" role="button" aria-expanded="false"
        aria-controls="dropdown4">
        ENTRÉES

      </a>
      <div class="collapse" id="dropdown4">
        <div class="card card-body">
          <div class="media menu-item">
            <img class="images" src="./Assets/images/salade-savoyarde.png" alt="Le Quai Antique">
            <div class="media-body">
              <h2 class="mt-0">Salade Savoyarde.</h2>
              <p>Salade, dés de jambon, tomates, noix, olives, fromage.</p>
              <h3 class="menu-price">8 €</h3>
            </div>
          </div>
          <div class="media menu-item">
            <img class="images" src="./Assets/images/salade-tremplin.png" alt="Le Quai Antique">
            <div class="media-body">
              <h2 class="mt-0">Grande Salade Tremplin.</h2>
              <p>Salade, jambon cru, lardon, oeuf poché, chèvre chaud.</p>
              <h3 class="menu-price">12 €</h3>
            </div>
          </div>
          <div class="media menu-item">
            <img class="images" src="./Assets/images/salade-nicoise.png" alt="Le Quai Antique">
            <div class="media-body">
              <h2 class="mt-0">Salade Niçoise.</h2>
              <p>Salade, oeuf dur, haricots verts, pommes vapeur, tomate, thon, anchois, poivron, olives.</p>
              <h3 class="menu-price">9.50 €</h3>
            </div>
          </div>
          <div class="media menu-item">
            <img class="images" src="./Assets/images/salade_paysanne.png" alt="Le Quai Antique">
            <div class="media-body">
              <h2 class="mt-0">Salade paysanne.</h2>
              <p>Salade, lardons, pommes de terres, oeufs pochés, croûtons.</p>
              <h3 class="menu-price">9.50 €</h3>
            </div>
          </div>
          <div class="media menu-item">
            <img class="images" src="./Assets/images/salade de chèvre.png" alt="Le Quai Antique">
            <div class="media-body">
              <h2 class="mt-0">Salade Crottin chaud.</h2>
              <p>Salade, crottin de chèvre, noix, tomates.</p>
              <h3 class="menu-price">9.50 €</h3>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="card-header">
      <a class="btn collapsed" data-bs-toggle="collapse" href="#dropdown5" role="button" aria-expanded="false"
        aria-controls="dropdown5">
        PLATS

      </a>
      <div class="collapse" id="dropdown5">
        <div class="card card-body">
          <div class="media menu-item">
            <img class="images" src="./Assets/images/pave-de-boeuf-grille.png" alt="Le Quai Antique">
            <div class="media-body">
              <h2 class="mt-0">Pavé de Boeuf grillé.</h2>
              <p>Boeuf pur Charolais, Frite pommes Pont-Neuf, (Sauce au choix : 3 poivre, échalotte, champignons).</p>
              <h3 class="menu-price">18 €</h3>
            </div>
          </div>
          <div class="media menu-item">
            <img class="images" src="./Assets/images/andouillettes-au-four.png" alt="Le Quai Antique">
            <div class="media-body">
              <h2 class="mt-0">Andouillette grillée au four.</h2>
              <p>Andouillette grillée au four aux oignons accompagnées de Frites pommes Pont-Neuf.</p>
              <h3 class="menu-price">15 €</h3>
            </div>
          </div>
          <div class="media menu-item">
            <img class="images" src="./Assets/images/entrecote-grillee.png" alt="Le Quai Antique">
            <div class="media-body">
              <h2 class="mt-0">Entrecôte grillée.</h2>
              <p>Entrecôte grillée, Frite pommes Pont-Neuf, (Sauce au choix : 3 poivre, échalotte, champignons).</p>
              <h3 class="menu-price">18 €</h3>
            </div>
          </div>
          <div class="media menu-item">
            <img class="images" src="./Assets/images/magret-de-canard.png" alt="Le Quai Antique">
            <div class="media-body">
              <h2 class="mt-0">Magret de canard au MIEL ET 4 EPICES.</h2>
              <p>Magret de carnanrd parfumé au miel et 4 épices (cannelle, gingembre, girofle, muscade).</p>
              <h3 class="menu-price">22 €</h3>
            </div>
          </div>
          <div class="media menu-item">
            <img class="images" src="./Assets/images/escalope-sauce-normande.png" alt="Le Quai Antique">
            <div class="media-body">
              <h2 class="mt-0">Escalope de volaille normande.</h2>
              <p>Escalope de volaille sauce normande (Crème et champignons), Frite Pont-Neuf.</p>
              <h3 class="menu-price">18 €</h3>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="card-header">
      <a class="btn collapsed" data-bs-toggle="collapse" href="#dropdown6" role="button" aria-expanded="false"
        aria-controls="dropdown6">
        DESSERTS

      </a>
      <div class="collapse" id="dropdown6">
        <div class="card card-body">
          <div class="media menu-item">
            <img class="images" src="./Assets/images/tiramisu-maison.png" alt="Le Quai Antique">
            <div class="media-body">
              <h2 class="mt-0">Tiramisu aux biscuits Savoyard.</h2>
              <p>Biscuits Savoyard, Cacao Amer, Café, Mascarpone.</p>
              <h3 class="menu-price">8.90 €</h3>
            </div>
          </div>
          <div class="media menu-item">
            <img class="images" src="./Assets/images/Coupe-2boules.png" alt="Le Quai Antique">
            <div class="media-body">
              <h2 class="mt-0">Coupe 2 boules.</h2>
              <p>2 boules de Glace au choix</p>
              <h3 class="menu-price">4.20 €</h3>
            </div>
          </div>
          <div class="media menu-item">
            <img class="images" src="./Assets/images/Coupe-3boules.png" alt="Le Quai Antique">
            <div class="media-body">
              <h2 class="mt-0">Coupe 3 boules.</h2>
              <p>3 boules de Glace au choix</p>
              <h3 class="menu-price">5.50 €</h3>
            </div>
          </div>
          <div class="media menu-item">
            <img class="images" src="./Assets/images/cafe-liegeois.png" alt="Le Quai Antique">
            <div class="media-body">
              <h2 class="mt-0">Café, Chocolat ou Caramel Liégeois.</h2>
              <p>Une dose de café de qualité accompagné d'un assortiment de glaces au café, chocolat ou au caramel
                traditionnelle, accompagné de napage au chocolat et d'une crème fouettée légère.</p>
              <h3 class="menu-price">6.90 €</h3>
            </div>
          </div>
          <div class="media menu-item">
            <img class="images" src="./Assets/images/Coupe-Dame-blanche.png" alt="Le Quai Antique">
            <div class="media-body">
              <h2 class="mt-0">Dame Blanche.</h2>
              <p>Crème glacée vanille arrosée de chocolat noir fondu, agrémentée de meringues et de copeaux de chocolat,
                et de crème chantilly.</p>
              <h3 class="menu-price">6.90 €</h3>
            </div>
          </div>
          <div class="media menu-item">
            <img class="images" src="./Assets/images/Coupe-Claudic.png" alt="Le Quai Antique">
            <div class="media-body">
              <h2 class="mt-0">Coupe Claudic.</h2>
              <p>Sorbet plein fruit passion, champagne*.</p>
              <h3 class="menu-price">7.90 €</h3>
            </div>
          </div>
          <div class="media menu-item">
            <img class="images" src="./Assets/images/Royal-Poire.png" alt="Le Quai Antique">
            <div class="media-body">
              <h2 class="mt-0">Royal Poire.</h2>
              <p>Sorbet poire avec alcool de poire*.</p>
              <h3 class="menu-price">7.90 €</h3>
            </div>
          </div>
          <div class="media menu-item">
            <img class="images" src="./Assets/images/Iceberg.png" alt="Le Quai Antique">
            <div class="media-body">
              <h2 class="mt-0">Iceberg.</h2>
              <p>Glace chocolat noir et menthe avec Get 27*.</p>
              <h3 class="menu-price">7.90 €</h3>
            </div>
          </div>
          <div class="media menu-item">
            <img class="images" src="./Assets/images/coco-choco.png" alt="Le Quai Antique">
            <div class="media-body">
              <h2 class="mt-0">Coco Choco.</h2>
              <p>Sorbet Citron vert, orange.</p>
              <h3 class="menu-price">6.90 €</h3>
            </div>
          </div>
          <div class="media menu-item">
            <img class="images" src="./Assets/images/Agrume-addic.png" alt="Le Quai Antique">
            <div class="media-body">
              <h2 class="mt-0">Agrum' Addict.</h2>
              <p>2 boules de Glace au choix</p>
              <h3 class="menu-price">6.90 €</h3>
            </div>
          </div>
          <div class="media menu-item">
            <img class="images" src="./Assets/images/virgin-pina.png" alt="Le Quai Antique">
            <div class="media-body">
              <h2 class="mt-0">Virgin Pina.</h2>
              <p>Noix de coco, ananas ou rhum raisin, rhum*</p>
              <h3 class="menu-price">6.90 €</h3>
            </div>
          </div>
          <div class="media menu-item">
            <img class="images" src="./Assets/images/ananas-rotis.png" alt="Le Quai Antique">
            <div class="media-body">
              <h2 class="mt-0">Ananas rôtis en croute de coco et crème rhum raisin.</h2>
              <p>2 boules de Glace au choix</p>
              <h3 class="menu-price">7.90 €</h3>
            </div>
          </div>
          <div class="media menu-item">
            <img class="images" src="./Assets/images/creme-brulee-vanille.png" alt="Le Quai Antique">
            <div class="media-body">
              <h2 class="mt-0">Crème Brûlée.</h2>
              <p>Crème brûlée à la vanille et sa gousse</p>
              <h3 class="menu-price">5.90 €</h3>
            </div>
          </div>
          <div class="media menu-item">
            <img class="images" src="./Assets/images/ile-flottante.png" alt="Le Quai Antique">
            <div class="media-body">
              <h2 class="mt-0">Île flottante.</h2>
              <p>Île flottante à la vanille avec sa crème anglaise onctueuse.</p>
              <h3 class="menu-price">5.90 €</h3>
            </div>
          </div>
          <div class="media menu-item">
            <img class="images" src="./Assets/images/moelleux-au-chocolat.png" alt="Le Quai Antique">
            <div class="media-body">
              <h2 class="mt-0">Moelleux au chocolat.</h2>
              <p>Moelleux au chocolat au couer fondant.</p>
              <h3 class="menu-price">6.90 €</h3>
            </div>
          </div>
          <div class="media menu-item">
            <img class="images" src="./Assets/images/tarte-fine-pommes-vergeoise.png" alt="Le Quai Antique">
            <div class="media-body">
              <h2 class="mt-0">Tarte fine chaude.</h2>
              <p>Tarte fine aux pommes chaudes caramélisées et sa boule de glace vanille.</p>
              <h3 class="menu-price">6.90 €</h3>
            </div>
          </div>
          <div class="media menu-item">
            <img class="images" src="./Assets/images/gateau-mont-blanc.png" alt="Le Quai Antique">
            <div class="media-body">
              <h2 class="mt-0">Gâteau Mont-Blanc.</h2>
              <p>Un dessert gourmand typique de Savoie.</p>
              <h3 class="menu-price">7.80 €</h3>
            </div>
          </div>
          <div class="media menu-item">
            <img class="images" src="./Assets/images/fondue-au-chocolat.png" alt="Le Quai Antique">
            <div class="media-body">
              <h2 class="mt-0">La fondue au chocolat.</h2>
              <p>Pour le plaisir des papilles des petits comme des grands la fondue au chocolat.</p>
              <h3 class="menu-price">7.90 €</h3>
            </div>
          </div>
          <div class="media menu-item">
            <img class="images" src="./Assets/images/mousse-chocolat.png" alt="Le Quai Antique">
            <div class="media-body">
              <h2 class="mt-0">Mousse au chocolat.</h2>
              <p>Coupe mousse chocolat rocher</p>
              <h3 class="menu-price">6.90 €</h3>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="card-header">
      <a class="btn collapsed" data-bs-toggle="collapse" href="#dropdown7" role="button" aria-expanded="false"
        aria-controls="dropdown7">
        BOISSONS

      </a>
      <div class="collapse" id="dropdown7">
        <div class="card card-body">
          <div class="media menu-item">
            <img class="imagesBV" src="./Assets/images/genepi.png" alt="Le Quai Antique">
            <div class="media-body">
              <h2 class="mt-0">La liqueur de génépi.</h2>
              <p>C’est la star des liqueurs des Alpes ! En Savoie, la liqueur de génépi est un alcool très populaire.
                Elle est fabriquée à base de génépi, une petite plante aromatique de couleur jaune que l’on retrouve
                dans les Alpes entre 1500 et 3000 mètres d’altitudes.

                La liqueur de génépi se déguste aussi bien à l’apéritif qu’en digestif, avec ou sans glace. Elle est
                également très utilisée pour la réalisation de cocktails ou de desserts. Selon la recette et la variété
                de génépi, la liqueur peut être verte, blanche ou jaune, avec un degré d’alcool entre 20 et 40°.</p>
              <h3 class="menu-price">22 €</h3>
            </div>
          </div>
          <div class="media menu-item">
            <img class="imagesBV" src="./Assets/images/liqueur-edelweis.png" alt="Le Quai Antique">
            <div class="media-body">
              <h2 class="mt-0">Liqueur Edelweiss Bella 20CL.</h2>
              <p>L’Edelweiss ou Étoile des Glaciers est une plante rare qui pousse en altitude entre 1300 et 3000m.</p>
              <h3 class="menu-price">18 €</h3>
            </div>
          </div>
          <div class="media menu-item">
            <img class="imagesBV" src="./Assets/images/les-chevres-des-alpes.png" alt="Le Quai Antique">
            <div class="media-body">
              <h2 class="mt-0">La boisson Mythique des Savoyards !</h2>
              <p>La Chèvre est une boisson mythique des Alpes dont l’origine reste inconnue. Elle est traditionnellement
                élaborée à l’automne, dans le secret des caves, où elle fermente dans des fûts renforcés (la pression
                peut atteindre 15 bars).

                Les recettes se transmettent dans les familles, avec comme ingrédients communs du vin blanc bourru ou du
                cidre nouveau, de l’alcool et du sucre.</p>
              <h3 class="menu-price">20 €</h3>
            </div>
          </div>
          <div class="media menu-item">
            <img class="imagesBV" src="./Assets/images/kir-vin-blanc.png" alt="Le Quai Antique">
            <div class="media-body">
              <h2 class="mt-0">Kir.</h2>
              <p>Kir vin blanc 12 cl (Mûre, pêche, cassis, framboise, fraise des bois).</p>
              <h3 class="menu-price">3.80 €</h3>
            </div>
          </div>
          <div class="media menu-item">
            <img class="imagesBV" src="./Assets/images/kir-royale.png" alt="Le Quai Antique">
            <div class="media-body">
              <h2 class="mt-0">Kir Royal.</h2>
              <p>Kir royal champagne 12 cl (Mûre, pêche, cassis, framboise, fraise des bois).</p>
              <h3 class="menu-price">6.90 €</h3>
            </div>
          </div>
          <div class="media menu-item">
            <img class="imagesBV" src="./Assets/images/Verre-de-Ricard.png" alt="Le Quai Antique">
            <div class="media-body">
              <h2 class="mt-0">Ricard.</h2>
              <p>Verre de Ricard 2cl.</p>
              <h3 class="menu-price">4.50 €</h3>
            </div>
          </div>
          <div class="media menu-item">
            <img class="imagesBV" src="./Assets/images/flute-champagne.png" alt="Le Quai Antique">
            <div class="media-body">
              <h2 class="mt-0">La Coupe de Champagne.</h2>
              <p>Flute de Champagne 12cl.</p>
              <h3 class="menu-price">8 €</h3>
            </div>
          </div>
          <div class="media menu-item">
            <img class="imagesBV" src="./Assets/images/Whisky.png" alt="Le Quai Antique">
            <div class="media-body">
              <h2 class="mt-0">Whisky.</h2>
              <p>Verre de Whisky 4cl.</p>
              <h3 class="menu-price">5.80 €</h3>
            </div>
          </div>
          <div class="media menu-item">
            <img class="imagesBV" src="./Assets/images/Whisky-vielli-en-fut-de-chene.png" alt="Le Quai Antique">
            <div class="media-body">
              <h2 class="mt-0">Whisky vielli en fût de Chêne.</h2>
              <p>Verre de Whisky 4cl.</p>
              <h3 class="menu-price">12.80 €</h3>
            </div>
          </div>
          <div class="media menu-item">
            <img class="imagesBV" src="./Assets/images/Malibu-Orange-ou-Ananas.png" alt="Le Quai Antique">
            <div class="media-body">
              <h2 class="mt-0">Malibu Orange ou Ananas.</h2>
              <p>Malibu Orange ou Ananas 20cl.</p>
              <h3 class="menu-price">6.00 €</h3>
            </div>
          </div>
          <div class="media menu-item">
            <img class="imagesBV" src="./Assets/images/Coktail-jus-de-fruits.png" alt="Le Quai Antique">
            <div class="media-body">
              <h2 class="mt-0">Le Cocktail de Jus de Fruits.</h2>
              <p>Coktail de jus de fruits frais maison.</p>
              <h3 class="menu-price">8 €</h3>
            </div>
          </div>
          <div class="media menu-item">
            <img class="imagesBV" src="./Assets/images/jus-de-fruits-bio.png" alt="Le Quai Antique">
            <div class="media-body">
              <h2 class="mt-0">Jus de Fruits et Sodas.</h2>
              <p>Jus de fruits Bio 20cl (Orange, Ananas, Abricot, Tomate, Pamplemousse, Coca-Cola, Perrier, Orangina,
                Schweppes).</p>
              <h3 class="menu-price">8 €</h3>
            </div>
          </div>
          <div class="media menu-item">
            <img class="imagesBV" src="./Assets/images/blanche-du-mont-blanc.png" alt="Le Quai Antique">
            <div class="media-body">
              <h2 class="mt-0">Bière Du Savoyard Pression ou bouteille (25cl).</h2>
              <p>Bière blanche Savoyarde du Mont-Blanc.</p>
              <h3 class="menu-price">4.90 €</h3>
            </div>
          </div>
          <div class="media menu-item">
            <img class="imagesBV" src="./Assets/images/Bière-savoyarde-blonde.png" alt="Le Quai Antique">
            <div class="media-body">
              <h2 class="mt-0">Bière Du Savoyard Pression ou bouteille (75cl).</h2>
              <p>Bière Savoyarde Blonde.</p>
              <h3 class="menu-price">12 €</h3>
            </div>
          </div>
          <div class="media menu-item">
            <img class="imageBV" src="./Assets/images/café.png" alt="Le Quai Antique">
            <div class="media-body">
              <h2 class="mt-0">Café.</h2>
              <p>Café expresso.</p>
              <h3 class="menu-price">2 €</h3>
            </div>
          </div>
          <div class="media menu-item">
            <img class="imagesBV" src="./Assets/images/décaféiné.png" alt="Le Quai Antique">
            <div class="media-body">
              <h2 class="mt-0">Décaféiné.</h2>
              <p>Décaféiné.</p>
              <h3 class="menu-price">2 €</h3>
            </div>
          </div>
          <div class="media menu-item">
            <img class="imagesBV" src="./Assets/images/thé-ou-infusion.png" alt="Le Quai Antique">
            <div class="media-body">
              <h2 class="mt-0">Thé ou Infusion.</h2>
              <p>Gamme de thé ou infusion (noir, vert etc...).</p>
              <h3 class="menu-price">2.70 €</h3>
            </div>
          </div>
          <div class="media menu-item">
            <img class="imagesBV" src="./Assets/images/cappuccino.png" alt="Le Quai Antique">
            <div class="media-body">
              <h2 class="mt-0">Cappuccino.</h2>
              <p>Vrai recette du Cappuccino onctueux.</p>
              <h3 class="menu-price">3.20 €</h3>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="card-header">
      <a class="btn collapsed" data-bs-toggle="collapse" href="#dropdown8" role="button" aria-expanded="false"
        aria-controls="dropdown8">
        VINS

      </a>
      <div class="collapse" id="dropdown8">
        <div class="card card-body">
          <div class="media menu-item">
            <img class="imagesBV" src="./Assets/images/roussette-de-savoie-altesse-blanc-2021.png"
              alt="Le Quai Antique">
            <div class="media-body">
              <h2 class="mt-0">Roussette de Savoie Altesse 2021.</h2>
              <p>Nez fin aux arômes d'aubépine et de fleur d'acacia. La bouche est fraîche, sur des notes de citron
                confit. La finale est marquée par une belle minéralité et une jolie salinité.</p>
              <h3 class="menu-price">25 €</h3>
            </div>
          </div>
          <div class="media menu-item">
            <img class="imagesBV" src="./Assets/images/vin-de-savoie-apremont-blanc-2022.png" alt="Le Quai Antique">
            <div class="media-body">
              <h2 class="mt-0">Vin de Savoie Apremont 2022.</h2>
              <p>Frais et tonique, ce Vin de Savoie Apremont est le vin parfait pour un apéritif entre amis ! Ses notes
                citronnées et sa minéralité sauront réveiller vos papilles !</p>
              <h3 class="menu-price">18 €</h3>
            </div>
          </div>
          <div class="media menu-item">
            <img class="imagesBV" src="./Assets/images/vin-de-savoie-chignin-blanc-2022.png" alt="Le Quai Antique">
            <div class="media-body">
              <h2 class="mt-0">Vin de Savoie Chignin 2022.</h2>
              <p>Un savoureux mélange de fleurs blanches, de fruits secs et d'agrumes. La bouche est tendue et aérienne,
                avec une finale douce et juteuse. Idéal en accompagnement de fruits de mer, de raclette ou de fondue
                savoyarde !.</p>
              <h3 class="menu-price">20 €</h3>
            </div>
          </div>
          <div class="media menu-item">
            <img class="imagesBV" src="./Assets/images/vin-de-savoie-rosez-moi-rose-2022.png" alt="Le Quai Antique">
            <div class="media-body">
              <h2 class="mt-0">Vin de Savoie R'Osez moi 2022.</h2>
              <p>Beaucoup de gourmandise avec au nez des notes de groseille et de pamplemousse, une bouche croquante aux
                arômes de petits fruits rouges et une belle vivacité finale.</p>
              <h3 class="menu-price">28 €</h3>
            </div>
          </div>
          <div class="media menu-item">
            <img class="imagesBV" src="./Assets/images/vin-de-savoie-arbin-mondeuse-avalanche-rouge-2021.png"
              alt="Le Quai Antique">
            <div class="media-body">
              <h2 class="mt-0">Vin de Savoie Arbin Mondeuse Avalanche 2021.</h2>
              <p>Rares sont les Mondeuse de Savoie à atteindre un tel niveau de qualité ! Le nez est marqué par des
                notes de fruits noirs, d'épices et de torréfaction. La bouche est fraîche en attaque, bien structurée en
                finale, avec une belle longueur aromatique marquée par les fruits frais comme la myrtille et la
                groseille.</p>
              <h3 class="menu-price">28 €</h3>
            </div>
          </div>
          <div class="media menu-item">
            <img class="imagesBV" src="./Assets/images/vin-de-savoie-gamay-rouge-2022.png" alt="Le Quai Antique">
            <div class="media-body">
              <h2 class="mt-0">Vin de Savoie Gamay 2022.</h2>
              <p>Le bouquet est expressif et constitué de fruits rouges avec une bouche agréable, fruitée et bien
                équilibrée. Ce Gamay de Savoie se mariera très bien avec un feuilleté de filet mignon ou des viandes
                rouges.</p>
              <h3 class="menu-price">16 €</h3>
            </div>
          </div>
          <div class="media menu-item">
            <img class="imagesBV" src="./Assets/images/vin-de-savoie-mondeuse-rouge-2021.png" alt="Le Quai Antique">
            <div class="media-body">
              <h2 class="mt-0">Vin de Savoie Mondeuse 2021.</h2>
              <p>L'expression arômatique du cépage Mondeuse est superbe : poivre noir, myrtille et violette. La bouche
                est dans cette lignée, à la fois épicée et fruitée. Elle présente une structure souple et une acidité
                maîtrisée qui mettent en avant le côté croquant des petits fruits rouges.</p>
              <h3 class="menu-price">18 €</h3>
            </div>
          </div>
          <div class="media menu-item">
            <img class="imagesBV" src="./Assets/images/vin-de-savoie-arbin-mondeuse-rouge-2020.png"
              alt="Le Quai Antique">
            <div class="media-body">
              <h2 class="mt-0">Vin de Savoie Arbin Mondeuse 2020.</h2>
              <p>Issue des plus beaux terroirs d'Arbin aux sols bruns argilo calcaires ferrugineux, cette cuvée dévoile
                des arômes gourmands de framboise, griotte et myrtille. La bouche offre une belle structure sérieuse et
                une finale élégante épicée et florale (pivoine).</p>
              <h3 class="menu-price">15.80 €</h3>
            </div>
          </div>
          <div class="media menu-item">
            <img class="imagesBV" src="./Assets/images/vin-de-savoie-pinot-noir-la-bigarel-rouge-2020.png"
              alt="Le Quai Antique">
            <div class="media-body">
              <h2 class="mt-0">Vin de Savoie Pinot Noir La Bigarel 2020.</h2>
              <p>Un vin friand aux notes boisées et épicées qui dévoile en bouche un savoureux mélange de notes de café,
                de réglisse et de cerise. La structure souple et enveloppante contribue à cette sensation de plaisir
                gourmand !</p>
              <h3 class="menu-price">12.80 €</h3>
            </div>
          </div>
          <div class="media menu-item">
            <img class="imagesBV" src="./Assets/images/vin-des-allobroges-methode-traditionnelle-bul--magnum-blanc.png"
              alt="Le Quai Antique">
            <div class="media-body">
              <h2 class="mt-0">Vin des Allobroges Méthode Traditionnelle Bul' MAGNUM.</h2>
              <p>Bul' est un vin Mousseux de Qualité élaboré selon la Méthode Traditionnelle : un vin plaisir aux arômes
                fruités de poire et de pamplemousse, avec une bouche gourmande, souple et flatteuse.</p>
              <h3 class="menu-price">29.00 €</h3>
            </div>
          </div>
          <div class="media menu-item">
            <img class="imagesBV" src="./Assets/images/champagne-cuvee-prestige-brut-blanc.png" alt="Le Quai Antique">
            <div class="media-body">
              <h2 class="mt-0">Champagne Cuvée Prestige Brut.</h2>
              <p>Puissant et complexe, le nez de ce Champagne laisse apparaître la belle évolution du Pinot Noir et du
                Chardonnay assemblés. Les notes vont de la brioche aux fruits noirs mûrs. Généreux et riche en bouche ce
                Champagne charpenté laisse apparaître des notes à la fois épicées et de fruits compotés.</p>
              <h3 class="menu-price">38 €</h3>
            </div>
          </div>
          <div class="media menu-item">
            <img class="imagesBV" src="./Assets/images/champagne-barons-de-rothschild-brut-blanc.png"
              alt="Le Quai Antique">
            <div class="media-body">
              <h2 class="mt-0">Champagne Special Cuvée Brut - Barons de Rothschild.</h2>
              <p>Un grand Champagne présentant une belle précision aromatique avec des notes de pâte d'amande, de fleurs
                blanches et de poire William. La bouche est ronde, avec un léger dosage qui apporte beaucoup de
                gourmandise en fin de bouche. La bulle est fine et assure une belle fraîcheur globale. Le Champagne Brut
                Barons de Rotschild sera idéal à l'apéritif et accompagnera parfaitement un dessert fruité.</p>
              <h3 class="menu-price">59 €</h3>
            </div>
          </div>
          <div class="media menu-item">
            <img class="imagesBV" src="./Assets/images/champagne-brut-tradition-blanc.png" alt="Le Quai Antique">
            <div class="media-body">
              <h2 class="mt-0">Champagne Brut tradition.</h2>
              <p>Ce Champagne à la robe or pâle saura vous séduire lors de vos repas festifs ! Elaboré à base de Pinot
                Noir, de Chardonnay et de Pinot Meunier, il révèle de belles notes fruitées de mandarine, de citron et
                de groseille. Quelques arômes briochés subliment l’ensemble. En bouche l'attaque est vive et fraîche, la
                finale est douce et onctueuse. L’effervescence est fine et délicate. Un Champagne d’une grande élégance
                !</p>
              <h3 class="menu-price">45 €</h3>
            </div>
          </div>
          <div class="media menu-item">
            <img class="imagesBV" src="./Assets/images/champagne-rose-brut-rose.png" alt="Le Quai Antique">
            <div class="media-body">
              <h2 class="mt-0">Champagne Rosé Brut.</h2>
              <p>Robe rose rubis intense à l'exquise brillance. Une effervescence délicate et somptueuse aux bulles
                généreuses et vives oscillant entre gourmandise et fraîcheur. Un bouquet fruité composé de groseilles,
                fraises et cassis s'harmonise avec la puissance et la structure de ce Champagne Rosé à la finale longue
                et finement acidulée.</p>
              <h3 class="menu-price">69 €</h3>
            </div>
          </div>
          <div class="media menu-item">
            <img class="imagesBV" src="./Assets/images/champagne-rose-lux-brut - bouteille-lumineuse.png"
              alt="Le Quai Antique">
            <div class="media-body">
              <h2 class="mt-0">Champagne Rosé Lux Brut - Bouteille lumineuse.</h2>
              <p>Une bouteille exceptionnelle qui illumine grâce à sa Led intégrée ! La robe rose rubis brillante
                témoigne de son excellence. Généreuses et vives, les bulles offrent un côté frai et gourmand. Un bouquet
                de petits fruits rouges au nez dominé par la groseille, la fraise et le cassis. Cette cuvée est
                parfaitement équilibrée offrant une puissance et une structure digne des plus grands Champagnes.</p>
              <h3 class="menu-price">102 €</h3>
            </div>
          </div>
          <div class="media menu-item">
            <img class="imagesBV" src="./Assets/images/champagne-le-rose-rose - champagne-lanson.png"
              alt="Le Quai Antique">
            <div class="media-body">
              <h2 class="mt-0">Champagne Le Rosé Brut.</h2>
              <p>La robe est d'un joli rose saumoné avec de fines bulles. Les arômes de rose, de fleurs séchées et de
                fruits rouges viennent agrémenter le nez et l'attaque en bouche est tendre mais avec une belle longueur.
              </p>
              <h3 class="menu-price">49 €</h3>
            </div>
          </div>
          <div class="media menu-item">
            <img class="imagesBV" src="./Assets/images/champagne-premier-cru-brut-rose.png" alt="Le Quai Antique">
            <div class="media-body">
              <h2 class="mt-0">Champagne Premier Cru Brut Rosé.</h2>
              <p>Une cuvée alliant intensité et délicatesse, élaborée à partir d'un assemblage de Pinot Noir, de
                Chardonnay et de vin rouge des Coteaux Champenois. Pour apprécier toutes les saveurs de cette
                association originale nous recommandons de le servir avec un plat de saumon ou un dessert fruité.</p>
              <h3 class="menu-price">59 €</h3>
            </div>
          </div>

        </div>
      </div>
    </div>
    <div class="card-header">
      <a class="btn collapsed" data-bs-toggle="collapse" href="#dropdown9" role="button" aria-expanded="false"
        aria-controls="dropdown9">
        ALLERGÈNES

      </a>
      <div class="collapse" id="dropdown9">
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

    <h5>* L'abus d'alcool est dangereux pour la santé, <br>à consommer avec modération

    </h5>
  </div>

  <div class="row-accueil">
    <div class="col-md-12">
      <div id="blocks">
        <div class="col-md-4">
          <div id="decouvrez" class="item-block">
            <h4 class="text-center">Découvrez Chambéry</h4>
            <div class="text-center">
              <iframe width="95%" height="240" src="https://www.youtube.com/embed/I-NiMEej4mg"
                title="Bienvenue à chambery" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen>
              </iframe>
            </div>
          </div>
          <div id="horaires" class="item-block">
            <h4 class="text-center">Horaires d'ouverture et de fermetures</h4>
            <div class="text-center">
              <div class="semaine">
                <p class="jour">Mardi</p>
                <p class="heures">12:00 - 15:00 et 19:00 - 00:00</p>
              </div>

              <div class="semaine">
                <p class="jour">Mercredi</p>
                <p class="heures">12:00 - 15:00 et 19:00 - 00:00</p>
              </div>

              <div class="semaine">
                <p class="jour">Jeudi</p>
                <p class="heures">12:00 - 15:00 et 19:00 - 00:00</p>
              </div>

              <div class="semaine">
                <p class="jour">Vendredi</p>
                <p class="heures">12:00 - 15:00 et 19:00 - 00:00</p>
              </div>

              <div class="semaine">
                <p class="jour">Samedi</p>
                <p class="heures">12:00 - 15:00 et 19:00 - 00:00</p>
              </div>

              <div class="semaine">
                <p class="jour">Dimanche</p>
                <p class="heures">12:00 - 15:00 et 19:00 - 00:00</p>
              </div>

              <div class="semaine">
                <p class="jour">Lundi</p>
                <p class="heures">12:00 - 15:00 et 19:00 - 00:00</p>
              </div>


            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</main>

<!-- Pied de page -->
<div id="footer" class="text-center">
  <div class="container">
    <div class="row-accueil">
      <div class="col-md-6">
        <div id="block-left">
          <p class="text-left">
            Restaurant Le Quai Antique<br />
            32, rue Jean Baptiste Lavisse 73000 Chambéry<br />
            Tél. 04 79 60 20 00<br />
            Ouvert midi et soir fermé le dimanche et le lundi
          </p>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div id="block-right">
        <p class="text-right">
          Propulsé par
          <a href="https://www.retz-o-lution-informatique.fr/"
            target="_blank"><strong>Retz-o-lution-informatique</strong></a>
          <br /><a href="./Assets/mentions-légales/mentions.html">Mentions légales</a>
          |
          <a href="https://savoyard.fr/cookies/">A propos des Cookies</a>
        </p>
      </div>
    </div>
  </div>
</div>






<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> -->
<script src="./Assets/js/script.js"></script>




</body>

</html>