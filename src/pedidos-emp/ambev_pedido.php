<?php 
    require_once "../include/conexao.php";

    if(isset($_POST["EnvAmbev"])){
        $skol600 = $_POST["skol-600"];
        $skol1 = $_POST["skol-1"];
        $skolromarinho = $_POST["skol-romarinho"];
        $skollatao = $_POST["skol-latao"];
        $skollata = $_POST["skol-lata"];
        $skolpuromalte = $_POST["skol-puro-malte"];
        $skolbeatsazul = $_POST["skol-beats-azul"];
        $skolbeatsvermelha = $_POST["skol-beats-vermelha"];
        $skolbeats150 = $_POST["skol-beats-150"];
        $skolbeatsgt = $_POST["skol-beats-gt"];

        $brahma600 = $_POST["brahma-600"];
        $brahma1 = $_POST["brahma-1"];
        $brahmaromarinho = $_POST["brahma-romarinho"];
        $brahmalatao = $_POST["brahma-latao"];
        $brahmalata = $_POST["brahma-lata"];
        $brahma0 = $_POST["brahma-0"];
        $brahmamalzbier = $_POST["brahma-malzbier"];
        $brahmaduplo = $_POST["brahma-duplo"];

        $sub600 = $_POST["sub-600"];
        $sub1 = $_POST["sub-1"];
        $sublata = $_POST["sub-lata"];

        $boa600 = $_POST["boa-600"];
        $boa1 = $_POST["boa-1"];
        $boalata = $_POST["boa-lata"];
        $boaromarinho = $_POST["boa-romarinho"];

        $original600 = $_POST["original-600"];
        $originallata = $_POST["original-lata"];

        $budweiserlong = $_POST["budweiser-long"];
        $budweiserlatao = $_POST["budweiser-latao"];
        $budweiserlata = $_POST["budweiser-lata"];

        $caracu = $_POST["caracu"];

        $stella = $_POST["stella"];

        $becks = $_POST["becks"];

        $serrana600 = $_POST["serrana-600"];
        $serranalata = $_POST["serrana-lata"];

        $guarana1 = $_POST["guarana-1"];
        $guarana1_ret = $_POST["guarana-1-ret"];
        $guarana2 = $_POST["guarana-2"];
        $guarana2_0 = $_POST["guarana-2-0"];
        $guaranalata = $_POST["guarana-lata"];
        $guaranacaculao = $_POST["guarana-caculao"];
        
        $pepsi1 = $_POST["pepsi-1"];
        $pepsi1_ret = $_POST["pepsi-1-ret"];
        $pepsi2 = $_POST["pepsi-2"];
        $pepsicaculao = $_POST["pepsi-caculao"];

        $h2olimao500 = $_POST["h2o-limao-500"];
        $h2olimoneto500 = $_POST["h2o-limoneto-500"];
        $h2olimao1 = $_POST["h2o-limao-1"];
        $h2olimoneto1 = $_POST["h2o-limoneto-1"];

        $tonica = $_POST["tonica"];

        $cxromarinho = $_POST["cxromarinho"];
        $cx600 = $_POST["cx600"];
        $cx1 = $_POST["cx1"];
        $cxguarana = $_POST["cxguarana"];
        $cxpepsi = $_POST["cxpepsi"];

    }
    
    if(empty($skol600)){
    $skol600 = 0;
    }

    if(empty($skol1)){
    $skol1 = 0;
    }

    if(empty($skolromarinho)){
    $skolromarinho = 0;
    }

    if(empty($skollatao)){
    $skollatao = 0;
    }
    
    if(empty($skollata)){
    $skollata = 0;
    }

    if(empty($skolpuromalte)){
    $skolpuromalte = 0;
    }
    
    if(empty($skolbeatsazul)){
    $skolbeatsazul = 0;
    }

    if(empty($skolbeatsvermelha)){
    $skolbeatsvermelha = 0;
    }
    
    if(empty($skolbeats150)){
    $skolbeats150 = 0;
    }

    if(empty($skolbeats150)){
    $skolbeats150 = 0;
    }

    if(empty($skolbeatsgt)){
    $skolbeatsgt = 0;
    }

    if(empty($brahma600)){
    $brahma600 = 0;
    }

    if(empty($brahma1)){
    $brahma1 = 0;
    }

    if(empty($brahmaromarinho)){
    $brahmaromarinho = 0;
    }

    if(empty($brahmalatao)){
    $brahmalatao = 0;
    }

    if(empty($brahmalata)){
    $brahmalata = 0;
    }

    if(empty($brahma0)){
    $brahma0 = 0;
    }

    if(empty($brahmamalzbier)){
    $brahmamalzbier = 0;
    }
    
    if(empty($brahmaduplo)){
    $brahmaduplo = 0;
    }

    if(empty($sub600)){
    $sub600 = 0;
    }

    if(empty($sub1)){
    $sub1 = 0;
    }
    
    if(empty($sublata)){
    $sublata = 0;
    }

    if(empty($boa600)){
    $boa600 = 0;
    }
    
    if(empty($boa1)){
    $boa1 = 0;
    }

    if(empty($boalata)){
    $boalata = 0;
    }
    
    if(empty($boaromarinho)){
    $boaromarinho = 0;
    }

    if(empty($original600)){
    $original600 = 0;
    }

    if(empty($originallata)){
    $originallata = 0;
    }

    if(empty($budweiserlong)){
    $budweiserlong = 0;
    }

    if(empty($budweiserlatao)){
    $budweiserlatao = 0;
    }

    if(empty($budweiserlata)){
    $budweiserlata = 0;
    }

    if(empty($caracu)){
    $caracu = 0;
    }

    if(empty($stella)){
    $stella = 0;
    }

    if(empty($becks)){
    $becks = 0;
    }

    if(empty($serrana600)){
    $serrana600 = 0;
    }
    
    if(empty($serranalata)){
    $serranalata = 0;
    }

    if(empty($guarana1)){
    $guarana1 = 0;
    }
        
    if(empty($guarana1_ret)){
    $guarana1_ret = 0;
    }
    
    if(empty($guarana2)){
    $guarana2 = 0;
    }

    if(empty($guarana2_0)){
    $guarana2_0 = 0;
    }
    
    if(empty($guaranalata)){
    $guaranalata = 0;
    }

    if(empty($guaranacaculao)){
    $guaranacaculao = 0;
    }
    
    if(empty($pepsi1)){
    $pepsi1 = 0;
    }

    if(empty($pepsi1_ret)){
    $pepsi1_ret = 0;
    }

    if(empty($pepsi2)){
    $pepsi2 = 0;
    }

    if(empty($pepsicaculao)){
    $pepsicaculao = 0;
    }

    if(empty($h2olimao500)){
    $h2olimao500 = 0;
    }

    if(empty($h2olimoneto500)){
    $h2olimoneto500 = 0;
    }

    if(empty($h2olimao1)){
    $h2olimao1 = 0;
    }

    if(empty($h2olimoneto1)){
    $h2olimoneto1 = 0;
    }

    if(empty($tonica)){
    $tonica = 0;
    }

    if(empty($cxromarinho)){
    $cxromarinho = 0;
    }
    
    if(empty($cx600)){
    $cx600 = 0;
    }

    if(empty($cx1)){
    $cx1 = 0;
    }

    if(empty($cxguarana)){
    $cxguarana = 0;
    }

    if(empty($cxpepsi)){
    $cxpepsi = 0;
    }

    $data = date('Y/m/d');

    $insert = "INSERT INTO ambev VALUES ('$skol600','$skol1','$skolromarinho','$skollatao','$skollata','$skolpuromalte','$skolbeatsazul'
    ,'$skolbeatsvermelha','$skolbeats150','$skolbeatsgt','$brahma600','$brahma1','$brahmaromarinho','$brahmalatao','$brahmalata'
    ,'$brahmalata','$brahmamalzbier','$brahmaduplo','$sub600','$sub1','$sublata','$boa600','$boa1','$boalata','$boaromarinho'
    ,'$original600','$originallata','$budweiserlong','$budweiserlatao','$budweiserlata','$caracu','$stella','$becks'
    ,'$serrana600','$serranalata','$guarana1','$guarana1_ret','$guarana2','$guarana2_0','$guaranalata','$guaranacaculao'
    ,'$pepsi1','$pepsi1_ret','$pepsi2','$pepsicaculao','$h2olimao500','$h2olimoneto500','$h2olimao1','$h2olimoneto1','$tonica',
    '$cxromarinho','$cx600','$cx1','$cxguarana','$cxpepsi','$data')";


    $query = mysqli_query($link, $insert) or die (mysqli_error($link));

    if($query == true){
        echo "<script>alert('Salvo com sucesso!')</script>";
        echo "<meta http-equiv='refresh' content='0;url=../../index.php?action=Lambev' />";
    } else {
        echo "<script>alert('Não foi possível Inserir!')</script>";
        echo "<meta http-equiv='refresh' content='0;url=index.php?action=ambev' />";
    }






?>