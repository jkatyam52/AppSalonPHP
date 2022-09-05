<?php

function obtenerServicios(){
    try{
        //Importar una conexion
        require 'database.php';
        
        var_dump($db);

        //Escribir el codigo SQL
        $sql = "SELECT * FROM servicios";

        $consulta = mysqli_query($db, $sql);

        //Obtener los resultados
        echo "<pre>";
        var_dump(mysqli_fetch_assoc($consulta));
        echo "</pre>";

    }catch(Throwable $th){
        //Throw $th
        var_dump($th);
    }
}

obtenerServicios();