<?php
$dados = file_get_contents("https://swapi.co/api/people/?format=json");
$personagens = json_decode($dados, true);
//echo $json_data['resultis'];
//var_dump($json_data['results'][0]['name']);
// echo $json_data['results'][0]['name'];
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta lang="pt-br">
	<link rel = "shortcut icon" type = "imagem/png" href = "img/icon.png"/>
	<meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Teste Apisys</title>
	<link rel="stylesheet" type="text/css" href="css/foundation.css">
	<link rel="stylesheet" type="text/css" href="css/app.css">
</head>
<body>
	<header>
		<video id="backvideo" type="video/mp4" src="vid/back.mp4" autoplay="true" loop="false">
			
		</video>
	</header>
<div id="conteudo">
<div class="grid-x cell">
    <ul class="menu" id="menu">
       <li><a href="#" style="color: white;font-family:monospace;">RONNIERY SOUZA</a></li>
       <li style="margin-left:60px;margin-bottom:10px;">Requisição de Dados de uma API REST </li>
    </ul>
</div> 
<div class="grid-x grid-container">
<form action="#" name="pesquisa" method="post">
	  <div class="">
	    <div class="grid-x">
	      <div class="medium-6 cell">
	        <label style="color: white;">Pesquisar
	          <input type="text" id="nome" name="nome" placeholder="Nome">
	        </label>
	      </div>
	      <button   id="btn1" class="button">Recarregar Tabela</button>
	    </div>
	  </div>
	</form>
<div class="cell small-12 medium-12 large-12 align-center">
	<div class="table-scroll">
	<div class="align-center">
	</div>
	<table id="tabela" border="0">
	  <div class="stacked-for-small button-group">	
		 <thead style="background-color: black;color: white;">
		   <th>Foto</th>
		   <th>Nome</th>
		   <th>Peso</th>
		   <th>Cor do cabelo</th>
		   <th>Cor do olho</th>
		   <th>Sexo</th>			
		 </thead>
	  </div>	 
 		 <tbody id="psq">
 		 	
			<?php for ($i=0; $i < 10; $i++) { ?>			 
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
			<?php } ?>
		x
		 </tbody>
	    </table>
	   </div>
	</div>
</div>
<footer>
	<div id="contFooter" class="grid-x grid-container">
			<div id="utils" class=" cell small-12 medium-6 large-4 text-center">

				<ol class="float-center">
					<li>Foundation Framework</li>
					<li>Ajax</li>
					<li>PHP</li>
					<li>CSS</li>
					<li>JavaScript</li>
					<li>JSON</li>
				</ol>
				
			</div>
			<div class="cell small-12 medium-6 large-4 text-center">
				<ol>
					<h3>Teste Prático APISYS </h3>
				</ol>
				<h3> </h3>
			</div>
	</div>
	
	<div class="copyright text-right" >
		<p>Copyright Ronniery</p>
	</div>
</footer>
</div>
</body>
<script src="js/vendor/jquery.js"></script>
<script src="js/vendor/what-input.js"></script>
<script src="js/vendor/foundation.js"></script>
<script type="text/javascript" src="js/ajax.js"></script>
<script type="text/javascript" src="js/app.js"></script>
</html>

