<?php
$db = "historias";
$host = "localhost";
$dsn = "mysql:dbname=" . $db . ";host=" . $host;
$user = "root";
$password = "";
$name = "Historias clinicas";
try {
	$pdo = new PDO($dsn, $user, $password);
	$sentencia = $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
	echo $e . ' <div class="mt-2 mx-4 alert alert-danger text-white">Error al conectar a la base de datos: ' . $db . '
	</div>';
}
