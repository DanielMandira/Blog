<?php
session_start();
    include('../../models/conexao.php');
    $texto = mysqli_real_escape_string($conexao, $_POST['textoNoticia']);
    $titulo = mysqli_real_escape_string($conexao, $_POST['tituloNoticia']);
    try{
        mysqli_query($conexao,"INSERT INTO bloginfo (bloginfo_titulo, bloginfo_corpo) VALUES ('".$titulo."', '".$texto."')");
        
        $imagemId = mysqli_query($conexao,'SELECT MAX(blogimgs_codigo) FROM blogimgs');
        
        $imagemCod = mysqli_fetch_array($imagemId);

        $noticiaId = mysqli_query($conexao,"SELECT MAX(bloginfo_codigo) from bloginfo");
        $noticiaCod = mysqli_fetch_array($noticiaId);
    }
    finally{
        mysqli_query($conexao, "INSERT INTO blog  (blog.blog_blogimgs_codigo, blog.blog_bloginfo_codigo, blog.blog_usuarios_codigo) VALUES ('".$imagemCod[0]."', '".$noticiaCod[0]."', '".$_SESSION['codigo']."')");
                header('location:../');
    }
    ?>


