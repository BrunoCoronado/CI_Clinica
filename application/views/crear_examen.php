<?php echo validation_errors(); ?>
<?php echo form_open('examenes/administrarExamenes/crear/'.$codigoVisita); ?>
    <div class="row">
        <div class="col">
            <div class="container-fluid">
                <h2 class="text">Nuevo Examen</h1>
                    <?php echo  '<input type="hidden" class="form-control" name="codigoVisita" value='.$codigoVisita.'>'?>
                    <div class="row">
                        <div class="col-sm-12 col-md-12">
                            <div class="form-group">
                                <label>Nombre</label>
                                <input type="text" class="form-control" placeholder="Nombre" name="nombre">
                            </div> 
                            <div class="form-group">
                                <label>Detalle</label>
                                <input type="text" class="form-control" placeholder="Detalle" name="detalle">
                            </div> 
                        </div>
                    </div>
                <input type="submit" class="btn btn-primary btn-block" name="submit" value="Crear Examen"/>
            </div>
        </div>
    </div>
</form>