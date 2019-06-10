<!-- Inicio Todos-->

<head>
  <!-- Simuladores-->
  <meta http-equiv="Content-Type" content="text/html; charset=gb18030">
  <link rel="stylesheet" href="archivos/css/bootstrap.min.css">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>

  <script src="http://dav.notaria16.co/Simuladores/Leasing.js" type="text/javascript"></script>
  <script src="http://dav.notaria16.co/Simuladores/Ventahipoteca.js" type="text/javascript"></script>
  <!-- Fin Simuladores-->


  <!-- Tab (Persona Natural / Jurídica)-->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <!-- Fin Tab (Persona Natural / Jurídica)-->


  <!-- orden abajo-->
  <link rel="stylesheet" href="vistas/Inicio/template/css/default.css">
  <!-- Fin orden abajo-->

  <!-- seleccionar-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <link rel="stylesheet" type="text/css" href="assets/file/css/component.css" />
  <script>
    function cambiar() {
      var pdrs = document.getElementById('file-upload').files[0].name;
      document.getElementById('info').innerHTML = pdrs;
    }
  </script>
  <!-- Fin seleccionar-->



  <!-- colores-->
  <style type="text/css">
    .n {
      color: #FF0000;
    }

    .s {
      color: #F9BE07;
    }

    .v {
      color: #009900;
    }
  </style>
  <!-- colores-->

<!-- Fin Todos-->








<?php if($_SESSION['Rol']=="Informador"):?><!-- Informador-->

