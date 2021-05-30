<?php
require_once('config/functions.php');
$articles = getArticles();

?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" type="image/png" href="img/favicon.png">

  <title>page-de-article</title>
  <!-- Bootstrap 5.0 CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous" />
  <!-- css link -->
  <link rel="stylesheet" href="css/styles.css" />

  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

  <!-- Raleway font-->
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100&display=swap" rel="stylesheet" />
  <!-- open sans font-->
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet" />
  <!-- open sans font-->
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet" />
  <!-- open sans font-->
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link
    href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@1,300&family=Raleway:ital,wght@1,300&display=swap"
    rel="stylesheet" />
</head>

<body>
  <!-- navbar -->
  <?php include("header.php"); ?>

  <!-- Fin navbar -->

  <!-- second section -->
  <section class="section-two">
    <div class="container">
      <h1 class="main-title">Tous nos articles</h1>
    </div>

    <!-- cards -->
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
  </section>
  <br />
  <?php include("footer.php"); ?>



  <!-- Bootstrap 5.0 Js -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
    crossorigin="anonymous"></script>
</body>

</html>