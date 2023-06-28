<?php
session_start();
include('./models/conexao.php');
include('./views/blades/header.php');
$query = mysqli_query($conexao, "SELECT * FROM blogNoticias");
$exibe = mysqli_fetch_array($query);
?>
<!-- Nav Bar -->
<ul class='nav nav-tabs nav-justified pt-2 pb-2' id='navBar'>
  <li class='nav-item'>
    <a class='nav-link active' id='active' aria-current='page' href='./index.php'><i class="fa-solid fa-house-chimney" style="color: #ffffff;"></i>&nbsp;Home</a>
  </li>
  <li class='nav-item'>
    <a class='nav-link text-dark' href='./views/noticias.php'><i class="fa-regular fa-newspaper" style="color: #000000;"></i>&nbsp;Noticias</a>
  </li>
  <li class='nav-item dropdown'>
    <a class='nav-link text-dark dropdown-toggle' data-bs-toggle='dropdown' href='#' role='button' aria-expanded='false'><i class="fa-solid fa-people-group" style="color: #000000;"></i>&nbsp;Sobre nós</a>
    <ul class='dropdown-menu '>
      <li><a class='dropdown-item  text-dark bg-gradient' href='./views/equipe.php'>&nbsp;Equipe</a></li>
      <li><a class='dropdown-item text-dark bg-gradient' href='#'>&nbsp;Projetos</a></li>
      <li><a class='dropdown-item text-dark bg-gradient' href='#'>&nbsp;Termos de uso</a></li>
    </ul>
  </li>
  <?php if (isset($_SESSION['usuario'])) {
    if ($_SESSION['status'] == '0') { ?>
      <li class='nav-item'>
        <a class='nav-link text-dark' href='./controllers/logout.php'><i class="fa-solid fa-door-open" style="color: #000000;"></i>&nbsp;Sair</a>
      </li>
      <li class='nav-item'>
        <a class='nav-link text-dark' href='cms/index.php'><i class="fa-regular fa-folder-open" style="color: #000000;"></i></i>&nbsp;CMS</a>
      </li>
      <?php } else { ?>
        <li class='nav-item'>
          <a class='nav-link text-dark' href='./controllers/logout.php'><i class="fa-solid fa-door-open" style="color: #000000;"></i>&nbsp;Sair</a>
        </li>
        <?php }
  } else { ?>
    <li class='nav-item'>
      <a class='nav-link text-dark' href='./views/logar.php'><i class="fa-solid fa-door-closed" style="color: #000000;"></i>&nbsp;Entrar</a>
    </li>
  <?php } ?>
</ul>
<br>

<div class="container">
<!-- Carrosel -->
<div id='carouselAutoplaying' class='carousel slide bg-dark mb-5' data-bs-ride='carousel'>
  <div class='carousel-inner'>
    <div class='carousel-item active'>
      <img id='imgCarrosel' src='./imgs/powerhard.png'  class=' rounded mx-auto d-block  img-thumbnail' alt='Chania'>
    </div>
    <?php 
    $select = mysqli_query($conexao, "SELECT blogimgs.nome_cripto FROM blogimgs INNER JOIN blog ON blog.blog_blogimgs_codigo = blogimgs.blogimgs_codigo ORDER BY blog.blog_codigo DESC LIMIT 4");
    while($result = mysqli_fetch_row($select)){
      echo "<div class='carousel-item'>
      <img id='imgCarrosel' src='./imgs/".$result[0]."' class=' rounded mx-auto d-block  img-thumbnail' alt='Chania'>
      </div>
      ";
    }
      ?>
  </div>
  <button class='carousel-control-prev' type='button' data-bs-target='#carouselAutoplaying' data-bs-slide='prev'>
    <span class='carousel-control-prev-icon' aria-hidden='true'></span>
    <span class='visually-hidden'>Previous</span>
  </button>
  <button class='carousel-control-next' type='button' data-bs-target='#carouselAutoplaying' data-bs-slide='next'>
    <span class='carousel-control-next-icon' aria-hidden='true'></span>
    <span class='visually-hidden'>Next</span>
  </button>
</div>
<br>

<!-- Noticia Principal -->
<div class='row mb-5 text-bg-light bg-gradient'>
  <div class='col-7'>
    <a id='link' href='./views/page.php?idn=<?php echo $exibe[0] ?>'>
      <img class='img-fluid w-50 img-thumbnail m-3' src='imgs/<?php echo $exibe[1] ?>'>
      <div class='row'>
        <h1 class=' text-center'> <?php echo $exibe[2] ?> </h1>
        <p class='fs-4 ps-4 pe-4' id='text'><?php echo substr($exibe[3], 0, 350) . '...' ?> </p>
        <p>Autor: <?php echo $exibe[4] ?></p>
    </a>
  </div>
</div>

<!-- 2 ultimas noticias -->
<div class='col-5'>
  <div class='row mb-5'>
    <?php
    $query = mysqli_query($conexao, "SELECT * FROM blogNoticias order by blog_codigo DESC limit 1, 2");
    while ($exibe = mysqli_fetch_array($query)) {
      echo "<div class='row ms-2'>
      <div class='col'>
      <hr>
        <a id='link' href='./views/page.php?idn=" . $exibe[0] . "'><img style='height:120px' class='img-fluid  img-thumbnail' src='imgs/$exibe[1]'>
        </div>
        <div class='col'>
        <h3> $exibe[2]</h3>
        <p id='text' class='fs-5 ps-3 pe-3'>" . substr($exibe[3], 0, 190) . "...</p>
        <p>Autor: ".$exibe[4]." </p>
        </a>
        </div>
        </div>
        ";
    }
    ?>
  </div>
</div>
<hr>
<!-- 4 noticias seguintes -->
<div class='row mb-5'>
    <?php
    $query = mysqli_query($conexao, "SELECT * FROM blogNoticias order by blog_codigo DESC limit 3, 4");
    while ($exibe = mysqli_fetch_array($query)) {
      echo "<div class='col ps-4 pe-4'>
        <a id='link' href='./views/page.php?idn=" . $exibe[0] . "'><img style='height:100px' class='img-fluid  img-thumbnail' src='imgs/$exibe[1]'>
        <h3> $exibe[2]</h3>
        <p id='text' class='fs-5'>" . substr($exibe[3], 0, 50) . "...</p>
        <p>Autor: ".$exibe[4]." </p>
        </a>
        </div>
        ";
    }
    ?>
</div>
<hr>


<div class='row'>
  <div class='col'>
    <h1>Veja muito mais de nossos projetos:</h1>
    <hr>
  </div>
</div>
<div class='row'>
  <div class='col'>
    <p class='fs-4' id='text'> &nbsp;Lorem ipsum dolor sit, amet consectetur adipisicing elit. Blanditiis, eligendi in impedit magni corporis enim dolor voluptas debitis officiis nisi aspernatur suscipit ipsam rem quaerat asperiores doloribus reprehenderit eum. Non illo deserunt temporibus nulla possimus adipisci reprehenderit tempore optio quisquam mollitia soluta ab modi dignissimos distinctio ut beatae earum debitis nam sapiente reiciendis, similique natus! Voluptatibus illo similique quod optio at voluptates incidunt perspiciatis unde impedit odio repellat veritatis expedita cum, nisi maiores fugit eaque dolores aliquid quas qui blanditiis error ab tenetur consequatur. <br><br>&nbsp;Recusandae cumque explicabo illum fuga dolores quos excepturi blanditiis tempore non quae, labore aut </p>
  </div>
</div>
</div>
<?php
include('./views/blades/footer.php');
?>