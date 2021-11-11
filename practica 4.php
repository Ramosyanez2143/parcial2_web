<?php

 $nombre= $_GET ['nombre'];
 $apellidos= $_GET ['apellidos'];

 
 echo "nombre:" . $nombre ."<br/>";
 echo "apellidos:" . $apellidos ."<br/>";
 

    $pregunta1 = $_GET["p1"]; $pregunta2 = $_GET["p2"]; $pregunta3 = $_GET["p3"];
    $lamento = $_GET["lamento"]; $borracho = $_GET["borracho"]; $fuente = $_GET["fuente"];
    $pregunta7 = $_GET["p7"]; $pregunta8 = $_GET["p8"]; $pregunta9 = $_GET["p9"];

	$mensaje = "";
    $aciertos = 0;

	if ($pregunta1 == "r2") {
		$aciertos = $aciertos + 1;
	}
	if ($pregunta2 == "r3") {
		$aciertos = $aciertos + 1;
	}
	if ($pregunta3 == "r4") {
		$aciertos = $aciertos + 1;
	}
   {
    echo "<br><br>soy como un lamento:<br>" . $lamento;
    $aciertos = $aciertos + 1;
}
{
    echo "<br><br>y yo estoy aqui :<br>" . $borracho;
    $aciertos = $aciertos + 1;
}
{
    echo "<br><br>alla en la fuente:<br>" . $fuente;
    $aciertos = $aciertos + 1;
}
	if ($pregunta7 == "r2") {
		$aciertos = $aciertos + 1;	
	}
	if ($pregunta7 == "r3") {
		$aciertos = $aciertos + 1;	
	}
	if ($pregunta7 == "r4") {
		$aciertos = $aciertos + 1;	
	}
	if ($pregunta8 == "r2") {
		$aciertos = $aciertos + 1;	
	}
	if ($pregunta8 == "r4") {
		$aciertos = $aciertos + 1;	
	}
	if ($pregunta9 == "r1") {
		$aciertos = $aciertos + 0;	
	}
	if ($pregunta9 == "r2") {
		$aciertos = $aciertos + 1;	
	}
	if (($aciertos == 0)) {
		$mensaje="muy mal";
	}
	else if (($aciertos == 1)) {
		$mensaje="menos mal";
	}
	 else if (($aciertos ==2)) {
		$mensaje="mal";
	}
	 else if (($aciertos ==3)) {
		$mensaje="te falto ceja";
	}
	else if (($aciertos ==4)) {
		$mensaje="bien";
	}
	else if (($aciertos ==5)) {
		$mensaje="bien 2";
	}
	else if (($aciertos ==6)) {
		$mensaje="bien 3";
	}
	else if (($aciertos ==7)) {
		$mensaje="muy bien";
	}
	else if (($aciertos ==8)) {
		$mensaje="muy bien 2";
	}
	else if (($aciertos ==9)) {
		$mensaje="muy bien 3";
	}
	

   
	


	echo "<br><br>aciertos:<br>" . $aciertos;
	echo "<br><br>" . $mensaje;







?>