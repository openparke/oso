

<?php if($_SESSION['Rol']=="Informador"):?><!-- Informador-->



<head>
  <meta http-equiv="Content-Type" content="text/html; charset=gb18030">

     <!-- Progress Bar-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- Fin Progress Bar-->

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

  <div class="pace-progress-inner"></div>
  </div>

<div class="pace-activity"></div></div>

    <main class="app-content" style="background-color:#FDFEFE;">
    <div>

        <div id="" align="center" class="alert alert-info">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong >      Bienvenido a su Notaría 16 </strong>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<?php echo $_SESSION['Rol'] ?>&nbsp &nbsp : &nbsp &nbsp  <?php echo $_SESSION['Usuario'] ?>
        </div>
        <br>

        <!-- Progress Bar-->
        <div class="progress">
                      <div class="progress-bar progress-bar-striped active" role="progressbar"
                      aria-valuenow="5" aria-valuemin="0" aria-valuemax="100" style="width:5%">
                        1%
                      </div>
        </div>
        <!-- Fin Progress Bar-->

    </div><br><br>
<br>
		<!-- Cajas -->
		<section id="service" class="section">

			<div>


				<div class="row" style="padding-left: 12%;" >




					<div id="fondo" class="caja col-md-4 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="0.4s"style="background-color:white;margin-right: 30px; border-radius: 20px 10px; cursor: pointer; visibility: visible; animation-delay: 0.4s; animation-name: fadeIn;" onclick="location.href='?c=autorizacion&a=registrarautorizacion';">
						<div class="single-service">
						<i class="colorp fa fa-clipboard"></i>
                        <h2>Nueva Solicitud</h2>
                        <p>Generar una nueva solicitud </p>
						</div>
					</div><br>

					<div id="fondo" class="caja col-md-4 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="0.8s"style="background-color:white;margin-right: 30px; border-radius: 20px 10px; cursor: pointer; visibility: visible; animation-delay: 0.8s; animation-name: fadeIn;" onclick="location.href='?c=respuesta';">
						<div class="single-service">
						<i class="colorp fa fa-edit"></i>
                        <h2>Mis Solicitudes</h2>
                        <p>Ver como van mis Solicitudes </p>
						</div>
					</div>



				</div>
			</div>
		</section>


  <?php endif;?>








































<?php if($_SESSION['Rol']=="Administrador"):?><!-- Administrador-->
<head>



</head>
  <body style="background-color:#FDFEFE;">
  <div class="pace-progress-inner"></div>
