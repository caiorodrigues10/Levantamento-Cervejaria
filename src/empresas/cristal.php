<!doctype html>
<html lang="pt-br">
  <head>

    <title>Levantamento</title>
  </head>
<body class="bg-warning">

<form action='src/pedidos-emp/cristal_pedido.php' method='POST'>
<div>

<a type='submit' href="?action=Lcristal" class="mt-2" ><h5><b>Levantamento</b></h5></a>

<div class='container mt-5 d-block bg-danger mb-4' style='box-shadow: 1px 1px 10px black'>
    <div class='container'>
        <br />
        <span class='d-inline' style='font-size:24px;'><b class='text-white'>Cristal</b></span>
        <br />
        <br />
        <span style='font-size:17px'><b class='text-white'>Cristal Lata</b> <input class='ml-3' type="number" style='width: 40px; border-radius: 10px; border: 0; margin-top: 3px;' name="crlata" ></span>
        <br />
        <span style='font-size:17px'><b class='text-white'>Cristal Latão</b> <input class='ml-3' type="number" style='width: 40px; border-radius: 10px; border: 0; margin-top: 3px;' name="crlatao" ></span>
        <br />
        <span style='font-size:17px'><b class='text-white'>Cristal 600ml</b> <input class='ml-3' type="number" style='width: 40px; border-radius: 10px; border: 0; margin-top: 3px;' name="cri600" ></span>
        <br />
        <span style='font-size:17px'><b class='text-white'>Cristal Litrão</b> <input class='ml-3' type="number" style='width: 40px; border-radius: 10px; border: 0; margin-top: 3px;' name="crilitrao" ></span>
        <br />
        <br />
    </div>
</div>

<div class='container mt-5 d-block bg-danger mb-4' style='box-shadow: 1px 1px 10px black'>
    <div class='container'>
        <br />
        <span class='d-inline' style='font-size:24px;'><b class='text-white'>Lokal</b></span>
        <br />
        <br />
        <span style='font-size:17px'><b class='text-white'>Lokal Lata</b> <input class='ml-3' type="number" style='width: 40px; border-radius: 10px; border: 0; margin-top: 3px;' name="lklata" ></span>
        <br />
        <span style='font-size:17px'><b class='text-white'>Lokal Latão</b> <input class='ml-3' type="number" style='width: 40px; border-radius: 10px; border: 0; margin-top: 3px;' name="lklatao" ></span>
        <br />
        <br />
    </div>
</div>

<div class='container mt-5 d-block bg-danger mb-4' style='box-shadow: 1px 1px 10px black'>
    <div class='container'>
        <br />
        <span class='d-inline' style='font-size:24px;'><b class='text-white'>Itaipava</b></span>
        <br />
        <br />
        <span style='font-size:17px'><b class='text-white'>Itaipava Lata</b> <input class='ml-3' type="number" style='width: 40px; border-radius: 10px; border: 0; margin-top: 3px;' name="italata" ></span>
        <br />
        <span style='font-size:17px'><b class='text-white'>Itaipava Zero</b> <input class='ml-3' type="number" style='width: 40px; border-radius: 10px; border: 0; margin-top: 3px;' name="itazero" ></span>
        <br />
        <br />
    </div>
</div>

<div class='container mt-5 d-block bg-danger mb-4' style='box-shadow: 1px 1px 10px black'>
    <div class='container'>
        <br />
        <span class='d-inline' style='font-size:24px;'><b class='text-white'>Petra</b></span>
        <br />
        <br />
        <span style='font-size:17px'><b class='text-white'>Petra Lata</b> <input class='ml-3' type="number" style='width: 40px; border-radius: 10px; border: 0; margin-top: 3px;' name="ptrlata" ></span>
        <br />
        <span style='font-size:17px'><b class='text-white'>Petra 600ml</b> <input class='ml-3' type="number" style='width: 40px; border-radius: 10px; border: 0; margin-top: 3px;' name="ptr600" ></span>
        <br />
        <br />
    </div>
</div>

<div class='container mt-5 d-block bg-danger mb-4' style='box-shadow: 1px 1px 10px black'>
    <div class='container'>
        <br />
        <span class='d-inline' style='font-size:24px;'><b class='text-white'>TNT</b></span>
        <br />
        <br />
        <span style='font-size:17px'><b class='text-white'>TNT Lata</b> <input class='ml-3' type="number" style='width: 40px; border-radius: 10px; border: 0; margin-top: 3px;' name="tntlata" ></span>
        <br />
        <span style='font-size:17px'><b class='text-white'>TNT Latão</b> <input class='ml-3' type="number" style='width: 40px; border-radius: 10px; border: 0; margin-top: 3px;' name="tntlatao" ></span>
        <br />
        <br />
    </div>
</div>


    <div class='container mt-5 d-block w-50 mb-4'>
        <button type='submit' name='EnvCristal' class='btn-enviar' ><b>Enviar</b></button>
        <button type='reset' class='btn-apagar'><b>Limpar</b></button>
    </div>

</div>

</body>
</html>