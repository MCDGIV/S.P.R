<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Équipier - Fiches de perte - McDonald's Givet</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #FEF200; /* Jaune McDo */
        }

        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .card-title {
            color: #E40514; /* Rouge McDo */
            font-weight: bold;
            text-align: center;
        }

        .form-control {
            border: 2px solid #E40514; /* Rouge McDo */
            border-radius: 10px;
        }

        .form-control:focus {
            border-color: #E40514; /* Rouge McDo */
            box-shadow: 0 0 0 0.2rem rgba(228, 5, 20, 0.25); /* Rouge McDo */
        }

        .btn-primary {
            background-color: #E40514; /* Rouge McDo */
            border: none;
            border-radius: 10px;
        }

        .btn-primary:hover {
            background-color: #D3001B; /* Rouge McDo plus foncé au survol */
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Équipier - S.P.R Saisie des pertes - McDonald's Givet</h5>
                        <?php if (isset($_GET['success']) && $_GET['success'] == 1): ?>
                            <div class="alert alert-success" role="alert">
                                Fiche de perte enregistrée avec succès !
                            </div>
                        <?php elseif (isset($_GET['error']) && $_GET['error'] == 1): ?>
                            <div class="alert alert-danger" role="alert">
                                Veuillez remplir tous les champs.
                            </div>
                        <?php endif; ?>
                        <form action="enregistrer-perte.php" method="post">
                            <div class="form-group">
                                <label for="article">Article</label>
                                <select name="article" id="article" class="form-control">
                                    <option value="" disabled selected>Choisir un article</option>
                                    <optgroup label="Perte Vide Cuisine">
                                    <option value="Sauce BigMac G">Sauce BigMac G</option>
  <option value="Sauce Deluxe G">Sauce Deluxe G</option>
  <option value="Sauce McChicken G">Sauce McChicken G</option>
  <option value="Sauce Filet G">Sauce Filet G</option>
  <option value="Sauce CBO G">Sauce CBO G</option>
  <option value="Sauce Tasty G">Sauce Tasty G</option>
  <option value="Sauce Crispy G">Sauce Crispy G</option>
  <option value="Sauce Ranch G">Sauce Ranch G</option>
  <option value="Sauce Ketchup G">Sauce Ketchup G</option>
  <option value="Sauce Moutarde G">Sauce Moutarde G</option>
  <option value="Beurre Liquide G">Beurre Liquide G</option>
  <option value="Pain CBO">Pain CBO</option>
  <option value="Pain REG">Pain REG</option>
  <option value="Pain MAC">Pain MAC</option>
  <option value="Pain Royal">Pain Royal</option>
  <option value="Pain Signature">Pain Signature</option>
  <option value="Pain McCrispy">Pain McCrispy</option>
  <option value="Pain EggMcMuffin">Pain EggMcMuffin</option>
  <option value="Grande Tortilla">Grande Tortilla</option>
  <option value="Petite Tortilla">Petite Tortilla</option>
  <option value="Viande 10:1">Viande 10:1</option>
  <option value="Viande 4:1">Viande 4:1</option>
  <option value="Viande 3:1">Viande 3:1</option>
  <option value="Nuggets">Nuggets</option>
  <option value="Poulet McChicken">Poulet McChicken</option>
  <option value="Poulet Mythic">Poulet Mythic</option>
  <option value="Poulet Wrap">Poulet Wrap</option>
  <option value="Poulet Crispy">Poulet Crispy</option>
  <option value="Filet">Filet</option>
  <option value="Palet Chevre">Palet Chevre</option>
  <option value="Oeufs">Oeufs</option>
  <option value="Salade MAC G">Salade MAC G</option>
  <option value="Salade Batavia G">Salade Batavia G</option>
  <option value="Cheddar TR">Cheddar TR</option>
  <option value="Emmental TR">Emmental TR</option>
  <option value="Cheddar Mature TR">Cheddar Mature TR</option>
  <option value="Cantal TR">Cantal TR</option>
  <option value="Comté TR">Comté TR</option>
  <option value="Oignons Rouge G">Oignons Rouge G</option>
  <option value="Oignons REG G">Oignons REG G</option>
  <option value="Oignons Royal G">Oignons Royal G</option>
  <option value="Oignons Frit G">Oignons Frit G</option>
  <option value="Oignons Fondant G">Oignons Fondant G</option>
  <option value="Bacon TR">Bacon TR</option>
  <option value="Jambon TR">Jambon TR</option>
  <option value="Tomate TR">Tomate TR</option>
  <option value="Cornichon G">Cornichon G</option>
  </optgroup>
  <optgroup label="Perte Complète Cuisine">
    <option value="Nuggets 4">Nuggets 4</option>
  <option value="Nuggets 6">Nuggets 6</option>
  <option value="Nuggets 9">Nuggets 9</option>
  <option value="Nuggets 20">Nuggets 20</option>
  <option value="Pt Wrap">Pt Wrap</option>
  <option value="Pt Wrap Chevre">Pt Wrap Chevre</option>
  <option value="Pt Deluxe">Pt Deluxe</option>
  <option value="Wrap New York">Wrap New York</option>
  <option value="Wrap Chevre">Wrap Chevre</option>
  <option value="Sand. McChicken">Sand. McChicken</option>
  <option value="Sand. McCrispy">Sand. McCrispy</option>
  <option value="First Boeuf">First Boeuf</option>
  <option value="First Poulet">First Poulet</option>
  <option value="First Poisson">First Poisson</option>
  <option value="McFish">McFish</option>
  <option value="McFish Mayo">McFish Mayo</option>
  <option value="Sand. Filet">Sand. Filet</option>
  <option value="Double Filet">Double Filet</option>
  <option value="280 Original">280 Original</option>
  <option value="280 Comté">280 Comté</option>
  <option value="280 Cantal">280 Cantal</option>
  <option value="HAMB.">HAMB.</option>
  <option value="CHEESE">CHEESE</option>
  <option value="DOUBLE CHEESE">DOUBLE CHEESE</option>
  <option value="DB CHEESE BACON">DB CHEESE BACON</option>
  <option value="BIG MAC">BIG MAC</option>
  <option value="BEEF BBQ 1V">BEEF BBQ 1V</option>
  <option value="BEEF BBQ 2V">BEEF BBQ 2V</option>
  <option value="CBO">CBO</option>
  <option value="BIG TASTY 1V">BIG TASTY 1V</option>
  <option value="BIG TASTY 2V">BIG TASTY 2V</option>
  <option value="CROQUE">CROQUE</option>
  <option value="EGG CHEESE">EGG CHEESE</option>
  <option value="EGG BACON">EGG BACON</option>
  <option value="ROYAL CHEESE 1V">ROYAL CHEESE 1V</option>
  <option value="ROYAL CHEESE 2V">ROYAL CHEESE 2V</option>
  <option value="ROYAL BACON 1V">ROYAL BACON 1V</option>
  <option value="ROYAL BACON 2V">ROYAL BACON 2V</option>
  <option value="ROYAL DELUXE 1V">ROYAL DELUXE 1V</option>
  <option value="ROYAL DELUXE 2V">ROYAL DELUXE 2V</option>
  </optgroup>
  <optgroup label="Perte Comptoir">
      <option value="McFlurry KITKAT Cara">McFlurry KITKAT Cara</option>
  <option value="McFlurry KITKAT Choco">McFlurry KITKAT Choco</option>
  <option value="McFlurry KITKAT Fraise">McFlurry KITKAT Fraise</option>
  <option value="McFlurry KITKAT">McFlurry KITKAT</option>
  <option value="McFlurry M&M'S Cara">McFlurry M&M'S Cara</option>
  <option value="McFlurry M&M'S Choco">McFlurry M&M'S Choco</option>
  <option value="McFlurry M&M'S Fraise">McFlurry M&M'S Fraise</option>
  <option value="McFlurry M&M'S">McFlurry M&M'S</option>
  <option value="McFlurry Daim Cara">McFlurry Daim Cara</option>
  <option value="McFlurry Daim Choco">McFlurry Daim Choco</option>
  <option value="McFlurry Daim Fraise">McFlurry Daim Fraise</option>
  <option value="McFlurry Daim">McFlurry Daim</option>
  <option value="McFlurry Nat Cara">McFlurry Nat Cara</option>
  <option value="McFlurry Nat Choco">McFlurry Nat Choco</option>
  <option value="McFlurry Nat Fraise">McFlurry Nat Fraise</option>
  <option value="McFlurry Nat">McFlurry Nat</option>
  <option value="Sunday Nat">Sunday Nat</option>
  <option value="Sunday Fraise">Sunday Fraise</option>
  <option value="Sunday Cara">Sunday Cara</option>
  <option value="Sunday Choco">Sunday Choco</option>
  <option value="Sirop Shake Vanille G">Sirop Shake Vanille G</option>
  <option value="Sirop Shake Choco G">Sirop Shake Choco G</option>
  <option value="Sirop Shake Fraise G">Sirop Shake Fraise G</option>
  <option value="Shake Vanille">Shake Vanille</option>
  <option value="Shake Coco">Shake Coco</option>
  <option value="Shake Fraise">Shake Fraise</option>
  <option value="Daim G">Daim G</option>
  <option value="M&M'S G">M&M'S G</option>
  <option value="KITKAT G">KITKAT G</option>
  <option value="Tube Vanille">Tube Vanille</option>
  <option value="Pt COCA">Pt COCA</option>
  <option value="Moy COCA">Moy COCA</option>
  <option value="Gd COCA">Gd COCA</option>
  <option value="Pt COCA ZERO">Pt COCA ZERO</option>
  <option value="Moy COCA ZERO">Moy COCA ZERO</option>
  <option value="Gd COCA ZERO">Gd COCA ZERO</option>
  <option value="Pt ICE TEA">Pt ICE TEA</option>
  <option value="Moy ICE TEA">Moy ICE TEA</option>
  <option value="Gd ICE TEA">Gd ICE TEA</option>
  <option value="Pt ICE TEA GREEN">Pt ICE TEA GREEN</option>
  <option value="Moy ICE TEA GREEN">Moy ICE TEA GREEN</option>
  <option value="Gd ICE TEA GREEN">Gd ICE TEA GREEN</option>
  <option value="Pt FANTA">Pt FANTA</option>
  <option value="Moy FANTA">Moy FANTA</option>
  <option value="Gd FANTA">Gd FANTA</option>
  <option value="Pt EAU PLATE">Pt EAU PLATE</option>
  <option value="Moy EAU PLATE">Moy EAU PLATE</option>
  <option value="Gd EAU PLATE">Gd EAU PLATE</option>
  <option value="Pt EAU GAZEUSE">Pt EAU GAZEUSE</option>
  <option value="Moy EAU GAZEUSE">Moy EAU GAZEUSE</option>
  <option value="Gd EAU GAZEUSE">Gd EAU GAZEUSE</option>
  <option value="Pt JUS D'ORANGE">Pt JUS D'ORANGE</option>
  <option value="Moy JUS D'ORANGE">Moy JUS D'ORANGE</option>
  <option value="Gd JUS D'ORANGE">Gd JUS D'ORANGE</option>
  <option value="SALADE CESAR">SALADE CESAR</option>
  <option value="SALADE MOZZA">SALADE MOZZA</option>
  <option value="PT SALADE">PT SALADE</option>
  <option value="PATES">PATES</option>
  <option value="MOZARELLA">MOZARELLA</option>
  <option value="GRANA PADANO">GRANA PADANO</option>
  <option value="CROUTONS">CROUTONS</option>
  <option value="MIX SALADE">MIX SALADE</option>
  <option value="SCE CESAR">SCE CESAR</option>
  <option value="SCE NOISETTE">SCE NOISETTE</option>
  <option value="SCE LEGERE">SCE LEGERE</option>
  <option value="FRITE X1,5 KG">FRITE X1,5 KG</option>
  <option value="POTATOES X1,2 KG">POTATOES X1,2 KG</option>
  <option value="SUNDAY MIX">SUNDAY MIX</option>
  <option value="SHAKE MIX">SHAKE MIX</option>
  <option value="PTIT BIO POMME">PTIT BIO POMME</option>
  <option value="MUFFIN CHOCO">MUFFIN CHOCO</option>
  <option value="DONUT NAT">DONUT NAT</option>
  <option value="COOKIE">COOKIE</option>
  <option value="BROWNIE">BROWNIE</option>
  <option value="BERLINGO">BERLINGO</option>
  <option value="POMMES">POMMES</option>
  <option value="ANANAS">ANANAS</option>
  <option value="TOMATES">TOMATES</option>
  </optgroup>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="quantite">Quantité</label>
                                <input type="number" name="quantite" id="quantite" class="form-control" placeholder="Quantité">
                            </div>
                            <button type="submit" class="btn btn-primary">Enregistrer la perte</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
<p align="center">S.P.R - Système de Suivi de Perte en Restaurant - Attribué à McDonald's Givet</p>
</html>
