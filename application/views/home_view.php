<div class="container">
    <div class="row pt-4">
        <h1 class="text-center">Menu</h1>
    </div>
    <div class="row">
        <div class="col-sm-12 col-md-4 pt-4">
            <div class="card border-primary">
                <img class="card-img-top p-2" src="../assets/images/usuarios.png" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Pacientes</h5>
                    <p class="card-text">Listado de pacientes registrados.</p>
                    <a href="<?php echo site_url('pacientes'); ?>" class="btn btn-primary">Administrar</a>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-4 pt-4">
            <div class="card border-primary">
                <img class="card-img-top p-2" src="../assets/images/cargaMasiva.png" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Visitas</h5>
                    <p class="card-text">Listado de visitas.</p>
                    <a href="<?php echo site_url('visitas/administrarVisitas'); ?>" class="btn btn-primary">Administrar</a>
                </div>
            </div>
        </div>
    </div>
</div>