<?php

$conn = new PDO("mysql:dbname=dbphp7;host=localhost","root", "");

$conn->beginTransaction();

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuarios = ?");

$id = 2;

$stmt->execute(array($id));

// $conn->rollback();

$conn->commit();

echo "Delete, OK!";


?>