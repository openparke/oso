<!DOCTYPE html>
<html lang="en">
<head>
    
    <script type="text/javascript">(function () { var ldk = document.createElement('script'); ldk.type = 'text/javascript'; ldk.async = true; ldk.src = 'https://s.cliengo.com/weboptimizer/5c1a61b9e4b0d5d7dc1217b5/5c1a6cd2e4b0d5d7dc1218f8.js'; var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ldk, s); })();</script>
      <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
       
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <link rel="stylesheet" href="form.css" >
        <script src="form.js"></script>
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
    
  


  
  <!-- alertas-->

 
</head>
 
    <body class="app sidebar-mini rtl" style="background-color:#FDFEFE;"   >
   
      <main class="app-content" style="zoom:100%;background-color:#FDFEFE;"
  >
       <div class="app-title">
        <div>
          <h1><i class="colorp fa fa-clipboard"  ></i><?=$titulo?></h1>
          <p></p>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
        <a href="index.php"><li class="breadcrumb-item" ><i class="colorp fa fa-home fa-lg" ></i></li></a>
        <li class="breadcrumb-item"></li>  
          <?php if($_SESSION['Rol']=="Legalizador"):?><!-- Legalizador-->
       <li class="breadcrumb-item"><a href="?c=solicitud">Listar</li>
      <?php endif;?>     
       <?php if($_SESSION['Rol']=="Abogado"):?><!-- Legalizador-->
       <li class="breadcrumb-item"><a href="?c=solicitud">Listar</li>
      <?php endif;?>     
         
          <li ></a></li>
           </ul>
           </div>
      
             <div class="content-wrapper" style="zoom:85%;padding-left: 0%;padding-right: 0%;" >
                
             <div class="col-md-10"  style="padding: 15px;">
              <div class="card" >
              
              <div class="card-body" id="fondo">
              <div class="col-md-12" >
                 <form class="form-horizontal" method="POST" enctype="multipart/form-data" action="?c=solicitud&a=Guardar">

                  <div class="form-group">
                                        
                    <input class="form-control" name="id" type="hidden" value="<?=$p->getidsolicitud()?>" >
                        




                  </div>
                   <?php if($_SESSION['Rol']=="Informador"):?><!-- Informador-->

                                  
                          <label  for="fk_idautorizacion">Autorizacion
                              <?=$_SESSION['idAuth']?>

                          </label>   
                 

                  <div class="form-group">

                    <label   for="matriculainmobiliaria" >No Matricula</label>
                      <input  class="form-control" autocomplete="off" type="text" maxlength="50"  name="matriculainmobiliaria" required placeholder="Ingrese el numero de a matricula inmobiliaria" value="<?=$p->getmatriculainmobiliaria()?>"/>
                  </div>                 
                  <div class="form-group">
                    <label   for="cedulapropietario" >Cédula Propietario</label>
                      <input  class="form-control" autocomplete="off" type="number"  name="cedulapropietario" maxlength="10" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" required  placeholder="Ingrese el numero de la cédula del propietario" value="<?=$p->getcedulapropietario()?>"/>
                  </div>


                  <div class="form-group" >

                    <label  for="estadocivilpropietario" >Estado Civil Propietario</label>
                      <select class="form-control"   name="estadocivilpropietario" required  />

                      <option value="">Seleccione el estado civil del propietario</option>
                      <option value="Casado con sociedad conyugal vigente" <?=$p->getestadocivilpropietario()=="Casado con sociedad conyugal vigente" ? "selected": ""?> >Casado con sociedad conyugal vigente</option>
                      <option value="Casado con sociedad conyugal disuelta y liquidada"  <?=$p->getestadocivilpropietario()=="Casado con sociedad conyugal disuelta y liquidada" ? "selected": ""?>>Casado con sociedad conyugal disuelta y liquidada</option>                      
                      <option value="Soltero sin unión marital de hecho" <?=$p->getestadocivilpropietario()=="Soltero sin unión marital de hecho" ? "selected": ""?>>Soltero sin unión marital de hecho</option>

                      <option value="Soltero con unión marital de hecho" <?=$p->getestadocivilpropietario()=="Soltero con unión marital de hecho" ? "selected": ""?>>Soltero con unión marital de hecho</option>      
                     </select>
                     </div>

                    <div class="form-group" >
                      <table>
                        <th style="width: 400px;">
                            <label   for="nombrelocatario" >Primer nombre del locatario</label>
                        </th>
                        <th style="width: 400px;">
                            <label   for="nombreotrolocatario" >Segundo nombre del locatario</label>
                        </th>
                        <tr>
                          <td>
                             <input  class="form-control" autocomplete="off" type="text" maxlength="30" name="nombrelocatario" required   placeholder="Ingrese el primer nombre del locatario" value="<?=$p->getnombrelocatario()?>"/>
                          </td>
                           <td>
                               <input  class="form-control" autocomplete="off" type="text" maxlength="30" name="nombreotrolocatario" placeholder="Ingrese el segundo nombre del locatario (opcional)" value="<?=$p->getnombreotrolocatario()?>"/>
                          </td>
                        </tr>
                      </table>
                    </div>
                    <div class="form-group" >
                      <table>
                        <th style="width: 400px;">
                            <label   for="primerapellido" >Primer apellido del locatario</label>
                        </th>
                        <th style="width: 400px;">
                           <label   for="segundoapellido" >Segundo apellido del locatario</label>
                        </th>
                        <tr>
                          <td>
                             <input  class="form-control" autocomplete="off" type="text" maxlength="30" placeholder="Ingrese el primer apellido del locatario" name="primerapellido" required value="<?=$p->getprimerapellido()?>"/>
                          </td>
                           <td>
                              <input  class="form-control" autocomplete="off" type="text" maxlength="30" name="segundoapellido" placeholder="Ingrese el segundo apellido del locatario (opcional)" value="<?=$p->getsegundoapellido()?>"/>
                          </td>
                        </tr>
                      </table>
                    </div>

                  <div class="form-group" >

                    <label  for="tipodocumentolocatario" >Tipo de documento Locatario</label>
                      <select class="form-control"   name="tipodocumentolocatario" required  />
                      <option value="">Seleccione el tipo de documento</option>
                      <option value="Cédula de ciudadanía" <?=$p->gettipodocumentolocatario()=="Cédula de ciudadanía" ? "selected": ""?> >Cédula de ciudadanía</option>
                     
                      <option value="Cédula de extranjería" <?=$p->gettipodocumentolocatario()=="Cédula de extranjería" ? "selected": ""?>>Cédula de extranjería</option>
                      <option value="Nit para personas jurídicas" <?=$p->gettipodocumentolocatario()=="Nit para personas jurídicas" ? "selected": ""?>>Nit para personas jurídicas</option>
                      <option value="Pasaporte" <?=$p->gettipodocumentolocatario()=="Pasaporte" ? "selected": ""?>>Pasaporte</option>
                             
                     </select>
                     </div>

                   <div class="form-group">
                    <label   for="cedulalocatario" >Cédula Locatario</label>
                      <input  class="form-control" autocomplete="off" maxlength="10" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" type="number"  name="cedulalocatario" required   placeholder="Ingrese el numero de la cédula del locatario" value="<?=$p->getcedulalocatario()?>"/>
                  </div>
                   <div class="form-group">
                  <!--   <label   for="numerosolicitud" >numerosolicitud</label> -->
                      <input  class="form-control" autocomplete="off" type="hidden"  name="numerosolicitud" require   value="<?=$p->getnumerosolicitud()?>"/>
                  </div>
                   



                  <div class="form-group">                   
                    <label  for="documentoinformador">Certificado</label><br>
                    
                      <input type="file" name="documentoinformador"  id="documentoinformador" class="inputfile inputfile-5" data-multiple-caption="{count} files selected"  style="opacity:0;font-size:100%;" value="<?=$p->getdocumentoinformador()?>"/>
                      
                      <label for="documentoinformador" style=" font-size:90%;" data-toggle="tooltip"  ><span></span> <strong style=" font-size:100%;color: #fff;"> Seleccionar</strong></label>
                      
                   
                  </div>
                
                 

                   <div class="form-group">
                    <label   for="fecha" >Fecha</label>
                      <input  class="form-control" autocomplete="off" type="datetime"  name="fecha" id="fecha" require value="<?php echo date("d-m-Y");?>" />
                      

                  </div>

                  <div class="form-group" >

                    <label  for="sucursal" >Nombre sucursal</label>
                      <select class="form-control"   name="sucursal" required  />
                      <option value="">Seleccione la Sucursal</option>
                      <option value="San Martin" <?=$p->getsucursal()=="San Martin" ? "selected": ""?> >San Martin</option>
                           
                     </select>
                     </div>


                   <div class="form-group">
                   <!--  <label   for="estado" >estado</label> -->
                      <input  class="form-control" autocomplete="off" type="hidden"  name="estado" require  value="<?=$p->getestado()?>"/>
                  </div>
                   <div class="form-group">
                <!--     <label   for="observacion" >observacion</label> -->
                      <input  class="form-control" autocomplete="off" type="hidden"  name="observacion" require value="<?=$p->getobservacion()?>"/>
                  </div>

                  <div class="form-group" >                    
                          <label  for="fk_idnotaria">Informador</label>   
                          <select class="form-control" name="fk_idnotaria" required >
                      <option value="">Seleccione el Informador</option>
                          <?php foreach($this->modelo->ListarNotarias() as $r): ?>
                                <option value="<?=$r->idnotaria?>" <?=$p->getfk_idnotaria()==$r->idnotaria ? "selected": ""?> ><?=$r->Nombresnotaria?> </option>
                          <?php endforeach;?>
                        </select>
                  </div>
                   <div class="form-group">
                   
                      <input  class="form-control" autocomplete="off" type="hidden" name="documentonotaria" require value="<?=$p->getdocumentonotaria()?>"/>
                  </div>



                   <?php endif;?>
















                    <?php if($_SESSION['Rol']=="Administrador"):?><!-- Administrador-->

                     <div class="form-group" >                    
                          <label  for="fk_idautorizacion">Autorizacion</label>   
                          <select class="form-control" name="fk_idautorizacion"  >
                      <option value="">Seleccione la Autorizacion</option>
                          <?php foreach($this->modelo->Listarautorizacion() as $r): ?>
                                <option value="<?=$r->idautorizacion?>" <?=$p->getfk_idautorizacion()==$r->idautorizacion ? "selected": ""?> ><?=$r->nombre?> </option>
                          <?php endforeach;?>
                        </select>
                  </div>


                  <div class="form-group">

                    <label   for="matriculainmobiliaria" >No Matricula</label>
                      <input  class="form-control" autocomplete="off" type="text"   name="matriculainmobiliaria" required placeholder="Ingrese el numero de a matricula inmobiliaria" value="<?=$p->getmatriculainmobiliaria()?>"/>
                  </div>                 
                  <div class="form-group">
                    <label   for="cedulapropietario" >Cédula Propietario</label>
                      <input  class="form-control" autocomplete="off" type="number"  name="cedulapropietario" required  placeholder="Ingrese el numero de la cédula del propietario" value="<?=$p->getcedulapropietario()?>"/>
                  </div>


                  <div class="form-group" >

                    <label  for="estadocivilpropietario" >Estado Civil Propietario</label>
                      <select class="form-control"   name="estadocivilpropietario" required  />

                      <option value="">Seleccione el estado civil del propietario</option>
                      <option value="Casado con sociedad conyugal vigente" <?=$p->getestadocivilpropietario()=="Casado con sociedad conyugal vigente" ? "selected": ""?> >Casado con sociedad conyugal vigente</option>
                      <option value="Casado con sociedad conyugal disuelta y liquidada"  <?=$p->getestadocivilpropietario()=="Casado con sociedad conyugal disuelta y liquidada" ? "selected": ""?>>Casado con sociedad conyugal disuelta y liquidada</option>                      
                      <option value="Soltero sin unión marital de hecho" <?=$p->getestadocivilpropietario()=="Soltero sin unión marital de hecho" ? "selected": ""?>>Soltero sin unión marital de hecho</option>

                      <option value="Soltero con unión marital de hecho" <?=$p->getestadocivilpropietario()=="Soltero con unión marital de hecho" ? "selected": ""?>>Soltero con unión marital de hecho</option>      
                     </select>
                     </div>

                   <div class="form-group" >
                      <table>
                        <th style="width: 400px;">
                            <label   for="nombrelocatario" >Primer nombre del locatario</label>
                        </th>
                        <th style="width: 400px;">
                            <label   for="nombreotrolocatario" >Segundo nombre del locatario</label>
                        </th>
                        <tr>
                          <td>
                             <input  class="form-control" autocomplete="off" type="text"  name="nombrelocatario" required   placeholder="Ingrese el primer nombre del locatario" value="<?=$p->getnombrelocatario()?>"/>
                          </td>
                           <td>
                               <input  class="form-control" autocomplete="off" type="text"  name="nombreotrolocatario" placeholder="Ingrese el segundo nombre del locatario (opcional)" value="<?=$p->getnombreotrolocatario()?>"/>
                          </td>
                        </tr>
                      </table>
                    </div>
                    <div class="form-group" >
                      <table>
                        <th style="width: 400px;">
                            <label   for="primerapellido" >Primer apellido del locatario</label>
                        </th>
                        <th style="width: 400px;">
                           <label   for="segundoapellido" >Segundo apellido del locatario</label>
                        </th>
                        <tr>
                          <td>
                             <input  class="form-control" autocomplete="off" type="text" placeholder="Ingrese el primer apellido del locatario" name="primerapellido" required value="<?=$p->getprimerapellido()?>"/>
                          </td>
                           <td>
                              <input  class="form-control" autocomplete="off" type="text" name="segundoapellido" placeholder="Ingrese el segundo apellido del locatario (opcional)" value="<?=$p->getsegundoapellido()?>"/>
                          </td>
                        </tr>
                      </table>
                    </div>


                  <div class="form-group" >

                    <label  for="tipodocumentolocatario" >Tipo de documento Locatario</label>
                      <select class="form-control"   name="tipodocumentolocatario" required  />
                      <option value="">Seleccione el tipo de documento</option>
                      <option value="Cédula de ciudadanía" <?=$p->gettipodocumentolocatario()=="Cédula de ciudadanía" ? "selected": ""?> >Cédula de ciudadanía</option>
                      <option value="Tarjeta de identidad"  <?=$p->gettipodocumentolocatario()=="Tarjeta de identidad" ? "selected": ""?>>Tarjeta de identidad</option>
                      <option value="Cédula de extranjería" <?=$p->gettipodocumentolocatario()=="Cédula de extranjería" ? "selected": ""?>>Cédula de extranjería</option>
                      <option value="Nit para personas jurídicas" <?=$p->gettipodocumentolocatario()=="Nit para personas jurídicas" ? "selected": ""?>>Nit para personas jurídicas</option>
                      <option value="Pasaporte" <?=$p->gettipodocumentolocatario()=="Pasaporte" ? "selected": ""?>>Pasaporte</option>
                      <option value="Registro civil" <?=$p->gettipodocumentolocatario()=="Registro civil" ? "selected": ""?>>Registro civil</option>          
                     </select>
                     </div>

                   <div class="form-group">
                    <label   for="cedulalocatario" >Cédula Locatario</label>
                      <input  class="form-control" autocomplete="off" type="number"  name="cedulalocatario" required   placeholder="Ingrese el numero de la cédula del locatario" value="<?=$p->getcedulalocatario()?>"/>
                  </div>


                  <div class="form-group">
                    <label   for="numerosolicitud" >Numero de solicitud</label>
                      <input  class="form-control" autocomplete="off" type="number"  name="numerosolicitud"    placeholder="Ingrese el numero de solicitud" value="<?=$p->getnumerosolicitud()?>"/>
                  </div>

                   <div class="form-group">
                   <!--  <label   for="fecha" >fecha</label> -->
                      <input  class="form-control" autocomplete="off" type="hidden"  name="fecha" require   value="<?=$p->getfecha()?>"/>
                  </div>
                   <div class="form-group" >

                    <label  for="sucursal" >Nombre Sucursal</label>
                      <select class="form-control"   name="sucursal" required  />
                      <option value="">Seleccione la Sucursal</option>
                      <option value="San Martin" <?=$p->getsucursal()=="San Martin" ? "selected": ""?> >San Martin</option>
                           
                     </select>
                     </div>

                     <div class="form-group" >

                    <label  for="estado" >Estado</label>
                      <select class="form-control"   name="estado" required  />
                      <option value="">Seleccione el estado</option>
                      <option value="v" <?=$p->getestado()=="v" ? "selected": ""?> >Viable</option>
                      <option value="s" <?=$p->getestado()=="s" ? "selected": ""?> >Solucionar</option>
                      <option value="n" <?=$p->getestado()=="n" ? "selected": ""?> >No Viable</option>
                           
                     </select>
                     </div>

                   <div class="form-group">
                    <label   for="observacion" >observacion</label>
                      <input  class="form-control" autocomplete="off" type="text" style="height: 50px;" name="observacion" require value="<?=$p->getobservacion()?>"/>
                  </div>

                  <div class="form-group" >                    
                          <label  for="fk_idnotaria">Informador</label>   
                          <select class="form-control" name="fk_idnotaria"  >
                      <option value="">Seleccione el Informador</option>
                          <?php foreach($this->modelo->ListarNotarias() as $r): ?>
                                <option value="<?=$r->idnotaria?>" <?=$p->getfk_idnotaria()==$r->idnotaria ? "selected": ""?> ><?=$r->Nombresnotaria?> </option>
                          <?php endforeach;?>
                        </select>
                  </div>

                   
                  <div class="form-group" align="center">                    
                     <label  for="documentoinformador" style="padding-right: 48%">Certificado subido por el informador</label><br> <br> 
                    
                    
                     <?php
                     if((substr($p->getdocumentoinformador(),(strlen($p->getdocumentoinformador()))-4)) == ".pdf"){ ?>
                        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal" style="width: 80%;  float: center; background-color: #238276; border-color: #238276;">Ver Certificado</button>
                          <!-- Modal -->
                          <div class="modal fade" id="myModal" role="dialog">
                            <div class="modal-dialog modal-lg">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                  <h4 class="modal-title">Matricula No :  <?=$p->getmatriculainmobiliaria() ?></h4>
                                </div>
                                <div class="modal-body">
                                  <iframe src="<?=$p->getdocumentoinformador() ?>" width="770" height="530" style="border: none;"></iframe>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                              </div>
                            </div>
                          </div>

                    <?php } else { ?>
                    <a class="btn btn-info btn-lg"  data-target=ModalDocumento  style="width: 80%;  float: center; background-color: gray; border-color: gray;" data-toggle="tooltip" >No hay Certificados Cargados por el informador</a>
                    <?php }?>  

                  </div>
                 <br>
