<?php
include "../config.php";
try {
    $idPaciente = $_GET['id'];
    $sql = "SELECT * FROM `historia` WHERE `id_paciente` = $idPaciente ORDER BY `historia`.`fecha` DESC";
    $sentencia = $pdo->prepare($sql);
    $sentencia->execute();
    $jsdata = json_decode(file_get_contents('php://input'), true);
    $resultados = $sentencia->fetchAll(PDO::FETCH_OBJ);
    echo json_encode($resultados);
} catch (Exception $e) {
}
