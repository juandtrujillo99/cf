<div class="form-register__body">
    <div class="step active" id="step-1">
        <div class="step__header">
            <h4 class="step__title textoBold">Intensidad y video</h4>
        </div>
        <div class="step__body">
            <label for="intensidad">Intensidad</label>
            <br>
            <input type="radio" name="intensidad" class="step__input" id="intensidad1" value="Baja" required>
            <label for="intensidad1">Baja</label>

            <input type="radio" name="intensidad" class="step__input" id="intensidad2" value="Normal">
            <label for="intensidad2">Normal</label>

            <input type="radio" name="intensidad" class="step__input" id="intensidad3" value="Alta">
            <label for="intensidad3">Alta</label>
            <br><br>
            <label for="video">Código del video</label>
            <input id="video" type="text" name="video" placeholder="Código" class="validate step__input" onkeyup="validar2()" required minlength="2" maxlength="15"/>
            <input type="text" name="url" class="d-none step__input">
        </div>
        <div class="step__footer">
            <input type="button" class="step__button step__button--next btn btn-principal-animado" data-to_step="2" data-step="1" value="Siguiente">
        </div>
    </div>
<?php /*paso 3*/?>
    <div class="step" id="step-2">
        <div class="step__header">
            <h4 class="step__title textoBold">Descripción</h4>
        </div>
        <div class="step__body">
            <input type="text" placeholder="Título" class="validate step__input" id="titulo" name="titulo" onkeyup="validar1()" required minlength="3" maxlength="25"/>
            <br>
            <textarea placeholder="Descripción" class="validate step__input materialize-textarea" id="texto" name="texto" onkeyup="validar1()" required minlength="110"></textarea>   
        </div>
        <div class="step__footer">
            <button type="button" class="step__button step__button--back btn btn-secundario" data-to_step="1" data-step="2">Regresar</button>
            <button type="button" id="boton-siguiente" class="step__button step__button--next btn btn-principal-animado" data-to_step="3" data-step="2">Siguiente</button>
        </div>
    </div>
<?php /*paso 3*/?>
    <div class="step" id="step-3">
        <div class="step__header">
            <h4 class="step__title textoBold">Portada</h4>
        </div>
        <div class="step__body">   
            <div class="form-group" id="upload_form">
                <h6><font color="grey">* Selecciona una imagen y luego presiona el boton subir.</font>
                </h6>
                <br>
                <label for="file1" id="label-archivo" class="btn btn-secundario"><span class="material-icons">add_a_photo</span></label>
                <input type="file" name="file1" id="file1" class="d-none" required>
                <input type="button" value="Subir" name="guardar_imagen" id="guardar_imagen" onclick="subirPortada()" class="btn btn-principal">
                <progress id="progressBar" class="barra-progreso" value="0" max="100" style="width:100%;height: 0.5em;"></progress>
                <h4 id="status"></h4>               
            </div>
        </div>
        <div class="step__footer">
            <button type="button" class="step__button step__button--back btn btn-secundario" data-to_step="2" data-step="3">Regresar</button>
            <button type="submit" class="step__button btn btn-principal-animado" name="enviar">Guardar</button>
        </div>
    </div>
</div>