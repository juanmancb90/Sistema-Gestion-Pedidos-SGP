<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <link rel="stylesheet" type="text/css" href="../controlador/js/estilos.css"/>     <!-- llamado de la hoja de estilos -->


	
	<script type="text/javascript" language="javascript">
	$(function() {
		$( "button, input:submit, a", ".demo" ).button();
		$( "a", "form2" ).click(function() { return false; });
	});
	</script>


 <script src="../vista/js/jquery.js" type="text/javascript"></script> <script src="../controlador/js/jquery.validate.js" type="text/javascript"></script>
 
<script>
  $("#exito").click(function () {
  $("#exito").fadeOut("slow");
  });
  </script>

 <script language="JavaScript" type="text/javascript">

if ( typeof XMLHttpRequest == "undefined" )
XMLHttpRequest = function(){return new ActiveXObject(navigator.userAgent.indexOf("MSIE 5") >= 0 ?"Microsoft.XMLHTTP" : "Msxml2.XMLHTTP2");};
var ajax=new XMLHttpRequest();

function _Ajax()
{
var usuario=document.getElementById("usuario").value;
var contraseña=document.getElementById("contraseña").value;
var email=document.getElementById("email").value;
ajax.open("POST","../modelo/registrar.php",true);
ajax.onreadystatechange=function(){

    if(ajax.readyState==4)
     {
     var respuesta=ajax.responseText;
     document.getElementById('exito').innerHTML=respuesta;
     }
    }
ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
ajax.send("usuario="+usuario+"&contraseña="+contraseña+"&email="+email);
}
</script>

<script language="JavaScript" type="text/javascript">

function _Ajax2()
{
    var usuario=document.getElementById("user").value;
var contraseña=document.getElementById("pass").value;

$.ajax({type:"POST",url:"../modelo/validar_usuario.php",data:"user="+usuario+"&pass="+contraseña,success:function(msg){
$("#sup").html(msg);
}})
}
/*]]>*/
</script>

 <title>Proyecto</title>

</head>
<body>

<div class="principal"> <p>
</p>
<div class="banner">
  <p>SGP</p>
</div>
<div id="log"></div>
</div>

  
<div id="marco">
  
</div>

<div id="login">

 <form name="form1"  id="form1" style="left: 3px; font-size: 16px;">
    <table width="348" height="83" border="0">
      <tr>
        <td colspan="3"><div align="center">Login</div></td>
      </tr>
      <tr>
        <td width="101"><div align="center">Usuario:</div></td>
        <td width="101"><label for="user"></label>
          <div align="center">
            <input type="text" name="user" id="user" />
        </div></td>
        <td width="105"><div align="center"></div></td>
      </tr>
      <tr>
        <td><div align="center">Contraseña:</div></td>
        <td><label for="pass"></label>
          <div align="center">
            <label for="pass"></label>
            <input type="password" name="pass" id="pass"/>
        </div></td>
        <td><div align="center">
          
           <input id="botton" name="button" value="Entrar" type="button" onclick="javascript:_Ajax2()" />
        </div></td>
      </tr>
    </table>
  </form>

</div>
<div id="cuerpo">

informacion

</div>

<div class="pie-pagina">
</div>
<div id="lado1">
</div>
<div id="lado2">
</div>
<div id="superio"></div>
<div id="sup"></div>
<img src="../controlador/images/degradado.png" alt="" width="1357" height="66" id="background1" title="" />
<img src="../controlador/images/degradado.png" alt="" width="208" id="background2" title="" />
<img src="../controlador/images/degradado.png" alt="" width="236" id="background" title="" />

</body>
</html>
