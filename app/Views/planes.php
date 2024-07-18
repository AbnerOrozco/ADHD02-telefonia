<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vistas planes</title>
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
        <h1>Planes</h1>
        <table class="table table-border table-striped">
            <thead>
                <tr>
                    <th>Id plan</th>
                    <th>Nombre</th>
                    <th>Pagos mensuales</th>
                    <th>Cantidad de minutos</th>
                    <th>Cantidad mensajes</th>
              
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach($datos as $Planes):
                ?>
                <tr>
                    <td> <?php echo $Planes['plan_id']  ?> </td>
                    <td> <?php echo $Planes['nombre']      ?> </td>
                    <td> <?php echo $Planes['pago_mensual'] ?> </td>
                    <td> <?php echo $Planes['cantidad_minutos'] ?> </td>
                    <td> <?php echo $Planes['cantidad_mensajes'] ?> </td>


                </tr>
                    <?php
                    endforeach;
                    ?>
            </tbody>
        </table>


    </div>
