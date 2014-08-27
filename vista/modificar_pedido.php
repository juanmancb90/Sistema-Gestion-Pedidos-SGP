<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="../vista/js/estilo4.css" rel="stylesheet" type="text/css"/>
         <script src="../vista/js/jquery.js" type="text/javascript"></script>

   <script src="../controlador/js/jquery.validate.js" type="text/javascript"></script>

<script src="../vista/js/jquery.js" type="text/javascript"></script>

   <script src="../controlador/js/jquery.validate.js" type="text/javascript"></script>


    <script language="JavaScript" type="text/javascript">

if ( typeof XMLHttpRequest == "undefined" )
XMLHttpRequest = function(){return new ActiveXObject(navigator.userAgent.indexOf("MSIE 5") >= 0 ?"Microsoft.XMLHTTP" : "Msxml2.XMLHTTP2");};
var ajax=new XMLHttpRequest();
function _Ajax()
{
    var orden=document.getElementById("codigo").value;
    var nom=document.getElementById("nombre").value;
    var ape=document.getElementById("apellido").value;
    var cocli=document.getElementById("codcliente").value;
    var tel=document.getElementById("telefono").value;
    var fecharec=document.getElementById("fecharecibido").value;
    var fechaent=document.getElementById("fechaentrega").value;
    var areap=document.getElementById("area").value;
    var est=document.getElementById("estado").value;
    var art=document.getElementById("articulo").value;

$.ajax({type:"POST",url:"../modelo/actualizarpedido.php",data:"orden="+orden+"&nombre="+nom+"&apellido="+ape+"&codigo="+cocli+"&telefono="+tel+"&fecharecibido="+fecharec+"&fechaentrega="+fechaent+"&areapruduccion="+areap+"&estado="+est+"&articulo="+art,success:function(msg){
$("#msg").html(msg);
}})
}
</script>
<title>Actualiozar Pedido</title>
</head>
<body>
<h2>Actualizar  Pedido</h2>
<div id="actualizar">

<form id="form1" name="form1" action="../modelo/actualizarpedido.php" method="post" style="left:44px">
 <table id="table" width="392" height="199" border="0">
      
      <tr>
       <td height="21">Codigo de la Orden: 
            <div align="left">
            <input name="orden" type="text" id="orden" />
        </div></td>
  
        <td height="21"> Nombre:
          <div align="left">
           <input type="text" name="nombre" id="nombre" />
        </div></td>
      </tr>
      <tr>
       <td height="21">Apellido: 
         <div align="left">
            <input type="text" name="apellido" id="apellido" />
          </div></td>
       <td height="21">Codigo del Cliente:
        <div align="left">
            <input type="tex" name="codigo" id="codigo" />
          </div></td>
         
      </tr>
      <tr>
      <td height="21">Telefono: 
          <div align="left">
         <input name="telefono" type="text" id="telefono" /></div>
       </td>
        <td height="21">Fecha de Recibido: AAAA-MM-DD
          <div align="left">
            <input name="fecharecibido" type="text" id="fecharecibido" />
          </div>
       </td>
      </tr>
      <tr>
        <td height="21">Fecha de Entrega: AAAA-MM-DD
          <div align="left">
         <input name="fechaentrega" type="text" id="fechaentrega" /></div>
       </td>
       <td height="21">Area de Produccion: 
         <div align="left">
         <select name="area" id="area">
           <option value="Corte">Corte</option>
           <option value="Costura">Costura</option>
           <option value="Terminados">Terminados</option>
           </select>
         </div>
       </td>
      </tr>
      <tr>
        <td height="21">Estado: 
          <div align="left">
          <select name="estado" id="estado">
            <option value="Produccion">Produccion</option>
            <option value="Terminado">Terminado</option>
            <option value="Entregado">Entregado</option>
          </select>
        </div>
       </td>
        <td height="21"> Articulo:
          <div align="left">
           <input type="text" name="articulo" id="articulo" />
        </div></td>
      </tr>
      <tr>
      <td>
      <input id="boton" name="boton" value="Guardar Pedido" type="submit" />
<input id="limpiar" name="limpiar" value="Limpiar" type="reset" />
      </td>
      </tr>
    </table>
 <p>&nbsp;</p>
 <div id="tabla">
       <?php
	 include('../modelo/consultapedido.php');
	 ?>
  </div>
    </form></div>
</body>
</html>

