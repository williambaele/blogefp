<!-- Je vais charger mes articles -->
<?php
require_once('config/functions.php');
$articles = getArticles();

?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta name="keywords" content="blog, food, cooking, diy">
  <meta name="author" content="William Baele">
  <meta name="description" content="Learn whith William Baele how to have all needed skills to cook like a chief in few minutes">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" type="image/png" href="img/favicon.png">
  <title>Accueil</title>

  <!-- Style -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous" /> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/styles.css" />
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100&display=swap" rel="stylesheet" />
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet" />
  <style>
  </style>
</head>

<body>
  <style>

  </style>
  <!-- Header -->
  <?php include("header.php"); ?>
<!-- Fin du header-->

<!-- Début du contenu-->
  <section class="section-two">
    <div class="container">
      <h1 class="main-title new-head">NOS ARTICLES LES PLUS RÉCENTS</h1>
    </div>

    <!-- card  -->
    <div class="container hide-mob">
      <div class="row">
      <!-- début de boucle des card -->
      <div class="d-flex justify-content-around">
      <?php   $i=0;
 foreach($articles as $articles):$i++;
     if($i==4) break;?> 
     <div>
       <div class="card" style="width: 18rem">
         <div class="add-pad">
           <h3 class="card-title"><?= $articles->title ?></h3>
           <p class="card-title"><time><?= $articles->date ?> </time></br></br></p>
           <img src="img/dummy-img.png" class="card-img-top" alt="..." />
           <div class="card-body">
             <p class="card-text"> <?= mb_strimwidth("$articles->content ", 0, 300, "...");?> 
             </p>
             <div class="btn-div d-flex justify-content-center">
               <a class="btn btn-light button-purple" href="article.php?id=<?= $articles->id ?>">Lire la suite</a>
             </div>
           </div>
         </div>
         </div>
       </div>       
       <?php endforeach; ?>
          <!-- fin de boucle -->
        </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Cette section est visible sur mobile -->
  <section class="mobile-cards">
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="card" style="width: 18rem">
            <div class="add-pad">
              <h5 class="card-title">Titre article</h5>
              <img src="img/dummy-img.png" class="card-img-top" alt="..." />
              <div class="card-body">
                <p class="card-text">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Corporis aut quisquam labore vitae, hic minima temporibus
                  vero quis dolorem eveniet repellat. Recusandae nam quos
                  voluptatum assumenda
                </p>
                <div class="btn-div d-flex justify-content-center">
                  <a href="#" class="btn btn-light button-purple">Lire plus</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="card" style="width: 18rem">
            <div class="add-pad">
              <h5 class="card-title">Titre article</h5>
              <img src="img/dummy-img.png" class="card-img-top" alt="..." />
              <div class="card-body">
                <p class="card-text">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Corporis aut quisquam labore vitae, hic minima temporibus
                  vero quis dolorem eveniet repellat. Recusandae nam quos
                  voluptatum assumenda
                </p>
                <div class="btn-div d-flex justify-content-center">
                  <a href="#" class="btn btn-light button-purple">Lire plus</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="card" style="width: 18rem">
            <div class="add-pad">
              <h5 class="card-title">Titre article</h5>
              <img src="img/dummy-img.png" class="card-img-top" alt="..." />
              <div class="card-body">
                <p class="card-text">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Corporis aut quisquam labore vitae, hic minima temporibus
                  vero quis dolorem eveniet repellat. Recusandae nam quos
                  voluptatum assumenda
                </p>
                <div class="btn-div d-flex justify-content-center">
                  <a href="#" class="btn btn-light button-purple">Lire plus</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </section>
  <section class="third-section">
    <div class="container">
      <br />
      <h1 class="main-title new-head">NOS MEILLEURS CONTRIBUTEURS</h1>
    </div>
    <div class="data-holder d-flex justify-content-center">
      <div class="main-data">
        <div class="row">
          <div class="col-8">
            <ol>
              <li>Lorem, ipsum dolor.</li>
              <li>Lorem, ipsum dolor.</li>
              <li>Lorem, ipsum dolor.</li>
            </ol>
          </div>
          <div class="col-4">
            <ul style="list-style-type: none;" class="set-float">
              <li>9146</li>
              <li>2680</li>
              <li>1666</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  </section>


<!-- Footer-->
  <?php include("footer.php"); ?>
</body>
</html>