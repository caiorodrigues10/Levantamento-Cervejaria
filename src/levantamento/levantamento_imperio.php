<html>
<head>

</head>
<body>
<?php 

    $con = "SELECT * FROM imperio";

    $a = mysqli_query($link, $con);

    while ($t = mysqli_fetch_array($a)) {
        $imp_350 = $t["imp_350"];
        $imp_269 = $t["imp_269"];
        $imp_473 = $t["imp_473"];
        $imp_lager = $t["imp_lager"];
        $imp_gold = $t["imp_gold"];
        $imp_600 = $t["imp_600"];
        $imp_romarinho = $t["imp_romarinho"];

        $data = $t["data"];

    }

echo "
<a type='submit' href='?action=imperio' class='mt-2' ><h5 class='text-dark'><b>Voltar</b></h5></a>
<h2 class='text-center mt-4 '>Levantamento Império, data do levantamento: $data</h2>

<div class='d-flex  flex-row bd-highlight mb-3'>
    <ul class='mt-5 list-group w-25 d-flex mr-4'>
        <li class='list-group-item d-flex justify-content-between align-items-center'>
        Império Lata 350ml
        <span class='badge badge-primary badge-pill'>$imp_350</span>
        </li>
        <li class='list-group-item d-flex justify-content-between align-items-center'>
        Império Lata 269ml
        <span class='badge badge-primary badge-pill'>$imp_269</span>
        </li>
        <li class='list-group-item d-flex justify-content-between align-items-center'>
        Império Latão 473ml
        <span class='badge badge-primary badge-pill'>$imp_473</span>
        </li>
        <li class='list-group-item d-flex justify-content-between align-items-center'>
        Império Lager
        <span class='badge badge-primary badge-pill'>$imp_lager</span>
        </li>
        <li class='list-group-item d-flex justify-content-between align-items-center'>
        Império Gold
        <span class='badge badge-primary badge-pill'>$imp_gold</span>
        </li>
        <li class='list-group-item d-flex justify-content-between align-items-center'>
        Império 600ml
        <span class='badge badge-primary badge-pill'>$imp_600</span>
        </li>
        <li class='list-group-item d-flex justify-content-between align-items-center'>
        Império Romarinho
        <span class='badge badge-primary badge-pill'>$imp_romarinho</span>
        </li>
    </ul>
";
?>