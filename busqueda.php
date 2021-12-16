<?php
include('conexion.php');
// echo "ttttttetas";
$database = new ConectarBD();
$db = $database->open();
$persona = array();
$ValorBuscar="115670466";
//echo $ValorBuscar;
//f(isset($_POST['BuscarPersona'])){
   
   // $ValorBuscar = $_POST['Cedula'];
    $sql ="SELECT * FROM persona WHERE psrCedula='$ValorBuscar'";
    
try {
    //code...
   
    foreach ($db->query($sql) as $row) { 
        $persona=$row;
    }
    echo $persona['psrID'].' ';
    
var_dump($persona);

} catch (PDOException $e) {
    echo 'Hay un problema con la conexion ' . $e->getmessage();
}
//}
?>