</div>
<div class="pace-activity"></div></div>

    <main class="app-content" style="background-color:#FDFEFE;">
    <div>

        <div id="" align="center" class="alert alert-info">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong >      Bienvenido a su Notaría 16 </strong>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<?php echo $_SESSION['Rol'] ?>&nbsp &nbsp : &nbsp &nbsp  <?php echo $_SESSION['Usuario'] ?>.
        </div>

    </div><br><br>

		<!-- Cajas -->
		<section id="service" class="section">
			<div>

				<div class="row" >

					<div id="fondo" class="caja col-md-2 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="0.4s"style="background-color:white;margin-right: 30px; border-radius: 20px 10px; cursor: pointer; visibility: visible; animation-delay: 0.4s; animation-name: fadeIn;" onclick="location.href='?c=notaria';">
						<div class="single-service">
						<i class="colorp fa fa-id-card"></i>
                        <h2>Usuarios</h2>
                        <p>Ver los usuarios </p>
						</div>
					</div>


					<div id="fondo" class="caja col-md-2 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="0.8s"style="background-color:white;margin-right: 30px; border-radius: 20px 10px; cursor: pointer; visibility: visible; animation-delay: 0.8s; animation-name: fadeIn;" onclick="location.href='?c=solicitud&a=registrarsolicitud';">
						<div class="single-service">
						<i class="colorp fa fa-handshake-o"></i>
                        <h2>Autorización</h2>
                        <p>Ver las autorizaciones </p>
						</div>
					</div>



					<div id="fondo" class="caja col-md-2 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="1.2s"style="background-color:white;margin-right: 30px; border-radius: 20px 10px; cursor: pointer; visibility: visible; animation-delay: 1.2s; animation-name: fadeIn;" onclick="location.href='?c=solicitud&a=registrarsolicitud';">
						<div class="single-service">
						<i class="colorp fa fa-stack-overflow"></i>
                        <h2>Solicitud</h2>
                        <p>Ver las solicitudes </p>
						</div>
					</div>

					<div id="fondo" class="caja col-md-2 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="1.6s" style="background-color:white;margin-right: 30px; border-radius: 20px 10px; cursor: pointer; visibility: visible; animation-delay: 1.6s; animation-name: fadeIn;" onclick="location.href='?c=solicitud';">
						<div class="single-service">
						<i class="colorp fa fa-edit"></i>
							<h2>Estado de la Solicitud</h2>
							<p>Ver los estados de las solicitudes</p>
						</div>
					</div>


					<div id="fondo" class="caja col-md-2 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="2.0s"style="background-color:white;margin-right: 30px; border-radius: 20px 10px; cursor: pointer; visibility: visible; animation-delay: 2.0s; animation-name: fadeIn;" onclick="location.href='?c=simulador';">
						<div class="single-service">
						<i class="colorp fa fa-cubes"></i>
                        <h2>Simulador</h2>
                        <p> Ver los simuladores </p>
						</div>
					</div>


				</div>





			</div>
			<br><br>
			<div class="row">



					<div id="fondo" class="caja col-md-2 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="0.4s"style="background-color:white;margin-right: 30px; border-radius: 20px 10px; cursor: pointer; visibility: visible; animation-delay: 0.4s; animation-name: fadeIn;" onclick="location.href='?c=certificado';">
						<div class="single-service">
						<i class="colorp fa fa-gear"></i>
                        <h2>Entidad</h2>
                        <p>Ver todas las entidades</p>
						</div>
					</div>


					<div id="fondo" class="caja col-md-2 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="0.8s"style="background-color:white;margin-right: 30px; border-radius: 20px 10px; cursor: pointer; visibility: visible; animation-delay: 0.8s; animation-name: fadeIn;" onclick="location.href='?c=certificado';">
						<div class="single-service">
						<i class="colorp fa fa-pie-chart"></i>
                        <h2>Sucursal</h2>
                        <p>Ver todas las sucursales</p>
						</div>
					</div>


					<div id="fondo" class="caja col-md-2 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="1.2s"style="background-color:white;margin-right: 30px; border-radius: 20px 10px; cursor: pointer; visibility: visible; animation-delay: 1.2s; animation-name: fadeIn;" onclick="location.href='?c=certificado';">
						<div class="single-service">
						<i class="colorp fa fa-file-text-o"></i>
                        <h2>Certificado</h2>
                        <p>Ejemplos de certificados de tradición y libertad </p>
						</div>
					</div>


					<div id="fondo" class="caja col-md-2 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="1.6s" style="background-color:white;margin-right: 30px; border-radius: 20px 10px; cursor: pointer; visibility: visible; animation-delay: 1.6s; animation-name: fadeIn;" onclick="location.href='?c=Checklist';">
						<div class="single-service">
						<i class="colorp fa fa-check-square"></i>
							<h2>Documentos</h2>
							<p>Ejemplos de Documentos</p>
						</div>
					</div>


					<div id="fondo" class="caja col-md-2 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="2.0s"style="background-color:white;margin-right: 30px; border-radius: 20px 10px; cursor: pointer; visibility: visible; animation-delay: 2.0s; animation-name: fadeIn;" onclick="location.href='?c=contacto';">
						<div class="single-service">
						<i class="colorp fa fa-address-book-o"></i>
                        <h2>Contactanos</h2>
                        <p>Comunicate con nosotros </p>
					    </div>
					</div>


				</div>
			</div>
		</section>


  <?php endif;?>


















































<?php if($_SESSION['Rol']=="Notaria"):?><!-- Notaria-->
<head>



</head>
  <body style="background-color:#FDFEFE;">
  <div class="pace-progress-inner"></div>
