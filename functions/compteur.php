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