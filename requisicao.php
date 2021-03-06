<?php
    $servername = "127.0.0.1:3306";
    $username = "estagio";
    $password = "estagio";
    $dbname = "estagio";
  
    try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $jsonData = file_get_contents("sensor.json");
    $json = json_decode($jsonData,true);
    
    $id_sensor = $json["id"];
    $datahora = $json["date"];
    $sensor = $json["prediction"];
    //Date for database
    $datahora_database = date ('Y-m-d H:i:s', strtotime($datahora));

    // sql to create table  
    $sql = "INSERT INTO Sensor (id_sensor,datahora,prediction) 
    VALUES ('$id_sensor','$datahora_database','$sensor')";

    // use exec() because no results are returned
    $conn->exec($sql);
    echo "Table Sensor updated successfully";
    } catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
    }
    $conn = null;
?>