<aside class="app-sidebar">
      
      <ul class="app-menu">
 
              <li style="padding-left: 20%;"><img src="archivos/img/notaria/logob.png" style="width: 100px;" ></li><br>

            <li><a class="app-menu__item" href="index.php#top"><i class="app-menu__icon colorp fa fa-home" ></i><span class="app-menu__label" >Inicio</span></a></li>
            <li><a class="app-menu__item"  href="?c=autorizacion&a=registrarautorizacion"><i class="app-menu__icon colorp fa fa fa-clipboard" ></i><span class="app-menu__label" > Solicitud</span></a></li>
             <li><a class="app-menu__item" href="?c=simulador"><i class="app-menu__icon colorp fa fa-calculator" ></i><span class="app-menu__label" >Simulador</span></a></li>
             <li><a class="app-menu__item" href="?c=preguntas"><i class="app-menu__icon colorp fa fa-question" ></i><span class="app-menu__label" >Preguntas Frecuentes</span></a></li>
             <li><a class="app-menu__item" href="?c=solicitud"><i class="app-menu__icon colorp fa fa-edit" ></i><span class="app-menu__label" >Mis Solicitudes</span></a></li>
           
            <li><a class="app-menu__item" href="?c=certificado"><i class="app-menu__icon colorp fa fa-file-text-o" ></i><span class="app-menu__label" >Certificado</span></a></li>
            <li><a class="app-menu__item" href="?c=Checklist"><i class="app-menu__icon colorp fa fa-check-square" ></i><span class="app-menu__label" >Documento</span></a></li>
            <li><a class="app-menu__item"href="?c=contacto"><i class="app-menu__icon colorp fa fa fa-address-book-o" ></i><span class="app-menu__label" >Contactanos</span></a></li>
           
    
             
      </ul>
     

    </aside>




  </head>

  <body class="app sidebar-mini rtl" style="background-color:#FDFEFE;">

  <main class="app-content" style="zoom:100%;background-color:#FDFEFE;">
    <div class="app-title">
      <div>
        <h1><i class="colorp fa fa-clipboard"></i><?=$titulo?></h1>
        <p></p>
      </div>



      <ul class="app-breadcrumb breadcrumb side">

        <a href="index.php">
          <li class="breadcrumb-item"><i class="colorp fa fa-home fa-lg"></i></li>
        </a>

        <li></a></li>
      </ul>
    </div>
    <div align="right">
    <a style=" background-color:#7E7E7E;border-color:#7E7E7E " class="btn btn-primary btn-lg " href="?c=solicitud&a=registrarsolicitud">Nueva Solicitud</a>
     </div>


    <div class="content-wrapper" style="zoom:85%;padding-left: 0%;padding-right: 0%;">


      <div class="col-md-10" style="padding: 15px;">
        <!-- Progress Bar-->
        <br>
        <div class="progress">
          <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width:10%">
            10%
          </div>
        </div>
        <br>
        <!-- Fin Progress Bar-->
        <div class="card" style=" padding-bottom: 200px; border-color: white">

          <div class="card-body" id="fondo">





            <div align="center" class="content-wrapper">


              <!-- Formulario -->

              <div class="col-md-12">
                <form name="solicitud" class="form-horizontal" method="POST" enctype="multipart/form-data" action="?c=resolicitud&a=Guardar">

                  <div >

                    <input class="form-control" name="id" type="hidden" value="<?=$p->getidsolicitud()?>" >
                  </div>
              </div>

              <!-- Formulario respuesta notaria-->



              <div class="alert alert-info" align="center">
              <strong > Datos de la Solicitud</strong>
              </div>
              <br>

              <table>
              <th style="width: 400px;">
                <div align="center" >
                  <label for="" >Tipo de persona</label>
                </div>
              </th>
              <th style="width: 400px;">
                <div align="center" >
                  <label for="" >Tipo de la Solicitud</label>
                </div>
              </th>
               <th style="width: 400px;">
                 <div align="center" >
                   <label for="" >Fecha envio de la solicitud </label>
                 </div>
               </th>
              <tr>
                <td style=" padding-right: 20px">
                  <input class="form-control" autocomplete="off" style="text-align:center;" type="text" name="tipopersona" id="tipopersona" readonly="readonly" value="<?=$p->gettipopersona()?>"/>
                </td>
                <td style=" padding-right: 20px">
                  <input class="form-control" autocomplete="off" style="text-align:center;" type="text" name="tipoacto" id="tipoacto" readonly="readonly" value="<?=$p->gettipoacto()?>"/>
                </td> 
                <td>
                  <input class="form-control" autocomplete="off" style="text-align:center;" type="text" name="fecha" id="fecha" readonly="readonly" value="<?=$p->getfecha()?>"/>
                </td> 
              </tr>
              </table>
              <br>
              <table>
             
              <tr>
              <td style=" padding-right: 20px">
                <select  style="visibility:hidden;padding-top: 0px;" name="fk_idnotaria"  >
                  <?php foreach($this->modelo->ListarNotarias() as $r): ?>
                      <option  value="<?=$r->idnotaria?>" <?=$p->getfk_idnotaria()==$r->idnotaria ? "selected": ""?> ><?=$r->Nombresnotaria?> </option>
                  <?php endforeach;?>
                </select>
              </td>
              <td style=" padding-right: 20px">
                <select style="visibility:hidden;padding-top: 0px;" name="sucursal" id="sucursal" >
                    <?php foreach($this->modelo->Listarsucursalnotaria() as $r): ?>
                        <option value="<?=$r->idsucursal?>" <?=$p->getsucursal()==$r->idsucursal ? "selected": ""?> ><?=$r->nombre?> </option>
                    <?php endforeach;?>
                </select>
              </td>
              <td>
              <input autocomplete="off" style="text-align:center;" type="hidden" name="fechanotaria" id="fechanotaria" value="<?=$p->getfechanotaria()?>"/>              
               
              </td>
              </tr>
              </table>
              




               <div class="alert alert-info" align="center">
               <strong > Datos del inmueble</strong>
               </div>



                 <?php foreach($this->modelo->ListarDocumento($p->getidsolicitud()) as $r):?>
                            
                <?php endforeach;?>
                </tbody>



               <!-- Primer inmueble-->

               <div >
               <table style=" width: 90%;"   >
               <th style="width: 400px;" >
                <div align="center" >
                  <label for="matriculainmobiliaria"> No Matricula ( del inmueble )</label>
                </div>
               </th>

               <th style="width: 400px;" >
                 <div align="center" >
                   <label for="documentoinformador">Certificados Cargados por el informador</label>
                 </div>
               </th>

               <th style="width: 400px;" >
                 <div align="center" >
                   <label for="documentoinformador">Certificados Cargados por la Notaria</label>
                 </div>
               </th>

               <th>
                 <div align="center" >
                  
                 </div>
               </th>


               <tr align="center" >
               <td style=" padding-right: 20px">
               <input style="width: 100%" class="form-control"  readonly="readonly" autocomplete="off" type="text" minlength="6" maxlength="50" name="matriculainmobiliaria" value="<?=$p->getmatriculainmobiliaria()?>"/>
               </td>
               <td style="width: 400px; padding-top: 10px"  >
                    <!-- ver certificado 1-->
                   
                    <?php 
                    if (isset($r->documentoinformador)){
                    if((substr($r->documentoinformador,(strlen($r->documentoinformador))-4)) == ".pdf"){ ?>
                    
                    <a class="btn btn-info btn-lg"  data-toggle="modal" data-target="#myModal<?=$r->idsolicitud?>"  style="font-size:80%;width: 230px;background-color: #17A4B7;border-color: #17A4B7; color: white; " data-toggle="tooltip" >Ver Certificado</a>

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
                     <input type="hidden" id="documentoinformador" name="documentoinformador"/>
                     <button type="button" class="btn btn-danger btn-lg" data-toggle="modal"style="font-size:80%;width: 230px;background-color: gray;border-color: gray;"> Sin Certificado </button>
                    <?php }}?>
                    
                      <!-- ver certificado 1-->
                 
               </td>








               <td style="width: 400px; padding-top: 10px"  >

                <!-- ver certificado 1 Notaria -->
                   
                    <?php 
                    if (isset($r->docprimernotaria)){
                    if((substr($r->docprimernotaria,(strlen($r->docprimernotaria))-4)) == ".pdf"){ ?>
                       <input type="hidden" name="docprimernotaria" id="docprimernotaria" value="<?=$p->getdocumentonotaria()?>"/>
                    <a class=" btn btn-primary btn-lg"  data-toggle="modal" data-target="#myModaldocprimeroeste<?=$r->idsolicitud?>"  style="font-size:80%;width: 230px;background-color: #009688;border-color: #009688; color: white; " data-toggle="tooltip" >Ver Certificado</a>

                    <!-- Modal -->
                                <div class="modal fade" id="myModaldocprimeroeste<?=$r->idsolicitud?>" role="dialog">
                                  <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Matricula No :  <?=$r->matriculainmobiliaria?></h4>
                                      </div>
                                      <div class="modal-body">
                                        <iframe src="<?=$r->docprimernotaria?>" width="770" height="530" style="border: none;"></iframe>
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                      </div>
                                    </div>
                                  </div>
                                </div>


                   <?php } else { ?>                    
                    <input type="hidden" id="docprimernotaria" name="docprimernotaria"/>
                     <button type="button" class="btn btn-danger btn-lg" data-toggle="modal"style="font-size:80%;width: 230px;background-color: gray;border-color: gray;"> Sin Certificado </button>
                    <?php }}?>
                    
                      <!-- ver certificado 1 Notaria-->



                 
                 
               </td>

               <td>
                  <select style="visibility:hidden;padding-top: 0px;" class="form-control" name="checkprimero"/>
                       <option value="No" <?=$p->getcheckprimero()=="No" ? "selected": ""?> >No</option>
                       <option value="Si" <?=$p->getcheckprimero()=="Si" ? "selected": ""?> >Si</option>
                   </select>
               </td>
               </tr>
               <!-- Fin Primer inmueble-->





               <!-- Segundo inmueble-->
               <tr align="center" >
               <td style=" width: 400px;padding-right: 20px" >
               <input class="form-control" autocomplete="off" type="text"  name="estado" readonly="readonly" placeholder="No hay matricula" value="<?=$p->getestado()?>"/>
               </td>
               <td style="width: 400px; padding-top: 10px"  >
                    <!-- ver certificado 2-->
                   
                    <?php 
                    if (isset($r->documentonotaria)){
                    if((substr($r->documentonotaria,(strlen($r->documentonotaria))-4)) == ".pdf"){ ?>
                       
                    <a class="btn btn-info btn-lg"  data-toggle="modal" data-target="#myModal2<?=$r->idsolicitud?>"  style="font-size:80%;width: 230px;background-color: #17A4B7;border-color: #17A4B7; color: white; " data-toggle="tooltip" >Ver Certificado</a>

                    <!-- Modal -->
                                <div class="modal fade" id="myModal2<?=$r->idsolicitud?>" role="dialog">
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
                     <input type="hidden" id="documentonotaria" name="documentonotaria"/>
                     <button type="button" class="btn btn-danger btn-lg" data-toggle="modal"style="font-size:80%;width: 230px;background-color: gray;border-color: gray;"> Sin Certificado </button>
                    <?php }}?>
                    
                      <!-- ver certificado 2-->

               </td>

               <td>
                <!-- ver certificado 2 Notaria -->
                   
                    <?php 
                    if (isset($r->docsegundonotaria)){
                    if((substr($r->docsegundonotaria,(strlen($r->docsegundonotaria))-4)) == ".pdf"){ ?>
                       <input type="hidden" name="docsegundonotaria" id="docsegundonotaria" value="<?=$p->getdocsegundonotaria()?>"/>
                    <a class=" btn btn-primary btn-lg"  data-toggle="modal" data-target="#myModaldocsegundoeste<?=$r->idsolicitud?>"  style="font-size:80%;width: 230px;background-color: #009688;border-color: #009688; color: white; " data-toggle="tooltip" >Ver Certificado</a>

                    <!-- Modal -->
                                <div class="modal fade" id="myModaldocsegundoeste<?=$r->idsolicitud?>" role="dialog">
                                  <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Matricula No :  <?=$r->estado?></h4>
                                      </div>
                                      <div class="modal-body">
                                        <iframe src="<?=$r->docsegundonotaria?>" width="770" height="530" style="border: none;"></iframe>
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                      </div>
                                    </div>
                                  </div>
                                </div>


                   <?php } else { ?>                    
                   <input type="hidden" id="docsegundonotaria" name="docsegundonotaria"/>
                     <button type="button" class="btn btn-danger btn-lg" data-toggle="modal"style="font-size:80%;width: 230px;background-color: gray;border-color: gray;"> Sin Certificado </button>
                    <?php }}?>
                    
                      <!-- ver certificado 2 Notaria-->

                
               </td>
               <td>
                  <select style="visibility:hidden;padding-top: 0px;" class="form-control" name="checksegundo"/>
                       <option value="No" <?=$p->getchecksegundo()=="No" ? "selected": ""?> >No</option>
                       <option value="Si" <?=$p->getchecksegundo()=="Si" ? "selected": ""?> >Si</option>
                   </select>
               </td>
               </tr>

               <!-- Fin Segundo inmueble-->

               <!-- Tercer inmueble-->

               <tr align="center">
               <td style=" padding-right: 20px" >
               <input class="form-control" autocomplete="off" type="text"  name="terceramatricula" readonly="readonly" placeholder="No hay matricula" value="<?=$p->getterceramatricula()?>"/>
               </td>
               

               <td style="width: 400px; padding-top: 10px"  >
                    <!-- ver certificado 3-->
                   
                    <?php 
                    if (isset($r->tercerdocumento)){
                    if((substr($r->tercerdocumento,(strlen($r->tercerdocumento))-4)) == ".pdf"){ ?>
                    
                    <a class="btn btn-info btn-lg"  data-toggle="modal" data-target="#myModal3<?=$r->idsolicitud?>"  style="font-size:80%;width: 230px;background-color: #17A4B7;border-color: #17A4B7; color: white; " data-toggle="tooltip" >Ver Certificado</a>

                    <!-- Modal -->
                                <div class="modal fade" id="myModal3<?=$r->idsolicitud?>" role="dialog">
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
                    <input type="hidden" id="tercerdocumento" name="tercerdocumento"/>
                     <button type="button" class="btn btn-danger btn-lg" data-toggle="modal"style="font-size:80%;width: 230px;background-color: gray;border-color: gray;"> Sin Certificado </button>
                    <?php }}?>
                    
                      <!-- ver certificado 3-->
                     
             
               </td>
               <td>
              
             
               <!-- ver certificado 3 Notaria -->
                   
                    <?php 
                    if (isset($r->docterceronotaria)){
                    if((substr($r->docterceronotaria,(strlen($r->docterceronotaria))-4)) == ".pdf"){ ?>
                       <input type="hidden" name="docterceronotaria" id="docterceronotaria" value="<?=$p->getdocterceronotaria()?>"/>
                    <a class=" btn btn-primary btn-lg"  data-toggle="modal" data-target="#myModaldocterceroeste<?=$r->idsolicitud?>"  style="font-size:80%;width: 230px;background-color: #009688;border-color: #009688; color: white; " data-toggle="tooltip" >Ver Certificado</a>

                    <!-- Modal -->
                                <div class="modal fade" id="myModaldocterceroeste<?=$r->idsolicitud?>" role="dialog">
                                  <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Matricula No :  <?=$r->terceramatricula?></h4>
                                      </div>
                                      <div class="modal-body">
                                        <iframe src="<?=$r->docterceronotaria?>" width="770" height="530" style="border: none;"></iframe>
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                      </div>
                                    </div>
                                  </div>
                                </div>


                   <?php } else { ?>                    
                   <input type="hidden" id="docterceronotaria" name="docterceronotaria"/>
                     <button type="button" class="btn btn-danger btn-lg" data-toggle="modal"style="font-size:80%;width: 230px;background-color: gray;border-color: gray;"> Sin Certificado </button>
                    <?php }}?>
                    
                      <!-- ver certificado 3 Notaria-->
               
                

               </td>
               <td>
                  <select style="visibility:hidden;padding-top: 0px;" class="form-control" name="checktercero"/>
                       <option value="No" <?=$p->getchecktercero()=="No" ? "selected": ""?> >No</option>
                       <option value="Si" <?=$p->getchecktercero()=="Si" ? "selected": ""?> >Si</option>
                   </select>
               </td>
               </tr>

               <!-- Fin Tercer inmueble-->

               <!-- Cuarto inmueble-->

               <tr align="center">
               <td style=" padding-right: 20px" >
               <input class="form-control" autocomplete="off" type="text" name="cuartamatricula" readonly="readonly" placeholder="No hay matricula" value="<?=$p->getcuartamatricula()?>"/>
               </td>
               

               <td style="width: 400px; padding-top: 10px"  >
                    <!-- ver certificado 4-->
                   
                    <?php 
                    if (isset($r->cuartodocumento)){
                    if((substr($r->cuartodocumento,(strlen($r->cuartodocumento))-4)) == ".pdf"){ ?>
                     
                    <a class="btn btn-info btn-lg"  data-toggle="modal" data-target="#myModal4<?=$r->idsolicitud?>"  style="font-size:80%;width: 230px;background-color: #17A4B7;border-color: #17A4B7; color: white; " data-toggle="tooltip" >Ver Certificado</a>

                    <!-- Modal -->
                                <div class="modal fade" id="myModal4<?=$r->idsolicitud?>" role="dialog">
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
                    <input type="hidden" id="cuartodocumento" name="cuartodocumento" />
                     <button type="button" class="btn btn-danger btn-lg" data-toggle="modal"style="font-size:80%;width: 230px;background-color: gray;border-color: gray;"> Sin Certificado </button>
                    <?php }}?>
                    
                      <!-- ver certificado 4-->
                
                 
               </td>
             
            
               <td>

                <!-- ver certificado 4 Notaria -->
                   
                    <?php 
                    if (isset($r->doccuartonotaria)){
                    if((substr($r->doccuartonotaria,(strlen($r->doccuartonotaria))-4)) == ".pdf"){ ?>
                       <input type="hidden" name="doccuartonotaria" id="doccuartonotaria" value="<?=$p->getdoccuartonotaria()?>"/>
                    <a class=" btn btn-primary btn-lg"  data-toggle="modal" data-target="#myModaldoccuartaeste<?=$r->idsolicitud?>"  style="font-size:80%;width: 230px;background-color: #009688;border-color: #009688; color: white; " data-toggle="tooltip" >Ver Certificado</a>

                    <!-- Modal -->
                                <div class="modal fade" id="myModaldoccuartaeste<?=$r->idsolicitud?>" role="dialog">
                                  <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Matricula No :  <?=$r->cuartamatricula?></h4>
                                      </div>
                                      <div class="modal-body">
                                        <iframe src="<?=$r->doccuartonotaria?>" width="770" height="530" style="border: none;"></iframe>
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                      </div>
                                    </div>
                                  </div>
                                </div>


                   <?php } else { ?>                    
                  <input type="hidden" id="doccuartonotaria" name="doccuartonotaria"/>
                     <button type="button" class="btn btn-danger btn-lg" data-toggle="modal"style="font-size:80%;width: 230px;background-color: gray;border-color: gray;"> Sin Certificado </button>
                    <?php }}?>
                    
                      <!-- ver certificado 4 Notaria-->
               
               </td>
               <td>
                 <select style="visibility:hidden;padding-top: 0px;" class="form-control" name="checkcuarto"/>
                       <option value="No" <?=$p->getcheckcuarto()=="No" ? "selected": ""?> >No</option>
                       <option value="Si" <?=$p->getcheckcuarto()=="Si" ? "selected": ""?> >Si</option>
                   </select>
               </td>
               </tr>

               <!--Fin Cuarto inmueble-->

               <!-- Quinto inmueble-->

               <tr align="center">
               <td style=" padding-right: 20px" >
               <input class="form-control" autocomplete="off" type="text"  name="quintamatricula" placeholder="No hay matricula" readonly="readonly" value="<?=$p->getquintamatricula()?>"/>
               </td>
               <td style="width: 400px; padding-top: 10px"  >
                    <!-- ver certificado 5-->
                   
                    <?php 
                    if (isset($r->quintodocumento)){
                    if((substr($r->quintodocumento,(strlen($r->quintodocumento))-4)) == ".pdf"){ ?>
                    
                    <a class="btn btn-info btn-lg"  data-toggle="modal" data-target="#myModal5<?=$r->idsolicitud?>"  style="font-size:80%;width: 230px;background-color: #17A4B7;border-color: #17A4B7; color: white; " data-toggle="tooltip" >Ver Certificado</a>

                    <!-- Modal -->
                                <div class="modal fade" id="myModal5<?=$r->idsolicitud?>" role="dialog">
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
                    <input type="hidden" id="quintodocumento" name="quintodocumento" />
                     <button type="button" class="btn btn-danger btn-lg" data-toggle="modal"style="font-size:80%;width: 230px;background-color: gray;border-color: gray;"> Sin Certificado </button>
                    <?php }}?>
                    
                      <!-- ver certificado 5-->
                 
               </td>
               <td>
                 <!-- ver certificado 5 Notaria -->
                   
                    <?php 
                    if (isset($r->docquintonotaria)){
                    if((substr($r->docquintonotaria,(strlen($r->docquintonotaria))-4)) == ".pdf"){ ?>
                       <input type="hidden" name="docquintonotaria" id="docquintonotaria" value="<?=$p->getdoccuartonotaria()?>"/>
                    <a class=" btn btn-primary btn-lg"  data-toggle="modal" data-target="#myModaldocquintoeste<?=$r->idsolicitud?>"  style="font-size:80%;width: 230px;background-color: #009688;border-color: #009688; color: white; " data-toggle="tooltip" >Ver Certificado</a>

                    <!-- Modal -->
                                <div class="modal fade" id="myModaldocquintoeste<?=$r->idsolicitud?>" role="dialog">
                                  <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Matricula No :  <?=$r->quintamatricula?></h4>
                                      </div>
                                      <div class="modal-body">
                                        <iframe src="<?=$r->docquintonotaria?>" width="770" height="530" style="border: none;"></iframe>
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                      </div>
                                    </div>
                                  </div>
                                </div>


                   <?php } else { ?>                    
                  <input type="hidden" id="docquintonotaria" name="docquintonotaria"/>
                     <button type="button" class="btn btn-danger btn-lg" data-toggle="modal"style="font-size:80%;width: 230px;background-color: gray;border-color: gray;"> Sin Certificado </button>
                    <?php }}?>
                    
                      <!-- ver certificado 5 Notaria-->
               

               
               </td>
               
               <td>
                 <select style="visibility:hidden;padding-top: 0px;" class="form-control" name="checkquinto"/>
                       <option value="No" <?=$p->getcheckquinto()=="No" ? "selected": ""?> >No</option>
                       <option value="Si" <?=$p->getcheckquinto()=="Si" ? "selected": ""?> >Si</option>
                   </select>

               </td>
               </tr>
               </table>
               <!-- Quinto inmueble-->


               </div>
               <br>
               <!-- Fin Segundo inmueble-->

               <br>

               <div class="alert alert-info" align="center">
               <strong> Datos del Propietario ( Futuro vendedor )</strong>
               </div>
               <br>


               <div align="center">
               <table>
               <th style="width: 500px;">
               <label for="cedulapropietario" >No de Documento o Nit del propietario </label>
               </th>
               <th style="width: 500px;">
               <label for="estadocivilpropietario" >Estado Civil Propietario </label>
               </th>
               <tr>
                 <td style=" padding-right: 20px">
                 <input class="form-control" autocomplete="off" type="number" id="cedulapropietario" name="cedulapropietario" placeholder="Ingrese el numero de Documento o el Nit del propietario ( Futuro vendedor )"  readonly="readonly" value="<?=$p->getcedulapropietario()?>"/>
                 </td>
                 <td>
                   <select class="form-control" readonly="readonly"  name="estadocivilpropietario" required  />
                       <option value="">Seleccione el estado civil del propietario ( Futuro vendedor )</option>
                       <option value="No se sabe" <?=$p->getestadocivilpropietario()=="No se sabe" ? "selected": ""?> >No se sabe</option>
                       <option value="Entidad" <?=$p->getestadocivilpropietario()=="Entidad" ? "selected": ""?> >Entidad</option>
                       <option value="Casado con sociedad conyugal vigente" <?=$p->getestadocivilpropietario()=="Casado con sociedad conyugal vigente" ? "selected": ""?> >Casado con sociedad conyugal vigente</option>
                       <option value="Casado con sociedad conyugal disuelta y liquidada"  <?=$p->getestadocivilpropietario()=="Casado con sociedad conyugal disuelta y liquidada" ? "selected": ""?>>Casado con sociedad conyugal disuelta y liquidada</option>
                       <option value="Soltero sin unión marital de hecho" <?=$p->getestadocivilpropietario()=="Soltero sin unión marital de hecho" ? "selected": ""?>>Soltero sin unión marital de hecho</option>
                       <option value="Soltero con unión marital de hecho" <?=$p->getestadocivilpropietario()=="Soltero con unión marital de hecho" ? "selected": ""?>>Soltero con unión marital de hecho</option>
                   </select>
                 </td>
               </tr>
               </table>
               </div>
               <br>
               <br>


               <div class="alert alert-info" align="center">
               <strong> Datos del Locatario ( Futuro comprador )</strong>
               </div>
               <br>

               <div align="center">
               <table>
               <th style="width: 500px;">
               <label for="nombrelocatario" >Primer nombre del locatario / Nombre empresa </label>
               </th>
               <th style="width: 500px;">
               <label for="nombreotrolocatario" >Segundo nombre del locatario </label>
               </th>
               <tr>
               <td style=" padding-right: 20px">
               <input class="form-control" autocomplete="off" type="text" name="nombrelocatario" placeholder="No hay datos" readonly="readonly" value="<?=$p->getnombrelocatario()?>"/>
               </td>
               <td>
               <input class="form-control" autocomplete="off" type="text" name="nombreotrolocatario" placeholder="No hay datos" readonly="readonly" value="<?=$p->getnombreotrolocatario()?>"/>
               </td>
               </tr>
               </table>
               </div>
               <br>
               <div align="center">
               <table>
               <th style="width: 500px;">
               <label for="primerapellido" >Primer apellido del locatario </label>
               </th>
               <th style="width: 500px;">
               <label for="segundoapellido" >Segundo apellido del locatario </label>
               </th>
               <tr>
               <td style=" padding-right: 20px">
               <input class="form-control" autocomplete="off" type="text" name="primerapellido" placeholder="No hay datos" readonly="readonly" value="<?=$p->getprimerapellido()?>"/>
               </td>
               <td>
               <input class="form-control" autocomplete="off" type="text" name="segundoapellido" placeholder="No hay datos" readonly="readonly" value="<?=$p->getsegundoapellido()?>"/>
               </td>
               </tr>
               </table>
               </div>
               <br>
               <br>

               <div align="center">
               <table>
               <th style="width: 400px;">
               <label for="cedulalocatario" >Numero de Documento del Locatario </label>
               </th>
               <th style="width: 400px;">
                <label for="tipodocumentolocatario" >Tipo de documento Locatario</label>
                </th>
                <th style="width: 400px;">
                 <label for="numerosolicitud" >Correo Electrónico</label>
                </th>
               <tr>
               <td style=" padding-right: 20px">
               <input class="form-control" autocomplete="off" type="number" name="cedulalocatario" placeholder="No hay datos" readonly="readonly" value="<?=$p->getcedulalocatario()?>"/>
               </td>
               <td style=" padding-right: 20px">
                 <select class="form-control" style="height:5%" name="tipodocumentolocatario" readonly="readonly" />
                  <option value="">No hay datos</option>
                   <option value="Cédula de ciudadanía" <?=$p->gettipodocumentolocatario()=="Cédula de ciudadanía" ? "selected": ""?> >Cédula de ciudadanía</option>
                   <option value="Cédula de extranjería" <?=$p->gettipodocumentolocatario()=="Cédula de extranjería" ? "selected": ""?>>Cédula de extranjería</option>
                   <option value="Nit para personas jurídicas" <?=$p->gettipodocumentolocatario()=="Nit para personas jurídicas" ? "selected": ""?>>Nit para personas jurídicas</option>
                   <option value="Pasaporte" <?=$p->gettipodocumentolocatario()=="Pasaporte" ? "selected": ""?>>Pasaporte</option>
                 </select>
               </td>
               <td>
                 <input id="correo" class="form-control" autocomplete="off" type="email" name="numerosolicitud" placeholder="No hay datos" readonly="readonly" value="<?=$p->getnumerosolicitud()?>"/>
               </td>
               </tr>
               </table>
               </div>
               <br><br>
               <div class="alert alert-info">
               <strong> Liquidador</strong>
               </div>

               <table>
               <th style="width: 400px;">
                 <div align="center" >
                   <label for="" >Valor Leasing</label>
                 </div>
               </th>
               <th style="width: 400px;">
                 <div align="center" >
                   <label  >Valor Venta</label>
                 </div>
                </th>
                <th style="width: 400px;">
                  <div align="center" >
                    <label>Valor Hipoteca</label>
                  </div>
                </th>
               <tr>
               <td style=" padding-right: 20px">
                 <input class="form-control" require autocomplete="off" type="number" name="ValEscritura" id="ValEscritura" placeholder="No hay datos" readonly="readonly" value="<?=$p->getValEscritura()?>"/>
               </td>
               <td style=" padding-right: 20px">
                 <input class="form-control" autocomplete="off" type="number" id="ValVenta" name="ValVenta" placeholder="No hay datos" readonly="readonly" value="<?=$p->getValVenta()?>"/>
               </td>
               <td>
                 <input class="form-control" autocomplete="off" type="number" id="ValHipoteca" name="ValHipoteca" placeholder="No hay datos" readonly="readonly" value="<?=$p->getValHipoteca()?>"/>
               </td>
               </tr>
               </table>



