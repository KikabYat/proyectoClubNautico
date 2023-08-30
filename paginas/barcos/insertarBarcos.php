<?php
    include('../connection.php');
    $con = connection();
    
    $consultar = "select * from tbl_barco";
    
    $query = mysqli_query($con,$consultar);
    
    
    include("../../paginas/plantillas/header.php");

    
?>

<h1 class='text-center'>AGREGAR BARCO</h1>
    <form action="insertar_barcos.php" method="POST" class="d-flex justify-content-evenly grid gap-0 column-gap-3">
        <input type="text"  class="form-control" name="numeroMatricula" placeholder="No. de Matrícula" class="d-inline" require>
        <input type="text"  class="form-control" name="nombreBarco" placeholder="Nombre del barco" class="d-inline" required>
        <input type="text"  class="form-control" name="modelo" placeholder="Modelo del barco" class="d-inline">
        <input type="text"  class="form-control" name="numeroAmarre" placeholder="Numero de amarre" class="d-inline" required>
        <input type="text"  class="form-control" name="cuota" placeholder="Cuota del barco" class="d-inline">
        <input type="text"  class="form-control" name="carnePropietario" placeholder="Carné del propietario" class="d-inline" required>
        <input type="text"  class="form-control" name="id_destino" placeholder="ID de destino" class="d-inline" required>
        <input type="submit" value="Agregar Barco" class="btn btn-warning">
    </form>
        <div class="table-responsive container text-center">
            <h2>BARCOS REGISTRADOS</h2>
            <table class="table table-dark">
                <thead>
                    <th class="table-active fw-normal">Numero Matrícula</th>
                    <th class="table-active fw-normal">Nombre del barco</th>
                    <th class="table-active fw-normal">Modelo</th>
                    <th class="table-active fw-normal">Numero del amarre</th>
                    <th class="table-active fw-normal">Cuota</th>
                    <th class="table-active fw-normal">Carné del propietario</th>
                    <th class="table-active fw-normal">ID de destino</th>
                    <th class="table-active fw-normal">Actualizar</th>
                    <th class="table-active fw-normal">Eliminar</th>
                </thead>
            

            <tbody>
                <?php while($row = mysqli_fetch_array($query)):?>
                    <tr>
                        <th class="fw-lighter"> <?= $row['numeroMatricula'] ?> </th>
                        <th class="fw-lighter"> <?= $row['nombreBarco'] ?> </th>
                        <th class="fw-lighter"> <?= $row['modelo'] ?> </th>
                        <th class="fw-lighter"> <?= $row['numeroAmarre'] ?> </th>
                        <th class="fw-lighter"> <?= $row['cuota'] ?> </th>
                        <th class="fw-lighter"> <?= $row['carnePropietario'] ?> </th>
                        <th class="fw-lighter"> <?= $row['id_destino'] ?> </th>

                        <th><a href="actualizarBarcos.php?numeroMatricula= <?= $row['numeroMatricula'] ?>" class="text-decoration-none link-success link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover fs-5">Actualizar</a></th>
                        <th><a href="eliminarBarcos.php?numeroMatricula= <?= $row['numeroMatricula'] ?>" class="link-danger link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover text-decoration-none fs-5">Eliminar</a></th>
                    </tr>
                <?php endwhile;?>

            </tbody>

            </table>
        </div>


<?php
    include("../../paginas/plantillas/footer.php");
?>
