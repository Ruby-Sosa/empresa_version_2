<div class="container my-5">
  <h2 class="text-center fw-bold mb-4 text-warning">Nuestros Productos</h2>
  
  <!-- Contenedor de tarjetas -->
  <div class="row justify-content-center">
    <?php foreach ($productos as $producto): ?>
    <div class="col-md-3 mb-4">
        <div class="card text-center shadow-lg border-0">
        <img src="<?php echo base_url() . $producto->imagen_url; ?>" 
          alt="<?php echo $producto->nombre; ?>" 
            class="card-img-top rounded-top">
        <div class="card-body">
            <h5 class="card-title text-danger fw-bold"><?php echo $producto->nombre; ?></h5>
            <p class="card-text"><?php echo $producto->descripcion; ?></p>
            <p class="text-success fw-bold">$<?php echo number_format($producto->precio, 2); ?></p>
            <span class="badge bg-primary"><?php echo $producto->categoria; ?></span>
            <br><br>
            <a href="#" class="btn btn-warning">Ver Detalles</a>
        </div>
        </div>
    </div>
    <?php endforeach; ?>