<br>


               <div class="alert alert-info">
               <strong> Viabilidad</strong>
               </div><br>

                    <div align="center">
                    <table>
                    <th style="width: 1200px;">
                     
                    </th>

                    <tr>

                    
             
              
              
             
             
                      <td align="center" >
                                      <?php
                                   if((substr($r->viabilidad,(strlen($r->viabilidad))-4)) == "v"){ ?>

                                    <div style="height: 120px; width: 40%" class="card mb-3 text-white bg-success">
                                      <div  class="card-body">
                                        <blockquote style="height: 80px" class="card-blockquote">
                                          <h2>Viable</h2>
                                        </blockquote>
                                      </div>
                                    </div>           
                                    
                                    <?php } else if((substr($r->viabilidad,(strlen($r->viabilidad))-4)) == "s"){ ?>

                                      <div style="height: 120px; width: 40%" class="card mb-3 text-white bg-warning">
                                        <div class="card-body">
                                          <blockquote style="height: 80px" class="card-blockquote">
                                            <h2>Solucionar</h2>
                                          </blockquote>
                                        </div>
                                      </div>

                                    <?php } else if((substr($r->viabilidad,(strlen($r->viabilidad))-4)) == "n"){ ?>

                                        <div style="height: 120px; width: 40%" class="card mb-3 text-white bg-danger">
                                          <div class="card-body">
                                            <blockquote style="height: 80px" class="card-blockquote">
                                              <h2>No Viable</h2>
                                            </blockquote>
                                          </div>
                                        </div>

                                     <?php } else { ?>

                                                <div style="height: 120px; width: 40%" class="card mb-3 text-white bg-dark">
                                                  <div class="card-body">
                                                    <blockquote style="height: 80px" class="card-blockquote">
                                                      <h2>En Proceso</h2>
                                                    </blockquote>
                                                  </div>
                                                </div>


                                                <?php } ?>
                          </td>
                    </tr>
                    </table>
                    </div>
                    <br>

                                   


                     

                   
               <div align="center">
               <table>
               <th style="width: 600px;">
                <div align="center">
                  <label for="observacion">Observaciones informador</label>
                </div>
               </th>
               <th style="width: 600px;">
                 <div align="center">
                   <label for="estadocivilpropietario" >Observaciones Notaria</label>
                 </div>
               </th>
               <tr>
                 <td style=" padding-right: 20px">
                    <textarea class="form-control" autocomplete="off" type="text"  name="observacion" readonly="readonly" rows="4" cols="50"><?=$p->getobservacion()?> </textarea>
                 </td>
                 <td>
                    <textarea class="form-control" autocomplete="off" type="text" id="observacionesnotaria" readonly="readonly" name="observacionesnotaria" rows="4" cols="50"><?=$p->getobservacionesnotaria()?> </textarea>
                 </td>
               </tr>
               </table>
               </div>



                  


             
              
             
              
              


               <br>

               


               <div >
               <input class="form-control" autocomplete="off" type="hidden" placeholder="Ingrese el primer apellido del locatario ( Futuro comprador )" name="fk_idautorizacion" value=""/>
               </div>









                               <input class="btn btn-info btn-lg " type="button" onclick="location.href='?c=resolicitud';" value="Mis Solicitudes" />
                              </form>

                            </div>





            <!-- Fin Formulario-->





          </div>

        </div>


        <br><br><br><br><br><br><br>
  </main>


<?php endif;?>  <!-- Informador-->






























