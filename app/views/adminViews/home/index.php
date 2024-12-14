<?php
include_once 'app/views/adminViews/header.php';
include_once 'app/views/adminViews/navbar.php';

include_once 'app/models/adminModels/selectModel.php';
$model = new SelectModel();
$sql = $model->select();
$rows = $model->getData($sql);
?>
<section class="container mt-5">
  <div>
    <h3>Recent News - Home</h3>
  </div>
  <hr>
  <div class="row justify-content-center">
    <div class="col-md-10">
      <?php
      if (!empty($rows)) {
        foreach ($rows as $row) {
          if ($row['STATUS'] != "F") {
      ?>

            <div class="card mb-3" style="max-width: 100%;">
              <div class="row g-0">
                <div class="col-md-4">
                  <img src="public/img/<?php echo $row['IMAGE']; ?>" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title"><?php echo $row['TITLE']; ?></h5>
                    <p class="card-text"><?php echo strip_tags(substr($row['DESCRIPTION'], 0, 300)); ?>.</p>
                    <p class="card-text"><small class="text-muted"><?php echo $row['DATE']; ?></small></p>
                  </div>



                  <div>
                    <?php echo $row['SECTION']; ?>
                    <a href="<?php echo constant('URL') . 'newsList/delete?ID=' .
                                $row['ID']; ?>" class="btn btn-danger">Eliminar</a>

                    <a href="<?php echo constant('URL') . 'newsList/edit?ID=' .
                                $row['ID']; ?>" class="btn btn-success">Editar</a>
                  </div>
                </div>


              </div>
            </div>


      <?php
          }
        }
      } else {
        echo 'No results!';
      }
      ?>
    </div>
  </div>
</section>
<?php include_once 'app/views/adminViews/footer.php'; ?>