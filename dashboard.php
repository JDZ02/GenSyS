<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSS/DASHBOARD.css">
    <script src="https://unpkg.com/lucide@latest"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
<header></header>
<nav class="navbar">
        <div class="seccionlogo">
        <div class="logo"><img  class="logo" src="RECURSOS/Logo Pigmento.jpg" alt="logopigmento"></div>
        <h1>PIGMENTO DP</h1>
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
  <section class="productospopulares">
    <h2>Productos más populares</h2>
    <div class="contenedorproductos">
        <div class="tarjeta-producto">
            <img src="RECURSOS/playstation.jpg" alt="Playstation">
            <p>Playstation</p>
        </div>
        <div class="tarjeta-producto">
            <img src="RECURSOS/coldplay.jpg" alt="Coldplay">
            <p>Coldplay</p>
        </div>
    </div>
</section>

<section class="stats-dashboard">

    <div class="card chart-container">
        <h3>Visitas mensuales al sitio web</h3>
        <canvas id="visitasChart"></canvas>
    </div>

    <div class="info-grid">
        <div class="card stat-box">
            <h4>Próximo inventario mensual:</h4>
            <p class="highlight-text">30 Abril 2026</p>
        </div>
        <div class="card stat-box">
            <h4>Productos Vendidos</h4>
            <p class="highlight-text">159</p>
        </div>
    </div>
</section>

</main>
</div>
<footer></footer>
<script>
const ctx = document.getElementById('visitasChart');
new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun'],
        datasets: [{
            label: 'Visitas',
            data: [18000, 20000, 21500, 24000, 26000, 29000],
            borderColor: '#4a90e2',
            backgroundColor: 'rgba(74, 144, 226, 0.1)',
            fill: true,
            tension: 0.4 
        }]
    },
    options: {
        responsive: true,
        plugins: { legend: { display: false } }
    }
});
</script>
<script>
  lucide.createIcons();
</script>
    
</body>
</html>

