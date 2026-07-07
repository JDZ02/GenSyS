<?php

include 'db.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Usuario</title>
|
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

        <!-- FORMULARIO -->

        <section class="tarjeta">

            <h3>Nuevo Usuario</h3>

            <form
                id="formulario-registro"
                action="funciones.php?accion=añadir"
                method="POST">

                <input type="hidden" name="id" value="<?php echo $id; ?>">

                <div class="grupo-campo">
                    <label>Nombre del colaborador</label>

                    <input
                        type="text"
                        name="nombre"
                        required>
                </div>

                 <div class="grupo-campo">
                    <label>Correo</label>

                    <input
                        type="text"
                        name="correo"
                        required>
                </div>

                <div class="grupo-campo">
                    <label>Documento</label>

                    <input
                        type="number"
                        name="documento"
                        required>
                </div>

                  <div class="grupo-campo">
                    <label>Usuario</label>

                    <input
                        type="text"
                        name="usuario"
                        required>
                </div>

                  <div class="grupo-campo">
                    <label>Contraseña</label>

                    <input
                        type= "password"
                        name="contraseña"
                        required>
                </div>


                <button
                    type="submit"
                    class="btn-guardar">

                    Crear Usuario

                </button>

            </form>

        </section>

        <!-- TABLA -->

        <section class="tarjeta">

            <h3>Usuarios Activos</h3>

            <div class="tabla-responsiva">

                <table>

                    <thead>

                        <tr>
                            <th>Nombre</th>
                            <th>Correo</th>
                            <th>Documento</th>
                            <th>Usuario</th>
                        </tr>

                    </thead>

                    <tbody>

                    <?php

                    $sql = "SELECT * FROM usuarios";

                    $resultado = $conn->query($sql);

                    while($fila = $resultado->fetch_assoc()) {

                    ?>

                        <tr>

                            <td><?php echo $fila['id']; ?></td>

                            <td><?php echo $fila['nombre']; ?></td>

                            <td><?php echo $fila['correo']; ?></td>

                             <td><?php echo $fila['documento']; ?></td>

                            <td><?php echo $fila['usuario']; ?></td>


                            <td>

                           <a class="btn-inventario"
                            href="funciones.php?accion=eliminar&id=<?php echo $fila['id']; ?>"
                            onclick="return confirm('¿Eliminar registro?')">

                            Eliminar

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