<?php 
    require_once "../include/conexao.php";

    if(isset($_POST["EnvCristal"])){
        $crlata = $_POST["crlata"];
        $crlatao = $_POST["crlatao"];
        $cri600 = $_POST["cri600"];
        $crilitrao = $_POST["crilitrao"];

        $lklata = $_POST["lklata"];
        $lklatao = $_POST["lklatao"];

        $italata = $_POST["italata"];
        $itazero = $_POST["itazero"];

        $ptrlata = $_POST["ptrlata"];
        $ptr600 = $_POST["ptr600"];

        $tntlata = $_POST["tntlata"];
        $tntlatao = $_POST["tntlatao"];
        
    }

    if(empty($crlata)){
    $crlata = 0;
    }
    if(empty($crlatao)){
    $crlatao = 0;
    }
    if(empty($cri600)){
    $cri600 = 0;
    }
    if(empty($crilitrao)){
    $crilitrao = 0;
    }
    if(empty($lklata)){
    $lklata = 0;
    }
    if(empty($lklatao)){
    $lklatao = 0;
    }
    if(empty($italata)){
    $italata = 0;
    }
    if(empty($itazero)){
    $itazero = 0;
    }
    if(empty($ptrlata)){
    $ptrlata = 0;
    }
    if(empty($ptr600)){
    $ptr600 = 0;
    }
    if(empty($tntlata)){
    $tntlata = 0;
    }
    if(empty($tntlatao)){
    $tntlatao = 0;
    }


    $data = date('Y/m/d');

    $insert = "INSERT INTO cristal VALUES ('$crlata','$crlatao','$cri600','$crilitrao','$lklata','$lklatao','$italata',
    '$itazero','$ptrlata','$ptr600','$tntlata','$tntlatao','$data')";


    $query = mysqli_query($link, $insert) or die (mysqli_error($link));

    if($query == true){
        echo "<script>alert('Salvo com sucesso!')</script>";
        echo "<meta http-equiv='refresh' content='0;url=../../index.php?action=Lcristal' />";
    } else {
        echo "<script>alert('Não foi possível Inserir!')</script>";
        echo "<meta http-equiv='refresh' content='0;url=index.php?action=cristal' />";
    }