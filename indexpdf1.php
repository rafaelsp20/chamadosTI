<?php 

use Dompdf\Dompdf;
//AUTOLOAD DO COMPOSER
require __DIR__ .'/vendor/autoload.php';

$pdf = new Dompdf();
//$dompdf->loadHtml("<b>/view/tabelapdf.php</b>");

//ob_start();
//require __DIR__ . "/view/tabelapdf.php";
//$dompdf->loadHtml(ob_get_clean());

//INSTANCIA DE dompdf
//$dompdf->setPaper(size: "a4");

//$dompdf->setPaper('A4', 'portrait');

//renderizar o arquivo pdf
//$dompdf->render();

//$dompdf->stream();

//*/?>


<?php
// Carregar dompdf
//require_once './lib/dompdf/autoload.inc.php';
//use Dompdf\Dompdf;
$id=$_GET['idvenda'];
$html=file_get_contents("http://localhost/promobit/sistemav3/view/tabelapdf.php?idvenda=".$id); 
// Instanciamos um objeto da classe DOMPDF.
//$pdf = new DOMPDF(); 
// Definimos o tamanho do papel e orientação.
$pdf->setPaper('A4', 'landscape');
//$pdf->set_paper('a4', 'portrait);
//""array(0,0,125,250)); 
// Carregar o conteúdo html.
$pdf->load_html(($html)); 
// Renderizar PDF.
$pdf->render(); 
// Enviamos pdf para navegador.
//--->>>>>$pdf->stream('relatorioVenda.pdf');
$pdf->stream("relatorioOcorrencias.pdf", array("Attachment" => false));
