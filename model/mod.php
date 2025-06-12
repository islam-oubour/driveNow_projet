<?php
namespace app\model;
use \pdo;
use \mysqli;
class modele
{	private $con;

	public function __construct(){
		$this->con=new pdo('mysql:host=localhost;dbname=projet_driveNow;charset=utf8', 'root','');

	}
	public function listerCars($tab)
	{
		$result=$this->con->query("SELECT * FROM voiture LIMIT 6");
		//$t=$result->fetchALL();
		return $result;

	
	}
	// public function chercherProduct($idpu){
	// 	// $this->setcon();
	// 	$result=$this->con->query("SELECT * FROM  produits WHERE idProduit=". $idpu);
	// 	$tabProduit=$result->fetch(PDO::FETCH_ASSOC);
	// 	return $tabProduit;

	//  }
	//  public function lister(){
	//  	// $this->setcon();
	// 	$result=$this->con->query("SELECT * FROM produits");
	// 	//$t=$result->fetchALL();
	// 	return $result;

	//  }
	//  public function supProduct($idp){
	// 	// $this->setcon();
	// 	$afrow=$this->con->query("DELETE  FROM produits WHERE idProduit=".$idp);

	//  }
	//  public function validerUpdate($tabProduct)
	//  {
	//  	// $this->setcon();
	//  	$afrow=$this->con->query("UPDATE produits SET libelle='{$tabProduct['lib']}'".",prix=".$tabProduct['prix']." WHERE idProduit=".$tabProduct['id']);
	//  }



}