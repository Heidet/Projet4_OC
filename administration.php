
<?php require_once('models/Author.php') ?>

<?php 

    //  Récupération de l'utilisateur et de son pass hashé
    $req = $DB->prepare('SELECT id, pass FROM membres WHERE username = :hash');
    $req->execute(array(
        'username' => $pseudo));
    $resultat = $req->fetch();

    // Comparaison du pass envoyé via le formulaire avec la base
    $isPasswordCorrect = password_verify($_POST['hash'], $resultat['hash']);

    if (!$resultat)
    {
        echo 'Mauvais identifiant ou mot de passe !';
    }
    else
    {
        if ($isPasswordCorrect) {
            session_start();
            $_SESSION['id'] = $resultat['id'];
            $_SESSION['username'] = $pseudo;
            echo 'Vous êtes connecté !';
        }
        else {
            echo 'Mauvais identifiant ou mot de passe !';
        }
    }
   
