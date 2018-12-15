<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Bienvenidos - Curso FL Studio</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script
          src="https://code.jquery.com/jquery-3.3.1.min.js"integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="crossorigin="anonymous"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <!-- Styles -->
        <style>
            html, body {

            }

            .full-height {
                height: 7vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .blanco
            {
              color: white;
            }
            .imgB
            {
              background-image: url('img/fondo.jpg');
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Ir al curso</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        
                    @endauth
                </div>
            @endif
            <br>
        </div>
        <div class="jumbotron jumbotron-fluid imgB" style="">
          <div class="container blanco">
            <br>
            <h1 class="display-3">Cursos DjFrank</h1>
            <p class="lead"> <h3>Pagina Oficial Curso FL Studio(Para mixes y remixes)</h3> </p>
          </div>
        </div>


        <div class="container text-center alert alert-secondary">
          <div class="row">
            <div class="list-group">
                <div class="card" >
                  <div class="card-body">
                    <h5>Para ser miembro premium del curso debes realizar el pago en una de las formas de pago establecidas,
                      cuando lo realices debes enviar una foto del recibo o captura de pantalla con los datos necesarios
                     para poder obtener el dinero, por ejemplo: nombre de quien envia, país y ciudad de donde se envia.
                     <br>
                     <br>
                     Enviar al correo: <span style="color:#3F729B">navasfran98@gmail.com</span> o por un mensaje al facebook:
                     <a target="_blank" href="https://www.facebook.com/fran.navas.96">Frank Navas</a>
                     <br>
                     <br>
                     En un lapso de 16 horas como maximo recibiras notificación por el mismo medio en que se envio los datos del
                     pago que su usuario ya ha sido activado con exito.
                   </h5>
                  </div>
                </div>
              </div>
              <div class="col-4">
                <br>
                <div class="list-group" id="list-tab" role="tablist">
                  <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Moneygram y wester union</a>
                  <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Xoom - Deposito bancario</a>
                  <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Paypal</a>
                  <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Precio</a>
                </div>
              </div>
              <div class="col-8">
                <br>
                <br>
                <div class="tab-content" id="nav-tabContent">
                  <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
                    <div class="">
                     <strong> <h3>Deposito bancario</h3> </strong>
                    </div>
                    <p class="mb-1">
                      Francisco José Navas Hernández
                      <br>
                      Cuenta: 003680429440  (Banco Agricola)
                      <br>
                      telefono: 76064602
                      <br>
                      Dir: cuscatancingo colonia Villa Hermosa Pasaje 26 casa 34, San Salvador

                    </p>
                  </div>

                  <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
                    <div class="">
                     <strong> <h3>Moneygram y Wester Union</h3> </strong>
                    </div>
                    <p class="mb-1">
                     DUI: 05509737-9
                     <br>
                     Nombre: Francisco José Navas Hernández
                     <br>
                     Pais: El salvador, capital de San salvador.
                     <br>
                     Telefono: +503 76064602
                     <br>
                    </p>
                  </div>

                  <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
                    <div class="">
                     <strong> <h3>Paypal</h3> </strong>
                      <small>DjFrank</small>
                    </div>
                    <p class="mb-1">
                      Paypal me: <a target="_blank" href="paypal.me/FranciscoNavas">paypal.me/FranciscoNavas</a>
                    </p>
                  </div>

                  <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">
                    <div class="">
                     <strong> <h3>Precio</h3> </strong>
                    </div>
                    <p class="">
                      El precio del curso es de <strong>$30.00</strong> dólar estadounidense, incluye todos los modulos del curso question
                      que se ven en el temario, acceso a ver los videos en linea o podes descargarlos además de proporcionar todos
                      los materiales usados.
                    </p>
                  </div>
                </div>
              </div>
            </div>
        </div>

   <div class="container">
     <div class="row">
       <div class="col-sm-12 text-center">
         <br>
         <h1>Temario completo</h1>
         <hr>
         <h4>1- GENERALIDADES</h4>
         <table class="table table-hover table-dark">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Tema</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Introducción al curso</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Introducción a fl studio parte 1</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Introducción a fl studio parte 2</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Introducción a fl studio parte 3</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Organizar librerias</td>
              </tr>
            </tbody>
          </table>
          <br>

          <hr>
          <h4>1- Nivel Básico I</h4>
          <table class="table table-hover table-dark">
             <thead>
               <tr>
                 <th scope="col">#</th>
                 <th scope="col">Tema</th>
               </tr>
             </thead>
             <tbody>
               <tr>
                 <th scope="row">1</th>
                 <td>Instalar librerias</td>
               </tr>
               <tr>
                 <th scope="row">2</th>
                 <td>Herramientas útiles en fl studio</td>
               </tr>
               <tr>
                 <th scope="row">3</th>
                 <td>El Mixer</td>
               </tr>
               <tr>
                 <th scope="row">4</th>
                 <td>Generalidades de los efectos</td>
               </tr>
               <tr>
                 <th scope="row">5</th>
                 <td>BPM y automatizaciones</td>
               </tr>
               <tr>
                 <th scope="row">6</th>
                 <td>Extraer bajo de una canción</td>
               </tr>
               <tr>
                 <th scope="row">7</th>
                 <td>Creemos nuestro primer extended</td>
               </tr>
               <tr>
                 <th scope="row">8</th>
                 <td>Hablemos de géneros</td>
               </tr>
               <tr>
                 <th scope="row">9</th>
                 <td>Extended de balada</td>
               </tr>
               <tr>
                 <th scope="row">10</th>
                 <td>Extended de salsa</td>
               </tr>
               <tr>
                 <th scope="row">11</th>
                 <td>Extended de cumbia</td>
               </tr>
               <tr>
                 <th scope="row">12</th>
                 <td>Extended de rock en español</td>
               </tr>
               <tr>
                 <th scope="row">13</th>
                 <td>Crear mix usando remixes</td>
               </tr>
             </tbody>
           </table>

           <hr>
           <h4>1- Nivel Básico II</h4>
           <table class="table table-hover table-dark">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Tema</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Como creamos un mix sencillo</td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Utilización de efectos más comunes en un mix</td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>Mix de música romántica</td>
                </tr>
                <tr>
                  <th scope="row">4</th>
                  <td>Mix de bachata</td>
                </tr>
                <tr>
                  <th scope="row">5</th>
                  <td>Mix de reguetón</td>
                </tr>
                <tr>
                  <th scope="row">6</th>
                  <td>Mix de Selena quintanilla</td>
                </tr>
              </tbody>
            </table>

            <hr>
            <h4>1- Nivel Intermedio I</h4>
            <table class="table table-hover table-dark">
               <thead>
                 <tr>
                   <th scope="col">#</th>
                   <th scope="col">Tema</th>
                 </tr>
               </thead>
               <tbody>
                 <tr>
                   <th scope="row">1</th>
                   <td>¿Qué es un Remix FX?</td>
                 </tr>
                 <tr>
                   <th scope="row">2</th>
                   <td>Masterización</td>
                 </tr>
                 <tr>
                   <th scope="row">3</th>
                   <td>El Mixer</td>
                 </tr>
                 <tr>
                   <th scope="row">4</th>
                   <td>Aprendamos a realizar Scratch</td>
                 </tr>
                 <tr>
                   <th scope="row">5</th>
                   <td>Sacar acapella desde adobe audition</td>
                 </tr>
                 <tr>
                   <th scope="row">6</th>
                   <td>Uso de acapella Studio e instrumentales</td>
                 </tr>
                 <tr>
                   <th scope="row">7</th>
                   <td>Remix de reguetón utilizando acapella Studio</td>
                 </tr>
                 <tr>
                   <th scope="row">8</th>
                   <td>Remix de cumbia</td>
                 </tr>
                 <tr>
                   <th scope="row">9</th>
                   <td>Hacer un extended cambiándole su BPM</td>
                 </tr>
                 <tr>
                   <th scope="row">10</th>
                   <td>Remix de bolero</td>
                 </tr>
               </tbody>
             </table>

             <hr>
             <h4>1- Nivel Intermedio II</h4>
             <table class="table table-hover table-dark">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Tema</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>¿Que necesito para realizar un intro a un mix?</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Intro de reguetón Mix</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Creación de bases propias</td>
                  </tr>
                  <tr>
                    <th scope="row">4</th>
                    <td>Intro de bolito Mix</td>
                  </tr>
                  <tr>
                    <th scope="row">5</th>
                    <td>¿Qué otros estilos de remixes hay?</td>
                  </tr>
                </tbody>
              </table>

              <hr>
              <h4>1- Nivel Avanzado</h4>
              <table class="table table-hover table-dark">
                 <thead>
                   <tr>
                     <th scope="col">#</th>
                     <th scope="col">Tema</th>
                   </tr>
                 </thead>
                 <tbody>
                   <tr>
                     <th scope="row">1</th>
                     <td>Creación de un intro outro de bachata</td>
                   </tr>
                   <tr>
                     <th scope="row">2</th>
                     <td>Creación de un intro outro de cumbia</td>
                   </tr>
                   <tr>
                     <th scope="row">3</th>
                     <td>Creación de un started acapella de reguetón</td>
                   </tr>
                   <tr>
                     <th scope="row">4</th>
                     <td>Creación de un intro acapella de Selena quintanilla</td>
                   </tr>
                   <tr>
                     <th scope="row">5</th>
                     <td>Extended de pop</td>
                   </tr>
                   <tr>
                     <th scope="row">6</th>
                     <td>Extended de 80s</td>
                   </tr>
                   <tr>
                     <th scope="row">7</th>
                     <td>Utilización de ableton para cuadrar canciones</td>
                   </tr>
                   <tr>
                     <th scope="row">8</th>
                     <td>Cuadrar canciones desde FL Studio</td>
                   </tr>
                   <tr>
                     <th scope="row">9</th>
                     <td>Remix de alcia acosta (Cuadrar desde ableton live)</td>
                   </tr>
                   <tr>
                     <th scope="row">10</th>
                     <td>Utilización de clip de automatización para cambios de BPM</td>
                   </tr>
                   <tr>
                     <th scope="row">11</th>
                     <td>Creación de transición</td>
                   </tr>
                   <tr>
                     <th scope="row">12</th>
                     <td>Utilización del Zgame editor</td>
                   </tr>
                   <tr>
                     <th scope="row">12</th>
                     <td>Introducción a variados mix</td>
                   </tr>
                   <tr>
                     <th scope="row">12</th>
                     <td>Creación de portada de Mix o Remix</td>
                   </tr>
                 </tbody>
               </table>

       </div>
     </div>
   </div>



    </body>
</html>
