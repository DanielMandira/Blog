<?php 
session_start();
include('../models/conexao.php');
$query = mysqli_query($conexao,"SELECT * FROM usuarios WHERE usuarios_email='".$_POST['Email']."' ");
$result=mysqli_num_rows($query);
if($result>0){
    $_SESSION['Error']=true;
    header('Location:../views/logar.php');
}
else{
    mysqli_query($conexao,"INSERT INTO usuarios (usuarios_nome, usuarios_email, usuarios_senha, usuarios_status) VALUES ('".$_POST['Nome']."', '".$_POST['Email']."', md5('".$_POST['Senha']."'), '1')");
    $_SESSION['Sucess']=true;
    header('Location:../views/logar.php');
}
?>