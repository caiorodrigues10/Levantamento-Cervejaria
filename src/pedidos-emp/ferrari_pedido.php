<?php 
    require_once "../include/conexao.php";

    if(isset($_POST["EnvImperio"])){
        $ferrari = $_POST["ferrari"];
        $picguarana = $_POST["picguarana"];
        $piccola = $_POST["piccola"];
        $picuva = $_POST["picuva"];
        $piclaranja = $_POST["piclaranja"];
        $piclimao = $_POST["piclimao"];
        
    }

    if(empty($ferrari)){
    $ferrari = 0;
    }
    if(empty($picguarana)){
    $picguarana = 0;
    }
    if(empty($piccola)){
    $piccola = 0;
    }
    if(empty($picuva)){
    $picuva = 0;
    }
    if(empty($piclaranja)){
    $piclaranja = 0;
    }
    if(empty($piclimao)){
    $piclimao = 0;
    }
    
    


    $data = date('Y/m/d');

    $insert = "INSERT INTO ferrari VALUES ('$ferrari','$picguarana','$piccola','$picuva','$piclaranja','$piclimao','$data')";


    $query = mysqli_query($link, $insert) or die (mysqli_error($link));

    if($query == true){
        echo "<script>alert('Salvo com sucesso!')</script>";
        echo "<meta http-equiv='refresh' content='0;url=../../index.php?action=Lferrari' />";
    } else {
        echo "<script>alert('Não foi possível Inserir!')</script>";
        echo "<meta http-equiv='refresh' content='0;url=index.php?action=ferrari' />";
    }