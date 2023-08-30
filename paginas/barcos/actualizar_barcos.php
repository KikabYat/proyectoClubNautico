<?php
    include('../connection.php');
    $con = connection();

    $numeroMatricula = $_POST['numeroMatricula'];
    $nombreBarco = $_POST['nombreBarco'];
    $modelo = $_POST['modelo'];
    $numeroAmarre = $_POST['numeroAmarre'];
    $cuota = $_POST['cuota'];
    $carnePropietario = $_POST['carnePropietario'];
    $id_destino = $_POST['id_destino'];

    $actualizar = "UPDATE tbl_barco SET numeroMatricula = '$numeroMatricula', nombreBarco ='$nombreBarco', modelo = '$modelo', numeroAmarre = '$numeroAmarre', cuota = '$cuota', carnePropietario = '$carnePropietario', id_destino = '$id_destino' WHERE numeroMatricula = '$numeroMatricula'";
    $query = mysqli_query($con,$actualizar);

    if($query){
        Header("Location: insertarBarcos.php");
    }
?>