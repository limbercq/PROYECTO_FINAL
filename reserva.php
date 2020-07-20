<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <style type="text/css">
        #regiration_form fieldset:not(:first-of-type) {
            display: none;
        }
    </style>
    <style type="text/css" media="screen, print">
     @font-face {font-family: Lobster-Regular; src: url(font/Lobster-Regular.ttf);}
    </style>
    <title>Reserva</title>
</head>

<body>
    
  <?php 
       include_once('menu_1.php')
  ?>
  <div class="container">
    
    <h1 class="tipografia_1 fw-50">Reserva de Habiatacion</h1>       

      <form id="regiration_form" class="was-validated" novalidate action="action.php" method="post">
          <!-- habitacion -->
          <fieldset>
              <h2 class="tipografia_1">Paso 1/3: Descripcion de la Habiatacion</h2>
              <div class="progress mb-3">
                  <div class="progress-bar progress-bar-striped bg-success active" role="progressbar" aria-valuemin="0"
                      aria-valuemax="100"></div>
              </div>
              <div class="card mb-3">
                  <img class="card-img-top" src="img/m-dof1420.jpg" alt="Card image cap" style="height: 500px;">
                  <div class="card-body">
                      <h5 class="card-title tipografia_1">Habitacion imperial</h5>  
                      <div class="row">
                      <div class="col-md-6">
                        <li><span class="text-info">Precio :</span> 300 Bs.</li>
                        <li><span class="text-info">Tipo : </span> Matrimonial</li>
                        <li><span class="text-info">Nro Camas :</span> 1</li>
                        <div class="form-row">
                          <div class="col-md-6">
                            <label for="validationCustom01" class="text-info">Fecha de inicio</label>
                            <input type="date" class="form-control" id="validationCustom01" name="nombre" required>
                          </div>
                          <div class="col-md-6">
                            <label for="validationCustom02" class="text-info">Fecha final</label>
                            <input type="date" class="form-control" id="validationCustom02" name="apellido" required>
                          </div>
                        </div>  
                      </div> 
                      <div class="col-md-6 ">
                        <h5 class="text-info">Politicas de la Empresa</h5>
                        <ul>
                          <li>La reserva se hacen con el 5% del costo de la habitacion</li>
                          <li>Se podra realizar la reprogramacion de la fecha solo una vez</li>
                          <li>No hay reembolso de la Reserva</li>
                        </ul>
                        <div class="custom-control custom-checkbox mb-3">
                          <input type="checkbox" class="custom-control-input" id="customControlValidation1" required>
                          <label class="custom-control-label" for="customControlValidation1">Terminos y condiciones</label>
                          <div class="invalid-feedback">Acepte el termino de condiciones</div>
                        </div>
                      </div>
                      </div>            
                  </div>              
              </div>
              <div class=""> 
              <input type="button" name="data[password]" class="next btn btn-info col-md-6 offset-md-6" value="Siguiente" />
            </div>
          </fieldset>
         <!-- DAtos -->
          <fieldset>
            <h2 class="tipografia_1">Paso 2/3: Datos Personales</h2>
            <div class="progress mb-3">
                <div class="progress-bar progress-bar-striped bg-success active" role="progressbar" aria-valuemin="0"
                    aria-valuemax="100"></div>
            </div>
              
            <div class="form-row">
              <div class="col-md-4">
                <label for="validationCustom01" class="text-info">Nombre</label>
                <input type="text" class="form-control" id="validationCustom01" name="nombre" required>
                <div class="invalid-feedback">
                  Ingrese su nombre
                </div>
              </div>
              <div class="col-md-4">
                <label for="validationCustom02" class="text-info">Apellido</label>
                <input type="text" class="form-control" id="validationCustom02" name="apellido" required>
                <div class="invalid-feedback">
                  Ingrese sus apellidos
                </div>
              </div>
              
              <div class="col-md-4">
                <label for="validationCustom02" class="text-info">Carnet/Pasaporte</label>
                <input type="text" class="form-control" id="validationCustom02" name="carnte" required>
                <div class="invalid-feedback">
                  Ingrese su carnet o pasaporte
                </div>
              </div>
            </div> 
            <div class="form-row">
              <div class="col-md-4">
                <label for="validationCustom01" class="text-info">Nacionalidad</label>
                <input type="text" class="form-control" id="validationCustom01" name="nombre" required>
                <div class="invalid-feedback">
                  Ingrese su Nacionalidad
                </div>
              </div>
              <div class="col-md-4">
                <label for="validationCustom02" class="text-info">Correo</label>
                <input type="mail" class="form-control" id="validationCustom02" name="apellido" required>
                <div class="invalid-feedback">
                  Ingrese su correo electronico
                </div>
              </div>
              
              <div class="col-md-4">
                <label for="validationCustom02" class="text-info">Contraseña</label>
                <input type="password" class="form-control" id="validationCustom02" name="carnte" required>
                <div class="invalid-feedback">
                  Ingrese una contraseña
                </div>
              </div>
            </div>
            <div class="form-row mt-4">
              <input type="button" name="previous" class="previous btn btn-outline-secondary btn-block  col-md-6" value="Previo" />
              <input type="button" name="next" class="next btn btn-outline-info btn-block col-md-6 m-0 " value="Siguiente" />
            </div>
          </fieldset>
        <!-- Tarjeta -->
          <fieldset>
            <h2 class="tipografia_1">Paso 3/3: Tarjeta de Credito</h2>
            <div class="progress mb-3">
                <div class="progress-bar progress-bar-striped bg-success active" role="progressbar" aria-valuemin="0"
                    aria-valuemax="100"></div>
            </div>
            <div class="row">
              <div class="col-4">
                <img src="img/tarjeta-de-credito.jpg" class="img-fluid" alt="">
              </div>
              <div class="col-8">

                <div class="form-row">
                  <div class="col-md-6">
                    <label for="validationCustom01" class="text-info">Nro de Tarjeta de Credito</label>
                    <input type="number" class="form-control" id="validationCustom01" name="nombre" required>
                    <div class="invalid-feedback">
                      Ingrese el numero de tarjeta
                    </div>
                  </div>
                  <div class="col-md-6">
                    <label for="validationCustom02" class="text-info">Nombre</label>
                    <input type="text" class="form-control" id="validationCustom02" name="apellido" required>
                    <div class="invalid-feedback">
                      Ingrese el nombre y su apellido
                    </div>
                  </div>
                </div>

                <div class="form-row">
                  <div class="col-md-3">
                    <label for="validationCustom01" class="text-info">Fecha de</label>
                    <input type="number" class="form-control" id="validationCustom01" name="nombre" required>
                    <div class="invalid-feedback">
                      mes
                    </div>
                  </div>
                  <div class="col-md-3">
                    <label for="validationCustom02" class="text-info">Expiracion</label>
                    <input type="number" class="form-control" id="validationCustom02" name="apellido" required>
                    <div class="invalid-feedback">
                      año
                    </div>
                  </div>
                  
                  <div class="col-md-3 offset-md-3">
                    <label for="validationCustom02" class="text-info">CVC</label>
                    <input type="text" class="form-control" id="validationCustom02" name="apellido" required>
                    <div class="invalid-feedback">
                      numero
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-row">
              <input type="button" name="previous" class="previous btn btn-outline-secondary btn-block col-md-6" value="Previo" />
              <input type="submit" name="submit" class="submit btn btn-outline-success btn-block col-md-6 m-0" value="Enviar" id="submit_data" />
            </div>
            </fieldset>
      </form>
  </div>
    
  <?php 
         include('footer.php')
    ?>
</body>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/scrip.js"></script>
</html>