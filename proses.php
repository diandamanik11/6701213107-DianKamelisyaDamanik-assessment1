<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$angka1 = $_POST["angka1"];
	$angka2 = $_POST["angka2"];
	$operasi = $_POST["operasi"];

	switch ($operasi) {
		case "+":
			$hasil = $angka1 + $angka2;
			echo "Hasil penambahan: " . $hasil;
			break;
		case "-":
			$hasil = $angka1 - $angka2;
			echo "Hasil pengurangan: " . $hasil;
			break;
		case "*":
			$hasil = $angka1 * $angka2;
			echo "Hasil perkalian: " . $hasil;
			break;
		default:
			echo "Operasi tidak valid.";
	}
}
?>
