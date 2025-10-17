<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title><?php echo isset($titulo_pagina) ? $titulo_pagina : 'La Anita Web'; ?></title>
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/AdminLTE.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/la_anita_style.css'); ?>"> 
    </head>
<body class="hold-transition skin-red-light sidebar-mini">
    <div class="wrapper">

        <?php $this->load->view('layout/encabezado'); ?>

        <div class="content-wrapper">
            <section class="content-header">
                <h1><?php echo isset($titulo_pagina) ? $titulo_pagina : 'Bienvenido'; ?></h1>
            </section>
            <section class="content">
                <div id="contenido-dinamico">
                    <?php 
                    
                    echo $contenido_principal; 
                    ?>
                </div>
            </section>
        </div>

        <?php $this->load->view('layout/pie_pagina'); ?>

    </div>

    <script src="<?php echo base_url('assets/plugins/jQuery/jquery-2.2.3.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/dist/js/app.min.js'); ?>"></script>
</body>
</html>