<!doctype html>
<html lang="pt-br">
  <head>

    <title>Levantamento</title>
  </head>
<body class="bg-warning">

<form action='src/pedidos-emp/imperio_pedido.php' method='POST'>
<div>

<a type='submit' href="?action=Limperio" class="mt-2" ><h5><b>Levantamento</b></h5></a>

<div class='container mt-5 d-block bg-danger mb-4' style='box-shadow: 1px 1px 10px black'>
    <div class='container'>
        <br />
        <span class='d-inline' style='font-size:24px;'><b class='text-white'>Império Variantes</b></span>
        <br />
        <br />
        <span style='font-size:17px'><b class='text-white'>Império Lata 350ml</b> <input class='ml-3' type="number" style='width: 40px; border-radius: 10px; border: 0; margin-top: 3px;' name="imp350" ></span>
        <br />
        <span style='font-size:17px'><b class='text-white'>Império Lata 269ml</b> <input class='ml-3' type="number" style='width: 40px; border-radius: 10px; border: 0; margin-top: 3px;' name="imp269" ></span>
        <br />
        <span style='font-size:17px'><b class='text-white'>Império Latão 473ml</b> <input class='ml-3' type="number" style='width: 40px; border-radius: 10px; border: 0; margin-top: 3px;' name="imp473" ></span>
        <br />
        <span style='font-size:17px'><b class='text-white'>Império Lager</b> <input class='ml-3' type="number" style='width: 40px; border-radius: 10px; border: 0; margin-top: 3px;' name="implager" ></span>
        <br />
        <span style='font-size:17px'><b class='text-white'>Império Gold</b> <input class='ml-3' type="number" style='width: 40px; border-radius: 10px; border: 0; margin-top: 3px;' name="impgold" ></span>
        <br />
        <span style='font-size:17px'><b class='text-white'>Império 600ml</b> <input class='ml-3' type="number" style='width: 40px; border-radius: 10px; border: 0; margin-top: 3px;' name="imp600" ></span>
        <br />
        <span style='font-size:17px'><b class='text-white'>Império Romarinho</b> <input class='ml-3' type="number" style='width: 40px; border-radius: 10px; border: 0; margin-top: 3px;' name="impromarinho" ></span>
        <br />
        <br />
    </div>
</div>

    <div class='container mt-5 d-block w-50 mb-4'>
        <button type='submit' name='EnvImperio' class='btn-enviar' ><b>Enviar</b></button>
        <button type='reset' class='btn-apagar'><b>Limpar</b></button>
    </div>

</div>

</body>
</html>