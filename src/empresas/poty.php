<!doctype html>
<html lang="pt-br">
  <head>

    <title>Levantamento</title>
  </head>
<body class="bg-warning">

<form action='src/pedidos-emp/poty_pedido.php' method='POST'>
<div>

<a type='submit' href="?action=Lpoty" class="mt-2" ><h5><b>Levantamento</b></h5></a>

<div class='container mt-5 d-block  bg-danger mb-4' style='box-shadow: 1px 1px 10px black'>
    <div class='container'>
        <br />
        <span class='d-inline' style='font-size:24px;'><b class='text-white'>Poty</b></span>
        <br />
        <br />
        <span style='font-size:17px'><b class='text-white'>Poty Guaraná</b> <input class='ml-3' type="number" style='width: 40px; border-radius: 10px; border: 0; margin-top: 3px;' name="potygua" ></span>
        <br />
        <span style='font-size:17px'><b class='text-white'>Poty Uva</b> <input class='ml-3' type="number" style='width: 40px; border-radius: 10px; border: 0; margin-top: 3px;' name="potyuva" ></span>
        <br />
        <span style='font-size:17px'><b class='text-white'>Poty Larnaja</b> <input class='ml-3' type="number" style='width: 40px; border-radius: 10px; border: 0; margin-top: 3px;' name="potylar" ></span>
        <br />
        <span style='font-size:17px'><b class='text-white'>Poty Limão</b> <input class='ml-3' type="number" style='width: 40px; border-radius: 10px; border: 0; margin-top: 3px;' name="potylim" ></span>
        <br />
        <span style='font-size:17px'><b class='text-white'>Poty Citrus</b> <input class='ml-3' type="number" style='width: 40px; border-radius: 10px; border: 0; margin-top: 3px;' name="potycit" ></span>
        <br />
        <span style='font-size:17px'><b class='text-white'>Roller</b> <input class='ml-3' type="number" style='width: 40px; border-radius: 10px; border: 0; margin-top: 3px;' name="roller" ></span>
        <br />
        <br />
    </div>
</div>
</div>

    <div class='container mt-5 d-block w-50 mb-4'>
        <button type='submit' name='EnvPoty' class='btn-enviar' ><b>Enviar</b></button>
        <button type='reset' class='btn-apagar'><b>Limpar</b></button>
    </div>

</div>

</body>
</html>