<?php

include "./config.php";

$id = $_GET['id'];

$eliminar = $conect->query("DELETE FROM task WHERE id = '$id'");

header("Location: index.php");
?>