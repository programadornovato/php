<?php
use Dompdf\Dompdf;
include_once "dompdf/autoload.inc.php";
/*
$dompdf=new Dompdf();
$dompdf->loadHtml("Hola pdf");
$dompdf->setPaper('A4', 'landscape');
$dompdf->render();
$dompdf->stream();
*/
$html = file_get_contents("http://localhost/php/producto.php?id=2");
// Inicializamos dompdf
$dompdf = new Dompdf();
// Le pasamos el html a dompdf
$dompdf->loadHtml($html);
// Colocamos als propiedades de la hoja
$dompdf->setPaper("A7", "landscape");
// Escribimos el html en el PDF
$dompdf->render();
// Ponemos el PDF en el browser
$dompdf->stream();