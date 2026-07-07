
<?php

include 'db.php';

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$categoria = $_POST['categoria'];
$unidades = $_POST['unidades'];

$sql = "UPDATE productos
        SET nombre = '$nombre',
            descripcion = '$descripcion',
            categoria = '$categoria',
            unidades = '$unidades'
        WHERE id = '$id'";

if ($conn->query($sql) === TRUE) {
    header("Location: Inventario.php");
    exit();
} else {
    echo "Error al actualizar: " . $conn->error;
}

$conn->close();

?>

