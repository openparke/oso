<!DOCTYPE html>
<html lang="en">
<head>
  <!-- alertas-->


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
                               
                              
                              
                                        location.href='?c=informacion'
                                      
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
                               
                                        location.href='?c=informacion'
                                      
                            } 
                          });
                        //imprimo el resultado en el div mensaje que procesa ajax
                      
                    }
                });
            });
        });
    </script>
    
  


  
  <!-- alertas-->


 
</head>
 
    <body class="app sidebar-mini rtl"  oncopy="return false" oncut="return false" onpaste="return false"  >
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
          <h1><i class="colorp fa fa-th-list"  ></i><?=$titulo?></h1>
          <p></p>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
        <a href="index.php"><li class="breadcrumb-item" ><i class="colorp fa fa-home fa-lg" ></i></li></a>
        <li class="breadcrumb-item"></li>  
          <?php if($_SESSION['Rol']=="Legalizador"):?><!-- Legalizador-->
       <li class="breadcrumb-item"><a href="?c=informacion">Listar</li>
      <?php endif;?>     
       <?php if($_SESSION['Rol']=="Abogado"):?><!-- Legalizador-->
       <li class="breadcrumb-item"><a href="?c=informacion">Listar</li>
      <?php endif;?>     
         
          <li ></a></li>
           </ul>
           </div>
      
             <div class="content-wrapper">
             <div class="col-md-6">
              <div class="card">
              
              <div class="card-body">
              <div class="col-md-12">
                 <form class="form-horizontal" method="POST" action="?c=informacion&a=Guardar">
                  <div class="form-group">
                                        
                    <input class="form-control" name="id" type="hidden" value="<?=$p->getidinformacion()?>" >
                                         
                  </div>
                   

                  <div class="form-group">
                    <label   for="matricula" >No de Matricula</label>
                      <input  class="form-control" autocomplete="off"  required name="matricula" require  placeholder="Digite El matricula Del informacion De Formación"  value="<?=$p->getmatricula()?>"/>
                  </div>
                  <div class="form-group" >

                    <label  for="estadocivil" >Estado Civil</label>
                      <select class="form-control"   name="estadocivil" required  />
                      <option value="">Seleccione el estado</option>
                      <option value="Soltero(a)" <?=$p->getestadocivil()=="Soltero(a)" ? "selected": ""?> >Soltero(a)</option>
                      <option value="Casado(a)"  <?=$p->getestadocivil()=="Casado(a)" ? "selected": ""?>>Casado(a)</option>
                      
                     </select>
                     </div>
                 
                   <div class="form-group" >

                    <label  for="tipodocumento" >Tipo de documento</label>
                      <select class="form-control"   name="tipodocumento" required  />
                      <option value="">Seleccione el tipo de documento</option>
                      <option value="Cédula de ciudadanía" <?=$p->gettipodocumento()=="Cédula de ciudadanía" ? "selected": ""?> >Cédula de ciudadanía</option>
                      <option value="Tarjeta de identidad"  <?=$p->gettipodocumento()=="Tarjeta de identidad" ? "selected": ""?>>Tarjeta de identidad</option>
                      <option value="Cédula de extranjería" <?=$p->gettipodocumento()=="Cédula de extranjería" ? "selected": ""?>>Cédula de extranjería</option>
                      <option value="Nit para personas jurídicas" <?=$p->gettipodocumento()=="Nit para personas jurídicas" ? "selected": ""?>>Nit para personas jurídicas</option>
                      <option value="Pasaporte" <?=$p->gettipodocumento()=="Pasaporte" ? "selected": ""?>>Pasaporte</option>
                      <option value="Registro civil" <?=$p->gettipodocumento()=="Registro civil" ? "selected": ""?>>Registro civil</option>          
                     </select>
                     </div>
                   <div class="form-group">
                    <label   for="numerodocumento">Número de documento</label>
                    
                      <input  class="form-control" require autocomplete="off" type="number" name="numerodocumento"  require onkeypress="return soloNumeros(event)" placeholder="Digite el número de documento" value="<?=$p->getnumerodocumento()?>" required/>
                    
                    </div>
                   <div class="form-group">
                    <label   for="solicitud" >No de solicitud</label>
                      <input  class="form-control" autocomplete="off" required name="solicitud" placeholder="Digite El solicitud Del informacion De Formación"  value="<?=$p->getsolicitud()?>"/>
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
            </div>
          </div>
        </main>
        
        <script type="text/javascript" src="assets/Validaciones/Programa.js"></script>
        
        
  </body>

</html>