<?php

// Vérifier si le formulaire est soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Vérifier si les champs requis sont définis
    if (isset($_POST["manager"]) && isset($_POST["message"])) {
        // Charger les informations existantes des messages depuis le fichier JSON
        $fichierInfosManager = '../infos_manager.json';
        $infosManager = json_decode(file_get_contents($fichierInfosManager), true);

        // Extraire le nom du manager et limiter la longueur du message à 100 caractères
        $nomManager = $_POST["manager"];
        $message = substr($_POST["message"], 0, 100);

        // Ajouter le nouveau message avec le nom du manager et la date du jour
        $nouveauMessage = array(
            "manager" => $nomManager,
            "message" => $message,
            "date" => date("Y-m-d")
        );

        // Ajouter le nouveau message au tableau des messages
        if (!isset($infosManager['messages'])) {
            $infosManager['messages'] = array();
        }
        array_push($infosManager['messages'], $nouveauMessage);

        // Enregistrer les informations mises à jour dans le fichier JSON
        file_put_contents($fichierInfosManager, json_encode($infosManager));

        // Rediriger vers la page d'accueil du manager
        header("Location: ../index.php");
        exit();
    }
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manager - Ajouter un message</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 p-4">
    <div class="container mx-auto">
        <h1 class="text-2xl font-bold mb-4">Manager - Ajouter un message</h1>
        
        <!-- Formulaire pour ajouter un message -->
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="manager">Manager :</label>
                <select id="manager" name="manager" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                    <option value="ADM">ADM</option>
                    <option value="corentin">Corentin</option>
                    <option value="antoine">Antoine</option>
                    <option value="jordan">Jordan</option>
                    <option value="jeremy">Jérémy</option>
                    <option value="florian">Florian</option>
                    <!-- Ajoutez d'autres options pour les managers -->
                </select>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="message">Nouveau message :</label>
                <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="message" name="message" rows="3" placeholder="Entrez votre message ici" required></textarea>
            </div>
            <div class="flex items-center justify-between">
                <button class="bg-blue-500 text-white px-4 py-2 rounded" type="submit">Ajouter le message</button>
                <a href="../index.php" class="text-gray-600 hover:underline">Annuler</a>
            </div>
        </form>
    </div>
</body>
</html>
