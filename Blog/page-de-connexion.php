<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" type="image/png" href="img/favicon.png">

  <title>connexion</title>
  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous" />
  <!-- Bootstrap  -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous" />
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="css/styles.css">
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

  <!-- navbar -->
  <?php include("header.php"); ?>

  <!-- Fin navbar -->

  <br>

  <section class="text-center ">
    <h5 class="connexion">Connexion</h5>
  </section>
  <br>
  <br>
  <div class="container-fluid text-center second-cont connexion-container set-height">
    <form>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputusername">Adresse mail</label>
          <input type="username" class="form-control" id="inputusername">
        </div>
        <div class="form-group col-md-6">
          <label for="inputPassword4">Mot de passe</label>
          <input type="password" class="form-control" id="inputPassword4">
        </div>
      </div>
      <div class="d-flex justify-content-center">
        <button class="button button-purple d-flex justify-content-center" type="submit" id="btn">Je me
          connecte</button>
      </div>
      <div class="forget-psw">
        <a href="#">J'ai oublié mon mot de passe</a>
      </div>
      <br>
  </div>
  </form>
  <br>
  <br>
  <?php include("footer.php"); ?>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
    crossorigin="anonymous"></script>
</body>

</html>