<?php 
    require_once "../include/conexao.php";

    if(isset($_POST["EnvImperio"])){
        $imp350 = $_POST["imp350"];
        $imp269 = $_POST["imp269"];
        $imp473 = $_POST["imp473"];
        $implager = $_POST["implager"];
        $impgold = $_POST["impgold"];
        $imp600 = $_POST["imp600"];
        $impromarinho = $_POST["impromarinho"];
        
    }

    if(empty($imp350)){
    $imp350 = 0;
    }
    
    if(empty($imp269)){
    $imp269 = 0;
    }

    if(empty($imp473)){
    $imp473 = 0;
    }
    if(empty($implager)){
    $implager = 0;
    }
    
    if(empty($impgold)){
    $impgold = 0;
    }

    if(empty($imp600)){
    $imp600 = 0;
    }

    if(empty($impromarinho)){
    $impromarinho = 0;
    }


    $data = date('Y/m/d');

    $insert = "INSERT INTO imperio VALUES ('$imp350','$imp269','$imp473','$implager','$impgold','$imp600','$impromarinho','$data')";


    $query = mysqli_query($link, $insert) or die (mysqli_error($link));

    if($query == true){
        echo "<script>alert('Salvo com sucesso!')</script>";
        echo "<meta http-equiv='refresh' content='0;url=../../index.php?action=Limperio' />";
    } else {
        echo "<script>alert('Não foi possível Inserir!')</script>";
        echo "<meta http-equiv='refresh' content='0;url=index.php?action=imperio' />";
    }