<?php
$dados = file_get_contents("https://swapi.co/api/people/?format=json");
$personagens = json_decode($dados, true);

 
 for ($i=0; $i < 10; $i++) { 
		
?>	
			 
			<tr>

			  <td><?php echo "<img src='img/foto$i.png' class='fotos'>";?></td>
			  <td><?php echo $personagens['results'][$i]['name'];?></td>	
			  <td><?php echo $personagens['results'][$i]['mass'];?></td>
			  <td>
			  <?php
			  if ($personagens['results'][$i]['hair_color'] =='blond'){
			  	echo "Loiro";
			  }else if ($personagens['results'][$i]['hair_color'] =='brown') {
			  		echo "Castanho";
			  }else if ($personagens['results'][$i]['hair_color'] =='brown, grey') {
			  	echo "Grisalho";
			  }else if ($personagens['results'][$i]['hair_color'] =='black') {
			  	echo "Preto";
			  }else if($personagens['results'][$i]['hair_color'] =='auburn, white'){
			  	echo "Ruivo";
			  }else{
			  	echo "Nenhunha cor";
			  }
			  ?>
			   	
			  </td>
			  <td>
			  	<?php
			  	if($personagens['results'][$i]['eye_color'] =="blue"){
			  		echo "Azul";
			  	}else if($personagens['results'][$i]['eye_color'] =="red"){
			  		echo "Vermelho";
			  	}else if($personagens['results'][$i]['eye_color'] =="brown"){
			  		echo "Castanho";
			  	}else if($personagens['results'][$i]['eye_color'] =="yellow"){
			  		echo "Amarelo";
			  	}else if($personagens['results'][$i]['eye_color'] =="blue-gray"){
			  		echo "Cyano";
			  	}
			   

			  	?>
			  		
			  </td>
			  <td>
			  <?php 
			  	if($personagens['results'][$i]['gender'] =="male"){
			  	 echo "Masculino";
			  	}else if($personagens['results'][$i]['gender'] =="female"){
			  	 echo "Feminino";
			  	}else{
			  		echo "Nenhum";
			  	}
			  	?>
			  
			  </td>
			</tr>
<?php 
		
	} 

?>