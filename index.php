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

  <body>

    <!-- Barre de navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="./Assets/images/logo.png">
            <img
            src="./Assets/images/logo.png"
            alt="Le Quai Antique à Chambéry"
            />
            <span class="site-name pull-left">Le Quai antique</span>
          </a>
        </div>
        <a id="link" href="#"><span id="burger"></span></a>
        <div class="connexion">
          <a href="./Espace admin/login.php" class="button">Se connecter</a>
        </div>

        <ul class="nav navbar-nav navbar-right">
          <li><a href="./index.php">Accueil</a></li>
          <li><a href="./carte.php">La Carte</a></li>
          <li><a href="./A propos.php">À Propos</a></li>
        </ul>
      </div>
    </nav>

<main id="main">
  <div class="container-fluid fill">
    <div class="picture">
      <div class="img-picture">
        <h1 class="text-center">
          Restaurant Cuisine Traditionnelle Spécialités Savoyardes
        </h1>
    </div>
  </div>
</div>

<div id="home" class="template-row">
  <div class="container">
    <div class="row-accueil">
      <div class="col-md-12">
        <h2 class="text-center">
          Fondues, Pierrades, Raclettes, Grillades
        </h2>
        
        <div class="separateur"></div>
          <!-- Carousel photos des plats les + appréciés -->      
        <div class="row-accueil">
          <div class="col-md-12">
            <div
                    id="carouselExampleInterval"
                    class="carousel slide"
                    data-bs-ride="carousel"
                  >
                    <div class="carousel-inner">
                      <div class="carousel-item active" data-bs-interval="5000">
                        <img
                          src="./Assets/images/images.png"
                          title="Cassolette Savoyarde"
                          class="d-block w-100"
                          alt="..."
                        />
                      </div>
                      <div class="carousel-item" data-bs-interval="5000">
                        <img
                          src="./Assets/images/images1.png"
                          title="Tartiflette-Traditionnelle"
                          class="d-block w-100"
                          alt="..."
                        />
                      </div>
                      <div class="carousel-item" data-bs-interval="5000">
                        <img
                          src="./Assets/images/images2.png"
                          title="Raclette-traditionnelle"
                          class="d-block w-100"
                          alt="..."
                        />
                      </div>
                      <div class="carousel-item" data-bs-interval="5000">
                        <img
                          src="./Assets/images/images3.png"
                          title="Tartine Savoyarde"
                          class="d-block w-100"
                          alt="..."
                        />
                      </div>
                    </div>
                    <button
                      class="carousel-control-prev"
                      type="button"
                      data-bs-target="#carouselExampleInterval"
                      data-bs-slide="prev"
                    >
                      <span
                        class="carousel-control-prev-icon"
                        aria-hidden="true"
                      ></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button
                      class="carousel-control-next"
                      type="button"
                      data-bs-target="#carouselExampleInterval"
                      data-bs-slide="next"
                    >
                      <span
                        class="carousel-control-next-icon"
                        aria-hidden="true"
                      ></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
                  <div class="separateur"></div>

         <!-- Bouton Appel à L'action --> 

                  <div class="button-wrapper">
                      <a href="./carte.php" class="btn-reza">Voir le Menu</a>
                      <a href="./Espace admin/booking.php" class="btn-reza">Réserver</a>
                  </div> 

                  <div class="separateur"></div>
                  
          </div>
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
                  <p class="jour">Mardi</p><p class="heures">12:00 - 15:00 et 19:00 - 00:00</p>
                </div>

                <div class="semaine">
                  <p class="jour">Mercredi</p><p class="heures">12:00 - 15:00 et 19:00 - 00:00</p>
                </div>

                <div class="semaine">
                  <p class="jour">Jeudi</p><p class="heures">12:00 - 15:00 et 19:00 - 00:00</p>
                </div>

                <div class="semaine">
                  <p class="jour">Vendredi</p><p class="heures">12:00 - 15:00 et 19:00 - 00:00</p>
                </div>

                <div class="semaine">
                  <p class="jour">Samedi</p><p class="heures">12:00 - 15:00 et 19:00 - 00:00</p>
                </div>

                <div class="semaine">
                  <p class="jour">Dimanche</p><p class="heures">12:00 - 15:00 et 19:00 - 00:00</p>
                </div>

                <div class="semaine">
                  <p class="jour">Lundi</p><p class="heures">12:00 - 15:00 et 19:00 - 00:00</p>
                </div>


              </div>
            </div>
          </div>
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
    <script src="./Assets/js/script.js"></script>
      
      
      
    </body>
    
</html>
