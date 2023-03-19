<?php
include "../config.php";
session_start();
if (isset($_GET['type']) && $_GET['type'] == 0) {
    try {
        $sql = "SELECT * FROM `etnias`";
        $sentencia = $pdo->prepare($sql);
        $sentencia->execute();
        header("Content-type:application/json");
        $jsdata = json_decode(file_get_contents('php://input'), true);
        header("HTTP/1.1 200 OK");
        header('Content-Type: text/plain');
        $resultados = $sentencia->fetchAll(PDO::FETCH_OBJ);
        echo json_encode($resultados);
    } catch (Exception $e) {
        echo json_encode(array("statusCode" => 201));
    }
}
