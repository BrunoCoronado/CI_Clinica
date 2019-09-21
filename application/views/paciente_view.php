<div class="container">
    <h1 class="text-center">PACIENTES</h1>
    <div class="row p-4">
        <h2 class="text">Pacientes</h1>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr class="bg-primary">
                        <th class="text-light" scope="col">DPI</th>
                        <th class="text-light" scope="col">Nombre</th>
                        <th class="text-light" scope="col">Sexo</th>
                        <th class="text-light" scope="col">Teléfono</th>
                        <th class="text-light" scope="col">Correo</th>
                        <th class="text-light" scope="col">Detalles</th>
                        <th class="text-light" scope="col">Modificar</th>
                        <th class="text-light" scope="col">Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ( $pacientes as $paciente ): ?>
                    <tr>
                        <?php echo  '<td>'.$paciente['dpi'].'</td>'?>
                        <?php echo  '<td>'.$paciente['nombre'].'</td>'?>
                        <?php echo  '<td>'.$paciente['sexo'].'</td>'?>
                        <?php echo  '<td>'.$paciente['telefono'].'</td>'?>
                        <?php echo  '<td>'.$paciente['correo'].'</td>'?>
                        <td><p><a  class="btn btn-success" href="<?php echo site_url('pacientes/ver/'.$paciente['codigoPaciente']); ?>">Detalles</a></p></td>
                        <td><p><a  class="btn btn-warning" href="<?php echo site_url('pacientes/modificar/'.$paciente['codigoPaciente']); ?>">Modificar</a></p></td>
                        <td><p><a  class="btn btn-danger" href="<?php echo site_url('pacientes/eliminar/'.$paciente['codigoPaciente']); ?>">Eliminar</a></p></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <button type="submit" class="btn btn-primary btn-block" onclick="location.href='<?php echo base_url();?>/paciente/crear'">Crear Paciente</button>
</div>