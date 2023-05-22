<?php
// session_start();
include 'Assets/includes/head.html';
include 'Assets/includes/navbar.php';


?>

  
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
                      <a href="./booking.php" class="btn-reza">Réserver</a>
                  </div> 

                  <div class="separateur"></div>
                  
          </div>
        </div>
             
              
        <div class="row-accueil">
      <div class="col-md-12">
        <div id="blocks">
          <div class="col-md-4">
            <div id="decouvrez" class="item-block">
              <h4 class="text-center">DÉCOUVREZ CHAMBÉRY</h4>
              <div class="text-center">
                <iframe width="95%" height="240" src="https://www.youtube.com/embed/I-NiMEej4mg"
                  title="Bienvenue à chambery" frameborder="0"
                  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                  allowfullscreen>
                </iframe>
              </div>
            </div>
            <div id="horaires" class="item-block">
              <h4 class="text-center">HORAIRES D'OUVERTURES ET DE FERMETURES</h4>
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
                  <p class="jour">Dimanche</p><p class="heures">12:00 - 15:00  et FERMÉ</p>
                </div>

                <div class="semaine">
                  <p class="jour">Lundi</p><p class="heures">FERMÉ</p>
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
                
<?php
include './Assets/includes/footer.html';
?>               