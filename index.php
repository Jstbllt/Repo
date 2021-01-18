<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="style.css?ts=1<?php print  time();?>" media="screen">
		<link rel="stylesheet" type="text/css" href="impression.css" media="print">
		<title>COM'LINE | Accueil</title>
		<link rel="icon" type="img/png" href="/img/favicon/mini-logo.png">
		<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed&display=swap" rel="stylesheet">
	</head>


<body>

<!-- SECTION 1 -->
<?php
	include("header.php");
?>


<!-- COPRS TEXTE -->
<section class="body-text">
        
    <section class="blocks">
            <!-- PUB -->
            <aside id="section-pre-etapes" style="float: left">
                <p id="pub"><img src="img/bon-plan.png" alt="illustration" id="bon-plan"> <br>L'ÉLECTROMÉNAGER JUSQU'À -30%, <br> LIVRÉ 7/7 en I.D.F., <br> Et garanti 3 ans ! <br> <br></p>
            </aside>

            <aside class="abolexique" style="float: right">
                <h2 style="color: white; text-align: center"> SELECTION COM'LINE HIVER 2021 </h2>
                <p><img src="img/tel.png" style="color: white"><br> Vous souhaitez avoir un aperçu de nos <br> gammes de produits et de nos tarifs ? <br> Consultez notre sélection Hiver 2021 : <br> <br> <span><a href="/docs/SelectionComLineHiver2021.pdf?version=<?php print time();?>" download="SelectionComLineHiver2021.pdf" style="text-decoration: none; color: white">TELECHARGER</a></span></p>
            </aside>
            
        </section>
<br><br>


	<!-- TEXTE ACCUEIL -->
        <section class="accueil" style="align-items: center">

            <h1 id="simple" style="float: left; margin-left: 10%; margin-right: 13%">SIMPLE</h1>
            <p style="float: right;">
		<ul>
                    <li>Vous avez déjà repéré des modèles ? <br>
			Contactez-nous avec les références des appareils pour connaître nos tarifs ! <br> </li>
                    <li>Vous n’avez pas le temps de chercher ? <br>
			Contactez-nous avec les critères que vous désirez et votre budget maximum. <br>
			Nous vous renverrons dans la journée plusieurs propositions détaillées. <br> </li>
                    <li>Vous voulez passer commande ? <br>
			Un simple mail (pas de n° CB, aucun acompte). Vous remettrez le règlement à nos livreurs.</li>
		</ul>
            </p> 
            
            <br>
            
            <h1 id="efficace" style="float: left; margin-left: 8%; margin-right: 10%">EFFICACE</h1>
            <p style="float: right">
		<ul>
                    <li>Délais rapides et fiables</li>
                    <li>Livraison gratuite personnalisée 7/7 sur RDV.<br>
			Choisissez une date 7/7 et un créneau entre 6h et 23h. <br>
			Nous vous rappelons la veille et vous donnons l’heure précise de livraison !</li>
                    <li>Livraison gratuite à l’étage dans la pièce de votre choix <br>
			<span style="font-style: italic; font-size: small">à partir de 100 € d’achat, jusqu’à 50 km de Paris, sans installation<span></li>
                    <li>Garantie 3 ans gratuite et à domicile sur tout le gros électroménager dans toute la France.</li>
		</ul>
            </p>
            
           
            <h1 id="moins_cher" style="float: left; margin-left: 5%; margin-right: 7%">MOINS CHER</h1>
            <p style="float: right">
            <ul style="padding-top: 3%">
                    <li>Tarifs Com’Line -5 à -30% sous les prix magasin.</li>
                    <li>Grandes marques uniquement, y compris les plus prestigieuses.</li>
                    <li>Nouvelles gammes 2020-2021.</li>
                </ul>
            </p>
        </section>
        
          <br>
        
        
        <section class="actu">
            <h2 style="text-align:center; align-items: center"> <a href="actu.php" ><img src="img/actu2.png"></a> </h2>

            <p> <img src="img/etiquette2.jpg">
                Nouvelle étiquette-énergie : <br> 
                les consommateurs encore mieux informés !
            </p>
            <br><br><br>
            <br><br><br>
        </section>
 

</section>




<br> <br> <br>

<?php
	include("footer.php");
?>



	</body>

</html>