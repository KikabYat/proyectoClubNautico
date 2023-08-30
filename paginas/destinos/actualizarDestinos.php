<?php
    include('../connection.php');
    $con = connection();

    $id_destino = $_GET['id_destino'];

    $consultar = "select * from tbl_destino where id_destino = '$id_destino'";
    $query = mysqli_query($con, $consultar);
    $row = mysqli_fetch_array($query);

    include("../../paginas/plantillas/header.php");
?>


<div>
        <form action="actualizar_Destinos.php" method="POST">
            <h1>Actualizar Destino</h1>
            <input type="text"  class="form-control" name="id_destino" placeholder="Id del destino" value="<?= $row['id_destino'] ?>">     
            <input type="text"  class="form-control" name="nombreDestino" placeholder="Nombre del destino" value="<?= $row['nombreDestino'] ?>">           
        
            <input type="submit" value="Actualizar Destino" class="btn btn-success">
        </form>
</div>