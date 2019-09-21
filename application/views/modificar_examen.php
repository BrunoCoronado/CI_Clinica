<?php echo validation_errors(); ?>
<?php echo form_open('examenes/administrarExamenes/modificar/'.$examen['codigoExamen'].'/'.$examen['codigoVisita']); ?>
    <div class="row">
        <div class="col">
            <div class="container-fluid">
                <h2 class="text">Modificar Examen</h1>
                    <?php echo  '<input type="hidden" class="form-control" name="codigoVisita" value='.$examen['codigoVisita'].'>'?>
                    <div class="row">
                        <div class="col-sm-12 col-md-12">
                            <div class="form-group">
                                <label>Nombre</label>
                                <?php echo  '<input type="text" class="form-control" placeholder="Nombre" name="nombre" value="'.$examen['nombre'].'">'?>
                            </div> 
                            <div class="form-group">
                                <label>Detalle</label>
                                <?php echo  '<input type="text" class="form-control" placeholder="Detalle" name="detalle" value="'.$examen['detalle'].'">'?>
                            </div> 
                        </div>
                    </div>
                <input type="submit" class="btn btn-primary btn-block" name="submit" value="Modificar Examen"/>
            </div>
        </div>
    </div>
</form>