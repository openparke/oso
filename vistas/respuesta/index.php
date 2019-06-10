<?php if($_SESSION['Rol']=="Notaria"):?><!-- Notaria-->
<main class="app-content" style="zoom:90%;background-color:#FDFEFE;">


      <div class="app-title">
        <div>
          <h1><i class="colorp fa fa-edit" ></i> Mis Solicitudes</h1>
          <p></p>
        </div>

      </div>



      <div class="bs-component">
        <ul class="nav nav-tabs">
          <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#home" style="font-weight:bold;font-size:20px;"><i class="fa fa-bars" style="font-size:24px"></i>
Solicitudes</a></li>
          <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#profile" style="font-weight:bold;font-size:20px;"><i class="fa fa-refresh fa-spin" style="font-size:24px"></i>
Nuevas</a></li>
          <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#dropdown1"style="font-weight:bold;font-size:20px;"><i class="fa fa-bar-chart" style="font-size:24px"></i>
Metricas</a></li>
            </div>
          </li>
        </ul>
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade active show" id="home">
                                        <div class="row" style="zoom:90%;padding-left: 0%;">
                                          <div class="col-md-12">
                                            <div class="tile">
                                              <div class="tile-body">
                                                <table class="table table-hover table-bordered" id="sampleTable" >
                                                  <thead>
                                                    <tr>

                                                      <th>Fecha Envio Solicitud</th>
                                                      <th>Tipo Persona</th>
                                                      <th>Tipo Acto</th>
                                                      <th>Cedula Propietario</th>
                                                      <th>Sucursal</th>
                                                      <th>Informador</th>
                                                      <th>Fecha Respuesta Notaria</th>
                                                      <th>Viabilidad</th>
                                                      <th>Responder Solicitud</th>

                                                    </tr>
                                                  </thead>
                                                  <body>

                                        <!-- Listar -->
                                          <?php foreach($this->modelo->Listar() as $r):?>
                                                    <tr>

                                                      <td><?=$r->fecha?></td>
                                                      <td><?=$r->tipopersona?></td>
                                                      <td><?=$r->tipoacto?></td>
                                                      <td><?=$r->cedulapropietario?></td>
                                                      <td><?=$r->nombre?></td>
                                                      <td><?=$r->Nombresnotaria?></td>
                                                      <td><?=$r->fechanotaria?></td>

                                                      <!-- Estado : Viable/Solucionar/no viable -->
                                                      <td><center>
                                                                  <?php
                                                               if((substr($r->viabilidad,(strlen($r->viabilidad))-4)) == "v"){ ?>

                                                                <a class="btn btn-danger btn-lg"  style="font-size:80%; background-color: green; border-color: green;width: 200px;" href="?c=resolicitud&a=registrarresolicitud&id=<?=$r->idsolicitud?>"> Viable </a>


                                                                <?php } else if((substr($r->viabilidad,(strlen($r->viabilidad))-4)) == "s"){ ?>

                                                                  <a class="btn btn-danger btn-lg"  style="font-size:80%;background-color: #E7C72C; border-color: #E7C72C; width: 200px;" href="?c=resolicitud&a=registrarresolicitud&id=<?=$r->idsolicitud?>"> Solucionar </a>

                                                                <?php } else if((substr($r->viabilidad,(strlen($r->viabilidad))-4)) == "n"){ ?>

                                                                   <a class="colorb btn btn-danger btn-lg" style="font-size:80%;width: 200px;" href="?c=resolicitud&a=registrarresolicitud&id=<?=$r->idsolicitud?>"> No Viable </a>

                                                                 <?php } else { ?>

                                                                             <button type="button" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#myModal<?=$r->idsolicitud?>" style="font-size:80%;width: 200px;background-color: gray;border-color: gray;"> En Proceso </button>


                                                                            <?php } ?>
                                                                            </center>
                                                      </td>
                                                      <!-- Fin Estado : Viable/Solucionar/no viable -->



                                                      <!-- Responder -->
                                                      <td>
                                                        <center>
                                                        <a class="colorb btn btn-primary" data-toggle="tooltip" data-placement="top" title="Responder"href="?c=resolicitud&a=registrarresolicitud&id=<?=$r->idsolicitud?>"><i class="fa fa-edit" aria-hidden="true"> </a></td></center>
                                                      </td>
                                                      <!-- Fin Responder -->



                                            <?php endforeach;?>
                                        <!-- Fin Listar -->
                                                    </tr>

                                                  </body>
                                                </table>
                              </div>
                                </div>
                                  </div>
                                    </div>







          </div>
          <div class="tab-pane fade" id="profile">
                                                                         <div class="row" style="zoom:90%;padding-left: 0%;">
                                          <div class="col-md-12">
                                            <div class="tile">
                                              <div class="tile-body">
                                                <table class="table table-hover table-bordered" id="sampleTable" >
                                                  <thead>
                                                    <tr>

                                                      <th>Fecha Envio Solicitud</th>
                                                      <th>Tipo Persona</th>
                                                      <th>Tipo Acto</th>
                                                      <th>Cedula Propietario</th>
                                                      <th>Sucursal</th>
                                                      <th>Informador</th>
                                                      <th>Fecha Respuesta Notaria</th>
                                                      <th>Viabilidad</th>
                                                      <th>Responder Solicitud</th>

                                                    </tr>
                                                  </thead>
                                                  <body>

                                        <!-- Listar -->
                                          <?php foreach($this->modelo->Listarsinresponer() as $r):?>
                                                    <tr>

                                                      <td><?=$r->fecha?></td>
                                                      <td><?=$r->tipopersona?></td>
                                                      <td><?=$r->tipoacto?></td>
                                                      <td><?=$r->cedulapropietario?></td>
                                                      <td><?=$r->nombre?></td>
                                                      <td><?=$r->Nombresnotaria?></td>
                                                      <td><?=$r->fechanotaria?></td>

                                                      <!-- Estado : Viable/Solucionar/no viable -->
                                                      <td><center>
                                                                  <?php
                                                               if((substr($r->viabilidad,(strlen($r->viabilidad))-4)) == "v"){ ?>

                                                                <a class="btn btn-danger btn-lg"  style="font-size:80%; background-color: green; border-color: green;width: 200px;" href="?c=resolicitud&a=registrarresolicitud&id=<?=$r->idsolicitud?>"> Viable </a>


                                                                <?php } else if((substr($r->viabilidad,(strlen($r->viabilidad))-4)) == "s"){ ?>

                                                                  <a class="btn btn-danger btn-lg"  style="font-size:80%;background-color: #E7C72C; border-color: #E7C72C; width: 200px;" href="?c=resolicitud&a=registrarresolicitud&id=<?=$r->idsolicitud?>"> Solucionar </a>

                                                                <?php } else if((substr($r->viabilidad,(strlen($r->viabilidad))-4)) == "n"){ ?>

                                                                   <a class="colorb btn btn-danger btn-lg" style="font-size:80%;width: 200px;" href="?c=resolicitud&a=registrarresolicitud&id=<?=$r->idsolicitud?>"> No Viable </a>

                                                                 <?php } else { ?>

                                                                             <button type="button" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#myModal<?=$r->idsolicitud?>" style="font-size:80%;width: 200px;background-color: gray;border-color: gray;"> En Proceso </button>


                                                                            <?php } ?>
                                                                            </center>
                                                      </td>
                                                      <!-- Fin Estado : Viable/Solucionar/no viable -->



                                                      <!-- Responder -->
                                                      <td>
                                                        <center>
                                                        <a class="colorb btn btn-primary" data-toggle="tooltip" data-placement="top" title="Responder"href="?c=resolicitud&a=registrarresolicitud&id=<?=$r->idsolicitud?>"><i class="fa fa-edit" aria-hidden="true"> </a></td></center>
                                                      </td>
                                                      <!-- Fin Responder -->



                                            <?php endforeach;?>
                                        <!-- Fin Listar -->
                                                    </tr>

                                                  </body>
                                                </table>
                              </div>
                                </div>
                                  </div>
                                    </div>
          </div>
          <div class="tab-pane fade" id="dropdown1">



            <div class="row">
              <div class="col-md-3">
                <div class="widget-small primary coloured-icon"><i class="icon fa fa-users fa-3x"></i>
                  <div class="info">
                    <h4>Solicitudes</h4>
                    <p><b>41</b></p>
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="widget-small clock coloured-icon"><i class="icon fa fa-clock-o fa-3x"></i>
                  <div class="info">
                    <h4>Hora Promedio</h4>
                    <p><b>11:59 AM</b></p>
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="widget-small warning coloured-icon"><i class="icon fa fa-files-o fa-3x"></i>
                  <div class="info">
                    <h4>Certificados</h4>
                    <p><b>6</b></p>
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="widget-small danger coloured-icon"><i class="icon fa fa-star fa-3x"></i>
                  <div class="info">
                    <h4>Viables</h4>
                    <p><b>23</b></p>
                  </div>
                </div>
              </div>
            </div>








  <div class="row">
        <div class="col-md-6">
          <iframe src="http://notaria16.com/metricas/4.php" width="1200px" height="380px" border="0" scrolling="no" frameborder="0"></iframe>

        <iframe src="http://notaria16.com/metricas/3.php" width="1200px" height="373px" border="0" scrolling="no" frameborder="0"></iframe>
        </div>


  <div class="col-md-6">
    <iframe src="http://web.notaria16.com/metricas/1.php" width="1200px" height="407px" border="0" scrolling="no" frameborder="0"></iframe>

    <iframe src="http://web.notaria16.com/metricas/2.php" width="1200px" height="390px" border="0" scrolling="no" frameborder="0"></iframe>

  </div>
