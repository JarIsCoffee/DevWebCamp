<fieldset>
    <legend>Información personal</legend>
        <div class="formulario__campo">
            <label for="nombre" class="formulario__label">Nombre</label>
            <input 
                type="text"
                class="formulario__input" 
                name="nombre" 
                id="nombre" 
                placeholder="Nombre ponente"
                value="<?php echo $ponente->nombre ?? ''; ?>"
         >
         </div>

         <div class="formulario__campo">
            <label for="apellido" class="formulario__label">Apellido</label>
            <input 
                type="text"
                class="formulario__input" 
                name="apellido" 
                id="apellido" 
                placeholder="Apellido ponente"
                value="<?php echo $ponente->apellido ?? ''; ?>"
                >
            </div>
</fieldset>