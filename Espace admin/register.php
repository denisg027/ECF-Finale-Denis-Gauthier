<!-- Traitement de la déconnexion de l'utilisateur
     Redirection vers la page d'accueil après la déconnexion réussie -->

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
    
<main id="main">
<!-- form de connexion -->
<div class="form-container">
    <form action="" method="post">
    <h3>enregistrer</h3>
    
    
    <input type="text" name="lastname" required="" placeholder="Votre Nom">
    <input type="text" name="firstname" required="" placeholder="Votre Prénom">
    <input type="email" name="email" required="" placeholder="Votre Email">
    <input type="password" name="password" required="" placeholder="Votre Mot de Passe">
    <input type="password" name="cpassword" required="" placeholder="Confirmer votre Mot de Passe">
    <input type="text" name="allergies" required="" placeholder="Vos intollérances et allergies">
    <input type="submit" name="submit" value="Enregistrez-vous" class="form-btn">
    <p>Vous avez déjà un compte? <a href="./login.php">Connexion</a></p>
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
                href="./Assets/mentions-légales/mentions.html"
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