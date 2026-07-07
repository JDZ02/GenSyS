<?php

include 'db.php';

function IngresarUsuario($conn, $nombre, $correo, $documento, $usuario, $contraseña) {

    $sql = "INSERT INTO usuarios
            (nombre, correo, documento, usuario, contraseña)
            VALUES (?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);

    $stmt->bind_param(
        "ssiss",
        $nombre,
        $correo,
        $documento,
        $usuario,
        $contraseña
    );

    return $stmt->execute();

    
}

function EliminarUsuario($conn, $id) {

    $sql = "DELETE FROM usuarios WHERE id = ?";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);

    return $stmt->execute();

    
}


if (isset($_GET['accion'])) {

    switch ($_GET['accion']) {

        case 'añadir':

            IngresarUsuario(
                $conn,
                $_POST['nombre'],
                $_POST['correo'],
                $_POST['documento'],
                $_POST['usuario'],
                $_POST['contraseña']
            );

            header("Location: crear_usuario.php");
            exit();

            break;

        case 'eliminar':

            EliminarUsuario(
                $conn,
                $_GET['id']
            );

            header("Location: crear_usuario.php");
            exit();

            break;
    }
}