</div>



          </div>
          <div class="tab-pane fade" id="dropdown2">


          </div>
        </div>
      </div>
      </div>








    </main>

    <?php endif;?>  <!-- Notaria-->


































    <?php if($_SESSION['Rol']=="Informador"):?><!-- Informador-->
    
<main class="app-content" style="zoom:90%;background-color:#FDFEFE;">


      <div class="app-title">
        <div>
          <h1><i class="colorp fa fa-edit" ></i> Mis Solicitudes</h1>
          <p></p>
        </div>

      </div>


 <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade active show" id="home">
            <div class="row" style="zoom:90%;padding-left: 0%;">
              <div class="col-md-12">
                <div class="tile">
                  <div class="tile-body">
                    <table class="table table-hover table-bordered" id="sampleTable" >
                      <thead>
                        <tr>

                          <th>Fecha Envio Solicitud</th>
                          <th>Tipo Persona</th>
                          <th>Tipo Acto</th>
                          <th>Cedula Propietario</th>
                          <th>Viabilidad</th>
                          <th>Ver Respuesta</th>

                        </tr>
                      </thead>
                      <body>

            <!-- Listar -->
              <?php foreach($this->modelo->Listarporusuario() as $r):?>
                        <tr>

                          <td><?=$r->fecha?></td>
                          <td><?=$r->tipopersona?></td>
                          <td><?=$r->tipoacto?></td>
                          <td><?=$r->cedulapropietario?></td>

                          <!-- Estado : Viable/Solucionar/no viable -->
                          <td><center>
                                      <?php
                                   if((substr($r->viabilidad,(strlen($r->viabilidad))-4)) == "v"){ ?>

                                    <a class="btn btn-danger btn-lg"  style="font-size:80%; background-color: green; border-color: green;width: 200px;" href="?c=resolicitud&a=registrarresolicitud&id=<?=$r->idsolicitud?>"> Viable </a>


                                    <?php } else if((substr($r->viabilidad,(strlen($r->viabilidad))-4)) == "s"){ ?>

                                      <a class="btn btn-danger btn-lg"  style="font-size:80%;background-color: #E7C72C; border-color: #E7C72C; width: 200px;" href="?c=resolicitud&a=registrarresolicitud&id=<?=$r->idsolicitud?>"> Solucionar </a>

                                    <?php } else if((substr($r->viabilidad,(strlen($r->viabilidad))-4)) == "n"){ ?>

                                       <a class="colorb btn btn-danger btn-lg" style="font-size:80%;width: 200px;" href="?c=resolicitud&a=registrarresolicitud&id=<?=$r->idsolicitud?>"> No Viable </a>

                                     <?php } else { ?>

                                                 <button type="button" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#myModal<?=$r->idsolicitud?>" style="font-size:80%;width: 200px;background-color: gray;border-color: gray;"> En Proceso </button>


                                                <?php } ?>
                                                </center>
                          </td>
                          <!-- Fin Estado : Viable/Solucionar/no viable -->



                          <!-- Responder -->
                          <td>
                            <center>
                            <a class="colorb btn btn-primary" data-toggle="tooltip" data-placement="top" title="Responder"href="?c=resolicitud&a=registrarresolicitud&id=<?=$r->idsolicitud?>"><i class="fa fa-eye" aria-hidden="true"> </a></td></center>
                          </td>
                          <!-- Fin Responder -->



                <?php endforeach;?>
            <!-- Fin Listar -->
                        </tr>

                      </body>
                    </table>


    </main>

    <?php endif;?>  <!-- Informador-->













































