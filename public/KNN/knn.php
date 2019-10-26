<?php

require '../vendor/autoload.php';
use jokodm\Datamining\Klasifikasi\KNearestNeighbors;

// ubah data mining ke dalam bentuk array
$datatrainingXdanY = [
        [1.2, 2.3], 
        [2.5, 4.6],
        [4, 1],
        [5.6, 1.2],
        [6, 3.5]
];
// ini adalah kelas dari data training sesuai x dan y nya pada datatrainingXdanY
$kelas = ['A', 'A', 'B', 'B', 'B'];

// gunakan algoritma knn dengan nilai k=3
$classifier = new KNearestNeighbors($k = 3);
$classifier->train($datatrainingXdanY, $kelas);

// cari kelas data testing dimana nilai x = 3 dan y = 2
$pred = $classifier->predict([3,2]);

// tampilkan ke browser
echo "Data testing x=3 dan y=2" . "<br>";
echo "Masuk ke dalam kelas <b>" . $pred . "</b><br>";

?>