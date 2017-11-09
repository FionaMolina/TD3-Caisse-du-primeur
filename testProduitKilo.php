<?php

ini_set('display_errors', '1');

require_once("src/ProduitKilo.php");

$n = new ProduitKilo();

var_dump($n);

echo $n;

$pdsK = $n->poids();
echo "<br><br> le poids est" .$pdsK;

$pxK = $n->prix();
echo "<br><br> le prix est" .$pxK;

?>