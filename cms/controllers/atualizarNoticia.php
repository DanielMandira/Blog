<?php
session_start();
    include('../../models/conexao.php');
    try{

        $buscaI = mysqli_query($conexao,"SELECT * FROM blogimgs where nome_cripto like '%".$_POST['imgName']."%'");
        $buscaImg = mysqli_fetch_array($buscaI);

        $buscaA = mysqli_query($conexao,"SELECT * FROM usuarios where usuarios_nome like '%".$_POST['autorNoticia']."%'");
        $bucaAutor = mysqli_fetch_array($buscaA);

        if(empty($buscaImg)){
            mysqli_query($conexao,"INSERT INTO blogimgs (nome_cripto) values ('".$_POST['imgName']."')");
            $selectId = mysqli_query($conexao, "SELECT max(blogimgs_codigo) from blogimgs");
            $imagemId=mysqli_fetch_array($selectId);
            $imagemNoticia= $imagemId[0];
        }
        else{
            $imagemNoticia = $buscaImg[0];
        }
    }
    finally{
        mysqli_query($conexao,"UPDATE blog INNER JOIN bloginfo on blog.blog_bloginfo_codigo = bloginfo.bloginfo_codigo SET blog.blog_blogimgs_codigo = '".$imagemNoticia."', blog.blog_usuarios_codigo = '".$_SESSION['codigo']."', bloginfo.bloginfo_titulo = '".$_POST['tituloNoticia']."', bloginfo.bloginfo_corpo = '".$_POST['textoNoticia']."' WHERE blog.blog_codigo ='".$_POST['codigo']."'");
        header("location:../");
    }

?>