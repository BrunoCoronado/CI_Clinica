<?php echo validation_errors(); ?>
<?php echo form_open('visitas/administrarVisitas/modificar/'.$visita['codigoVisita']); ?>
    <div class="row">
        <div class="col">
            <div class="container-fluid">
                <h2 class="text">Nueva Visita</h1>
                <?php echo  '<input type="hidden" class="form-control" name="codigoVisita" value='.$visita['codigoVisita'].'>'?>
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group">
                            <label>Fecha</label>
                            <?php echo  '<input type="text" class="form-control" placeholder="Fecha" name="fecha" value="'.$visita['fecha'].'">'?>
                        </div> 
                        <div class="form-group">
                            <label>Motivo</label>
                            <?php echo  '<input type="text" class="form-control" placeholder="Motivo" name="motivo" value="'.$visita['motivo'].'">'?>
                        </div> 
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group">
                            <label>Paciente</label>
                            <?php echo  '<input type="number" class="form-control" placeholder="Paciente" name="codigoPaciente" value="'.$visita['codigoPaciente'].'">'?>
                        </div> 
                    </div>
                </div>
                <input type="submit" class="btn btn-primary btn-block" name="submit" value="Modificar Visita"/>
            </div>
        </div>
    </div>
</form>