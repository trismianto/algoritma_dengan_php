<?php
	/*
	Menghitung Luas dan Keliling
	Bangun Persegi Panjang
	*/

	//BAGIAN INPUT
	$panjang = 100;
	$lebar   =  50;

	//BAGIAN PROSES
	$luas     = $panjang * $lebar;
	$keliling = (2*$panjang) + (2*$lebar);

	//BAGIAN OUTPUT
	echo "persegi panjang dengan panjang = $panjang <br>";
	echo "dan lebarnya = $lebar <br>";
	echo "maka memiliki luas = $luas <br>";
	echo "dan kelilingnya = $keliling";
?>