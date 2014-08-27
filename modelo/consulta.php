<?php
$bd_host = "localhost";
$bd_usuario = "root";
$bd_password = "univalle";
$bd_base = "modaskuelle";

$con = mysql_connect($bd_host, $bd_usuario, $bd_password);

mysql_select_db($bd_base, $con);

$sql=mysql_query("SELECT * FROM tbcliente_medida",$con);


?>
<table style="border:1px solid #00F; color:#000; width:410px;">
<tr style="background:#09F;">
        <td>CodigoCliente</td>
        <td>Sexo</td>
        <td>LargoTotal</td>
        <td>AnchoEspalda</td>
        <td>Busto</td>
        <td>Cintura</td>
        <td>Cadera</td>
</tr>

<?php
while($row = mysql_fetch_array($sql)){
         echo "<tr>";
	 echo "<td>" .$row['codigo_cliente']."</td>";
         echo "<td>".$row['sexo_cliente']."</td>";
         echo "<td>".$row['largo_total']."</td>";
         echo "<td>".$row['ancho_espalda']."</td>";
         echo "<td>".$row['busto']."</td>";
         echo "<td>".$row['cintura']."</td>";
         echo "<td>".$row['cadera']."</td>";
         echo "</tr>";
}
?>
</table>
