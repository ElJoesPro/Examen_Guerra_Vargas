<?php
$servername = "localhost";
$username = "prueba";
$password = "c8u$7ShG";
$dbname = "db_mantenimiento";

$fecha = $_POST['date'];
$nombre_taller = $_POST['nombre_taller'];
$costo = $_POST['costo'];
$klm = $_POST['klm'];
$man_preventivo = $_POST['man_preventivo'];
$man_correctivo = $_POST['man_correctivo'];
$observaciones = $_POST['observaciones'];

$opciones_mant_pren = $_POST["man_preventivo"];
    if($opciones_mant == "Preventivo")
    {
    //echo("You chose the first button. Good choice. :D");
    $tipo = 'Preventivo'
    }

    $opciones_mant_corr = $_POST["man_correctivo"]; 
    if($opciones_mant_corr == "Correctivo")
    {
    //echo("You chose the first button. Good choice. :D");
    $tipo = 'Correctivo'
    }

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO VG_Mantenimiento (Fecha, Nombre_taller, Costos, Kilometrage, Tipo_mantenimiento, Observaciones, Cambios)
    VALUES ('$fecha', '$nombre_taller', '$costo','$klm','$man_preventivo ','$man_correctivo','$observaciones','$aceite','$frenos','$llantas','')";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "New record created successfully";
  } catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
  }
  
  $conn = null;
  ?>