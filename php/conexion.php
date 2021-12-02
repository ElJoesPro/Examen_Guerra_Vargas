<?php
$servername = "localhost";
$username = "prueba";
$password = "c8u$7ShG";
$dbname = "db_mantenimiento";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Coneccion fallida " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE db_mantenimiento";
if($conn->query($sql)===TRUE){
    echo "Conectado correctamente a la Base de datos db_mantenimiento";
}else{
    echo "Error al crear la Base de datos ". $conn->error;
}
$conn->close();

$conn1 = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
try {
    $conn1 = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn1->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
    // sql to create table
    $sql1 = "CREATE TABLE VG_Mantenimiento (
    Fecha DATE,
    Nombre_taller VARCHAR(40) NOT NULL,
    Costos INT(4) NOT NULL,
    Kilometrage INT(4) NOT NULL,
    Tipo_mantenimiento VARCHAR(40) NOT NULL,
    Observaciones VARCHAR(300),
    Cambios VARCHAR(50)
    )";
  
    // use exec() because no results are returned
    $conn1->exec($sql1);
    echo "Tabla VG_Mantenimiento creada correctamente";
  } catch(PDOException $e) {
    echo $sql1 . "<br>" . $e->getMessage();
  }
  
  $conn1 = null;

?>