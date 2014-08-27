<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

  <script src="../vista/js/jquery.js" type="text/javascript"></script>

  <script src="../controlador/js/jquery.validate.js" type="text/javascript"></script>
   <script language="JavaScript" type="text/javascript">
       if ( typeof XMLHttpRequest == "undefined" )

               XMLHttpRequest = function(){return new ActiveXObject(navigator.userAgent.indexOf("MSIE 5") >= 0 ?"Microsoft.XMLHTTP" : "Msxml2.XMLHTTP2");};

    var ajax=new XMLHttpRequest();
    function Ajax()
    {
          var nom=document.getElementById("nombre").value;
          var ape=document.getElementById("apellido").value;
          var codc=document.getElementById("codigo").value;
          var ced=document.getElementById("cedula").value;
          var sex=document.getElementById("sexo").value;
          var tel=document.getElementById("telefono").value;
          var val=document.getElementById("valor").value;
          var sal=document.getElementById("saldo").value;
          var abon=document.getElementById("abono").value;
          var ser=document.getElementByID("servicio").value;

          $.ajax({type:"POST",url:"../modelo/registrarcliente.php",data:"nombre="+nom+"&apellido="+ape+"&codigo="+codc+"&cedula="+ced+"&sexo="+sex+"&telefono="+tel+"&valor"+val+"&saldo="+sal+"&abono"+abon+"&servicio="+ser,success:function(msg){
          $("#msg").html(msg);
          }})
    }
   </script>
  <script language="JavaScript" type="text/javascript">
if ( typeof XMLHttpRequest == "undefined" )
XMLHttpRequest = function(){return new ActiveXObject(navigator.userAgent.indexOf("MSIE 5") >= 0 ?"Microsoft.XMLHTTP" : "Msxml2.XMLHTTP2");};
var ajax=new XMLHttpRequest();

function Ajax2()
{
   
     var codc=document.getElementById("codigo").value;
     var sex=document.getElementById("sexo").value;
     var lar=document.getElementById("largo").value;
     var anc=document.getElementById("anchoespalda").value;
     var bus=document.getElementById("busto").value;
     var cin=document.getElementById("cintura").value;
     var cade=document.getElementById("cadera").value;

$.ajax({type:"POST",url:"../modelo/registrarmedida.php",data:"codigo="+codc+"&sexo="+sex+"&largo="+lar+"&ancho="+anc+"&busto="+bus+"&cintura="+cin+"&cadera"+cade,success:function(msg){
$("#msg").html(msg);
}})
}

</script>
<title>Registrar Cliente</title>
</head>

<body>
<div id="contenido">
<form id="form1" name="form1" action="../modelo/registrarcliente.php" method="post" style="left: 44px">
      <table id="datos" width="392" height="307" border="0">
      <tr>
        <td width="225" height="57"><div align="center">REGISTRAR CLIENTE</div></td>
      </tr>
      <tr>
        <td height="21"> Nombre:
          <div align="left">
           <input type="text" name="nombre" id="nombre" />
        </div></td>
         <td width="157" height="21">Apellido: 
         <div align="left">
            <input type="text" name="apellido" id="apellido" />
          </div></td>
      </tr>
      <tr>
       <td height="21">Codigo del Cliente:
        <div align="left">
            <input type="tex" name="codigo" id="codigo" />
          </div></td>
          <td height="21">Cedula: 
        <div align="left">
            <input name="cedula" type="text" id="cedula" />
        </div></td>
  
      </tr>
      <tr>
        <td height="21">Sexo: 
        <div align="left">
         <input name="sexo" type="text" id="sexo" /></div>
       </td>
         <td height="21">Telefono: 
          <div align="left">
         <input name="telefono" type="text" id="telefono" /></div>
       </td>
      </tr>
      <tr>
        <td height="21">Valor Total: 
          <div align="left">
         <input name="valor" type="text" id="valor" /></div>
       </td>
       <td height="21">Saldo: 
          <div align="left">
         <input name="saldo" type="text" id="saldo"/></div>
       </td>
      </tr>
      <tr>
        <td height="21">Abono: 
          <div align="left">
         <input name="abono" type="text" id="abono"/></div>
       </td>
        <td height="21"> Servicio:
          <div align="left">
           <input type="text" name="servicio" id="servicio" />
        </div></td>
      </tr>
       <tr>
       <td height="21"> Largo Total:
            <div align="left">
           <input type="text" name="largo" id="largo"/>
        </div></td>
        
          <td height="21">Ancho de Espalda:
            <div align="left">
           <input type="text" name="anchoespalda" id="anchoespalda" />
        </div></td>
      </tr>
      <tr>
      </tr>
       <tr>
        <td height="21">Busto:
          <div align="left">
           <input type="text" name="busto" id="busto" />
        </div></td>
         <td height="21"> Cintura:
          <div align="left">
           <input type="text" name="cintura" id="cintura" />
        </div></td>
      </tr>
       <tr>
       <td height="21"> Cadera:
          <div align="left">
           <input type="text" name="cadera" id="cadera" />
        </div></td>   
      </tr>
          <tr>
          <td>
              <input id="boton" name="boton" value="Guardar Datos" type="submit" />
            <input id="limpiar" name="limpiar" value="Limpiar" type="reset" /></td>
          <td>&nbsp;</td>
          </tr>
    </table>
</form>
</div>
</body>

</html>
