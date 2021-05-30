<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" type="image/png" href="img/favicon.png">

  <title>formulaire-article</title>
  <!-- Bootstrap -->
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
  <br />
  <br />
  <!-- Section-first -->

  <section class="first-section">
    <h2 class="text-center">Ajout d'un article</h2>
    <br>
    <label for="formGroupExampleInput" class="form-label">Nom de votre article</label>
    <div class="form-floating mb-3 set-mob">
      <input type="text" class="form-control text-input" id="floatingInput" />
    </div>
    <label for="formGroupExampleInput" class="form-label">Contenu de votre article</label>
    <div class="form-floating">
      <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2"
        style="height: 200px"></textarea>
    </div>
    <br />
    <label for="formGroupExampleInput" class="form-label">Image de votre article
    </label>
    <div class="form-floating mb-3 set-mob ">

      <div>
        <input type="file" class="form-control file-input " id="floatingInput" />
      </div>
    </div>
    <div class="d-flex justify-content-center">
      <button class="button button-purple d-flex justify-content-center" type="submit" id="btn">
        Je publie
      </button>
    </div>
  </section>


  <?php include("footer.php"); ?>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
    crossorigin="anonymous"></script>
</body>

</html>