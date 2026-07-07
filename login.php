<?php

include 'db.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSS/LOGIN.css">
    <script src="https://unpkg.com/lucide@latest"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
<header>
    <nav class="navbar">
        <div class="seccionlogo">
        <div class="logo"><img  class="logo" src="RECURSOS/Logo Pigmento.jpg" alt="logopigmento"></div>
        <h1>PIGMENTO DP</h1>
      </div>

      <ul class="menu">
        <li><a href="inicio.html">INICIO</a></li>
        <li><a href="#">SOBRE NOSOTROS</a></li>
        <li><a href="#">CONTACTO</a></li>
      </ul>
</nav>
</header>


<div id="contenido">
<aside class="sidebar">
   <a href="dashboard.php">
    <button title="Dashboard">
        <i data-lucide="layout-dashboard"></i>
    </button>
    </a>
    
    <a href="Inventario.php">
        <button title="Inventario" >
        <i data-lucide="package"></i>
    </button>
    </a>

    <button title="Catálogo">
        <i data-lucide="shopping-bag"></i>
    </button>

    <button title="Cuenta">
        <i data-lucide="user"></i>
    </button>

    <button title="Opciones">
        <i data-lucide="settings"></i>
    </button>
</aside>
<main> 

    <section class="iniciarsesion">
        <div class="titulo">
            <h2>INICIAR SESION</h2>
        </div>
        <div class="formulario">
            <form action="validar_login.php" method="POST">
            <label>Usuario:</label>
            <input type="text" name="usuario" required>

            <label>Contraseña:</label>
            <input type="password" name="contraseña" required>

            <div class="botones">
                <button type="submit">INGRESAR</button>
                <button type="button">¿OLVIDASTE LA CONTRASEÑA?</button>
            </div>
            </form>
        </div>


    </section>
    
</main>
</div>
<footer></footer>
<script>
  lucide.createIcons();
</script>
    
</body>
</html>