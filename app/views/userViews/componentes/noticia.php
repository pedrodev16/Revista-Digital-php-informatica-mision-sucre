   <!-- Post content-->
   <?php
    if (!empty($data[1])) {
        foreach ($data[1] as $row) {
            if ($row['STATUS'] != "F") {
    ?>
               <article>

                   <header class="mb-4">
                       <!-- Post title-->
                       <h1 class="fw-bolder mb-1">><?php echo $row['TITLE']; ?>!</h1>
                       <!-- Post meta content-->
                       <div class="text-muted fst-italic mb-2">Publicado el <?php echo $row['DATE']; ?> por xx</div>
                       <!-- Post categories-->
                       <a class="badge bg-secondary text-decoration-none link-light" href="#!"> <?php echo $row['SECTION']; ?></a>

                   </header>
                   <style>
                       #centrador {
                           text-align: center;
                           width: 100%;
                           height: 400px;
                           background-color: #0000000a;
                       }
                   </style>
                   <div id="centrador" class="cart">
                       <img style="height: 400px;" class="img-fluid rounded mb-4 mb-lg-0" id="imagen" src="<?php echo constant('URL'); ?>public/img/<?php echo $row['IMAGE']; ?>" alt="..." />
                   </div>
                   <!-- Post content-->
                   <section class="mb-5">
                       <p style="margin: 10px;">
                           <?php echo $row['DESCRIPTION']; ?>
                       </p>
                   </section>

               </article>

   <?php
            }
        }
    }
    ?>