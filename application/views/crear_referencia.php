<?php echo validation_errors(); ?>
<?php echo form_open('referencias/administrarReferencias/crear/'.$codigoPaciente); ?>
    <div class="row">
        <div class="col">
            <div class="container-fluid">
                <h2 class="text">Nueva Referencia</h1>
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <?php echo  '<input type="hidden" class="form-control" name="codigoPaciente" value='.$codigoPaciente.'>'?>
                            <div class="form-group">
                                <label>Nombre</label>
                                <input type="text" class="form-control" placeholder="Nombre" name="nombre">
                            </div> 
                            <div class="form-group">
                                <label>Parentezco</label>
                                <input type="text" class="form-control" placeholder="Parentezco" name="parentezco">
                            </div> 
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group">
                                <label>Telefono</label>
                                <input type="number" class="form-control" placeholder="Telefono" name="telefono">
                            </div> 
                            <div class="form-group">
                                <label>Correo</label>
                                <input type="email" class="form-control" placeholder="Correo" name="correo">
                            </div> 
                        </div>
                    </div>
                <input type="submit" class="btn btn-primary btn-block" name="submit" value="Crear Referencia"/>
            </div>
        </div>
    </div>
</form>