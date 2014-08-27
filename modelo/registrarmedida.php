<?php
$bd='modaskuelle';
$conexion=mysql_connect('localhost','root','univalle');
mysql_select_db($bd, $conexion);

// Comprobamos si el nombre de usuario o la cuenta de correo ya existÃ­an
if (isset($_POST["codcliente"])&&!empty($_POST["codcliente"])) {
$codcliente = $_POST["codcliente"];
$se = $_POST["sexo"];
$larg = $_POST["largo"];
$anches = $_POST["ancho"];
$bust = $_POST["busto"];
$cintu = $_POST["cintura"];
$cader = $_POST["cadera"];


$query = "INSERT INTO tbcliente_medida (codigo_cliente,sexo_cliente,largo_total,ancho_espalda,busto,cintura,cadera) VALUES ('$codcliente', '$se','$larg','$anches','$bust','$cintu','$cader');" ;

if(mysql_query($query))
{

echo "Registrado Correctamente". mysql_error() ;

}
 }
 else
{
echo "X ERROR: Fallo al registrar Usuario : ". mysql_error() ;
}

?>
