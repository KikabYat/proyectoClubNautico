<?php
    include('../connection.php');
    $con = connection();

    $numeroMatricula = $_GET['numeroMatricula'];



    $eliminar = "DELETE from tbl_barco WHERE numeroMatricula = '$numeroMatricula'";
    $query = mysqli_query($con,$eliminar);

    if($query){
        Header("Location: insertarBarcos.php");
    }
?>