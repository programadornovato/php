<?php
include_once "jugador1/pepe.php";
include_once "jugador2/luis.php";
include_once "jugador3/luis.php";


$vago=new elVago\pepe();
$vago->nombre();

$pato=new elPato\luis();
$pato->nombre();

$moco=new elMoco\luis();
$moco->nombre();