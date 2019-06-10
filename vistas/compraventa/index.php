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
            <li><a class="app-menu__item" href="?c=Checklist"><i class="app-menu__icon colorp fa fa-check-square" ></i><span class="app-menu__label" >Documentos Necesarios</span></a></li>
            <li><a class="app-menu__item"href="?c=contacto"><i class="app-menu__icon colorp fa fa fa-address-book-o" ></i><span class="app-menu__label" >Contactanos</span></a></li>
           
    
             
      </ul>
     

    </aside>
    
    <?php endif;?>

     <head>
         <!--  modal grande -->
         <script type="text/javascript">(function () { var ldk = document.createElement('script'); ldk.type = 'text/javascript'; ldk.async = true; ldk.src = 'https://s.cliengo.com/weboptimizer/5c1a61b9e4b0d5d7dc1217b5/5c1a6cd2e4b0d5d7dc1218f8.js'; var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ldk, s); })();</script>
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
         
         <!--  modal grande -->
         <meta http-equiv="Content-Type" content="text/html; charset=gb18030">
 
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
         
     </head> 

     
     
      <body style="background-color:#FDFEFE;"   >
   
      <main style="background-color:#FDFEFE;">       
   
   
<div class="w3-container" align="center" style="padding-top: 6%;padding-left: 5%;">
  <h2> Compra - Venta </h2><br>
 

  
  <table class="w3-table-all" style="width:70%;">
    <thead>
      <tr class="w3-red">
        <th>Documentos</th>
        <th width="100px">Si</th>
        <th width="100px">No</th>
        <th width="100px">#</th>
      </tr>
    </thead>
   <tr>
      <td><a data-toggle="modal" data-target="#myModal" style="cursor: pointer">Escritura de tradicíon</a>
        <!-- Modal -->
                          <div class="modal fade" id="myModal" role="dialog">
                            <div class="modal-dialog modal-lg">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h4 class="modal-title">Escritura de tradicíon</h4>
                                </div>
                                <div class="modal-body">
                                  <iframe src="vistas/documentos/documentospdf/escritura.pdf" width="770" height="530" style="border: none;"></iframe>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                </div>
                              </div>
                            </div>
                          </div>
                       
                      </td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
   
    <tr>
         <td><a data-toggle="modal" data-target="#myModal1" style="cursor: pointer">  Certificado de tradición y libertad</a>
        <!-- Modal -->
                          <div class="modal fade" id="myModal1" role="dialog">
                            <div class="modal-dialog modal-lg">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h4 class="modal-title">Certificado de tradición y libertad</h4>
                                </div>
                                <div class="modal-body">
                                  <iframe src="vistas/documentos/documentospdf/certificado.pdf" width="770" height="530" style="border: none;"></iframe>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                </div>
                              </div>
                            </div>
                          </div>
                       
                      </td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
   <!--  <tr>
      <td>3. Promesa de compraventa <a href="compraventa.html"><img alt="example3" src="imagenes/bien.png"  style="height: 30px;"/></a>     <a href="promesa.html"><img alt="example3" src="imagenes/mal.png"  style="height: 30px;"/></a></td>
      <td></td>
      <td></td>
      <td></td>
    </tr> -->
   
    <tr>
          <td><a data-toggle="modal" data-target="#myModal3" style="cursor: pointer">Impuesto predial vigente del año en curso. (cancelado)</a>
        <!-- Modal -->
                          <div class="modal fade" id="myModal3" role="dialog">
                            <div class="modal-dialog modal-lg">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h4 class="modal-title">Impuesto predial vigente del año en curso. (cancelado)</h4>
                                </div>
                                <div class="modal-body">
                                  <iframe src="vistas/documentos/documentospdf/impuesto.pdf" width="770" height="530" style="border: none;"></iframe>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                </div>
                              </div>
                            </div>
                          </div>
                       
                      </td>

      <td></td>
      <td></td>
    <td></td>
    </tr>
    <!--<tr>
          <td><a data-toggle="modal" data-target="#myModal4" style="cursor: pointer">Paz y Salvo de valorización - expedido por el IDU</a>
         Modal 
                          <div class="modal fade" id="myModal4" role="dialog">
                            <div class="modal-dialog modal-lg">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h4 class="modal-title">Paz y Salvo de valorización - expedido por el IDU</h4>
                                </div>
                                <div class="modal-body">
                                  <iframe src="vistas/mantenimiento/mantenimiento.png" width="770" height="530" style="border: none;"></iframe>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                </div>
                              </div>
                            </div>
                          </div>
                       
                      </td>

      <td></td>
      <td></td>
      <td></td>
    </tr>
     <tr>
              <td><a data-toggle="modal" data-target="#myModal2" style="cursor: pointer">Paz y Salvo de la Administración (si pagan) </a>
        
                          <div class="modal fade" id="myModal2" role="dialog">
                            <div class="modal-dialog modal-lg">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h4 class="modal-title">Paz y Salvo de la Administración (si pagan)</h4>
                                </div>
                                <div class="modal-body">
                                  <iframe src="vistas/mantenimiento/mantenimiento.png" width="770" height="530" style="border: none;"></iframe>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                </div>
                              </div>
                            </div>
                          </div>
                       
                      </td>

      <td></td>
      <td></td>
      <td></td>
    </tr>-->
    <tr>
          <td><a data-toggle="modal" data-target="#myModal5" style="cursor: pointer">Fotocopia de la c&eacutedula de ciudadania o c&eacutedula de extranjer&iacutea de todos los otorgantes</a>
        <!-- Modal -->
                          <div class="modal fade" id="myModal5" role="dialog">
                            <div class="modal-dialog modal-lg">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h4 class="modal-title">Fotocopia de la cédula de ciudadania</h4>
                                </div>
                                <div class="modal-body">
                                  <iframe src="vistas/documentos/documentospdf/cedula.pdf" width="770" height="530" style="border: none;"></iframe>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                </div>
                              </div>
                            </div>
                          </div>
                       
                      </td>

      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
          <td><a data-toggle="modal" data-target="#myModal6" style="cursor: pointer">Poder especial documento privado</a>
        <!-- Modal -->
                          <div class="modal fade" id="myModal6" role="dialog">
                            <div class="modal-dialog modal-lg">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h4 class="modal-title"> Poder especial documento privado</h4>
                                </div>
                                <div class="modal-body">
                                  <iframe src="vistas/documentos/documentospdf/especial.pdf" width="770" height="530" style="border: none;"></iframe>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                </div>
                              </div>
                            </div>
                          </div>
                       
                      </td>

      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
          <td> <a data-toggle="modal" data-target="#myModal9" style="cursor: pointer">Poder general por escritura pública con su vigencia</a>
        <!-- Modal -->
                          <div class="modal fade" id="myModal9" role="dialog">
                            <div class="modal-dialog modal-lg">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h4 class="modal-title">Poder general por escritura pública con su vigencia</h4>
                                </div>
                                <div class="modal-body">
                                  <iframe src="vistas/documentos/documentospdf/general.pdf" width="770" height="530" style="border: none;"></iframe>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                </div>
                              </div>
                            </div>
                          </div>
                       
                      </td>

      <td></td>
      <td></td>
      <td></td>
    </tr>
    
    <tr>
          <td><a data-toggle="modal" data-target="#myModal8" style="cursor: pointer">Certificado de Cámara de comercio (si es persona juridica)</a>
        <!-- Modal -->
                          <div class="modal fade" id="myModal8" role="dialog">
                            <div class="modal-dialog modal-lg">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h4 class="modal-title">Certificado de Cámara de comercio (si es persona juridica)</h4>
                                </div>
                                <div class="modal-body">
                                  <iframe src="vistas/documentos/documentospdf/camara.pdf" width="770" height="530" style="border: none;"></iframe>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                </div>
                              </div>
                            </div>
                          </div>
                       
                      </td>
    
      <td></td>
      <td></td>
      <td></td>
    </tr>
     <tr>
          <td colspan="4">
             <br><br><a> - Para inmuebles fuera de Bogotá los comprobantes fiscales serán el paz y salvo por predial y valorización, para la anualidad en la que se escritura. En caso que el municipio no tenga valorización, así deberá ser certificado por el ente encargado del recaudo del impuesto<br><br></a><br></td>
    
     
    </tr>
    
    
  </table>
</div>
                  </main> 
        </body>
        
        
        
        
        