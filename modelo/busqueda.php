<?php

$bd='modaskuelle';
$conexion=mysql_connect('localhost','root','univalle');
if(mysql_select_db($bd))
if (isset($_POST["ano"])) {
$ano = $_POST["ano"];
$mes = $_POST["mes"];
$dia= $_POST["dia"];



//consulta todos los empleados 

$sql=mysql_query("SELECT * FROM musica WHERE cancion= '$ano'or artista='$mes' or genero='$dia'");
//muestra los datos consultados

echo "<table class='tabla'  width='700' border='1px' style=' font-family: Calibri; font-size: 13px; border: 1px solid #06F; border-collapse: collapse; background-color:#07F; color: white'>";
echo "<tr>
        <td><strong>Codigo</strong></td>
        <td><strong>Cancion</strong></td>
        <td><strong>Album</strong></td>
        <td><strong>Artista</strong></td>
        <td><strong>Genero</strong></td>
        <td><strong>Precio$</strong></td>
     </tr>";
while($row = mysql_fetch_array($sql)){
    echo "<td class='in'>".$row['codigo']."</td>";
    echo "<td class='in'>".$row['cancion']."</td>";
    echo "<td class='in'>".$row['album']."</td>";
    echo "<td class='in'>".$row['artista']."</td>";
    echo "<td class='in'>".$row['genero']."</td>";
    echo "<td class='in'>".$row['precio']."</td></tr>";
   

}}
else{
    echo 'NO EXISTE SU BUSQUEDA';
}


?>
