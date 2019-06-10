

<main class="app-content" style="zoom:90%;background-color:#FDFEFE;">


      <div class="app-title">
        <div>
          <h1><i class="colorp fa fa-edit" ></i> Mis Solicitudes</h1>
          <p></p>
        </div>

      </div>

      <div class="row" style="zoom:90%;padding-left: 0%;">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <table class="table table-hover table-bordered" id="sampleTable" >
                <thead>
                  <tr>

                 <!--   <th>Id solicitud De Formacion</th> -->
                    <!-- <th>idsolicitud</th> -->

                    <th>Fecha</th>
                    <th>No Matricula</th>

                    <th>tipopersona</th>
                    <th>tipoacto</th>
                    <th>ValEscritura</th>
                    <th>ValHipoteca</th>
                    <th>ValVenta</th>

                   <!-- <th>No Solicitud</th>-->

                    <th>Cedula Propietario</th>
                   <!--<th>Estado Civil Propietario</th>-->
                    <th>Primer nombre</th>
                    <!-- <th>Segundo nombre del locatario</th> -->
                    <th>Primer apellido</th>
                  <!--   <th>Segundo apellido del locatario</th> -->
                   <!--  <th>Certificado subido por el informador</th>
                    <th>Certificado subido por la notaria</th> -->
                    <!-- <th>tipodocumentolocatario</th> -->
                    <th>Cedula Locatario</th>


                     <th>Sucursal</th>
                    <!-- <th>estado</th> -->
                    <!-- <th>observacion</th> -->
                    <th>Informador</th>
                     <!-- <th>Correo</th>-->
                    <th>Primer Documento</th>
                    <th>Segundo Documento</th>
                    <th>Tercer Documento</th>
                    <th>Cuarto Documento</th>
                    <th>Quinto Documento</th>
                    <th>Estado</th>
                    <th>Responder</th>

                  </tr>
                </thead>
                <body>
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
      <!-- Listar -->
        <?php foreach($this->modelo->Listar() as $r):?>
                  <tr>

                    <td><?=$r->fecha?></td>
                    <td><?=$r->matriculainmobiliaria?></td>
                    <td><?=$r->tipopersona?></td>
                    <td><?=$r->tipoacto?></td>
                    <td><?=$r->ValEscritura?></td>
                    <td><?=$r->ValHipoteca?></td>
                    <td><?=$r->ValVenta?></td>
                    <td><?=$r->cedulapropietario?></td>
                    <td><?=$r->nombrelocatario?></td>
                    <td><?=$r->primerapellido?></td>
                    <td><?=$r->cedulalocatario?></td>
                    <td><?=$r->nombre?></td>
                    <td><?=$r->Nombresnotaria?></td>

                    <!-- Primer Documento -->
                    <td>
                       <?php
                           if((substr($r->documentoinformador,(strlen($r->documentoinformador))-4)) == ".pdf"){ ?>


                          <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal<?=$r->idsolicitud?>" style="font-size:80%;width: 130px;background-color: #17A4B7;border-color: #17A4B7;">Ver Certificado</button>
                          <!-- Modal -->
                          <div class="modal fade" id="myModal<?=$r->idsolicitud?>" role="dialog">
                            <div class="modal-dialog modal-lg">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                  <h4 class="modal-title">Matricula No :  <?=$r->matriculainmobiliaria?></h4>
                                </div>
                                <div class="modal-body">
                                  <iframe src="<?=$r->documentoinformador?>" width="770" height="530" style="border: none;"></iframe>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                </div>
                              </div>
                            </div>
                          </div>

                      <?php } else { ?>
                        <button type="button" class="btn btn-danger btn-lg" data-toggle="modal"style="font-size:80%;width: 130px;background-color: gray;border-color: gray;"> Sin Certificado </button>
                      <?php }?>

                    </td>
                    <!--Fin Primer Documento -->

                    <!-- Segundo Documento -->
                    <td>
                       <?php
                           if((substr($r->documentonotaria,(strlen($r->documentonotaria))-4)) == ".pdf"){ ?>


                          <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModalsegundo<?=$r->idsolicitud?>" style="font-size:80%;width: 130px;background-color: #17A4B7;border-color: #17A4B7;">Ver Certificado</button>
                          <!-- Modal -->
                          <div class="modal fade" id="myModalsegundo<?=$r->idsolicitud?>" role="dialog">
                            <div class="modal-dialog modal-lg">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                  <h4 class="modal-title">Matricula No :  <?=$r->estado?></h4>
                                </div>
                                <div class="modal-body">
                                  <iframe src="<?=$r->documentonotaria?>" width="770" height="530" style="border: none;"></iframe>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                </div>
                              </div>
                            </div>
                          </div>

                      <?php } else { ?>
                        <button type="button" class="btn btn-danger btn-lg" data-toggle="modal"style="font-size:80%;width: 130px;background-color: gray;border-color: gray;"> Sin Certificado </button>
                      <?php }?>

                    </td>
                    <!-- Fin Segundo Documento -->


                    <!-- Tercer Documento -->
                    <td>
                       <?php
                           if((substr($r->tercerdocumento,(strlen($r->tercerdocumento))-4)) == ".pdf"){ ?>


                          <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModaltercero<?=$r->idsolicitud?>" style="font-size:80%;width: 130px;background-color: #17A4B7;border-color: #17A4B7;">Ver Certificado</button>
                          <!-- Modal -->
                          <div class="modal fade" id="myModaltercero<?=$r->idsolicitud?>" role="dialog">
                            <div class="modal-dialog modal-lg">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                  <h4 class="modal-title">Matricula No :  <?=$r->terceramatricula?></h4>
                                </div>
                                <div class="modal-body">
                                  <iframe src="<?=$r->tercerdocumento?>" width="770" height="530" style="border: none;"></iframe>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                </div>
                              </div>
                            </div>
                          </div>

                      <?php } else { ?>
                        <button type="button" class="btn btn-danger btn-lg" data-toggle="modal"style="font-size:80%;width: 130px;background-color: gray;border-color: gray;"> Sin Certificado </button>
                      <?php }?>

                    </td>
                    <!--Fin Tercer Documento -->


                    <!-- Cuarto Documento -->
                    <td>
                       <?php
                           if((substr($r->cuartodocumento,(strlen($r->cuartodocumento))-4)) == ".pdf"){ ?>


                          <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModalcuarto<?=$r->idsolicitud?>" style="font-size:80%;width: 130px;background-color: #17A4B7;border-color: #17A4B7;">Ver Certificado</button>
                          <!-- Modal -->
                          <div class="modal fade" id="myModalcuarto<?=$r->idsolicitud?>" role="dialog">
                            <div class="modal-dialog modal-lg">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                  <h4 class="modal-title">Matricula No :  <?=$r->cuartamatricula?></h4>
                                </div>
                                <div class="modal-body">
                                  <iframe src="<?=$r->cuartodocumento?>" width="770" height="530" style="border: none;"></iframe>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                </div>
                              </div>
                            </div>
                          </div>

                      <?php } else { ?>
                        <button type="button" class="btn btn-danger btn-lg" data-toggle="modal"style="font-size:80%;width: 130px;background-color: gray;border-color: gray;"> Sin Certificado </button>
                      <?php }?>

                    </td>
                    <!--Fin Cuarto Documento -->

                    <!-- Quinto Documento -->
                    <td>
                       <?php
                           if((substr($r->quintodocumento,(strlen($r->quintodocumento))-4)) == ".pdf"){ ?>


                          <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModalquinto<?=$r->idsolicitud?>" style="font-size:80%;width: 130px;background-color: #17A4B7;border-color: #17A4B7;">Ver Certificado</button>
                          <!-- Modal -->
                          <div class="modal fade" id="myModalquinto<?=$r->idsolicitud?>" role="dialog">
                            <div class="modal-dialog modal-lg">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                  <h4 class="modal-title">Matricula No :  <?=$r->quintamatricula?></h4>
                                </div>
                                <div class="modal-body">
                                  <iframe src="<?=$r->quintodocumento?>" width="770" height="530" style="border: none;"></iframe>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                </div>
                              </div>
                            </div>
                          </div>

                      <?php } else { ?>
                        <button type="button" class="btn btn-danger btn-lg" data-toggle="modal"style="font-size:80%;width: 130px;background-color: gray;border-color: gray;"> Sin Certificado </button>
                      <?php }?>

                    </td>
                    <!--Fin Quinto Documento -->


                    <!-- Estado : Viable/Solucionar/no viable -->
                    <td>
                                <?php
                             if((substr($r->estado,(strlen($r->estado))-4)) == "v"){ ?>
                              <button type="button" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#myModalv" style="font-size:80%; background-color: green; border-color: green;width: 90px;"> Viable </button>

                                      <!-- Modal -->
                                     <div class="modal fade" id="myModalv" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                       <div class="modal-dialog" role="document">
                                         <div class="modal-content">
                                          <div class="modal-header" >

                                         <h4 class="modal-title" id="myModalLabel" >Numero de matricula  :  <?=$r->matriculainmobiliaria?></h4>
                                           <h4 class="modal-title" id="myModalLabel" > Viable
                                          </h4>
                                          <h4> <img alt="example3"src="archivos/img/verde.png" style="width: 50px" align="left"/></h4>


                                         </div>
                                            <div class=" row modal-body" style="justify-content: center;" >
                                                 <p class="cd-signin-modal__fieldset">
                                                <p>Observaciones : </p>

                                           </div>
                                           <div style="padding-left: 30px; ">
                                              <p><?=$r->observacion?></p>
                                           </div>
                                        <div class="modal-footer">
                                            <button type="button" class="colorb btn btn btn-info" data-dismiss="modal">Cerrar</button>




                              <?php } else if((substr($r->estado,(strlen($r->estado))-4)) == "s"){ ?>

                               <button type="button" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#myModals" style="font-size:80%;background-color: #E7C72C; border-color: #E7C72C; width: 90px;"> Solucionar </button>

                                      <!-- Modal -->
                                     <div class="modal fade" id="myModals" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                       <div class="modal-dialog" role="document">
                                         <div class="modal-content">
                                          <div class="modal-header">

                                         <h4 class="modal-title" id="myModalLabel" >Numero de matricula  :  <?=$r->matriculainmobiliaria?></h4>
                                           <h4 class="modal-title" id="myModalLabel" > Solucionar
                                          </h4>
                                          <h4> <img alt="example3"src="archivos/img/amarillo.png" style="width: 50px" align="left"/></h4>


                                         </div>
                                            <div class=" row modal-body" style="justify-content: center;" >
                                                 <p class="cd-signin-modal__fieldset">
                                                <p>Observaciones : </p>

                                           </div>
                                           <div style="padding-left: 30px; ">
                                              <p><?=$r->observacion?></p>
                                           </div>
                                        <div class="modal-footer">
                                            <button type="button" class="colorb btn btn btn-info" data-dismiss="modal">Cerrar</button>

                              <?php } else if((substr($r->estado,(strlen($r->estado))-4)) == "n"){ ?>

                               <button type="button" class="colorb btn btn-danger btn-lg" data-toggle="modal" data-target="#myModaln" style="font-size:80%;width: 90px;"> No Viable </button>

                                      <!-- Modal -->
                                     <div class="modal fade" id="myModaln" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                       <div class="modal-dialog" role="document">
                                         <div class="modal-content">
                                          <div class="modal-header" >

                                          <h4 class="modal-title" id="myModalLabel" >Numero de matricula  :  <?=$r->matriculainmobiliaria?></h4>
                                           <h4 class="modal-title" id="myModalLabel" > No Viable
                                          </h4>
                                          <h4> <img alt="example3"src="archivos/img/rojo.png" style="width: 50px" align="left"/></h4>


                                         </div>
                                            <div class=" row modal-body" style="justify-content: center;" >
                                                 <p class="cd-signin-modal__fieldset">
                                                <p>Observaciones : </p>

                                           </div>
                                           <div style="padding-left: 30px; ">
                                              <p><?=$r->observacion?></p>
                                           </div>
                                        <div class="modal-footer">
                                            <button type="button" class="colorb btn btn btn-info" data-dismiss="modal">Cerrar</button>

                               <?php } else { ?>

                                           <button type="button" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#myModal<?=$r->idsolicitud?>" style="font-size:80%;width: 90px;background-color: gray;border-color: gray;"> En Proceso </button>


                                          <?php } ?>
                    </td>
                    <!-- Fin Estado : Viable/Solucionar/no viable -->



                    <!-- Fin modificar -->
                    <td>
                      <center>
                      <a class="colorb btn btn-primary" data-toggle="tooltip" data-placement="top" title="Responder"href="?c=solicitud&a=registrarsolicitud&id=<?=$r->idsolicitud?>"><i class="fa fa-edit" aria-hidden="true"> </a></td></center>
                    </td>
                    <!-- Fin modificar -->


          <?php endforeach;?>
      <!-- Fin Listar -->
                  </tr>

                </body>
              </table>
            </div>
          </div>
        </div>

      </div>
    </main>
