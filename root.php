<?php
require	('controller/cont.php');
$cont=new cont();
if (isset($_POST['ok']))
	{	$tab[0]=$_POST['lib'];
		$tab[1]=$_POST['prix'];
		$cont->addProduit($tab);
		require('view/acc.php');
	}
	elseif(isset($_POST['update'])){
		$tab['id']=$_POST['id'];
		$tab['lib']=$_POST['lib'];
		$tab['prix']=$_POST['prix'];
		$cont->validerupdate($tab);
	}
	elseif(isset($_GET['action'])){
	if($_GET['action']=='liste')
		$cont->listeProduit();
	elseif($_GET['action']=='ajout'){
	//$tab=[$_POST['lib'],$_POST['prix']];
		$cont->formAjoutProduit();
	}
}
	elseif(isset($_GET['idpu'])){
		$cont->updateProduct($_GET['idpu']);
}
	elseif(isset($_GET['idp'])){
		$cont->supProduct($_GET['idp']);

	}
	

	

else
 require('view/acc.php');

