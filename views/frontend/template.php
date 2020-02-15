<!doctype html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Blog Jean Forteroche, écrivain">
  <meta name="generator" content="Jekyll v3.8.6">
  <title>Starter Template · Bootstrap</title>
  <link href="public/css/bootstrap.min.css" rel="stylesheet">
      
  

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
              <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact</a>
              </li>
          </div>
          <?php if(isset($_SESSION['Logged']) && $_SESSION['Logged'] =  true){ ?>
            <a href="index.php?action=deconnexion" class="btn btn-danger">Deconnexion</a>
          <?php } else{
              ?><a href="index.php?action=connexion" class="btn btn-success">Connexion</a>
         <?php } ?>
        </div>
    </nav>

    <?php echo $contentPage ?> <!-- affichage contenu de la variable contentPage qui affiche le contenu -->
	 
    

<body>
<?php //echo date('d/m/Y h:i:s'); ?>
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>tinymce.init({ selector: '.editor' });</script>
<script src="public/js/bootstrap.min.js"></script>
</body>
</html>
  