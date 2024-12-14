<nav class="navbar navbar-expand-lg navbar-dark bg-red" style="background: #7a72fa;">
  <div class="container px-5">

    <a class="navbar-brand" href="<?php echo constant('URL'); ?>">
      <img src="<?php echo constant('URL'); ?>public/img/logo.gif" alt="INFOSUCRE" srcset="" style="
    width: 70px;
    /* position: absolute; */
">INFOSUCRE</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
        <li class="nav-item active">
          <a class="nav-link" href="<?php echo constant('URL');
                                    ?>home">Inicio<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo constant('URL');
                                    ?>addNew">Nueva Publicación</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo constant('URL');
                                    ?>newsList/view">Papelera</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo constant('URL');
                                    ?>categorias/view">categorias</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo constant('URL');
                                    ?>signOut">Salir</a>
        </li>
      </ul>
    </div>
  </div>
</nav>