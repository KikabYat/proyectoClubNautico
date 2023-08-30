<?php
    include('../connection.php');
    $con = connection();

    $id_salida = $_POST['id_salida'];
    $fechaSalida = $_POST['fechaSalida'];
    $horaSalida = $_POST['horaSalida'];
    $id_barco = $_POST['id_barco'];
    $id_socio = $_POST['id_socio'];
    $id_destino = $_POST['id_destino'];


    $insertar = "INSERT INTO tbl_salida (id_salida, fechaSalida, horaSalida, id_barco, id_socio, id_destino) VALUES ('$id_salida','$fechaSalida','$horaSalida','$id_barco','$id_socio','$id_destino')";
    $query = mysqli_query($con,$insertar);

    if($query){
        Header("Location: insertarFechas.php");
    }

?>