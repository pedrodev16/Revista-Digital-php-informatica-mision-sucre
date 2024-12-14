  <?php include_once "app/views/userViews/header.php"; ?>
  <!-- Responsive navbar-->

  <!-- Responsive navbar-->
  <?php require_once("app/views/userViews/componentes/nav.php") ?>
  <!-- Page Content-->
  <!-- Page Content-->
  <div class="container mt-5">
    <div class="row">
      <div class="col-lg-8">
        <!-- Heading Row-->

        <?php
        $view = $data[2];
        switch ($view) {
          case 'inicio':
            include("app/views/userViews/componentes/noticiaNuev.php");
            break;
          case 'noticia':
            include("app/views/userViews/componentes/noticia.php");
            break;
          case 'historia':
            include("app/views/userViews/componentes/historia.php");
            break;
          case 'contacto':
            include("app/views/userViews/componentes/contacto.php");
            break;
          case 'galeria':
            include("app/views/userViews/componentes/galeria.php");
            break;
          case 'resultado':

            include("app/views/userViews/componentes/rbusqueda.php");
            break;
          default:
            # code...
            break;
        }
        ?>
        <?php include("app/views/userViews/componentes/info.php") ?>
        <div class="row gx-4 gx-lg-5">
          <?php include("app/views/userViews/componentes/articulos.php") ?>
        </div>
      </div>

      <div class="col-lg-4">
        <!-- Side widgets-->
        <?php include("app/views/userViews/componentes/panel.php") ?>
      </div>

    </div>
  </div>

  <?php include_once "app/views/userViews/footer.php"; ?>