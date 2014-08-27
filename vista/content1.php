<!DOCTYPE html>
<html>
<head>

 <link rel="stylesheet" type="text/css" href="../vista/js/estilo5.css"/> 
   
<script type="text/javascript">
function ajaxFunction() {
  var xmlHttp;
  
  try {
   
    xmlHttp=new XMLHttpRequest();
    return xmlHttp;
  } catch (e) {
    
    try {
      xmlHttp=new ActiveXObject("Msxml2.XMLHTTP");
      return xmlHttp;
    } catch (e) {
      
	  try {
        xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
        return xmlHttp;
      } catch (e) {
        alert("Tu navegador no soporta AJAX!");
        return false;
      }}}
}


function Enviar(_pagina,capa) {
    var ajax;
    ajax = ajaxFunction();
    ajax.open("POST", _pagina, true);
    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

    ajax.onreadystatechange = function() {
		if (ajax.readyState==1){
			document.getElementById(capa).innerHTML = "/vista/img/ajax_load.gif";
			     }
		if (ajax.readyState == 4) {
		   
                document.getElementById(capa).innerHTML=ajax.responseText; 
		     }}
			 
	ajax.send(null);
} 
</script>
</head>
<div id="divicon">
  
 <div>           
  <ul id="enlaces">
            
            <li><div><a href="javascript:Enviar('../vista/registrar_cliente.php','contenido')" title="Registre un nuevo cliente">Registrar Cliente</a></div></li>
            <li><a href="javascript:Enviar('../vista/consulta_cliente.php','contenido')" title="Consulte clientes">Consultar Cliente</a></li>
            <li><a href="javascript:Enviar('../vista/actualizar_cliente','contenido')" title="Actualice Clientes">Actualizar Cliente</a></li>            
</ul></div>
          
 <div id="contenido">
     <p>S.G.P</p>
   
  </div>

</div>
</body>
</html>
