<?php 
    require_once "src/include/conexao.php";
?>   
<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bts/node_modules/bootstrap/compiler/bootstrap.css">
    <link rel="stylesheet" href="src/css/style.css">

    <title>Levantamento</title>
  </head>
<body class="bg-warning">
<nav class="navbar nabar-fixed-top navbar-expand-lg navbar-dark bg-danger">
    <div class="container">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="?action=central">
                    <img src="src/img/logocervejaria.png" style="width: 80px; height: 80px;">
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?action=central">
                    <h2 class="text-warning ml-3 mt-3">Cervejaria Bebedouro</h2>
                </a>
            </li>
        </ul>
    </div>
</nav>

<div class="container">
<?php
    $pag = @$_GET['action'];

    if($pag == 'ambev'){
        require_once 'src/empresas/ambev.php';
    }
    elseif ($pag == 'sobebe') {
        require_once 'src/empresas/sobebe.php';
    }
    elseif ($pag == 'imperio') {
        require_once 'src/empresas/imperio.php';
    }
    elseif ($pag == 'cristal') {
        require_once 'src/empresas/cristal.php';
    }
    elseif ($pag == 'coca') {
        require_once 'src/empresas/coca.php';
    }
    elseif ($pag == 'ferrari') {
        require_once 'src/empresas/ferrari.php';
    }
    elseif ($pag == 'heineken') {
        require_once 'src/empresas/heineken.php';
    }
    elseif ($pag == 'poty') {
        require_once 'src/empresas/poty.php';
    }
    elseif ($pag == 'Lambev') {
        require_once 'src/levantamento/levantamento_ambev.php';
    }
    elseif ($pag == 'Lcristal') {
        require_once 'src/levantamento/levantamento_cristal.php';
    }
    elseif ($pag == 'Lsobebe') {
        require_once 'src/levantamento/levantemento_sobebe.php';
    }
    elseif ($pag == 'Limperio') {
        require_once 'src/levantamento/levantamento_imperio.php';
    }
    elseif ($pag == 'Lcoca') {
        require_once 'src/levantamento/levantamento_coca.php';
    }
    elseif ($pag == 'Lferrari') {
        require_once 'src/levantamento/levantamento_ferrari.php';
    }
    elseif ($pag == 'Lheineken') {
        require_once 'src/levantamento/levantamento_heineken.php';
    }
    elseif ($pag == 'Lpoty') {
        require_once 'src/levantamento/levantamento_poty.php';
    }
    else{
        require_once 'central.php';
    }
?>
</div>
</body>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="bts/node_modules/jquery/dist/jquery.js"></script>
    <script src="bts/node_modules/popper.js/dist/umd/popper.js"></script>
    <script src="bts/node_modules/bootstrap/dist/js/bootstrap.js"></script>
    
</html>