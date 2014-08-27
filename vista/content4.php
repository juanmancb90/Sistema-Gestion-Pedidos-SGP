<!DOCTYPE html>
<html>
<head>
<link href="../controlador/js/estilo_cuentas1.css" rel="stylesheet" type="text/css"/>
  <link href="../controlador/js/jquery-ui.css" rel="stylesheet" type="text/css"/>
  <script src="../vista/js/jquery.js" type="text/javascript"></script>
  <script src="../controlador/js/jquery-ui.min.js"></script>
   <script src="../controlador/js/jquery.validate.js" type="text/javascript"></script>

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

<div id="accordion">
  <h3><a href="#"> Modificar Cuenta</a></h3>
  <div id="" >
  
   <form id="infocliente" name="form3" action="javascript:_Ajax()" method="post" style="left: 44px">
    
      <table id="datos" width="392" height="188" border="0">
       <tr>
         <td width="208" height="21"> Largo Total:
           <div align="left">
             <input type="text" name="large" id="largo"/>
          </div></td>
         
         <td width="174" height="21">Ancho de Espalda:
           <div align="left">
             <input type="text" name="ancho" id="anchoespalda" />
          </div></td>
       </tr>
       <tr>
         <td height="21">Busto:
           <div align="left">
             <input type="text" name="bust" id="busto" />
          </div></td>
         <td height="21"> Cintura:
           <div align="left">
             <input type="text" name="cint" id="cintura" />
          </div></td>
       </tr>
       <tr>
       <td height="53"> Cadera:
          <div align="left">
           <input type="text" name="nombrecli" id="nombre" />
        </div></td>   
      </tr>
          <tr>
          <td>
            <input id="boton2" name="boton2" value="Guardar Cambios" type="submit" onClick="javascript:_Ajax()" />
            <input id="limpiar2" name="limpiar2" value="Limpiar" type="reset" /></td>
          </tr>
    </table>
     
     <div id="tabla">
	<?php
	 include('../modelo/consulta.php');
	 ?>
    </div>
</form>
  
  </div>
  
  <div id="">
    <form id="form2" name="form2" action="javascript:_Ajax();" method="post"   style="left: 44px">
      <table id="datos" width="392" height="307" border="0">
      <tr>
        <td width="225" height="57"><div align="center">REGISTRAR CLIENTE</div></td>
      </tr>
      <tr>
        <td height="21"> Nombre:
          <div align="left">
           <input type="text" name="nombrecli" id="nombre" />
        </div></td>
         <td width="157" height="21">Apellido: 
         <div align="left">
            <input type="text" name="clienteape" id="apellido" />
          </div></td>
      </tr>
      <tr>
       <td height="21">Codigo del Cliente:
        <div align="left">
            <input type="tex" name="codigo" id="codcliente" />
          </div></td>
          <td height="21">Cedula: 
        <div align="left">
            <input name="cc" type="text" id="cedula" />
        </div></td>
  
      </tr>
      <tr>
        <td height="21">Sexo: 
        <div align="left">
         <input name="sex" type="text" id="sexo" /></div>
       </td>
         <td height="21">Telefono: 
          <div align="left">
         <input name="tel" type="text" id="telefono" /></div>
       </td>
      </tr>
      <tr>
        <td height="21">Valor Total: 
          <div align="left">
         <input name="cc" type="text" id="valor" /></div>
       </td>
       <td height="21">Saldo: 
          <div align="left">
         <input name="cc" type="text" id="saldo" /></div>
       </td>
      </tr>
      <tr>
        <td height="21">Abono: 
          <div align="left">
         <input name="cc" type="text" id=abono" /></div>
       </td>
        <td height="21"> Servicio:
          <div align="left">
           <input type="text" name="service" id="servicio" />
        </div></td>
      </tr>
       <tr>
       <td height="21"> Largo Total:
            <div align="left">
           <input type="text" name="large" id="largo" />
        </div></td>
        
          <td height="21">Ancho de Espalda:
            <div align="left">
           <input type="text" name="ancho" id="anchoespalda" />
        </div></td>
      </tr>
      <tr>
      </tr>
       <tr>
        <td height="21">Busto:
          <div align="left">
           <input type="text" name="bust" id="busto" />
        </div></td>
         <td height="21"> Cintura:
          <div align="left">
           <input type="text" name="cint" id="cintura" />
        </div></td>
      </tr>
       <tr>
       <td height="21"> Cadera:
          <div align="left">
           <input type="text" name="nombrecli" id="nombre" />
        </div></td>   
      </tr>
          <tr>
          <td>
              <input id="cmbreg" name="cmbreg" value="Guardar Cliente" type="submit" onClick="javascript:Ajax()"/>
          <input type="submit" name="cmbregistro" id="cmbregistro" value="Guardar Medidas" onClick="javascript:Ajax2()"/>
          </td>
          <td><input id="limpiar" name="limpiar" value="Limpiar" type="reset" /></td>
          </tr>
</table>
</form>
</div>
   
  <h3><a href="#">Eliminar Cuenta</a></h3>
  <div id="">
  <table id="datos" width="392" height="188" border="0">
       <tr>
         <td width="208" height="21"> Largo Total:
           <div align="left">
             <input type="text" name="large" id="largo"/>
          </div></td>
         
         <td width="174" height="21">Ancho de Espalda:
           <div align="left">
             <input type="text" name="ancho" id="anchoespalda" />
          </div></td>
       </tr>
       <tr>
         <td height="21">Busto:
           <div align="left">
             <input type="text" name="bust" id="busto" />
          </div></td>
         <td height="21"> Cintura:
           <div align="left">
             <input type="text" name="cint" id="cintura" />
          </div></td>
       </tr>
       <tr>
       <td height="53"> Cadera:
          <div align="left">
           <input type="text" name="nombrecli" id="nombre" />
        </div></td>   
      </tr>
          <tr>
          <td>
            <input id="boton2" name="boton2" value="Guardar Cambios" type="submit" onClick="javascript:_Ajax()" />
            <input id="limpiar2" name="limpiar2" value="Limpiar" type="reset" /></td>
          </tr>
    </table>
     
     <div id="tabla">
	<?php
	 include('../modelo/consulta.php');
	 ?>
    </div>
</form>
  </div>
  <h3><a href="#">Repores</a></h3>
  
 
 
</div>
</body>
</html>
