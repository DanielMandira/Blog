<?php
session_start();
    include('../models/conexao.php');
    if(empty($_POST['Email']) || empty($_POST['Senha'])){
        $_SESSION['situacao'] = true;
        header('location:../views/logar.php');
        exit();
    }
    else{
        $query = mysqli_query($conexao,"SELECT usuarios_codigo, usuarios_nome, usuarios_email, usuarios_senha, usuarios_status FROM usuarios WHERE usuarios_email = '".$_POST['Email']."' AND usuarios_senha = md5('".$_POST['Senha']."')");
        if(mysqli_num_rows($query)!=1){
            $_SESSION['situacao'] = true;
            header('location:../views/logar.php');
            exit();
        }
        else{
            $result = mysqli_fetch_array($query);
            $_SESSION['situacao'] = false;
            $_SESSION['codigo'] = $result[0];
            $_SESSION['usuario'] = $result[1]; 
            $_SESSION['status'] = $result[4];
            header('location:../');
            exit();
        }
    }

?>