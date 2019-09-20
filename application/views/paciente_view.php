<h2>Pacientes</h2>

<?php foreach ( $pacientes as $paciente ): ?>

        <h3><?php echo $paciente['nombre']; ?></h3>
        <div class="main">
                <?php echo $paciente['codigoPaciente']; ?>
                <?php echo $paciente['dpi']; ?>
                <?php echo $paciente['nombre']; ?>
                <?php echo $paciente['sexo']; ?>
                <?php echo $paciente['telefono']; ?>
                <?php echo $paciente['correo']; ?>
        </div>
<?php endforeach; ?>