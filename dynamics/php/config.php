<?php
    const DBHOST = "localhost";
    const DBUSER = "root";
    const PASSWR = "";
    const DB = "tuiter";

    function connect(){
        $conexion = mysqli_connect(DBHOST, DBUSER, PASSWR, DB);
        return $conexion;
    }

    // var_dump($conexion);
    // var_dump(connect());

?>