<?php
include_once 'app/views/adminViews/header.php';
include_once 'app/views/adminViews/navbar.php';
?>
<script src="https://cdn.tiny.cloud/1/i0ijqh2544kuonr67jbiqmxw3yk7a9ek3i21nn7iq6y52d5r/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>
<script>
  tinymce.init({
    selector: '#pclu-textarea',
    branding: false
  });
</script>

<section class="container my-5">
  <div class="row justify-content-center">
    <div class="col-md-8 card">
      <form action="<?php echo constant('URL') .
                      'addNew/insert'; ?>" method="post" class="card-body py-4"
        enctype="multipart/form-data">
        <h4 class="text-center">Add Nueva Publicacion</h4>


        <div>
          <input type="text" class="form-control my-3"
            name="titlePost" placeholder="Titulo">
          <br>
          <textarea name="descPost" id="pclu-textarea"></textarea>
          <select class='custom-select' name='sectionPost'>
            <?php
            if (!empty($data)) {
              foreach ($data as $row) {
            ?>
                <option value='<?= $row['nombre'] ?>'><?= $row['nombre'] ?></option>
            <?php
              }
            }
            ?>
          </select>
        </div>

        <div class="input-group mb-3">
          <div class="custom-file">
            <input type="file" class="custom-file-input"
              id="inputGroupFile01" name='imagePost'
              aria-describedby="inputGroupFile"
              accept='image/*' required>
            <label class="custom-file-label"
              for="inputGroupFile">Choose file</label>
          </div>
        </div>

        <input type="submit" class="btn btn-primary btn-block my-3"
          name="addNotice" value="Publicar">
      </form>
    </div>
  </div>
</section>
<?php include_once 'app/views/adminViews/footer.php'; ?>