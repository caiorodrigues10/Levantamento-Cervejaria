<!doctype html>
<html lang="pt-br">
  <head>

    <title>Levantamento</title>
  </head>
<body class="bg-warning">

<form action='src/pedidos-emp/heineken_pedido.php' method='POST'>
<div>

<a type='submit' href="?action=Lheineken" class="mt-2" ><h5><b>Levantamento</b></h5></a>

<div class='container mt-5 d-block bg-danger mb-4' style='box-shadow: 1px 1px 10px black'>
    <div class='container'>
        <br />
        <span class='d-inline' style='font-size:24px;'><b class='text-white'>Heineken</b></span>
        <br />
        <br />
        <span style='font-size:17px'><b class='text-white'>Heineken Lata</b> <input class='ml-3' type="number" style='width: 40px; border-radius: 10px; border: 0; margin-top: 3px;' name="heilata" ></span>
        <br />
        <span style='font-size:17px'><b class='text-white'>Heineken Long neck</b> <input class='ml-3' type="number" style='width: 40px; border-radius: 10px; border: 0; margin-top: 3px;' name="heilong" ></span>
        <br />
        <span style='font-size:17px'><b class='text-white'>Heineken 600ml</b> <input class='ml-3' type="number" style='width: 40px; border-radius: 10px; border: 0; margin-top: 3px;' name="hei600" ></span>
        <br />
        <br />
    </div>
</div>

<div class='container mt-5 d-block bg-danger mb-4' style='box-shadow: 1px 1px 10px black'>
    <div class='container'>
        <br />
        <span class='d-inline' style='font-size:24px;'><b class='text-white'>Eisenbahn</b></span>
        <br />
        <br />
        <span style='font-size:17px'><b class='text-white'>Eisenbahn Pilsen</b> <input class='ml-3' type="number" style='width: 40px; border-radius: 10px; border: 0; margin-top: 3px;' name="eipilsen" ></span>
        <br />
        <span style='font-size:17px'><b class='text-white'>Eisenbahn Pale Ale</b> <input class='ml-3' type="number" style='width: 40px; border-radius: 10px; border: 0; margin-top: 3px;' name="eipale" ></span>
        <br />
        <span style='font-size:17px'><b class='text-white'>Eisenbahn Ipa</b> <input class='ml-3' type="number" style='width: 40px; border-radius: 10px; border: 0; margin-top: 3px;' name="eiipa" ></span>
        <br />
        <br />
    </div>
</div>
</div>


    <div class='container mt-5 d-block w-50 mb-4'>
        <button type='submit' name='EnvHeineken' class='btn-enviar' ><b>Enviar</b></button>
        <button type='reset' class='btn-apagar'><b>Limpar</b></button>
    </div>

</div>

</body>
</html>