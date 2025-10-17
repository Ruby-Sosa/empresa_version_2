<div class="container py-5">
  <h2 class="text-center fw-bold text-warning mb-4"> Contáctanos</h2>
  <p class="text-center text-white mb-5">En La Anita valoramos tu opinión. ¡Déjanos tu mensaje y pronto nos pondremos en contacto contigo!</p>

  <?php if (isset($exito)): ?>
    <div class="alert alert-success text-center"><?php echo $exito; ?></div>
  <?php endif; ?>

  <?php echo validation_errors('<div class="alert alert-danger">', '</div>'); ?>

  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card shadow-lg border-0 rounded-4 p-4" style="background-color:#fdf3e7;">
        <form method="post" action="<?php echo base_url('contacto'); ?>">
          <div class="mb-3">
            <label class="form-label fw-bold">Nombre completo</label>
            <input type="text" name="nombre" class="form-control" placeholder="Tu nombre" required>
          </div>
          <div class="mb-3">
            <label class="form-label fw-bold">Correo electrónico</label>
            <input type="email" name="correo" class="form-control" placeholder="tunombre@ejemplo.com" required>
          </div>
          <div class="mb-3">
            <label class="form-label fw-bold">Asunto</label>
            <input type="text" name="asunto" class="form-control" placeholder="Motivo del mensaje">
          </div>
          <div class="mb-3">
            <label class="form-label fw-bold">Mensaje</label>
            <textarea name="mensaje" class="form-control" rows="5" placeholder="Escribe tu mensaje aquí..." required></textarea>
          </div>
          <div class="text-center">
            <button type="submit" class="btn btn-warning fw-bold px-5">Enviar mensaje</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <div class="text-center text-light mt-5">
    <p><strong>📍 Dirección:</strong> Calle 60 #123, Mérida, Yucatán</p>
    <p><strong>📞 Teléfono:</strong> (999) 123-4567</p>
    <p><strong>✉️ Correo:</strong> contacto@laanita.com</p>
  </div>
</div>
