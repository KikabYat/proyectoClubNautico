<?php
    include('../connection.php');
    $con = connection();

    $id_salida = $_POST['id_salida'];
    $fechaSalida = $_POST['fechaSalida'];
    $horaSalida = $_POST['horaSalida'];
    $id_barco = $_POST['id_barco'];
    $id_socio = $_POST['id_socio'];
    $id_destino = $_POST['id_destino'];

    $actualizar = "UPDATE tbl_salida SET id_salida = '$id_salida', fechaSalida ='$fechaSalida', horaSalida = '$horaSalida', id_barco = '$id_barco', id_socio = '$id_socio', id_destino = '$id_destino' WHERE id_salida = '$id_salida'";
    $query = mysqli_query($con,$actualizar);

    if($query){
        Header("Location: insertarFechas.php");
    }
?>