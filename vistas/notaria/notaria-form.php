<!DOCTYPE html>
<html lang="en">
<head>


<!--
		<link rel="stylesheet" href="assets/pass/style.css">
		<script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
		<script src="assets/pass/script.js"></script>
		
   alertas-->


    <script type="text/javascript" src="assets/alert/js/sweetalert2.js"></script>
    <script type="text/javascript" src="assets/alert/js/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="assets/alert/css/sweetalert2.css" type="text/css">
    <link rel="stylesheet" href="assets/alert/css/sweetalert2.min.css" type="text/css">
   
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
                               
                              
                              
                                        location.href='?c=notaria'
                                      
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
                               
                                        location.href='?c=notaria'
                                      
                            } 
                          });
                        //imprimo el resultado en el div mensaje que procesa ajax
                      
                    }
                });
            });
        });
    </script>
    
    <script>
      $(document).ready(function() {

$('#pass2').keyup(function() {

  var pass1 = $('#pass1').val();
  var pass2 = $('#pass2').val();

  if ( pass1 == pass2 ) {
    $('#error2').css("background", "url(assets/pass/check.png)");
  } else {
    $('#error2').css("background", "url(assets/pass/check-.png)");
  }

});

});
    </script>

  
  <!-- alertas-->


 
</head>


  

 
    <body class="app sidebar-mini rtl" >
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
      <main class="app-content">
       <div class="app-title">
        <div>
          <h1><i class="colorp fa fa-id-card"  ></i><?=$titulo?> Usuario </h1>
          <p></p>
        </div>
       
           </div>
      
             <div class="content-wrapper">
             <div class="col-md-6">
              <div class="card">
              
              <div class="card-body">
              <div class="col-md-12">
                <form class="form-horizontal" method="POST" action="?c=notaria&a=Guardar">
                  <div class="form-group">
                                        
                    <input class="form-control" name="id" type="hidden" value="<?=$p->getidnotaria()?>" >
                                         
                  </div>

                   <div class="form-group" >                    
                          <label  for="fk_idsucursal">Sucursal</label>   
                          <select class="form-control" name="fk_idsucursal" id="fk_idsucursal" required >
                      <option value="">Seleccione la Sucursal</option>
                          <?php foreach($this->modelo->Listarsucursal() as $r): ?>
                                <option value="<?=$r->idsucursal?>" <?=$p->getfk_idsucursal()==$r->idsucursal ? "selected": ""?> ><?=$r->nombre?> </option>
                          <?php endforeach;?>
                        </select>
                  </div>

                        
                  <div class="form-group">
                       <label for="Rol">Rol</label>
                    
                       <select class="form-control"   name="Rol" required  />
                      <option value="">Seleccione un Rol</option>
                      <option value="Notaria" <?=$u->getRol()=="Notaria" ? "selected": ""?> >Notaria</option>
                      <option value="Informador" <?=$u->getRol()=="Informador" ? "selected": ""?> >Informador</option>
                      <option value="Gerente"  <?=$u->getRol()=="Gerente" ? "selected": ""?>>Gerente</option>        
                      <option value="Supervisor"  <?=$u->getRol()=="Supervisor" ? "selected": ""?>>Supervisor</option>   
                      <option value="Inmobiliaria"  <?=$u->getRol()=="Inmobiliaria" ? "selected": ""?>>Inmobiliaria</option>                    
                      <option value="Administrador"  <?=$u->getRol()=="Administrador" ? "selected": ""?>>Administrador</option>


                           
                    </select>
                    </div>

                     <div class="form-group">
                       <label for="Usuario">Nombre Usuario</label>
                       <div id="mensaje" class="alert alert-warning" role="alert">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong >Solo poner letras y numeros<br>
                         (No se admiten espacios o simbolos)</strong>
                    </div>
                    
                      <input class="form-control" require type="text"  name="Usuario" autocomplete="off" placeholder="Digite Usuario" maxlength="50" value="<?=$u->getUsuario()?>" required/>
                    
                    </div>
                   
                     

                    <div class="form-group">
                       <label for="Contrasena">Contrasena</label>
                    
                      <input class="form-control" require type="text" minlength="4" maxlength="20" name="Contrasena" placeholder="Digite Contrasena" value="<?=$u->getContrasena()?>" required/>
                    
                    </div>
                    
                    <!-- Password Verification 
                  <label for="pass1">Contraseña:</label>
                    <input type="password" id="pass1" value="">
                    <div id="error1"></div>
                  <label for="pass2">Repetir contraseña:</label>
                    <input type="password" id="pass2" value="">-->
                  <!-- Error Text -->
                  
                  
                 

                  <div class="form-group">
                    <label   for="Nombres" >Nombre(s)</label>
                      <input  class="form-control" required type="text" autocomplete="off" required maxlength="50" name="Nombres"  require onkeypress="return soloLetras(event)" placeholder="Digite el(los) Nombre(s)"  value="<?=$p->getNombresnotaria()?>"/>
                  </div>
                

                 
                  
                    
    
                    <div class="form-group">
                    <label   for="NumeroDocumento">Número de documento</label>
                    
                      <input  class="form-control" require autocomplete="off" maxlength="10" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" type="number" name="NumeroDocumento"  require onkeypress="return soloNumeros(event)" placeholder="Digite el número de documento" value="<?=$p->getNumeroDocumentonotaria()?>" required/>
                    
                    </div>
                 <br>
                    <div class="form-group">
                    <label for="CorreoElectronico">Correo electrónico </label>
                    
                      <input class="form-control" require autocomplete="off" type="email"  name="CorreoElectronico" id="CorreoElectronico" require onkeypress="return  ValidarCorreo()" placeholder=" Ejem :  ejemplo@gmail.com" value="<?=$p->getCorreoElectroniconotaria()?>" required/>
                    
                  </div>
                  <div class="form-group">
                    <label for="ConfirmCorreoElectronico">Repita el correo electrónico</label>
                    
                      <input class="form-control" require  autocomplete="off" type="email"  name="ConfirmCorreoElectronico" id="ConfirmCorreoElectronico" require onkeypress="return  ValidarCorreo()" placeholder=" Ejem :  ejemplo@gmail.com" value="<?=$p->getCorreoElectroniconotaria()?>" required/>
                    
                  </div>
                  <label id="Res"></label>
                  
                
                      

                
                    
                       <input class="form-control" name="fk_idUsuario" type="hidden" value="<?=$p->getfk_idUsuario()?>" >


                 
                    
                  
                      
                                  
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
            </div>
          </div>
        </main>
        <script type="text/javascript" src="assets/Validaciones/Instructor.js"></script>
        
  </body>

</html>