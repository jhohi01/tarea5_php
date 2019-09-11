<?php
$NroFilas = $_GET [ "fila" ];
$Altura = $_GET [ "altura" ];
$NroColumnas = $_GET [ "columnas" ];
$Anchura = $_GET [ "ancho" ];

//echo $NroFilas .' '.$Altura.' '.$NroColumnas.' '.$Anchura;
?>
<table  width = " <? php echo $Anchura ; ?> "    height = " <?php echo $Altura; ?> " border ="1">
<?php	
for($i = 0; $i <= $NroFilas; $i++){
	echo "<tr>";
	for($j = 0; $j <= $NroColumnas; $j++){
		if($i == 0){
			if($j==0){
				echo "<th>X</th>";
			}else{
				echo "<th>".$j."</th>";
			}
		}else{
			if($j == 0){
				echo "<th>".$i."</th>";
			}else{
				echo "<td>".$j*$i."</td>";
			}
		}
	}
	echo "</tr>";
}
	?>
</table>
    
