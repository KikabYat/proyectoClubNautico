<?php
    include('../connection.php');
    $con = connection();

    $id_salida = $_GET['id_salida'];

    $consultar = "select * from tbl_salida where id_salida = '$id_salida'";
    $query = mysqli_query($con, $consultar);
    $row = mysqli_fetch_array($query);

    include("../../paginas/plantillas/header.php");
?>


<div>
        <form action="actualizar_fechas.php" method="POST">
            <h1>Actualizar Fecha</h1>
            <input type="text"  class="form-control" name="id_salida" placeholder="ID de salida" value="<?= $row['id_salida'] ?>">     
            <input type="text"  class="form-control" name="fechaSalida" placeholder="Fecha de salida" value="<?= $row['fechaSalida'] ?>">     
            <input type="text"  class="form-control" name="horaSalida" placeholder="Hora de salida" value="<?= $row['horaSalida'] ?>">     
            <input type="text"  class="form-control" name="id_barco" placeholder="ID de barco" value="<?= $row['id_barco'] ?>">     
            <input type="text"  class="form-control" name="id_socio" placeholder="ID de socio" value="<?= $row['id_socio'] ?>">     
            <input type="text"  class="form-control" name="id_destino" placeholder="ID de destino" value="<?= $row['id_destino'] ?>">     
        
            <input type="submit" value="Actualizar Fecha" class="btn btn-success">
        </form>
</div>