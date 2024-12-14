<div class="container">

    <div class="container mt-5">
        <h2>Formulario de Contacto</h2>
        <form id="contactForm">
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>
            <div class="form-group">
                <label for="email">Correo Electrónico</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group"> <label for="mensaje">Mensaje</label>
                <textarea class="form-control" id="mensaje" name="mensaje" rows="3" required>
        </textarea>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
        <div id="mensaje"></div>


    </div>
</div>