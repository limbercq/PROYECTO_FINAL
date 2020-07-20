<nav class="navbar navbar-expand-lg navbar-light  bg-light bg-primary" > 
    <a class="navbar-brand tipografia_1" href="index.php"><h3>Hotel</h3></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Inicio <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php#habitacines">Habiataciones</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contactos</a>
        </li>
        <li class="nav-item"> 
            <a class="btn btn-outline-info my-2 my-sm-0" data-toggle="modal" data-target="#exampleModal" >Iniciar sesion</a>
          
        </li>
      </ul>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h3 class="modal-title tipografia_1" id="exampleModalLabel">Inciar Sesion</h3>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form class="was-validated" novalidate>
              <div class="form-row">
                <div class="col-md-12">
                  <label for="validationCustom01" class="text-info">Correo</label>
                  <input type="text" class="form-control" id="validationCustom01" name="user" required>
                  <div class="invalid-feedback">
                    Ingrese el correo
                  </div>
                </div>
                <div class="col-md-12">
                  <label for="validationCustom02" class="text-info">Contraseña</label>
                  <input type="password" class="form-control" id="validationCustom02" name="password" required>
                  <div class="invalid-feedback">
                    Ingrese la contraseña
                  </div>
                </div>
              </div>              
              <div class="modal-footer pb-0">
                <button type="button" class="btn btn-outline-secondary btn-block " data-dismiss="modal">Cerrar</button>
                <!-- <button type="submit" class="btn btn-outline-info btn-block m-0">Iniciar Sesion</button> -->
                <a  type="submit" class="btn btn-outline-info btn-block m-0" href="home.php">Iniciar Sesion</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </nav>