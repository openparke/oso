<!DOCTYPE html>
<html lang="en">
<head>
  <!-- orden abajo-->
  <link rel="stylesheet" href="vistas/Inicio/template/css/default.css">
  <!-- Fin orden abajo-->
    
    <script type="text/javascript">(function () { var ldk = document.createElement('script'); ldk.type = 'text/javascript'; ldk.async = true; ldk.src = 'https://s.cliengo.com/weboptimizer/5c1a61b9e4b0d5d7dc1217b5/5c1a6cd2e4b0d5d7dc1218f8.js'; var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ldk, s); })();</script>
      <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
       
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <link rel="stylesheet" href="form.css" >
        <script src="form.js"></script>
          <!-- Progress Bar-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   
    <!-- Fin Progress Bar-->

  <!-- alertas-->


 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<link rel="stylesheet" type="text/css" href="assets/file/css/component.css" />
<script>
    function cambiar(){
    var pdrs = document.getElementById('file-upload').files[0].name;
    document.getElementById('info').innerHTML = pdrs;
}

  </script>
<!-- mostrar datos en un check box-->
  <script type="text/javascript">
    function showContent() {
        element = document.getElementById("content");
        check = document.getElementById("check");
        if (check.checked) {
            element.style.display='block';
        }
        else {
            element.style.display='none';
        }
    }
</script>
<!--Fin mostrar datos en un check box-->


<script>(function(e,t,n){var r=e.querySelectorAll("html")[0];r.className=r.className.replace(/(^|\s)no-js(\s|$)/,"$1js$2")})(document,window,0);</script>
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
                               
                              
                              
                                        location.href='?c=solicitud'
                                      
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
                               
                                        location.href='?c=solicitud'
                                      
                            } 
                          });
                        //imprimo el resultado en el div mensaje que procesa ajax
                      
                    }
                });
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
  $("#fk_idnotaria").val("1");
});
    </script>
  


  
  <!-- alertas-->

 
