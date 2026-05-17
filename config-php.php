<?php
date_default_timezone_set('America/Bogota');    
$Object = new DateTime();

/*$DateAndTime = $Object->format("d-m-Y h:i:s a");  
echo "The current date and time are $DateAndTime.";
echo "El día es:".strftime("%a");*/

/*$hora_sola = $Object->format("h:i"); echo "<br>".$hora_sola;

if( ($hora_sola >= "02:00") && ($hora_sola <= "02:30") ){
    echo "Estamos en vivo";
}else{
    echo "NO estamos en vivo";
};*/
//$conexion = new mysqli("localhost", "iglesi31_iglesiadecristoencali", "Vainilla30*.", "iglesi31_idc_cali");
$conexion = new mysqli("localhost", "root", "", "idccali");
$conexion->query("SET NAMES 'utf8'");
if ($conexion->connect_error) { die("ERROR: No se puede conectar al servidor: " . $conexion->connect_error);}
?>