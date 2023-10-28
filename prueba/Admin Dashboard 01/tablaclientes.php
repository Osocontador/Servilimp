<?php
// Conexión a la base de datos
include(__DIR__ ."/conectar.php");
// Consulta SQL para obtener datos de usuarios
$sql = "SELECT * FROM tcliente";
$result = $conex->query($sql);

// Crear un array para almacenar los datos de los usuarios
$users = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $users[] = $row;
    }
}

// Devolver los datos como JSON
header('Content-Type: application/json');
echo json_encode($users);

// Cerrar la conexión a la base de datos
$conex->close();
?>