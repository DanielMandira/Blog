<?php
include('../../models/conexao.php');
// Var diretorio é onde vai cair os arquivos.
$diretorio = "../../imgs/";

// Var arquivo com operador ternario para realizar a verificação do arquivo 
$arquivo = isset($_FILES['arquivo'],) ? $_FILES['arquivo'] : FALSE;
for ($k = 0; $k < count($arquivo['name']); $k++){
	
	// protocolo para selecionar o destino do arquivo deve sempre definir 2 barras 

	//extensoes que são permitidas
	$extensoesValidas = array("png"); 
	
	//achar a extensao
	$ext = explode('.', basename($_FILES['arquivo']['name'][$k])); 
	
	$cripto= md5(uniqid());
	//guardar as extensões
	$extensaoFicheiro = end($ext); 
	$destino = $diretorio."/".$cripto;
	 if(in_array($extensaoFicheiro, $extensoesValidas)){
		 // move_uploaded_file é quem vai realizar a movimentação de arquivos
		 if (move_uploaded_file($arquivo['tmp_name'][$k], $destino.".".$extensaoFicheiro)){
			mysqli_query($conexao,"INSERT INTO blogimgs (blogimgs_nome, nome_cripto) VALUES ('".$arquivo['name'][$k]."', '".$cripto.".".$extensaoFicheiro."')");
			echo "Arquivo enviado com sucesso!";
		 } else {
			 echo "Falha ao enviar o arquivo";
		 }
	}
	else{
		echo "error";
		}
	}
	header('location:../views/novaNoticia.php')

?>