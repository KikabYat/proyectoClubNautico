<?php
    include('../connection.php');
    $con = connection();

    $carne = $_POST['carne'];
    $primerNombre = $_POST['primerNombre'];
    $segundoNombre = $_POST['segundoNombre'];
    $primerApellido = $_POST['primerApellido'];
    $segundoApellido = $_POST['segundoApellido'];
    $cantidadBarcos = $_POST['cantidadBarcos'];

    $actualizar = "UPDATE tbl_socio SET carne = '$carne', primerNombre ='$primerNombre', segundoNombre = '$segundoNombre', primerApellido = '$primerApellido', segundoApellido = '$segundoApellido', cantidadBarcos = '$cantidadBarcos' WHERE carne = '$carne'";
    $query = mysqli_query($con,$actualizar);

    if($query){
        Header("Location: insertarClientes.php");
    }
?>