<?php if($_SESSION['Rol']=="Notaria"):?><!-- Notaria-->


  </head>

  <body class="app sidebar-mini rtl" style="background-color:#FDFEFE;">

  <main class="app-content" style="zoom:100%;background-color:#FDFEFE;">
    <div class="app-title">
      <div>
        <h1><i class="colorp fa fa-clipboard"></i><?=$titulo?></h1>
        <p></p>
      </div>



      <ul class="app-breadcrumb breadcrumb side">

        <a href="index.php">
          <li class="breadcrumb-item"><i class="colorp fa fa-home fa-lg"></i></li>
        </a>

        <li></a></li>
      </ul>
    </div>
    


    <div class="content-wrapper" style="zoom:85%;padding-left: 0%;padding-right: 0%;">


      <div class="col-md-10" style="padding: 15px;">
        <!-- Progress Bar-->
        <br>
        <div class="progress">
          <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width:10%">
            10%
          </div>
        </div>
        <br>
        <!-- Fin Progress Bar-->
        <div class="card" style=" padding-bottom: 200px; border-color: white">

          <div class="card-body" id="fondo">





            <div align="center" class="content-wrapper">


              <!-- Formulario -->

              <div class="col-md-12">
                <form name="solicitud" class="form-horizontal" method="POST" enctype="multipart/form-data" action="?c=resolicitud&a=Guardar">

                  <div >

                    <input class="form-control" name="id" type="hidden" value="<?=$p->getidsolicitud()?>" >
                  </div>
              </div>

              <!-- Formulario respuesta notaria-->



              <div class="alert alert-info" align="center">
              <strong > Datos de la Solicitud</strong>
              </div>
              <br>

              <table>
              <th style="width: 400px;">
                <div align="center" >
                  <label for="" >Tipo de persona</label>
                </div>
              </th>
              <th style="width: 400px;">
                <div align="center" >
                  <label for="" >Tipo de la Solicitud</label>
                </div>
              </th>
               <th style="width: 400px;">
                 <div align="center" >
                   <label for="" >Fecha envio de la solicitud </label>
                 </div>
               </th>
              <tr>
                <td style=" padding-right: 20px">
                  <input class="form-control" autocomplete="off" style="text-align:center;" type="text" name="tipopersona" id="tipopersona" readonly="readonly" value="<?=$p->gettipopersona()?>"/>
                </td>
                <td style=" padding-right: 20px">
                  <input class="form-control" autocomplete="off" style="text-align:center;" type="text" name="tipoacto" id="tipoacto" readonly="readonly" value="<?=$p->gettipoacto()?>"/>
                </td> 
                <td>
                  <input class="form-control" autocomplete="off" style="text-align:center;" type="text" name="fecha" id="fecha" readonly="readonly" value="<?=$p->getfecha()?>"/>
                </td> 
              </tr>
              </table>
              <br>
              <table>
              <th style="width: 400px;">
                <div align="center" >
                  <label for="" >Informador</label>
                </div>
              </th>
              <th style="width: 400px;">
                <div align="center" >
                  <label for="" >Sucursal</label>
                </div>
               </th>
               <th style="width: 400px;">
                 <div align="center" >
                   <label for="" >Fecha ultima respuesta Notaria </label>
                 </div>
               </th>
              <tr>
              <td style=" padding-right: 20px">
                <select class="form-control" readonly="readonly" name="fk_idnotaria"  >
                  <?php foreach($this->modelo->ListarNotarias() as $r): ?>
                      <option  value="<?=$r->idnotaria?>" <?=$p->getfk_idnotaria()==$r->idnotaria ? "selected": ""?> ><?=$r->Nombresnotaria?> </option>
                  <?php endforeach;?>
                </select>
              </td>
              <td style=" padding-right: 20px">
                <select class="form-control" readonly="readonly" name="sucursal" id="sucursal" >
                    <?php foreach($this->modelo->Listarsucursalnotaria() as $r): ?>
                        <option value="<?=$r->idsucursal?>" <?=$p->getsucursal()==$r->idsucursal ? "selected": ""?> ><?=$r->nombre?> </option>
                    <?php endforeach;?>
                </select>
              </td>
              <td>
              
              <input style="text-align:center;" class="form-control" readonly="readonly" autocomplete="off" type="datetime"  name="fechanotaria" id="fechanotaria" value="<?php $timezone = -5; //(GMT -5:00) EST (U.S. & Canada) style="visibility:hidden;padding-top: 0px;"
                    echo gmdate("Y/m/j H:i:s a", time() + 3600*($timezone+date("I"))); ?>" />
               
              </td>
              </tr>
              </table>
              <br><br>





               <div class="alert alert-info" align="center">
               <strong > Datos del inmueble</strong>
               </div>



                 <?php foreach($this->modelo->ListarDocumento($p->getidsolicitud()) as $r):?>
                            
                <?php endforeach;?>
                </tbody>



               <!-- Primer inmueble-->

               <div >
               <table style=" width: 90%;"   >
               <th style="width: 400px;" >
                <div align="center" >
                  <label for="matriculainmobiliaria"> No Matricula ( del inmueble )</label>
                </div>
               </th>

               <th style="width: 400px;" >
                 <div align="center" >
                   <label for="documentoinformador">Certificados Cargados por el informador</label>
                 </div>
               </th>

               <th style="width: 400px;" >
                 <div align="center" >
                   <label for="documentoinformador">Certificados Cargados por la Notaria</label>
                 </div>
               </th>

               <th>
                 <div align="center" >
                   <label for="documentoinformador">Se compro el certificado ?</label>
                 </div>
               </th>


               <tr align="center" >
               <td style=" padding-right: 20px">
               <input style="width: 100%" class="form-control"  readonly="readonly" autocomplete="off" type="text" minlength="6" maxlength="50" name="matriculainmobiliaria" value="<?=$p->getmatriculainmobiliaria()?>"/>
               </td>
               <td style="width: 400px; padding-top: 10px"  >
                    <!-- ver certificado 1-->
                   
                    <?php 
                    if (isset($r->documentoinformador)){
                    if((substr($r->documentoinformador,(strlen($r->documentoinformador))-4)) == ".pdf"){ ?>
                     <input type="hidden" id="documentoinformador" name="documentoinformador"/>
                    <a class="btn btn-info btn-lg"  data-toggle="modal" data-target="#myModal<?=$r->idsolicitud?>"  style="font-size:80%;width: 230px;background-color: #17A4B7;border-color: #17A4B7; color: white; " data-toggle="tooltip" >Ver Certificado</a>

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
                     <input type="hidden" id="documentoinformador" name="documentoinformador"/>
                     <button type="button" class="btn btn-danger btn-lg" data-toggle="modal"style="font-size:80%;width: 230px;background-color: gray;border-color: gray;"> Sin Certificado </button>
                    <?php }}?>
                    
                      <!-- ver certificado 1-->
                 
               </td>








               <td style="width: 400px; padding-top: 10px"  >

                <!-- ver certificado 1 Notaria -->
                   
                    <?php 
                    if (isset($r->docprimernotaria)){
                    if((substr($r->docprimernotaria,(strlen($r->docprimernotaria))-4)) == ".pdf"){ ?>
                       <input type="hidden" name="docprimernotaria" id="docprimernotaria" value="<?=$p->getdocumentonotaria()?>"/>
                    <a class=" btn btn-primary btn-lg"  data-toggle="modal" data-target="#myModaldocprimeroeste<?=$r->idsolicitud?>"  style="font-size:80%;width: 230px;background-color: #009688;border-color: #009688; color: white; " data-toggle="tooltip" >Ver Certificado</a>

                    <!-- Modal -->
                                <div class="modal fade" id="myModaldocprimeroeste<?=$r->idsolicitud?>" role="dialog">
                                  <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Matricula No :  <?=$r->matriculainmobiliaria?></h4>
                                      </div>
                                      <div class="modal-body">
                                        <iframe src="<?=$r->docprimernotaria?>" width="770" height="530" style="border: none;"></iframe>
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                      </div>
                                    </div>
                                  </div>
                                </div>


                   <?php } else { ?>                    
                    <input type="file" name="docprimernotaria" id="docprimernotaria" accept=".pdf" class="inputfile inputfile-5" data-multiple-caption="{count} files selected" style="opacity:0;font-size:100%;" value=""/>

                  <label for="docprimernotaria" style=" font-size:90%;" data-toggle="tooltip" ><span style=" width: 150px" ></span> <strong style=" font-size:100%;color: #fff;"> Seleccionar</strong></label>
                    <?php }}?>
                    
                      <!-- ver certificado 1 Notaria-->



                 
                 
               </td>

               <td>
                  <select style="width: 70px" class="form-control" name="checkprimero"/>
                       <option value="No" <?=$p->getcheckprimero()=="No" ? "selected": ""?> >No</option>
                       <option value="Si" <?=$p->getcheckprimero()=="Si" ? "selected": ""?> >Si</option>
                   </select>
               </td>
               </tr>
               <!-- Fin Primer inmueble-->





               <!-- Segundo inmueble-->
               <tr align="center" >
               <td style=" width: 400px;padding-right: 20px" >
               <input class="form-control" autocomplete="off" type="text"  name="estado" readonly="readonly" placeholder="No hay matricula" value="<?=$p->getestado()?>"/>
               </td>
               <td style="width: 400px; padding-top: 10px"  >
                    <!-- ver certificado 2-->
                   
                    <?php 
                    if (isset($r->documentonotaria)){
                    if((substr($r->documentonotaria,(strlen($r->documentonotaria))-4)) == ".pdf"){ ?>
                     <input type="hidden" id="documentonotaria" name="documentonotaria"/>
                    <a class="btn btn-info btn-lg"  data-toggle="modal" data-target="#myModal2<?=$r->idsolicitud?>"  style="font-size:80%;width: 230px;background-color: #17A4B7;border-color: #17A4B7; color: white; " data-toggle="tooltip" >Ver Certificado</a>

                    <!-- Modal -->
                                <div class="modal fade" id="myModal2<?=$r->idsolicitud?>" role="dialog">
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
                     <input type="hidden" id="documentonotaria" name="documentonotaria"/>
                     <button type="button" class="btn btn-danger btn-lg" data-toggle="modal"style="font-size:80%;width: 230px;background-color: gray;border-color: gray;"> Sin Certificado </button>
                    <?php }}?>
                    
                      <!-- ver certificado 2-->

               </td>

               <td>
                <!-- ver certificado 2 Notaria -->
                   
                    <?php 
                    if (isset($r->docsegundonotaria)){
                    if((substr($r->docsegundonotaria,(strlen($r->docsegundonotaria))-4)) == ".pdf"){ ?>
                       <input type="hidden" name="docsegundonotaria" id="docsegundonotaria" value="<?=$p->getdocsegundonotaria()?>"/>
                    <a class=" btn btn-primary btn-lg"  data-toggle="modal" data-target="#myModaldocsegundoeste<?=$r->idsolicitud?>"  style="font-size:80%;width: 230px;background-color: #009688;border-color: #009688; color: white; " data-toggle="tooltip" >Ver Certificado</a>

                    <!-- Modal -->
                                <div class="modal fade" id="myModaldocsegundoeste<?=$r->idsolicitud?>" role="dialog">
                                  <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Matricula No :  <?=$r->estado?></h4>
                                      </div>
                                      <div class="modal-body">
                                        <iframe src="<?=$r->docsegundonotaria?>" width="770" height="530" style="border: none;"></iframe>
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                      </div>
                                    </div>
                                  </div>
                                </div>


                   <?php } else { ?>                    
                   <input type="file" name="docsegundonotaria" id="docsegundonotaria" accept=".pdf" class="inputfile inputfile-5" data-multiple-caption="{count} files selected" style="opacity:0;font-size:100%;" value=""/>

                  <label for="docsegundonotaria" style=" font-size:90%;" data-toggle="tooltip" ><span style=" width: 150px" ></span> <strong style=" font-size:100%;color: #fff;"> Seleccionar</strong></label>
                    <?php }}?>
                    
                      <!-- ver certificado 2 Notaria-->

                
               </td>
               <td>
                  <select style="width: 70px" class="form-control" name="checksegundo"/>
                       <option value="No" <?=$p->getchecksegundo()=="No" ? "selected": ""?> >No</option>
                       <option value="Si" <?=$p->getchecksegundo()=="Si" ? "selected": ""?> >Si</option>
                   </select>
               </td>
               </tr>

               <!-- Fin Segundo inmueble-->

               <!-- Tercer inmueble-->

               <tr align="center">
               <td style=" padding-right: 20px" >
               <input class="form-control" autocomplete="off" type="text"  name="terceramatricula" readonly="readonly" placeholder="No hay matricula" value="<?=$p->getterceramatricula()?>"/>
               </td>
               

               <td style="width: 400px; padding-top: 10px"  >
                    <!-- ver certificado 3-->
                   
                    <?php 
                    if (isset($r->tercerdocumento)){
                    if((substr($r->tercerdocumento,(strlen($r->tercerdocumento))-4)) == ".pdf"){ ?>
                     <input type="hidden" id="tercerdocumento" name="tercerdocumento"/>
                    <a class="btn btn-info btn-lg"  data-toggle="modal" data-target="#myModal3<?=$r->idsolicitud?>"  style="font-size:80%;width: 230px;background-color: #17A4B7;border-color: #17A4B7; color: white; " data-toggle="tooltip" >Ver Certificado</a>

                    <!-- Modal -->
                                <div class="modal fade" id="myModal3<?=$r->idsolicitud?>" role="dialog">
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
                    <input type="hidden" id="tercerdocumento" name="tercerdocumento"/>
                     <button type="button" class="btn btn-danger btn-lg" data-toggle="modal"style="font-size:80%;width: 230px;background-color: gray;border-color: gray;"> Sin Certificado </button>
                    <?php }}?>
                    
                      <!-- ver certificado 3-->
                     
             
               </td>
               <td>
              
             
               <!-- ver certificado 3 Notaria -->
                   
                    <?php 
                    if (isset($r->docterceronotaria)){
                    if((substr($r->docterceronotaria,(strlen($r->docterceronotaria))-4)) == ".pdf"){ ?>
                       <input type="hidden" name="docterceronotaria" id="docterceronotaria" value="<?=$p->getdocterceronotaria()?>"/>
                    <a class=" btn btn-primary btn-lg"  data-toggle="modal" data-target="#myModaldocterceroeste<?=$r->idsolicitud?>"  style="font-size:80%;width: 230px;background-color: #009688;border-color: #009688; color: white; " data-toggle="tooltip" >Ver Certificado</a>

                    <!-- Modal -->
                                <div class="modal fade" id="myModaldocterceroeste<?=$r->idsolicitud?>" role="dialog">
                                  <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Matricula No :  <?=$r->terceramatricula?></h4>
                                      </div>
                                      <div class="modal-body">
                                        <iframe src="<?=$r->docterceronotaria?>" width="770" height="530" style="border: none;"></iframe>
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                      </div>
                                    </div>
                                  </div>
                                </div>


                   <?php } else { ?>                    
                   <input type="file" name="docterceronotaria" id="docterceronotaria" accept=".pdf" class="inputfile inputfile-5" data-multiple-caption="{count} files selected" style="opacity:0;font-size:100%;" value=""/>

                  <label for="docterceronotaria" style=" font-size:90%;" data-toggle="tooltip" ><span style=" width: 150px" ></span> <strong style=" font-size:100%;color: #fff;"> Seleccionar</strong></label>
                    <?php }}?>
                    
                      <!-- ver certificado 3 Notaria-->
               
                

               </td>
               <td>
                  <select style="width: 70px" class="form-control" name="checktercero"/>
                       <option value="No" <?=$p->getchecktercero()=="No" ? "selected": ""?> >No</option>
                       <option value="Si" <?=$p->getchecktercero()=="Si" ? "selected": ""?> >Si</option>
                   </select>
               </td>
               </tr>

               <!-- Fin Tercer inmueble-->

               <!-- Cuarto inmueble-->

               <tr align="center">
               <td style=" padding-right: 20px" >
               <input class="form-control" autocomplete="off" type="text" name="cuartamatricula" readonly="readonly" placeholder="No hay matricula" value="<?=$p->getcuartamatricula()?>"/>
               </td>
               

               <td style="width: 400px; padding-top: 10px"  >
                    <!-- ver certificado 4-->
                   
                    <?php 
                    if (isset($r->cuartodocumento)){
                    if((substr($r->cuartodocumento,(strlen($r->cuartodocumento))-4)) == ".pdf"){ ?>
                     <input type="hidden" id="cuartodocumento" name="cuartodocumento" />
                    <a class="btn btn-info btn-lg"  data-toggle="modal" data-target="#myModal4<?=$r->idsolicitud?>"  style="font-size:80%;width: 230px;background-color: #17A4B7;border-color: #17A4B7; color: white; " data-toggle="tooltip" >Ver Certificado</a>

                    <!-- Modal -->
                                <div class="modal fade" id="myModal4<?=$r->idsolicitud?>" role="dialog">
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
                    <input type="hidden" id="cuartodocumento" name="cuartodocumento" />
                     <button type="button" class="btn btn-danger btn-lg" data-toggle="modal"style="font-size:80%;width: 230px;background-color: gray;border-color: gray;"> Sin Certificado </button>
                    <?php }}?>
                    
                      <!-- ver certificado 4-->
                
                 
               </td>
             
            
               <td>

                <!-- ver certificado 4 Notaria -->
                   
                    <?php 
                    if (isset($r->doccuartonotaria)){
                    if((substr($r->doccuartonotaria,(strlen($r->doccuartonotaria))-4)) == ".pdf"){ ?>
                       <input type="hidden" name="doccuartonotaria" id="doccuartonotaria" value="<?=$p->getdoccuartonotaria()?>"/>
                    <a class=" btn btn-info btn-lg"  data-toggle="modal" data-target="#myModaldoccuartaeste<?=$r->idsolicitud?>"  style="font-size:80%;width: 230px;background-color: #009688;border-color: #009688; color: white; " data-toggle="tooltip" >Ver Certificado</a>

                    <!-- Modal -->
                                <div class="modal fade" id="myModaldoccuartaeste<?=$r->idsolicitud?>" role="dialog">
                                  <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Matricula No :  <?=$r->cuartamatricula?></h4>
                                      </div>
                                      <div class="modal-body">
                                        <iframe src="<?=$r->doccuartonotaria?>" width="770" height="530" style="border: none;"></iframe>
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                      </div>
                                    </div>
                                  </div>
                                </div>


                   <?php } else { ?>                    
                   <input type="file" name="doccuartonotaria" id="doccuartonotaria" accept=".pdf" class="inputfile inputfile-5" data-multiple-caption="{count} files selected" style="opacity:0;font-size:100%;" value=""/>

                  <label for="doccuartonotaria" style=" font-size:90%;" data-toggle="tooltip" ><span style=" width: 150px" ></span> <strong style=" font-size:100%;color: #fff;"> Seleccionar</strong></label>
                    <?php }}?>
                    
                      <!-- ver certificado 4 Notaria-->
               
               </td>
               <td>
                 <select style="width: 70px" class="form-control" name="checkcuarto"/>
                       <option value="No" <?=$p->getcheckcuarto()=="No" ? "selected": ""?> >No</option>
                       <option value="Si" <?=$p->getcheckcuarto()=="Si" ? "selected": ""?> >Si</option>
                   </select>
               </td>
               </tr>

               <!--Fin Cuarto inmueble-->

               <!-- Quinto inmueble-->

               <tr align="center">
               <td style=" padding-right: 20px" >
               <input class="form-control" autocomplete="off" type="text"  name="quintamatricula" placeholder="No hay matricula" readonly="readonly" value="<?=$p->getquintamatricula()?>"/>
               </td>
               <td style="width: 400px; padding-top: 10px"  >
                    <!-- ver certificado 5-->
                   
                    <?php 
                    if (isset($r->quintodocumento)){
                    if((substr($r->quintodocumento,(strlen($r->quintodocumento))-4)) == ".pdf"){ ?>
                     <input type="hidden" id="quintodocumento" name="quintodocumento" />
                    <a class="btn btn-info btn-lg"  data-toggle="modal" data-target="#myModal5<?=$r->idsolicitud?>"  style="font-size:80%;width: 230px;background-color: #17A4B7;border-color: #17A4B7; color: white; " data-toggle="tooltip" >Ver Certificado</a>

                    <!-- Modal -->
                                <div class="modal fade" id="myModal5<?=$r->idsolicitud?>" role="dialog">
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
                    <input type="hidden" id="quintodocumento" name="quintodocumento" />
                     <button type="button" class="btn btn-danger btn-lg" data-toggle="modal"style="font-size:80%;width: 230px;background-color: gray;border-color: gray;"> Sin Certificado </button>
                    <?php }}?>
                    
                      <!-- ver certificado 5-->
                 
               </td>
               <td>
                 <!-- ver certificado 5 Notaria -->
                   
                    <?php 
                    if (isset($r->docquintonotaria)){
                    if((substr($r->docquintonotaria,(strlen($r->docquintonotaria))-4)) == ".pdf"){ ?>
                       <input type="hidden" name="docquintonotaria" id="docquintonotaria" value="<?=$p->getdoccuartonotaria()?>"/>
                    <a class=" btn btn-info btn-lg"  data-toggle="modal" data-target="#myModaldocquintoeste<?=$r->idsolicitud?>"  style="font-size:80%;width: 230px;background-color: #009688;border-color: #009688; color: white; " data-toggle="tooltip" >Ver Certificado</a>

                    <!-- Modal -->
                                <div class="modal fade" id="myModaldocquintoeste<?=$r->idsolicitud?>" role="dialog">
                                  <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Matricula No :  <?=$r->quintamatricula?></h4>
                                      </div>
                                      <div class="modal-body">
                                        <iframe src="<?=$r->docquintonotaria?>" width="770" height="530" style="border: none;"></iframe>
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                      </div>
                                    </div>
                                  </div>
                                </div>


                   <?php } else { ?>                    
                   <input type="file" name="docquintonotaria" id="docquintonotaria" accept=".pdf" class="inputfile inputfile-5" data-multiple-caption="{count} files selected" style="opacity:0;font-size:100%;" value=""/>

                  <label for="docquintonotaria" style=" font-size:90%;" data-toggle="tooltip" ><span style=" width: 150px" ></span> <strong style=" font-size:100%;color: #fff;"> Seleccionar</strong></label>
                    <?php }}?>
                    
                      <!-- ver certificado 5 Notaria-->
               

               
               </td>
               
               <td>
                 <select style="width: 70px" class="form-control" name="checkquinto"/>
                       <option value="No" <?=$p->getcheckquinto()=="No" ? "selected": ""?> >No</option>
                       <option value="Si" <?=$p->getcheckquinto()=="Si" ? "selected": ""?> >Si</option>
                   </select>

               </td>
               </tr>
               </table>
               <!-- Quinto inmueble-->


               </div>
               <br>
               <!-- Fin Segundo inmueble-->

               <br>

               <div class="alert alert-info" align="center">
               <strong> Datos del Propietario ( Futuro vendedor )</strong>
               </div>
               <br>


               <div align="center">
               <table>
               <th style="width: 500px;">
               <label for="cedulapropietario" >No de Documento o Nit del propietario </label>
               </th>
               <th style="width: 500px;">
               <label for="estadocivilpropietario" >Estado Civil Propietario </label>
               </th>
               <tr>
                 <td style=" padding-right: 20px">
                 <input class="form-control" autocomplete="off" type="number" id="cedulapropietario" name="cedulapropietario" placeholder="Ingrese el numero de Documento o el Nit del propietario ( Futuro vendedor )"  readonly="readonly" value="<?=$p->getcedulapropietario()?>"/>
                 </td>
                 <td>
                   <select class="form-control" readonly="readonly"  name="estadocivilpropietario" required  />
                       <option value="">Seleccione el estado civil del propietario ( Futuro vendedor )</option>
                       <option value="No se sabe" <?=$p->getestadocivilpropietario()=="No se sabe" ? "selected": ""?> >No se sabe</option>
                       <option value="Entidad" <?=$p->getestadocivilpropietario()=="Entidad" ? "selected": ""?> >Entidad</option>
                       <option value="Casado con sociedad conyugal vigente" <?=$p->getestadocivilpropietario()=="Casado con sociedad conyugal vigente" ? "selected": ""?> >Casado con sociedad conyugal vigente</option>
                       <option value="Casado con sociedad conyugal disuelta y liquidada"  <?=$p->getestadocivilpropietario()=="Casado con sociedad conyugal disuelta y liquidada" ? "selected": ""?>>Casado con sociedad conyugal disuelta y liquidada</option>
                       <option value="Soltero sin unión marital de hecho" <?=$p->getestadocivilpropietario()=="Soltero sin unión marital de hecho" ? "selected": ""?>>Soltero sin unión marital de hecho</option>
                       <option value="Soltero con unión marital de hecho" <?=$p->getestadocivilpropietario()=="Soltero con unión marital de hecho" ? "selected": ""?>>Soltero con unión marital de hecho</option>
                   </select>
                 </td>
               </tr>
               </table>
               </div>
               <br>
               <br>


               <div class="alert alert-info" align="center">
               <strong> Datos del Locatario ( Futuro comprador )</strong>
               </div>
               <br>

               <div align="center">
               <table>
               <th style="width: 500px;">
               <label for="nombrelocatario" >Primer nombre del locatario / Nombre empresa </label>
               </th>
               <th style="width: 500px;">
               <label for="nombreotrolocatario" >Segundo nombre del locatario </label>
               </th>
               <tr>
               <td style=" padding-right: 20px">
               <input class="form-control" autocomplete="off" type="text" name="nombrelocatario" placeholder="No hay datos" readonly="readonly" value="<?=$p->getnombrelocatario()?>"/>
               </td>
               <td>
               <input class="form-control" autocomplete="off" type="text" name="nombreotrolocatario" placeholder="No hay datos" readonly="readonly" value="<?=$p->getnombreotrolocatario()?>"/>
               </td>
               </tr>
               </table>
               </div>
               <br>
               <div align="center">
               <table>
               <th style="width: 500px;">
               <label for="primerapellido" >Primer apellido del locatario </label>
               </th>
               <th style="width: 500px;">
               <label for="segundoapellido" >Segundo apellido del locatario </label>
               </th>
               <tr>
               <td style=" padding-right: 20px">
               <input class="form-control" autocomplete="off" type="text" name="primerapellido" placeholder="No hay datos" readonly="readonly" value="<?=$p->getprimerapellido()?>"/>
               </td>
               <td>
               <input class="form-control" autocomplete="off" type="text" name="segundoapellido" placeholder="No hay datos" readonly="readonly" value="<?=$p->getsegundoapellido()?>"/>
               </td>
               </tr>
               </table>
               </div>
               <br>
               <br>

               <div align="center">
               <table>
               <th style="width: 400px;">
               <label for="cedulalocatario" >Numero de Documento del Locatario </label>
               </th>
               <th style="width: 400px;">
                <label for="tipodocumentolocatario" >Tipo de documento Locatario</label>
                </th>
                <th style="width: 400px;">
                 <label for="numerosolicitud" >Correo Electrónico</label>
                </th>
               <tr>
               <td style=" padding-right: 20px">
               <input class="form-control" autocomplete="off" type="number" name="cedulalocatario" placeholder="No hay datos" readonly="readonly" value="<?=$p->getcedulalocatario()?>"/>
               </td>
               <td style=" padding-right: 20px">
                 <select class="form-control" style="height:5%" name="tipodocumentolocatario" readonly="readonly" />
                  <option value="">No hay datos</option>
                   <option value="Cédula de ciudadanía" <?=$p->gettipodocumentolocatario()=="Cédula de ciudadanía" ? "selected": ""?> >Cédula de ciudadanía</option>
                   <option value="Cédula de extranjería" <?=$p->gettipodocumentolocatario()=="Cédula de extranjería" ? "selected": ""?>>Cédula de extranjería</option>
                   <option value="Nit para personas jurídicas" <?=$p->gettipodocumentolocatario()=="Nit para personas jurídicas" ? "selected": ""?>>Nit para personas jurídicas</option>
                   <option value="Pasaporte" <?=$p->gettipodocumentolocatario()=="Pasaporte" ? "selected": ""?>>Pasaporte</option>
                 </select>
               </td>
               <td>
                 <input id="correo" class="form-control" autocomplete="off" type="email" name="numerosolicitud" placeholder="No hay datos" readonly="readonly" value="<?=$p->getnumerosolicitud()?>"/>
               </td>
               </tr>
               </table>
               </div>
               <br><br>
               <div class="alert alert-info">
               <strong> Liquidador</strong>
               </div>

               <table>
               <th style="width: 400px;">
                 <div align="center" >
                   <label for="" >Valor Leasing</label>
                 </div>
               </th>
               <th style="width: 400px;">
                 <div align="center" >
                   <label  >Valor Venta</label>
                 </div>
                </th>
                <th style="width: 400px;">
                  <div align="center" >
                    <label>Valor Hipoteca</label>
                  </div>
                </th>
               <tr>
               <td style=" padding-right: 20px">
                 <input class="form-control" require autocomplete="off" type="number" name="ValEscritura" id="ValEscritura" placeholder="No hay datos" readonly="readonly" value="<?=$p->getValEscritura()?>"/>
               </td>
               <td style=" padding-right: 20px">
                 <input class="form-control" autocomplete="off" type="number" id="ValVenta" name="ValVenta" placeholder="No hay datos" readonly="readonly" value="<?=$p->getValVenta()?>"/>
               </td>
               <td>
                 <input class="form-control" autocomplete="off" type="number" id="ValHipoteca" name="ValHipoteca" placeholder="No hay datos" readonly="readonly" value="<?=$p->getValHipoteca()?>"/>
               </td>
               </tr>
               </table>



