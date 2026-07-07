<?php

include 'db.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventario</title>

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
        <li><a href="inicio.php">INICIO</a></li>
        <li><a href="#">SOBRE NOSOTROS</a></li>
        <li><a href="#">CONTACTO</a></li>
    </ul>

</nav>

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

        <!-- FORMULARIO -->

        <section class="tarjeta">

            <h3>Nuevo Producto</h3>

            <form
                id="formulario-registro"
                action="insert.php"
                method="POST">

                <div class="grupo-campo">
                    <label>Nombre del Producto</label>

                    <input type="hidden" name="id" value="<?php echo $id; ?>">

                    <input
                        type="text"
                        name="nombre"
                        placeholder="Ej. Buzo Azul"
                        required>
                </div>

                 <div class="grupo-campo">
                    <label>Descripcion del producto</label>

                    <input
                        type="text"
                        name="descripcion"
                        placeholder="Ej. Buzo azul de manga larga, ideal para el día a día"
                        required>
                </div>

                <div class="grupo-campo">
                    <label>Categoría</label>

                    <select
                        name="categoria"
                        required>

                        <option disabled selected>
                            Selecciona una opción
                        </option>

                        <option value="ropa">
                            Ropa
                        </option>

                        <option value="accesorios">
                            Accesorios
                        </option>

                        <option value="otros">
                            Otros
                        </option>

                    </select>
                </div>

                <div class="grupo-campo">
                    <label>Unidades</label>

                    <input
                        type="number"
                        name="unidades"
                        min="1"
                        placeholder="0"
                        required>
                </div>

                <button
                    type="submit"
                    class="btn-guardar">

                    Guardar Registro

                </button>

            </form>

        </section>

        <!-- TABLA -->

        <section class="tarjeta">

            <h3>Registros Existentes</h3>

            <div class="tabla-responsiva">

                <table>

                    <thead>

                        <tr>
                            <th>Código</th>
                            <th>Nombre</th>
                            <th>Descripcion</th>
                            <th>Categoría</th>
                            <th>Unidades</th>
                            <th>Acciones</th>
                        </tr>

                    </thead>

                    <tbody>

                    <?php

                    $sql = "SELECT * FROM productos";

                    $resultado = $conn->query($sql);

                    while($fila = $resultado->fetch_assoc()) {

                    ?>

                        <tr>

                            <td><?php echo $fila['id']; ?></td>

                            <td><?php echo $fila['nombre']; ?></td>

                             <td><?php echo $fila['descripcion']; ?></td>

                            <td><?php echo $fila['categoria']; ?></td>

                            <td><?php echo $fila['unidades']; ?></td>

                            <td>

                                <a class="btn-inventario"
                                    href="delete.php?id=<?php echo $fila['id']; ?>"
                                    onclick="return confirm('¿Eliminar registro?')">

                                    Eliminar

                                </a>

                                <a class="btn-inventario"
                                    href="Modificar_Inventario.php?id=<?php echo $fila['id']; ?>">

                                     Modificar

                                </a>

                            </td>

                        </tr>

                    <?php

                    }

                    ?>

                    </tbody>

                </table>

            </div>

        </section>

    </main>

</div>

<script>
    lucide.createIcons();
</script>

</body>
</html>