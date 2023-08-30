<?php
    include('../connection.php');
    $con = connection();

    $carne = $_GET['carne'];



    $eliminar = "DELETE from tbl_socio WHERE carne = '$carne'";
    $query = mysqli_query($con,$eliminar);

    if($query){
        Header("Location: insertarClientes.php");
    }
?>