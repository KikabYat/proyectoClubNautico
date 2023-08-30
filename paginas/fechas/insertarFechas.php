<?php
    include('../connection.php');
    $con = connection();
    
    $consultar = "select * from tbl_salida";
    
    $query = mysqli_query($con,$consultar);
    
    
    include("../../paginas/plantillas/header.php");

    
?>


<h1 class='text-center'>AGREGAR SALIDA</h1>
    <form action="insertar_fechas.php" method="POST" class="d-flex justify-content-evenly grid gap-0 column-gap-3">
        <input type="text"  class="form-control" name="id_salida" placeholder="ID de salida" class="d-inline" required>
        <input type="text"  class="form-control" name="fechaSalida" placeholder="Fecha de salida" class="d-inline" require>
        <input type="text"  class="form-control" name="horaSalida" placeholder="Hora de salida" class="d-inline">
        <input type="text"  class="form-control" name="id_barco" placeholder="ID de barco" class="d-inline" required>
        <input type="text"  class="form-control" name="id_socio" placeholder="ID de socio" class="d-inline" required>
        <input type="text"  class="form-control" name="id_destino" placeholder="ID de destino" class="d-inline" required>
        <input type="submit" value="Agregar Salida" class="btn btn-warning">
    </form>
        <div class="table-responsive container text-center">
            <h2>SALIDAS REGISTRADAS</h2>
            <table class="table table-dark">
                <thead>
                    <th class="table-active fw-normal">ID de salida</th>
                    <th class="table-active fw-normal">Fecha de salida</th>
                    <th class="table-active fw-normal">Hora de salida</th>
                    <th class="table-active fw-normal">ID de barco</th>
                    <th class="table-active fw-normal">ID de socio</th>
                    <th class="table-active fw-normal">ID de destino</th>
                    <th class="table-active fw-normal">Actualizar</th>
                    <th class="table-active fw-normal">Eliminar</th>
                </thead>
            

            <tbody>
                <?php while($row = mysqli_fetch_array($query)):?>
                    <tr>
                        <th class="fw-lighter"> <?= $row['id_salida'] ?> </th>
                        <th class="fw-lighter"> <?= $row['fechaSalida'] ?> </th>
                        <th class="fw-lighter"> <?= $row['horaSalida'] ?> </th>
                        <th class="fw-lighter"> <?= $row['id_barco'] ?> </th>
                        <th class="fw-lighter"> <?= $row['id_socio'] ?> </th>
                        <th class="fw-lighter"> <?= $row['id_destino'] ?> </th>

                        <th><a href="actualizarFechas.php?id_salida= <?= $row['id_salida'] ?>" class="text-decoration-none link-success link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover fs-5">Actualizar</a></th>
                        <th><a href="eliminarFecha.php?id_salida= <?= $row['id_salida'] ?>" class="link-danger link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover text-decoration-none fs-5">Eliminar</a></th>
                    </tr>
                <?php endwhile;?>

            </tbody>

            </table>
        </div>


<?php
    include("../../paginas/plantillas/footer.php");
?>
