<div class="container">
    <h1 class="text-center">EXAMENES</h1>
    <div class="row p-4">
        <h2 class="text">Examenes</h1>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr class="bg-primary">
                        <th class="text-light" scope="col">Nombre</th>
                        <th class="text-light" scope="col">Detalle</th>
                        <th class="text-light" scope="col">Codigo Visita</th>
                        <th class="text-light" scope="col">Modificar</th>
                        <th class="text-light" scope="col">Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ( $examenes as $examen ): ?>
                    <tr>
                        <?php echo  '<td>'.$examen['nombre'].'</td>'?>
                        <?php echo  '<td>'.$examen['detalle'].'</td>'?>
                        <?php echo  '<td>'.$examen['codigoVisita'].'</td>'?>
                        <td><p><a  class="btn btn-warning" href="<?php echo site_url('examenes/administrarExamenes/modificar/'.$examen['codigoExamen']); ?>">Modificar</a></p></td>
                        <td><p><a  class="btn btn-danger" href="<?php echo site_url('examenes/administrarExamenes/eliminar/'.$examen['codigoExamen'].'/'.$codigoVisita); ?>">Eliminar</a></p></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <td><p><a  class="btn btn-primary btn-block" href="<?php echo site_url('examenes/administrarExamenes/crear/'.$codigoVisita); ?>">Crear Examen</a></p></td>
    <td><p><a  class="btn btn-primary btn-block" href="<?php echo site_url('visitas/administrarVisitas'); ?>">Finalizar</a></p></td>
</div>