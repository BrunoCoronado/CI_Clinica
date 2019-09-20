<?php echo validation_errors(); ?>
<?php echo form_open('alergia/administrarAlergias/modificar/'.$alergia['codigoAlergia'].'/'.$alergia['codigoPaciente']); ?>
    <div class="row">
        <div class="col">
            <div class="container-fluid">
                <h2 class="text">Modificar Alergia</h1>
                    <div class="row">
                        <div class="col-sm-12 col-md-12">
                            <?php echo  '<input type="hidden" class="form-control" name="codigoPaciente" value='.$alergia['codigoPaciente'].'>'?>
                            <?php echo  '<input type="hidden" class="form-control" name="codigoAlergia" value='.$alergia['codigoAlergia'].'>'?>
                            <div class="form-group">
                                <label>Nombre</label>
                                <?php echo  '<input type="text" class="form-control" placeholder="Nombre" name="nombre" value="'.$alergia['nombre'].'">'?>
                            </div> 
                        </div>
                    </div>
                <input type="submit" class="btn btn-primary btn-block" name="submit" value="Modificar Alergia"/>
            </div>
        </div>
    </div>
</form>