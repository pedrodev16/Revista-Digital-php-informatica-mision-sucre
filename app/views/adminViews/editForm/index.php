<?php
include_once 'app/views/adminViews/header.php';
include_once 'app/views/adminViews/navbar.php';
?>
<script src="<?php echo constant('URL'); ?>public/tinymce.min.js"></script>
<script>
  tinymce.init({
    selector: '#pclu-textarea',
    branding: false
  });
</script>

<?php
if (!empty($data[0])) {
  foreach ($data[0] as $row) {
?>



    <section class="container my-5">
      <div class="row justify-content-center">
        <div class="col-md-8 card">
          <form action="<?php echo constant('URL') .
                          'newsList/update?ID=' . $row['ID']; ?>" method="post"
            class="card-body py-4">
            <h4 class="text-center">Add New Notice</h4>

            <p>ID: <?php echo $row['ID']; ?></p>

            <input type="text" require class="form-control my-3"
              name="titlePost" placeholder="Title"
              value='<?php echo $row['TITLE']; ?>'>


            <textarea name="descPost" id="pclu-textarea"> <?php echo $row['DESCRIPTION']; ?></textarea>

            <div>
              <select class='custom-select' name='sectionPost'>
                <option selected>
                  <?php echo $row['SECTION']; ?>
                </option>
                <?php if (!empty($data[1])) {
                  foreach ($data[1] as $row1) {
                ?>
                    <option value='Politics'><?= $row1['nombre'] ?></option>
                <?php
                  }
                }
                ?>
              </select>
            </div>

            <input type="submit" name="editNotice" value="Aplicar cambio"
              class="btn btn-success btn-block my-3">
          </form>
        </div>
      </div>
    </section>
<?php
  }
}
include_once 'app/views/adminViews/footer.php';

?>