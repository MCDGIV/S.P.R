<?php
// Exemple de données d'articles pour chaque catégorie
$articles = array(
    "Garnitures" => array(
        "Sauce BigMac G", "Sauce Deluxe G", "Sauce McChicken G", "Sauce Filet G", "Sauce CBO G", "Sauce Tasty G", "Sauce Crispy G", "Sauce Ranch G", "Sauce Ketchup G", "Sauce Moutarde G", "Beurre Liquide G", "Pain CBO", "Pain REG", "Pain MAC", "Pain Royal", "Pain Signature", "Pain McCrispy", "Pain EggMcMuffin", "Grande Tortilla", "Petite Tortilla", "Viande 10:1", "Viande 4:1", "Nuggets", "Poulet McChicken", "Poulet Mythic", "Poulet Wrap", "Poulet Crispy", "Filet", "Palet Chevre", "Oeufs", "Salade MAC G", "Salade Batavia G", "Cheddar TR", "Emmental TR", "Cheddar Mature TR", "Cantal TR", "Comté TR", "Oignons Rouge G", "Oignons REG G", "Oignons Royal G", "Oignons Frit G", "Oignons Fondant G", "Bacon TR", "Jambon TR", "Tomate TR", "Cornichon G", "Nuggets 4", "Nuggets 6", "Nuggets 9", "Nuggets 20", "Pt Wrap", "Pt Wrap Chevre", "Pt Deluxe", "Wrap New York", "Wrap Chevre", "Sand. McChicken", "Sand. McCrispy", "First Boeuf", "First Poulet", "First Poisson", "McFish", "McFish Mayo", "Sand. Filet", "Double Filet", "280 Original", "280 Comté", "280 Cantal", "HAMB.", "CHEESE", "DOUBLE CHEESE", "DB CHEESE BACON", "BIG MAC", "BEEF BBQ 1V", "BEEF BBQ 2V", "CBO", "BIG TASTY 1V", "BIG TASTY 2V", "CROQUE", "EGG CHEESE", "EGG BACON", "ROYAL CHEESE 1V", "ROYAL CHEESE 2V", "ROYAL BACON 1V", "ROYAL BACON 2V", "ROYAL DELUXE 1V", "ROYAL DELUXE 2V"
    ),
    "Glace" => array(
        "McFlurry KITKAT Cara", "McFlurry KITKAT Choco", "McFlurry KITKAT Fraise", "McFlurry KITKAT", "McFlurry M&M'S Cara", "McFlurry M&M'S Choco", "McFlurry M&M'S Fraise", "McFlurry M&M'S", "McFlurry Daim Cara", "McFlurry Daim Choco", "McFlurry Daim Fraise", "McFlurry Daim", "McFlurry Nat Cara", "McFlurry Nat Choco", "McFlurry Nat Fraise", "McFlurry Nat", "Sirop Shake Vanille G", "Sirop Shake Choco G", "Sirop Shake Fraise G", "Shake Vanille", "Shake Choco", "Shake Fraise", "Daim G", "M&M'S G", "KITKAT G", "Tube Vanille", "Pt COCA", "Moy COCA", "Gd COCA", "Pt COCA ZERO", "Moy COCA ZERO", "Gd COCA ZERO", "Pt ICE TEA", "Moy ICE TEA", "Gd ICE TEA", "Pt ICE TEA GREEN", "Moy ICE TEA GREEN", "Gd ICE TEA GREEN", "Pt FANTA", "Moy FANTA", "Gd FANTA", "Pt EAU PLATE", "Moy EAU PLATE", "Gd EAU PLATE", "Pt EAU GAZEUSE", "Moy EAU GAZEUSE", "Gd EAU GAZEUSE", "Pt JUS D'ORANGE", "Moy JUS D'ORANGE", "Gd JUS D'ORANGE"
    ),
    "Sandwich" => array(
        "Pain CBO", "Pain REG", "Pain MAC", "Pain Royal", "Pain Signature", "Pain McCrispy", "Pain EggMcMuffin", "Grande Tortilla", "Petite Tortilla", "Viande 10:1", "Viande 4:1", "Nuggets", "Poulet McChicken", "Poulet Mythic", "Poulet Wrap", "Poulet Crispy", "Filet", "Palet Chevre", "Oeufs", "Salade MAC G", "Salade Batavia G", "Cheddar TR", "Emmental TR", "Cheddar Mature TR", "Cantal TR", "Comté TR", "Oignons Rouge G", "Oignons REG G", "Oignons Royal G", "Oignons Frit G", "Oignons Fondant G", "Bacon TR", "Jambon TR", "Tomate TR", "Cornichon G", "Nuggets 4", "Nuggets 6", "Nuggets 9", "Nuggets 20", "Pt Wrap", "Pt Wrap Chevre", "Pt Deluxe", "Wrap New York", "Wrap Chevre", "Sand. McChicken", "Sand. McCrispy", "First Boeuf", "First Poulet", "First Poisson", "McFish", "McFish Mayo", "Sand. Filet", "Double Filet", "280 Original", "280 Comté", "280 Cantal", "HAMB.", "CHEESE", "DOUBLE CHEESE", "DB CHEESE BACON", "BIG MAC", "BEEF BBQ 1V", "BEEF BBQ 2V", "CBO", "BIG TASTY 1V", "BIG TASTY 2V", "CROQUE", "EGG CHEESE", "EGG BACON", "ROYAL CHEESE 1V", "ROYAL CHEESE 2V", "ROYAL BACON 1V", "ROYAL BACON 2V", "ROYAL DELUXE 1V", "ROYAL DELUXE 2V"
    )
);

// Récupération de la catégorie depuis la requête GET
if(isset($_GET['categorie'])) {
    $categorie = $_GET['categorie'];
    // Vérification si la catégorie existe
    if(array_key_exists($categorie, $articles)) {
        // Générer le tableau HTML des articles de la catégorie sélectionnée
        echo "<table border='1'>
                <tr>
                    <th>Article</th>
                </tr>";
        foreach($articles[$categorie] as $article) {
            echo "<tr><td>$article</td></tr>";
        }
        echo "</table>";
    } else {
        // Si la catégorie n'existe pas, renvoyer un message d'erreur
        echo "Catégorie non trouvée";
    }
} else {
    // Si aucune catégorie n'est spécifiée, renvoyer un message d'erreur
    echo "Aucune catégorie spécifiée";
}
?>
