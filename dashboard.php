<?php

require 'functions/compteur.php'; //Recherche fichier qui contient la function nb de vues dans le dossier functions 
$annee = (int)date('Y'); // Variable année 
$annee_selection = empty($_GET['annee']) ? null : (int)$_GET['annee']; // Si annee par defaut n'existe pas on est par defaut sur derniere année , converti le paramétre en entier. 
$mois_selection = empty($_GET['mois']) ? null : $_GET['mois'];
if ($annee_selection && $mois_selection) {
    $total = nombre_vues_mois($annee_selection, $mois_selection);
    $detail = nombre_vues_detail_mois($annee_selection, $mois_selection);
} else {
    $total = nombre_vues();
}
$mois = [
    '01' => 'Janvier',
    '02' => 'Février',
    '03' => 'Mars',
    '04' => 'Avril',
    '05' => 'Mai',
    '06' => 'Juin',
    '07' => 'Juillet',
    '08' => 'Août',
    '09' => 'Septembre',
    '10' => 'Octobre',
    '11' => 'Novembre',
    '12' => 'Décembre'
];
require 'elements/header.php'; 
?>

<div class="row">
    <div class="col-md-4">
        <div class="list-group">
            <?php for ($i = 0; $i < 5; $i++): ?> <!-- boucle si en dessous de 5 alors ++ -->
                <a class="list-group-item <?= $annee - $i === $annee_selection ? 'active' : ''; ?> " href="dashboard.php?annee=<?= $annee - $i ?>"><?= $annee - $i ?></a> <!-- Liens clickable pour 5 dernière années recherche url dashboard.php-->
                    <?php if ($annee - $i === $annee_selection): ?>
                        <div class="list-group">
                            <?php foreach ($mois as $numero => $nom): ?> <!-- parcourir mois numéro et nom -->
                                <a class="list-group-item <?= $numero === $mois_selection ? 'active' : ''?>" href="dashboard.php?annee=<?= $annee_selection ?>&mois=<?= $numero ?>"> <!-- création liste annee selection mois par numero -->
                                    <?= $nom ?>
                                </a>
                            <?php endforeach; ?><!-- stop parcourir -->
                        </div>
                    <?php endif; ?><!-- stop condition -->
            <?php endfor ?> <!-- stop boucle -->
        </div>
    </div>
    <div class="col-md-8">
        <div class="card mb-4">
            <div class="card-body">
                <strong style="font-size:3em;"><?= $total ?></strong><br /> <!-- affiche nombre de visite dans la carte avec variable total. -->
                Visite<?= $total > 1 ? 's' : '' ?> total <!-- Si total et plus grand que 1 tu affiche un S si non tu n'affiche rien. -->
            </div>
        </div> 
        <?php if (isset($detail)): ?>
        <h2>Détails des visites pour le mois</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Jour</th>
                    <th>Nombre de visite</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($detail as $ligne): ?>
                    <tr>
                        <td><?= $ligne['jour'] ?></td>
                        <td><?= $ligne['visites'] ?> visite<?= $ligne['visites'] > 1 ? 's' : '' ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <?php endif; ?>
    </div>  
</div>
    

<?php require 'elements/footer.php'; ?>
