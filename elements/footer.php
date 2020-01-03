<?php
    require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'functions' . DIRECTORY_SEPARATOR . 'compteur.php'; //Chargement fichier execution functions. 
    ajouter_vue();
    $vues = nombre_vues();
?>
Il y a <?= $vues ?> visite<?php if ($vues > 1): ?>s<?php endif; ?> sur le site <!-- Si il y à plus d'une vue j'affiche le S -->
<br />
<span class="signature">2019 - Réalisé par Antoine Heidet. <?php echo date('d/m/Y h:i:s'); ?></span>