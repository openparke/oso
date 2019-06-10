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
    <body style="background-color:#FDFEFE;"   >
   
      <main style="background-color:#FDFEFE;">       
   
          

       <div class="section-heading" style="padding-left:20%;padding-top:5%;">
                    <h1 align="left"><em>Documentos Necesarios</em> </h1>
                       <img src="archivos/img/check.gif" style="height: 100px; width: 100px" align="center">
                       <!-- <img src="archivos/img/checklist.gif" style="height: 150px; width: 100px" align="right">--> 
                 
                </div>
                <div class="section-content" style="padding-left: 5%"align="center">
                  
                        <div> 
                            <table style="width: 60%;%">
                              <th colspan="3" >
                                <h3 align="center">DOCUMENTOS NECESARIOS PARA:</h3> <br><br>
                              </th>
                              <tr>
                                <td style="width: 33%">
                                  <input type="button" class="button" value="Leasing Habitacional" style="width: 100%;background-color: #E30B16;border: none;color: white;padding: 15px 32px;text-align: center;text-decoration: none;display: inline-block;font-size: 16px;margin: 4px 2px;cursor: pointer;  border-radius: 15px;" onClick="window.location='?c=leasing'">
                                </td>
                                <td style="width: 33%">
                                  <input type="button" class="button" value="Hipoteca" style="width:  100%;
                                     background-color: #E30B16;border: none;color: white;padding: 15px 32px;text-align: center;text-decoration: none;display: inline-block;font-size: 16px;margin: 4px 2px;cursor: pointer;border-radius: 15px;"onClick="window.location='?c=hipoteca'">
                                </td>
                                 <td style="width: 33%">
                                  <input type="button" class="button" value="Compraventa" style="width:  100%;
                                    background-color: #E30B16;border: none;color: white;padding: 15px 32px;text-align: center;text-decoration: none;display: inline-block;font-size: 16px;margin: 4px 2px;cursor: pointer;border-radius: 15px;" onClick="window.location='?c=compraventa'">
                                </td>
                              </tr>
                               <tr>
                                <td colspan="3">
                                <input type="button" class="button" value="Cancelación de Patrimonio de familia si no hay menores " style="width:  100%;background-color: #E30B16;border: none;color: white;padding: 15px 32px;text-align: center;text-decoration: none;display: inline-block;font-size: 16px;margin: 4px 2px;cursor: pointer;border-radius: 15px;" onClick="window.location='?c=cancelacionpatrimonio'">
                                </td>
                              </tr>
                              <tr>
                                <td colspan="3">
                                <input type="button" class="button" value="Cancelación de afectación a vivienda familiar" style="width:  100%;background-color: #E30B16;border: none;color: white;padding: 15px 32px;text-align: center;text-decoration: none;display: inline-block;font-size: 16px;margin: 4px 2px;cursor: pointer;border-radius: 15px;" onClick="window.location='?c=cancelacionafectacion'">
                                </td>
                              </tr>
                              <tr>
                                <td colspan="3">
                                <input type="button" class="button" value="Cancelación de patrimonio familiar con menores de edad" style="width:  100%;background-color: #E30B16;border: none;color: white;padding: 15px 32px;text-align: center;text-decoration: none;display: inline-block;font-size: 16px;margin: 4px 2px;cursor: pointer;border-radius: 15px;" onClick="window.location='?c=cancelacionpatrimoniocon'">
                                </td>
                              </tr>
                            </table>
                         
                          <br>
   
   
    
   
    
                          <br>
                          <br>
                          <br> 
                          <br><br><br><br><br><br>
                        </a>
                       
                    </div>
                </div>
                
                  </main> 
        </body  >