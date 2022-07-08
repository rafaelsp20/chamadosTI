<?php 

	require_once "../../classes/conexao.php";
	require_once "../../classes/chamados.php";

	$obj= new chamados();

	$idcargo=$_POST['idcargo'];

	echo $obj->excluir($idcargo);

?>


<?php

use Dompdf\Dompdf;
//AUTOLOAD DO COMPOSER
require __DIR__ .'/vendor/autoload.php';

$dompdf = new Dompdf();
$dompdf->loadHtml("<b>/view/tabelapdf.php</b>");

ob_start();
require __DIR__ . "/view/tabelapdf.php";
$dompdf->loadHtml(ob_get_clean());

//INSTANCIA DE dompdf
//$dompdf->setPaper(size: "a4");

$dompdf->setPaper('A4', 'portrait');

//renderizar o arquivo pdf
$dompdf->render();

$dompdf->stream();

?>