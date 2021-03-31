<!doctype html>
<html lang="pt-br">
  <head>

    <title>Levantamento</title>
  </head>
<body class="bg-warning">

<form action='src/pedidos-emp/ferrari_pedido.php' method='POST'>
<div>

<a type='submit' href="?action=Lferrari" class="mt-2" ><h5><b>Levantamento</b></h5></a>

<div class='container mt-5 d-block bg-danger mb-4' style='box-shadow: 1px 1px 10px black'>
    <div class='container'>
        <br />
        <span class='d-inline' style='font-size:24px;'><b class='text-white'>Refrigerantes Ferrari</b></span>
        <br />
        <br />
        <span style='font-size:17px'><b class='text-white'>Ferrari</b> <input class='ml-3' type="number" style='width: 40px; border-radius: 10px; border: 0; margin-top: 3px;' name="ferrari" ></span>
        <br />
        <span style='font-size:17px'><b class='text-white'>Pic-nic Guaraná</b> <input class='ml-3' type="number" style='width: 40px; border-radius: 10px; border: 0; margin-top: 3px;' name="picguarana" ></span>
        <br />
        <span style='font-size:17px'><b class='text-white'>Pic-nic Cola</b> <input class='ml-3' type="number" style='width: 40px; border-radius: 10px; border: 0; margin-top: 3px;' name="piccola" ></span>
        <br />
        <span style='font-size:17px'><b class='text-white'>Pic-nic Uva</b> <input class='ml-3' type="number" style='width: 40px; border-radius: 10px; border: 0; margin-top: 3px;' name="picuva" ></span>
        <br />
        <span style='font-size:17px'><b class='text-white'>Pic-nic Laranja</b> <input class='ml-3' type="number" style='width: 40px; border-radius: 10px; border: 0; margin-top: 3px;' name="piclaranja" ></span>
        <br />
        <span style='font-size:17px'><b class='text-white'>Pic-nic Limão</b> <input class='ml-3' type="number" style='width: 40px; border-radius: 10px; border: 0; margin-top: 3px;' name="piclimao" ></span>
        <br />
        <br />
    </div>
</div>
</div>

    <div class='container mt-5 d-block w-50 mb-4'>
        <button type='submit' name='EnvFerrari' class='btn-enviar' ><b>Enviar</b></button>
        <button type='reset' class='btn-apagar'><b>Limpar</b></button>
    </div>

</div>

</body>
</html>