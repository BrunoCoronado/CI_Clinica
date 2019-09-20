<div class="container">
    <h1 class="text-center">VISITAS</h1>
    <div class="row p-4">
        <h2 class="text">Visitas</h1>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr class="bg-primary">
                        <th class="text-light" scope="col">Fecha</th>
                        <th class="text-light" scope="col">Motivo</th>
                        <th class="text-light" scope="col">Paciente</th>
                        <th class="text-light" scope="col">Modificar</th>
                        <th class="text-light" scope="col">Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ( $visitas as $visita ): ?>
                    <tr>
                        <?php echo  '<td>'.$visita['fecha'].'</td>'?>
                        <?php echo  '<td>'.$visita['motivo'].'</td>'?>
                        <?php echo  '<td>'.$visita['codigoPaciente'].'</td>'?>
                        <td><p><a  class="btn btn-warning" href="<?php echo site_url('visitas/administrarVisitas/modificar/cargar/'.$visita['codigoVisita']); ?>">Modificar</a></p></td>
                        <td><p><a  class="btn btn-danger" href="<?php echo site_url('visitas/administrarVisitas/eliminar/'.$visita['codigoVisita']); ?>">Eliminar</a></p></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <td><p><a  class="btn btn-primary btn-block" href="<?php echo site_url('visitas/administrarVisitas/crear/'); ?>">Crear Visita</a></p></td>
</div>