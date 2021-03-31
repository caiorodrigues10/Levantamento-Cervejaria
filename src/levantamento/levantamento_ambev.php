<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bts/node_modules/bootstrap/compiler/bootstrap.css">
    <link rel="stylesheet" href="src/css/style.css">

</head>
<body>
<?php 

    $con = "SELECT * FROM ambev";

    $a = mysqli_query($link, $con);

    while ($t = mysqli_fetch_array($a)) {
        $skol600 = $t["skol600"];
        $skol1 = $t["skol1"];
        $skolromarinho = $t["skolromarinho"];
        $skollatao = $t["skollatao"];
        $skollata = $t["skollata"];
        $skolpuromalte = $t["skolpuromalte"];
        $skolbeatsazul = $t["skolbeatsazul"];
        $skolbeatsvermelha = $t["skolbeatsvermelha"];
        $skolbeats150 = $t["skolbeats150"];
        $skolbeatsgt = $t["skolbeatsgt"];

        $brahma600 = $t["brahma600"];
        $brahma1 = $t["brahma1"];
        $brahmaromarinho = $t["brahmaromarinho"];
        $brahmalatao = $t["brahmalatao"];
        $brahmalata = $t["brahmalata"];
        $brahma0 = $t["brahma0"];
        $brahmamalzbier = $t["brahmamalzbier"];
        $brahmaduplo = $t["brahmaduplo"];

        $sub600 = $t["sub600"];
        $sub1 = $t["sub1"];
        $sublata = $t["sublata"];

        $boa600 = $t["boa600"];
        $boa1 = $t["boa1"];
        $boalata = $t["boalata"];
        $boaromarinho = $t["boaromarinho"];

        $original600 = $t["original600"];
        $originallata = $t["originallata"];

        $budweiserlong = $t["budweiserlong"];
        $budweiserlatao = $t["budweiserlatao"];
        $budweiserlata = $t["budweiserlata"];

        $caracu = $t["caracu"];

        $stella = $t["stella"];

        $becks = $t["becks"];

        $serrana600 = $t["serrana600"];
        $serranalata = $t["serranalata"];

        $guarana1 = $t["guarana1"];
        $guarana1_ret  = $t["guarana1_ret"];
        $guarana2 = $t["guarana2"];
        $guarana2_0 = $t["guarana2_0"];
        $guaranalata = $t["guaranalata"];
        $guaranacaculao = $t["guaranacaculao"];
        
        $pepsi1 = $t["pepsi1"];
        $pepsi1_ret = $t["pepsi1_ret"];
        $pepsi2 = $t["pepsi2"];
        $pepsicaculao = $t["pepsicaculao"];

        $h2olimao500 = $t["h2olimao500"];
        $h2olimoneto500 = $t["h2olimoneto500"];
        $h2olimao1 = $t["h2olimao1"];
        $h2olimoneto1 = $t["h2olimoneto1"];

        $tonica = $t["tonica"];

        $cxromarinho = $t["cxromarinho"];
        $cx600 = $t["cx600"];
        $cx1 = $t["cx1"];
        $cxguarana = $t["cxguarana"];
        $cxpepsi = $t["cxpepsi"];

        $data = $t["data"];
    }

echo "
<a type='submit' href='?action=ambev' class='mt-2' ><h5 class='text-dark'><b>Voltar</b></h5></a>
<h2 class='text-center mt-4 '>Levantamento Ambev, data do levantamento: $data</h2>

