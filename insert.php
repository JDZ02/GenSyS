<?php

include 'db.php';

$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$categoria = $_POST['categoria'];
$unidades = $_POST['unidades'];

$sql = "INSERT INTO productos
(nombre, descripcion,  categoria, unidades)
VALUES
('$nombre','$descripcion', '$categoria', '$unidades')";

$conn->query($sql);

header("Location: Inventario.php");
exit();

?>