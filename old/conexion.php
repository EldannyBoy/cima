<?php

 $usuario='root';
 $password='';

try{

    $conn = new PDO('mysql:host=localhost;dbname=cima', $usuario, $password);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch(PDOException $e){

    echo "ERROR: " . $e->getMessage();

}

?>
