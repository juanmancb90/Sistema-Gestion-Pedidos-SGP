<?php
session_start();
$bd="modaskuelle";
$conexion=mysql_connect('localhost','root','univalle');
mysql_select_db($bd, $conexion);


$codorden = $_POST['orden'];
$nombre = $_POST['nombre'];
$apell = $_POST['apellido'];
$codcli = $_POST['codigo'];
$tele = $_POST['telefono'];
$fecharec = $_POST['fecharecibido'];
$fechaent = $_POST['fechaentrega'];
$area = $_POST['area'];
$est = $_POST['estado'];
$art = $_POST['articulo'];

if((!empty ($codorden))&&(is_int($var)))
{
    if((!empty ($nombre))&&(is_string($nombre)))
    {
        $sql = "UPDATE tbpedido SET nombre_cliente='$nombre', codigo_cliente='$codcli', telefono='$tele', fecharecibido='$fecharec', fechaentrega='$fechaent', area_produccion='$area', estado='$est', articulo='$art' where codigo_orden='$codorden'";
        if(mysql_query($sql))
        {
            echo "Cambios Efectuados". mysql_error() ;
        }
        else
            {
                echo "X ERROR: Error en la Actualizacion". mysql_error() ;
            }
    }
    if((!empty ($apell))&&(is_string($apell)))
    {
        $sql = "UPDATE tbpedido SET apellido_cliente='$apell' where codigo_orden='$codorden'";
        if(mysql_query($sql))
        {
            echo "Cambios Efectuados". mysql_error() ;
        }
        else
            {
                echo "X ERROR: Error en la Actualizacion". mysql_error() ;
            }
    }
    if((!empty ($codcli))&&(is_int($codcli)))
    {
        $sql = "UPDATE tbpedido SET  codigo_cliente='$codcli' where codigo_orden='$codorden'";
        if(mysql_query($sql))
        {
            echo "Cambios Efectuados". mysql_error() ;
        }
        else
            {
                echo "X ERROR: Error en la Actualizacion". mysql_error() ;
            }
    }
    if((!empty ($tele))&&(is_int($tele)))
    {
        $sql = "UPDATE tbpedido SET telefono='$tele' where codigo_orden='$codorden'";
        if(mysql_query($sql))
        {
            echo "Cambios Efectuados". mysql_error() ;
        }
        else
            {
                echo "X ERROR: Error en la Actualizacion". mysql_error() ;
            }
    }
    if(!empty ($fecharec))
    {
        $sql = "UPDATE tbpedido SET fecharecibido='$fecharec' where codigo_orden='$codorden'";
        if(mysql_query($sql))
        {
            echo "Cambios Efectuados". mysql_error() ;
        }
        else
            {
                echo "X ERROR: Error en la Actualizacion". mysql_error() ;
            }
    }
    if(!empty ($fechaent))
    {
        $sql = "UPDATE tbpedido SET  fechaentrega='$fechaent' where codigo_orden='$codorden'";
        if(mysql_query($sql))
        {
            echo "Cambios Efectuados". mysql_error() ;
        }
        else
            {
                echo "X ERROR: Error en la Actualizacion". mysql_error() ;
            }
    }
    if((!empty ($area))&&(is_string($area)))
    {
        $sql = "UPDATE tbpedido SET  area_produccion='$area' where codigo_orden='$codorden'";
        if(mysql_query($sql))
        {
            echo "Cambios Efectuados". mysql_error() ;
        }
        else
            {
                echo "X ERROR: Error en la Actualizacion". mysql_error() ;
            }
    }
    if((!empty ($est))&&(is_string($est)))
    {
        $sql = "UPDATE tbpedido SET estado='$est' where codigo_orden='$codorden'";
        if(mysql_query($sql))
        {
            echo "Cambios Efectuados". mysql_error() ;
        }
        else
            {
                echo "X ERROR: Error en la Actualizacion". mysql_error() ;
            }
    }
    if((!empty ($art))&&(is_string($art)))
    {
        $sql = "UPDATE tbpedido SET articulo='$art' where codigo_orden='$codorden'";
        if(mysql_query($sql))
        {
            echo "Cambios Efectuados". mysql_error() ;
        }
        else
            {
                echo "X ERROR: Error en la Actualizacion". mysql_error() ;
            }
    }
}
else
{
    echo "X ERROR: Error en el proceso".mysql_error();
}

?>
<SCRIPT LANGUAGE="javascript">
			location.href = "../vista/home.php";
			</SCRIPT>