<?php if($_SESSION['Rol']=="Gerente"):?><!-- Gerente-->
<main class="app-content" style="zoom:90%;background-color:#FDFEFE;">


      <div class="app-title">
        <div>
          <h1><i class="colorp fa fa-edit" ></i> Mis Solicitudes</h1>
          <p></p>
        </div>

      </div>



      <div class="bs-component">
        <ul class="nav nav-tabs">
          <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#home" style="font-weight:bold;font-size:20px;"><i class="fa fa-bars" style="font-size:24px"></i>
Solicitudes</a></li>
          <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#profile" style="font-weight:bold;font-size:20px;"><i class="fa fa-refresh fa-spin" style="font-size:24px"></i>
Nuevas</a></li>
          <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#dropdown1"style="font-weight:bold;font-size:20px;"><i class="fa fa-bar-chart" style="font-size:24px"></i>
Metricas</a></li>
            </div>
          </li>
        </ul>
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade active show" id="home">
                                        <div class="row" style="zoom:90%;padding-left: 0%;">
                                          <div class="col-md-12">
                                            <div class="tile">
                                              <div class="tile-body">
                                                <table class="table table-hover table-bordered" id="sampleTable" >
                                                  <thead>
                                                    <tr>

                                                      <th>Fecha Envio Solicitud</th>
                                                      <th>Tipo Persona</th>
                                                      <th>Tipo Acto</th>
                                                      <th>Cedula Propietario</th>
                                                      <th>Sucursal</th>
                                                      <th>Informador</th>
                                                      <th>Fecha Respuesta Notaria</th>
                                                      <th>Viabilidad</th>
                                                      <th>Responder Solicitud</th>

                                                    </tr>
                                                  </thead>
                                                  <body>

                                        <!-- Listar -->
                                          <?php foreach($this->modelo->Listarporsucursal() as $r):?>
                                                    <tr>

                                                      <td><?=$r->fecha?></td>
                                                      <td><?=$r->tipopersona?></td>
                                                      <td><?=$r->tipoacto?></td>
                                                      <td><?=$r->cedulapropietario?></td>
                                                      <td><?=$r->nombre?></td>
                                                      <td><?=$r->Nombresnotaria?></td>
                                                      <td><?=$r->fechanotaria?></td>

                                                      <!-- Estado : Viable/Solucionar/no viable -->
                                                      <td><center>
                                                                  <?php
                                                               if((substr($r->viabilidad,(strlen($r->viabilidad))-4)) == "v"){ ?>

                                                                <a class="btn btn-danger btn-lg"  style="font-size:80%; background-color: green; border-color: green;width: 200px;" href="?c=resolicitud&a=registrarresolicitud&id=<?=$r->idsolicitud?>"> Viable </a>


                                                                <?php } else if((substr($r->viabilidad,(strlen($r->viabilidad))-4)) == "s"){ ?>

                                                                  <a class="btn btn-danger btn-lg"  style="font-size:80%;background-color: #E7C72C; border-color: #E7C72C; width: 200px;" href="?c=resolicitud&a=registrarresolicitud&id=<?=$r->idsolicitud?>"> Solucionar </a>

                                                                <?php } else if((substr($r->viabilidad,(strlen($r->viabilidad))-4)) == "n"){ ?>

                                                                   <a class="colorb btn btn-danger btn-lg" style="font-size:80%;width: 200px;" href="?c=resolicitud&a=registrarresolicitud&id=<?=$r->idsolicitud?>"> No Viable </a>

                                                                 <?php } else { ?>

                                                                             <button type="button" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#myModal<?=$r->idsolicitud?>" style="font-size:80%;width: 200px;background-color: gray;border-color: gray;"> En Proceso </button>


                                                                            <?php } ?>
                                                                            </center>
                                                      </td>
                                                      <!-- Fin Estado : Viable/Solucionar/no viable -->



                                                      <!-- Responder -->
                                                      <td>
                                                        <center>
                                                        <a class="colorb btn btn-primary" data-toggle="tooltip" data-placement="top" title="Responder"href="?c=resolicitud&a=registrarresolicitud&id=<?=$r->idsolicitud?>"><i class="fa fa-edit" aria-hidden="true"> </a></td></center>
                                                      </td>
                                                      <!-- Fin Responder -->



                                            <?php endforeach;?>
                                        <!-- Fin Listar -->
                                                    </tr>

                                                  </body>
                                                </table>
                              </div>
                                </div>
                                  </div>
                                    </div>







          </div>
          <div class="tab-pane fade" id="profile">
                                                                         <div class="row" style="zoom:90%;padding-left: 0%;">
                                          <div class="col-md-12">
                                            <div class="tile">
                                              <div class="tile-body">
                                                <table class="table table-hover table-bordered" id="sampleTable" >
                                                  <thead>
                                                    <tr>

                                                      <th>Fecha Envio Solicitud</th>
                                                      <th>Tipo Persona</th>
                                                      <th>Tipo Acto</th>
                                                      <th>Cedula Propietario</th>
                                                      <th>Sucursal</th>
                                                      <th>Informador</th>
                                                      <th>Fecha Respuesta Notaria</th>
                                                      <th>Viabilidad</th>
                                                      <th>Responder Solicitud</th>

                                                    </tr>
                                                  </thead>
                                                  <body>

                                        <!-- Listar -->
                                          <?php foreach($this->modelo->Listarsinresponer() as $r):?>
                                                    <tr>

                                                      <td><?=$r->fecha?></td>
                                                      <td><?=$r->tipopersona?></td>
                                                      <td><?=$r->tipoacto?></td>
                                                      <td><?=$r->cedulapropietario?></td>
                                                      <td><?=$r->nombre?></td>
                                                      <td><?=$r->Nombresnotaria?></td>
                                                      <td><?=$r->fechanotaria?></td>

                                                      <!-- Estado : Viable/Solucionar/no viable -->
                                                      <td><center>
                                                                  <?php
                                                               if((substr($r->viabilidad,(strlen($r->viabilidad))-4)) == "v"){ ?>

                                                                <a class="btn btn-danger btn-lg"  style="font-size:80%; background-color: green; border-color: green;width: 200px;" href="?c=resolicitud&a=registrarresolicitud&id=<?=$r->idsolicitud?>"> Viable </a>


                                                                <?php } else if((substr($r->viabilidad,(strlen($r->viabilidad))-4)) == "s"){ ?>

                                                                  <a class="btn btn-danger btn-lg"  style="font-size:80%;background-color: #E7C72C; border-color: #E7C72C; width: 200px;" href="?c=resolicitud&a=registrarresolicitud&id=<?=$r->idsolicitud?>"> Solucionar </a>

                                                                <?php } else if((substr($r->viabilidad,(strlen($r->viabilidad))-4)) == "n"){ ?>

                                                                   <a class="colorb btn btn-danger btn-lg" style="font-size:80%;width: 200px;" href="?c=resolicitud&a=registrarresolicitud&id=<?=$r->idsolicitud?>"> No Viable </a>

                                                                 <?php } else { ?>

                                                                             <button type="button" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#myModal<?=$r->idsolicitud?>" style="font-size:80%;width: 200px;background-color: gray;border-color: gray;"> En Proceso </button>


                                                                            <?php } ?>
                                                                            </center>
                                                      </td>
                                                      <!-- Fin Estado : Viable/Solucionar/no viable -->



                                                      <!-- Responder -->
                                                      <td>
                                                        <center>
                                                        <a class="colorb btn btn-primary" data-toggle="tooltip" data-placement="top" title="Responder"href="?c=resolicitud&a=registrarresolicitud&id=<?=$r->idsolicitud?>"><i class="fa fa-edit" aria-hidden="true"> </a></td></center>
                                                      </td>
                                                      <!-- Fin Responder -->



                                            <?php endforeach;?>
                                        <!-- Fin Listar -->
                                                    </tr>

                                                  </body>
                                                </table>
                              </div>
                                </div>
                                  </div>
                                    </div>
          </div>
          <div class="tab-pane fade" id="dropdown1">



            <div class="row">
              <div class="col-md-3">
                <div class="widget-small primary coloured-icon"><i class="icon fa fa-users fa-3x"></i>
                  <div class="info">
                    <h4>Solicitudes</h4>
                    <p><b>41</b></p>
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="widget-small clock coloured-icon"><i class="icon fa fa-clock-o fa-3x"></i>
                  <div class="info">
                    <h4>Hora Promedio</h4>
                    <p><b>11:59 AM</b></p>
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="widget-small warning coloured-icon"><i class="icon fa fa-files-o fa-3x"></i>
                  <div class="info">
                    <h4>Certificados</h4>
                    <p><b>6</b></p>
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="widget-small danger coloured-icon"><i class="icon fa fa-star fa-3x"></i>
                  <div class="info">
                    <h4>Viables</h4>
                    <p><b>23</b></p>
                  </div>
                </div>
              </div>
            </div>








  <div class="row">
        <div class="col-md-6">
          <iframe src="http://notaria16.com/metricas/4.php" width="1200px" height="380px" border="0" scrolling="no" frameborder="0"></iframe>

        <iframe src="http://notaria16.com/metricas/3.php" width="1200px" height="373px" border="0" scrolling="no" frameborder="0"></iframe>
        </div>


  <div class="col-md-6">
    <iframe src="http://web.notaria16.com/metricas/1.php" width="1200px" height="407px" border="0" scrolling="no" frameborder="0"></iframe>

    <iframe src="http://web.notaria16.com/metricas/2.php" width="1200px" height="390px" border="0" scrolling="no" frameborder="0"></iframe>

  </div>
