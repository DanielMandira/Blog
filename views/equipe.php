<?php
session_start();
include('../views/blades/header.php');
?>

<body>
    <!-- Nav BAR -->
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
                <a class='nav-link active   dropdown-toggle' data-bs-toggle='dropdown' id='active' href='#' role='button' aria-expanded='false'>
                    <i class="fa-solid fa-people-group" style="color: #fff;"></i>&nbsp;Sobre nós</a>
                <ul class='dropdown-menu '>
                    <li><a class='dropdown-item  text-dark bg-gradient' id='active' href='../views/equipe.php'>&nbsp;Equipe</a></li>
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
                    <a class='nav-link text-dark' href='../views/logar.php'><i class="fa-solid fa-door-closed" style="color: #000000;"></i>&nbsp;Entrar</a>
                </li>
            <?php } ?>
        </ul>
        <br>
        <div class="container">
        <!-- Equipe -->
        <div class='row mb-5 '>
            <div class='col'>
                <hr>
                <div class='row mt-3'>
                    <div class='col'>
                    <a id='link' href="https://www.instagram.com/bruu_freitass/" target="_blank">
                        <img id='time' src="../imgs/Bruno.png" class="w-50"></a>
                    </div>
                    <div class='col text-start'>
                    <a id='link' href="https://www.instagram.com/bruu_freitass/" target="_blank">
                        <h1>Bruno Freitas Dornelas de Oliveira</h1></a>
                        <h4 class='text-center'>Areas Atuadas:</h4>
                        <ul class='list-group '>
                            <li class='list-group-item'>Desenvolvimento dos <b>Elementos Textuais</b> do Projeto </li>
                            <li class='list-group-item'>Desenvolvimento <b>C#</b></li>
                            <li class='list-group-item'>Desenvolvimento <b>Web</b></li>
                            <li class='list-group-item'><b>Design</b></li>
                        </ul>
                    </div>
                </div>
                <br>
                <hr>
                <div class='row mt-3'>
                    <div class='col text-start'>
                    <a id='link' href="https://heylink.me/daniel_augusto/" target="_blank">
                        <h1>Daniel Augusto Mandira</h1></a>
                        <h4 class='text-center'>Areas Atuadas:</h4>
                        <ul class='list-group '>
                            <li class='list-group-item'>Desenvolvimento <b>React Native</b></li>
                            <li class='list-group-item'>Desenvolvimento back-end <b>Web</b></li>
                            <li class='list-group-item'>Desenvolvimento Banco de dados <b>SQL</b></li>
                            <li class='list-group-item'>Gerenciamento de equipe</li>
                        </ul>
                    </div>
                    <div class='col'>
                    <a id='link' href="https://heylink.me/daniel_augusto/" target="_blank">
                        <img id='time' src="../imgs/Daniel.jpg" class="w-50"></a>
                    </div>
                </div>
                <br>
                <hr>
                <div class='row mb-5'>
                    <div class='col'>
                    <a id='link' href="https://www.instagram.com/wchr_leonardo/" target="_blank">
                        <img id='time' src="../imgs/Leonardo.png" class="w-50"></a>
                    </div>
                    <div class='col text-start'>
                        <a id='link' href="https://www.instagram.com/wchr_leonardo/" target="_blank">
                        <h1>Leonardo Wicher Lopes Ferreira</h1></a>
                        <h4 class='text-center'>Areas Atuadas:</h4>
                        <ul class='list-group '>
                            <li class='list-group-item'>Desenvolvimento de Banco de dados <b>SQL</b></li>
                            <li class='list-group-item'>Desenvolvimento do <b>Diagrama de Classes</b></li>
                            <li class='list-group-item'>Desenvolvimento do <b>Diagrama de entidade e relacionamento</b></li>
                            <li class='list-group-item'>Integração do <b>Arduino</b> com <b>C#</b></li>
                        </ul>
                    </div>
                </div>
                <br>
                <hr>
                <div class='row mt-3'>
                    <div class='col text-start'>
                    <a id='link' href="https://www.instagram.com/mauriciiobert/" target="_blank">
                        <h1>Mauricio Bertoldo de Oliveira </h1></a>
                        <h4 class='text-center'>Areas Atuadas:</h4>
                        <ul class='list-group '>
                            <li class='list-group-item'>Desenvolvimento <b>Web</b></li>
                            <li class='list-group-item'>Desenvolvimento <b>C#</b></li>
                            <li class='list-group-item'>Desenvolvimento Banco de dados <b>SQL</b></li>
                            <li class='list-group-item'><b>Design</b></li>
                        </ul>
                    </div>
                    <div class='col'>
                    <a id='link' href="https://www.instagram.com/mauriciiobert/" target="_blank">
                        <img id='time' src="../imgs/Mauricio.jpg" class="w-50"></a>
                    </div>
                </div>
                <br>
                <hr>
            </div>
        </div>
        </div>
        <?php
        include('../views/blades/footer.php');
        ?>