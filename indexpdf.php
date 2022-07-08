<?php

//AUTOLOAD DO COMPOSER
require __DIR__ .'/vendor/autoload.php';
require __DIR__ . "/view/tabelapdf.php";


use Dompdf\Dompdf;
use Dompdf\Options;

//Instancia de Options

$options = new Options();
$options->setChroot(__DIR__);


//INSTANCIA DE dompdf
$dompdf = new Dompdf($options);
//CARREGA O HTML PARA DENTRO DA CLASSE

//$dompdf->loadHtml('<b>teste</b>');
$dompdf->loadHtmlFile(__DIR__ .'/view/tabelapdf.php');
//renderizar o arquivo pdf
$dompdf->render();

header('Content-type: application/pdf');

echo $dompdf->output();
 
?>