<br>
               <div class="alert alert-info">
               <strong> Viabilidad</strong>
               </div><br>

                    <div align="center">
                    <table>
                    <th style="width: 1200px;">
                     <div align="center">
                       <label  for="estado" >Estado</label>
                     </div>
                    </th>

                    <tr>
                      <td style=" padding-right: 20px">
                         <select class="form-control" name="viabilidad"/>
                             <option value="">Seleccione el estado <option>
                             <option class="v" value="v" <?=$p->getviabilidad()=="v" ? "selected": ""?> >Viable</option>
                             <option class="s" value="s" <?=$p->getviabilidad()=="s" ? "selected": ""?> >Solucionar</option>
                             <option class="n" value="n" <?=$p->getviabilidad()=="n" ? "selected": ""?> >No Viable</option>
                         </select>
                      </td>
                    </tr>
                    </table>
                    </div>
                    <br><br>



               <div align="center">
               <table>
               <th style="width: 600px;">
                <div align="center">
                  <label for="observacion">Observaciones informador</label>
                </div>
               </th>
               <th style="width: 600px;">
                 <div align="center">
                   <label for="estadocivilpropietario" >Observaciones Notaria</label>
                 </div>
               </th>
               <tr>
                 <td style=" padding-right: 20px">
                    <textarea class="form-control" autocomplete="off" type="text"  name="observacion" readonly="readonly" rows="4" cols="50"><?=$p->getobservacion()?> </textarea>
                 </td>
                 <td>
                    <textarea class="form-control" autocomplete="off" type="text" id="observacionesnotaria"  name="observacionesnotaria" rows="4" cols="50"><?=$p->getobservacionesnotaria()?> </textarea>
                 </td>
               </tr>
               </table>
               </div>
               <br><br>


             
              
             
              
              


               <br>

               


               <div >
               <input class="form-control" autocomplete="off" type="hidden" placeholder="Ingrese el primer apellido del locatario ( Futuro comprador )" name="fk_idautorizacion" value=""/>
               </div>










                              <div>
                                <table>
                                  <th>
                                      <form method="POST" id="2">
                                        <button class="btn btn-primary"  type="submit" id="aceptar" name="aceptar" value="Aceptar"><i class="fa fa-check-square"></i> Guardar </button>
                                      </form>
                                  </th>
                                  <th style=" padding-left:5px; " >
                                      <form>
                                        <button  class="btn btn-secondary" name="cancelar" id="cancelar" value="cancelar"><i class="  fa fa-window-close"></i> Cancelar </button>
                                      </form>
                                  </tr>
                                </table>
                              </div>
                              </form>

                            </div>





            <!-- Fin Formulario-->





          </div>

        </div>


        <br><br><br><br><br><br><br>
  </main>


<?php endif;?>  <!-- Notaria-->















































<?php if($_SESSION['Rol']=="Gerente"):?><!-- Gerente-->




  </head>

  <body class="app sidebar-mini rtl" style="background-color:#FDFEFE;">

  <main class="app-content" style="zoom:100%;background-color:#FDFEFE;">
    <div class="app-title">
      <div>
        <h1><i class="colorp fa fa-clipboard"></i><?=$titulo?></h1>
        <p></p>
      </div>



      <ul class="app-breadcrumb breadcrumb side">

        <a href="index.php">
          <li class="breadcrumb-item"><i class="colorp fa fa-home fa-lg"></i></li>
        </a>

        <li></a></li>
      </ul>
    </div>
    <div align="right">
    <a style=" background-color:#7E7E7E;border-color:#7E7E7E " class="btn btn-primary btn-lg " href="?c=solicitud&a=registrarsolicitud">Nueva Solicitud</a>
     </div>


    <div class="content-wrapper" style="zoom:85%;padding-left: 0%;padding-right: 0%;">


      <div class="col-md-10" style="padding: 15px;">
        <!-- Progress Bar-->
        <br>
        <div class="progress">
          <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width:10%">
            10%
          </div>
        </div>
        <br>
        <!-- Fin Progress Bar-->
        <div class="card" style=" padding-bottom: 200px; border-color: white">

          <div class="card-body" id="fondo">





            <div align="center" class="content-wrapper">


              <!-- Formulario -->

              <div class="col-md-12">
                <form name="solicitud" class="form-horizontal" method="POST" enctype="multipart/form-data" action="?c=resolicitud&a=Guardar">

                  <div >

                    <input class="form-control" name="id" type="hidden" value="<?=$p->getidsolicitud()?>" >
                  </div>
              </div>

              <!-- Formulario respuesta notaria-->



              <div class="alert alert-info" align="center">
              <strong > Datos de la Solicitud</strong>
              </div>
              <br>

              <table>
              <th style="width: 400px;">
                <div align="center" >
                  <label for="" >Tipo de persona</label>
                </div>
              </th>
              <th style="width: 400px;">
                <div align="center" >
                  <label for="" >Tipo de la Solicitud</label>
                </div>
              </th>
               <th style="width: 400px;">
                 <div align="center" >
                   <label for="" >Fecha envio de la solicitud </label>
                 </div>
               </th>
              <tr>
                <td style=" padding-right: 20px">
                  <input class="form-control" autocomplete="off" style="text-align:center;" type="text" name="tipopersona" id="tipopersona" readonly="readonly" value="<?=$p->gettipopersona()?>"/>
                </td>
                <td style=" padding-right: 20px">
                  <input class="form-control" autocomplete="off" style="text-align:center;" type="text" name="tipoacto" id="tipoacto" readonly="readonly" value="<?=$p->gettipoacto()?>"/>
                </td> 
                <td>
                  <input class="form-control" autocomplete="off" style="text-align:center;" type="text" name="fecha" id="fecha" readonly="readonly" value="<?=$p->getfecha()?>"/>
                </td> 
              </tr>
              </table>
              <br>
              <table>
             
              <tr>
              <td style=" padding-right: 20px">
                <select  style="visibility:hidden;padding-top: 0px;" name="fk_idnotaria"  >
                  <?php foreach($this->modelo->ListarNotarias() as $r): ?>
                      <option  value="<?=$r->idnotaria?>" <?=$p->getfk_idnotaria()==$r->idnotaria ? "selected": ""?> ><?=$r->Nombresnotaria?> </option>
                  <?php endforeach;?>
                </select>
              </td>
              <td style=" padding-right: 20px">
                <select style="visibility:hidden;padding-top: 0px;" name="sucursal" id="sucursal" >
                    <?php foreach($this->modelo->Listarsucursalnotaria() as $r): ?>
                        <option value="<?=$r->idsucursal?>" <?=$p->getsucursal()==$r->idsucursal ? "selected": ""?> ><?=$r->nombre?> </option>
                    <?php endforeach;?>
                </select>
              </td>
              <td>
              <input autocomplete="off" style="text-align:center;" type="hidden" name="fechanotaria" id="fechanotaria" value="<?=$p->getfechanotaria()?>"/>              
               
              </td>
              </tr>
              </table>
              




               <div class="alert alert-info" align="center">
               <strong > Datos del inmueble</strong>
               </div>



                 <?php foreach($this->modelo->ListarDocumento($p->getidsolicitud()) as $r):?>
                            
                <?php endforeach;?>
                </tbody>



               <!-- Primer inmueble-->

               <div >
               <table style=" width: 90%;"   >
               <th style="width: 400px;" >
                <div align="center" >
                  <label for="matriculainmobiliaria"> No Matricula ( del inmueble )</label>
                </div>
               </th>

               <th style="width: 400px;" >
                 <div align="center" >
                   <label for="documentoinformador">Certificados Cargados por el informador</label>
                 </div>
               </th>

               <th style="width: 400px;" >
                 <div align="center" >
                   <label for="documentoinformador">Certificados Cargados por la Notaria</label>
                 </div>
               </th>

               <th>
                 <div align="center" >
                  
                 </div>
               </th>


               <tr align="center" >
               <td style=" padding-right: 20px">
               <input style="width: 100%" class="form-control"  readonly="readonly" autocomplete="off" type="text" minlength="6" maxlength="50" name="matriculainmobiliaria" value="<?=$p->getmatriculainmobiliaria()?>"/>
               </td>
               <td style="width: 400px; padding-top: 10px"  >
                    <!-- ver certificado 1-->
                   
                    <?php 
                    if (isset($r->documentoinformador)){
                    if((substr($r->documentoinformador,(strlen($r->documentoinformador))-4)) == ".pdf"){ ?>
                    
                    <a class="btn btn-info btn-lg"  data-toggle="modal" data-target="#myModal<?=$r->idsolicitud?>"  style="font-size:80%;width: 230px;background-color: #17A4B7;border-color: #17A4B7; color: white; " data-toggle="tooltip" >Ver Certificado</a>

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
                     <input type="hidden" id="documentoinformador" name="documentoinformador"/>
                     <button type="button" class="btn btn-danger btn-lg" data-toggle="modal"style="font-size:80%;width: 230px;background-color: gray;border-color: gray;"> Sin Certificado </button>
                    <?php }}?>
                    
                      <!-- ver certificado 1-->
                 
               </td>








               <td style="width: 400px; padding-top: 10px"  >

                <!-- ver certificado 1 Notaria -->
                   
                    <?php 
                    if (isset($r->docprimernotaria)){
                    if((substr($r->docprimernotaria,(strlen($r->docprimernotaria))-4)) == ".pdf"){ ?>
                       <input type="hidden" name="docprimernotaria" id="docprimernotaria" value="<?=$p->getdocumentonotaria()?>"/>
                    <a class=" btn btn-primary btn-lg"  data-toggle="modal" data-target="#myModaldocprimeroeste<?=$r->idsolicitud?>"  style="font-size:80%;width: 230px;background-color: #009688;border-color: #009688; color: white; " data-toggle="tooltip" >Ver Certificado</a>

                    <!-- Modal -->
                                <div class="modal fade" id="myModaldocprimeroeste<?=$r->idsolicitud?>" role="dialog">
                                  <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Matricula No :  <?=$r->matriculainmobiliaria?></h4>
                                      </div>
                                      <div class="modal-body">
                                        <iframe src="<?=$r->docprimernotaria?>" width="770" height="530" style="border: none;"></iframe>
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                      </div>
                                    </div>
                                  </div>
                                </div>


                   <?php } else { ?>                    
                    <input type="hidden" id="docprimernotaria" name="docprimernotaria"/>
                     <button type="button" class="btn btn-danger btn-lg" data-toggle="modal"style="font-size:80%;width: 230px;background-color: gray;border-color: gray;"> Sin Certificado </button>
                    <?php }}?>
                    
                      <!-- ver certificado 1 Notaria-->



                 
                 
               </td>

               <td>
                  <select style="visibility:hidden;padding-top: 0px;" class="form-control" name="checkprimero"/>
                       <option value="No" <?=$p->getcheckprimero()=="No" ? "selected": ""?> >No</option>
                       <option value="Si" <?=$p->getcheckprimero()=="Si" ? "selected": ""?> >Si</option>
                   </select>
               </td>
               </tr>
               <!-- Fin Primer inmueble-->





               <!-- Segundo inmueble-->
               <tr align="center" >
               <td style=" width: 400px;padding-right: 20px" >
               <input class="form-control" autocomplete="off" type="text"  name="estado" readonly="readonly" placeholder="No hay matricula" value="<?=$p->getestado()?>"/>
               </td>
               <td style="width: 400px; padding-top: 10px"  >
                    <!-- ver certificado 2-->
                   
                    <?php 
                    if (isset($r->documentonotaria)){
                    if((substr($r->documentonotaria,(strlen($r->documentonotaria))-4)) == ".pdf"){ ?>
                       
                    <a class="btn btn-info btn-lg"  data-toggle="modal" data-target="#myModal2<?=$r->idsolicitud?>"  style="font-size:80%;width: 230px;background-color: #17A4B7;border-color: #17A4B7; color: white; " data-toggle="tooltip" >Ver Certificado</a>

                    <!-- Modal -->
                                <div class="modal fade" id="myModal2<?=$r->idsolicitud?>" role="dialog">
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
                     <input type="hidden" id="documentonotaria" name="documentonotaria"/>
                     <button type="button" class="btn btn-danger btn-lg" data-toggle="modal"style="font-size:80%;width: 230px;background-color: gray;border-color: gray;"> Sin Certificado </button>
                    <?php }}?>
                    
                      <!-- ver certificado 2-->

               </td>

               <td>
                <!-- ver certificado 2 Notaria -->
                   
                    <?php 
                    if (isset($r->docsegundonotaria)){
                    if((substr($r->docsegundonotaria,(strlen($r->docsegundonotaria))-4)) == ".pdf"){ ?>
                       <input type="hidden" name="docsegundonotaria" id="docsegundonotaria" value="<?=$p->getdocsegundonotaria()?>"/>
                    <a class=" btn btn-primary btn-lg"  data-toggle="modal" data-target="#myModaldocsegundoeste<?=$r->idsolicitud?>"  style="font-size:80%;width: 230px;background-color: #009688;border-color: #009688; color: white; " data-toggle="tooltip" >Ver Certificado</a>

                    <!-- Modal -->
                                <div class="modal fade" id="myModaldocsegundoeste<?=$r->idsolicitud?>" role="dialog">
                                  <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Matricula No :  <?=$r->estado?></h4>
                                      </div>
                                      <div class="modal-body">
                                        <iframe src="<?=$r->docsegundonotaria?>" width="770" height="530" style="border: none;"></iframe>
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                      </div>
                                    </div>
                                  </div>
                                </div>


                   <?php } else { ?>                    
                   <input type="hidden" id="docsegundonotaria" name="docsegundonotaria"/>
                     <button type="button" class="btn btn-danger btn-lg" data-toggle="modal"style="font-size:80%;width: 230px;background-color: gray;border-color: gray;"> Sin Certificado </button>
                    <?php }}?>
                    
                      <!-- ver certificado 2 Notaria-->

                
               </td>
               <td>
                  <select style="visibility:hidden;padding-top: 0px;" class="form-control" name="checksegundo"/>
                       <option value="No" <?=$p->getchecksegundo()=="No" ? "selected": ""?> >No</option>
                       <option value="Si" <?=$p->getchecksegundo()=="Si" ? "selected": ""?> >Si</option>
                   </select>
               </td>
               </tr>

               <!-- Fin Segundo inmueble-->

               <!-- Tercer inmueble-->

               <tr align="center">
               <td style=" padding-right: 20px" >
               <input class="form-control" autocomplete="off" type="text"  name="terceramatricula" readonly="readonly" placeholder="No hay matricula" value="<?=$p->getterceramatricula()?>"/>
               </td>
               

               <td style="width: 400px; padding-top: 10px"  >
                    <!-- ver certificado 3-->
                   
                    <?php 
                    if (isset($r->tercerdocumento)){
                    if((substr($r->tercerdocumento,(strlen($r->tercerdocumento))-4)) == ".pdf"){ ?>
                    
                    <a class="btn btn-info btn-lg"  data-toggle="modal" data-target="#myModal3<?=$r->idsolicitud?>"  style="font-size:80%;width: 230px;background-color: #17A4B7;border-color: #17A4B7; color: white; " data-toggle="tooltip" >Ver Certificado</a>

                    <!-- Modal -->
                                <div class="modal fade" id="myModal3<?=$r->idsolicitud?>" role="dialog">
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
                    <input type="hidden" id="tercerdocumento" name="tercerdocumento"/>
                     <button type="button" class="btn btn-danger btn-lg" data-toggle="modal"style="font-size:80%;width: 230px;background-color: gray;border-color: gray;"> Sin Certificado </button>
                    <?php }}?>
                    
                      <!-- ver certificado 3-->
                     
             
               </td>
               <td>
              
             
               <!-- ver certificado 3 Notaria -->
                   
                    <?php 
                    if (isset($r->docterceronotaria)){
                    if((substr($r->docterceronotaria,(strlen($r->docterceronotaria))-4)) == ".pdf"){ ?>
                       <input type="hidden" name="docterceronotaria" id="docterceronotaria" value="<?=$p->getdocterceronotaria()?>"/>
                    <a class=" btn btn-primary btn-lg"  data-toggle="modal" data-target="#myModaldocterceroeste<?=$r->idsolicitud?>"  style="font-size:80%;width: 230px;background-color: #009688;border-color: #009688; color: white; " data-toggle="tooltip" >Ver Certificado</a>

                    <!-- Modal -->
                                <div class="modal fade" id="myModaldocterceroeste<?=$r->idsolicitud?>" role="dialog">
                                  <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Matricula No :  <?=$r->terceramatricula?></h4>
                                      </div>
                                      <div class="modal-body">
                                        <iframe src="<?=$r->docterceronotaria?>" width="770" height="530" style="border: none;"></iframe>
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                      </div>
                                    </div>
                                  </div>
                                </div>


                   <?php } else { ?>                    
                   <input type="hidden" id="docterceronotaria" name="docterceronotaria"/>
                     <button type="button" class="btn btn-danger btn-lg" data-toggle="modal"style="font-size:80%;width: 230px;background-color: gray;border-color: gray;"> Sin Certificado </button>
                    <?php }}?>
                    
                      <!-- ver certificado 3 Notaria-->
               
                

               </td>
               <td>
                  <select style="visibility:hidden;padding-top: 0px;" class="form-control" name="checktercero"/>
                       <option value="No" <?=$p->getchecktercero()=="No" ? "selected": ""?> >No</option>
                       <option value="Si" <?=$p->getchecktercero()=="Si" ? "selected": ""?> >Si</option>
                   </select>
               </td>
               </tr>

               <!-- Fin Tercer inmueble-->

               <!-- Cuarto inmueble-->

               <tr align="center">
               <td style=" padding-right: 20px" >
               <input class="form-control" autocomplete="off" type="text" name="cuartamatricula" readonly="readonly" placeholder="No hay matricula" value="<?=$p->getcuartamatricula()?>"/>
               </td>
               

               <td style="width: 400px; padding-top: 10px"  >
                    <!-- ver certificado 4-->
                   
                    <?php 
                    if (isset($r->cuartodocumento)){
                    if((substr($r->cuartodocumento,(strlen($r->cuartodocumento))-4)) == ".pdf"){ ?>
                     
                    <a class="btn btn-info btn-lg"  data-toggle="modal" data-target="#myModal4<?=$r->idsolicitud?>"  style="font-size:80%;width: 230px;background-color: #17A4B7;border-color: #17A4B7; color: white; " data-toggle="tooltip" >Ver Certificado</a>

                    <!-- Modal -->
                                <div class="modal fade" id="myModal4<?=$r->idsolicitud?>" role="dialog">
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
                    <input type="hidden" id="cuartodocumento" name="cuartodocumento" />
                     <button type="button" class="btn btn-danger btn-lg" data-toggle="modal"style="font-size:80%;width: 230px;background-color: gray;border-color: gray;"> Sin Certificado </button>
                    <?php }}?>
                    
                      <!-- ver certificado 4-->
                
                 
               </td>
             
            
               <td>

                <!-- ver certificado 4 Notaria -->
                   
                    <?php 
                    if (isset($r->doccuartonotaria)){
                    if((substr($r->doccuartonotaria,(strlen($r->doccuartonotaria))-4)) == ".pdf"){ ?>
                       <input type="hidden" name="doccuartonotaria" id="doccuartonotaria" value="<?=$p->getdoccuartonotaria()?>"/>
                    <a class=" btn btn-primary btn-lg"  data-toggle="modal" data-target="#myModaldoccuartaeste<?=$r->idsolicitud?>"  style="font-size:80%;width: 230px;background-color: #009688;border-color: #009688; color: white; " data-toggle="tooltip" >Ver Certificado</a>

                    <!-- Modal -->
                                <div class="modal fade" id="myModaldoccuartaeste<?=$r->idsolicitud?>" role="dialog">
                                  <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Matricula No :  <?=$r->cuartamatricula?></h4>
                                      </div>
                                      <div class="modal-body">
                                        <iframe src="<?=$r->doccuartonotaria?>" width="770" height="530" style="border: none;"></iframe>
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                      </div>
                                    </div>
                                  </div>
                                </div>


                   <?php } else { ?>                    
                  <input type="hidden" id="doccuartonotaria" name="doccuartonotaria"/>
                     <button type="button" class="btn btn-danger btn-lg" data-toggle="modal"style="font-size:80%;width: 230px;background-color: gray;border-color: gray;"> Sin Certificado </button>
                    <?php }}?>
                    
                      <!-- ver certificado 4 Notaria-->
               
               </td>
               <td>
                 <select style="visibility:hidden;padding-top: 0px;" class="form-control" name="checkcuarto"/>
                       <option value="No" <?=$p->getcheckcuarto()=="No" ? "selected": ""?> >No</option>
                       <option value="Si" <?=$p->getcheckcuarto()=="Si" ? "selected": ""?> >Si</option>
                   </select>
               </td>
               </tr>

               <!--Fin Cuarto inmueble-->

               <!-- Quinto inmueble-->

               <tr align="center">
               <td style=" padding-right: 20px" >
               <input class="form-control" autocomplete="off" type="text"  name="quintamatricula" placeholder="No hay matricula" readonly="readonly" value="<?=$p->getquintamatricula()?>"/>
               </td>
               <td style="width: 400px; padding-top: 10px"  >
                    <!-- ver certificado 5-->
                   
                    <?php 
                    if (isset($r->quintodocumento)){
                    if((substr($r->quintodocumento,(strlen($r->quintodocumento))-4)) == ".pdf"){ ?>
                    
                    <a class="btn btn-info btn-lg"  data-toggle="modal" data-target="#myModal5<?=$r->idsolicitud?>"  style="font-size:80%;width: 230px;background-color: #17A4B7;border-color: #17A4B7; color: white; " data-toggle="tooltip" >Ver Certificado</a>

                    <!-- Modal -->
                                <div class="modal fade" id="myModal5<?=$r->idsolicitud?>" role="dialog">
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
                    <input type="hidden" id="quintodocumento" name="quintodocumento" />
                     <button type="button" class="btn btn-danger btn-lg" data-toggle="modal"style="font-size:80%;width: 230px;background-color: gray;border-color: gray;"> Sin Certificado </button>
                    <?php }}?>
                    
                      <!-- ver certificado 5-->
                 
               </td>
               <td>
                 <!-- ver certificado 5 Notaria -->
                   
                    <?php 
                    if (isset($r->docquintonotaria)){
                    if((substr($r->docquintonotaria,(strlen($r->docquintonotaria))-4)) == ".pdf"){ ?>
                       <input type="hidden" name="docquintonotaria" id="docquintonotaria" value="<?=$p->getdoccuartonotaria()?>"/>
                    <a class=" btn btn-primary btn-lg"  data-toggle="modal" data-target="#myModaldocquintoeste<?=$r->idsolicitud?>"  style="font-size:80%;width: 230px;background-color: #009688;border-color: #009688; color: white; " data-toggle="tooltip" >Ver Certificado</a>

                    <!-- Modal -->
                                <div class="modal fade" id="myModaldocquintoeste<?=$r->idsolicitud?>" role="dialog">
                                  <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Matricula No :  <?=$r->quintamatricula?></h4>
                                      </div>
                                      <div class="modal-body">
                                        <iframe src="<?=$r->docquintonotaria?>" width="770" height="530" style="border: none;"></iframe>
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                      </div>
                                    </div>
                                  </div>
                                </div>


                   <?php } else { ?>                    
                  <input type="hidden" id="docquintonotaria" name="docquintonotaria"/>
                     <button type="button" class="btn btn-danger btn-lg" data-toggle="modal"style="font-size:80%;width: 230px;background-color: gray;border-color: gray;"> Sin Certificado </button>
                    <?php }}?>
                    
                      <!-- ver certificado 5 Notaria-->
               

               
               </td>
               
               <td>
                 <select style="visibility:hidden;padding-top: 0px;" class="form-control" name="checkquinto"/>
                       <option value="No" <?=$p->getcheckquinto()=="No" ? "selected": ""?> >No</option>
                       <option value="Si" <?=$p->getcheckquinto()=="Si" ? "selected": ""?> >Si</option>
                   </select>

               </td>
               </tr>
               </table>
               <!-- Quinto inmueble-->


               </div>
               <br>
               <!-- Fin Segundo inmueble-->

               <br>

               <div class="alert alert-info" align="center">
               <strong> Datos del Propietario ( Futuro vendedor )</strong>
               </div>
               <br>


               <div align="center">
               <table>
               <th style="width: 500px;">
               <label for="cedulapropietario" >No de Documento o Nit del propietario </label>
               </th>
               <th style="width: 500px;">
               <label for="estadocivilpropietario" >Estado Civil Propietario </label>
               </th>
               <tr>
                 <td style=" padding-right: 20px">
                 <input class="form-control" autocomplete="off" type="number" id="cedulapropietario" name="cedulapropietario" placeholder="Ingrese el numero de Documento o el Nit del propietario ( Futuro vendedor )"  readonly="readonly" value="<?=$p->getcedulapropietario()?>"/>
                 </td>
                 <td>
                   <select class="form-control" readonly="readonly"  name="estadocivilpropietario" required  />
                       <option value="">Seleccione el estado civil del propietario ( Futuro vendedor )</option>
                       <option value="No se sabe" <?=$p->getestadocivilpropietario()=="No se sabe" ? "selected": ""?> >No se sabe</option>
                       <option value="Entidad" <?=$p->getestadocivilpropietario()=="Entidad" ? "selected": ""?> >Entidad</option>
                       <option value="Casado con sociedad conyugal vigente" <?=$p->getestadocivilpropietario()=="Casado con sociedad conyugal vigente" ? "selected": ""?> >Casado con sociedad conyugal vigente</option>
                       <option value="Casado con sociedad conyugal disuelta y liquidada"  <?=$p->getestadocivilpropietario()=="Casado con sociedad conyugal disuelta y liquidada" ? "selected": ""?>>Casado con sociedad conyugal disuelta y liquidada</option>
                       <option value="Soltero sin unión marital de hecho" <?=$p->getestadocivilpropietario()=="Soltero sin unión marital de hecho" ? "selected": ""?>>Soltero sin unión marital de hecho</option>
                       <option value="Soltero con unión marital de hecho" <?=$p->getestadocivilpropietario()=="Soltero con unión marital de hecho" ? "selected": ""?>>Soltero con unión marital de hecho</option>
                   </select>
                 </td>
               </tr>
               </table>
               </div>
               <br>
               <br>


               <div class="alert alert-info" align="center">
               <strong> Datos del Locatario ( Futuro comprador )</strong>
               </div>
               <br>

               <div align="center">
               <table>
               <th style="width: 500px;">
               <label for="nombrelocatario" >Primer nombre del locatario / Nombre empresa </label>
               </th>
               <th style="width: 500px;">
               <label for="nombreotrolocatario" >Segundo nombre del locatario </label>
               </th>
               <tr>
               <td style=" padding-right: 20px">
               <input class="form-control" autocomplete="off" type="text" name="nombrelocatario" placeholder="No hay datos" readonly="readonly" value="<?=$p->getnombrelocatario()?>"/>
               </td>
               <td>
               <input class="form-control" autocomplete="off" type="text" name="nombreotrolocatario" placeholder="No hay datos" readonly="readonly" value="<?=$p->getnombreotrolocatario()?>"/>
               </td>
               </tr>
               </table>
               </div>
               <br>
               <div align="center">
               <table>
               <th style="width: 500px;">
               <label for="primerapellido" >Primer apellido del locatario </label>
               </th>
               <th style="width: 500px;">
               <label for="segundoapellido" >Segundo apellido del locatario </label>
               </th>
               <tr>
               <td style=" padding-right: 20px">
               <input class="form-control" autocomplete="off" type="text" name="primerapellido" placeholder="No hay datos" readonly="readonly" value="<?=$p->getprimerapellido()?>"/>
               </td>
               <td>
               <input class="form-control" autocomplete="off" type="text" name="segundoapellido" placeholder="No hay datos" readonly="readonly" value="<?=$p->getsegundoapellido()?>"/>
               </td>
               </tr>
               </table>
               </div>
               <br>
               <br>

               <div align="center">
               <table>
               <th style="width: 400px;">
               <label for="cedulalocatario" >Numero de Documento del Locatario </label>
               </th>
               <th style="width: 400px;">
                <label for="tipodocumentolocatario" >Tipo de documento Locatario</label>
                </th>
                <th style="width: 400px;">
                 <label for="numerosolicitud" >Correo Electrónico</label>
                </th>
               <tr>
               <td style=" padding-right: 20px">
               <input class="form-control" autocomplete="off" type="number" name="cedulalocatario" placeholder="No hay datos" readonly="readonly" value="<?=$p->getcedulalocatario()?>"/>
               </td>
               <td style=" padding-right: 20px">
                 <select class="form-control" style="height:5%" name="tipodocumentolocatario" readonly="readonly" />
                  <option value="">No hay datos</option>
                   <option value="Cédula de ciudadanía" <?=$p->gettipodocumentolocatario()=="Cédula de ciudadanía" ? "selected": ""?> >Cédula de ciudadanía</option>
                   <option value="Cédula de extranjería" <?=$p->gettipodocumentolocatario()=="Cédula de extranjería" ? "selected": ""?>>Cédula de extranjería</option>
                   <option value="Nit para personas jurídicas" <?=$p->gettipodocumentolocatario()=="Nit para personas jurídicas" ? "selected": ""?>>Nit para personas jurídicas</option>
                   <option value="Pasaporte" <?=$p->gettipodocumentolocatario()=="Pasaporte" ? "selected": ""?>>Pasaporte</option>
                 </select>
               </td>
               <td>
                 <input id="correo" class="form-control" autocomplete="off" type="email" name="numerosolicitud" placeholder="No hay datos" readonly="readonly" value="<?=$p->getnumerosolicitud()?>"/>
               </td>
               </tr>
               </table>
               </div>
               <br><br>
               <div class="alert alert-info">
               <strong> Liquidador</strong>
               </div>

               <table>
               <th style="width: 400px;">
                 <div align="center" >
                   <label for="" >Valor Leasing</label>
                 </div>
               </th>
               <th style="width: 400px;">
                 <div align="center" >
                   <label  >Valor Venta</label>
                 </div>
                </th>
                <th style="width: 400px;">
                  <div align="center" >
                    <label>Valor Hipoteca</label>
                  </div>
                </th>
               <tr>
               <td style=" padding-right: 20px">
                 <input class="form-control" require autocomplete="off" type="number" name="ValEscritura" id="ValEscritura" placeholder="No hay datos" readonly="readonly" value="<?=$p->getValEscritura()?>"/>
               </td>
               <td style=" padding-right: 20px">
                 <input class="form-control" autocomplete="off" type="number" id="ValVenta" name="ValVenta" placeholder="No hay datos" readonly="readonly" value="<?=$p->getValVenta()?>"/>
               </td>
               <td>
                 <input class="form-control" autocomplete="off" type="number" id="ValHipoteca" name="ValHipoteca" placeholder="No hay datos" readonly="readonly" value="<?=$p->getValHipoteca()?>"/>
               </td>
               </tr>
               </table>



