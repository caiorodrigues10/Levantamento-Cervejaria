<?php 
    require_once "../include/conexao.php";

    if(isset($_POST["EnvSobebe"])){
        $Cpuro = $_POST["Cpuro"];
        $Cmenta = $_POST["Cmenta"];
        $Cmorango = $_POST["Cmorango"];
        $Climao = $_POST["Climao"];
        $Cpessego = $_POST["Cpessego"];
        $Cblueberry = $_POST["Cblueberry"];
        $Ctuttifrut = $_POST["Ctuttifrut"];
        $Cmaracuja = $_POST["Cmaracuja"];
        $Climaobaunilha = $_POST["Climaobaunilha"];
        $Ccanelinha = $_POST["Ccanelinha"];
        $Cacai = $_POST["Cacai"];
        
        $Icelimao = $_POST["Icelimao"];
        $Icemaracuja = $_POST["Icemaracuja"];
        $Icetangerina = $_POST["Icetangerina"];
        $Icekiwi = $_POST["Icekiwi"];
        $Icefrut = $_POST["Icefrut"];
        $Icebalada = $_POST["Icebalada"];

        $polak = $_POST["polak"];
        $cinquentaeum = $_POST["cinquentaeum"];
        $quarentaeum = $_POST["quarentaeum"];
        $vinteeum = $_POST["vinteeum"];
        $vb = $_POST["vb"];
        $vbg = $_POST["vbg"];
        $saofrancisco = $_POST["saofrancisco"];
        $ervasamargas = $_POST["ervasamargas"];
        $presidente = $_POST["presidente"];
        $conhquedemel = $_POST["conhquedemel"];
        $paratinitinto = $_POST["paratinitinto"];
        $paratini = $_POST["paratini"];
        $conhaquedealcatrao = $_POST["conhaquedealcatrao"];
        $diplomata = $_POST["diplomata"];
        $paizano = $_POST["paizano"];
        $campari = $_POST["campari"];
        $jurupinga = $_POST["jurupinga"];

        $santo = $_POST["santo"];
        $chapinha = $_POST["chapinha"];
        $maques = $_POST["maques"];
        $delsole = $_POST["delsole"];
    }
    
    if(empty($Cpuro)){
    $Cpuro = 0;
    }

    if(empty($Cmenta)){
    $Cmenta = 0;
    }

    if(empty($Cmorango)){
    $Cmorango = 0;
    }

    if(empty($Climao)){
    $Climao = 0;
    }

    if(empty($Cpessego)){
    $Cpessego = 0;
    }
    
    if(empty($Cblueberry)){
    $Cblueberry = 0;
    }

    if(empty($Ctuttifrut)){
    $Ctuttifrut = 0;
    }

    if(empty($Cmaracuja)){
    $Cmaracuja = 0;
    }

    if(empty($Climaobaunilha)){
    $Climaobaunilha = 0;
    }

    if(empty($Ccanelinha)){
    $Ccanelinha = 0;
    }

    if(empty($Cacai)){
    $Cacai = 0;
    }

    if(empty($Icelimao)){
    $Icelimao = 0;
    }

    if(empty($Icemaracuja)){
    $Icemaracuja = 0;
    }

    if(empty($Icetangerina)){
    $Icetangerina = 0;
    }

    if(empty($Icekiwi)){
    $Icekiwi = 0;
    }

    if(empty($Icefrut)){
    $Icefrut = 0;
    }

    if(empty($Icebalada)){
    $Icebalada = 0;
    }

    if(empty($polak)){
    $polak = 0;
    }

    if(empty($cinquentaeum)){
    $cinquentaeum = 0;
    }

    if(empty($quarentaeum)){
    $quarentaeum = 0;
    }

    if(empty($vinteeum)){
    $vinteeum = 0;
    }

    if(empty($vb)){
    $vb = 0;
    }

    if(empty($vbg)){
    $vbg = 0;
    }

    if(empty($saofrancisco)){
    $saofrancisco = 0;
    }

    if(empty($ervasamargas)){
    $ervasamargas = 0;
    }

    if(empty($presidente)){
    $presidente = 0;
    }

    if(empty($conhquedemel)){
    $conhquedemel = 0;
    }

    if(empty($paratinitinto)){
    $paratinitinto = 0;
    }

    if(empty($paratini)){
    $paratini = 0;
    }

    if(empty($conhaquedealcatrao)){
    $conhaquedealcatrao = 0;
    }

    if(empty($diplomata)){
    $diplomata = 0;
    }

    if(empty($paizano)){
    $paizano = 0;
    }

    if(empty($campari)){
    $campari = 0;
    }

    if(empty($jurupinga)){
    $jurupinga = 0;
    }
    
    if(empty($santo)){
    $santo = 0;
    }

    if(empty($chapinha)){
    $chapinha = 0;
    }
    
    if(empty($maques)){
    $maques = 0;
    }

    if(empty($delsole)){
    $delsole = 0;
    }



    $data = date('Y/m/d');

    $insert = "INSERT INTO sobebe VALUES ('$santo','$chapinha','$maques','$delsole','$vb','$vbg'
    ,'$saofrancisco','$cinquentaeum','$presidente','$quarentaeum','$vinteeum','$polak','$paratini','$paratinitinto'
    ,'$conhquedemel','$conhaquedealcatrao','$paizano','$diplomata','$campari','$ervasamargas'
    ,'$jurupinga','$Icefrut','$Icelimao','$Icetangerina','$Icebalada','$Icekiwi','$Icemaracuja','$Cpuro','$Ctuttifrut','$Cmorango',
    '$Cpessego','$Cmaracuja','$Climao','$Cmenta','$Climaobaunilha','$Cblueberry','$Ccanelinha','$Cacai','$data')";


    $query = mysqli_query($link, $insert) or die (mysqli_error($link));

    if($query == true){
        echo "<script>alert('Salvo com sucesso!')</script>";
        echo "<meta http-equiv='refresh' content='0;url=../../index.php?action=Lsobebe' />";
    } else {
        echo "<script>alert('Não foi possível Inserir!')</script>";
        echo "<meta http-equiv='refresh' content='0;url=index.php?action=sobebe' />";
    }