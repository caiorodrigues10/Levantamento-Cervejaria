<html>
<head>

</head>
<body>
<?php 

    $con = "SELECT * FROM sobebe";

    $a = mysqli_query($link, $con);

    while ($t = mysqli_fetch_array($a)) {
        $santo_expedito = $t["santo_expedito"];
        $chapinha = $t["chapinha"];
        $vinho_marques = $t["vinho_marques"];
        $del_sole = $t["del_sole"];
        $velho_barreiro = $t["velho_barreiro"];
        $velho_gold = $t["velho_gold"];
        $sao_frnacisco = $t["sao_francisco"];
        $cinquentaeum = $t["51"];
        $presidente = $t["presidente"];
        $quarentaeum = $t["41"];
        $vinteeum = $t["21"];
        $polak = $t["polak"];
        $paratini = $t["paratini"];
        $paratini_tinto = $t["paratini_tinto"];
        $conhaque_mel = $t["conhaque_mel"];
        $conhaque_alcatrao = $t["conhaque_alcatrao"];
        $paizano = $t["paizano"];
        $diplomata = $t["diplomata"];
        $campari = $t["campari"];
        $ervasamargas = $t["ervas amargas"];
        $jurupinga = $t["jurupinga"];
        $icefruit = $t["51_fruitmix"];
        $icelimao = $t["51_limao"];
        $icetangerina = $t["51_tangerina"];
        $icebalada = $t["51_balada"];
        $icekiwi = $t["51_kiwi"];
        $icemaracuja = $t["51_maracuja"];
        $tulinha = $t["tulinha"];
        $corote_tutti = $t["corote_tutti"];
        $corote_morango = $t["corote_morango"];
        $corote_pessego = $t["corote_pessego"];
        $corote_maracuja = $t["corote_maracuja"];
        $corote_limao = $t["corote_limao"];
        $corote_menta = $t["corote_menta"];
        $corote_baunilhalimao = $t["corote_baunilhalimão:"];
        $corote_blueberry = $t["corote_bluberry"];
        $corote_canela = $t["corote_canela"];
        $corote_acai = $t["corote_acai"];
        $data = $t["data"];

    }

echo "
<a type='submit' href='?action=sobebe' class='mt-2' ><h5 class='text-dark'><b>Voltar</b></h5></a>
<h2 class='text-center mt-4 '>Levantamento Sobebe, data do levantamento: $data</h2>

