<?php

$bd='modaskuelle';
$conexion=mysql_connect('localhost','root','univalle');
if(mysql_select_db($bd))
if (isset($_POST["ano"])) {
$ano = $_POST["ano"];
$mes = $_POST["mes"];
$dia= $_POST["dia"];

$sql=mysql_query("SELECT * FROM tbpedido WHERE YEAR(fechaentrega)= '$ano'or MONTH(fechaentrega)='$mes' or DAY(fechaentrega)='$dia'");
//muestra los datos consultados

echo "<table class='tabla'  width='700' border='1px' style=' font-family: Calibri; font-size: 13px; border: 1px solid #06F; border-collapse: collapse; background-color:#07F; color: white'>";
echo "<tr>
        <td>CodigoOrden</td>
        <td>Nombre</td>
        <td>Apellido</td>
        <td>CodigoCliente</td>
        <td>telefono</td>
        <td>FechaRecibido</td>
        <td>FechaEntrega</td>
        <td>Area</td>
        <td>Estado</td>
        <td>Articulo</td>
     </tr>";
while($row = mysql_fetch_array($sql)){
         echo "<tr>";
	 echo "<td>".$row['codigo_orden']."</td>";
         echo "<td>".$row['nombre_cliente']."</td>";
         echo "<td>".$row['apellido_cliente']."</td>";
         echo "<td>".$row['codigo_cliente']."</td>";
         echo "<td>".$row['telefono']."</td>";
         echo "<td>".$row['fecharecibido']."</td>";
         echo "<td>".$row['fechaentrega']."</td>";
         echo "<td>".$row['area_produccion']."</td>";
         echo "<td>".$row['estado']."</td>";
         echo "<td>".$row['articulo']."</td>";
         echo "</tr>";
}}
else{
    echo 'NO EXISTE SU BUSQUEDA';
}


?>
