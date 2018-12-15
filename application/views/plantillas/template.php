<!DOCTYPE html>
<html lang="es" class="no-js">
   <head>
      <!--Se carga la cabecera-->
      <?php $this->load->view('plantillas/header'); ?>
   </head>
   <body>
      <div class="navbar navbar-inverse navbar-fixed-top">
         <div class="container">
            <!--Se carga el menu-->
            <?php $this->load->view('plantillas/menu'); ?>
         </div>
      </div>

      <div style="margin-top: 30px;">
         <?php $this->load->view($cabecera); ?>
      </div>

      <div class="container">
         <!-- Example row of columns -->
         <div class="row">
            <?php $this->load->view($contenido_principal); ?>
         </div>
         <hr>

         <footer>
            <span>&copy; Fundación Entreamigos de la Fe NIT 900026077-4</span>
            <span> | </span>
            <span>
               <a href="<?php echo site_url('bienvenido/denuncia'); ?>">Envíe su inquietud</a>
               <!-- <a href="<?php // echo site_url('bienvenido/proteccion'); ?>">Aviso legal</a> -->
            </span>
         </footer>
      </div>
      <!-- /container -->

      <!--scripts-->
      <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
      <script>window.jQuery || document.write('<script src="<?php echo base_url(); ?>js/vendor/jquery-1.10.1.min.js"><\/script>')</script>
      <script src="<?php echo base_url(); ?>js/vendor/bootstrap.min.js"></script>
      <script src="<?php echo base_url(); ?>js/vendor/jquery.dataTables.min.js"></script>
      <script src="<?php echo base_url(); ?>js/vendor/bootstrap-datepicker2.js"></script>
      <script src="<?php echo base_url(); ?>js/funciones.js"></script>
      <!--
      <script>
         /*
         var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
         (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
         g.src='//www.google-analytics.com/ga.js';
         s.parentNode.insertBefore(g,s)}(document,'script'));
         */
      </script>
      -->
   </body>
</html>