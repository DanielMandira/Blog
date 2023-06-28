<?php
session_start();
include('../../models/conexao.php');
include('../views/blades/header.php');
$idn = $_GET['idn'];
$query = mysqli_query($conexao, "SELECT * FROM blogNoticias where blog_codigo=$idn");
$exibe = mysqli_fetch_array($query);
?>
<!-- Nav Bar -->
<ul class='nav nav-tabs nav-justified pt-2 pb-2' id='navBar'>
    <li class='nav-item'>
        <a class='nav-link text-dark' aria-current='page' href='../index.php'><i class="fa-solid fa-house-chimney" style="color: #000;"></i>&nbsp;Home</a>
    </li>
    <li class='nav-item'>
        <a class='nav-link text-dark' href='../index.php'><i class="fa-regular fa-folder-open" style="color: #000;"></i></i>&nbsp;CMS</a>
    </li>
    <li class='nav-item'>
        <a class='nav-link text-dark' href='./views/novaNoticia.php'> <i class="fa-regular fa-file"></i> Nova Noticia</a>
    </li>
</ul>
<br>
<div class='container'>
    <div class='mb-3'>
        <?php
        echo"<form name='upload' enctype='multipart/form-data' method='post' action='../controllers/uploadAtualiza.php?idn=$idn'>";
        ?>
            <div class='input-group mb-3'>
                <input type="hidden" name="MAX_FILE_SIZE" value="99999999">
                <input type="file" name="arquivo[]" multiple="multiple"/>
                <input id='send' name="enviar" type="submit" ti value="Enviar">
            </div>
        </form>
        <form action='../controllers/atualizarNoticia.php' method='post'>
            <?php
                echo"<input type='hidden' name='codigo' value='" . $idn . "'>";
            if(isset($_SESSION['upImg'])){
                
                echo"<div class='input-group mb-3 mt-5'>
                <label class='text-bg-secondary input-group-text border-secondary' id='Imagem'>Imagem:</label>
                <input type='text' name='imgName' value='" . $_SESSION['upImg'] . "' class=' border-secondary rounded form-control' aria-label='Imagem' aria-describedby='Imagem'>
                </div>
                <img width='225px' height='200px' src='../../imgs/" . $_SESSION['upImg'] . "'>";
             
            }
            else{
                echo "
                <div class='input-group mb-3 mt-5'>
                <label class='text-bg-secondary input-group-text border-secondary' id='Imagem'>Imagem:</label>
                <input type='text' name='imgName' value='" . $exibe[1] . "' class=' border-secondary rounded form-control' aria-label='Imagem' aria-describedby='Imagem'>
                </div>
                <img width='225px' height='200px' src='../../imgs/" . $exibe[1] . "'>";   
            }
            unset($_SESSION['upImg']);
            echo"<br>
            <div class='input-group mb-3 mt-2'>
                <label class='text-bg-secondary input-group-text border-secondary' id='Titulo'>Titulo:</label>
                <input type='text' name='tituloNoticia' value='" . $exibe[2] . "' class='border-secondary rounded form-control' aria-label='Titulo' aria-describedby='Titulo'>
            </div>
            <div class='input-group mb-3'>
                <label class='text-bg-secondary input-group-text border-secondary' id='Conteudo'>Texto:</label>
                <textarea name='textoNoticia' rows='25' class='border-secondary rounded form-control' aria-label='Conteudo' aria-describedby='Conteudo'>
                    " . $exibe[3] . "
                </textarea>
            </div>
            <div class='input-group mb-3'>
                <label class='text-bg-secondary input-group-text border-secondary' id='Autor'>Autor:</label>
                <input type='text' name='autorNoticia' value='" . $_SESSION['usuario'] . "' class='border-secondary rounded form-control' aria-label='Autor' aria-describedby='Autor'>
            </div>
            <hr>
            <input type='submit' class='btn btn-outline-secondary btn-lg' value='Atualizar'>
        </form>
    </div>
</div>";
            include('../views/blades/footer.php');
            ?>