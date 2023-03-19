<?php
include "../config.php";
if ($_POST['type'] == 1) {
    $usuario = $_POST['email'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM usuarios WHERE nombre LIKE :usuario";
    $sentencia = $pdo->prepare($sql);
    $sentencia->bindParam(":usuario", $usuario, PDO::PARAM_INT);
    $sentencia->execute();
    $resultados = $sentencia->fetchAll(PDO::FETCH_OBJ);
    $count = $sentencia->rowCount();
    session_start();
    if ($count) {
        foreach ($resultados as $result) {
            $rpass = $result->contrasena;
            if (password_verify($password, $rpass)) {
                $_SESSION["id"] = $result->id;
                $_SESSION["name"] = $result->nombre;
                $_SESSION["rol"] = $result->rol;
                echo json_encode(array("statusCode" => 200));
            } else {
                echo json_encode(array("statusCode" => 201));
            }
        }
    } else {
        echo json_encode(array("statusCode" => 201));
    }
}