<div class='d-flex  flex-row bd-highlight mb-3'>
    <ul class='mt-5 list-group w-25 d-flex mr-4'>
        <li class='list-group-item d-flex justify-content-between align-items-center'>
        Tulinha
        <span class='badge badge-primary badge-pill'>$tulinha</span>
        </li>
        <li class='list-group-item d-flex justify-content-between align-items-center'>
        Corote Menta
        <span class='badge badge-primary badge-pill'>$corote_menta</span>
        </li>
        <li class='list-group-item d-flex justify-content-between align-items-center'>
        Corote Morango
        <span class='badge badge-primary badge-pill'>$corote_morango</span>
        </li>
        <li class='list-group-item d-flex justify-content-between align-items-center'>
        Corote Limão
        <span class='badge badge-primary badge-pill'>$corote_limao</span>
        </li>
        <li class='list-group-item d-flex justify-content-between align-items-center'>
        Corote Pessêgo
        <span class='badge badge-primary badge-pill'>$corote_pessego</span>
        </li>
        <li class='list-group-item d-flex justify-content-between align-items-center'>
        Corote Blueberry
        <span class='badge badge-primary badge-pill'>$corote_blueberry</span>
        </li>
        <li class='list-group-item d-flex justify-content-between align-items-center'>
        Corote Tutti-Frut
        <span class='badge badge-primary badge-pill'>$corote_tutti</span>
        </li>
        <li class='list-group-item d-flex justify-content-between align-items-center'>
        Corote Maracujá
        <span class='badge badge-primary badge-pill'>$corote_maracuja</span>
        </li>
        <li class='list-group-item d-flex justify-content-between align-items-center'>
        Corote Limão com Baunilha
        <span class='badge badge-primary badge-pill'>$corote_baunilhalimao</span>
        </li>
        <li class='list-group-item d-flex justify-content-between align-items-center'>
        Corote Canela
        <span class='badge badge-primary badge-pill'>$corote_canela</span>
        </li>
        <li class='list-group-item d-flex justify-content-between align-items-center'>
        Corote Açaí
        <span class='badge badge-primary badge-pill'>$corote_acai</span>
        </li>
        <li class='list-group-item d-flex bg-primary justify-content-between align-items-center'>
        </li>
        <li class='list-group-item d-flex justify-content-between align-items-center'>
        51 Limão 
        <span class='badge badge-primary badge-pill'>$icelimao</span>
        </li>
        <li class='list-group-item d-flex justify-content-between align-items-center'>
        51 Maracujá 
        <span class='badge badge-primary badge-pill'>$icemaracuja</span>
        </li>
        <li class='list-group-item d-flex justify-content-between align-items-center'>
        51 Tangerina 
        <span class='badge badge-primary badge-pill'>$icetangerina</span>
        </li>
        <li class='list-group-item d-flex justify-content-between align-items-center'>
        51 Kiwi 
        <span class='badge badge-primary badge-pill'>$icekiwi</span>
        </li>
        <li class='list-group-item d-flex justify-content-between align-items-center'>
        51 Frut Mix
        <span class='badge badge-primary badge-pill'>$icefruit</span>
        </li>
    </ul>
    
    <ul class='mt-5 list-group w-25 d-lg-flex mr-4'>
        <li class='list-group-item d-flex justify-content-between align-items-center'>
        51 Balada 
        <span class='badge badge-primary badge-pill'>$icebalada</span>
        </li>
        <li class='list-group-item d-flex bg-primary justify-content-between align-items-center'>
        </li>
        <li class='list-group-item d-flex justify-content-between align-items-center'>
        Polak
        <span class='badge badge-primary badge-pill'>$polak</span>
        </li>
        <li class='list-group-item d-flex justify-content-between align-items-center'>
        51
        <span class='badge badge-primary badge-pill'>$cinquentaeum</span>
        </li>
        <li class='list-group-item d-flex justify-content-between align-items-center'>
        41
        <span class='badge badge-primary badge-pill'>$quarentaeum</span>
        </li>
        <li class='list-group-item d-flex justify-content-between align-items-center'>
        21
        <span class='badge badge-primary badge-pill'>$vinteeum</span>
        </li>
        <li class='list-group-item d-flex justify-content-between align-items-center'>
        Velho Barreiro
        <span class='badge badge-primary badge-pill'>$velho_barreiro</span>
        </li>
        <li class='list-group-item d-flex justify-content-between align-items-center'>
        Velho Barreiro Gold
        <span class='badge badge-primary badge-pill'>$velho_gold</span>
        </li>
        <li class='list-group-item d-flex justify-content-between align-items-center'>
        São Francisco
        <span class='badge badge-primary badge-pill'>$sao_frnacisco</span>
        </li>
        <li class='list-group-item d-flex justify-content-between align-items-center'>
        Ervas Amargas
        <span class='badge badge-primary badge-pill'>$ervasamargas</span>
        </li>
        <li class='list-group-item d-flex justify-content-between align-items-center'>
        Presidente
        <span class='badge badge-primary badge-pill'>$presidente</span>
        </li>
        <li class='list-group-item d-flex justify-content-between align-items-center'>
        Conhaque de Mel
        <span class='badge badge-primary badge-pill'>$conhaque_mel</span>
        </li>
        <li class='list-group-item d-flex justify-content-between align-items-center'>
        Paratini Tinto
        <span class='badge badge-primary badge-pill'>$paratini_tinto</span>
        </li>
        <li class='list-group-item d-flex justify-content-between align-items-center'>
        Paratini
        <span class='badge badge-primary badge-pill'>$paratini</span>
        </li>
        <li class='list-group-item d-flex justify-content-between align-items-center'>
        Conhaque de Alcatrão
        <span class='badge badge-primary badge-pill'>$conhaque_alcatrao</span>
        </li>
        <li class='list-group-item d-flex justify-content-between align-items-center'>
        Conhaque de Alcatrão
        <span class='badge badge-primary badge-pill'>$conhaque_alcatrao</span>
        </li>
        <li class='list-group-item d-flex justify-content-between align-items-center'>
        Conhaque de Alcatrão
        <span class='badge badge-primary badge-pill'>$conhaque_alcatrao</span>
        </li>
        
    </ul>

    <ul class='mt-5 list-group w-25 d-lg-flex mr-4'>
        <li class='list-group-item d-flex justify-content-between align-items-center'>
        Diplomata
        <span class='badge badge-primary badge-pill'>$diplomata</span>
        </li>
        <li class='list-group-item d-flex justify-content-between align-items-center'>
        Paizano
        <span class='badge badge-primary badge-pill'>$paizano</span>
        </li>
        <li class='list-group-item d-flex justify-content-between align-items-center'>
        Campari
        <span class='badge badge-primary badge-pill'>$campari</span>
        </li>
        <li class='list-group-item d-flex justify-content-between align-items-center'>
        Jurupinga
        <span class='badge badge-primary badge-pill'>$jurupinga</span>
        </li>
        <li class='list-group-item d-flex bg-primary justify-content-between align-items-center'>
        </li>
        <li class='list-group-item d-flex justify-content-between align-items-center'>
        Santo Expedito
        <span class='badge badge-primary badge-pill'>$santo_expedito</span>
        </li>
        <li class='list-group-item d-flex justify-content-between align-items-center'>
        Chapinha
        <span class='badge badge-primary badge-pill'>$chapinha</span>
        </li>
        <li class='list-group-item d-flex justify-content-between align-items-center'>
        Marquês de Mendonça
        <span class='badge badge-primary badge-pill'>$vinho_marques</span>
        </li>
        <li class='list-group-item d-flex justify-content-between align-items-center'>
        Del Sole
        <span class='badge badge-primary badge-pill'>$del_sole</span>
        </li>
        
    </ul>
    
";
?>