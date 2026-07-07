<?php

include 'db.php';

$id = $_GET['id'];

$sql = "SELECT * FROM productos WHERE id = '$id'";
$resultado = $conn->query($sql);

if ($resultado->num_rows > 0) {
    $producto = $resultado->fetch_assoc();
} else {
    echo "Producto no encontrado";
    exit();
}

?>








