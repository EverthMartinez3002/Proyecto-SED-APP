<?php
require '../../../vendor/autoload.php';

//$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
//$dotenv->load();

//$host = $_ENV['DB_HOST'];
//$port = $_ENV['DB_PORT'];
//$dbname = $_ENV['DB_NAME'];
//$user = $_ENV['DB_USER'];
//$password = $_ENV['DB_PASSWORD'];

try {
    $conn = new PDO("pgsql:host=127.0.0.1;port=5433;dbname=proyecto_sed;user=postgres;password=root");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die('error de conexion' . $e->getMessage());
}
//jdbc:postgresql://127.0.0.1:5433/postgres