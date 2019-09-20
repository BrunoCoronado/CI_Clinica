<?php echo validation_errors(); ?>
<?php echo form_open('referencias/administrarReferencias/modificar/'.$referencia['codigoReferencia'].'/'.$referencia['codigoPaciente']) ?>
    <div class="row">
        <div class="col">
            <div class="container-fluid">
                <h2 class="text">Modificar Referencia</h1>
                <?php echo  '<input type="hidden" class="form-control" name="codigoPaciente" value='.$referencia['codigoPaciente'].'>'?>
                <?php echo  '<input type="hidden" class="form-control" name="codigoReferencia" value='.$referencia['codigoReferencia'].'>'?>
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group">
                            <label>Nombre</label>
                            <?php echo  '<input type="text" class="form-control" placeholder="Nombre" name="nombre" value="'.$referencia['nombre'].'">'?>
                        </div> 
                        <div class="form-group">
                            <label>Parentezco</label>
                            <?php echo  '<input type="text" class="form-control" placeholder="Parentezco" name="parentezco" value="'.$referencia['parentezco'].'">'?>
                        </div> 
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group">
                            <label>Telefono</label>
                            <?php echo  '<input type="number" class="form-control" placeholder="Telefono" name="telefono" value="'.$referencia['telefono'].'">'?>
                        </div> 
                        <div class="form-group">
                            <label>Correo</label>
                            <?php echo  '<input type="email" class="form-control" placeholder="Correo" name="correo" value="'.$referencia['correo'].'">'?>
                        </div> 
                    </div>
                </div>
                <input type="submit" class="btn btn-primary btn-block" name="submit" value="Modificar Referencia"/>
            </div>
        </div>
    </div>
</form>