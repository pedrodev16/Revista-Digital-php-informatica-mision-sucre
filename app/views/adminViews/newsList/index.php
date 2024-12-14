<?php
include_once 'app/views/adminViews/header.php';
include_once 'app/views/adminViews/navbar.php';

include_once 'app/models/adminModels/selectModel.php';
$model = new SelectModel();
$sql = $model->select();
$rows = $model->getData($sql);
?>
<section class="container my-5">
  <div class="row justify-content-center">
    <h4 class="text-center">Pelera de post</h4>
    <div class="card-columns">
      <?php
      if (!empty($rows)) {
        foreach ($rows as $row) {
          if ($row['STATUS'] == "F") {
      ?>
            <div class="card my-2 p-4">
              <div>
                <p><strong>Id: </strong>
                  <?php echo $row['ID']; ?></p>
              </div>
              <div>
                <p><strong>Section: </strong>
                  <?php echo $row['SECTION']; ?></p>
              </div>
              <div>
                <p><strong>Title: </strong>
                  <?php echo $row['TITLE']; ?></p>
              </div>
              <div>
                <p><strong>Description.Lenght: </strong>
                  <?php echo strlen($row['DESCRIPTION']); ?></p>
              </div>
              <div>
                <p><strong>Date: </strong>
                  <?php echo $row['DATE']; ?></p>
              </div>
              <div>
                <a href="<?php echo constant('URL') . 'newsList/repost?ID=' .
                            $row['ID']; ?>" class="btn btn-danger">Repostear</a>
              </div>
              <div>
                <a href="<?php echo constant('URL') . 'newsList/edit?ID=' .
                            $row['ID']; ?>" class="btn btn-success">Editar</a>
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