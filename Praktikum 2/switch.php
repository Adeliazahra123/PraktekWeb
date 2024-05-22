<?php 
// Bikin Variabel Nilai A,B,C,D,E

$grade = "A";
$predikat;

switch ($grade) {
	case "A":
		$predikat="Sangat Baik";
		break;
	case "B":
		$predikat="baik ";
		break;
	case "C":
		$predikat="Cukup";
		break;
	case "D":
		$predikat="Kurang";
		break;
	case "E":
		$predikat="Wassalam";
		break;
	default:
		$predikat="Nilai Tidak Ditemukan";
		break;
}

echo $predikat;

?>