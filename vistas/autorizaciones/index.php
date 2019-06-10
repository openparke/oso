<!-- Progress Bar-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- Fin Progress Bar-->

    <head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
   <link rel="stylesheet" href="archivos/css/bootstrap.min.css">
      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>

<script src="http://sila.notaria16.com/Sila/assets/Validaciones/calculoEscrituraNotarial.js" type="text/javascript"></script>

<script src="http://sila.notaria16.com/Sila/assets/Validaciones/calculoventahipoteca.js" type="text/javascript"></script>




</head>


<body style="background-color:#FDFEFE;padding-top: 5%;">
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





     <main class="app-content" style="background-color:#FDFEFE;">

   <!-- Alerta-->
       <div style="zoom:100%;background-color:#FDFEFE;"align="center" >
            <div class="section-heading" >
                  <h1 style="">Autorización<br><em> Para envío de solicitud</em></h1>
                  <br>
                  <!-- Progress Bar-->
                  <div style="width:95%;" >
                    <div class="progress" >
                                  <div class="progress-bar progress-bar-striped active" role="progressbar"
                                  aria-valuenow="5" aria-valuemin="0" aria-valuemax="100" style="width:5%">
                                    3%
                                  </div>
                    </div>
                  </div>
                  <!-- Fin Progress Bar-->


                        <div class="container" style=" padding-left: 0px; padding-right: 5%" ><br>
                            <div class="alert alert-info" style="width: 100%; ">
                              <strong> <br></strong>Si la persona que realizara la solicitud es una persona Natural escoja ( Autorización persona Natural ) de lo contrario escoja ( Autorización persona Jurídica )<br><br>
                            </div>
                        </div>

            </div>
      </div>
  <!-- Fin Alerta-->

<div style="zoom:100%;background-color:#FDFEFE;"align="center" >




            <!-- Cajas -->
    <section id="service">


          <div style="display: flex;justify-content: center;align-items: center;">

            <div id="fondo" class="caja col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="0.8s"style="background-color:white;margin-right: 30px; border-radius: 20px 10px; cursor: pointer; visibility: visible; animation-delay: 0.8s; animation-name: fadeIn;" onclick="location.href='?c=autorizacion&a=registrarautorizacion';">
              <div class="single-service">
              <i class="colorp fa fa-building"></i>
                          <h2>Autorización Persona Natural</h2>
                          <p>Esta autorización la da una persona natural</p>
              </div>
            </div>

             <div id="fondo" class="caja col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="0.8s"style="background-color:white;margin-right: 30px; border-radius: 20px 10px; cursor: pointer; visibility: visible; animation-delay: 0.8s; animation-name: fadeIn;" onclick="location.href='?c=autorizaciones';">
              <div class="single-service">
              <i class="colorp fa fa-flag"></i>
                          <h2>Autorización Persona Jurídica</h2>
                          <p>Esta autorización la da una persona jurídica</p>
              </div>
            </div>
          </div>







    </section>
      <!-- Cajas -->

</div>
    </main>


 </body>
