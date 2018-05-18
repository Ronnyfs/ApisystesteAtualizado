var formu = document.forms.pesquisa;
var campo = document.getElementById("nome");
var conteudo = document.getElementById("psq");

campo.onkeydown= function () {
  requisitarArquivo("psq.php?nome="+campo.value,conteudo);
}
campo.onkeyup= function () {
  requisitarArquivo("psq.php?nome="+campo.value,conteudo);
}
formu.onsubmit = function(e){
e.preventDefault();
requisitarArquivo("psq.php?nome="+campo.value,conteudo);
}
var btn = document.getElementById("btn1");
btn.onclick = function(){
	btn.value="Carregando...";
	campo.value ="";
	if(requisitarArquivo("atulizar.php",conteudo)){
		btn.value="Recarregar Tabela";
	}
}