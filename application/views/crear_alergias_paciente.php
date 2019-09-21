<div class="container">
    <h1 class="text-center">ALERGIAS</h1>
    <div class="row p-4">
        <h2 class="text">Alergias</h1>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr class="bg-primary">
                        <th class="text-light" scope="col">Nombre</th>
                        <th class="text-light" scope="col">Modificar</th>
                        <th class="text-light" scope="col">Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ( $alergias as $alergia ): ?>
                    <tr>
                        <?php echo  '<td>'.$alergia['nombre'].'</td>'?>
                        <td><p><a  class="btn btn-warning" href="<?php echo site_url('alergia/administrarAlergias/modificar/'.$alergia['codigoAlergia']); ?>">Modificar</a></p></td>
                        <td><p><a  class="btn btn-danger" href="<?php echo site_url('alergia/administrarAlergias/eliminar/'.$alergia['codigoAlergia'].'/'.$codigoPaciente); ?>">Eliminar</a></p></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <td><p><a  class="btn btn-primary btn-block" href="<?php echo site_url('alergia/administrarAlergias/crear/'.$codigoPaciente); ?>">Crear Alergia</a></p></td>
    <td><p><a  class="btn btn-primary btn-block" href="<?php echo site_url('referencias/administrarReferencias/'.$codigoPaciente); ?>">Agregar Referencias</a></p></td>
    <button type="submit" class="btn btn-primary btn-block" onclick="location.href='<?php echo base_url();?>pacientes'">Finalizar</button>
</div>