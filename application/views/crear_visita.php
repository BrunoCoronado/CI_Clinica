<?php echo validation_errors(); ?>
<?php echo form_open('visitas/administrarVisitas/crear/'); ?>
    <div class="row">
        <div class="col">
            <div class="container-fluid">
                <h2 class="text">Nueva Visita</h1>
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group">
                                <label>Fecha</label>
                                <input type="text" class="form-control" placeholder="Fecha" name="fecha">
                            </div> 
                            <div class="form-group">
                                <label>Motivo</label>
                                <input type="text" class="form-control" placeholder="Motivo" name="motivo">
                            </div> 
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group">
                                <label>Paciente</label>
                                <select name="codigoPaciente" class="form-control">
                                <?php foreach ( $pacientes as $paciente ): ?>
                                    <?php echo  '<option value="'.$paciente['codigoPaciente'].'">'.$paciente['nombre'].'</option>'?> 
                                <?php endforeach; ?>
                                </select>
                            </div> 
                        </div>
                    </div>
                <input type="submit" class="btn btn-primary btn-block" name="submit" value="Crear Visita"/>
            </div>
        </div>
    </div>
</form>