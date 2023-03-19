<?php
include "../config.php";
session_start();
if (isset($_GET['type']) && $_GET['type'] == 0) {
    try {
        $sql = "SELECT * FROM `paciente`";
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
} else if (isset($_POST['type']) && $_POST['type'] == 1) {
    try {
        $sql = "INSERT INTO `paciente` (`id`, `apellido`, `nombre`, `tipo_doc`, `n_doc`, `etnia`, `nacionalidad`, `fecha_nacimiento`, `sexo`, `situcion_conyugal`, `analfabeta`, `educacion`, `mision`, `anos_aprobados`, `profesion`, `pais`, `entidad`, `municipio`, `ciudad`, `ocupacion`, `posee_ss`, `residencia`, `calle`, `num_casa`, `piso`, `codigo_postal`, `telefono_fijo`, `celular`, `correo`, `tipo_paciente`, `apellido_familia`, `es_jefe`) VALUES (NULL, '" . $_POST['apellido'] . "', '" . $_POST['nombre'] . "', '" . $_POST['doc'] . "', '" . $_POST['Tdoc'] . "', '" . $_POST['etnia'] . "', '" . $_POST['nacion'] . "', '" . $_POST['fecha'] . "', '" . $_POST['sexo'] . "', '" . $_POST['situacion'] . "', '" . $_POST['analfabeta'] . "', '" . $_POST['educacion'] . "', '" . $_POST['mision'] . "', '" . $_POST['anos'] . "', '" . $_POST['profesion'] . "', '" . $_POST['pais'] . "', '" . $_POST['entidad'] . "', '" . $_POST['municipio'] . "', '" . $_POST['ciudad'] . "', '" . $_POST['ocupacion'] . "', '0', '" . $_POST['entidad'] . "', '" . $_POST['calle'] . "', '" . $_POST['casa'] . "', '" . $_POST['piso'] . "', '" . $_POST['postal'] . "', '" . $_POST['telefono'] . "', '" . $_POST['celular'] . "', '" . $_POST['correo'] . "', '" . $_POST['tpaciente'] . "', '" . $_POST['apellidoF'] . "', '0')";
        // $sql += "VALUES (NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '')";
        $sentencia = $pdo->prepare($sql);
        $sentencia->execute();
        echo json_encode(array("statusCode" => 200));
    } catch (PDOException $e) {
        echo json_encode(array("statusCode" => $e->getMessage()));
    }
}