</div>
<div class="pace-activity"></div></div>

    <main class="app-content" style="background-color:#FDFEFE;">
    <div>

        <div id="" align="center" class="alert alert-info">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong >      Bienvenido a su Notaría 16 </strong>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<?php echo $_SESSION['Rol'] ?>&nbsp &nbsp : &nbsp &nbsp  <?php echo $_SESSION['Usuario'] ?>.
        </div>

    </div><br><br>

		<!-- Cajas -->
		<section id="service" class="section">
			<div>

				<div class="row" >



					<div id="fondo" class="caja col-md-2 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="0.4s"style="background-color:white;margin-right: 30px; border-radius: 20px 10px; cursor: pointer; visibility: visible; animation-delay: 0.4s; animation-name: fadeIn;" onclick="location.href='?c=simulador';">
						<div class="single-service">
						<i class="colorp fa fa-calculator"></i>
                        <h2>Simulador</h2>
                        <p>Hacer una preliquidación </p>
						</div>
					</div>



					<div id="fondo" class="caja col-md-2 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="0.8s" style="background-color:white;margin-right: 30px; border-radius: 20px 10px; cursor: pointer; visibility: visible; animation-delay: 0.8; animation-name: fadeIn;" onclick="location.href='?c=solicitud';">
						<div class="single-service">
						<i class="colorp fa fa-edit"></i>
							<h2>Estado de la Solicitud</h2>
							<p>Revisar en que estado esta el proceso </p>
						</div>
					</div>
					<div id="fondo" class="caja col-md-2 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="1.2s"style="background-color:white;margin-right: 30px; border-radius: 20px 10px; cursor: pointer; visibility: visible; animation-delay: 1.2s; animation-name: fadeIn;" onclick="location.href='?c=certificado';">
						<div class="single-service">
						<i class="colorp fa fa-file-text-o"></i>
                        <h2>Certificado</h2>
                        <p>Ejemplos de certificados de tradición y libertad </p>
						</div>
					</div>


					<div id="fondo" class="caja col-md-2 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="1.6s" style="background-color:white;margin-right: 30px; border-radius: 20px 10px; cursor: pointer; visibility: visible; animation-delay: 1.6s; animation-name: fadeIn;" onclick="location.href='?c=Checklist';">
						<div class="single-service">
						<i class="colorp fa fa-check-square"></i>
							<h2>Documentos</h2>
							<p>Ejemplos de Documentos</p>
						</div>
					</div>


					<div id="fondo" class="caja col-md-2 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="2.0s"style="background-color:white;margin-right: 30px; border-radius: 20px 10px; cursor: pointer; visibility: visible; animation-delay: 2.0s; animation-name: fadeIn;" onclick="location.href='?c=contacto';">
						<div class="single-service">
						<i class="colorp fa fa-address-book-o"></i>
                        <h2>Contactanos</h2>
                        <p>Comunicate con nosotros </p>
					    </div>
					</div>





					</div>





				</div>
				<br><br>

			</div>
		</section>


  <?php endif;?>



































  <?php if($_SESSION['Rol']=="Gerente"):?><!-- Gerente-->
<head>



</head>
  <body style="background-color:#FDFEFE;">
  <div class="pace-progress-inner"></div>
</div>
<div class="pace-activity"></div></div>

    <main class="app-content" style="background-color:#FDFEFE;">
    <div>

        <div id="" align="center" class="alert alert-info">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong >      Bienvenido a su Notaría 16 </strong>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<?php echo $_SESSION['Rol'] ?>&nbsp &nbsp : &nbsp &nbsp  <?php echo $_SESSION['Usuario'] ?>.
        </div>

    </div><br><br>

		<!-- Cajas -->
		<section id="service" class="section" align="center">
			<div>

				<div class="row" style="padding-left: 10%" >


					<div id="fondo" class="caja col-md-2 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="0.8s" style="background-color:white;margin-right: 30px; border-radius: 20px 10px; cursor: pointer; visibility: visible; animation-delay: 0.8; animation-name: fadeIn;" onclick="location.href='?c=solicitud';">
						<div class="single-service">
						<i class="colorp fa fa-edit"></i>
							<h2>Estado de la Solicitud</h2>
							<p>Revisar en que estado esta el proceso </p>
						</div>
					</div>
					<div id="fondo" class="caja col-md-2 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="1.2s"style="background-color:white;margin-right: 30px; border-radius: 20px 10px; cursor: pointer; visibility: visible; animation-delay: 1.2s; animation-name: fadeIn;" onclick="location.href='?c=certificado';">
						<div class="single-service">
						<i class="colorp fa fa-file-text-o"></i>
                        <h2>Certificado</h2>
                        <p>Ejemplos de certificados de tradición y libertad </p>
						</div>
					</div>


					<div id="fondo" class="caja col-md-2 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="1.6s" style="background-color:white;margin-right: 30px; border-radius: 20px 10px; cursor: pointer; visibility: visible; animation-delay: 1.6s; animation-name: fadeIn;" onclick="location.href='?c=Checklist';">
						<div class="single-service">
						<i class="colorp fa fa-check-square"></i>
							<h2>Documentos</h2>
							<p>Ejemplos de Documentos</p>
						</div>
					</div>


					<div id="fondo" class="caja col-md-2 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="2.0s"style="background-color:white;margin-right: 30px; border-radius: 20px 10px; cursor: pointer; visibility: visible; animation-delay: 2.0s; animation-name: fadeIn;" onclick="location.href='?c=contacto';">
						<div class="single-service">
						<i class="colorp fa fa-address-book-o"></i>
                        <h2>Contactanos</h2>
                        <p>Comunicate con nosotros </p>
					    </div>
					</div>





					</div>





				</div>
				<br><br>

			</div>
		</section>

  <?php endif;?> <!-- Gerente-->





























  <?php if($_SESSION['Rol']=="Supervisor"):?><!-- Supervisor-->
