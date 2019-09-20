<div class="container">
    <h1 class="text-center">REFERENCIAS</h1>
    <div class="row p-4">
        <h2 class="text">Referencias</h1>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr class="bg-primary">
                        <th class="text-light" scope="col">Nombre</th>
                        <th class="text-light" scope="col">Parentezco</th>
                        <th class="text-light" scope="col">Telefono</th>
                        <th class="text-light" scope="col">Correo</th>
                        <th class="text-light" scope="col">Modificar</th>
                        <th class="text-light" scope="col">Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ( $referencias as $referencia ): ?>
                    <tr>
                        <?php echo  '<td>'.$referencia['nombre'].'</td>'?>
                        <?php echo  '<td>'.$referencia['parentezco'].'</td>'?>
                        <?php echo  '<td>'.$referencia['telefono'].'</td>'?>
                        <?php echo  '<td>'.$referencia['correo'].'</td>'?>
                        <td><p><a  class="btn btn-warning" href="<?php echo site_url('referencias/administrarReferencias/modificar/'.$referencia['codigoReferencia']); ?>">Modificar</a></p></td>
                        <td><p><a  class="btn btn-danger" href="<?php echo site_url('referencias/administrarReferencias/eliminar/'.$referencia['codigoReferencia'].'/'.$codigoPaciente); ?>">Eliminar</a></p></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <td><p><a  class="btn btn-primary btn-block" href="<?php echo site_url('referencias/administrarReferencias/crear/'.$codigoPaciente); ?>">Crear Referencia</a></p></td>
    <button type="submit" class="btn btn-primary btn-block" onclick="location.href='<?php echo base_url();?>index.php/pacientes'">Finalizar</button>
</div>