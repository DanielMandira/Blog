<?php
    include('../../models/conexao.php');
    mysqli_query($conexao,"DELETE FROM blog WHERE blog.blog_codigo = '".$_GET['COD']."'");
    header('location:../');

?>