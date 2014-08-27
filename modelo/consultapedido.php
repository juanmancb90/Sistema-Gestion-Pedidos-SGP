<?php
$bd_host = "localhost";
$bd_usuario = "root";
$bd_password = "univalle";
$bd_base = "modaskuelle";

$con = mysql_connect($bd_host, $bd_usuario, $bd_password);

mysql_select_db($bd_base, $con);

$sql=mysql_query("SELECT * FROM tbpedido",$con);

?>
<table style="border:1px solid #00F; color:#000; width:430px;">
<tr style="background:#06F;">
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
</tr>

<?php
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
}
?>
</table>
