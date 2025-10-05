<?php
session_start();
echo'<html>
<head>
	<script src="js/jquery-3.2.1.slim.min.js"></script>
	<script src="js/jquery.min.js"></script>
<style>
    a:link {
      color: blue;
    }
    a:visited {
      color: purple; /* Color que indica que el enlace fue visitado */
    }
</style>
</head>
<body onload="carga()">
<a href="index.php">Recargar Web de nuevo para actualizar visitados</a></p></p></p></p></p>';

unlink('error_log');
echo"</p><div id='carga'>
</div>
<script>
function visitad(ID){
	var parametrs = {
		'visitado' : ID
	};
	$.ajax({
		data: parametrs,
		url: './visitado.php',
		type: 'POST',
		success: function(response){
			$('#muestra').html(response);
		}
	});
}
function carga(){
	$.ajax({
		url: './index2.php',
		success: function(response){
			$('#carga').html(response);
		}
	});
}
</script>";