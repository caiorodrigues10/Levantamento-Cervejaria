<html>
<head>

</head>
<body>
<?php 

    $con = "SELECT * FROM coca";

    $a = mysqli_query($link, $con);

    while ($t = mysqli_fetch_array($a)) {
        $coca_ret2l = $t["coca_ret2l"];
        $coca_ret1l = $t["coca_ret1l"];
        $coca_pet2l = $t["coca_pet2l"];
        $coca_lata = $t["coca_lata"];

        $fanta_lret2l = $t["fanta_lret2l"];
        $fanta_lpet2l = $t["fanta_lpet2l"];
        $fanta_llata = $t["fanta_llata"];
        $fanta_upet2l = $t["fanta_upet2l"];
        $fanta_ulata = $t["fanta_ulata"];

        $sprite_pet2l = $t["sprite_pet2l"];
        $sprite_lata = $t["sprite_lata"];

        $schweppes_pet1l = $t["schweppes_pet1l"];
        $schweppes_lata = $t["schweppes_lata"];

        $data = $t["data"];

    }

echo "
<a type='submit' href='?action=coca' class='mt-2' ><h5 class='text-dark'><b>Voltar</b></h5></a>
<h2 class='text-center mt-4 '>Levantamento Coca-Cola, data do levantamento: $data</h2>

<div class='d-flex  flex-row bd-highlight mb-3'>
    <ul class='mt-5 list-group w-25 d-flex mr-4'>
        <li class='list-group-item d-flex justify-content-between align-items-center'>
        Coca-Cola Retornável 2L
        <span class='badge badge-primary badge-pill'>$coca_ret2l</span>
        </li>
        <li class='list-group-item d-flex justify-content-between align-items-center'>
        Coca-Cola Retornável 1L 
        <span class='badge badge-primary badge-pill'>$coca_ret1l</span>
        </li>
        <li class='list-group-item d-flex justify-content-between align-items-center'>
        Coca-Cola Pet 2L 
        <span class='badge badge-primary badge-pill'>$coca_pet2l</span>
        </li>
        <li class='list-group-item d-flex justify-content-between align-items-center'>
        Coca-Cola Lata
        <span class='badge badge-primary badge-pill'>$coca_lata</span>
        </li>
        <li class='list-group-item d-flex bg-primary justify-content-between align-items-center'>
        </li>
        <li class='list-group-item d-flex justify-content-between align-items-center'>
        Fanta Laranja Retornável 2L 
        <span class='badge badge-primary badge-pill'>$fanta_lret2l</span>
        </li>
        <li class='list-group-item d-flex justify-content-between align-items-center'>
        Fanta Laranja Pet 2L 
        <span class='badge badge-primary badge-pill'>$fanta_lpet2l</span>
        </li>
        <li class='list-group-item d-flex justify-content-between align-items-center'>
        Fanta Laranja Lata 
        <span class='badge badge-primary badge-pill'>$fanta_llata</span>
        </li>
        <li class='list-group-item d-flex justify-content-between align-items-center'>
        Fanta Uva Pet 2L 
        <span class='badge badge-primary badge-pill'>$fanta_upet2l</span>
        </li>
        <li class='list-group-item d-flex justify-content-between align-items-center'>
        Fanta Uva Lata 
        <span class='badge badge-primary badge-pill'>$fanta_ulata</span>
        </li>
        <li class='list-group-item d-flex bg-primary justify-content-between align-items-center'>
        </li>
    </ul>

    <ul class='mt-5 list-group w-25 d-flex mr-4'>
        <li class='list-group-item d-flex justify-content-between align-items-center'>
        Sprite Pet 2L
        <span class='badge badge-primary badge-pill'>$sprite_pet2l</span>
        </li>
        <li class='list-group-item d-flex justify-content-between align-items-center'>
        Sprite Lata 
        <span class='badge badge-primary badge-pill'>$sprite_lata</span>
        </li>
        <li class='list-group-item d-flex bg-primary justify-content-between align-items-center'>
        </li>
        <li class='list-group-item d-flex justify-content-between align-items-center'>
        Schweppes Pet 1,5L 
        <span class='badge badge-primary badge-pill'>$schweppes_pet1l</span>
        </li>
        <li class='list-group-item d-flex justify-content-between align-items-center'>
        Schweppes lata 
        <span class='badge badge-primary badge-pill'>$schweppes_lata</span>
        </li>
    </ul>
</div>
";
?>