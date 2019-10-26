<?php

require "../vendor/autoload.php";
use jokodm\Datamining\Klasifikasi\DecisionTree;
use jokodm\Datamining\Dataset\Demo\GolfNominal;

// menggunakan data dari class pada file jokodm\Datamining\Dataset\Demo\GolfNominal 
// dan didalam nya menggunakan file bermain-golf-nominal.csv yang berada pada jokodm\Datamining\data\bermain-golf-nominal.csv
// file bermain-golf-nominal.csv berisi data-data training
// Silahkan rubah dataset sesuai dengan kasus anda
$dataset = new GolfNominal();

$klasifikasi = new DecisionTree();

$klasifikasi->train($dataset->getSamples(), $dataset->getTargets());

$pred = $klasifikasi->predict(['cerah','normal','normal','tidak']);

if ($pred == 'Main'){
    echo "masuk ke dalam kelas <b>bermain golf </b>";
}else{
    echo "masuk ke dalam kelas <b>tidak bermain golf</b>";
}

?>