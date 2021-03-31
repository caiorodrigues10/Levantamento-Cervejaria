<!doctype html>
<html lang="pt-br">
  <head>

    <title>Levantamento</title>
  </head>
<body class="bg-warning">

<form action='src/pedidos-emp/coca_pedido.php' method='POST'>
<div>

<a type='submit' href="?action=Lcoca" class="mt-2" ><h5><b>Levantamento</b></h5></a>

<div class='container mt-5 d-block  bg-danger mb-4' style='box-shadow: 1px 1px 10px black'>
    <div class='container'>
        <br />
        <span class='d-inline' style='font-size:24px;'><b class='text-white'>Coca-Cola</b></span>
        <br />
        <br />
        <span style='font-size:17px'><b class='text-white'>Coca-Cola Retornável 2L</b> <input class='ml-3' type="number" style='width: 40px; border-radius: 10px; border: 0; margin-top: 3px;' name="ccr2l" ></span>
        <br />
        <span style='font-size:17px'><b class='text-white'>Coca-Cola Retornável 1L</b> <input class='ml-3' type="number" style='width: 40px; border-radius: 10px; border: 0; margin-top: 3px;' name="ccr1l" ></span>
        <br />
        <span style='font-size:17px'><b class='text-white'>Coca-Cola Pet 2L</b> <input class='ml-3' type="number" style='width: 40px; border-radius: 10px; border: 0; margin-top: 3px;' name="ccp2l" ></span>
        <br />
        <span style='font-size:17px'><b class='text-white'>Coca-Cola Lata</b> <input class='ml-3' type="number" style='width: 40px; border-radius: 10px; border: 0; margin-top: 3px;' name="cclata" ></span>
        <br />
        <br />
    </div>
</div>

<div class='container mt-5 d-block  bg-danger mb-4' style='box-shadow: 1px 1px 10px black'>
    <div class='container'>
        <br />
        <span class='d-inline' style='font-size:24px;'><b class='text-white'>Fanta</b></span>
        <br />
        <br />
        <span style='font-size:17px'><b class='text-white'>Fanta Laranja Retornável 2L</b> <input class='ml-3' type="number" style='width: 40px; border-radius: 10px; border: 0; margin-top: 3px;' name="fntLret2l" ></span>
        <br />
        <span style='font-size:17px'><b class='text-white'>Fanta Laranja Pet 2L</b> <input class='ml-3' type="number" style='width: 40px; border-radius: 10px; border: 0; margin-top: 3px;' name="fntLp2l" ></span>
        <br />
        <span style='font-size:17px'><b class='text-white'>Fanta Laranja Lata</b> <input class='ml-3' type="number" style='width: 40px; border-radius: 10px; border: 0; margin-top: 3px;' name="fntLlata" ></span>
        <br />
        <span style='font-size:17px'><b class='text-white'>Fanta uva Pet 2L</b> <input class='ml-3' type="number" style='width: 40px; border-radius: 10px; border: 0; margin-top: 3px;' name="fntUp2l" ></span>
        <br />
        <span style='font-size:17px'><b class='text-white'>Fanta Uva Lata</b> <input class='ml-3' type="number" style='width: 40px; border-radius: 10px; border: 0; margin-top: 3px;' name="fntUlata" ></span>
        <br />
        <br />
    </div>
</div>

<div class='container mt-5 d-block  bg-danger mb-4' style='box-shadow: 1px 1px 10px black'>
    <div class='container'>
        <br />
        <span class='d-inline' style='font-size:24px;'><b class='text-white'>Sprite</b></span>
        <br />
        <br />
        <span style='font-size:17px'><b class='text-white'>Sprite Pet 2L</b> <input class='ml-3' type="number" style='width: 40px; border-radius: 10px; border: 0; margin-top: 3px;' name="spP2l" ></span>
        <br />
        <span style='font-size:17px'><b class='text-white'>Sprite lata</b> <input class='ml-3' type="number" style='width: 40px; border-radius: 10px; border: 0; margin-top: 3px;' name="splata" ></span>
        <br />
        <br />
    </div>
</div>

<div class='container mt-5 d-block  bg-danger mb-4' style='box-shadow: 1px 1px 10px black'>
    <div class='container'>
        <br />
        <span class='d-inline' style='font-size:24px;'><b class='text-white'>Schweppes</b></span>
        <br />
        <br />
        <span style='font-size:17px'><b class='text-white'>Schweppes Pet 1,5L</b> <input class='ml-3' type="number" style='width: 40px; border-radius: 10px; border: 0; margin-top: 3px;' name="swP1l" ></span>
        <br />
        <span style='font-size:17px'><b class='text-white'>Schweppes lata</b> <input class='ml-3' type="number" style='width: 40px; border-radius: 10px; border: 0; margin-top: 3px;' name="swlata" ></span>
        <br />
        <br />
    </div>
</div>

    <div class='container mt-5 d-block w-50 mb-4'>
        <button type='submit' name='EnvCoca' class='btn-enviar' ><b>Enviar</b></button>
        <button type='reset' class='btn-apagar'><b>Limpar</b></button>
    </div>

</div>

</body>
</html>