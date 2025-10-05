<?php
session_start();
if(isset($_POST['visitado'])){
	$i = $_POST['visitado'];
	$_SESSION['o'.$i] = $_POST['visitado'];
}
echo '</br> Mostre los resultados arriba de los visitados. </p>';

