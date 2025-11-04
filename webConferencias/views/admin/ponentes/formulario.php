<fieldset class="formulario__fieldset">
    <legend class="formulario__legend">Información personal</legend>

    <div class="formulario__campo">
        <label for="nombre" class="formulario__label">Nombre</label>
        <input
            type="text"
            class="formulario__input"
            name="nombre"
            id="nombre"
            placeholder="Nombre ponente"
            value="<?php echo $ponente->nombre ?? ''; ?>">
    </div>

    <div class="formulario__campo">
        <label for="apellido" class="formulario__label">Apellido</label>
        <input
            type="text"
            class="formulario__input"
            name="apellido"
            id="apellido"
            placeholder="Apellido ponente"
            value="<?php echo $ponente->apellido ?? ''; ?>">
    </div>

    <div class="formulario__campo">
        <label for="ciudad" class="formulario__label">Ciudad</label>
        <input
            type="text"
            class="formulario__input"
            name="ciudad"
            id="ciudad"
            placeholder="Ciudad ponente" value="<?php echo $ponente->ciudad ?? ''; ?>">
    </div>

    <div class="formulario__campo">
        <label for="pais" class="formulario__label">País</label>
        <input
            type="text"
            class="formulario__input"
            name="pais"
            id="pais"
            placeholder="País ponente"
            value="<?php echo $ponente->pais ?? ''; ?>">
    </div>

    <div class="formulario__campo">
        <label for="imagen" class="formulario__label">Imagen</label>
        <input
            type="file"
            class="formulario__input formulario__input--file"
            name="imagen"
            id="imagen"
            accept=".jpg, .jpeg, .png">
    </div>

</fieldset>

<fieldset class="formulario__fieldset">
    <legend class="formulario__legend">Información extra</legend>

    <div class="formulario__campo">
        <label for="tags_input" class="formulario__label">Áreas de experiencia (separadas por coma)</label>
        <input
            type="text"
            class="formulario__input"
            id="tags_input"
            placeholder="Ej. JavaScript, CSS, HTML, Python"
        >
        <div id="tags" class="formulario__listado"></div>
        <input type="hidden" name="tags" value="<?php echo $ponente->tags ?? ''; ?>">
    
    </div>
    
</fieldset>