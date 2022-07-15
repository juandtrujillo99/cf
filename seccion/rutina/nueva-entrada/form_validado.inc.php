<div class="form-register__body">
                <div class="step active" id="step-1">
                    <div class="step__header">
                        <h2 class="step__title">Intesidad y video</h2>
                    </div>
                    <div class="step__body">
                        <label for="intensidad">Intensidad</label>
                        <br>
                        <input type="radio" name="intensidad" class="step__input" id="intensidad1" value="Baja">
                        <label for="intensidad1">Baja</label>

                        <input type="radio" name="intensidad" class="step__input" id="intensidad2" value="Normal">
                        <label for="intensidad2">Normal</label>

                        <input type="radio" name="intensidad" class="step__input" id="intensidad3" value="Alta">
                        <label for="intensidad3">Alta</label>
                        <br><br>
                        <label for="video">Código del video</label>
                        <input id="video" type="text" name="video" placeholder="Código" class="validate step__input" onkeyup="validar2()" required minlength="2" maxlength="15" <?php $validador -> mostrar_video(); ?> >
                        <input type="text" name="url" class="d-none step__input">
                    </div>
                    <div class="step__footer">
                        <button type="button" class="step__button step__button--next" data-to_step="2" data-step="1">Siguiente</button>
                    </div>
                </div>
<?php /*paso 3*/?>
                <div class="step" id="step-2">
                    <div class="step__header">
                        <h2 class="step__title">Descripción</h2>
                    </div>
                    <div class="step__body">
                        <input type="text" placeholder="Título" class="validate step__input" id="titulo" name="titulo" onkeyup="validar1()" required minlength="3" maxlength="25"
                        <?php $validador -> mostrar_titulo();?>><?php $validador -> mostrar_error_titulo();?>
                        <textarea rows="6" placeholder="Descripción" class="validate step__input" id="texto" name="texto" onkeyup="validar1()" required minlength="110"><?php $validador -> mostrar_texto();?></textarea> 
                        <?php $validador -> mostrar_error_texto();?> 
                    </div>
                    <div class="step__footer">
                        <button type="button" class="step__button step__button--back" data-to_step="1" data-step="2">Regresar</button>
                        <button type="button" class="step__button step__button--next" data-to_step="3" data-step="2">Siguiente</button>
                    </div>
                </div>
<?php /*paso 3*/?>
                <div class="step" id="step-3">
                    <div class="step__header">
                        <h2 class="step__title">Portada</h2>
                    </div>
                    <div class="step__body">   
                        <div class="form-group" id="upload_form">
                            <?php
                            $rutaFoto = RUTA_IMG."rutinas/".$validador -> obtener_imagen();
                            $foto = $validador -> obtener_imagen();

                            if(!isset($rutaFoto)||empty($foto)){
                                ?>
                                <h6><font color="grey">* Selecciona una imagen y luego presiona el boton subir.</font></h6>             
                                <label for="file1" id="label-archivo" class="btn btn-secundario"><span class="material-icons">add_a_photo</span></label>
                                <input type="file" name="file1" id="file1" class="d-none">      
                                <input name="imagen" class="d-none step__input">                            
                            <?php
                            }else{
                                ?>
                                <h4><font color="grey">Ya seleccionaste una imagen</font></h4>                  
                                <input type="text" name="imagen" <?php $validador -> mostrar_imagen(); ?>>
                                <br><br>
                                <h4>Cambiar foto</h4>
                                <label for="file1" id="label-archivo" class="btn btn-secundario" ><span class="material-icons">add_a_photo</span></label>
                                <input type="file" name="file1" id="file1" class="d-none">
                                <?php
                            }
                            ?>                          
                            <input type="button" value="Subir" name="guardar_imagen" id="guardar_imagen" onclick="subirImagen()" class="btn btn-principal">
                            <progress id="progressBar" class="barra-progreso" value="0" max="100" style="width:100%;height: 0.5em;"></progress>
                            <h4 id="status"></h4>                                       
                        </div>
                    </div>
                    <div class="step__footer">
                        <button type="button" class="step__button step__button--back" data-to_step="2" data-step="3">Regresar</button>
                        <button type="submit" class="step__button" name="enviar">Guardar</button>
                    </div>
                </div>
            </div>