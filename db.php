<?php

$conn = new mysqli(
    "localhost",
    "root",
    "",
    "gensys",
    3307 //CAMBIAR PUERTO SEGUN EL CONFIGURADO EN XAMPP GENERALMENTE EL 3306
);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>