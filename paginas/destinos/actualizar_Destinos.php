<?php
    include('../connection.php');
    $con = connection();

    $id_destino = $_POST['id_destino'];
    $nombreDestino = $_POST['nombreDestino'];

    $actualizar = "UPDATE tbl_destino SET id_destino = '$id_destino', nombreDestino ='$nombreDestino' WHERE id_destino = '$id_destino'";
    $query = mysqli_query($con,$actualizar);

    if($query){
        Header("Location: insertarDestinos.php");
    }
?>