<!doctype html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
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

<body>
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
  <main role="main" class="container">