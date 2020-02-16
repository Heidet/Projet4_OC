<!doctype html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Blog Jean Forteroche, écrivain">
  <meta name="generator" content="Jekyll v3.8.6">
  <title>Starter Template · Bootstrap</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link href="public/css/app.css" rel="stylesheet">

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
          <a class="navbar-brand pl-3" href="index.php">Jean Forteroche</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="index.php">Accueil <span class="sr-only">(current)</span></a>
              </li>
          </div>
          <?php if(isset($_SESSION['Logged']) && $_SESSION['Logged'] =  true){ ?>
            <a href="index.php?action=deconnexion" class="btn btn-danger">Deconnexion</a>
            <a href="index.php?action=adminPanel" class="btn btn-info">Dashboard</a>
          <?php } else{
              ?><a href="index.php?action=connexion" class="btn btn-success">Connexion</a>
         <?php } ?>
        </div>
    </nav>
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../public/img/alaska1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h3>Bonjour</h5>
                    <p>Bienvenue sur mon blog.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="../public/img/alaska2.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h3>Jean Forteroche, Ecrivain.</h5>
                    <p>Titre du livre "Billet simple pour l'Alaska".</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="../public/img/alaska3.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h3>Chapitre du célébre livre</h5>
                    <p>Je plublirais du contenu sur ce blog et vous pourrez commenter.</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="jumbotron">
      <div class="container">
          <h1>Biographie</h1>
          <p>Jean Forteroche, né le 12 Avril 1980 à Boston dans le Massachussetts, est un écrivain Français (bénéficiant aussi par sa naissance d'un passeport américain).
              Jean Forteroche publie son premier livre, intitulé L'enfant qui venait des étoiles, en 1998. Il a obtenu le prix des libraires avec L'ombre du vent en 2003. Son roman le plus connu, l'écho de ton souvenir, est traduit dans 15 langues à travers le monde. 
              Actuellement, Jean Forteroche travaille sur son prochain roman, "Billet simple pour l'Alaska" et le publie par épisode en ligne sur ce site.</p>
      </div>
    </div>

    <?php echo $contentPage ?> <!-- affichage contenu de la variable contentPage qui affiche le contenu -->
	 
    

<body>
<?php //echo date('d/m/Y h:i:s'); ?>
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>tinymce.init({ selector: '.editor' });</script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
  