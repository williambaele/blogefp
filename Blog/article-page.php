<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" type="image/png" href="img/favicon.png">

  <title>Page article</title>
  <!-- Bootstrap  -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous" />
  <link rel="stylesheet" href="css/styles.css" />
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <!-- Raleway font-->
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100&display=swap" rel="stylesheet" />
  <!-- open sans font-->
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet" />
</head>

<body>
  <!-- Navbar -->
  <?php include("header.php"); ?>

  <!-- Navbar end -->
  <section class="section-first">
    <div class="text-center">
      <h5 class="category">Catégorie</h5>
      <h1 class="title">Title</h1>
      <h6><b>Auteur</b> - 22 avril 2021</h6>
      <br />
      <div class="blog-img-holder">
        <img src="img/dummy-img.png" class="img-fluid article-image" />
      </div>
      <br />
      <br />
      <div class="center-div container d-flex justify-content-center">
        <p class="text-content">
          Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ex, modi
          nisi? Magnam dignissimos nihil, molestias quia, atque earum fugiat
          veritatis illo ipsa a inventore odit? Blanditiis, consequatur soluta!
          Repellat quibusdam placeat delectus velit voluptatum, quos nemo harum!
          Rerum ad omnis odio exercitationem quam iste nulla, quia enim delectus
          iure animi distinctio quas fugit doloremque, quos amet et? Eum, illo
          quos! Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo
          aliquam ipsam perferendis? Fuga, quae. Nesciunt fuga consectetur,
          deleniti iusto nemo quibusdam tempore fugiat, aperiam laboriosam saepe
          accusamus velit ipsum, alias enim natus! In magni ea sapiente minus
          adipisci odio deleniti nisi, atque possimus reiciendis exercitationem
          dignissimos id nulla iure aliquam debitis corrupti iusto quasi? Quos
          totam quisquam quis libero provident. quos! Lorem ipsum dolor sit amet
          consectetur adipisicing elit. Nemo aliquam ipsam perferendis? Fuga,
          quae. Nesciunt fuga consectetur, deleniti iusto nemo quibusdam tempore
          fugiat, aperiam laboriosam saepe accusamus velit ipsum, alias enim
          natus! In magni ea sapiente minus adipisci odio deleniti nisi, atque
          possimus reiciendis exercitationem dignissimos id nulla iure aliquam
          debitis corrupti iusto quasi? Quos totam quisquam quis libero
          provident.
        </p>
      </div>

    </div>
  </section>

  <?php include("footer.php"); ?>


  <!-- bootstrap Js -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
    crossorigin="anonymous"></script>
</body>

</html>