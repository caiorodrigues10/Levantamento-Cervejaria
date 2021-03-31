<?php 
    require_once "../include/conexao.php";

    if(isset($_POST["EnvPoty"])){
        $potygua = $_POST["potygua"];
        $potyuva = $_POST["potyuva"];
        $potylar = $_POST["potylar"];
        $potylim = $_POST["potylim"];
        $potycit = $_POST["potycit"];
        $roller = $_POST["roller"];
        
    }

    if(empty($potygua)){
    $potygua = 0;
    }
    if(empty($potyuva)){
    $potyuva = 0;
    }
    if(empty($potylar)){
    $potylar = 0;
    }
    if(empty($potylim)){
    $potylim = 0;
    }
    if(empty($potycit)){
    $potycit = 0;
    }
    if(empty($roller)){
    $roller = 0;
    }
    
    


    $data = date('Y/m/d');

    $insert = "INSERT INTO poty VALUES ('$potygua','$potyuva','$potylar','$potylim','$potycit','$roller','$data')";


    $query = mysqli_query($link, $insert) or die (mysqli_error($link));

    if($query == true){
        echo "<script>alert('Salvo com sucesso!')</script>";
        echo "<meta http-equiv='refresh' content='0;url=../../index.php?action=Lpoty' />";
    } else {
        echo "<script>alert('Não foi possível Inserir!')</script>";
        echo "<meta http-equiv='refresh' content='0;url=index.php?action=poty' />";
    }