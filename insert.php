<?php

include 'db.php';

$codigo = $_POST['codigo'];
$nombre = $_POST['nombre'];
$categoria = $_POST['categoria'];
$unidades = $_POST['unidades'];

$sql = "INSERT INTO productos
(codigo, nombre, categoria, unidades)
VALUES
('$codigo', '$nombre', '$categoria', '$unidades')";

$conn->query($sql);

header("Location: Inventario.php");
exit();

?>