<?php
session_start();
include('../cms/views/blades/header.php');
if(isset($_SESSION['usuario'])){
    if($_SESSION['status'] == 0){

        ?>

<!-- Nav Bar -->
<ul class='nav nav-tabs nav-justified pt-2 pb-2' id='navBar'>
    <li class='nav-item'>
        <a class='nav-link text-dark' aria-current='page' href='../index.php'><i class="fa-solid fa-house-chimney" style="color: #000;"></i>&nbsp;Home</a>
    </li>
    <li class='nav-item'>
        <a class='nav-link active' id='active' href='cms/index.php'><i class="fa-regular fa-folder-open" style="color: #fff;"></i></i>&nbsp;CMS</a>
      </li>
    <li class='nav-item'>
      <a class='nav-link text-dark' href='./views/novaNoticia.php'><i class="fa-regular fa-file" style="color: #000;"></i> Nova Noticia</a>
    </li>
    <li class='nav-item'>
        <!-- sistema de busca -->
        <form class="d-flex" action='index.php' method='post'>
            <div class="input-group mb-3">
                <input type='text' name='buscar' class="form-control border-secondary rounded" placeholder="Buscar"
                aria-label="Buscar" aria-describedby="button-addon2">
                <input type='submit' class="btn btn-outline-dark btn-sm" id='button-addon2' value='Buscar'>
                </div>
            </form>
        </ul>
        <div class='container'>

            <!-- Table Principal -->
            <table class='table table-secondary bordered table-hover border-secondary rounded table-striped'>
                <thead>
                    <tr>
                        <th scope='col'>#</th>
                        <th scope='col'>Imagen Principal</th>
                        <th scope='col'>Resumo</th>
                        <th scope='col'>Editar</th>
                        <th scope='col'>Excluir</th>
                    </tr>
                </thead>
                <tbody>     
                    
                    <?php
    include('../models/conexao.php');
    if (empty($_POST['buscar'])) {
        $query = mysqli_query($conexao, "SELECT * FROM blogNoticias");
        while($exibe = mysqli_fetch_array($query)){
            echo "<tr>
            <th scope='row'>".$exibe[0]."</th>
            <td>
            <img class='img-fluid w-50 img-thumbnail' src='../imgs/$exibe[1]'>
            </td>
            <td>
            <a id='link' href='../views/page.php?idn=".$exibe[0]."'>
            <h1>$exibe[2]</h1>
            <p class='text-start fs-4'>".substr($exibe[3],0,200)."...</p>
            <p>Autor: $exibe[4]</p>
            </a>                    
                    </td>
                    <td>
                    <button  type='button' class='btn btn-light'><a href='../cms/views/atualizarNoticia.php?idn=" . $exibe[0] . "' class='link-sucess'>Editar</a></button>        
                    </td>
                    <td>
                    <button  type='button' class='btn btn-light'> <a href='controllers/deletarNoticia.php?COD=" . $exibe[0] . "'class='link-danger'>Excluir</a></button>            
                    </td>";
                }
                
            } else {
                $varBusca = $_POST['buscar'];
                $query = mysqli_query($conexao, "SELECT * FROM blogNoticias where blognoticias.bloginfo_titulo like '%$varBusca%' or blognoticias.bloginfo_corpo like '%$varBusca%' or blognoticias.usuarios_nome like '%$varBusca%'");
                while($exibe = mysqli_fetch_array($query)){
                    echo "<tr>
                    <th scope='row'>".$exibe[0]."</th>
                    <td>
                    <img class='img-fluid w-75 img-thumbnail' src='../imgs/$exibe[1]'>
                    </td>
                    <td>
                    <a id='link' href='./page.php?idn=".$exibe[0]."'>
                    <h1>$exibe[2]</h1>
                    <p class='text-start fs-4'>".substr($exibe[3],0,200)."...</p>
                    <p>Autor: $exibe[4]</p>
                    </a>                    
                    </td>
                    <td>
                    <button  type='button' class='btn btn-light'><a href='../cms/views/atualizarNoticia.php?idn=" . $exibe[0] . "' class='link-sucess'>Editar</a></button>        
                    </td>
                    <td>
                    <button  type='button' class='btn btn-light'> <a href='controllers/deletarNoticia.php?COD=" . $exibe[0] . "'class='link-danger'>Excluir</a></button>            
                    </td>"
                    ;
                }
    }
    ?>
</tr>
</tbody>
</table>
</div>
<?php
}
} 
else{
?>
<div class="row">
<div class="col">
    <h1>USUARIO NÃO AUTORIZADO!!</h1>
    <a href="../index.php">
        <input type="button" value="Retornar">
    </a>

</div>

</div>
<?php
}
include('../cms/views/blades/footer.php')
?>