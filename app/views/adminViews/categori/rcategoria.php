<?php
include_once 'app/views/adminViews/header.php';
include_once 'app/views/adminViews/navbar.php';
?>
<section class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-8 card">
            <form action="<?php echo constant('URL') .
                                'categorias/insert'; ?>" method="post" class="card-body py-4"
                enctype="multipart/form-data">
                <h4 class="text-center">Add Nueva Categoria</h4>



                <input type="text" class="form-control my-3"
                    name="categorias" placeholder="categoria">


                <input type="submit" class="btn btn-primary btn-block my-3"
                    name="addcategoria" value="Guardr">
            </form>
        </div>
    </div>
</section>
<?php include_once 'app/views/adminViews/footer.php'; ?>