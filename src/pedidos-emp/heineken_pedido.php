<?php 
    require_once "../include/conexao.php";

    if(isset($_POST["EnvHeineken"])){
        $heilata = $_POST["heilata"];
        $heilong = $_POST["heilong"];
        $hei600 = $_POST["hei600"];

        $eipilsen = $_POST["eipilsen"];
        $eipale = $_POST["eipale"];
        $eiipa = $_POST["eiipa"];
        
    }

    if(empty($heilata)){
    $heilata = 0;
    }
    if(empty($heilong)){
    $heilong = 0;
    }
    if(empty($hei600)){
    $hei600 = 0;
    }

    if(empty($eipilsen)){
    $eipilsen = 0;
    }
    if(empty($eipale)){
    $eipale = 0;
    }
    if(empty($eiipa)){
    $eiipa = 0;
    }
    
    


    $data = date('Y/m/d');

    $insert = "INSERT INTO heineken VALUES ('$heilata','$heilong','$hei600','$eipilsen','$eipale','$eiipa','$data')";


    $query = mysqli_query($link, $insert) or die (mysqli_error($link));

    if($query == true){
        echo "<script>alert('Salvo com sucesso!')</script>";
        echo "<meta http-equiv='refresh' content='0;url=../../index.php?action=Lheineken' />";
    } else {
        echo "<script>alert('Não foi possível Inserir!')</script>";
        echo "<meta http-equiv='refresh' content='0;url=index.php?action=heineken' />";
    }