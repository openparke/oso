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
    <head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
         <!--  modal grande -->
         <script type="text/javascript">(function () { var ldk = document.createElement('script'); ldk.type = 'text/javascript'; ldk.async = true; ldk.src = 'https://s.cliengo.com/weboptimizer/5c1a61b9e4b0d5d7dc1217b5/5c1a6cd2e4b0d5d7dc1218f8.js'; var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ldk, s); })();</script>
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
         
         <!--  modal grande -->

     </head> 


     <body style="background-color:#FDFEFE;"   >
   
      <main style="background-color:#FDFEFE;">               
  
                <div class="section-heading" style="padding-left:20%;padding-top:5%;"align="center">
                    <h1>Certificado <br><em> de tradición y libertad</em></h1>                 
                </div>
                <div class="section-content" style="padding-left:20%;"align="center">
                 <div class="container" align="center">
                    
                         <table align="left">
                             <tr >
                                 <th style="padding-left: 40px;"> <a style="
                             opacity: 0.8; background-color: #4a4e51;border: none;color: white;padding: 15px 32px;text-align: center;text-decoration: none;display: inline-block;font-size: 16px;margin: 4px 2px; border-radius: 5px;width: 270px;" >Medida Cautelar</a></th>
                                <th colspan="2"> <a style="
                             opacity: 0.8; background-color: #4a4e51;border: none;color: white;padding: 15px 32px;text-align: center;text-decoration: none;display: inline-block;font-size: 16px;margin: 4px 2px; border-radius: 5px; width: 590px;">Limitación al dominio</a></th>
                                
                              </tr>
                             <tr>
                                <th style="padding-left: 40px;padding-right: 10px;"> <a style="
                             opacity: 0.8; background-color: #0080FF;border: none;color: white;padding: 15px 32px;text-align: center;text-decoration: none;display: inline-block;font-size: 16px;margin: 4px 2px;cursor: pointer;  border-radius: 5px;width: 270px;" data-toggle="modal" data-target="#myModal"  >Embargo</a>
                             
                                                 <!-- Modal -->
                                      <div class="modal fade" id="myModal" role="dialog">
                                        <div class="modal-dialog modal-lg">
                                          <div class="modal-content">
                                            <div class="modal-header">
                                              <h4 class="modal-title">Embargo</h4>
                                            </div>
                                            <div class="modal-body">
                                              <iframe src="vistas/documentos/documentospdf/certificado.pdf" width="770" height="530" style="border: none;"></iframe>
                                            </div>
                                            <div class="modal-footer">
                                              <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                            </div>
                                          </div>
                                        </div>
                                      </div></th>
   

                       

                      
                      
                      
                                <th> <a style="
                             opacity: 0.8; background-color: #0080FF;border: none;color: white;padding: 15px 32px;text-align: center;text-decoration: none;display: inline-block;font-size: 16px;margin: 4px 2px;cursor: pointer;  border-radius: 5px;width: 270px;" href="paginas/cert2.html" data-toggle="modal" data-target="#myModal1">Patrimonio De Familia</a>
                             <!-- Modal -->
                                      <div class="modal fade" id="myModal1" role="dialog">
                                        <div class="modal-dialog modal-lg">
                                          <div class="modal-content">
                                            <div class="modal-header">
                                              <h4 class="modal-title">Patrimonio De Familia</h4>
                                            </div>
                                            <div class="modal-body">
                                              <iframe src="vistas/documentos/documentospdf/certificadopatrimonio.pdf" width="770" height="530" style="border: none;"></iframe>
                                            </div>
                                            <div class="modal-footer">
                                              <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      </th>
                                <th>  <a style="
                             opacity: 0.8; background-color: #0080FF;border: none;color: white;padding: 15px 32px;text-align: center;text-decoration: none;display: inline-block;font-size: 16px;margin: 4px 2px;cursor: pointer;  border-radius: 5px;width: 300px;" href="paginas/cert3.html" data-toggle="modal" data-target="#myModal2" >Afectación a vivienda familiar</a>
                                  <!-- Modal -->
                                      <div class="modal fade" id="myModal2" role="dialog">
                                        <div class="modal-dialog modal-lg">
                                          <div class="modal-content">
                                            <div class="modal-header">
                                              <h4 class="modal-title">Afectación a vivienda familiar</h4>
                                            </div>
                                            <div class="modal-body">
                                              <iframe src="vistas/documentos/documentospdf/certificadolimit.pdf" width="770" height="530" style="border: none;"></iframe>
                                            </div>
                                            <div class="modal-footer">
                                              <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      </th></th>
                              </tr>
                            
                              <tr>
                                <td style="padding-left: 50px;"><a style="cursor: pointer;"><img alt="example3" src="vistas/documentos/imagenes/certificado1.jpg" style="border-radius: 25px; width: 250px; height: 350px;" data-toggle="modal" data-target="#myModal"  align="left"/>
                                
                                
                                      </a>
                                </td>
                                <td style="padding-left: 20px;"> <a style="cursor: pointer;"><img alt="example3" src="vistas/documentos/imagenes/cert2limit1.jpg" style="border-radius: 25px; width: 250px; height: 350px;" data-toggle="modal" data-target="#myModal1"  align="center"/>
                                
                                
                                      </a>
                                </td>
                                
                                
                                
                                <td>  <a style="cursor: pointer;" ><img alt="example3" src="vistas/documentos/imagenes/cert3pafa1.jpg" style="border-radius: 25px; width: 250px; height: 350px;" data-toggle="modal" data-target="#myModal2" align="center"/></a>
                                </td>
                              </tr>
                          </table>
                         
                      

                        
  
                </div>
                   
                </div>
         
            </main> 
        </body  >