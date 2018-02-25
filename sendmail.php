<?php
	$nombre =$_POST["nombre"];
	$email =$_POST["email"];
	$evento =$_POST["evento"];
	$tipo =$_POST["tipo"];
	$evidencia1 =$_POST["evidencia1"];
	$evidencia2 =$_POST["evidencia2"];
	$persona1 =$_POST["persona1"];
	$persona2 =$_POST["persona2"];
	$persona3 =$_POST["persona3"];
	$persona4 =$_POST["persona4"];

	$msg = "Nombre de la empresa: " . $nombre . "<br> Email:" . $email . "<br>Evento: " . $evento . "<br>Tipo de empresa: " .$tipo . "<br><br>Url de la evidencia:<br>".$evidencia1."<br>.". $evidencia2 . "<br><br>Solicitando asistencia de: <br>".$persona1."<br>".$persona2."<br>".$persona3."<br>".$persona4."<br>"; 
	$msg = wordwrap($msg,70);
	$subject = "acredicación - " . $nombre;
	// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <webmaster@barraza.mx>' . "\r\n";
//$headers .= 'Cc: myboss@example.com' . "\r\n";

	// send email
		mail("sergio@barraza.mx",$subject, $msg, $headers);
header("Refresh:0; url=prensa.html");
?>