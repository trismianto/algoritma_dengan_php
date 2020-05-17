<?php
	/*
	Penampilkan Penggabungan Variabel
	*/

	$nama  = "Trismianto";
	$prodi = "DIV Manajemen Informasi Kesehatan";

    echo "$nama belajar algoritma bersama prodi $prodi";
    echo "<br>";
    echo $nama . " belajar algoritma bersama prodi " . $prodi;
    echo "<br>";

    $harga = 75000;

    echo "harga buku ini $harga";
    echo "<br>";
    echo "harga buku ini " . number_format($harga);
    echo "<br>";
    echo "harga buku ini " . "Rp." . number_format($harga,0,",",".");
?>