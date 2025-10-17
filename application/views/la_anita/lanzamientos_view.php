<div class="container my-5">
  <h2 class="text-center fw-bold mb-4 text-warning"> Nuevos Lanzamientos de La Anita</h2>
  <p class="text-center text-dark mb-5">Conoce nuestras más recientes creaciones que combinan tradición y sabor yucateco.</p>

  <div class="row justify-content-center">
    <?php foreach ($lanzamientos as $p): ?>
      <div class="col-md-4 col-lg-3 mb-4">
        <div class="card border-0 shadow-lg rounded-4 h-100 lanz-card">
          <img src="<?php echo base_url($p->imagen_url); ?>" class="card-img-top rounded-top-4 p-3" alt="<?php echo $p->nombre; ?>">
          <div class="card-body text-center">
            <h5 class="card-title text-danger fw-bold"><?php echo $p->nombre; ?></h5>
            <p class="card-text text-muted small"><?php echo $p->descripcion; ?></p>
            <span class="badge bg-warning text-dark mb-2"><?php echo $p->categoria; ?></span>
            <p class="fw-bold text-success">$<?php echo number_format($p->precio, 2); ?></p>
          </div>
          <div class="card-footer bg-transparent border-0 text-center">
            <button class="btn btn-danger text-white fw-bold px-3">Ver más</button>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>

  <div class="bg-orange text-white text-center py-4 mt-5 shadow-lg rounded-3">
    <h3 class="fw-bold">¡Descubre el sabor del futuro con La Anita! </h3>
  </div>
</div>
