    <head>
        <meta charset="utf-8" />
        <title>Administration</title>
    </head>
    
    
        <?php //Si le mot de passe et l'identifiant n'est pas bon alors on inclus toujours le formulaire d'identification. 
    if (!isset($_POST['mot_de_passe']) OR $_POST['mot_de_passe'] != "kangourou")
    {
        include("admin/connexion.php");
        
    }
    else // Si non affichage classique ( a voir si inclure dans SI NON SI )
    {
        echo '<p>Erreur de mot de passe</p>';
    }
    ?>
    
   
