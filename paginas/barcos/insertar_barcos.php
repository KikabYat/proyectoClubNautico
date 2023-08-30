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


    $insertar = "INSERT INTO tbl_barco (numeroMatricula, nombreBarco, modelo, numeroAmarre, cuota, carnePropietario, id_destino) VALUES ('$numeroMatricula','$nombreBarco','$modelo','$numeroAmarre','$cuota','$carnePropietario','$id_destino')";
    $query = mysqli_query($con,$insertar);

    if($query){
        Header("Location: insertarBarcos.php");
    }

?>