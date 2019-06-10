
    
    <head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
   <link rel="stylesheet" href="archivos/css/bootstrap.min.css">
      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>

<script src="http://sila.notaria16.com/Sila/assets/Validaciones/calculoEscrituraNotarial.js" type="text/javascript"></script>

<script src="http://sila.notaria16.com/Sila/assets/Validaciones/calculoventahipoteca.js" type="text/javascript"></script>

</head>


<body style="background-color:#FDFEFE;">
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
     <main style="background-color:#FDFEFE; padding-top: 3%">

<div style="padding-left:20%;zoom:100%;background-color:#FDFEFE;"align="center" >
     <div class="section-heading" >
                    <h1>Simulador<br><em>Gastos Notariales</em></h1>
                      <div class="container">
<br>
                    <div class="alert alert-danger" style="width: 100%">
                      <strong>
                          Alerta!!! <br><br><br></strong> Estos simuladores son solo un aproximado, el Banco y la Notaria 16 NO se hacen responsables si el costo incrementa !!!
                    </div>
                  </div>
                  <!-- <img src="archivos/Amarilo.png" width="50%" style="padding-left: 30%">-->
                  
                </div>

            <!-- Cajas -->
    <section id="service" class="">
        
      <div>
          
        
        <div class="row" style="padding-left: 5%;" >
            

                    

          <div id="fondo" class="caja col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="0.4s"style="background-color:white;margin-right: 30px; border-radius: 20px 10px; cursor: pointer; visibility: visible; animation-delay: 0.4s; animation-name: fadeIn;" onclick="location.href='?c=escriconstrucprueba';">
            <div class="single-service">
            <i class="colorp fa fa-home"></i>
                        <h2>Escrituración de crédito</h2>
                        <p>Escrituración de crédito</p>
            </div>
          </div>
          
          <div id="fondo" class="caja col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="0.8s"style="background-color:white;margin-right: 30px; border-radius: 20px 10px; cursor: pointer; visibility: visible; animation-delay: 0.8s; animation-name: fadeIn;" onclick="location.href='?c=escriconstrucprueba2';">
            <div class="single-service">
            <i class="colorp fa fa-building"></i>
                        <h2>Escrituración de Leasing</h2>
                        <p>Escrituración de Leasing</p>
            </div>
          </div>

           <div id="fondo" class="caja col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="0.8s"style="background-color:white;margin-right: 30px; border-radius: 20px 10px; cursor: pointer; visibility: visible; animation-delay: 0.8s; animation-name: fadeIn;" onclick="location.href='?c=escriconstrucprueba';">
            <div class="single-service">
            <i class="colorp fa fa-flag"></i>
                        <h2>Escrituración de Contado</h2>
                        <p>Escrituración de Contado</p>
            </div>
          </div>


        
        </div>

        <br>

        
          
        
         
          </div>


        
        </div>

      </div>
    </section>
      <!-- Cajas -->
    
</div>
    </main>
                
     
 </body> 
   