 <div class="card mb-4">
     <div class="card-header">Categorias</div>
     <div class="card-body">
         <div class="row">
             <div class="col-sm-6">
                 <ul class="list-unstyled mb-0">
                     <style>
                         .btn_categoria {
                             width: 100%;
                             margin-bottom: 2px;
                             color: #fff;
                         }
                     </style>

                     <?php
                        $x = 1;
                        if (!empty($rows2)) {
                            foreach ($rows2 as $row) {
                                if ($x == 2) {
                        ?>

                                 <li>
                                     <form action="<?php echo constant('URL'); ?>buscador/Categorias/" method="POST">
                                         <input type="text" hidden name="categoria" value="<?= $row['nombre'] ?>">
                                         <button style="" class="  bg-red btn btn_categoria" type="submit"><?= $row['nombre'] ?></button>
                                     </form>
                                 </li>


                     <?php
                                    $x--;
                                } else {
                                    $x++;
                                }
                            }
                        }
                        ?>
                 </ul>
             </div>
             <div class="col-sm-6">
                 <ul class="list-unstyled mb-0">
                     <?php
                        $x = 2;
                        if (!empty($rows2)) {
                            foreach ($rows2 as $row) {
                                if ($x == 2) {
                        ?>
                                 <li>
                                     <form action="<?php echo constant('URL'); ?>buscador/Categorias/" method="POST">
                                         <input type="text" hidden name="categoria" value="<?= $row['nombre'] ?>">
                                         <button class="btn  bg-red btn_categoria" type="submit"><?= $row['nombre'] ?></button>
                                     </form>
                                 </li>


                     <?php
                                    $x--;
                                } else {
                                    $x++;
                                }
                            }
                        }
                        ?>
                 </ul>
             </div>
         </div>
     </div>
 </div>