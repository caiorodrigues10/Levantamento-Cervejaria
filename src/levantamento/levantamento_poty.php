<html>
<head>

</head>
<body>
<?php 

    $con = "SELECT * FROM poty";

    $a = mysqli_query($link, $con);

    while ($t = mysqli_fetch_array($a)) {
        $poty_gua = $t["poty_gua"];
        $poty_uva = $t["poty_uva"];
        $poty_laranja = $t["poty_laranja"];
        $poty_limao = $t["poty_limao"];
        $poty_citrus = $t["poty_citrus"];
        $roller = $t["roller"];

        $data = $t["data"];

    }

echo "
<a type='submit' href='?action=poty' class='mt-2' ><h5 class='text-dark'><b>Voltar</b></h5></a>
<h2 class='text-center mt-4 '>Levantamento Poty, data do levantamento: $data</h2>

<div class='d-flex  flex-row bd-highlight mb-3'>
    <ul class='mt-5 list-group w-25 d-flex mr-4'>
        <li class='list-group-item d-flex justify-content-between align-items-center'>
        Poty Guaraná 
        <span class='badge badge-primary badge-pill'>$poty_gua</span>
        </li>
        <li class='list-group-item d-flex justify-content-between align-items-center'>
        Poty Uva
        <span class='badge badge-primary badge-pill'>$poty_uva</span>
        </li>
        <li class='list-group-item d-flex justify-content-between align-items-center'>
        Poty Larnaja 
        <span class='badge badge-primary badge-pill'>$poty_laranja</span>
        </li>
        <li class='list-group-item d-flex justify-content-between align-items-center'>
        Poty Limão
        <span class='badge badge-primary badge-pill'>$poty_limao</span>
        </li>
        <li class='list-group-item d-flex justify-content-between align-items-center'>
        Poty Citrus 
        <span class='badge badge-primary badge-pill'>$poty_citrus</span>
        </li>
        <li class='list-group-item d-flex justify-content-between align-items-center'>
        Roller
        <span class='badge badge-primary badge-pill'>$roller</span>
        </li>
    </ul>
</div>
";
?>