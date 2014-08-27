<?php
$bd_host = "localhost";
$bd_usuario = "root";
$bd_password = "univalle";
$bd_base = "modaskuelle";

$con = mysql_connect($bd_host, $bd_usuario, $bd_password);

mysql_select_db($bd_base, $con);

$sql=mysql_query("SELECT * FROM tbcliente",$con);


?>
<table style="border:1px solid #00F; color:#000; width:410px;">
<tr style="background:#0CF;">
         <td>Nombre</td>
        <td>Apellido</td>
        <td>Codigo</td>
        <td>Cedula</td>
        <td>Sexo</td>
        <td>Telefono</td>
        <td>ValorTotal</td>
        <td>Saldo</td>
        <td>Abono</td
        ><td>Servicio</td>
</tr>
<?php
while($row = mysql_fetch_array($sql)){
    echo "<tr>";
    echo "<td>".$row['nombre_cliente']."</td>";
    echo "<td>".$row['apellido_cliente']."</td>";
    echo "<td>".$row['codigo_cliente']."</td>";
    echo "<td>".$row['id_cliente']."</td>";
    echo "<td>".$row['sexo']."</td>";
    echo "<td>".$row['telefono']."</td>";
    echo "<td>".$row['valor_total']."</td>";
    echo "<td>".$row['saldo']."</td>";
    echo "<td>".$row['abono']."</td>";
    echo "<td>".$row['servicio']."</td>";
    echo "</tr>";
}
?>

</table>

