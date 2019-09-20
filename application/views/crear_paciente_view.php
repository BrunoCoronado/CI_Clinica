<?php echo validation_errors(); ?>
<?php echo form_open('paciente/crear'); ?>
    <div class="row">
        <div class="col">
            <div class="container-fluid">
                <h2 class="text">Nuevo Paciente</h1>
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group">
                                <label>Nombre</label>
                                <input type="text" class="form-control" placeholder="Nombre" name="nombre">
                            </div> 
                            <div class="form-group">
                                <label>DPI</label>
                                <input type="number" class="form-control" placeholder="DPI" name="dpi">
                            </div> 
                            <div class="form-group">
                                <label>Sexo</label>
                                <select class="form-control">
                                    <option>M</option>
                                    <option>F</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group">
                                <label>Telefono</label>
                                <input type="number" class="form-control" placeholder="Telefono" name="telefono">
                            </div>
                            <div class="form-group">
                                <label>Correo</label>
                                <input type="mail" class="form-control" placeholder="Correo" name="correo">
                            </div>
                        </div>
                    </div>
                <input type="submit" class="btn btn-primary btn-block" name="submit" value="Crear Paciente"/>
            </div>
        </div>
    </div>
</form>