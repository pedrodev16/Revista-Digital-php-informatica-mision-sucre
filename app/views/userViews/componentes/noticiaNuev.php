  <?php
    if (!empty($data[1])) {
        foreach ($data[1] as $row) {
            if ($row['STATUS'] != "F") {
    ?>

              <div class="row gx-4 gx-lg-5 align-items-center">



                  <hr>

                  <header class="mb-4">
                      <!-- Post title-->
                      <h1 class="fw-bolder mb-1"><?php echo $row['TITLE']; ?>!</h1>
                      <!-- Post meta content-->
                      <div class="text-muted fst-italic mb-2">Publicado en <?php echo $row['DATE']; ?> por xxxxx</div>
                      <!-- Post categories-->
                      <a class="badge bg-secondary text-decoration-none link-light" href="#!"> <?php echo $row['SECTION']; ?></a>
                  </header>

                  <div class="col-lg-7">
                      <img class="img-fluid rounded mb-4 mb-lg-0" src="public/img/<?php echo $row['IMAGE']; ?>" alt="..." />
                  </div>
                  <div class="col-lg-5">
                      <style>
                          /* If the screen size is 601px wide or more, set the font-size of <div> to 80px */
                          @media screen and (min-width: 601px) {
                              .desc {
                                  font-size: 18px;
                                  text-align: justify;
                              }
                          }

                          /* If the screen size is 600px wide or less, set the font-size of <div> to 30px */
                          @media screen and (max-width: 600px) {
                              .desc {
                                  font-size: 30px;
                              }
                          }
                      </style>
                      <p class="desc">
                          <?php echo strip_tags(substr($row['DESCRIPTION'], 0, 300)); ?>.</p>
                      <a class="btn btn-primary" href="<?php echo constant('URL'); ?>noticia/ver/<?php echo $row['ID']; ?>">Leer mas!</a>
                  </div>
                  <hr>
              </div>



  <?php
            }
        }
    }
    ?>