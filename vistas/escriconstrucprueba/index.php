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

<!-- Duplicar input-->
<script type="text/javascript">

  let nuevo = function() {
  $("<section/>").insertBefore("[name='enviar']")
                 .append($(".inputs").html())
                 .find("button")
                 .attr("onclick", "eliminar(this)")
                 .text("Eliminar");
}

let eliminar = function(obj) {
  $(obj).closest("section").remove();
}
  


</script>
<!--Fin Duplicar input-->


<!-- Duplicar input-->
<script type="text/javascript">

  let otro = function() {
  $("<section/>").insertBefore("[name='prueba']")
                 .append($(".nombres").html())
                 .find("button")
                 .attr("onclick", "borrar(this)")
                 .text("Eliminar");
}

let borrar = function(obj) {
  $(obj).closest("section").remove();
}
  


</script>
<!--Fin Duplicar input-->





<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>






<script>
    function cambiar(){
    var pdrs = document.getElementById('file-upload').files[0].name;
    document.getElementById('info').innerHTML = pdrs;
}

  </script>
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
          <h1><i class="colorp fa fa-clipboard"  ></i>   Orden de escrituración ( Piloto )</h1>

          <p></p>
        </div>
       <!-- <img src="archivos/Amarilo.png" style="width: 100px">-->
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
                                aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width:25%">
                                  25%
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

                    <label  for="" >AUTORIZACIÓN Y ORDEN ESCRITURA : </label>
                     
                  </div>

                   <div class="form-group" >

                    <label  for="" >Proyecto</label>
                      <select class="form-control"   name="tipodocumentolocatario"   />
                      <option value="">Seleccione un proyecto </option>
                      <option value="">HACIENDA CASABLANCA EL REDIL</option>
                      <option value="">CORINTO SUB-ETAPA 2</option>
                      <option value="">LAS HUERTAS DE CAJICÁ RESERVADO II</option>

                                                  
                     </select>
                  </div>


                  <table>

                        <th style="width: 400px;">
                            <label   for="fecha" >Fecha firma de escritura</label>

                        </th>
                        <th  style="width: 400px;">
                          
                        </th>
                        <tr>
                          <td>
                            <input  class="form-control"type="date"  name="" id="" />
                          </td>
                           <td style="padding-left: 30%;">
                            <label   for="fecha" >Notaria 16</label>
                          </td>
                        </tr>
                  </table>
                  <br>


                   <table>

                        <th style="width: 350px; padding-left: 10px;">
                            <label>Inmueble</label>
                        </th>
                        <th  style="width: 250px;">
                          <label>Nombre Inmueble</label>
                        </th>     
                        <th  style="width: 300px;">
                          <label>Matricula Inmobiliaria</label>
                        </th>                       
                  </table>


                 
                    <div class="inputs">
                          <table>
                            <th style="width: 300px;"></th>
                            <th style="width: 300px;"></th>
                            <th style="width: 300px;"></th>
                            <th style="width: 300px;"></th>
                            <tr>
                              <td><br>
                                 
                                    <select class="form-control"   name="tipodocumentolocatario"   />
                                    <option value="">Seleccione un Inmueble </option>
                                    <option value="">Apartamento</option>
                                    <option value="">Garaje</option>
                                    <option value="">Otro</option>

                                                                
                                   </select>
                                
                              </td>
                              <td style="padding-left: 5%;"><br>
                                   <input  class="form-control"type="text" placeholder="Ingrese nombre del inmueble" name="" id="" />
                              </td>
                              <td style="padding-left: 5%;"><br>
                                  <input  class="form-control"type="text" placeholder="Ingrese la matricula inmobiliaria" name="" id="" />
                              </td>
                              <td style="padding-left: 5%;"><br>
                                  <button type="button" class="btn btn-primary" onclick="nuevo();">Agregar</button>
                              </td>
                            </tr>
                          </table>                      
                    </div>
                    <input type="hidden" name="enviar">
                    <br>
                  

                  <div class="nombres">
                          <table>
                            <th style="width: 300px;"></th>
                            <th style="width: 300px;"></th>
                            <th style="width: 300px;"></th>
                            <th style="width: 300px;"></th>
                            <th style="width: 300px;"></th>
                            <tr>
                              <td colspan="2"><br>
                                 <label>Nombre</label>
                                 <input  class="form-control"type="text" placeholder="Ingrese el nombre del inmueble" name="" id="" />
                              </td>
                               <td colspan="1"></td>
                               <td colspan="1"><label></label><br>
                                   <button type="button" class="btn btn-primary" onclick="otro();">Agregar</button></td>
                               <td colspan="1"></td>
                            </tr>


                            <tr>
                              <td><br>
                                <label>Numero de identificación : </label>
                                 <input  class="form-control"type="text" placeholder="Ingrese el nombre del inmueble" name="" id="" />
                              </td>
                              <td style="padding-left: 1%;"><br>
                                <label>De : </label>
                                  <input  class="form-control"type="text" placeholder="Ingrese la matricula inmobiliaria" name="" id="" />
                              </td>
                              <td style="padding-left: 1%;"><br>
                              
                                  <label  for="" >Estado Civil </label>
                                    <select class="form-control"   name=""   />

                                    <option value="">Seleccione el estado civil</option>
                                    <option value="" >Casado con sociedad conyugal vigente</option>
                                    <option value="" >Casado con sociedad conyugal disuelta y liquidada</option>
                                    <option value="" >Soltero sin unión marital de hecho</option>
                                    <option value="" >Soltero con unión marital de hecho</option>
                                      
                                   </select>
                              
                              </td>
                              <td style="padding-left: 1%;"><br>
                                <label>Porcentaje de participación : </label>
                                  <input  class="form-control"type="text" placeholder="Ingrese la matricula inmobiliaria" name="" id="" />
                              </td>
                              <td style="padding-left: 1%;"></td>
                            </tr>
                          </table>                      
                    </div>
                    <input type="hidden" name="prueba">
                    <br>

                     <div class="form-group" >

                        <label  for="" >FORMA DE PAGO : </label>
                         
                      </div>

                   <div class="form-group">

                    <label   for="" >Valor apartamento</label>
                      <input  class="form-control" autocomplete="off" type="text" minlength="6" maxlength="50"  name="" placeholder="Digite el valor del apartamento" value=""/>
                  </div> 
                  <div class="form-group">

                    <label   for="" >Valor total</label>
                      <input  class="form-control" autocomplete="off" type="text" minlength="6" maxlength="50"  name="" placeholder="Digite el valor total" value=""/>
                  </div> 
                  <br> 
                  <table>
                            <th style="width: 400px;">
                              <label   for="" >Valor subsidio</label>
                            </th>
                            <th style="width: 400px;padding-left: 7%;">
                              <label   for="" >Caja de compensación</label>
                            </th>
                           <tr>
                              <td><br>
                                <input  class="form-control" autocomplete="off" type="text" minlength="6" maxlength="50"  name="" placeholder="Digite el valor del subsidio" value=""/>
                                
                              </td>
                              <td style="padding-left: 5%;"><br>
                                   
                                   
                                    <select class="form-control"   name=""   />

                                    <option value="">Seleccione la caja de compensación</option>
                                    <option value="" >Comfenalco</option>
                                    <option value="" >Colsubsidio</option>
                                    <option value="" >Comfacundi</option>
                                    <option value="" >Compensar</option>
                                    <option value="" >Cafam</option>
                                      
                                   </select>

                              </td>
                              
                            </tr>
                          </table>  <br>   


                           <table>
                            <th style="width: 300px;">
                              <label   for="" >Valor cesantias : </label>
                            </th>
                            <th style="width: 300px;padding-left: 7%;">
                              <label   for="" >De :</label>
                            </th>
                             <th style="width: 300px;padding-left: 7%;">
                              <label   for="" >Recibidas : </label>
                            </th>
                           <tr>
                              <td><br>
                                <input  class="form-control" autocomplete="off" type="text" minlength="6" maxlength="50"  name="" placeholder="Digite el valor de de las cesantias" value=""/>
                                
                              </td>
                              <td style="padding-left: 5%;"><br>
                                   
                                  
                                    <select class="form-control"   name=""   />

                                    <option value="">Seleccione la entidad</option>
                                    <option value="" >Porvenir</option>
                                    
                                      
                                   </select>

                              </td>
                               <td style="padding-left: 5%;"><br>
                                   
                                    
                                    <select class="form-control"   name=""   />

                                    <option value="">Seleccione Si / No</option>
                                    <option value="" >Si</option>
                                    <option value="" >No</option>
                                   
                                      
                                   </select>

                              </td>
                              
                            </tr>
                          </table>      



                           <br>   


                           <table>
                            <th style="width: 300px;padding-left: 1%;">
                              <label   for="" >Valor ahorros programados : </label>
                            </th>
                            <th style="width: 300px;padding-left: 1%;">
                              <label   for="" >De : </label>
                            </th>
                            <th style="width: 300px;padding-left: 1%;">
                              <label   for="" >Cuenta No. </label>
                            </th>
                             <th style="width: 300px;padding-left: 1%;">
                              <label   for="" >Recibidas : </label>
                            </th>
                           <tr>
                              <td><br>
                                <input  class="form-control" autocomplete="off" type="text" minlength="6" maxlength="50"  name="" placeholder="Digite el valor ahorros programados" value=""/>
                                
                              </td>
                               <td><br>
                                <input  class="form-control" autocomplete="off" type="text" minlength="6" maxlength="50"  name="" placeholder="De" value=""/>
                                
                              </td>
                                <td><br>
                                <input  class="form-control" autocomplete="off" type="text" minlength="6" maxlength="50"  name="" placeholder="No. de cuenta" value=""/>
                                
                              </td>
                               <td><br>
                                <input  class="form-control" autocomplete="off" type="text" minlength="6" maxlength="50"  name="" placeholder="Recibidas ?" value=""/>
                                
                              </td>
                              
                            </tr>
                          </table> <br>


                          <div class="form-group">

                    <label   for="" >Valor recursos propios recibidos a la fecha</label>
                      <input  class="form-control" autocomplete="off" type="text" minlength="6" maxlength="50"  name="" placeholder="Digite el valor de recursos propios recibidos a la fecha" value=""/>
                  </div> 

                  <br>


                   <table>

                        <th style="width: 400px;">
                            <label   for="fecha" >Valor credito</label>

                        </th>
                        <th  style="width: 400px;">
                          
                        </th>
                        <tr>
                          <td>
                            <input  class="form-control"type="text" placeholder="Ingrese el valor del credito" name="" id="" />
                          </td>
                            <td>
                            <input  class="form-control"type="text"  name="" id="" />
                          </td>
                        </tr>
                  </table><br>


                   <div class="form-group" >

                        <label  for="" >GASTOS A CANCELAR EN NOTARIA APROXIMADAMENTE </label>
                        <input  class="form-control"type="text"  name="" id="" />
                         
                      </div>


                      <br>

                       <div class="form-group">                   
                    <label  for="">Seleccione documentos a adjuntar</label><br><br>
                    
                    
                      <input type="file" name=""  id="hola" accept=".pdf" class="inputfile inputfile-5"   style="opacity:0;font-size:100%;" value=""/>
                      
                      <label for="hola" style=" font-size:90%;" data-toggle="tooltip"  ><span></span> <strong style=" height: 40px; font-size:100%;color: #fff;"> Seleccionar</strong></label>
                      
                   
                  </div><br><br>









                  <table>
                          <tr>
                            <td>
                            <form method="POST" id="2">
                            <input class="btn btn-primary" type="button" onclick="location.href='?c=simulador';" value="Siguiente" />
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