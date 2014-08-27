<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
	<head>
		<title>registro Cliente</title>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
 
  <link href="../js/jquery-ui.css" rel="stylesheet" type="text/css"/>

  <script src="../js/jquery.js" type="text/javascript"></script>
  <script src="../js/jquery-ui.min.js"></script>
   <script src="../js/jquery.validate.js" type="text/javascript"></script>

  <script>
  $(document).ready(function() {
    $("#accordion").accordion();
  });
  </script>
    <script type="text/javascript" language="javascript">
 $().ready(function() {
$("#form2").validate({

});
});
 </script>
    <script language="JavaScript" type="text/javascript">

function _Ajax()
{
    var usuario=document.getElementById("usuario").value;
    var contraseña=document.getElementById("contraseña").value;
    var nueva=document.getElementById("nueva").value;
var correo=document.getElementById("email").value;


$.ajax({type:"POST",url:"Gestion_Cuenta.php",data:"usuario="+usuario+"&contraseña="+contraseña+"&nueva="+nueva+"&email="+correo,success:function(msg){
$("#msg").html(msg);
}})
}
/*]]>*/
</script>
		

	
	</head>
     <link rel="stylesheet" type="text/css" href="../js/estilos2.css"/> 
     <link rel="stylesheet" type="text/css" href="../js/estilos.css"/>     <!-- llamado de la hoja de estilos -->
     
 <link rel="stylesheet" href="../../themes/base/jquery.ui.all.css"/>

	<link rel="stylesheet" href="../demos.css"/>
	<script type="text/javascript" language="javascript">
	$(function() {
		$( "button, input:submit, a", ".demo" ).button();
		$( "a", "form2" ).click(function() { return false; });
	});
	</script>


 <script src="../js/jquery.js" type="text/javascript"></script> <script src="../js/jquery.validate.js" type="text/javascript"></script>
 
<script>
  $("#exito").click(function () {
  $("#exito").fadeOut("slow");
  });
  </script>


 <script type="text/javascript" language="javascript">
 $().ready(function() {
$("#form2").validate({
rules: {
confirm: {
required: true,
equalTo: "#contraseï¿½a"
}
}
});
});
 </script>

 <script language="JavaScript" type="text/javascript">
/*<![CDATA[*/
if ( typeof XMLHttpRequest == "undefined" )
XMLHttpRequest = function(){return new ActiveXObject(navigator.userAgent.indexOf("MSIE 5") >= 0 ?"Microsoft.XMLHTTP" : "Msxml2.XMLHTTP2");};
var ajax=new XMLHttpRequest();

function _Ajax()
{
var usuario=document.getElementById("usuario").value;
var contraseï¿½a=document.getElementById("contraseï¿½a").value;
var email=document.getElementById("email").value;
ajax.open("POST","registrar.php",true);
ajax.onreadystatechange=function(){

    if(ajax.readyState==4)
     {
     var respuesta=ajax.responseText;
     document.getElementById('exito').innerHTML=respuesta;
     }
    }
ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
ajax.send("usuario="+usuario+"&contraseï¿½a="+contraseï¿½a+"&email="+email);
}
/*]]>*/
</script>
<body>

	<!-- start player implementation -->
	<center>
   <div id="registro">
    
  <form id="form2" name="form2" action="javascript:_Ajax();" method="post" style="left: 3px">
    <table id="table" width="392" height="307" border="0">
      <tr>
        <td height="57"><div align="center">REGISTRATE</div></td>
      </tr>
      <tr>
        <td height="21"> Usuario:</td>
      </tr>
      <tr>
        <td width="323" height="28"><label for="usuario"></label>
          <div align="left">
            <input type="text" name="usuario" id="usuario" class="required" />
          </div></td>
      </tr>
      <tr>
        <td height="21">Contraseï¿½a:</td>
      </tr>
      <tr>
        <td height="24"><label for="contraseï¿½a"></label>
          <div align="left">
            <input type="password" name="contraseï¿½a" id="contraseï¿½a" class="required" />
          </div></td>
      </tr>
      <tr>
        <td height="21">Confirme contraseï¿½a:</td>
      </tr>
      <tr>
        <td height="24"><label for="confirm"></label>
          <div align="left">
            <input type="password" name="confirm" id="confirm" class="required"  />
          </div></td>
      </tr>
      <tr>
        <td height="21">Correo:</td>
      </tr>
      <tr>
        <td height="24"><label for="email"></label>
          <div align="left">
            <input name="email" type="text" class="required email" id="email" style="top: 247px"/>
          </div></td>
      </tr>
      <tr>
        <td height="39">
        </td>
      </tr>
    </table>
    
      <div class="demo"></div><!-- End demo -->

      <span class="demo">
      <input id="boton" name="boton" value="Enviar" type="submit" onclick="return validate(),_Ajax()" />
      <input id="limpiar" name="limpiar" value="Limpiar" type="reset"  />
      </span>
      <div style="display: none;" class="demo-description">
<p>Examples of the markup that can be used for buttons: A button element, an input of type submit and an anchor.</p>
</div><!-- End demo-description -->
    
<div id="exito"></div>
</form>
 
</div>
	

	

</center>


	</body>
</html>