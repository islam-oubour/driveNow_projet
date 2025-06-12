<?php
use app\model\modele;
require('model/mod.php');
// $mod=new modele()
class cont{

	public function formAjoutProduit(){ 
	// $tabProduct=["","",""];
	require('view/ajout.php');
// 	header('Location: ajout');
 }
	public function listeProduit(){
	$mod=new modele();
	$retour=$mod->lister();
	// echo 'je suis la';
	require('view/liste.php');

}
	public function addProduit($tab){
		$mod=new modele();
		$mod->addproduct($tab);

	}
	public function supProduct($idp){
		$mod=new modele();
		$mod->supProduct($idp);
		$retour	=$mod->lister();
		require('view/liste.php');
	}
	public function updateProduct($idpu){
		$mod=new modele();
		$tabProduct=$mod->chercherProduct($idpu);
		// var_dump($tabProduct);
		require('view/update.php');
	}
	public function validerupdate($tabProduct){
		$mod=new modele();
		$mod->validerupdate($tabProduct);
		$retour	=$mod->lister();
		require('view/liste.php');
	}
}
