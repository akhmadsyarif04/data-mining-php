<?php

require '../vendor/autoload.php';
use jokodm\Datamining\Klasifikasi\NaiveBayes;
use jokodm\Datamining\Dataset\Demo\BermainGolf;

// menggunakan data dari class pada file jokodm\Datamining\Dataset\Demo\BermainGolf 
// dan didalam nya menggunakan file bermain-golf-numerik.csv yang berada pada jokodm\Datamining\data\bermain-golf-numerik.csv
// file bermain-golf-numerik.csv berisi data-data training
// Silahkan rubah dataset sesuai dengan kasus anda
$dataset = new BermainGolf();

$klasifikasi = new NaiveBayes();
$klasifikasi->train($dataset->getSamples(), $dataset->getTargets());

// kasus yang dicari
$pred = $klasifikasi->predict(['cerah',70,80,'tidak']);

if ($pred == 'ya'){
    echo "masuk ke dalam kelas <b>bermain golf </b>";
}else{
    echo "masuk ke dalam kelas <b>tidak bermain golf</b>";
}

?>