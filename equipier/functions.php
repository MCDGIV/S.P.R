<?php

// Fonction pour charger les données depuis un fichier JSON
function chargerDonneesDepuisJSON($fichier) {
    $donnees = file_get_contents($fichier);
    return json_decode($donnees, true);
}

// Fonction pour enregistrer les données dans un fichier JSON
function enregistrerDonneesEnJSON($donnees, $fichier) {
    file_put_contents($fichier, json_encode($donnees, JSON_PRETTY_PRINT));
}

?>
