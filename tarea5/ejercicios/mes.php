<?php 

$mes = $_GET['mes'];

$mes = $mes-1;

$meses = array('Enero', 'Febrero','Marzo', 'Abril', 'Mayo', 'Junio','Julio','Agosto', 'Septiembre', 'Octubre','Noviembre','Diciembre');

for($i = 0; $i< count($meses); $i++){
	if($mes == $i){
		echo $meses[$i];
	}
}

 ?>