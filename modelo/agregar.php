<?php
session_start();
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$bd="podmusix";
$conexion=mysql_connect('localhost','root');
mysql_select_db($bd, $conexion);
if (isset($_POST["producto"])) {
 $codigo= $_POST["producto"];
$_SESSION["producto"];
 $sql=mysql_query("SELECT * FROM musica WHERE codigo= '$codigo';");
$sql2=$sql;

echo "<table class='tabla'  width='700' border='1px' style=' font-family: Calibri; font-size: 13px; border: 1px solid #06F; border-collapse: collapse; background-color:#07F; color: white'>";
echo "<tr>
       
        <td><strong>Codigo</strong></td>
        <td><strong>Cancion</strong></td>
        <td><strong>Album</strong></td>
        <td><strong>Artista</strong></td>
        <td><strong>Genero</strong></td>
        <td><strong>Precio$</strong></td>
     </tr>";
while($row = mysql_fetch_array($sql2)){
    //echo "<td class='in'>".$row['item']."</td>";
    echo "<td class='in'>".$row['codigo']."</td>";
    echo "<td class='in'>".$row['cancion']."</td>";
    echo "<td class='in'>".$row['album']."</td>";
    echo "<td class='in'>".$row['artista']."</td>";
    echo "<td class='in'>".$row['genero']."</td>";
    echo "<td class='in'>".$row['precio']." </td>";
     echo "<td class='in'>".$row['precio']++." </td></tr>";


}

}
else{
    echo 'NO EXISTE SU BUSQUEDA';
}


?>
