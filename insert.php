<?php

include 'db.php';

$codigo = $_POST['codigo'];
$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$categoria = $_POST['categoria'];
$unidades = $_POST['unidades'];

$sql = "INSERT INTO productos
(codigo, nombre, descripcion,  categoria, unidades)
VALUES
('$codigo', '$nombre','$descripcion', '$categoria', '$unidades')";

$conn->query($sql);

header("Location: Inventario.php");
exit();

?>