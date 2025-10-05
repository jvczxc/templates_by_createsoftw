<?php
session_start();
$dir    = './';
$files1 = scandir($dir);
for($i = 0; $i <=12000;++$i){
$excluidos = array(
98 => '98',
99 => '99',
100 => '100',
);
	if($i>4 and $i <> $excluidos[$i] and isset($files1[$i]) and $files1[$i] <>'index.php' and $files1[$i] <>'index2.php' and $files1[$i] <>'visitado.php'){
		// $_SESSION[$i] = $i;
		echo "pagina Nº ".$i." <a href='$files1[$i]' onclick='visitad($i)'>$files1[$i]</a>"; 
		if($_SESSION['o'.$i] == $i){
			echo ' Modelo web visitado';
		}
		echo"</br>";
	}
}
echo"</p><div id='muestra'>
</div>";
unlink('error_log');