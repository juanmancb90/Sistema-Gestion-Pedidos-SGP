$(document).ready(function(){
	$(".sign_in").click(function(e){
		// eo.preventDefault() lo que conseguimos en este caso es que el link no lleve a ning�n sitio, 
		// simplemente se ejecutar� el c�digo Javascript contenido para el evento click.
		e.preventDefault();
		$("#sign_box").toggle();
		$(".signin").toggleClass();
	});
	$("body #main").click(function(){
		$("#sign_box").hide();
		return false;
	});
});