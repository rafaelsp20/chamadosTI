<?php

//AUTOLOAD DO COMPOSER
require __DIR__ .'../../vendor/autoload.php';

use Dompdf\Dompdf;
use Dompdf\Options;

//Instancia de Options

$options = new Options();
$options->setchroot( __DIR__ );


//INSTANCIA DE dompdf
$dompdf = new Dompdf($options);
//CARREGA O HTML PARA DENTRO DA CLASSE
$dompdf->loadhtmlFile(__DIR__ . 'tabelapdf.php');
//renderizar o arquivo pdf
$dompdf->render();

header('Content-type: application/pdf');
echo $dompdf->output();
 
?>



