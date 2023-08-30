<?php
    include('../connection.php');
    $con = connection();

    $id_destino = $_GET['id_destino'];



    $eliminar = "DELETE from tbl_destino WHERE id_destino = '$id_destino'";
    $query = mysqli_query($con,$eliminar);

    if($query){
        Header("Location: insertarDestinos.php");
    }
?>