<head>



</head>
  <body style="background-color:#FDFEFE;">
  <div class="pace-progress-inner"></div>
</div>
<div class="pace-activity"></div></div>

    <main class="app-content" style="background-color:#FDFEFE;">
    <div>

        <div id="" align="center" class="alert alert-info">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong >      Bienvenido a su Notaría 16 </strong>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<?php echo $_SESSION['Rol'] ?>&nbsp &nbsp : &nbsp &nbsp  <?php echo $_SESSION['Usuario'] ?>.
        </div>

    </div><br><br>

		<!-- Cajas -->
		<section id="service" class="section" align="center">
			<div>

				<div class="row" style="padding-left: 10%" >


					<div id="fondo" class="caja col-md-2 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="0.8s" style="background-color:white;margin-right: 30px; border-radius: 20px 10px; cursor: pointer; visibility: visible; animation-delay: 0.8; animation-name: fadeIn;" onclick="location.href='?c=solicitud';">
						<div class="single-service">
						<i class="colorp fa fa-edit"></i>
							<h2>Estado de la Solicitud</h2>
							<p>Revisar en que estado esta el proceso </p>
						</div>
					</div>
					<div id="fondo" class="caja col-md-2 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="1.2s"style="background-color:white;margin-right: 30px; border-radius: 20px 10px; cursor: pointer; visibility: visible; animation-delay: 1.2s; animation-name: fadeIn;" onclick="location.href='?c=certificado';">
						<div class="single-service">
						<i class="colorp fa fa-file-text-o"></i>
                        <h2>Certificado</h2>
                        <p>Ejemplos de certificados de tradición y libertad </p>
						</div>
					</div>


					<div id="fondo" class="caja col-md-2 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="1.6s" style="background-color:white;margin-right: 30px; border-radius: 20px 10px; cursor: pointer; visibility: visible; animation-delay: 1.6s; animation-name: fadeIn;" onclick="location.href='?c=Checklist';">
						<div class="single-service">
						<i class="colorp fa fa-check-square"></i>
							<h2>Documentos</h2>
							<p>Ejemplos de Documentos</p>
						</div>
					</div>


					<div id="fondo" class="caja col-md-2 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="2.0s"style="background-color:white;margin-right: 30px; border-radius: 20px 10px; cursor: pointer; visibility: visible; animation-delay: 2.0s; animation-name: fadeIn;" onclick="location.href='?c=contacto';">
						<div class="single-service">
						<i class="colorp fa fa-address-book-o"></i>
                        <h2>Contactanos</h2>
                        <p>Comunicate con nosotros </p>
					    </div>
					</div>





					</div>





				</div>
				<br><br>

			</div>
		</section>

  <?php endif;?><!-- Supervisor -->
















<?php if($_SESSION['Rol']=="Inmobiliaria"):?><!-- Inmobiliaria -->
<head>



</head>
  <body style="background-color:#FDFEFE;">
  <div class="pace-progress-inner"></div>