<br>
                  <div class="form-group" align="center" style="">                    
                     

                     <?php
                     if((substr($p->getdocumentonotaria(),(strlen($p->getdocumentonotaria()))-4)) == ".pdf"){ ?>
                      <label  for="documentonotaria" style="padding-right: 68%">Certificado</label><br><br> 
                    
                   
                       <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal" style="width: 80%;  float: center; background-color: #238276; border-color: #238276;">Ver Certificado subido anteriormente</button>
                          <!-- Modal -->
                          <div class="modal fade" id="myModal" role="dialog">
                            <div class="modal-dialog modal-lg">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                  <h4 class="modal-title">Matricula No :  <?=$p->getmatriculainmobiliaria() ?></h4>
                                </div>
                                <div class="modal-body">
                                  <iframe src="<?=$p->getdocumentonotaria() ?>" width="770" height="530" style="border: none;"></iframe>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                              </div>
                            </div>
                          </div>

                          <br>
                          <br>                   
                          <input class="colorb btn btn-info btn-lg" type="button" style="width: 80%; float: center; background-color: #238276; border-color: #238276;" value="Subir Nuevo Certificado" 
                       onClick="document.getElementById('oculto').style.visibility='visible'"> 
                      <br> <br>                        
                      <div id="oculto" style="visibility:hidden"> 
                      <input type="file" name="documentonotaria" id="documentonotaria" class="inputfile inputfile-5" data-multiple-caption="{count} files selected"  style="opacity:0;font-size:100%;"accept=".pdf"name="documentonotaria" require onkeypress="return soloLetras(event)"   placeholder="Ingrese El documentonotaria" value="<?=$p->getdocumentonotaria()?>"/>
                          <label for="documentonotaria" style=" font-size:90%;" data-toggle="tooltip"  ><span></span> <strong style=" font-size:100%;color: #fff;"> Seleccionar</strong></label>
                      </div> 

                    <?php } else { ?>
                    <label  for="documentonotaria" style="padding-right: 60%">Subir Certificado</label><br><br> 
                    
                     <input type="file" name="documentonotaria" id="documentonotaria" class="inputfile inputfile-5" data-multiple-caption="{count} files selected"  style="opacity:0;font-size:100%;"accept=".pdf"name="documentonotaria" require onkeypress="return soloLetras(event)"   placeholder="Ingrese El documentonotaria" value="<?=$p->getdocumentonotaria()?>"/>
                      <label for="documentonotaria" style=" font-size:90%;" data-toggle="tooltip"  ><span></span> <strong style=" font-size:100%;color: #fff;"> Seleccionar</strong></label>

                     
                    <?php }?>  

                  </div>

                
                  



                   <?php endif;?>



                  <table>
                          <tr>
                            <td>
                            <form method="POST" id="2">
                              <button class="btn btn-primary" type="submit" name="aceptar" value="Aceptar" ><i class="fa fa-check-square"></i>Guardar</button> 
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