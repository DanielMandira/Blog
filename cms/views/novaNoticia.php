<?php
session_start();
include('../views/blades/header.php');
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
        <a class='nav-link active' id='active' href='./views/novaNoticia.php'> <i class="fa-regular fa-file"></i> Nova Noticia</a>
    </li>
</ul>
<div class='container'>
    <div class='mb-3'>
        <div class='text-bg-light rounded mt-5 pt-5 pb-5 ps-5 pe-5 container text-center'>
            <form  name='upload' enctype="multipart/form-data" method="post" action="../controllers/upload.php">
                <div class='input-group mb-3'>
                    <input type="hidden" name="MAX_FILE_SIZE" value="99999999">
                    <input type="file" name="arquivo[]" multiple="multiple"/>
                    <input id='send' name="enviar" type="submit" ti value="Enviar">
                </div>
            </form>
            <form action='../controllers/novaNoticia.php' method='post'>
                <div class='input-group mb-3'>
                    <label class='text-bg-secondary input-group-text border-secondary' id='Titulo'>Titulo:</label>
                    <input type='text' name='tituloNoticia' class='border-secondary rounded form-control' aria-label='Titulo' required aria-describedby='Titulo'>
                </div>
                <div class='input-group mb-3'>
                    <label class='text-bg-secondary input-group-text border-secondary' id='Conteudo'>Texto:</label>
                    <textarea name='textoNoticia' rows='25' class='border-secondary rounded form-control' aria-label='Conteudo' aria-describedby='Conteudo'>
        </textarea>
                </div>
                <div class='input-group mb-3'>
                    <label class='text-bg-secondary input-group-text border-secondary' required  id='Autor'>Autor:</label>
                    <?php
                    echo "<input type='text' name='autorNoticia' class='border-secondary rounded form-control' aria-label='Autor' value='" . $_SESSION['usuario'] . "' required  aria-describedby='Autor'>";
                    ?>
                </div>
                <hr>
                <input type='submit' class='btn btn-outline-secondary btn-lg' onclick="funcao()"  value='Cadastrar'>
            </form>
        </div>
    </div>
</div>
<?php
include('../views/blades/footer.php');
?>