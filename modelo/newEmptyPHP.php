<?php
session_start();
$bd="modaskuelle";
$conexion=mysql_connect('localhost','root','univalle');
mysql_select_db($bd, $conexion);

$cod=$_POST['codigo'];
$lar = $_POST['largo'];
$anchoes = $_POST['anchoespalda'];
$bust = $_POST['busto'];
$cintur = $_POST['cintura'];
$cade = $_POST['cadera'];

if(!empty ($lar))
{


}

$sql2 = "UPDATE tbcliente_medida SET largo_total='$lar', ancho_espalda ='$anchoes', busto='$bust', cintura='$cintur', cadera='$cade' where codigo_cliente='$cod'";
if(mysql_query($sql2))
{



echo "Cambios Efectuados". mysql_error() ;




}

else{
    echo "X ERROR: Error en la actualizacion". mysql_error() ;
}

?>
<SCRIPT LANGUAGE="javascript">
			location.href = "../vista/home.php";
			</SCRIPT>