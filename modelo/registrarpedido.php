<?php
$bd="modaskuelle";
$conexion=mysql_connect('localhost','root','univalle');
mysql_select_db($bd, $conexion);

$codorden = $_POST['codigo'];
$nombre = $_POST['nombre'];
$apell = $_POST['apellido'];
$codcli = $_POST['codigocliente'];
$tele = $_POST['telefono'];
$fecharec = $_POST['fecharecibido'];
$fechaent = $_POST['fechaentrega'];
$area = $_POST['area'];
$est = $_POST['estado'];
$art = $_POST['articulo'];

if((!empty ($codorden))||(!empty ($nombre))||(!empty ($apell))||(!empty ($codcli))||(!empty ($tele)))
{


    $query = "INSERT INTO tbpedido (codigo_orden, nombre_cliente, apellido_cliente, codigo_cliente, telefono, fecharecibido, fechaentrega, area_produccion, estado, articulo)  VALUES ('$codorden', '$nombre','$apell','$codcli','$tele','$fecharec','$fechaent','$area','$est','$art');" ;


if(mysql_query($query))
{

echo "Registrado Correctamente". mysql_error() ;

}
else
{
echo "X ERROR: Fallo al registrar Usuario : ". mysql_error() ;
}
}
else
{
    echo "X ERROR: Error al registrar pedido".  mysql_error();
}

?>
<SCRIPT LANGUAGE="javascript">
			location.href = "../vista/home.php";
			</SCRIPT>