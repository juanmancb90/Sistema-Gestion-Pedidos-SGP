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
			document.getElementById(capa).innerHTML = " Aguarde por favor...";
			     }
		if (ajax.readyState == 4) {
		   
                document.getElementById(capa).innerHTML=ajax.responseText; 
		     }}
			 
	ajax.send(null);
} 
</script>
</head>

<div id="divicon">
  
            
  <ul id="enlaces">
            
            <li><div><a href="javascript:Enviar('../vista/registrar_pedido.php','contenido')" title="Registre Pedidos">Registrar Pedido</a></div></li>
            <li><a href="javascript:Enviar('../vista/modificar_pedido.php','contenido')" title="Actualice Pedidos">Modificar Pedido</a></li>

            </ul>
             <div id="contenido">
              <p>S.G.P</p>
   
  </div>

 </div>
 
</body>
</html>
