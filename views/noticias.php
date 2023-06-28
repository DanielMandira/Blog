<?php
session_start();
include('../models/conexao.php');
include('../views/blades/header.php');
?>

  <!-- Nav BAR -->
<div class="container-fluid text-center ">
<ul class='nav nav-tabs  nav-justified pt-2 pb-2' id='navBar'>
      <li class='nav-item'>
        <a class='nav-link text-dark' href='../index.php'><i class="fa-solid fa-house-chimney" style="color: #000;"></i>&nbsp;Home</a>
      </li>
      <li class='nav-item'>
        <a class='nav-link active' id='active' href='./noticias.php'><i class="fa-regular fa-newspaper" style="color: #FFF;"></i>&nbsp;Noticias</a>
      </li>
      <li class='nav-item dropdown'>
        <a class='nav-link text-dark dropdown-toggle' data-bs-toggle='dropdown' href='#' role='button' aria-expanded='false'><i class="fa-solid fa-people-group" style="color: #000000;"></i>&nbsp;Sobre nós</a>
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
      <a class='nav-link text-dark' href='../views/logar.php'><i class="fa-solid fa-door-closed" style="color: #000000;"></i>&nbsp;Entrar</a>
    </li>
  <?php } ?>
  </ul>
    <br>
    <div class="container">
    <?php
    $query = mysqli_query($conexao, "SELECT * FROM blogNoticias");
    while($exibe = mysqli_fetch_array($query)){
      echo "<div class='row mb-3'>
        <div class='col'>
          <img class='img-fluid w-75 img-thumbnail' src='../imgs/$exibe[1]'>
        </div>
        <div class='col'>
        <a id='link' href='./page.php?idn=".$exibe[0]."'>
          <h1>$exibe[2]</h1>
          <p class='text-start fs-4'>".substr($exibe[3],0,200)."...</p>
          <p>Autor: $exibe[4]</p>
          </a>
        </div>
        <hr>
      </div>
      "
      ;
    }
    ?>
</div>
<?php
include('../views/blades/footer.php');
?>