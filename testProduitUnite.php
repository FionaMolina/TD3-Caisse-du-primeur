<?php

ini_set('display_errors', '1');

require_once("src/ProduitUnite.php");

$n = new ProduitUnite();

var_dump($n);

echo $n;

$pdsU = $n->poids();
echo "<br><br> le poids est" .$pd;

$pxU = $n->prix();
echo "<br><br> le prix est" .$px;
?>