<?php
include "./config.php";
try {
    $sql = "SELECT * FROM `paciente`";
    $sentencia = $pdo->prepare($sql);
    $sentencia->execute();
    $jsdata = json_decode(file_get_contents('php://input'), true);
    $resultados = $sentencia->fetchAll(PDO::FETCH_OBJ);
    // echo json_encode($resultados);
} catch (Exception $e) {
}
