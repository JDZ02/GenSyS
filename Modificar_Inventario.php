
<?php

include 'db.php';
include 'edit.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar</title>

    <link rel="stylesheet" href="CSS/PLANTILLA.css">

    <script src="https://unpkg.com/lucide@latest"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>

<nav class="navbar">

    <div class="seccionlogo">
        <div class="logo">
            <img class="logo"
                 src="RECURSOS/Logo Pigmento.jpg"
                 alt="logopigmento">
        </div>

        <h1>INVENTARIO</h1>
    </div>

    <ul class="menu">
        <li><a href="inicio.html">INICIO</a></li>
        <li><a href="#">SOBRE NOSOTROS</a></li>
        <li><a href="#">CONTACTO</a></li>
    </ul>

</nav>

<div id="contenido">

    <aside class="sidebar">

   <a href="dashboard.html">
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

    <section class="tarjeta">

    <h3>Editar Producto</h3>

    <form id="formulario-registro" action="update.php" method="POST">

        <input type="hidden" name="id" value="<?php echo $id; ?>">

        <div class="grupo-campo">
            <label>Nombre</label>
            <input
                type="text"
                name="nombre"
                value="<?php echo $producto['nombre']; ?>"
                required>
        </div>

        <div class="grupo-campo">
            <label>Descripción</label>
            <input
                type="text"
                name="descripcion"
                value="<?php echo $producto['descripcion']; ?>"
                required>
        </div>

        <div class="grupo-campo">
            <label>Categoría</label>

            <select name="categoria" required>

                <option value="ropa"
                    <?php if($producto['categoria'] == 'ropa') echo 'selected'; ?>>
                    Ropa
                </option>

                <option value="accesorios"
                    <?php if($producto['categoria'] == 'accesorios') echo 'selected'; ?>>
                    Accesorios
                </option>

                <option value="otros"
                    <?php if($producto['categoria'] == 'otros') echo 'selected'; ?>>
                    Otros
                </option>

            </select>
        </div>

        <div class="grupo-campo">
            <label>Unidades</label>
            <input
                type="number"
                name="unidades"
                value="<?php echo $producto['unidades']; ?>"
                required>
        </div>

        <br>

      <div class="acciones">
    <button class="btn-inventario" type="submit">
        Actualizar Producto
    </button>

    <a class="btn-inventario" href="Inventario.php">
        Cancelar
    </a>
</div>

    </form>

    </section>

    </main>

</div>

<script>
    lucide.createIcons();
</script>

</body>
</html>