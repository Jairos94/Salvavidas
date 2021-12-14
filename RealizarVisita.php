<?php 
session_start();
include_once('conexion.php');
if(isset($_POST['Guardar'])){
    $database = new ConectarBD();
    $db = $database->open();
    try {
        //code...


        $database->close();
    } catch (\Throwable $th) {
        //throw $th;


        $database->close();
    }

    
}


?>