<?php 
	include 'Vegetable.php';
	include 'Cloth.php';
	$carotte = new Vegetable("idVEGE00","carotte", 1.3,"alain LEGRAND",time()+ 15*24*60*60);
	$artichaut = new Vegetable("idVEGE01","artichaut", 0.4,"michel LEPETIT",time()+ 20*24*60*60);
	$jean = new Cloth("idCLOTH00","jean", 45.90,"LEJEAN");
	$jacket = new Cloth("idCLOTH01","jacket", 73.90,"TOUCHO");
	$shirt = new Cloth("idCLOTH02","shirt", 15.90,"LAFLEUR");

	return [
		$carotte,
		$artichaut,
		$jean,
		$jacket,
		$shirt
	]
 ?>