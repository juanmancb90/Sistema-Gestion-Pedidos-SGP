<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="../vista/js/estilo3.css" rel="stylesheet" type="text/css"/>
         <script src="../vista/js/jquery.js" type="text/javascript"></script>
  
   <script src="../controlador/js/jquery.validate.js" type="text/javascript"></script>


    <script language="JavaScript" type="text/javascript">

if ( typeof XMLHttpRequest == "undefined" )
XMLHttpRequest = function(){return new ActiveXObject(navigator.userAgent.indexOf("MSIE 5") >= 0 ?"Microsoft.XMLHTTP" : "Msxml2.XMLHTTP2");};
var ajax=new XMLHttpRequest();

function _Ajax()
{
    var larg=document.getElementById("largo").value;
    var anc=document.getElementById("ancho").value;
    var bus=document.getElementById("busto").value;
    var cin=document.getElementById("cintura").value;
    var cad=document.getElementById("cadera").value;


$.ajax({type:"POST",url:"/modelo/actualizarcliente.php",data:"largo="+larg+"&ancho="+anc+"&busto="+bus+"&cintura="+cin+"&cadera="+cad,success:function(msg){
$("#msg").html(msg);
}})
}

</script>
        <title>Actualizar</title>
    </head>
    <body>
    <div  id="content">
      <form id="infocliente" name="form1" action="../modelo/actualizarcliente.php" method="post" style="left: 44px">
    
      <table id="datos" width="392" height="188" border="0">
       <tr>
         <td width="208" height="21"> Codigo:
         <div align="left">
             <input type="text" name="codigo" id="codigo" /></div>
         </td>
         <td> Largo Espalda
          <div align="left">
             <input type="text" name="largo" id="largo"/>
          </div></td>

       </tr>
       <tr>
        <td width="174" height="21">Ancho de Espalda:
           <div align="left">
             <input type="text" name="anchoespalda" id="anchoespalda" />
          </div></td>
         <td height="21">Busto:
           <div align="left">
             <input type="text" name="busto" id="busto" />
          </div></td>
       
       </tr>
       <tr>
         <td height="21"> Cintura:
           <div align="left">
             <input type="text" name="cintura" id="cintura" />
          </div></td>
           <td height="53"> Cadera:
          <div align="left">
           <input type="text" name="cadera" id="cadera" />
        </div></td>   

      
      </tr>
          <tr>
          <td>
              <input id="boton" name="boton" value="Guardar Cambios" type="submit"  />
     <input id="limpiar" name="limpiar" value="Limpiar" type="reset" />
     </td>
          </tr>
    </table>
     <div id="tabla">
	<?php
	 include('../modelo/consulta.php');
	 ?>
    </div>
</form></div>  
</body>
</html>
