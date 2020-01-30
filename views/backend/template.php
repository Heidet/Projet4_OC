<!doctype html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Blog Jean Forteroche, écrivain">
  <meta name="generator" content="Jekyll v3.8.6">
  <title>Starter Template · Bootstrap</title>

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>
</head>

    <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
        <!-- <i class="fa fa-biking"></i> -->
        <div class="container-fluid">
          <i class="fa fa-book"></i>
          <a class="navbar-brand pl-3" href="#">Jean Forteroche</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="/index.php">Accueil <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/contact.php">Contact</a>
              </li>
          </div>
          <form class="form-inline navbar-form navbar-right" action="administration.php" method="POST">
            <!-- <div class="form-group pr-1">
            <input name="login" type="text" id="login" placeholder="Identifiant" class="form-control">
          </div>
          <div class="form-group">
            <input type="password" name="pass" id="pass" placeholder="Mot de passe" class="form-control">
          </div>-->
            <button type="submit" class="btn btn-success">Connexion</button>
          </form>
        </div>
    </nav>

      <div class="container-fluid">
          <form class="pt-5" method="post">
              <div class="input-group mb-3">
                  <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1">Titre du Billet</span>
                  </div>
                  <input type="text" name="title" placeholder="Titre" aria-label="Username" aria-describedby="basic-addon1" />
              </div>

              <br />
              <textarea name="content" placeholder="Contenu" rows="5" cols="64"></textarea>
              <br />
              <button type="submit" class="btn btn-success">Ajouter</button>
          </form>
      </div>
  

<body>
<?php //echo date('d/m/Y h:i:s'); ?>
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>tinymce.init({ selector: 'textarea' });</script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
  