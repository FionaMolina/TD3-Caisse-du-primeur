<?php

require_once('Produit.php');

class ProduitKilo extends Produit{
	
	public function __construct($pds, $px){
		echo "<br> Affichage de la marchandise";
		parent::__construct($pds, $px);
		$this->poids = 2;
		$this->prix = 9;
	}

	public function __toString(){
		return "<br><br>(pds, px) :(".$this->pds.",".$this->px.")".
				"<br> poids :".$this->pds.
				"<br> prix :".$this->px;
	}

	public function Compter($pds, $px){
		return ($this->poids*$this->prix);
	}
}

?>