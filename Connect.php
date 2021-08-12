<?php

class Connect{
    public function init(){
        $servername = "localhost";
        $username   = "prueba";
        $password   = "prueba";
        $dbname     = "proyecto";


        try {

            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Conexion Exitosa";

            return $conn;
        } catch(PDOException $e) {
            echo "Conexion Fallida: " . $e->getMessage();
        }
    }
}