<?php
    include('../connection.php');
    $con = connection();

    $id_salida = $_GET['id_salida'];



    $eliminar = "DELETE from tbl_salida WHERE id_salida = '$id_salida'";
    $query = mysqli_query($con,$eliminar);

    if($query){
        Header("Location: insertarFechas.php");
    }
?>