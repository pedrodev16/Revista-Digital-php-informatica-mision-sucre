
<div class="col-md-12">
  <div class="row">
<?php

    if (!empty($data[1])) {
      ?>

      <div class="text-muted fst-italic mb-2"><?= count($data[1]) ?> Resultados de Busqueda</div>
      <?php
        foreach ($data[1] as $row) {
            if ($row['STATUS'] != "F") {
    ?>

              <div class="col-md-5 mb-4">
                  <div class="card h-100">
                      <div class="card-body">
                          <a class="badge bg-secondary text-decoration-none link-light" href="#!"> <?php echo $row['SECTION']; ?></a>
                          <img style="width: 100%;" src="<?php echo constant('URL'); ?>public/img/<?php echo $row['IMAGE']; ?>">
                          <h2 class="card-title">
                              <h5 class="float-left"><?php echo $row['TITLE']; ?></h5>
                          </h2>


                      </div>
                      <div class="text-muted fst-italic mb-2"><?php echo $row['DATE']; ?></div>
                      <div class="card-footer"><a class="btn btn-primary btn-sm" href="<?php echo constant('URL'); ?>noticia/ver/<?php echo $row['ID']; ?>">Leer mas</a></div>
                  </div>
              </div>

  <?php
            }
  }
    }else{
          echo "<div class='alert alert-danger'>No se encontraron coincidencias¡</div>";
        }
    ?>
  </div>
    </div>