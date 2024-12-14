<div class="row"><?php
                    //   print_r($data[0]);
                    if (!empty($data[0]) > 0) {
                        foreach ($data[0] as $row) {
                            if ($row['STATUS'] != 'F') {
                                # code...

                    ?>
                <div class="col-md-4" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $row['ID']; ?>">

                    <img style="width: 100%;" src="<?php echo constant('URL'); ?>public/img/<?php echo $row['IMAGE']; ?>" alt="">
                </div>



                <!-- Modal -->
                <div class="modal fade" id="exampleModal<?php echo $row['ID']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <img style="width: 100%;" src="<?php echo constant('URL'); ?>public/img/<?php echo $row['IMAGE']; ?>" alt="">

                        </div>
                    </div>
                </div>
    <?php }
                        }
                    } else {
                        echo "no hay imagenes disponibles";
                    }
    ?>


</div>