</div>



          </div>
          <div class="tab-pane fade" id="dropdown2">


          </div>
        </div>
      </div>
      </div>








    </main>

    <?php endif;?>  <!-- Gerente-->

















































<?php if($_SESSION['Rol']=="Supervisor"):?><!-- Supervisor-->
<main class="app-content" style="zoom:90%;background-color:#FDFEFE;">


      <div class="app-title">
        <div>
          <h1><i class="colorp fa fa-edit" ></i> Mis Solicitudes</h1>
          <p></p>
        </div>

      </div>



      <div class="bs-component">
        <ul class="nav nav-tabs">
          <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#home" style="font-weight:bold;font-size:20px;"><i class="fa fa-bars" style="font-size:24px"></i>
Solicitudes</a></li>
          <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#profile" style="font-weight:bold;font-size:20px;"><i class="fa fa-refresh fa-spin" style="font-size:24px"></i>
Nuevas</a></li>
          <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#dropdown1"style="font-weight:bold;font-size:20px;"><i class="fa fa-bar-chart" style="font-size:24px"></i>
Metricas</a></li>
            </div>
          </li>
        </ul>
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade active show" id="home">
                                        <div class="row" style="zoom:90%;padding-left: 0%;">
                                          <div class="col-md-12">
                                            <div class="tile">
                                              <div class="tile-body">
                                                <table class="table table-hover table-bordered" id="sampleTable" >
                                                  <thead>
                                                    <tr>

                                                      <th>Fecha Envio Solicitud</th>
                                                      <th>Tipo Persona</th>
                                                      <th>Tipo Acto</th>
                                                      <th>Cedula Propietario</th>
                                                      <th>Sucursal</th>
                                                      <th>Informador</th>
                                                      <th>Fecha Respuesta Notaria</th>
                                                      <th>Viabilidad</th>
                                                      <th>Responder Solicitud</th>

                                                    </tr>
                                                  </thead>
                                                  <body>

                                        <!-- Listar -->
                                          <?php foreach($this->modelo->Listar() as $r):?>
                                                    <tr>

                                                      <td><?=$r->fecha?></td>
                                                      <td><?=$r->tipopersona?></td>
                                                      <td><?=$r->tipoacto?></td>
                                                      <td><?=$r->cedulapropietario?></td>
                                                      <td><?=$r->nombre?></td>
                                                      <td><?=$r->Nombresnotaria?></td>
                                                      <td><?=$r->fechanotaria?></td>

                                                      <!-- Estado : Viable/Solucionar/no viable -->
                                                      <td><center>
                                                                  <?php
                                                               if((substr($r->viabilidad,(strlen($r->viabilidad))-4)) == "v"){ ?>

                                                                <a class="btn btn-danger btn-lg"  style="font-size:80%; background-color: green; border-color: green;width: 200px;" href="?c=resolicitud&a=registrarresolicitud&id=<?=$r->idsolicitud?>"> Viable </a>


                                                                <?php } else if((substr($r->viabilidad,(strlen($r->viabilidad))-4)) == "s"){ ?>

                                                                  <a class="btn btn-danger btn-lg"  style="font-size:80%;background-color: #E7C72C; border-color: #E7C72C; width: 200px;" href="?c=resolicitud&a=registrarresolicitud&id=<?=$r->idsolicitud?>"> Solucionar </a>

                                                                <?php } else if((substr($r->viabilidad,(strlen($r->viabilidad))-4)) == "n"){ ?>

                                                                   <a class="colorb btn btn-danger btn-lg" style="font-size:80%;width: 200px;" href="?c=resolicitud&a=registrarresolicitud&id=<?=$r->idsolicitud?>"> No Viable </a>

                                                                 <?php } else { ?>

                                                                             <button type="button" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#myModal<?=$r->idsolicitud?>" style="font-size:80%;width: 200px;background-color: gray;border-color: gray;"> En Proceso </button>


                                                                            <?php } ?>
                                                                            </center>
                                                      </td>
                                                      <!-- Fin Estado : Viable/Solucionar/no viable -->



                                                      <!-- Responder -->
                                                      <td>
                                                        <center>
                                                        <a class="colorb btn btn-primary" data-toggle="tooltip" data-placement="top" title="Responder"href="?c=resolicitud&a=registrarresolicitud&id=<?=$r->idsolicitud?>"><i class="fa fa-edit" aria-hidden="true"> </a></td></center>
                                                      </td>
                                                      <!-- Fin Responder -->



                                            <?php endforeach;?>
                                        <!-- Fin Listar -->
                                                    </tr>

                                                  </body>
                                                </table>
                              </div>
                                </div>
                                  </div>
                                    </div>







          </div>
          <div class="tab-pane fade" id="profile">
                                                                         <div class="row" style="zoom:90%;padding-left: 0%;">
                                          <div class="col-md-12">
                                            <div class="tile">
                                              <div class="tile-body">
                                                <table class="table table-hover table-bordered" id="sampleTable" >
                                                  <thead>
                                                    <tr>

                                                      <th>Fecha Envio Solicitud</th>
                                                      <th>Tipo Persona</th>
                                                      <th>Tipo Acto</th>
                                                      <th>Cedula Propietario</th>
                                                      <th>Sucursal</th>
                                                      <th>Informador</th>
                                                      <th>Fecha Respuesta Notaria</th>
                                                      <th>Viabilidad</th>
                                                      <th>Responder Solicitud</th>

                                                    </tr>
                                                  </thead>
                                                  <body>

                                        <!-- Listar -->
                                          <?php foreach($this->modelo->Listarsinresponer() as $r):?>
                                                    <tr>

                                                      <td><?=$r->fecha?></td>
                                                      <td><?=$r->tipopersona?></td>
                                                      <td><?=$r->tipoacto?></td>
                                                      <td><?=$r->cedulapropietario?></td>
                                                      <td><?=$r->nombre?></td>
                                                      <td><?=$r->Nombresnotaria?></td>
                                                      <td><?=$r->fechanotaria?></td>

                                                      <!-- Estado : Viable/Solucionar/no viable -->
                                                      <td><center>
                                                                  <?php
                                                               if((substr($r->viabilidad,(strlen($r->viabilidad))-4)) == "v"){ ?>

                                                                <a class="btn btn-danger btn-lg"  style="font-size:80%; background-color: green; border-color: green;width: 200px;" href="?c=resolicitud&a=registrarresolicitud&id=<?=$r->idsolicitud?>"> Viable </a>


                                                                <?php } else if((substr($r->viabilidad,(strlen($r->viabilidad))-4)) == "s"){ ?>

                                                                  <a class="btn btn-danger btn-lg"  style="font-size:80%;background-color: #E7C72C; border-color: #E7C72C; width: 200px;" href="?c=resolicitud&a=registrarresolicitud&id=<?=$r->idsolicitud?>"> Solucionar </a>

                                                                <?php } else if((substr($r->viabilidad,(strlen($r->viabilidad))-4)) == "n"){ ?>

                                                                   <a class="colorb btn btn-danger btn-lg" style="font-size:80%;width: 200px;" href="?c=resolicitud&a=registrarresolicitud&id=<?=$r->idsolicitud?>"> No Viable </a>

                                                                 <?php } else { ?>

                                                                             <button type="button" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#myModal<?=$r->idsolicitud?>" style="font-size:80%;width: 200px;background-color: gray;border-color: gray;"> En Proceso </button>


                                                                            <?php } ?>
                                                                            </center>
                                                      </td>
                                                      <!-- Fin Estado : Viable/Solucionar/no viable -->



                                                      <!-- Responder -->
                                                      <td>
                                                        <center>
                                                        <a class="colorb btn btn-primary" data-toggle="tooltip" data-placement="top" title="Responder"href="?c=resolicitud&a=registrarresolicitud&id=<?=$r->idsolicitud?>"><i class="fa fa-edit" aria-hidden="true"> </a></td></center>
                                                      </td>
                                                      <!-- Fin Responder -->



                                            <?php endforeach;?>
                                        <!-- Fin Listar -->
                                                    </tr>

                                                  </body>
                                                </table>
                              </div>
                                </div>
                                  </div>
                                    </div>
          </div>
          <div class="tab-pane fade" id="dropdown1">



            <div class="row">
              <div class="col-md-3">
                <div class="widget-small primary coloured-icon"><i class="icon fa fa-users fa-3x"></i>
                  <div class="info">
                    <h4>Solicitudes</h4>
                    <p><b>41</b></p>
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="widget-small clock coloured-icon"><i class="icon fa fa-clock-o fa-3x"></i>
                  <div class="info">
                    <h4>Hora Promedio</h4>
                    <p><b>11:59 AM</b></p>
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="widget-small warning coloured-icon"><i class="icon fa fa-files-o fa-3x"></i>
                  <div class="info">
                    <h4>Certificados</h4>
                    <p><b>6</b></p>
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="widget-small danger coloured-icon"><i class="icon fa fa-star fa-3x"></i>
                  <div class="info">
                    <h4>Viables</h4>
                    <p><b>23</b></p>
                  </div>
                </div>
              </div>
            </div>








  <div class="row">
        <div class="col-md-6">
          <iframe src="http://notaria16.com/metricas/4.php" width="1200px" height="380px" border="0" scrolling="no" frameborder="0"></iframe>

        <iframe src="http://notaria16.com/metricas/3.php" width="1200px" height="373px" border="0" scrolling="no" frameborder="0"></iframe>
        </div>


  <div class="col-md-6">
    <iframe src="http://web.notaria16.com/metricas/1.php" width="1200px" height="407px" border="0" scrolling="no" frameborder="0"></iframe>

    <iframe src="http://web.notaria16.com/metricas/2.php" width="1200px" height="390px" border="0" scrolling="no" frameborder="0"></iframe>

  </div>
</div>



          </div>
          <div class="tab-pane fade" id="dropdown2">


          </div>
        </div>
      </div>
      </div>








    </main>

    <?php endif;?>  <!-- Supervisor-->