<br>


               <div class="alert alert-info">
               <strong> Viabilidad</strong>
               </div><br>

                    <div align="center">
                    <table>
                    <th style="width: 1200px;">
                     
                    </th>

                    <tr>

                    
             
              
              
             
             
                      <td align="center" >
                                      <?php
                                   if((substr($r->viabilidad,(strlen($r->viabilidad))-4)) == "v"){ ?>

                                    <div style="height: 120px; width: 40%" class="card mb-3 text-white bg-success">
                                      <div  class="card-body">
                                        <blockquote style="height: 80px" class="card-blockquote">
                                          <h2>Viable</h2>
                                        </blockquote>
                                      </div>
                                    </div>           
                                    
                                    <?php } else if((substr($r->viabilidad,(strlen($r->viabilidad))-4)) == "s"){ ?>

                                      <div style="height: 120px; width: 40%" class="card mb-3 text-white bg-warning">
                                        <div class="card-body">
                                          <blockquote style="height: 80px" class="card-blockquote">
                                            <h2>Solucionar</h2>
                                          </blockquote>
                                        </div>
                                      </div>

                                    <?php } else if((substr($r->viabilidad,(strlen($r->viabilidad))-4)) == "n"){ ?>

                                        <div style="height: 120px; width: 40%" class="card mb-3 text-white bg-danger">
                                          <div class="card-body">
                                            <blockquote style="height: 80px" class="card-blockquote">
                                              <h2>No Viable</h2>
                                            </blockquote>
                                          </div>
                                        </div>

                                     <?php } else { ?>

                                                <div style="height: 120px; width: 40%" class="card mb-3 text-white bg-dark">
                                                  <div class="card-body">
                                                    <blockquote style="height: 80px" class="card-blockquote">
                                                      <h2>En Proceso</h2>
                                                    </blockquote>
                                                  </div>
                                                </div>


                                                <?php } ?>
                          </td>
                    </tr>
                    </table>
                    </div>
                    <br><br>



               <div align="center">
               <table>
               <th style="width: 600px;">
                <div align="center">
                  <label for="observacion">Observaciones informador</label>
                </div>
               </th>
               <th style="width: 600px;">
                 <div align="center">
                   <label for="estadocivilpropietario" >Observaciones Notaria</label>
                 </div>
               </th>
               <tr>
                 <td style=" padding-right: 20px">
                    <textarea class="form-control" autocomplete="off" type="text"  name="observacion" readonly="readonly" rows="4" cols="50"><?=$p->getobservacion()?> </textarea>
                 </td>
                 <td>
                    <textarea class="form-control" autocomplete="off" type="text" id="observacionesnotaria" readonly="readonly" name="observacionesnotaria" rows="4" cols="50"><?=$p->getobservacionesnotaria()?> </textarea>
                 </td>
               </tr>
               </table>
               </div>
               <br><br>


             
              
             
              
              


               <br>

               


               <div >
               <input class="form-control" autocomplete="off" type="hidden" placeholder="Ingrese el primer apellido del locatario ( Futuro comprador )" name="fk_idautorizacion" value=""/>
               </div>









                               <input class="btn btn-info btn-lg " type="button" onclick="location.href='?c=resolicitud';" value="Mis Solicitudes" />
                              </form>

                            </div>





            <!-- Fin Formulario-->





          </div>

        </div>


        <br><br><br><br><br><br><br>
  </main>


