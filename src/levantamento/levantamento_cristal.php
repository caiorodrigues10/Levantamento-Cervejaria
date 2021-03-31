<html>
<head>

</head>
<body>
<?php 

    $con = "SELECT * FROM cristal";

    $a = mysqli_query($link, $con);

    while ($t = mysqli_fetch_array($a)) {
        $cri_lata = $t["cri_lata"];
        $cri_latao = $t["cri_latao"];
        $cri_600 = $t["cri_600"];
        $cri_litrao = $t["cri_litrao"];

        $lk_lata = $t["lk_lata"];
        $lk_latao = $t["lk_latao"];

        $ita_lata = $t["ita_lata"];
        $ita_zero = $t["ita_zero"];

        $petra_lata = $t["petra_lata"];
        $petra_600 = $t["petra_600"];

        $tnt_lata = $t["tnt_lata"];
        $tnt_latao = $t["tnt_latao"];

        $data = $t["data"];

    }

echo "
<a type='submit' href='?action=cristal' class='mt-2' ><h5 class='text-dark'><b>Voltar</b></h5></a>
<h2 class='text-center mt-4 '>Levantamento Cristal, data do levantamento: $data</h2>

<div class='d-flex  flex-row bd-highlight mb-3'>
    <ul class='mt-5 list-group w-25 d-flex mr-4'>
        <li class='list-group-item d-flex justify-content-between align-items-center'>
        Crsital Lata
        <span class='badge badge-primary badge-pill'>$cri_lata</span>
        </li>
        <li class='list-group-item d-flex justify-content-between align-items-center'>
        Crsital Latão
        <span class='badge badge-primary badge-pill'>$cri_latao</span>
        </li>
        <li class='list-group-item d-flex justify-content-between align-items-center'>
        Crsital 600ml
        <span class='badge badge-primary badge-pill'>$cri_600</span>
        </li>
        <li class='list-group-item d-flex justify-content-between align-items-center'>
        Crsital Litrão
        <span class='badge badge-primary badge-pill'>$cri_litrao</span>
        </li>
        <li class='list-group-item d-flex bg-primary justify-content-between align-items-center'>
        </li>
        <li class='list-group-item d-flex justify-content-between align-items-center'>
        Lokal Lata
        <span class='badge badge-primary badge-pill'>$lk_lata</span>
        </li>
        <li class='list-group-item d-flex justify-content-between align-items-center'>
        Lokal Latão
        <span class='badge badge-primary badge-pill'>$lk_latao</span>
        </li>
        <li class='list-group-item d-flex bg-primary justify-content-between align-items-center'>
        </li>
        <li class='list-group-item d-flex justify-content-between align-items-center'>
        Itaipava Lata
        <span class='badge badge-primary badge-pill'>$ita_lata</span>
        </li>
        <li class='list-group-item d-flex justify-content-between align-items-center'>
        Itaipava Zero
        <span class='badge badge-primary badge-pill'>$ita_zero</span>
        </li>
        <li class='list-group-item d-flex bg-primary justify-content-between align-items-center'>
        </li>
        <li class='list-group-item d-flex justify-content-between align-items-center'>
        Petra Lata
        <span class='badge badge-primary badge-pill'>$petra_lata</span>
        </li>
        <li class='list-group-item d-flex justify-content-between align-items-center'>
        Petra 600ml
        <span class='badge badge-primary badge-pill'>$petra_600</span>
        </li>
        <li class='list-group-item d-flex bg-primary justify-content-between align-items-center'>
        </li>
        <li class='list-group-item d-flex justify-content-between align-items-center'>
        TNT Lata
        <span class='badge badge-primary badge-pill'>$tnt_lata</span>
        </li>
        <li class='list-group-item d-flex justify-content-between align-items-center'>
        TNT Latão
        <span class='badge badge-primary badge-pill'>$tnt_latao</span>
        </li>
    </ul>
";
?>