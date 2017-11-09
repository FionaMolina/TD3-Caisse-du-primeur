<?php

require_once('Produit.php');

class ProduitUnite extends Produit{
	
	public function __construct($pds, $px){
		echo "<br> Affichage de la marchandise";
		parent::__construct($pds, $px);
		$this->poids = 12;
		$this->prix = 0.30;
	}

	public function __toString(){
		return "<br><br>(pdsU, pxU) :(".$this->pds.",".$this->px.")".
				"<br> poids :".$this->pds.
				"<br> prix :".$this->px;
	}

	public function Compter($pds, $px){
		return ($this->poids*$this->prix);
	}
}

?>