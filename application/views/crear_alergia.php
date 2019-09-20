<?php echo validation_errors(); ?>
<?php echo form_open('alergia/administrarAlergias/crear/'.$codigoPaciente); ?>
    <div class="row">
        <div class="col">
            <div class="container-fluid">
                <h2 class="text">Nueva Alergia</h1>
                    <div class="row">
                        <div class="col-sm-12 col-md-12">
                            <?php echo  '<input type="hidden" class="form-control" name="codigoPaciente" value='.$codigoPaciente.'>'?>
                            <div class="form-group">
                                <label>Nombre</label>
                                <input type="text" class="form-control" placeholder="Nombre" name="nombre">
                            </div> 
                        </div>
                    </div>
                <input type="submit" class="btn btn-primary btn-block" name="submit" value="Crear Alergia"/>
            </div>
        </div>
    </div>
</form>