<!DOCTYPE html>
<html lang="en">
<head>
              <link rel="stylesheet" href="vistas/Inicio/template/css/default.css">   

<!--
		<link rel="stylesheet" href="assets/pass/style.css">
		<script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
		<script src="assets/pass/script.js"></script>
		
   alertas-->


    <script type="text/javascript" src="assets/alert/js/sweetalert2.js"></script>
    <script type="text/javascript" src="assets/alert/js/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="assets/alert/css/sweetalert2.css" type="text/css">
    <link rel="stylesheet" href="assets/alert/css/sweetalert2.min.css" type="text/css">
    <script type="text/javascript">
        $('#mensaje').fadeOut(5000);        
    </script>
   
    <script src="assets/alert/js/jquery-2.1.4.min.js"></script>
 
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


       <script type="text/javascript">
        $(document).ready(function () {
            $('#2').submit(function (e) {
                e.preventDefault();
                //captura todos los valores que tiene el formulario es decir todos los input que esten en ese formulario...
                var datos=$(this).serialize();
                /*swal(
                 'Titulo del Mensaje',
                 'Mensaje',
                 'Tipo de mesaje'
                 );*/
                $.ajax({
                    type:"POST",
                   
                    data:datos,
                    success:function(data){
                      swal({
                            title: "Está Seguro De Cancelar ?",
                            text: "Si Cancela No Se Guardaran Los Datos",
                            icon: "warning",
                            buttons: ["No Cancelar", "Si Cancelar"],
                            dangerMode: true,
                          })
                          .then((willDelete) => {
                            if (willDelete) {
                               
                              
                              
                                        location.href='index.php'
                                      
                            } else {
                              swal("Los Datos No Se Eliminaron",
                               {
                                icon: "success",
                              });
                              
                             }
                          });
                        //imprimo el resultado en el div mensaje que procesa ajax
                      
                    }
                });
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#1').submit(function (e) {
                e.preventDefault();
                //captura todos los valores que tiene el formulario es decir todos los input que esten en ese formulario...
                var datos=$(this).serialize();
                /*swal(
                 'Titulo del Mensaje',
                 'Mensaje',
                 'Tipo de mesaje'
                 );*/
                $.ajax({
                    type:"POST",
                   
                    data:datos,
                    success:function(data){
                      swal({
                            title: "Está Seguro De Cancelar ?",
                            text: "Si Cancela No Se Guardaran Los Datos",
                            icon: "warning",
                            buttons: ["No Cancelar", "Si Cancelar"],
                            dangerMode: true,
                          })
                          .then((willDelete) => {
                            if (willDelete) {
                               
                                        location.href='index.php'
                                      
                            } 
                          });
                        //imprimo el resultado en el div mensaje que procesa ajax
                      
                    }
                });
            });
        });
    </script>
    


  
  <!-- alertas-->



<script>

$(document).ready(function() {
  var longitud = false,
    minuscula = false,
    numero = false,
    mayuscula = false;
  $('input[type=password]').keyup(function() {
    var Contrasena = $(this).val();
    if (Contrasena.length < 8) {
      $('#length').removeClass('valid').addClass('invalid');
      longitud = false;
    } else {
      $('#length').removeClass('invalid').addClass('valid');
      longitud = true;
    }

    //validate letter
    if (Contrasena.match(/[A-z]/)) {
      $('#letter').removeClass('invalid').addClass('valid');
      minuscula = true;
    } else {
      $('#letter').removeClass('valid').addClass('invalid');
      minuscula = false;
    }

    //validate capital letter
    if (Contrasena.match(/[A-Z]/)) {
      $('#capital').removeClass('invalid').addClass('valid');
      mayuscula = true;
    } else {
      $('#capital').removeClass('valid').addClass('invalid');
      mayuscula = false;
    }

    //validate number
    if (Contrasena.match(/\d/)) {
      $('#number').removeClass('invalid').addClass('valid');
      numero = true;
    } else {
      $('#number').removeClass('valid').addClass('invalid');
      numero = false;
    }
  }).focus(function() {
    $('#pswd_info').show();
  }).blur(function() {
    $('#pswd_info').hide();
  });

  $("#registro").submit(function(event) {
    alert("hola");
    if(longitud && minuscula && numero && mayuscula){
      alert("password correcto");
      $("#registro").submit();
     
    }else{
      alert("Password invalido.");
      event.preventDefault();
    }
    
  });
});
</script>
<style>
#pswd_info {
  position: absolute;
  bottom: -75px;
  bottom: -115px\9;
  /* IE Specific */
  right: 55px;
  width: 250px;
  padding: 15px;
  background: #fefefe;
  font-size: .875em;
  border-radius: 5px;
  box-shadow: 0 1px 3px #ccc;
  border: 1px solid #ddd;
}
#pswd_info h4 {
  margin: 0 0 10px 0;
  padding: 0;
  font-weight: normal;
}
#pswd_info::before {
  content: "\25B2";
  position: absolute;
  top: -12px;
  left: 45%;
  font-size: 14px;
  line-height: 14px;
  color: #ddd;
  text-shadow: none;
  display: block;
}
.invalid {
  background: url(../images/invalid.png) no-repeat 0 50%;
  padding-left: 22px;
  line-height: 24px;
  color: #ec3f41;
}
.valid {
  background: url(../images/valid.png) no-repeat 0 50%;
  padding-left: 22px;
  line-height: 24px;
  color: #3a7d34;
}
#pswd_info {
  display: none;
}
</style>
</head>
 
    <body class="app sidebar-mini rtl">
      
      <main class="app-content">
       <div class="app-title">
        <div>
          <h1><i class="colorp fa fa-th-list"  ></i><?=$titulo?> contraseña </h1>
          <p></p>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
        <a href="index.php"><li class="breadcrumb-item" ><i class="colorp fa fa-home fa-lg" ></i></li></a>
        <li class="breadcrumb-item"></li>
          <li ></a></li>
           </ul>
           </div>
           
             <div class="content-wrapper">
             <div class="col-md-6">
              <div class="card">
              
              <div class="card-body">
              <div class="col-md-12">
                 <form class="form-horizontal" method="POST" action="?c=contrasena&a=Guardar">
                  <div class="form-group">
                                        
                    <input class="form-control" name="id" type="hidden" value="<?=$p->getidnotaria()?>" >
                                         
                  </div>
      
                  <div class="form-group">



              <table>
                <tr>
                      <td style="width: 70%;">

                            <label for="Rol">Rol</label>
                              
                              <select class="form-control"   name="Rol"  required style="width: 50%;" />
                            <option disabled value="">Su rol es:</option>
                            <?php if($_SESSION['Rol']=="notaria"):?>
                            <option  value="notaria" <?=$u->getRol()=="notaria" ? "selected": ""?> >notaria</option>
                            <?php endif;?>
                            <?php if($_SESSION['Rol']=="Davivienda"):?>
                            <option  value="Davivienda" <?=$u->getRol()=="Davivienda" ? "selected": ""?> >Davivienda</option>
                            <?php endif;?>
                            <?php if($_SESSION['Rol']=="Administrador"):?>
                            <option  value="Administrador"  <?=$u->getRol()=="Administrador" ? "selected": ""?>>Administrador</option>
                            <?php endif;?>
                          </select>
                      </td>
                      <td style="width: 70%;">
                          <label   for="Usuario" >Usuario</label>
                            <input  class="form-control" required type="text" required name="Usuario"  style="width: 100%;" placeholder="Digite Usuario"  value="<?=$u->getUsuario()?>"  readonly="readonly"/>
                            
                      </td>
                </tr>       
                                   
                  </table>

