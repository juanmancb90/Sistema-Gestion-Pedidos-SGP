
function Ajax(){
if ( typeof XMLHttpRequest == "undefined" )
XMLHttpRequest = function(){return new ActiveXObject(navigator.userAgent.indexOf("MSIE 5") >= 0 ?"Microsoft.XMLHTTP" : "Msxml2.XMLHTTP2");};
var ajax=new XMLHttpRequest();
}

  function _Ajax1()
    {
          var nom=document.getElementById("nombre").value;
          var ape=document.getElementById("apellido").value;
          var codc=document.getElementById("codcliente").value;
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

 function _Ajax2()
    {
    var orden=document.getElementById("codigo").value;
    var nom=document.getElementById("nombre").value;
    var ape=document.getElementById("apellido").value;
    var cocli=document.getElementById("codcliente").value;
    var tel=document.getElementById("telefono").value;
    var fecharec=document.getElementById("fecharecibido").value;
    var fechaent=document.getElementById("fechaentrega").value;
    var areap=document.getElementById("area").value;
    var est=document.getElementById("estado").value;
    var art=document.getElementById("articulo").value;

    $.ajax({type:"POST",url:"../modelo/registrarpedido.php",data:"orden="+orden+"&nombre="+nom+"&apellido="+ape+"&codigo="+cocli+"&telefono="+tel+"&fecharecibido="+fecharec+"&fechaentrega="+fechaent+"&areapruduccion="+areap+"&estado="+est+"&articulo="+art,success:function(msg){
    $("#msg").html(msg);
    }})
}

function Ajax3()
{
    var codcliente=document.getElementById("codigo").value;

$.ajax({type:"POST",url:"../modelo/consultarcliente.php",data:"codigo="+codcliente,success:function(msg){
$("#consulta").html(msg);
}})
}

function _Ajax4()
{
    var larg=document.getElementById("largo").value;
    var anc=document.getElementById("ancho").value;
    var bus=document.getElementById("busto").value;
    var cin=document.getElementById("cintura").value;
    var cad=document.getElementById("cadera").value;


$.ajax({type:"POST",url:"../modelo/actualizarcliente.php",data:"largo="+larg+"&ancho="+anc+"&busto="+bus+"&cintura="+cin+"&cadera="+cad,success:function(msg){
$("#msg").html(msg);
}})
}

function _Ajax5()
{
    var orden=document.getElementById("codigo").value;
    var nom=document.getElementById("nombre").value;
    var ape=document.getElementById("apellido").value;
    var cocli=document.getElementById("codcliente").value;
    var tel=document.getElementById("telefono").value;
    var fecharec=document.getElementById("fecharecibido").value;
    var fechaent=document.getElementById("fechaentrega").value;
    var areap=document.getElementById("area").value;
    var est=document.getElementById("estado").value;
    var art=document.getElementById("articulo").value;

$.ajax({type:"POST",url:"../modelo/actualizarpedido.php",data:"orden="+orden+"&nombre="+nom+"&apellido="+ape+"&codigo="+cocli+"&telefono="+tel+"&fecharecibido="+fecharec+"&fechaentrega="+fechaent+"&areapruduccion="+areap+"&estado="+est+"&articulo="+art,success:function(msg){
$("#msg").html(msg);
}})
}


