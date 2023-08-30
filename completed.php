<?php
require "./config.php";

if (isset($_GET['id'])) {
    $task_id = $_GET['id'];

    // Actualizar el estado de la tarea a completada en la base de datos
    $query = $conect->query("UPDATE task SET completada = 1 WHERE id = '$task_id'");

    if ($query) {
        
        header("location: index.php");
        exit; // Detener la ejecución del resto del código
    }
}
?>