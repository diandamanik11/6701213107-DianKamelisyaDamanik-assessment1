<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$angka1 = $_POST["angka1"];
	$angka2 = $_POST["angka2"];
	$operasi = $_POST["operasi"];


	if ($operasi == "+") {
		$hasil = $angka1 + $angka2;
		echo "Hasil penambahan: " . $hasil;
	} else if ($operasi == "-") {
		$hasil = $angka1 - $angka2;
		echo "Hasil pengurangan: " . $hasil;
	} else if ($operasi == "*") {
		$hasil = $angka1 * $angka2;
		echo "Hasil perkalian: " . $hasil;
	} else {
		echo "Operasi tidak valid.";
	}
}




?>
