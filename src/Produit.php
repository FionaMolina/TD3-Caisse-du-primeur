<?php

abstract class Produit{

	protected $pds = 0;
	protected $px = 0;

	public static $compteur = 0;

	public function __construct($pds, $px){
		echo "Affichage de la marchandise";
		$this->poids = $pds;
		$this->prix = $px;

		self::$compteur++;
	}

	public function Compter($pds, $px){
		$this->poids = $pds;
		$this->prix = $px;
	}
}

?>