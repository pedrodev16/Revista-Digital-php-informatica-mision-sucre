  <div class="card mb-4">
      <div class="card-header">Buscar</div>
      <div class="card-body">
          
          	<form action="<?php echo constant('URL'); ?>buscador/buscar/" method="GET">
          		<div class="input-group">
              <input class="form-control" type="text" name="buscar" placeholder="Buscar Post" aria-label="Enter search term..." aria-describedby="button-search" />
              <button class="btn btn-primary" id="button-search" type="submit">Buscar</button>
               </div>
              </form>
         
      </div>
  </div>