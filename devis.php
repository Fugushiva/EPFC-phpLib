<?php

/*Problème lié à l'installation
 *Essais de FPDF et MPDF :(
 * donc non fonctionnel
 *
 * */


?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/devis.css">
    <title>Devis</title>
</head>
<body>
    <header class="header">
        <img src="img/logo_test.png" alt="Logo" id="logoImg">
        <h2 class="title" id="devisTitle">Exemple</h2>
        <p id="reference">ref :</p>
        
        
    </header>
    <section class="mainContent">
        <div id="entity">
            <div id="vendeur">
                <h3 class="title" id="sellerName">SellingIt</h3>
                <p>Rue de la haute technologie 420</p>
                <p>1337 leet</p>
                <a href="tel:133713371337">1337.1337.1337</a>
                <a href="mailto:thisisanemaildude@sellingit.com">thisisanemaildude@sellingit.com</a>
            </div>
            <div id="client">
                <h3 class="title" id="clientName">john Doe</h3>
                <p>rue des empereurs 35</p>
                <p>1337 leet</p>
                <p>Belgique</p>
            </div>
        </div>

        <div id="devis">
            <h3 class="title" id="estimateName"> Présentation du devis</h3>
            <table id="estimate">
                <thead>
                    <tr>
                        <th>Désignation</th>
                        <th>Quantité</th>
                        <th>TVA%</th>
                        <th>P.U HTVA</th>
                        <th>Montant TVA</th>
                        <th>Total TTC</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>Produit 1</th>
                        <td>3</td>
                        <td>10%</td>
                        <td>100€</td>
                        <td>30€</td>
                        <td>330€</td>
                    </tr>
                    <tr>
                        <th>Produit 2</th>
                        <td>1</td>
                        <td>10%</td>
                        <td>200€</td>
                        <td>20€</td>
                        <td>220€</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
</body>
</html>