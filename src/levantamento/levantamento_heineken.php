<html>
<head>

</head>
<body>
<?php 

    $con = "SELECT * FROM heineken";

    $a = mysqli_query($link, $con);

    while ($t = mysqli_fetch_array($a)) {
        $hei_lata = $t["hei_lata"];
        $hei_long = $t["hei_long"];
        $hei_600 = $t["hei_600"];
        $ei_pilsen = $t["ei_pilsen"];
        $ei_pale = $t["ei_pale"];
        $ei_ipa = $t["ei_ipa"];

        $data = $t["data"];

    }

echo "
<a type='submit' href='?action=imperio' class='mt-2' ><h5 class='text-dark'><b>Voltar</b></h5></a>
<h2 class='text-center mt-4 '>Levantamento Heineken, data do levantamento: $data</h2>

<div class='d-flex  flex-row bd-highlight mb-3'>
    <ul class='mt-5 list-group w-25 d-flex mr-4'>
        <li class='list-group-item d-flex justify-content-between align-items-center'>
        Heineken Lata
        <span class='badge badge-primary badge-pill'>$hei_lata</span>
        </li>
        <li class='list-group-item d-flex justify-content-between align-items-center'>
        Heineken Long neck 
        <span class='badge badge-primary badge-pill'>$hei_long</span>
        </li>
        <li class='list-group-item d-flex justify-content-between align-items-center'>
        Heineken 600ml 
        <span class='badge badge-primary badge-pill'>$hei_600</span>
        </li>
        <li class='list-group-item d-flex bg-primary justify-content-between align-items-center'>
        </li>
        <li class='list-group-item d-flex justify-content-between align-items-center'>
        Eisenbahn Pilsen 
        <span class='badge badge-primary badge-pill'>$ei_pilsen</span>
        </li>
        <li class='list-group-item d-flex justify-content-between align-items-center'>
        Eisenbahn Pale Ale
        <span class='badge badge-primary badge-pill'>$ei_pale</span>
        </li>
        <li class='list-group-item d-flex justify-content-between align-items-center'>
        Eisenbahn Ipa
        <span class='badge badge-primary badge-pill'>$ei_ipa</span>
        </li>
    </ul>
";
?>