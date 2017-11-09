<?php

	ini_set('display_errors', '1');

	require_once("src/ProduitKilo.php");
	require_once("src/ProduitUnite.php");

	$ProduitKilo = new ProduitKilo();
	echo "<br>".Produit::$compteur;
	echo "<br>".$produitKilo;

	$ProduitUnite = new ProduitUnite();
	echo "<br>".Produit::$compteur;
	echo "<br>".$ProduitUnite;

?>