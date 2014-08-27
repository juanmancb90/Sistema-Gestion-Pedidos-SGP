<?php

$bd='modaskuelle';
$conexion=mysql_connect('localhost','root','univalle');
mysql_select_db($bd, $conexion);

			

    $codcliente = $_POST['codigo'];
    $nom = $_POST['nombre'];
    $apell = $_POST['apellido'];
    $cc = $_POST['cedula'];
    $se = $_POST['sexo'];
    $tele = $_POST['telefono'];
    $valtotal = $_POST['valor'];
    $sald = $_POST['saldo'];
    $abon = $_POST['abono'];
    $serv = $_POST['servicio'];
    $larg = $_POST['largo'];
    $anches = $_POST['anchoespalda'];
    $bust = $_POST['busto'];
    $cintu = $_POST['cintura'];
    $cader = $_POST['cadera'];

    if((!empty ($codcli))&&(!empty ($nom))&&(!empty ($apell))&&(!empty ($cc)))
    {
         $query = "INSERT INTO tbcliente (nombre_cliente, apellido_cliente, codigo_cliente, id_cliente, sexo, telefono, valor_total, saldo, abono, servicio)  VALUES ('$nom','$apell','$codcliente','$cc','$se','$tele','$valtotal','$sald','$abon','$serv');" ;
         $query2= "INSERT INTO tbcliente_medida (codigo_cliente, sexo_cliente, largo_total, ancho_espalda ,busto, cintura, cadera) VALUES ('$codcliente','$se','$larg','$anches','$bust','$cintu','$cader');" ;
        if((mysql_query($query))&&(mysql_query($query2)))
        {
            echo "Registro Exitoso: ".mysql_error();
        }
        else
        {
            echo "X ERROR: Fallo al registrar Cliente : ". mysql_error() ;
        }
    }
    else
    {
        echo "ERROR: por favor Ingrese como minimo codigo nombre apellido e identificacion".mysql_error();
    }
?>
<SCRIPT LANGUAGE="javascript">
			location.href = "../vista/home.php";
			</SCRIPT>
