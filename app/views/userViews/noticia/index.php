  <?php include_once "app/views/userViews/header.php"; ?>
  <!-- Responsive navbar-->
  <?php include("app/views/userViews/componentes/nav.php") ?>
  <!-- Page Content-->
  <div class="container mt-5">
      <div class="row">
          <div class="col-lg-8">
              <!-- Heading Row-->
              <?php include("app/views/userViews/componentes/noticia.php") ?>
              <!-- Call to Action-->
          </div>
          <div class="col-lg-4">
              <!-- Side widgets-->
              <?php include("app/views/userViews/componentes/panel.php") ?>
          </div>
      </div>
      <?php include("app/views/userViews/componentes/info.php") ?>
      <!-- Content Row-->
      <div class="row gx-4 gx-lg-5">
          <!-- Call to Action-->
          <?php include("app/views/userViews/componentes/articulos.php") ?>
      </div>
  </div>
  <?php include_once "app/views/userViews/footer.php"; ?>