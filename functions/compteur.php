<?php
function ajouter_vue () {
    $fichier = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . 'compteur'; //Chemin du fichier pour les vues 
    $fichier_journalier = $fichier . '-' . date('Y-m-d');
    incrementer_compteur($fichier);
    incrementer_compteur($fichier_journalier);
}

function incrementer_compteur (string $fichier): void { // 
    $compteur = 1;
    if (file_exists($fichier)) { // Si le fichier existe on incrémente
        $compteur = (int)file_get_contents($fichier);
        $compteur++; // incrémentation
    }
    file_put_contents($fichier, $compteur);//écriture dans le fichier // Sinon on crée le fichier avec la valeur '1'

}
function nombre_vues (): string { //chaine de caractère
    $fichier = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . 'compteur';
    return file_get_contents($fichier); //Retourne fichier ..data/compteur
}

function nombre_vues_mois (int $annee, int $mois): int {
    $mois = str_pad($mois, 2, '0', STR_PAD_LEFT); // mois / nombre de caractère / pad string 0 a rajouter. / strd pad left pour inversser le 0 et la valeurs du mois 
    $fichier = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . 'compteur-' . $annee . '-' . $mois . '-' . '*';
    $fichiers = glob($fichier);
    $total = 0; 
    foreach($fichiers as $fichier) {
        $total += (int)file_get_contents($fichier);
    }
    return $total;
}
function nombre_vues_detail_mois (int $annee, int $mois): array {
    $mois = str_pad($mois, 2, '0', STR_PAD_LEFT); // mois / nombre de caractère / pad string 0 a rajouter. / strd pad left pour inversser le 0 et la valeurs du mois 
    $fichier = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . 'compteur-' . $annee . '-' . $mois . '-' . '*' ;
    $fichiers = glob($fichier); // englobe les fichiers sous forme de tableau. 
    $visites = [];
    foreach($fichiers as $fichier) {
        $parties = explode('-', basename($fichier));
        $visites[] = [

            'annee' => $parties[1],
            'mois' => $parties[2],
            'jour' => $parties[3],
            'visites' => file_get_contents($fichier) // chercher la valeurs des vues dans le fichier en question. 
        ];
    }
    return $visites;
}