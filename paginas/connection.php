<?php
    function connection(){
        $host = "localhost:8111";
        $user = "root";
        $pass = "";

        $db = "clubnautico";

        $connect = mysqli_connect($host,$user,$pass);


        mysqli_select_db($connect,$db);

        return $connect;
    }
?>