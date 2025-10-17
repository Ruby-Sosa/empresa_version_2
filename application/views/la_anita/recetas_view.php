<div class="container mt-5">
  <h2 class="text-center fw-bold text-warning mb-4">Nuestras Recetas</h2>
  <p class="text-center text-light mb-5">Descubre platillos deliciosos con el toque único de La Anita.</p>

  <div class="row">
    <?php foreach ($recetas as $receta): ?>
      <div class="col-md-4 mb-4">
        <div class="card shadow-lg border-0 rounded-4">
          <img src="<?php echo base_url($receta->imagen); ?>" 
               class="card-img-top" 
               alt="<?php echo $receta->titulo; ?>"
               style="height: 220px; object-fit: cover;">
          <div class="card-body text-center bg-light rounded-bottom-4">
            <h5 class="card-title text-danger fw-bold"><?php echo $receta->titulo; ?></h5>
            <p class="card-text text-muted"><?php echo $receta->descripcion; ?></p>
            <a href="#" class="btn btn-warning text-white fw-bold">Ver receta</a>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</div>
