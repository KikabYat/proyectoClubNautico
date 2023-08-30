<?php
    include('../connection.php');
    $con = connection();
    
    $consultar = "select * from tbl_socio";
    
    $query = mysqli_query($con,$consultar);
    
    
    include("../../paginas/plantillas/header.php");

    
?>

<h1 class='text-center'>AGREGAR SOCIO</h1>
    <form action="insertar_Clientes.php" method="POST" class="d-flex justify-content-evenly grid gap-0 column-gap-3">
        <input type="text"  class="form-control" name="carne" placeholder="Carné" class="d-inline" require>
        <input type="text"  class="form-control" name="primerNombre" placeholder="Primer Nombre" class="d-inline" required>
        <input type="text"  class="form-control" name="segundoNombre" placeholder="Segundo Nombre" class="d-inline">
        <input type="text"  class="form-control" name="primerApellido" placeholder="Primer Apellido" class="d-inline" required>
        <input type="text"  class="form-control" name="segundoApellido" placeholder="Segundo Apellido" class="d-inline">
        <input type="text"  class="form-control" name="cantidadBarcos" placeholder="Cantidad de barcos" class="d-inline" required>
        <input type="submit" value="Agregar Socio" class="btn btn-warning">
    </form>
        <div class="table-responsive container text-center">
            <h2>SOCIOS REGISTRADOS</h2>
            <table class="table table-dark">
                <thead>
                    <th class="table-active fw-normal">Carné</th>
                    <th class="table-active fw-normal">Primer nombre</th>
                    <th class="table-active fw-normal">Segundo nombre</th>
                    <th class="table-active fw-normal">Primer apellido</th>
                    <th class="table-active fw-normal">Segundo apellido</th>
                    <th class="table-active fw-normal">Cantidad de barcos</th>
                    <th class="table-active fw-normal">Actualizar</th>
                    <th class="table-active fw-normal">Eliminar</th>
                </thead>
            

            <tbody>
                <?php while($row = mysqli_fetch_array($query)):?>
                    <tr>
                        <th class="fw-lighter"> <?= $row['carne'] ?> </th>
                        <th class="fw-lighter"> <?= $row['primerNombre'] ?> </th>
                        <th class="fw-lighter"> <?= $row['segundoNombre'] ?> </th>
                        <th class="fw-lighter"> <?= $row['primerApellido'] ?> </th>
                        <th class="fw-lighter"> <?= $row['segundoApellido'] ?> </th>
                        <th class="fw-lighter"> <?= $row['cantidadBarcos'] ?> </th>

                        <th><a href="actualizarClientes.php?carne= <?= $row['carne'] ?>" class="text-decoration-none link-success link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover fs-5">Actualizar</a></th>
                        <th><a href="eliminarClientes.php?carne= <?= $row['carne'] ?>" class="link-danger link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover text-decoration-none fs-5">Eliminar</a></th>
                    </tr>
                <?php endwhile;?>

            </tbody>

            </table>
        </div>


<?php
    include("../../paginas/plantillas/footer.php");
?>