</div>
<div class="pace-activity"></div></div>

    <main class="app-content" style="background-color:#FDFEFE;">
    <div>

        <div id="" align="center" class="alert alert-info">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong >      Bienvenido a su Notaría 16 </strong>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<?php echo $_SESSION['Rol'] ?>&nbsp &nbsp : &nbsp &nbsp  <?php echo $_SESSION['Usuario'] ?>.
        </div>

    </div><br><br>

		<!-- Cajas -->
		  <section id="service" class="section" style="padding-left: 10%">
      <div>
        
        <div class="row"  >


          <div id="fondo" class="caja col-md-2 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="0.4s"style="background-color:white;margin-right: 30px; border-radius: 20px 10px; cursor: pointer; visibility: visible; animation-delay: 0.4s; animation-name: fadeIn;" onclick="location.href='?c=escrituracion';">
            <div class="single-service">
            <i class="colorp fa fa-id-card"></i>
                        <h2>Escrituración</h2>
                        <p>Realizar una escrituración</p>
            </div>
          </div>

                    

          <div id="fondo" class="caja col-md-2 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="0.8s"style="background-color:white;margin-right: 30px; border-radius: 20px 10px; cursor: pointer; visibility: visible; animation-delay: 0.8s; animation-name: fadeIn;" onclick="location.href='?c=simulador';">
            <div class="single-service">
            <i class="colorp fa fa-clipboard"></i>
                        <h2>Simuladores</h2>
                        <p>Simuladores</p>
            </div>
          </div>


          
          <div id="fondo" class="caja col-md-2 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="1.2s" style="background-color:white;margin-right: 30px; border-radius: 20px 10px; cursor: pointer; visibility: visible; animation-delay: 1.2s; animation-name: fadeIn;" onclick="location.href='index.php;">
            <div class="single-service">
            <i class="colorp fa fa-stack-overflow"></i>
                        <h2>Autenticaciones</h2>
              <p>Autenticaciones</p>
            </div>
          </div>

          <div id="fondo" class="caja col-md-2 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="1.6s" style="background-color:white;margin-right: 30px; border-radius: 20px 10px; cursor: pointer; visibility: visible; animation-delay: 1.2s; animation-name: fadeIn;" onclick="location.href='index.php';">
            <div class="single-service">
            <i class="colorp fa fa-clipboard"></i>
                        <h2>Promesa compraventa</h2>
              <p>Promesa compraventa</p>
            </div>
          </div>


          
          </div>
          
          
          

                      
        </div>
        <br><br>
        <div class="row">

          <div id="fondo" class="caja col-md-2 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="0.4s"style="background-color:white;margin-right: 30px; border-radius: 20px 10px; cursor: pointer; visibility: visible; animation-delay: 0.4s; animation-name: fadeIn;" onclick="location.href='index.php';">
            <div class="single-service">
            <i class="colorp fa fa-edit"></i>
                        <h2>Acompañamiento jurídico</h2>
                        <p>Acompañamiento jurídico </p>
            </div>
          </div>


          
         
          
          
          <div id="fondo" class="caja col-md-2 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="1.2s" style="background-color:white;margin-right: 30px; border-radius: 20px 10px; cursor: pointer; visibility: visible; animation-delay: 0.8s; animation-name: fadeIn;" onclick="location.href='?c=Checklist';">
            <div class="single-service">
            <i class="colorp fa fa-check-square"></i>
              <h2>Documentos</h2>
              <p>Ejemplos de Documentos</p>
            </div>
          </div>


          <div id="fondo" class="caja col-md-2 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="1.6s"style="background-color:white;margin-right: 30px; border-radius: 20px 10px; cursor: pointer; visibility: visible; animation-delay: 1.2s; animation-name: fadeIn;" onclick="location.href='?c=contacto';">
            <div class="single-service">
            <i class="colorp fa fa-address-book-o"></i>
                        <h2>Contactanos</h2>
                        <p>Comunicate con nosotros </p>
              </div>
          </div>
        
          
        
          
          
          

                      
        </div>
      </div>
    </section>


  <?php endif;?><!-- Inmobiliaria -->





  <!-- Cajas -->





<!--/  entrar difuminados  cajas  -->


                <!-- Popup JS -->
                <script type="text/javascript" src="vistas/Inicio/template/js/jquery.magnific-popup.min.js"></script>

                <!-- Typed JS -->
                <script type="text/javascript" src="vistas/Inicio/template/js/typed.min.js"></script>

                <!-- Scroll Up JS -->
                <script type="text/javascript" src="vistas/Inicio/template/js/jquery.scrollUp.min.js"></script>

                <!-- Slick Nav JS -->
                <script type="text/javascript" src="vistas/Inicio/template/js/jquery.slicknav.min.js"></script>

                <!-- Counterup JS -->
                <script type="text/javascript" src="vistas/Inicio/template/js/waypoints.min.js"></script>
                <script type="text/javascript" src="vistas/Inicio/template/js/jquery.counterup.min.js"></script>

                <!-- Owl Carousel JS -->
                <script type="text/javascript" src="vistas/Inicio/template/js/owl.carousel.min.js"></script>

                <!-- Main JS -->
                <script type="text/javascript" src="vistas/Inicio/template/js/main.js"></script>
  <!--/difuminados  cajas  fin-->
