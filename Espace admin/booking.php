<!DOCTYPE html>
<html lang="fr"><head>
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
  <link rel="stylesheet" href="../Assets/css/style.css" />
 
</head>

<body>
<!-- Barre de navigation -->
<nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="../Assets/images/logo.png">
            <img
            src="../Assets/images/logo.png"
            alt="Le Quai Antique à Chambéry"
            />
            <span class="site-name pull-left">Le Quai antique</span>
          </a>
        </div>
        <a id="link" href="#"><span id="burger"></span></a>
   
        <ul class="nav navbar-nav navbar-right">
          <li><a href="../index.php">Accueil</a></li>
          <li><a href="../carte.php">La Carte</a></li>
          <li><a href="../acces.php">Accès</a></li>
        </ul>
      </div>
</nav>




<!-- Réservation -->
<main id="main">
    <div class="book-container">
        <form name="booking" action="" method="POST">
            <h3 class="form-title">Réserver</h3>
            
                <div class="form-group-left">
                    <label for="name">Prénom</label>
                    <input type="text" id="firstName" name="name" required autocomplete="name">
                </div>
                <div class="form-group-right">
                    <label for="name">Nom</label>
                    <input type="text" id="lastName" name="name" required autocomplete="name">
                </div>
                <div class="form-group-left">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required autocomplete="email">
                </div>
                <div class="form-group-right">
                    <label for="guestNumber">Nombre de Convives</label>
                    <input type="number" id="guestNumber" name="seats" min="1" max="20" required>
                </div>
                <div class="form-group-left">
                    <label for="date">Date</label>
                    <input type="date" id="date" name="res_date" required>
                </div>
                <div class="form-group-right">
                    <label for="time">Heures</label>
                    <input type="time" id="time" name="res_time" value="12:00" required>
                </div>
                <div class="form-group-full">
                    <label for="note">Allergies</label>
                    <textarea name="allergies" id="note" rows="4" autocomplete="Allergies"></textarea>
                </div>
                <div>
                <button type="submit" class="btn-reza">Réserver</button>
                </div>
            
        </form>
    </div>
</main>


<!-- Pied de page -->
<div id="footer" class="text-center">
      <div class="container">
        <div class="row-accueil">
          <div class="col-md-6">
            <div id="block-left" >
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
            <div id="block-right" >
              <p class="text-right">
                Propulsé par 
                <a href="https://www.retz-o-lution-informatique.fr/" target="_blank"
                ><strong>Retz-o-lution-informatique</strong></a
                >
                <br /><a
                href="../Assets/mentions-légales/mentions.html"
                >Mentions légales</a
                >
                |
                <a href="#"
                >A propos des Cookies</a
                >
              </p> 
            </div> 
          </div>
      </div>
    </div>            
                  
                  
                  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"
      integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg=="
      crossorigin="anonymous"
    ></script>
    <script src="../Assets/js/script.js"></script>


</body>

</html>