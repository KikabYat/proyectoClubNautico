<?php
    include('../connection.php');
    $con = connection();
    
    $consultar = "select * from tbl_destino";
    
    $query = mysqli_query($con,$consultar);
    
    
    include("../../paginas/plantillas/header.php");

    
?>



<h1 class='text-center'>AGREGAR DESTINOS</h1>
    <form action="insertar_Destinos.php" method="POST" class="d-flex justify-content-evenly grid gap-0 column-gap-3">
        <input type="text"  class="form-control" name="id_destino" placeholder="Id de destino" class="d-inline" require>
        <input type="text"  class="form-control" name="nombreDestino" placeholder="Nombre del destino" class="d-inline" required>
        <input type="submit" value="Agregar Destino" class="btn btn-warning">
    </form>
        <div class="table-responsive container text-center">
            <h2>DESTINOS REGISTRADOS</h2>
            <table class="table table-dark">
                <thead>
                    <th class="table-active fw-normal">Id de Destino</th>
                    <th class="table-active fw-normal">Nombre de Destino</th>
                    <th class="table-active fw-normal">Actualizar</th>
                    <th class="table-active fw-normal">Eliminar</th>
                </thead>
            

            <tbody>
                <?php while($row = mysqli_fetch_array($query)):?>
                    <tr>
                        <th class="fw-lighter"> <?= $row['id_destino'] ?> </th>
                        <th class="fw-lighter"> <?= $row['nombreDestino'] ?> </th>
                        
                        <th><a href="actualizarDestinos.php?id_destino= <?= $row['id_destino'] ?>" class="text-decoration-none link-success link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover fs-5">Actualizar</a></th>
                        <th><a href="eliminarDestinos.php?id_destino= <?= $row['id_destino'] ?>" class="link-danger link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover text-decoration-none fs-5">Eliminar</a></th>
                    </tr>
                <?php endwhile;?>

            </tbody>

            </table>
        </div>


<?php
    include("../../paginas/plantillas/footer.php");
?>
