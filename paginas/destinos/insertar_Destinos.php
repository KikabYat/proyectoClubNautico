<?php
    include('../connection.php');
    $con = connection();

    $id_destino = $_POST['id_destino'];
    $nombreDestino = $_POST['nombreDestino'];
   

    $insertar = "INSERT INTO tbl_destino (id_destino,nombreDestino) VALUES ('$id_destino','$nombreDestino')";
    $query = mysqli_query($con,$insertar);

    if($query){
        Header("Location: insertarDestinos.php");
    }

?>