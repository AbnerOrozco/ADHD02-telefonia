<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vistas Clientes</title>
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
                                    <h1>Clientes</h1>
                                    <table class="table table-border table-striped">
                                        <thead>
                                            <tr>
                                                <th>cliente id</th>
                                                <th>Apellido</th>
                                                <th>Nombre</th>
                                                <th>Correoelectronico</th>
                                                <th>Calle y avenida</th>
                                                <th>Numero de casa</th>
                                                <th>zona</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                foreach($datos as $Clientes):
                                            ?>
                                            <tr>
                                                <td> <?php echo $Clientes['cliente_id']  ?> </td>
                                                <td> <?php echo $Clientes['apellido']      ?> </td>
                                                <td> <?php echo $Clientes['nombre'] ?> </td>
                                                <td> <?php echo $Clientes['correo_electronico'] ?> </td>
                                                <td> <?php echo $Clientes['no_casa'] ?> </td>
                                                <td> <?php echo $Clientes['zona'] ?> </td>

                                            </tr>
                                                <?php
                                                endforeach;
                                                ?>
                                        </tbody>
                                    </table>


                                </div>
 
 
 </div>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.6/umd/popper.min.js" integrity="sha384-oBqDVmMz4fnFO9gybGPFf1rBJZB6a9bEzPWiQVX92D4wuGq2z6EEnykOhc4VGvck" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9EY6PfSU09F8t1w3nM5v8yD8vbmhDoM6Pysu3DJyKq48lLPV9BbsH44" crossorigin="anonymous"></script>

 
 </body>