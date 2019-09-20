<div class="row">
    <div class="col">
        <div class="container-fluid">
            <h2 class="text">Ver Paciente</h1>
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <div class="form-group">
                        <label>Nombre</label>
                        <?php echo  '<input readonly type="text" class="form-control" placeholder="Nombre" name="nombre" value='.$paciente['nombre'].'>'?>
                    </div> 
                    <div class="form-group">
                        <label>DPI</label>
                        <?php echo  '<input readonly type="number" class="form-control" placeholder="DPI" name="dpi" value='.$paciente['dpi'].'>'?>
                    </div> 
                    <div class="form-group">
                        <label>Sexo</label>
                        <select readonly class="form-control">
                            <option>M</option>
                            <option>F</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="form-group">
                        <label>Telefono</label>
                        <?php echo  '<input readonly type="number" class="form-control" placeholder="Telefono" name="telefono" value='.$paciente['telefono'].'>'?>
                    </div>
                    <div class="form-group">
                        <label>Correo</label>
                        <?php echo  '<input  readonly type="mail" class="form-control" placeholder="Correo" name="correo" value='.$paciente['correo'].'>'?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>