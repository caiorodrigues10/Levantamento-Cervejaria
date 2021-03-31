<?php 
    require_once "../include/conexao.php";

    if(isset($_POST["EnvImperio"])){
        $ccr2l = $_POST["ccr2l"];
        $ccr1l = $_POST["ccr1l"];
        $ccp2l = $_POST["ccp2l"];
        $cclata = $_POST["cclata"];
        
        $fntLret2l = $_POST["fntLret2l"];
        $fntLp2l = $_POST["fntLp2l"];
        $fntLlata = $_POST["fntLlata"];
        $fntUp2l = $_POST["fntUp2l"];
        $fntUlata = $_POST["fntUlata"];

        $spP2l = $_POST["spP2l"];
        $splata = $_POST["splata"];

        $swP1l = $_POST["swP1l"];
        $swlata = $_POST["swlata"];
        
    }

    if(empty($ccr2l)){
    $ccr2l = 0;
    }
    if(empty($ccr1l)){
    $ccr1l = 0;
    }
    if(empty($ccp2l)){
    $ccp2l = 0;
    }
    if(empty($cclata)){
    $cclata = 0;
    }
    if(empty($fntLret2l)){
    $fntLret2l = 0;
    }
    if(empty($fntLp2l)){
    $fntLp2l = 0;
    }
    if(empty($fntLlata)){
    $fntLlata = 0;
    }
    if(empty($fntUp2l)){
    $fntUp2l = 0;
    }
    if(empty($fntUlata)){
    $fntUlata = 0;
    }
    if(empty($spP2l)){
    $spP2l = 0;
    }
    if(empty($splata)){
    $splata = 0;
    }
    if(empty($swP1l)){
    $swP1l = 0;
    }
    if(empty($swlata)){
    $swlata = 0;
    }


    $data = date('Y/m/d');

    $insert = "INSERT INTO coca VALUES ('$ccr2l','$ccr1l','$ccp2l','$cclata','$fntLret2l','$fntLp2l',
    '$fntLlata','$fntUp2l','$fntUlata','$spP2l','$splata','$swP1l','$swlata','$data')";


    $query = mysqli_query($link, $insert) or die (mysqli_error($link));

    if($query == true){
        echo "<script>alert('Salvo com sucesso!')</script>";
        echo "<meta http-equiv='refresh' content='0;url=../../index.php?action=Lcoca' />";
    } else {
        echo "<script>alert('Não foi possível Inserir!')</script>";
        echo "<meta http-equiv='refresh' content='0;url=index.php?action=coca' />";
    }