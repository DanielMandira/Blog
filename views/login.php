<?php
session_start();
include('../models/conexao.php');
include('../views/blades/header.php');
?>
<div class='text-center container'>
    <div class='row justify-content-center' id='login'>
        <div class='col-6'>
            <form action="../controllers/login.php" method="post">
                <div class='input-group mb-3 mt-3'>
                    <label class='input-group-text border-secondary' id='User'>Email</label>
                    <input class='border-secondary rounded form-control' aria-label='User' aria-describedby='User' type='text' name='Email' />
                </div>
                <div class='input-group mb-3 mt-3'>
                    <label class='input-group-text border-secondary' id='Password'>Senha</label>
                    <input class='border-secondary rounded form-control' type='password' aria-label='Password' aria-describedby='Password' name='Senha' />
                </div>
                <?php if(isset($_SESSION['situacao'])):?>
                    <text>Login ou Senha Incorretos!</text>
                    <br>
                    <?php unset($_SESSION['situacao']); endif;?>
                <input class=' mb-3 btn btn-outline-secondary btn-sm' type="submit" value="Entrar">
            </form>
        </div>
    </div>
</div>
<?php
include('../views/blades/footer.php');
?>