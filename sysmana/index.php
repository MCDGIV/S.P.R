<?php
// Chemin vers le fichier JSON
$chemin_donnees = '../equipier/donnees.json';

// Récupérer les données existantes ou initialiser un tableau vide
$donnees = file_exists($chemin_donnees) ? json_decode(file_get_contents($chemin_donnees), true) : ['pertes' => []];

// Fonction pour calculer les pertes par période de rush
function calculerPertesParPeriode($pertes, $debut, $fin, $date) {
    $pertes_par_periode = array();
    foreach ($pertes as $perte) {
        $heure = date('H', strtotime($perte['date']));
        if ($heure >= $debut && $heure < $fin && date('Y-m-d', strtotime($perte['date'])) === $date) {
            $pertes_par_periode[] = $perte;
        }
    }
    return $pertes_par_periode;
}

// Trier les pertes par date et heure
usort($donnees['pertes'], function($a, $b) {
    return strtotime($a['date']) - strtotime($b['date']);
});
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manager - Fiche de perte - McDonald's Givet</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<div class="alert alert-success" role="alert">
  Mise à jour le 03/04/2024 à 05:00 de S.P.R(Système de Suivi de Perte en Restaurant) Version 1.1, en cas de question appelez-moi, si je repond pas de suite, je rappellerai. Bonne journée et bon rush Maxime ! <a href="http://perte-mcdo.blacksilent56.xyz/sysmana/changelog.php" class="alert-link">Consulter les informations de la nouvelle version</a>
</div>
<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title text-center">Fiches de perte</h3>
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
                    <div class="form-group">
                        <label for="date">Date :</label>
                        <input type="date" name="date" id="date" class="form-control" value="<?php echo isset($_GET['date']) ? $_GET['date'] : date('Y-m-d'); ?>">
                    </div>
                    <div class="form-group">
                        <label for="periode">Période de Rush :</label>
                        <select name="periode" id="periode" class="form-control">
                            <option value="midi">Rush du midi (9h-16h)</option>
                            <option value="soir">Rush du soir (16h-00h)</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Filtrer</button>
                </form>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>Article</th>
                            <th>Quantité</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (isset($_GET['periode'])): ?>
                            <?php $rush = ($_GET['periode'] === 'midi') ? 'rush du midi' : 'rush du soir'; ?>
                            <?php $pertes_periode = calculerPertesParPeriode($donnees['pertes'], ($_GET['periode'] === 'midi') ? 9 : 16, ($_GET['periode'] === 'midi') ? 16 : 24, $_GET['date']); ?>
                            <?php foreach ($pertes_periode as $perte): ?>
                                <tr>
                                    <td><?php echo date('d/m/Y H:i', strtotime($perte['date'])); ?></td>
                                    <td><?php echo $perte['article']; ?></td>
                                    <td><?php echo $perte['quantite']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <?php foreach ($donnees['pertes'] as $perte): ?>
                                <tr>
                                    <td><?php echo date('d/m/Y H:i', strtotime($perte['date'])); ?></td>
                                    <td><?php echo $perte['article']; ?></td>
                                    <td><?php echo $perte['quantite']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
<footer>
     <p align="center">S.P.R - Système de Suivi de Perte en Restaurant - Attribué à McDonald's Givet</p>
</footer>
</html>
