<!--  appointment -->
  <div id="appointment" class="appointment-main-block">
    <div class="container">
      <div class="row">
        <div class="section text-center">
          <h3 class="section-heading text-center" style="color: #FFFFFF">Reservar una Cita</h3>
          <p class="sub-heading text-center" style="color: #FFFFFF" >Reservar tu atención el día y la hora que deseas el servicio en nuestro taller, solo ingresa los datos solicitados en el siguiente formulario.</p>
        </div>

        <div class="col-md-4 hidden-sm">
          <div class="appointment-img">
            <img src="images/appointment.jpg" class="img-responsive" alt="Appointment">
          </div>
        </div>
        <div class="col-md-8 col-sm-12">
          <div class="appointment-block">
            <form id="appointment-form" class="appointment-form" method="post" action="appointment.php">                            
              <h5 class="form-heading-title"><span class="form-heading-no">1.</span>Información del vehículo</h5>
              <div class="row">
                <div class="col-sm-4">
                  <div class="dropdown">
                    <button class="btn btn-dropdown dropdown-toggle" type="button" id="service-type" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                      <span class="drp-name" data-bind="label">Elija el servicio</span>
                      <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu service-type" aria-labelledby="service-type" name="service-type">
                      <li value="Basic Washings"><a href="#">Servicio completo de frenos</a></li>
                      <li value="Deluxe Washing"><a href="#">Limpieza tanque de gasolina</a></li>
                      <li value="Ultimate Washing"><a href="#">Afinamiento</a></li>
                      <li value="Super Washing"><a href="#">Planchado y Pintura</a></li>
                      <li value="Super Washing"><a href="#">Lavado premium</a></li>
                      <li value="Super Washing"><a href="#">Servicio de Scaner</a></li>
                      <li value="Super Washing"><a href="#">Limpieza de Inyectores</a></li>
                      <li value="Super Washing"><a href="#">Cambio de Aceite</a></li>
                    </ul>
                    <input type='hidden' name='service-type' id="service-type">
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="dropdown">
                    <button class="btn btn-dropdown dropdown-toggle" type="button" id="vehical-make" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                      <span class="drp-name" data-bind="label">Elija marca del vehículo</span>
                      <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu vehical-make" aria-labelledby="vehical-make" name="vehical-make">
                      <li value="Honda"><a href="#">Honda</a></li>
                      <li value="Hundai"><a href="#">Hundai</a></li>
                      <li value="BMW"><a href="#">BMW</a></li>
                    </ul>
                    <input type='hidden' name='vehical-make' id="vehical-make">
                  </div>
                </div>
                <div class="col-sm-4">
                  <input type="text" class="form-control" name="vehical-model" id="vehical-model" placeholder="Enter Vehicle Model" required>
                </div>
              </div>
              <h5 class="form-heading-title"><span class="form-heading-no">2.</span>Información de cita</h5>
              <div class="row">
                <div class="col-sm-6">
                  <input type="text" name="appointment-date" class="form-control date-pick" id="appointment-date" placeholder="Appointment Date">
                </div>
                <div class="col-sm-6">
                  <div class="dropdown">
                    <button class="btn btn-dropdown dropdown-toggle" type="button" id="appointment-time" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                      <span class="drp-name" data-bind="label">Elija la Fecha</span>
                      <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu appointment-time" aria-labelledby="appointment-time" name="appointment-time">
                      <li value="Morning"><a href="#">Mañana</a></li>
                      <li value="Afternoon"><a href="#">Tarde</a></li>
                      <li value="Evening"><a href="#">Noche</a></li>
                    </ul>
                    <input type='hidden' name='appointment-time' id='appointment-time'>
                  </div>
                </div>
              </div>
              <h5 class="form-heading-title"><span class="form-heading-no">3.</span>Detalles de contacto</h5>
              <div class="row">
                <div class="col-sm-4">
                  <input type="text" class="form-control" id="name" name="name" placeholder="Nombre Completo" required>
                </div>
                <div class="col-sm-4">
                  <input type="email" class="form-control" id="email" name="email" placeholder="Correo electrónico" required>
                </div>
                <div class="col-sm-4">
                  <input type="text" class="form-control" id="phone" name="phone" placeholder="Teléfono" required>
                </div>
                <div class="col-sm-12">
                  <textarea id="message" name="message" rows="6" placeholder="Mensaje"></textarea>
                </div>
              </div>
              <button type="submit" class="btn btn-default pull-right">Reservar ahora</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
<!--  end appointment -->