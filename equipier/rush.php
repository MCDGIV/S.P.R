<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Équipier - Rush - McDonald's Givet</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #FEF200; /* Jaune McDo */
        }

        .form-group {
            margin-bottom: 10px;
        }

        .quantity-input {
            width: 70px;
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Équipier - Rush - McDonald's Givet</h5>
                        <!-- Barre de recherche -->
                        <div class="form-group">
                            <input type="text" id="searchInput" class="form-control" placeholder="Rechercher un article...">
                        </div>
                        <ul class="list-group" id="itemList">
                            <!-- Les éléments de la liste d'articles seront ajoutés ici dynamiquement -->
                        </ul>
                        <button type="submit" class="btn btn-primary">Valider</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            // Liste des articles disponibles
            var articles = [
                "Sauce BigMac G", "Sauce Deluxe G", "Sauce McChicken G", "Sauce Filet G", "Sauce CBO G",
                "Sauce Tasty G", "Sauce Crispy G", "Sauce Ranch G", "Sauce Ketchup G", "Sauce Moutarde G",
                "Beurre Liquide G", "Pain CBO", "Pain REG", "Pain MAC", "Pain Royal", "Pain Signature",
                "Pain McCrispy", "Pain EggMcMuffin", "Grande Tortilla", "Petite Tortilla", "Viande 10:1",
                "Viande 4:1", "Nuggets", "Poulet McChicken", "Poulet Mythic", "Poulet Wrap", "Poulet Crispy",
                "Filet", "Palet Chevre", "Oeufs", "Salade MAC G", "Salade Batavia G", "Cheddar TR", "Emmental TR",
                "Cheddar Mature TR", "Cantal TR", "Comté TR", "Oignons Rouge G", "Oignons REG G", "Oignons Royal G",
                "Oignons Frit G", "Oignons Fondant G", "Bacon TR", "Jambon TR", "Tomate TR", "Cornichon G",
                "Nuggets 4", "Nuggets 6", "Nuggets 9", "Nuggets 20", "Pt Wrap", "Pt Wrap Chevre", "Pt Deluxe",
                "Wrap New York", "Wrap Chevre", "Sand. McChicken", "Sand. McCrispy", "First Boeuf", "First Poulet",
                "First Poisson", "McFish", "McFish Mayo", "Sand. Filet", "Double Filet", "280 Original", "280 Comté",
                "280 Cantal", "HAMB.", "CHEESE", "DOUBLE CHEESE", "DB CHEESE BACON", "BIG MAC", "BEEF BBQ 1V",
                "BEEF BBQ 2V", "CBO", "BIG TASTY 1V", "BIG TASTY 2V", "CROQUE", "EGG CHEESE", "EGG BACON",
                "ROYAL CHEESE 1V", "ROYAL CHEESE 2V", "ROYAL BACON 1V", "ROYAL BACON 2V", "ROYAL DELUXE 1V",
                "ROYAL DELUXE 2V", "McFlurry KITKAT Cara", "McFlurry KITKAT Choco", "McFlurry KITKAT Fraise",
                "McFlurry KITKAT", "McFlurry M&M'S Cara", "McFlurry M&M'S Choco", "McFlurry M&M'S Fraise",
                "McFlurry M&M'S", "McFlurry Daim Cara", "McFlurry Daim Choco", "McFlurry Daim Fraise",
                "McFlurry Daim", "McFlurry Nat Cara", "McFlurry Nat Choco", "McFlurry Nat Fraise", "McFlurry Nat",
                "Sirop Shake Vanille G", "Sirop Shake Choco G", "Sirop Shake Fraise G", "Shake Vanille",
                "Shake Choco", "Shake Fraise", "Daim G", "M&M'S G", "KITKAT G", "Tube Vanille", "Pt COCA",
                "Moy COCA", "Gd COCA", "Pt COCA ZERO", "Moy COCA ZERO", "Gd COCA ZERO", "Pt ICE TEA", "Moy ICE TEA",
                "Gd ICE TEA", "Pt ICE TEA GREEN", "Moy ICE TEA GREEN", "Gd ICE TEA GREEN", "Pt FANTA", "Moy FANTA",
                "Gd FANTA", "Pt EAU PLATE", "Moy EAU PLATE", "Gd EAU PLATE", "Pt EAU GAZEUSE", "Moy EAU GAZEUSE",
                "Gd EAU GAZEUSE", "Pt JUS D'ORANGE", "Moy JUS D'ORANGE", "Gd JUS D'ORANGE", "SALADE CESAR",
                "SALADE MOZZA", "PT SALADE", "PATES", "MOZARELLA", "GRANA PADANO", "CROUTONS", "MIX SALADE",
                "SCE CESAR", "SCE NOISETTE", "SCE LEGERE", "FRITE X1,5 KG", "POTATOES X1,2 KG", "SUNDAY MIX",
                "SHAKE MIX", "PTIT BIO POMME", "MUFFIN CHOCO", "DONUT NAT", "COOKIE", "BROWNIE", "BERLINGO",
                "POMMES", "ANANAS", "TOMATES"
            ];

            // Générer la liste des articles avec les champs de quantité et le bouton "Valider"
            var itemListHTML = '';
            articles.forEach(function(article) {
                itemListHTML += '<li class="list-group-item d-flex justify-content-between align-items-center">' +
                                article + '<input type="number" name="' + article + '" class="quantity-input form-control" placeholder="Quantité">' +
                                '<button type="button" class="btn btn-primary btn-validate">Valider</button>' +
                                '</li>';
            });
            $('#itemList').html(itemListHTML);

            // Soumettre le formulaire lorsque le bouton "Valider" est cliqué
            $('#rushForm').submit(function(event) {
                event.preventDefault(); // Empêcher le comportement par défaut du formulaire
                // Collecter les données de quantité des articles
                var data = {};
                $('#itemList input[type="number"]').each(function() {
                    var article = $(this).attr('name');
                    var quantite = $(this).val();
                    if (quantite !== '') {
                        data[article] = parseInt(quantite);
                    }
                });
                // Envoyer les données au script PHP pour enregistrement
                $.ajax({
                    type: 'POST',
                    url: 'enregistrer_perte.php',
                    data: { data: data },
                    dataType: 'json',
                    success: function(response) {
                        // Afficher un message de succès
                        alert(response.message);
                        // Recharger la page pour réinitialiser le formulaire
                        location.reload();
                    },
                    error: function(xhr, status, error) {
                        // En cas d'erreur, afficher le message d'erreur
                        alert("Erreur: " + xhr.responseText);
                    }
                });
            });

            // Associer une fonction au clic sur le bouton "Valider"
            $('.btn-validate').click(function() {
                // Rechercher l'élément parent contenant l'article et la quantité
                var listItem = $(this).closest('li');
                // Extraire le nom de l'article et la quantité saisie
                var articleName = listItem.find('.quantity-input').attr('name');
                var quantity = listItem.find('.quantity-input').val();
                // Vérifier si la quantité est saisie
                if (quantity.trim() !== '') {
                    // Envoyer les données au script PHP pour enregistrement
                    $.ajax({
                        type: 'POST',
                        url: 'enregistrer_perte.php',
                        data: { article: articleName, quantite: quantity },
                        dataType: 'json',
                        success: function(response) {
                            // Afficher un message de succès
                            alert(response.message);
                            // Réinitialiser la quantité saisie
                            listItem.find('.quantity-input').val('');
                        },
                        error: function(xhr, status, error) {
                            // En cas d'erreur, afficher le message d'erreur
                            alert("Erreur: " + xhr.responseText);
                        }
                    });
                } else {
                    // Si la quantité n'est pas saisie, afficher un message d'erreur
                    alert("Veuillez saisir la quantité.");
                }
            });

            // Filtrer la liste des articles en fonction de la recherche
            $('#searchInput').on('input', function() {
                var searchKeyword = $(this).val().toLowerCase();
                $('#itemList li').each(function() {
                    var articleName = $(this).text().toLowerCase();
                    if (articleName.includes(searchKeyword)) {
                        $(this).show();
                    } else {
                        $(this).hide();
                    }
                });
            });
        });
    </script>
</body>
</html>
