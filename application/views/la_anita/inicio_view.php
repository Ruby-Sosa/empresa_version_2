<div class="inicio-anita text-center">

  <!-- TÍTULO PRINCIPAL -->
  <section class="mt-5">
    <h2 class="fw-bold text-yellow">El sabor que enciende tu mesa</h2>
    <p class="lead text-yellow">Más de 100 años compartiendo el auténtico sazón yucateco.</p>
  </section>

  <!-- CARRUSEL PRINCIPAL -->
  <div id="carouselAnita" class="carousel slide carousel-fade mt-4 shadow-lg rounded overflow-hidden"
       data-bs-ride="carousel" data-bs-interval="5000">
    <div class="carousel-inner">

      <!-- SLIDE 1 - PRODUCTOS -->
      <div class="carousel-item active">
        <img src="<?php echo base_url('assets/img/carrusel/productos.png'); ?>" 
             class="d-block w-100" alt="Productos La Anita"
             style="max-height: 520px; object-fit: cover;">
        <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded-3 p-3">
          <h5 class="fw-bold text-warning">Descubre nuestros productos</h5>
          <p>El auténtico sabor yucateco en cada gota.</p>
          <a href="<?php echo site_url('productos'); ?>" class="btn btn-warning fw-bold">Ver más</a>
        </div>
      </div>

      <!-- SLIDE 2 - LANZAMIENTOS -->
      <div class="carousel-item">
        <img src="<?php echo base_url('assets/img/carrusel/lanzamientos.png'); ?>" 
             class="d-block w-100" alt="Lanzamientos La Anita"
             style="max-height: 520px; object-fit: cover;">
        <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded-3 p-3">
          <h5 class="fw-bold text-warning">Nuevos lanzamientos</h5>
          <p>Innovación y tradición que encienden tu mesa.</p>
          <a href="<?php echo site_url('lanzamientos'); ?>" class="btn btn-warning fw-bold">Ver más</a>
        </div>
      </div>

      <!-- SLIDE 3 - RECETAS -->
      <div class="carousel-item">
        <img src="<?php echo base_url('assets/img/carrusel/recetas.png'); ?>" 
             class="d-block w-100" alt="Recetas La Anita"
             style="max-height: 520px; object-fit: cover;">
        <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded-3 p-3">
          <h5 class="fw-bold text-warning">Recetas y blogs</h5>
          <p>Descubre cómo preparar platillos únicos con el sabor de La Anita.</p>
          <a href="<?php echo site_url('recetas'); ?>" class="btn btn-warning fw-bold">Ver más</a>
        </div>
      </div>

    </div>

    <!-- CONTROLES -->
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselAnita" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Anterior</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselAnita" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Siguiente</span>
    </button>
  </div>

  <!-- FRAJA INFERIOR -->
  <div class="bg-orange text-white text-center py-4 mt-5 shadow-lg rounded">
    <h3 class="fw-bold mb-1">Sabor con orgullo yucateco 🇲🇽</h3>
    <p class="mb-0">Desde 1913 llevamos el toque picante de La Anita a tu mesa.</p>
  </div>

  <!-- NUESTRA INSPIRACIÓN -->
  <section class="inspiracion-section mt-5 py-5 text-center text-white"
           style="background: linear-gradient(180deg, #0099cc 0%, #007bb5 100%); position: relative; overflow: hidden;">
    <div class="container">
      <h2 class="fw-bold text-uppercase mb-3">NUESTRA INSPIRACIÓN</h2>
      <p class="lead mx-auto" style="max-width: 800px;">
        Un aroma o un sabor puede transportarnos hacia lugares y recuerdos.
        Buscamos llevarte la esencia culinaria de Yucatán con los condimentos y salsas 
        <strong>La Anita</strong>, para darle un toque delicioso a cada platillo que prepares.
      </p>
    </div>

    <!-- DECORACIONES -->
    <img src="<?php echo base_url('assets/img/carrusel/habanera.png'); ?>" 
         alt="Chile habanero"
         style="position:absolute; top:20%; left:5%; width:90px; transform: rotate(-10deg); opacity:0.9;">
    <img src="<?php echo base_url('assets/img/carrusel/condimentos.png'); ?>" 
         alt="Condimentos La Anita"
         style="position:absolute; bottom:5%; left:15%; width:110px; opacity:0.9;">
  </section>

  <!-- SECCIÓN DE RECETAS DESTACADAS -->
  <section class="mt-5 py-5 bg-light rounded shadow-lg">
    <div class="container">
      <h2 class="text-center fw-bold text-warning mb-4">Recetas Destacadas</h2>
      <p class="text-center text-muted mb-5">Descubre nuevas formas de disfrutar el sabor de La Anita.</p>

      <div class="row">
        <?php 
          $contador = 0;
          foreach ($recetas as $receta):
            if ($contador++ == 3) break; 
        ?>
          <div class="col-md-4 mb-4">
            <div class="card border-0 shadow-sm rounded-4">
              <img src="<?php echo base_url($receta->imagen); ?>" 
                   class="card-img-top rounded-top-4"
                   alt="<?php echo $receta->titulo; ?>"
                   style="height:220px; object-fit:cover;">
              <div class="card-body text-center">
                <h5 class="fw-bold text-danger"><?php echo $receta->titulo; ?></h5>
                <p class="text-muted"><?php echo $receta->descripcion; ?></p>
                <a href="<?php echo base_url('index.php/recetas'); ?>" 
                   class="btn btn-warning text-white fw-bold">Ver más recetas</a>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

</div>