<?php endif;?>  <!-- Gerente-->







































<?php if($_SESSION['Rol']=="Supervisor"):?><!-- Supervisor-->




  </head>

  <body class="app sidebar-mini rtl" style="background-color:#FDFEFE;">

  <main class="app-content" style="zoom:100%;background-color:#FDFEFE;">
    <div class="app-title">
      <div>
        <h1><i class="colorp fa fa-clipboard"></i><?=$titulo?></h1>
        <p></p>
      </div>



      <ul class="app-breadcrumb breadcrumb side">

        <a href="index.php">
          <li class="breadcrumb-item"><i class="colorp fa fa-home fa-lg"></i></li>
        </a>

        <li></a></li>
      </ul>
    </div>
   


    <div class="content-wrapper" style="zoom:85%;padding-left: 0%;padding-right: 0%;">


      <div class="col-md-10" style="padding: 15px;">
        <!-- Progress Bar-->
        <br>
        <div class="progress">
          <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width:10%">
            10%
          </div>
        </div>
        <br>
        <!-- Fin Progress Bar-->
        <div class="card" style=" padding-bottom: 200px; border-color: white">

          <div class="card-body" id="fondo">





            <div align="center" class="content-wrapper">


              <!-- Formulario -->

              <div class="col-md-12">
                <form name="solicitud" class="form-horizontal" method="POST" enctype="multipart/form-data" action="?c=resolicitud&a=Guardar">

                  <div >

                    <input class="form-control" name="id" type="hidden" value="<?=$p->getidsolicitud()?>" >
                  </div>
              </div>

              <!-- Formulario respuesta notaria-->



              <div class="alert alert-info" align="center">
              <strong > Datos de la Solicitud</strong>
              </div>
              <br>

              <table>
              <th style="width: 400px;">
                <div align="center" >
                  <label for="" >Tipo de persona</label>
                </div>
              </th>
              <th style="width: 400px;">
                <div align="center" >
                  <label for="" >Tipo de la Solicitud</label>
                </div>
              </th>
               <th style="width: 400px;">
                 <div align="center" >
                   <label for="" >Fecha envio de la solicitud </label>
                 </div>
               </th>
              <tr>
                <td style=" padding-right: 20px">
                  <input class="form-control" autocomplete="off" style="text-align:center;" type="text" name="tipopersona" id="tipopersona" readonly="readonly" value="<?=$p->gettipopersona()?>"/>
                </td>
                <td style=" padding-right: 20px">
                  <input class="form-control" autocomplete="off" style="text-align:center;" type="text" name="tipoacto" id="tipoacto" readonly="readonly" value="<?=$p->gettipoacto()?>"/>
                </td> 
                <td>
                  <input class="form-control" autocomplete="off" style="text-align:center;" type="text" name="fecha" id="fecha" readonly="readonly" value="<?=$p->getfecha()?>"/>
                </td> 
              </tr>
              </table>
              <br>
              <table>
             
              <tr>
              <td style=" padding-right: 20px">
                <select  style="visibility:hidden;padding-top: 0px;" name="fk_idnotaria"  >
                  <?php foreach($this->modelo->ListarNotarias() as $r): ?>
                      <option  value="<?=$r->idnotaria?>" <?=$p->getfk_idnotaria()==$r->idnotaria ? "selected": ""?> ><?=$r->Nombresnotaria?> </option>
                  <?php endforeach;?>
                </select>
              </td>
              <td style=" padding-right: 20px">
                <select style="visibility:hidden;padding-top: 0px;" name="sucursal" id="sucursal" >
                    <?php foreach($this->modelo->Listarsucursalnotaria() as $r): ?>
                        <option value="<?=$r->idsucursal?>" <?=$p->getsucursal()==$r->idsucursal ? "selected": ""?> ><?=$r->nombre?> </option>
                    <?php endforeach;?>
                </select>
              </td>
              <td>
              <input autocomplete="off" style="text-align:center;" type="hidden" name="fechanotaria" id="fechanotaria" value="<?=$p->getfechanotaria()?>"/>              
               
              </td>
              </tr>
              </table>
              




               <div class="alert alert-info" align="center">
               <strong > Datos del inmueble</strong>
               </div>



                 <?php foreach($this->modelo->ListarDocumento($p->getidsolicitud()) as $r):?>
                            
                <?php endforeach;?>
                </tbody>



               <!-- Primer inmueble-->

               <div >
               <table style=" width: 90%;"   >
               <th style="width: 400px;" >
                <div align="center" >
                  <label for="matriculainmobiliaria"> No Matricula ( del inmueble )</label>
                </div>
               </th>

               <th style="width: 400px;" >
                 <div align="center" >
                   <label for="documentoinformador">Certificados Cargados por el informador</label>
                 </div>
               </th>

               <th style="width: 400px;" >
                 <div align="center" >
                   <label for="documentoinformador">Certificados Cargados por la Notaria</label>
                 </div>
               </th>

               <th>
                 <div align="center" >
                  
                 </div>
               </th>


               <tr align="center" >
               <td style=" padding-right: 20px">
               <input style="width: 100%" class="form-control"  readonly="readonly" autocomplete="off" type="text" minlength="6" maxlength="50" name="matriculainmobiliaria" value="<?=$p->getmatriculainmobiliaria()?>"/>
               </td>
               <td style="width: 400px; padding-top: 10px"  >
                    <!-- ver certificado 1-->
                   
                    <?php 
                    if (isset($r->documentoinformador)){
                    if((substr($r->documentoinformador,(strlen($r->documentoinformador))-4)) == ".pdf"){ ?>
                    
                    <a class="btn btn-info btn-lg"  data-toggle="modal" data-target="#myModal<?=$r->idsolicitud?>"  style="font-size:80%;width: 230px;background-color: #17A4B7;border-color: #17A4B7; color: white; " data-toggle="tooltip" >Ver Certificado</a>

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
                     <input type="hidden" id="documentoinformador" name="documentoinformador"/>
                     <button type="button" class="btn btn-danger btn-lg" data-toggle="modal"style="font-size:80%;width: 230px;background-color: gray;border-color: gray;"> Sin Certificado </button>
                    <?php }}?>
                    
                      <!-- ver certificado 1-->
                 
               </td>








               <td style="width: 400px; padding-top: 10px"  >

                <!-- ver certificado 1 Notaria -->
                   
                    <?php 
                    if (isset($r->docprimernotaria)){
                    if((substr($r->docprimernotaria,(strlen($r->docprimernotaria))-4)) == ".pdf"){ ?>
                       <input type="hidden" name="docprimernotaria" id="docprimernotaria" value="<?=$p->getdocumentonotaria()?>"/>
                    <a class=" btn btn-primary btn-lg"  data-toggle="modal" data-target="#myModaldocprimeroeste<?=$r->idsolicitud?>"  style="font-size:80%;width: 230px;background-color: #009688;border-color: #009688; color: white; " data-toggle="tooltip" >Ver Certificado</a>

                    <!-- Modal -->
                                <div class="modal fade" id="myModaldocprimeroeste<?=$r->idsolicitud?>" role="dialog">
                                  <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Matricula No :  <?=$r->matriculainmobiliaria?></h4>
                                      </div>
                                      <div class="modal-body">
                                        <iframe src="<?=$r->docprimernotaria?>" width="770" height="530" style="border: none;"></iframe>
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                      </div>
                                    </div>
                                  </div>
                                </div>


                   <?php } else { ?>                    
                    <input type="hidden" id="docprimernotaria" name="docprimernotaria"/>
                     <button type="button" class="btn btn-danger btn-lg" data-toggle="modal"style="font-size:80%;width: 230px;background-color: gray;border-color: gray;"> Sin Certificado </button>
                    <?php }}?>
                    
                      <!-- ver certificado 1 Notaria-->



                 
                 
               </td>

               <td>
                  <select style="visibility:hidden;padding-top: 0px;" class="form-control" name="checkprimero"/>
                       <option value="No" <?=$p->getcheckprimero()=="No" ? "selected": ""?> >No</option>
                       <option value="Si" <?=$p->getcheckprimero()=="Si" ? "selected": ""?> >Si</option>
                   </select>
               </td>
               </tr>
               <!-- Fin Primer inmueble-->





               <!-- Segundo inmueble-->
               <tr align="center" >
               <td style=" width: 400px;padding-right: 20px" >
               <input class="form-control" autocomplete="off" type="text"  name="estado" readonly="readonly" placeholder="No hay matricula" value="<?=$p->getestado()?>"/>
               </td>
               <td style="width: 400px; padding-top: 10px"  >
                    <!-- ver certificado 2-->
                   
                    <?php 
                    if (isset($r->documentonotaria)){
                    if((substr($r->documentonotaria,(strlen($r->documentonotaria))-4)) == ".pdf"){ ?>
                       
                    <a class="btn btn-info btn-lg"  data-toggle="modal" data-target="#myModal2<?=$r->idsolicitud?>"  style="font-size:80%;width: 230px;background-color: #17A4B7;border-color: #17A4B7; color: white; " data-toggle="tooltip" >Ver Certificado</a>

                    <!-- Modal -->
                                <div class="modal fade" id="myModal2<?=$r->idsolicitud?>" role="dialog">
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
                     <input type="hidden" id="documentonotaria" name="documentonotaria"/>
                     <button type="button" class="btn btn-danger btn-lg" data-toggle="modal"style="font-size:80%;width: 230px;background-color: gray;border-color: gray;"> Sin Certificado </button>
                    <?php }}?>
                    
                      <!-- ver certificado 2-->

               </td>

               <td>
                <!-- ver certificado 2 Notaria -->
                   
                    <?php 
                    if (isset($r->docsegundonotaria)){
                    if((substr($r->docsegundonotaria,(strlen($r->docsegundonotaria))-4)) == ".pdf"){ ?>
                       <input type="hidden" name="docsegundonotaria" id="docsegundonotaria" value="<?=$p->getdocsegundonotaria()?>"/>
                    <a class=" btn btn-primary btn-lg"  data-toggle="modal" data-target="#myModaldocsegundoeste<?=$r->idsolicitud?>"  style="font-size:80%;width: 230px;background-color: #009688;border-color: #009688; color: white; " data-toggle="tooltip" >Ver Certificado</a>

                    <!-- Modal -->
                                <div class="modal fade" id="myModaldocsegundoeste<?=$r->idsolicitud?>" role="dialog">
                                  <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Matricula No :  <?=$r->estado?></h4>
                                      </div>
                                      <div class="modal-body">
                                        <iframe src="<?=$r->docsegundonotaria?>" width="770" height="530" style="border: none;"></iframe>
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                      </div>
                                    </div>
                                  </div>
                                </div>


                   <?php } else { ?>                    
                   <input type="hidden" id="docsegundonotaria" name="docsegundonotaria"/>
                     <button type="button" class="btn btn-danger btn-lg" data-toggle="modal"style="font-size:80%;width: 230px;background-color: gray;border-color: gray;"> Sin Certificado </button>
                    <?php }}?>
                    
                      <!-- ver certificado 2 Notaria-->

                
               </td>
               <td>
                  <select style="visibility:hidden;padding-top: 0px;" class="form-control" name="checksegundo"/>
                       <option value="No" <?=$p->getchecksegundo()=="No" ? "selected": ""?> >No</option>
                       <option value="Si" <?=$p->getchecksegundo()=="Si" ? "selected": ""?> >Si</option>
                   </select>
               </td>
               </tr>

               <!-- Fin Segundo inmueble-->

               <!-- Tercer inmueble-->

               <tr align="center">
               <td style=" padding-right: 20px" >
               <input class="form-control" autocomplete="off" type="text"  name="terceramatricula" readonly="readonly" placeholder="No hay matricula" value="<?=$p->getterceramatricula()?>"/>
               </td>
               

               <td style="width: 400px; padding-top: 10px"  >
                    <!-- ver certificado 3-->
                   
                    <?php 
                    if (isset($r->tercerdocumento)){
                    if((substr($r->tercerdocumento,(strlen($r->tercerdocumento))-4)) == ".pdf"){ ?>
                    
                    <a class="btn btn-info btn-lg"  data-toggle="modal" data-target="#myModal3<?=$r->idsolicitud?>"  style="font-size:80%;width: 230px;background-color: #17A4B7;border-color: #17A4B7; color: white; " data-toggle="tooltip" >Ver Certificado</a>

                    <!-- Modal -->
                                <div class="modal fade" id="myModal3<?=$r->idsolicitud?>" role="dialog">
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
                    <input type="hidden" id="tercerdocumento" name="tercerdocumento"/>
                     <button type="button" class="btn btn-danger btn-lg" data-toggle="modal"style="font-size:80%;width: 230px;background-color: gray;border-color: gray;"> Sin Certificado </button>
                    <?php }}?>
                    
                      <!-- ver certificado 3-->
                     
             
               </td>
               <td>
              
             
               <!-- ver certificado 3 Notaria -->
                   
                    <?php 
                    if (isset($r->docterceronotaria)){
                    if((substr($r->docterceronotaria,(strlen($r->docterceronotaria))-4)) == ".pdf"){ ?>
                       <input type="hidden" name="docterceronotaria" id="docterceronotaria" value="<?=$p->getdocterceronotaria()?>"/>
                    <a class=" btn btn-primary btn-lg"  data-toggle="modal" data-target="#myModaldocterceroeste<?=$r->idsolicitud?>"  style="font-size:80%;width: 230px;background-color: #009688;border-color: #009688; color: white; " data-toggle="tooltip" >Ver Certificado</a>

                    <!-- Modal -->
                                <div class="modal fade" id="myModaldocterceroeste<?=$r->idsolicitud?>" role="dialog">
                                  <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Matricula No :  <?=$r->terceramatricula?></h4>
                                      </div>
                                      <div class="modal-body">
                                        <iframe src="<?=$r->docterceronotaria?>" width="770" height="530" style="border: none;"></iframe>
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                      </div>
                                    </div>
                                  </div>
                                </div>


                   <?php } else { ?>                    
                   <input type="hidden" id="docterceronotaria" name="docterceronotaria"/>
                     <button type="button" class="btn btn-danger btn-lg" data-toggle="modal"style="font-size:80%;width: 230px;background-color: gray;border-color: gray;"> Sin Certificado </button>
                    <?php }}?>
                    
                      <!-- ver certificado 3 Notaria-->
               
                

               </td>
               <td>
                  <select style="visibility:hidden;padding-top: 0px;" class="form-control" name="checktercero"/>
                       <option value="No" <?=$p->getchecktercero()=="No" ? "selected": ""?> >No</option>
                       <option value="Si" <?=$p->getchecktercero()=="Si" ? "selected": ""?> >Si</option>
                   </select>
               </td>
               </tr>

               <!-- Fin Tercer inmueble-->

               <!-- Cuarto inmueble-->

               <tr align="center">
               <td style=" padding-right: 20px" >
               <input class="form-control" autocomplete="off" type="text" name="cuartamatricula" readonly="readonly" placeholder="No hay matricula" value="<?=$p->getcuartamatricula()?>"/>
               </td>
               

               <td style="width: 400px; padding-top: 10px"  >
                    <!-- ver certificado 4-->
                   
                    <?php 
                    if (isset($r->cuartodocumento)){
                    if((substr($r->cuartodocumento,(strlen($r->cuartodocumento))-4)) == ".pdf"){ ?>
                     
                    <a class="btn btn-info btn-lg"  data-toggle="modal" data-target="#myModal4<?=$r->idsolicitud?>"  style="font-size:80%;width: 230px;background-color: #17A4B7;border-color: #17A4B7; color: white; " data-toggle="tooltip" >Ver Certificado</a>

                    <!-- Modal -->
                                <div class="modal fade" id="myModal4<?=$r->idsolicitud?>" role="dialog">
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
                    <input type="hidden" id="cuartodocumento" name="cuartodocumento" />
                     <button type="button" class="btn btn-danger btn-lg" data-toggle="modal"style="font-size:80%;width: 230px;background-color: gray;border-color: gray;"> Sin Certificado </button>
                    <?php }}?>
                    
                      <!-- ver certificado 4-->
                
                 
               </td>
             
            
               <td>

                <!-- ver certificado 4 Notaria -->
                   
                    <?php 
                    if (isset($r->doccuartonotaria)){
                    if((substr($r->doccuartonotaria,(strlen($r->doccuartonotaria))-4)) == ".pdf"){ ?>
                       <input type="hidden" name="doccuartonotaria" id="doccuartonotaria" value="<?=$p->getdoccuartonotaria()?>"/>
                    <a class=" btn btn-primary btn-lg"  data-toggle="modal" data-target="#myModaldoccuartaeste<?=$r->idsolicitud?>"  style="font-size:80%;width: 230px;background-color: #009688;border-color: #009688; color: white; " data-toggle="tooltip" >Ver Certificado</a>

                    <!-- Modal -->
                                <div class="modal fade" id="myModaldoccuartaeste<?=$r->idsolicitud?>" role="dialog">
                                  <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Matricula No :  <?=$r->cuartamatricula?></h4>
                                      </div>
                                      <div class="modal-body">
                                        <iframe src="<?=$r->doccuartonotaria?>" width="770" height="530" style="border: none;"></iframe>
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                      </div>
                                    </div>
                                  </div>
                                </div>


                   <?php } else { ?>                    
                  <input type="hidden" id="doccuartonotaria" name="doccuartonotaria"/>
                     <button type="button" class="btn btn-danger btn-lg" data-toggle="modal"style="font-size:80%;width: 230px;background-color: gray;border-color: gray;"> Sin Certificado </button>
                    <?php }}?>
                    
                      <!-- ver certificado 4 Notaria-->
               
               </td>
               <td>
                 <select style="visibility:hidden;padding-top: 0px;" class="form-control" name="checkcuarto"/>
                       <option value="No" <?=$p->getcheckcuarto()=="No" ? "selected": ""?> >No</option>
                       <option value="Si" <?=$p->getcheckcuarto()=="Si" ? "selected": ""?> >Si</option>
                   </select>
               </td>
               </tr>

               <!--Fin Cuarto inmueble-->

               <!-- Quinto inmueble-->

               <tr align="center">
               <td style=" padding-right: 20px" >
               <input class="form-control" autocomplete="off" type="text"  name="quintamatricula" placeholder="No hay matricula" readonly="readonly" value="<?=$p->getquintamatricula()?>"/>
               </td>
               <td style="width: 400px; padding-top: 10px"  >
                    <!-- ver certificado 5-->
                   
                    <?php 
                    if (isset($r->quintodocumento)){
                    if((substr($r->quintodocumento,(strlen($r->quintodocumento))-4)) == ".pdf"){ ?>
                    
                    <a class="btn btn-info btn-lg"  data-toggle="modal" data-target="#myModal5<?=$r->idsolicitud?>"  style="font-size:80%;width: 230px;background-color: #17A4B7;border-color: #17A4B7; color: white; " data-toggle="tooltip" >Ver Certificado</a>

                    <!-- Modal -->
                                <div class="modal fade" id="myModal5<?=$r->idsolicitud?>" role="dialog">
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
                    <input type="hidden" id="quintodocumento" name="quintodocumento" />
                     <button type="button" class="btn btn-danger btn-lg" data-toggle="modal"style="font-size:80%;width: 230px;background-color: gray;border-color: gray;"> Sin Certificado </button>
                    <?php }}?>
                    
                      <!-- ver certificado 5-->
                 
               </td>
               <td>
                 <!-- ver certificado 5 Notaria -->
                   
                    <?php 
                    if (isset($r->docquintonotaria)){
                    if((substr($r->docquintonotaria,(strlen($r->docquintonotaria))-4)) == ".pdf"){ ?>
                       <input type="hidden" name="docquintonotaria" id="docquintonotaria" value="<?=$p->getdoccuartonotaria()?>"/>
                    <a class=" btn btn-primary btn-lg"  data-toggle="modal" data-target="#myModaldocquintoeste<?=$r->idsolicitud?>"  style="font-size:80%;width: 230px;background-color: #009688;border-color: #009688; color: white; " data-toggle="tooltip" >Ver Certificado</a>

                    <!-- Modal -->
                                <div class="modal fade" id="myModaldocquintoeste<?=$r->idsolicitud?>" role="dialog">
                                  <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Matricula No :  <?=$r->quintamatricula?></h4>
                                      </div>
                                      <div class="modal-body">
                                        <iframe src="<?=$r->docquintonotaria?>" width="770" height="530" style="border: none;"></iframe>
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                      </div>
                                    </div>
                                  </div>
                                </div>


                   <?php } else { ?>                    
                  <input type="hidden" id="docquintonotaria" name="docquintonotaria"/>
                     <button type="button" class="btn btn-danger btn-lg" data-toggle="modal"style="font-size:80%;width: 230px;background-color: gray;border-color: gray;"> Sin Certificado </button>
                    <?php }}?>
                    
                      <!-- ver certificado 5 Notaria-->
               

               
               </td>
               
               <td>
                 <select style="visibility:hidden;padding-top: 0px;" class="form-control" name="checkquinto"/>
                       <option value="No" <?=$p->getcheckquinto()=="No" ? "selected": ""?> >No</option>
                       <option value="Si" <?=$p->getcheckquinto()=="Si" ? "selected": ""?> >Si</option>
                   </select>

               </td>
               </tr>
               </table>
               <!-- Quinto inmueble-->


               </div>
               <br>
               <!-- Fin Segundo inmueble-->

               <br>

               <div class="alert alert-info" align="center">
               <strong> Datos del Propietario ( Futuro vendedor )</strong>
               </div>
               <br>


               <div align="center">
               <table>
               <th style="width: 500px;">
               <label for="cedulapropietario" >No de Documento o Nit del propietario </label>
               </th>
               <th style="width: 500px;">
               <label for="estadocivilpropietario" >Estado Civil Propietario </label>
               </th>
               <tr>
                 <td style=" padding-right: 20px">
                 <input class="form-control" autocomplete="off" type="number" id="cedulapropietario" name="cedulapropietario" placeholder="Ingrese el numero de Documento o el Nit del propietario ( Futuro vendedor )"  readonly="readonly" value="<?=$p->getcedulapropietario()?>"/>
                 </td>
                 <td>
                   <select class="form-control" readonly="readonly"  name="estadocivilpropietario" required  />
                       <option value="">Seleccione el estado civil del propietario ( Futuro vendedor )</option>
                       <option value="No se sabe" <?=$p->getestadocivilpropietario()=="No se sabe" ? "selected": ""?> >No se sabe</option>
                       <option value="Entidad" <?=$p->getestadocivilpropietario()=="Entidad" ? "selected": ""?> >Entidad</option>
                       <option value="Casado con sociedad conyugal vigente" <?=$p->getestadocivilpropietario()=="Casado con sociedad conyugal vigente" ? "selected": ""?> >Casado con sociedad conyugal vigente</option>
                       <option value="Casado con sociedad conyugal disuelta y liquidada"  <?=$p->getestadocivilpropietario()=="Casado con sociedad conyugal disuelta y liquidada" ? "selected": ""?>>Casado con sociedad conyugal disuelta y liquidada</option>
                       <option value="Soltero sin unión marital de hecho" <?=$p->getestadocivilpropietario()=="Soltero sin unión marital de hecho" ? "selected": ""?>>Soltero sin unión marital de hecho</option>
                       <option value="Soltero con unión marital de hecho" <?=$p->getestadocivilpropietario()=="Soltero con unión marital de hecho" ? "selected": ""?>>Soltero con unión marital de hecho</option>
                   </select>
                 </td>
               </tr>
               </table>
               </div>
               <br>
               <br>


               <div class="alert alert-info" align="center">
               <strong> Datos del Locatario ( Futuro comprador )</strong>
               </div>
               <br>

               <div align="center">
               <table>
               <th style="width: 500px;">
               <label for="nombrelocatario" >Primer nombre del locatario / Nombre empresa </label>
               </th>
               <th style="width: 500px;">
               <label for="nombreotrolocatario" >Segundo nombre del locatario </label>
               </th>
               <tr>
               <td style=" padding-right: 20px">
               <input class="form-control" autocomplete="off" type="text" name="nombrelocatario" placeholder="No hay datos" readonly="readonly" value="<?=$p->getnombrelocatario()?>"/>
               </td>
               <td>
               <input class="form-control" autocomplete="off" type="text" name="nombreotrolocatario" placeholder="No hay datos" readonly="readonly" value="<?=$p->getnombreotrolocatario()?>"/>
               </td>
               </tr>
               </table>
               </div>
               <br>
               <div align="center">
               <table>
               <th style="width: 500px;">
               <label for="primerapellido" >Primer apellido del locatario </label>
               </th>
               <th style="width: 500px;">
               <label for="segundoapellido" >Segundo apellido del locatario </label>
               </th>
               <tr>
               <td style=" padding-right: 20px">
               <input class="form-control" autocomplete="off" type="text" name="primerapellido" placeholder="No hay datos" readonly="readonly" value="<?=$p->getprimerapellido()?>"/>
               </td>
               <td>
               <input class="form-control" autocomplete="off" type="text" name="segundoapellido" placeholder="No hay datos" readonly="readonly" value="<?=$p->getsegundoapellido()?>"/>
               </td>
               </tr>
               </table>
               </div>
               <br>
               <br>

               <div align="center">
               <table>
               <th style="width: 400px;">
               <label for="cedulalocatario" >Numero de Documento del Locatario </label>
               </th>
               <th style="width: 400px;">
                <label for="tipodocumentolocatario" >Tipo de documento Locatario</label>
                </th>
                <th style="width: 400px;">
                 <label for="numerosolicitud" >Correo Electrónico</label>
                </th>
               <tr>
               <td style=" padding-right: 20px">
               <input class="form-control" autocomplete="off" type="number" name="cedulalocatario" placeholder="No hay datos" readonly="readonly" value="<?=$p->getcedulalocatario()?>"/>
               </td>
               <td style=" padding-right: 20px">
                 <select class="form-control" style="height:5%" name="tipodocumentolocatario" readonly="readonly" />
                  <option value="">No hay datos</option>
                   <option value="Cédula de ciudadanía" <?=$p->gettipodocumentolocatario()=="Cédula de ciudadanía" ? "selected": ""?> >Cédula de ciudadanía</option>
                   <option value="Cédula de extranjería" <?=$p->gettipodocumentolocatario()=="Cédula de extranjería" ? "selected": ""?>>Cédula de extranjería</option>
                   <option value="Nit para personas jurídicas" <?=$p->gettipodocumentolocatario()=="Nit para personas jurídicas" ? "selected": ""?>>Nit para personas jurídicas</option>
                   <option value="Pasaporte" <?=$p->gettipodocumentolocatario()=="Pasaporte" ? "selected": ""?>>Pasaporte</option>
                 </select>
               </td>
               <td>
                 <input id="correo" class="form-control" autocomplete="off" type="email" name="numerosolicitud" placeholder="No hay datos" readonly="readonly" value="<?=$p->getnumerosolicitud()?>"/>
               </td>
               </tr>
               </table>
               </div>
               <br><br>
               <div class="alert alert-info">
               <strong> Liquidador</strong>
               </div>

               <table>
               <th style="width: 400px;">
                 <div align="center" >
                   <label for="" >Valor Leasing</label>
                 </div>
               </th>
               <th style="width: 400px;">
                 <div align="center" >
                   <label  >Valor Venta</label>
                 </div>
                </th>
                <th style="width: 400px;">
                  <div align="center" >
                    <label>Valor Hipoteca</label>
                  </div>
                </th>
               <tr>
               <td style=" padding-right: 20px">
                 <input class="form-control" require autocomplete="off" type="number" name="ValEscritura" id="ValEscritura" placeholder="No hay datos" readonly="readonly" value="<?=$p->getValEscritura()?>"/>
               </td>
               <td style=" padding-right: 20px">
                 <input class="form-control" autocomplete="off" type="number" id="ValVenta" name="ValVenta" placeholder="No hay datos" readonly="readonly" value="<?=$p->getValVenta()?>"/>
               </td>
               <td>
                 <input class="form-control" autocomplete="off" type="number" id="ValHipoteca" name="ValHipoteca" placeholder="No hay datos" readonly="readonly" value="<?=$p->getValHipoteca()?>"/>
               </td>
               </tr>
               </table>



