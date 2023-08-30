<?php
    include('../connection.php');
    $con = connection();

    $carne = $_GET['carne'];

    $consultar = "select * from tbl_socio where carne = '$carne'";
    $query = mysqli_query($con, $consultar);
    $row = mysqli_fetch_array($query);

    include("../../paginas/plantillas/header.php");
?>


<div>
        <form action="actualizar_Clientes.php" method="POST">
            <h1>Actualizar Socio</h1>
            <input type="text"  class="form-control" name="carne" placeholder="No. de carne" value="<?= $row['carne'] ?>">     
            <input type="text"  class="form-control" name="primerNombre" placeholder="Primer Nombre" value="<?= $row['primerNombre'] ?>">     
            <input type="text"  class="form-control" name="segundoNombre" placeholder="Segundo Nombre" value="<?= $row['segundoNombre'] ?>">     
            <input type="text"  class="form-control" name="primerApellido" placeholder="Primer Apellido" value="<?= $row['primerApellido'] ?>">     
            <input type="text"  class="form-control" name="segundoApellido" placeholder="Segundo Apellido" value="<?= $row['segundoApellido'] ?>">     
            <input type="text"  class="form-control" name="cantidadBarcos" placeholder="Cantidad de barcos" value="<?= $row['cantidadBarcos'] ?>">     
        
            <input type="submit" value="Actualizar Socio" class="btn btn-success">
        </form>
</div>