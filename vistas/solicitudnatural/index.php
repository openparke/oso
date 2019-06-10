


    <head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
   <link rel="stylesheet" href="archivos/css/bootstrap.min.css">
      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>

<script src="http://sila.notaria16.com/Sila/assets/Validaciones/calculoEscrituraNotarial.js" type="text/javascript"></script>

<script src="http://sila.notaria16.com/Sila/assets/Validaciones/calculoventahipoteca.js" type="text/javascript"></script>




</head>


<body style="background-color:#FDFEFE;padding-top: 5%">
  <!-- No usar click derecho-->
      <script language="Javascript">
                       document.oncontextmenu = function() {
                          return false
                       }
                       function right(e) {
                          var msg = "Prohibido usar Click Derecho !!! ";

                          if (navigator.appName == 'Netscape' && e.which == 3) {
                             alert(msg); //- Si no quieres asustar a tu usuario entonces quita esta linea...
                             return false;
                          }
                          else if (navigator.appName == 'Microsoft Internet Explorer' && event.button==2) {
                             alert(msg); //- Si no quieres asustar al usuario que utiliza IE,  entonces quita esta linea...
                                            //- Aunque realmente se lo merezca...
                          return false;
                          }
                       return true;
                    }
                    document.onmousedown = right;
      </script>






    <!-- Fin No usar click derecho-->
     <main style="background-color:#FDFEFE;">

   <!-- Alerta-->
       <div style="padding-left:20%;zoom:100%;background-color:#FDFEFE;"align="center" >
            <div class="section-heading" >
                  <h1 style="padding-left:5%;">Solicitud<br><em> Persona Natural</em></h1>
                  <!-- Progress Bar-->
                  <div style="width:95%; padding-left: 5%" >
                    <div class="progress" >
                                  <div class="progress-bar progress-bar-striped active" role="progressbar"
                                  aria-valuenow="8" aria-valuemin="0" aria-valuemax="100" style="width:8%">
                                    8%
                                  </div>
                    </div>
                  </div>
                  <!-- Fin Progress Bar-->

                        <div class="container"><br>
                            <div class="alert alert-info" style="width: 100%">
                              <strong> <br></strong>Escoja si desea hacer una solicitud de ( Leasing ) o una solicitud de ( Crédito Hipotecario )<br><br>
                            </div>
                        </div>

            </div>
      </div>
  <!-- Fin Alerta-->

<div style="padding-left:15%;zoom:100%;background-color:#FDFEFE;"align="center" >




            <!-- Cajas -->
    <section id="service">


          <div style="display: flex;justify-content: center;align-items: center;">

            <div id="fondo" class="caja col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="0.8s"style="background-color:white;margin-right: 30px; border-radius: 20px 10px; cursor: pointer; visibility: visible; animation-delay: 0.8s; animation-name: fadeIn;" onclick="location.href='?c=solicitud&a=registrarsolicitud';">
              <div class="single-service">
              <i class="colorp fa fa-building"></i>
                          <h2>Leasing</h2>
                          <p>Realizar una solicitud de leasing</p>
              </div>
            </div>

             <div id="fondo" class="caja col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="0.8s"style="background-color:white;margin-right: 30px; border-radius: 20px 10px; cursor: pointer; visibility: visible; animation-delay: 0.8s; animation-name: fadeIn;" onclick="location.href='?c=solicitudnatural';">
              <div class="single-service">
              <i class="colorp fa fa-flag"></i>
                          <h2>Crédito Hipotecario</h2>
                          <p>Realizar una solicitud de Crédito Hipotecario</p>
              </div>
            </div>
          </div>







    </section>
      <!-- Cajas -->

</div>
    </main>


 </body>
