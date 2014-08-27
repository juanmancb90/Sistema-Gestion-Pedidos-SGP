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

if(!empty ($cod))
{
if(!empty ($lar))
{
    $sql2 = "UPDATE tbcliente_medida SET largo_total='$lar' where codigo_cliente='$cod'";
if(mysql_query($sql2))
{

    echo "Cambios Efectuados". mysql_error() ;

}
else
 {
    echo "X ERROR: Error en la actualizacion". mysql_error() ;
 }
}
if (!empty ($anchoes))
{

	$sql2 = "UPDATE tbcliente_medida SET ancho_espalda='$anchoes' where codigo_cliente='$cod'";
    if(mysql_query($sql2))
    {
       echo "Cambios Efectuados". mysql_error() ;
    }
    else
    {
    echo "X ERROR: Error en la actualizacion". mysql_error() ;
    }
}
if(!empty ($bust))
{
    $sql2 = "UPDATE tbcliente_medida SET busto='$bust' where codigo_cliente='$cod'";
    if(mysql_query($sql2))
    {
       echo "Cambios Efectuados". mysql_error() ;
    }
    else
    {
    echo "X ERROR: Error en la actualizacion". mysql_error() ;
    }

}
if(!empty ($cintur))
{
    $sql2 = "UPDATE tbcliente_medida SET cintura='$cintur' where codigo_cliente='$cod'";
    if(mysql_query($sql2))
    {
       echo "Cambios Efectuados". mysql_error() ;
    }
    else
    {
    echo "X ERROR: Error en la actualizacion". mysql_error() ;
    }

}
if (!empty ($cade))
{
    $sql2 = "UPDATE tbcliente_medida SET cadera='$cade' where codigo_cliente='$cod'";
    if(mysql_query($sql2))
    {
       echo "Cambios Efectuados". mysql_error() ;
    }
    else
    {
    echo "X ERROR: Error en la actualizacion". mysql_error() ;
    }
}
}
else
{
     echo "X ERROR: Error en la actualizacion". mysql_error() ;
}

?>
<SCRIPT LANGUAGE="javascript">
			location.href = "../vista/home.php";
			</SCRIPT>