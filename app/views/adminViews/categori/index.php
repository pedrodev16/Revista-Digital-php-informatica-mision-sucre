<?php
include_once 'app/views/adminViews/header.php';
include_once 'app/views/adminViews/navbar.php';
?>
<section class="container my-5">
  <div class="row justify-content-center">

    <h4 class="text-center">Lista de categorias</h4>
    <br>
    <a class="btn btn-info" href="<?php echo constant('URL'); ?>categorias/reg">nueva categoria</a>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nombre</th>
          <th scope="col">fecha</th>
          <th scope="col">util</th>
          <th scope="col">acc</th>
        </tr>
      </thead>
      <tbody>
        <?php

        if (!empty($data)) {
          foreach ($data as $row) {
        ?>

            <tr>
              <th scope="row"><?= $row['id'] ?></th>
              <td><?= $row['nombre'] ?></td>
              <td><?= $row['DATE'] ?></td>
              <td>@mdo</td>
              <td><a class="btn btn-info" href="<?php echo constant('URL'); ?>categorias/">editar</a>
                <a class="btn btn-danger" href="<?php echo constant('URL'); ?>categorias/">eliminar</a>
              </td>
            </tr>
        <?php }
        }
        ?>
      </tbody>
    </table>
  </div>
</section>
<?php include_once 'app/views/adminViews/footer.php'; ?>