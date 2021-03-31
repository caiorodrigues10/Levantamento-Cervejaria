<html>
<head>

</head>
<body>
<?php 

    $con = "SELECT * FROM ferrari";

    $a = mysqli_query($link, $con);

    while ($t = mysqli_fetch_array($a)) {
        $ferrari = $t["ferrari"];
        $pic_gua = $t["pic_gua"];
        $pic_cola = $t["pic_cola"];
        $pic_uva = $t["pic_uva"];
        $pic_laranja = $t["pic_laranja"];
        $pic_limao = $t["pic_limao"];

        $data = $t["data"];

    }

echo "
<a type='submit' href='?action=ferrari' class='mt-2' ><h5 class='text-dark'><b>Voltar</b></h5></a>
<h2 class='text-center mt-4 '>Levantamento Ferrari, data do levantamento: $data</h2>

<div class='d-flex  flex-row bd-highlight mb-3'>
    <ul class='mt-5 list-group w-25 d-flex mr-4'>
        <li class='list-group-item d-flex justify-content-between align-items-center'>
        Ferrari
        <span class='badge badge-primary badge-pill'>$ferrari</span>
        </li>
        <li class='list-group-item d-flex justify-content-between align-items-center'>
        Pic-Nic Guaraná
        <span class='badge badge-primary badge-pill'>$pic_gua</span>
        </li>
        <li class='list-group-item d-flex justify-content-between align-items-center'>
        Pic-Nic Cola
        <span class='badge badge-primary badge-pill'>$pic_cola</span>
        </li>
        <li class='list-group-item d-flex justify-content-between align-items-center'>
        Pic-Nic Uva
        <span class='badge badge-primary badge-pill'>$pic_uva</span>
        </li>
        <li class='list-group-item d-flex justify-content-between align-items-center'>
        Pic-Nic Laranja
        <span class='badge badge-primary badge-pill'>$pic_laranja</span>
        </li>
        <li class='list-group-item d-flex justify-content-between align-items-center'>
        Pic-Nic Limão
        <span class='badge badge-primary badge-pill'>$pic_limao</span>
        </li>
    </ul>
";
?>