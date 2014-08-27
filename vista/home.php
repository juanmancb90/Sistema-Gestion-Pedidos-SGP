<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

 <link rel="stylesheet" type="text/css" href="../controlador/js/estilos2.css"/> 
   
 <script src="../vista/js/jquery.js" type="text/javascript"></script>
    
 <script src="../controlador/js/jqueryblock.js" type="text/javascript"></script>

<script type="text/javascript">
	$(function() {
		$( "#tabs a" ).click(function(){
			var page = this.hash.substr(1);
			$("#content").html("");
			
			$.get(page+".php",function(gotHtml){
				$("#content").html(gotHtml);
				
			});
			return false;
			
		});
		
	});
	</script>
<title>S.G.P</title>
</head>
<body>
 
<div class="principal">
<div id="header">
    <table width="300" border="0">
      <tr>
        <td width="290"><p>
          <?php
		echo '<font color="#FFFFFF" face="Verdana, Geneva, sans-serif">Bienvenido(a), ';
		echo '<b>'.$_SESSION['k_username'].'</b>';
		echo '<br><a href="../modelo/logout.php">Cerrar Sesi&oacute;n</font></a></br>';
		?>
	    </p></td>
      </tr>
    </table>
  </div>
<div class="banner">
  <p>SGP</p>
</div>
</div>
<div class="contenedor">
    
	<ul id="tabs">
		<li>
		  <div align="center"><a href="#content1"><strong>Gestion de Clientes</strong></a></div>
		</li>
	  <li>
        <div align="center"><a href="#content3"><strong>Gestion de Pedidos</strong></a></div>
      </li>
<li>
  <div align="center"><a href="#content2"><strong>Gestion de Informes</strong></a></div>
</li>
	</ul>
	<div id="content_wrapper">
		<div id="content">
    
        </div>
	</div>
</div>

<div id="lado1">

</div>
<div id="lado2">
</div>
</body>
</html>