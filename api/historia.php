<?php
include "../config.php";
session_start();
if (isset($_POST['type']) && $_POST['type'] == 1) {
    try {
        $sql = "INSERT INTO `historia` (`id`, `id_paciente`, `fecha`, `caso`) VALUES (NULL, " . $_POST['id'] . ", '" . $_POST['fecha'] . "', '" . $_POST['caso'] . "');";
        $sentencia = $pdo->prepare($sql);
        $sentencia->execute();
        echo json_encode(array("statusCode" => 200));
    } catch (PDOException $e) {
        echo json_encode(array("statusCode" => $e->getMessage()));
    }
}
