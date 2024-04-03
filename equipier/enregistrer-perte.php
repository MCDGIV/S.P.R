<?php
// Vérifier si le formulaire est soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $article = $_POST['article'];
    $quantite = $_POST['quantite'];

    // Vérifier si les champs ne sont pas vides
    if (!empty($article) && !empty($quantite)) {
        // Charger les données depuis le fichier JSON
        $chemin_donnees = 'donnees.json';
        $donnees = json_decode(file_get_contents($chemin_donnees), true);

        // Ajouter la nouvelle perte aux données
        $nouvelle_perte = [
            'date' => date('Y-m-d H:i:s'),
            'article' => $article,
            'quantite' => $quantite
        ];
        $donnees['pertes'][] = $nouvelle_perte;

        // Enregistrer les données mises à jour dans le fichier JSON
        file_put_contents($chemin_donnees, json_encode($donnees));

        // Rediriger vers la page d'accueil avec un message de succès
        header("Location: index.php");
        exit();
    } else {
        // Rediriger vers la page d'accueil avec un message d'erreur si des champs sont vides
        header("Location: index.php?error=1");
        exit();
    }
} else {
    // Rediriger vers la page d'accueil si le formulaire n'est pas soumis directement
    header("Location: index.php?error=1");
    exit();
}
?>