</div>

                    <div class="form-group">
                       <label for="ContrasenaAntes">Digite La Contrasena Antigua</label>
                     
                      <input class="form-control" require type="text" style="-webkit-text-security: disc;"  name="ContrasenaAntes" id="ContrasenaAntes" placeholder="Digite La Contrasena Antigua" value="" maxlength="20" required/>
                    
                    </div>
                    <form id="registro">
                    <div class="form-group">
                       <label for="Contrasena">Digite La Nueva Contrasena </label>                      
                         <input class="form-control"  id="Contrasena" type="password" name="Contrasena"  placeholder="Digite la nueva contrasena" value="" required maxlength="20"/>                                          
                    </div>
                    <div class="form-group">
                       <label for="Contrasena">Repita La Nueva Contrasena</label>
                    
                      <input class="form-control" require  type="password" name="ConfirmContrasena" id="ConfirmContrasena" placeholder="Repita La Nueva Contrasena" value="" required maxlength="20"/>
                    
                    </div>
                    <label id="Res"></label>
                    <div id="pswd_info">
                      <h4>La contraseña debería tener los siguientes requisitos : </h4>
                      <ul>
                        <li id="letter" class="invalid">Al menos  <strong>una letra</strong>
                        </li>
                        <li id="capital" class="invalid">Al menos  <strong>una letra en mayúscula</strong>
                        </li>
                        <li id="number" class="invalid">Al menos  <strong>un numero</strong>
                        </li>
                        <li id="length" class="invalid">Mínimo <strong>6 carácteres</strong>
                        </li>
                      </ul>
                    </div>
                    
                    <div id="container">


                    
 
   
      
        
        
        
    
  </div>
  
                                  
  <table>
                          <tr>
                            <td>
                            <form method="POST" id="2">
                              <button class="btn btn-primary" type="submit" name="aceptar" value="Aceptar" ><i class="fa fa-check-square"></i>Guardar</button> 
                            </form>
                            </td>
                            
                            <td>
                             <form method="POST" id="1">
                                <button class="btn btn-secondary" type="submit" name="cancelar" value="cancelar" ><i class="	fa fa-window-close"></i>Cancelar</button> 
                             </form>
                           </td>
                         </tr>
                          </table> 

                      </form>
                  
                </div>
              </div>
              <?php   
			 switch($_SESSION['PageState']){
         case "Mal":?>
			 <br>
			   <div id="mensaje" class="alert alert-danger alert-dismissible">
				 <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				   <strong>ERROR:</strong> La contraseña antigua no coincide.
			   </div>
			 <?php
       break;
       case "Bien":?>
			 <br>
			   <div id="mensaje" class="alert alert-success alert-dismissible">
				 <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				   <strong>HECHO:</strong> Se ha efectuado el cambio de contraseña con éxito.
			   </div>
			 <?php
       break;
       case "Mal2":?>
       <br>
			   <div id="mensaje" class="alert alert-danger alert-dismissible">
				 <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				   <strong>ERROR:</strong> La contraseña nueva y la confirmación no son iguales.
			   </div>
			 <?php
       break;
       default:
       
			 }
			 ?> 
            </div>
          </div>
        </main>
        <script type="text/javascript" src="assets/Validaciones/contrasena.js"></script>
        
  </body>

</html>