<div class='d-flex  flex-row bd-highlight mb-3'>
    <ul class='mt-5 list-group w-25 d-flex mr-4'>
        <li class='list-group-item d-flex justify-content-between align-items-center'>
        Skol 600ml
        <span class='badge badge-primary badge-pill'>$skol600</span>
        </li>
        <li class='list-group-item d-flex justify-content-between align-items-center'>
        Skol 1L
        <span class='badge badge-primary badge-pill'>$skol1</span>
        </li>
        <li class='list-group-item d-flex justify-content-between align-items-center'>
        Skol Romarinho
        <span class='badge badge-primary badge-pill'>$skolromarinho</span>
        </li>
        <li class='list-group-item d-flex justify-content-between align-items-center'>
        Skol Latão
        <span class='badge badge-primary badge-pill'>$skollatao</span>
        </li>
        <li class='list-group-item d-flex justify-content-between align-items-center'>
        Skol Lata
        <span class='badge badge-primary badge-pill'>$skollata</span>
        </li>
        <li class='list-group-item d-flex justify-content-between align-items-center'>
        Skol Puro Malte Lata
        <span class='badge badge-primary badge-pill'>$skolpuromalte</span>
        </li>
        <li class='list-group-item d-flex justify-content-between align-items-center'>
        Skol Beats Azul
        <span class='badge badge-primary badge-pill'>$skolbeatsazul</span>
        </li>
        <li class='list-group-item d-flex justify-content-between align-items-center'>
        Skol Beats Vermelha
        <span class='badge badge-primary badge-pill'>$skolbeatsvermelha</span>
        </li>
        <li class='list-group-item d-flex justify-content-between align-items-center'>
        Skol Beats 150BPM
        <span class='badge badge-primary badge-pill'>$skolbeats150</span>
        </li>
        <li class='list-group-item d-flex justify-content-between align-items-center'>
        Skol Beats GT
        <span class='badge badge-primary badge-pill'>$skolbeatsgt</span>
        </li>
        <li class='list-group-item d-flex bg-primary justify-content-between align-items-center'>
        </li>
        <li class='list-group-item d-flex justify-content-between align-items-center'>
        Brahma 600ml
        <span class='badge badge-primary badge-pill'>$brahma600</span>
        </li>
        <li class='list-group-item d-flex justify-content-between align-items-center'>
        Brahma 1L
        <span class='badge badge-primary badge-pill'>$brahma1</span>
        </li>
        <li class='list-group-item d-flex justify-content-between align-items-center'>
        Brahma Romarinho
        <span class='badge badge-primary badge-pill'>$brahmaromarinho</span>
        </li>
        <li class='list-group-item d-flex justify-content-between align-items-center'>
        Brahma Latão
        <span class='badge badge-primary badge-pill'>$brahmalatao</span>
        </li>
        <li class='list-group-item d-flex justify-content-between align-items-center'>
        Brahma Lata
        <span class='badge badge-primary badge-pill'>$brahmalata</span>
        </li>
        <li class='list-group-item d-flex justify-content-between align-items-center'>
        Brahma Zero
        <span class='badge badge-primary badge-pill'>$brahma0</span>
        </li>
    </ul>
    
    <ul class='mt-5 list-group w-25 d-lg-flex mr-4'>
        <li class='list-group-item d-flex justify-content-between align-items-center'>
        Brahma Malzbier
        <span class='badge badge-primary badge-pill'>$brahmamalzbier</span>
        </li><li class='list-group-item d-flex justify-content-between align-items-center'>
        Brahma Duplo Malte
        <span class='badge badge-primary badge-pill'>$brahmaduplo</span>
        </li>
        <li class='list-group-item d-flex bg-primary justify-content-between align-items-center'>
        </li>
        <li class='list-group-item d-flex justify-content-between align-items-center'>
        Sub 600ml
        <span class='badge badge-primary badge-pill'>$sub600</span>
        </li>
        <li class='list-group-item d-flex justify-content-between align-items-center'>
        Sub 1L
        <span class='badge badge-primary badge-pill'>$sub1</span>
        </li>
        <li class='list-group-item d-flex justify-content-between align-items-center'>
        Sub Lata
        <span class='badge badge-primary badge-pill'>$sublata</span>
        </li>
        <li class='list-group-item d-flex bg-primary justify-content-between align-items-center'>
        </li>
        <li class='list-group-item d-flex justify-content-between align-items-center'>
        Boa 600ml
        <span class='badge badge-primary badge-pill'>$boa600</span>
        </li>
        <li class='list-group-item d-flex justify-content-between align-items-center'>
        Boa 1L
        <span class='badge badge-primary badge-pill'>$boa1</span>
        </li>
        <li class='list-group-item d-flex justify-content-between align-items-center'>
        Boa Lata
        <span class='badge badge-primary badge-pill'>$boalata</span>
        </li>
        <li class='list-group-item d-flex justify-content-between align-items-center'>
        Boa Romarinho
        <span class='badge badge-primary badge-pill'>$boaromarinho</span>
        </li>
        <li class='list-group-item d-flex bg-primary justify-content-between align-items-center'>
        </li>
        <li class='list-group-item d-flex justify-content-between align-items-center'>
        Original 600ml
        <span class='badge badge-primary badge-pill'>$original600</span>
        </li>
        <li class='list-group-item d-flex justify-content-between align-items-center'>
        Original Lata
        <span class='badge badge-primary badge-pill'>$originallata</span>
        </li>
        <li class='list-group-item d-flex bg-primary justify-content-between align-items-center'>
        </li>
        <li class='list-group-item d-flex justify-content-between align-items-center'>
        Budweiser Long Neck
        <span class='badge badge-primary badge-pill'>$budweiserlong</span>
        </li>
        <li class='list-group-item d-flex justify-content-between align-items-center'>
        Budweiser Latão
        <span class='badge badge-primary badge-pill'>$budweiserlatao</span>
        </li>
        <li class='list-group-item d-flex justify-content-between align-items-center'>
        Budweiser Lata
        <span class='badge badge-primary badge-pill'>$budweiserlata</span>
        </li>
        <li class='list-group-item d-flex bg-primary justify-content-between align-items-center'>
        </li>
        
    </ul>

    <ul class='mt-5 list-group w-25 d-lg-flex mr-4'>
        <li class='list-group-item d-flex justify-content-between align-items-center'>
        Caracu Lata
        <span class='badge badge-primary badge-pill'>$caracu</span>
        </li>
        <li class='list-group-item d-flex bg-primary justify-content-between align-items-center'>
        </li>
        <li class='list-group-item d-flex justify-content-between align-items-center'>
        Stella
        <span class='badge badge-primary badge-pill'>$stella</span>
        </li>
        <li class='list-group-item d-flex bg-primary justify-content-between align-items-center'>
        </li>
        <li class='list-group-item d-flex justify-content-between align-items-center'>
        Beck's
        <span class='badge badge-primary badge-pill'>$becks</span>
        </li>
        <li class='list-group-item d-flex bg-primary justify-content-between align-items-center'>
        </li>
        <li class='list-group-item d-flex justify-content-between align-items-center'>
        Serrana 600ml
        <span class='badge badge-primary badge-pill'>$serrana600</span>
        </li>
        <li class='list-group-item d-flex justify-content-between align-items-center'>
        Serrana Lata
        <span class='badge badge-primary badge-pill'>$serranalata</span>
        </li>
        <li class='list-group-item d-flex bg-primary justify-content-between align-items-center'>
        </li>
        <li class='list-group-item d-flex justify-content-between align-items-center'>
        Guaraná 1L
        <span class='badge badge-primary badge-pill'>$guarana1</span>
        </li>
        <li class='list-group-item d-flex justify-content-between align-items-center'>
        Guaraná 1L Retornável
        <span class='badge badge-primary badge-pill'>$guarana1_ret</span>
        </li>
        <li class='list-group-item d-flex justify-content-between align-items-center'>
        Guaraná 2L 
        <span class='badge badge-primary badge-pill'>$guarana2</span>
        </li>
        <li class='list-group-item d-flex justify-content-between align-items-center'>
        Guaraná 2L Zero
        <span class='badge badge-primary badge-pill'>$guarana2_0</span>
        </li>
        <li class='list-group-item d-flex justify-content-between align-items-center'>
        Guaraná Lata
        <span class='badge badge-primary badge-pill'>$guaranalata</span>
        </li>
        <li class='list-group-item d-flex justify-content-between align-items-center'>
        Guaraná Caçulão
        <span class='badge badge-primary badge-pill'>$guaranacaculao</span>
        </li>
        <li class='list-group-item d-flex bg-primary justify-content-between align-items-center'>
        </li>
        <li class='list-group-item d-flex justify-content-between align-items-center'>
        Pepsi 1L
        <span class='badge badge-primary badge-pill'>$pepsi1</span>
        </li>
        <li class='list-group-item d-flex justify-content-between align-items-center'>
        Pepsi 1L Retornável
        <span class='badge badge-primary badge-pill'>$pepsi1_ret</span>
        </li>
        <li class='list-group-item d-flex justify-content-between align-items-center'>
        Pepsi 2L
        <span class='badge badge-primary badge-pill'>$pepsi2</span>
        </li>
    </ul>

    <ul class='mt-5 list-group w-25 d-lg-flex mr-4'>
        <li class='list-group-item d-flex justify-content-between align-items-center'>
        Pepsi Caçulão
        <span class='badge badge-primary badge-pill'>$pepsicaculao</span>
        </li>
        <li class='list-group-item d-flex bg-primary justify-content-between align-items-center'>
        </li>
        <li class='list-group-item d-flex justify-content-between align-items-center'>
        H2O Limão 500ml
        <span class='badge badge-primary badge-pill'>$h2olimao500</span>
        </li>
        <li class='list-group-item d-flex justify-content-between align-items-center'>
        H2O Limoneto 500ml
        <span class='badge badge-primary badge-pill'>$h2olimoneto500</span>
        </li>
        <li class='list-group-item d-flex justify-content-between align-items-center'>
        H2O Limão 1,5L
        <span class='badge badge-primary badge-pill'>$h2olimao1</span>
        </li>
        <li class='list-group-item d-flex justify-content-between align-items-center'>
        H2O Limoneto 1,5L
        <span class='badge badge-primary badge-pill'>$h2olimoneto1</span>
        </li>
        <li class='list-group-item d-flex bg-primary justify-content-between align-items-center'>
        </li>
        <li class='list-group-item d-flex justify-content-between align-items-center'>
        Tonica
        <span class='badge badge-primary badge-pill'>$tonica</span>
        </li>
        <li class='list-group-item d-flex bg-primary justify-content-between align-items-center'>
        </li>
        <li class='list-group-item d-flex justify-content-between align-items-center'>
        Caixas Vazias Romarinho
        <span class='badge badge-primary badge-pill'>$cxromarinho</span>
        </li>
        <li class='list-group-item d-flex justify-content-between align-items-center'>
        Caixas Vazias 600ml
        <span class='badge badge-primary badge-pill'>$cx600</span>
        </li>
        <li class='list-group-item d-flex justify-content-between align-items-center'>
        Caixas Vazias 1L
        <span class='badge badge-primary badge-pill'>$cx1</span>
        </li>
        <li class='list-group-item d-flex justify-content-between align-items-center'>
        Caixas Vazias Guaraná
        <span class='badge badge-primary badge-pill'>$cxguarana</span>
        </li>
        <li class='list-group-item d-flex justify-content-between align-items-center'>
        Caixas Vazias Pepsi
        <span class='badge badge-primary badge-pill'>$cxpepsi</span>
        </li>
    </ul>
</div>";
?>
</body>
</html>