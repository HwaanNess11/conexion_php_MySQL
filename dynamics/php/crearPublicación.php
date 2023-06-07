<?php
    $include = include("./config.php");
    $con = connect();

    if($include && $con){
        // $descripcion = (isset()) ---> ternario

        $ID_USUARIO = 1;
        $descripcion = "lol";
        $fecha = "21-07-22";
        $hora = "8:00";
        $corazones = 51;
        $n_comen = 231;
        $n_retuits = 500;

        // $peticion = "INSERT INTO publicacion VALUES (0, $ID_USUARIO, '$descripcion', '$fecha', '$hora', $corazones, $n_comen , $n_retuits)";
        // $query = mysqli_query($con, $peticion);

        $sql = "SELECT * FROM publicacion";
        $query = mysqli_query($con, $sql);
       
        // var_dump($query); 

        // $datos = mysqli_fetch_array($query); //con localidades numéricas y asociativas
        // $datos = mysqli_fetch_assoc($query); //con localidades asociativas (columnas)
        // var_dump($datos);

        // echo "<br><br><br>";

        $datos = mysqli_fetch_assoc($query); //con localidades asociativas (columnas)
        // var_dump($datos);


        // while($row = mysqli_fetch_assoc($query)){
        //     var_dump($row["descripcion"]);
        //     echo "<br><br>";
        // }

        // var_dump($datos["descripcion"]);
        // echo "<br><br>";
        // var_dump($datos["fecha"]);
        // echo "<br><br>";
        // var_dump($datos["hora"]);
        // echo "<br><br>";
        // var_dump($datos["corazones"]);
        // echo "<br><br>";
        // var_dump($datos["n_comentarios"]);
        // echo "<br><br>";
        // var_dump($datos["n_retuits"]);

        foreach ($datos as $d) {
            echo $d."<br>";
        }

    }
?>