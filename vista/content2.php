<link href="../controlador/js/estilo_musica.css" rel="stylesheet" type="text/css"/>
 <link rel="stylesheet" type="text/css" href="../controlador/js/ext-all.css" />
 <script src="../controlador/js/jquery.js" type="text/javascript"></script>
  

       <script language="JavaScript" type="text/javascript">


function _Ajax()
{
    var ano=document.getElementById("ano").value;
    var mes=document.getElementById("mes").value;
    var dia=document.getElementById("dia").value;


$.ajax({type:"POST",url:"../modelo/informe.php",data:"ano="+ano+"&mes="+mes+"&dia="+dia,success:function(msg){
$("#consulta").html(msg);
}})
}
/*]]>*/
</script>
 
<div id="busqueda">
  <form id="form1" name="form1" method="post" action="">
    <table class="tabla" width="186" height="197" border="0" style=' font-family: Calibri; font-size: 13px; border: 1px solid #06F; border-collapse: collapse; background-color:#06F; color: white' >
      <tr>
        <td style=" background-color:#07F"><div align="center"><strong>Informes</strong></div></td>
      </tr>
      <tr>
        <td class="td"><div align="left" style="color:#06F">AÑO:</div></td>
      </tr>
      <tr>
        <td class="td"><label for="titulo"></label>
          <div align="left">
            <input type="text" name="año" id="ano" />
        </div></td>
      </tr>
      <tr>
        <td class="td"><div align="left" style="color:#06F">MES:</div></td>
      </tr>
      <tr>
        <td class="td"><label for="artista"></label>
          <div align="left">
            <input type="text" name="mess" id="mes" />
        </div></td>
      </tr>
      <tr>
        <td class="td"><div align="left" style="color:#06F">DIA:</div></td>
      </tr>
      <tr>
        <td class="td"><label for="album"></label>
          <div align="left">
            <input type="text" name="dia" id="dia" />
        </div></td>
      </tr>
       <tr>
        <td class="td"height="26"><div align="left">
          <input type="button" name="buscar" id="buscar" value="Buscar" onclick="javascript:_Ajax()" style="color:#07F" />
        </div></td>
      </tr>
    </table>
   
 
  </form>

</div>
<div id="consulta">
  

</div>
