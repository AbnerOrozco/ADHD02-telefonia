<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vistas Lineas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>

<nav class="navbar navbar-expand-lg bg-body-tertiary bg-primary" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Menu</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="http://localhost/fs2024/ci4_telefonia/public/ver_clientes">Clientes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/fs2024/ci4_telefonia/public/ver_Lineas">Lineas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/fs2024/ci4_telefonia/public/ver_planes">Planes</a>
        </li>
        <li class="nav-item">
          <!-- Este elemento puede ser removido o agregado contenido si es necesario -->
        </li>
      </ul>
    </div>
  </div>
</nav>

    <div class="container">
        <h1>Lineas Telefonicas</h1>
        <table class="table table-border table-striped">
            <thead>
                <tr>
                    <th>Numero de telefono</th>
                    <th>Fecha de pago</th>
                    <th>Meses de atraso</th>
                    <th>Plan id</th>
                    <th>Cliente id</th>
              
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach($datos as $LineasTelefonicas):
                ?>
                <tr>
                    <td> <?php echo $LineasTelefonicas['no_telefono']  ?> </td>
                    <td> <?php echo $LineasTelefonicas['fecha_pago']      ?> </td>
                    <td> <?php echo $LineasTelefonicas['meses_atraso'] ?> </td>
                    <td> <?php echo $LineasTelefonicas['plan_id'] ?> </td>
                    <td> <?php echo $LineasTelefonicas['cliente_id'] ?> </td>


                </tr>
                    <?php
                    endforeach;
                    ?>
            </tbody>
        </table>


    </div>
