<?php
include "../config.php";
session_start();
if (isset($_GET['type']) && $_GET['type'] == 0) {
    try {
        $sql = "SELECT * FROM `tipo_antecentes`";
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
if (isset($_GET['type']) && $_GET['type'] == 1) {
    try {
        $sql = "SELECT tipo_antecentes.* FROM `antecedentes` INNER JOIN paciente ON paciente.id = antecedentes.id_paciente INNER JOIN tipo_antecentes ON tipo_antecentes.id = antecedentes.id_antecedente WHERE paciente.id = " . $_GET['id'] . ";";
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
if (isset($_POST['type']) && $_POST['type'] == 2) {
    try {
        $sql = "INSERT INTO `antecedentes` (`id`, `id_paciente`, `id_antecedente`) VALUES (NULL, " . $_POST['id'] . ", '" . $_POST['antecedente'] . "')";
        $sentencia = $pdo->prepare($sql);
        $sentencia->execute();
        echo json_encode(array("statusCode" => 200));
    } catch (PDOException $e) {
        echo json_encode(array("statusCode" => $e->getMessage()));
    }
}
