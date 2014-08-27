<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <link rel="stylesheet" type="text/css" href="../vista/js/estiloconsulta.css"/>
 <script src="../vista/js/jquery.js" type="text/javascript"></script>
  
   <script src="../controlador/js/jquery.validate.js" type="text/javascript"></script>
   
   <script language="JavaScript" type="text/javascript">


function Ajax()
{
    var codcliente=document.getElementById("codigo").value;

$.ajax({type:"POST",url:"../modelo/consultarcliente.php",data:"codigo="+codcliente,success:function(msg){
$("#tabla").html(msg);
}})
}

</script> 
<title>Consultar</title>

  
</head>

<body>
<div id="content">
<form id="infocliente" name="form1" action="../modelo/consultarcliente.php" method="post" style="left: 44px">
    
    <table id="datos" width="392" height="86" border="0">
       <tr>
         <td width="208" height="21"> Codigo Del Cliente:
           <div align="left">
             <input type="text" name="codigo" id="codigo"/>
          </div></td>       
       </tr>
     
          <tr>
          <td>
              <input id="boton" name="boton" value="Consultar" type="submit"/>
     <input id="limpiar" name="limpiar" value="Limpiar" type="reset" />
     </td>
          </tr>
    </table>
     <div id="tabla">
	<?php
	include('../modelo/consulta2.php');
	 ?>
    </div>
</form></div>
</body>

</html>
