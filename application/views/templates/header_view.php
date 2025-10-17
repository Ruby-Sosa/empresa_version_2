<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo isset($titulo_pagina) ? $titulo_pagina : 'La Anita'; ?></title>

  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

  <!-- Fuentes -->
  <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@400;700&family=Lato:wght@300;400;700&display=swap" rel="stylesheet">

  <!-- Estilos personalizados -->
  <link rel="stylesheet" href="<?php echo base_url('assets/css/la_anita_style.css'); ?>">
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark fixed-top shadow-sm">
  <div class="container">
    <a class="navbar-brand" href="<?php echo base_url(); ?>">
      <img src="<?php echo base_url('assets/img/Anita_logo.jpg'); ?>" alt="La Anita" height="45" class="me-2">
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <?php if (isset($menu_items)): ?>
          <?php foreach ($menu_items as $item): ?>
            <li class="nav-item">
              <a class="nav-link <?php echo ($titulo_pagina == $item->titulo) ? 'active text-yellow' : ''; ?>"
                 href="<?php echo site_url($item->url); ?>">
                <?php echo $item->titulo; ?>
              </a>
            </li>
          <?php endforeach; ?>
        <?php endif; ?>
      </ul>
    </div>
  </div>
</nav>

<main class="mt-5 pt-5">
