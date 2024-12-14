  <div class="card mb-4">
    <div class="card-header">POST</div>
    <div class="card-body">
      <ul class="list-group list-group-flush">
        <?php
        $processedDates = [];
        if (!empty($rows)) {
          foreach ($rows as $row) {
            $date = substr($row['DATE'], 0, 10); // Extraer la fecha en el formato deseado
            if (!in_array($date, $processedDates)) {
              $processedDates[] = $date; // Añadir la fecha al array de procesadas
        ?>
              <form action="<?php echo constant('URL'); ?>buscador/fecha/" method="POST">
                <input type="text" hidden name="fecha" value="<?= $row['DATE'] ?>">
                <li class="list-group-item">
                  <button type="submit"><?= $row['DATE'] ?></button>
                  <!-- <a href="<?php echo constant('URL'); ?>buscador/fecha/<?= $row['DATE'] ?>"><?= $row['DATE'] ?></a> -->
                </li>
              </form>
        <?php
            }
          }
        }
        ?>
      </ul>
    </div>
  </div>