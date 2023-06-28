<?php
session_start();
include('../models/conexao.php');
include('../views/blades/header.php');
?>
<div class="container-fluid text-center ">
    <ul class='nav nav-tabs  nav-justified pt-2 pb-2' id='navBar'>
        <li class='nav-item'>
            <a class='nav-link text-dark' href='../index.php'><i class="fa-solid fa-house-chimney" style="color: #000;"></i>&nbsp;Home</a>
        </li>
        <li class='nav-item'>
            <a class='nav-link text-dark ' href='./noticias.php'>
                <i class="fa-regular fa-newspaper" style="color: #000;">
                </i>&nbsp;Noticias
            </a>
        </li>
        <li class='nav-item dropdown'>
            <a class='nav-link text-dark dropdown-toggle' data-bs-toggle='dropdown' href='#' role='button' aria-expanded='false'>
                <i class="fa-solid fa-people-group" style="color: #000000;"></i>&nbsp;Sobre nós</a>
            <ul class='dropdown-menu '>
                <li><a class='dropdown-item  text-dark bg-gradient' href='../views/equipe.php'>&nbsp;Equipe</a></li>
                <li><a class='dropdown-item text-dark bg-gradient' href='#'>&nbsp;Projetos</a></li>
                <li><a class='dropdown-item text-dark bg-gradient' href='#'>&nbsp;Termos de uso</a></li>
            </ul>
        </li>
        <?php if (isset($_SESSION['usuario'])) {
            if ($_SESSION['status'] == '0') { ?>
                <li class='nav-item'>
                    <a class='nav-link text-dark' href='../controllers/logout.php'><i class="fa-solid fa-door-open" style="color: #000000;"></i>&nbsp;Sair</a>
                </li>
                <li class='nav-item'>
                    <a class='nav-link text-dark' href='../cms/index.php'><i class="fa-regular fa-folder-open" style="color: #000000;"></i></i>&nbsp;CMS</a>
                </li>
            <?php } else { ?>
                <li class='nav-item'>
                    <a class='nav-link text-dark' href='../controllers/logout.php'><i class="fa-solid fa-door-open" style="color: #000000;"></i>&nbsp;Sair</a>
                </li>
            <?php }
        } else { ?>
            <li class='nav-item'>
                <a class='nav-link active' id='active' href='../views/logar.php'><i class="fa-solid fa-door-closed" style="color: #fff;"></i>&nbsp;Entrar</a>
            </li>
        <?php } ?>
    </ul>
    <br>
    <div class="container">
        <div class="row">
            <div class="col">
            <?php if (isset($_SESSION['Sucess'])) : ?>
                        <h4>Cadastro Realizado com Sucesso!</h4>
                        <br>
                    <?php unset($_SESSION['Sucess']);
                    endif; ?>
            </div>
        </div>
        <div class="row">
            <div class="col" id='visibleLogin'>
                <h3>Possui uma conta?</h3>
                <form id='visibleLogin2' action="../controllers/login.php" method="post">
                    <div class='input-group mb-3 mt-3'>
                        <label class='input-group-text border-secondary' id='User'>Email</label>
                        <input class='border-secondary rounded form-control' aria-label='User' aria-describedby='User' type='email' required  name='Email' />
                    </div>
                    <div class='input-group mb-3 mt-3'>
                        <label class='input-group-text border-secondary' id='Password'>Senha</label>
                        <input class='border-secondary rounded form-control' type='password'  required aria-label='Password' aria-describedby='Password' name='Senha' />
                    </div>
                    <?php if (isset($_SESSION['situacao'])) : ?>
                        <h5 id='error'>Login ou Senha Incorretos!</h5>
                        <br>
                    <?php unset($_SESSION['situacao']);
                    endif; ?>
                    <input id='botao' class=' mb-3 btn btn-outline-secondary btn-sm' type="submit" value="Entrar">
                </form>
            </div>

            <div class="col" id='visibleCadastro'>
                <h3>Cadastre-se!</h3>
                <form id='visibleCadatro2' method="post" action="../controllers/cadastro.php">
                    <div class='input-group mb-3 mt-3'>
                        <label class='input-group-text border-secondary' id='User'>Nome</label>
                        <input class='border-secondary rounded form-control' aria-label='User' aria-describedby='User' type='text' required name='Nome' />
                    </div>
                    <div class='input-group mb-3 mt-3'>
                        <label class='input-group-text border-secondary' id='User'>Email</label>
                        <input class='border-secondary rounded form-control' aria-label='User' aria-describedby='User' type='email' required name='Email' />
                    </div>
                    <div class='input-group mb-3 mt-3'>
                        <label class='input-group-text border-secondary' id='User'>Senha</label>
                        <input class='border-secondary rounded form-control' aria-label='User' aria-describedby='User' required type='password' name='Senha' />
                    </div>
                    <?php if (isset($_SESSION['Error'])) : ?>
                        <h5 id='error'>email já Cadastrado!</h5>
                        <br>
                    <?php unset($_SESSION['Error']);
                    endif; ?>
                    <input id='botao' class='mb-3 btn btn-outline-secondary btn-sm' type="submit" value="Cadastrar">
                </form>
            </div>
        </div>
    </div>
    <?php
    include('../views/blades/footer.php');
    ?>