</head>
 
    <body class="app sidebar-mini rtl" style="background-color:#FDFEFE;" oncopy="return false" onpaste="return false" oncut="return false"  >

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

   
      <main class="app-content" style="zoom:100%;background-color:#FDFEFE;"
  >
       <div class="app-title">
        <div>
          <h1><i class="colorp fa fa-clipboard"  ></i>   Datos Comprador</h1>
          <p></p>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
        <a href="index.php"><li class="breadcrumb-item" ><i class="colorp fa fa-home fa-lg" ></i></li></a>
        <li class="breadcrumb-item"></li>  
     
          <li ></a></li>
           </ul>
           </div>
         
      
             <div class="content-wrapper" style="zoom:85%;padding-left: 0%;padding-right: 0%;" >

                
             <div class="col-md-10"  style="padding: 15px;">
              <!-- Progress Bar-->
                 <br>
                  <div class="progress">
                                <div class="progress-bar progress-bar-striped active" role="progressbar"
                                aria-valuenow="59" aria-valuemin="0" aria-valuemax="100" style="width:59%">
                                  59%
                                </div>
                  </div>
                 <br>
                  <!-- Fin Progress Bar-->
              <div class="card" >
              
              <div class="card-body" id="fondo">
              <div class="col-md-12" >
                 <form class="form-horizontal" method="POST" enctype="multipart/form-data" action="?c=solicitud&a=Guardar">

                  <div class="form-group">
                                        
                    <input class="form-control" name="id" type="hidden" value="" >
                  </div>

                   <div class="form-group" >

                    <label  for="" >Identificación</label>
                      <select class="form-control"   name="tipodocumentolocatario"   />
                      <option value="">Seleccione el tipo de documento</option>
                      <option value="">Cédula de ciudadanía</option>
                      <option value="">Cédula de extranjería</option>
                      <option value="">Nit para personas jurídicas</option>
                      <option value="">Pasaporte</option>
                                                  
                     </select>
                     </div>



                   <div class="form-group" >

                    <label  for="" >Estado Civil </label>
                      <select class="form-control"   name=""   />

                      <option value="">Seleccione el estado civil</option>
                      <option value="" >Casado con sociedad conyugal vigente</option>
                      <option value="" >Casado con sociedad conyugal disuelta y liquidada</option>
                      <option value="" >Soltero sin unión marital de hecho</option>
                      <option value="" >Soltero con unión marital de hecho</option>
                        
                     </select>
                  </div>


                   <div class="form-group">

                    <label   for="" >Valor total venta</label>
                      <input  class="form-control" autocomplete="off" type="text" minlength="6" maxlength="50"  name="" placeholder="Digite el valor total de la venta" value=""/>
                  </div> 


                  



                <div class="form-group" >
                   <label   for="" >Forma de pago</label>
                  
                     <table>

                        <th style="width: 400px;padding-left: 20%">
                        
                        </th>
                        <th  style="width: 400px;padding-left: 20%">
                          
                        </th>
                        <tr>
                         
                           <td style="padding-left: 20%;padding-top: 1%">
                            <br>
                              &nbsp &nbsp &nbsp Uso exclusivo &nbsp &nbsp &nbsp <input class="form-check-input" type="checkbox"  name="aceptaprimer" id="aceptaprimer" required value="Si"> 
                          </td>
                           <td style="padding-left: 20%">
                            <br>
                              &nbsp &nbsp &nbsp Credito &nbsp &nbsp &nbsp <input type="checkbox" name="check" id="check" value="1" onchange="javascript:showContent()" />

                                  <div id="content" style="display: none;">
                                   contenido del div escondido<br/>
                                   contenido del div escondido<br/>
                                   contenido del div escondido<br/>
                                 </div> 
                          </td>
                        </tr>
                      </table>
                </div>


                  <div class="form-group" >

                    <label  for="" >Proyecto</label>
                      <select class="form-control"   name="tipodocumentolocatario"   />
                      <option value="">Seleccione un proyecto </option>
                      <option value="">Proyecto 1</option>
                      <option value="">Proyecto 2</option>
                      <option value="">Proyecto 3</option>

                                                  
                     </select>
                  </div>

                   <div class="form-group">

                    <label   for="" >No Matricula inmobiliaria</label>
                      <input  class="form-control" autocomplete="off" type="text" minlength="6" maxlength="50"  name="" placeholder="Digite el numero de matricula inmobiliaria" value=""/>
                  </div> 





                  

                                 
                 <div class="form-group">
                   
                     <table>

                        <th style="width: 400px;padding-left: 20%">
                             <label class="form-check-label">Garajes</label>

                        </th>
                        <th  style="width: 400px;padding-left: 20%">
                          
                        </th>
                        <tr>
                          <td style="padding-left: 20%">
                            <br>
                              &nbsp &nbsp &nbsp Privado &nbsp &nbsp &nbsp <input class="form-check-input" type="checkbox"  name="aceptaprimer" id="aceptaprimer" required value="Si"> 
                          </td>
                           <td style="padding-left: 20%">
                            <br>
                              &nbsp &nbsp &nbsp Uso exclusivo &nbsp &nbsp &nbsp <input class="form-check-input" type="checkbox"  name="aceptaprimer" id="aceptaprimer" required value="Si"> 
                          </td>
                        </tr>
                      </table>
                     
                    </label>
                  </div> 



                  <div class="form-group">
                   
                     <table>

                        <th style="width: 400px;padding-left: 20%">
                             <label class="form-check-label">Depositos</label>

                        </th>
                        <th  style="width: 400px;padding-left: 20%">
                          
                        </th>
                        <tr>
                          <td style="padding-left: 20%">
                            <br>
                              &nbsp &nbsp &nbsp Privado &nbsp &nbsp &nbsp <input class="form-check-input" type="checkbox"  name="aceptaprimer" id="aceptaprimer" required value="Si"> 
                          </td>
                           <td style="padding-left: 20%">
                            <br>
                              &nbsp &nbsp &nbsp Uso exclusivo &nbsp &nbsp &nbsp <input class="form-check-input" type="checkbox"  name="aceptaprimer" id="aceptaprimer" required value="Si"> 
                          </td>
                        </tr>
                      </table>
                     
                    </label>
                  </div> 
                                
                               
                  
                
                  <table>
                          <tr>
                            <td>
                            <form method="POST" id="2">
                            <input class="btn btn-primary" type="button" onclick="location.href='?c=respuesta';" value="Siguiente" />
                            </form>
                            </td>
                            
                            <td>
                             <form method="POST" id="1">
                                <button class="btn btn-secondary" type="submit" name="cancelar" value="cancelar" ><i class="  fa fa-window-close"></i>Cancelar</button> 
                             </form>
                           </td>
                         </tr>
                          </table> 


                      </form>
                  
                </div>
                
              </div>
            </div>
            <br><br>
          </div>
          <br><br>
        </main>
         
           <script src="assets/file/js/custom-file-input.js"></script>
        <script type="text/javascript" src="assets/Validaciones/Programa.js"></script>
        
        
  </body>

</html>