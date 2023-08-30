<?php
    include('../connection.php');
    $con = connection();

    $carne = $_POST['carne'];
    $primerNombre = $_POST['primerNombre'];
    $segundoNombre = $_POST['segundoNombre'];
    $primerApellido = $_POST['primerApellido'];
    $segundoApellido = $_POST['segundoApellido'];
    $cantidadBarcos = $_POST['cantidadBarcos'];


    $insertar = "INSERT INTO tbl_socio (carne, primerNombre, segundoNombre, primerApellido, segundoApellido, cantidadBarcos) VALUES ('$carne','$primerNombre','$segundoNombre','$primerApellido','$segundoApellido','$cantidadBarcos')";
    $query = mysqli_query($con,$insertar);

    if($query){
        Header("Location: insertarClientes.php");
    }

?>