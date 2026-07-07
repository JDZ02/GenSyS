<?php

include 'db.php';

$id = $_GET['id'];

$sql = "DELETE FROM productos WHERE id = $id";

$conn->query($sql);

header("Location: Inventario.php");
exit();

?>