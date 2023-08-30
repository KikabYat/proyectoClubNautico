<?php
    include('../connection.php');
    $con = connection();

    $numeroMatricula = $_GET['numeroMatricula'];

    $consultar = "select * from tbl_barco where numeroMatricula = '$numeroMatricula'";
    $query = mysqli_query($con, $consultar);
    $row = mysqli_fetch_array($query);

    include("../../paginas/plantillas/header.php");
?>


<div>
        <form action="actualizar_barcos.php" class="" method="POST">
            <h1>Actualizar Barcos</h1>
            <input type="text" name="numeroMatricula" class="form-control" placeholder="No. de matrícula" value="<?= $row['numeroMatricula'] ?>">     
            <input type="text" name="nombreBarco" class="form-control" placeholder="Nombre del barco" value="<?= $row['nombreBarco'] ?>">     
            <input type="text" name="modelo" class="form-control" placeholder="Modelo" value="<?= $row['modelo'] ?>">     
            <input type="text" name="numeroAmarre" class="form-control" placeholder="Número del amarre" value="<?= $row['numeroAmarre'] ?>">     
            <input type="text" name="cuota" class="form-control" placeholder="Cuota" value="<?= $row['cuota'] ?>">     
            <input type="text" name="carnePropietario" class="form-control" placeholder="Carné del propietario" value="<?= $row['carnePropietario'] ?>">     
            <input type="text" name="id_destino" class="form-control" placeholder="ID de destino" value="<?= $row['id_destino'] ?>">     
        
            <input type="submit" value="Actualizar Barco" class="btn btn-success">
        </form>
</div>