<br>


               <div class="alert alert-info">
               <strong> Viabilidad</strong>
               </div><br>

                    <div align="center">
                    <table>
                    <th style="width: 1200px;">
                     
                    </th>

                    <tr>

                    
             
              
              
             
             
                      <td align="center" >
                                      <?php
                                   if((substr($r->viabilidad,(strlen($r->viabilidad))-4)) == "v"){ ?>

                                    <div style="height: 120px; width: 40%" class="card mb-3 text-white bg-success">
                                      <div  class="card-body">
                                        <blockquote style="height: 80px" class="card-blockquote">
                                          <h2>Viable</h2>
                                        </blockquote>
                                      </div>
                                    </div>           
                                    
                                    <?php } else if((substr($r->viabilidad,(strlen($r->viabilidad))-4)) == "s"){ ?>

                                      <div style="height: 120px; width: 40%" class="card mb-3 text-white bg-warning">
                                        <div class="card-body">
                                          <blockquote style="height: 80px" class="card-blockquote">
                                            <h2>Solucionar</h2>
                                          </blockquote>
                                        </div>
                                      </div>

                                    <?php } else if((substr($r->viabilidad,(strlen($r->viabilidad))-4)) == "n"){ ?>

                                        <div style="height: 120px; width: 40%" class="card mb-3 text-white bg-danger">
                                          <div class="card-body">
                                            <blockquote style="height: 80px" class="card-blockquote">
                                              <h2>No Viable</h2>
                                            </blockquote>
                                          </div>
                                        </div>

                                     <?php } else { ?>

                                                <div style="height: 120px; width: 40%" class="card mb-3 text-white bg-dark">
                                                  <div class="card-body">
                                                    <blockquote style="height: 80px" class="card-blockquote">
                                                      <h2>En Proceso</h2>
                                                    </blockquote>
                                                  </div>
                                                </div>


                                                <?php } ?>
                          </td>
                    </tr>
                    </table>
                    </div>
                    <br><br>



               <div align="center">
               <table>
               <th style="width: 600px;">
                <div align="center">
                  <label for="observacion">Observaciones informador</label>
                </div>
               </th>
               <th style="width: 600px;">
                 <div align="center">
                   <label for="estadocivilpropietario" >Observaciones Notaria</label>
                 </div>
               </th>
               <tr>
                 <td style=" padding-right: 20px">
                    <textarea class="form-control" autocomplete="off" type="text"  name="observacion" readonly="readonly" rows="4" cols="50"><?=$p->getobservacion()?> </textarea>
                 </td>
                 <td>
                    <textarea class="form-control" autocomplete="off" type="text" id="observacionesnotaria" readonly="readonly" name="observacionesnotaria" rows="4" cols="50"><?=$p->getobservacionesnotaria()?> </textarea>
                 </td>
               </tr>
               </table>
               </div>
               <br><br>


             
              
             
              
              


               <br>

               


               <div >
               <input class="form-control" autocomplete="off" type="hidden" placeholder="Ingrese el primer apellido del locatario ( Futuro comprador )" name="fk_idautorizacion" value=""/>
               </div>









                               <input class="btn btn-info btn-lg " type="button" onclick="location.href='?c=resolicitud';" value="Ver Solicitudes" />
                              </form>

                            </div>





            <!-- Fin Formulario-->





          </div>

        </div>


        <br><br><br><br><br><br><br>
  </main>


<?php endif;?>  <!-- Supervisor-->











<!--Todos-->
  <script src="assets/file/js/custom-file-input.js"></script>
  <script type="text/javascript" src="assets/Validaciones/Programa.js"></script>


</body>

</html>


<!--Todos-->
