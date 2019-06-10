 <?php if($_SESSION['Rol']=="Informador"):?><!-- Informador-->
  <aside class="app-sidebar">
      
      <ul class="app-menu">
 
              <li style="padding-left: 20%;"><img src="archivos/img/notaria/logob.png" style="width: 100px;" ></li><br>
              
            <li><a class="app-menu__item" href="index.php#top"><i class="app-menu__icon colorp fa fa-home" ></i><span class="app-menu__label" >Inicio</span></a></li>
           <li><a class="app-menu__item"  href="?c=autorizacion&a=registrarautorizacion"><i class="app-menu__icon colorp fa fa fa-clipboard" ></i><span class="app-menu__label" > Solicitud</span></a></li>
           
            <li><a class="app-menu__item" href="?c=simulador"><i class="app-menu__icon colorp fa fa-calculator" ></i><span class="app-menu__label" >Cancelaci&oacuten De Hipoteca</span></a></li>
      </ul>
     

    </aside>
<?php endif;?>
    
    <head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
   <link rel="stylesheet" href="Davivienda/css/bootstrap.min.css">
      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>

<script src="http://sila.notaria16.com/Sila/assets/Validaciones/calculoEscrituraNotarial.js" type="text/javascript"></script>

<script src="http://sila.notaria16.com/Sila/assets/Validaciones/calculoventahipoteca.js" type="text/javascript"></script>

</head>


<body style="background-color:#FDFEFE;">
     <main style="background-color:#FDFEFE;">

<div style="padding-left:20%;padding-top:2%;zoom:100%;background-color:#FDFEFE;"align="center" >
     <div class="section-heading" >
                    <h1>Simulador<br><em>Gastos Notariales</em></h1>
                      <div class="container">
<br>
                    <div class="alert alert-danger" style="width: 100%">
                      <strong>
                          Alerta!!! <br><br><br></strong> Estos simuladores son solo un aproximado, el Banco y la Notaria 16 NO se hacen responsables si el costo incrementa !!!
                    </div>
                  </div>
                  
                </div>
           <div class="section-content" >
                  
                 <div class="content-wrapper" style="padding-right:2%;zoom:100%;background-color:#FDFEFE;" >
                        
                        
                        
                        <div id="exTab1" class="container" style="background:white; padding:10px;border-radius: 15px;"> 
                        
                        
                              <div class="tab-content clearfix">

                                  


                            <div style="padding:40px;">
                              <table width="100%;">
                                      
                                      <tr>
                                        <td colspan="3">
                                          <br>
                                          <div class="alert alert-success">
                                            <strong>Gastos Deudor</strong> 
                                          </div>
                                        </td>                                     

                                      </tr>
                                      <tr>
                                        <td style=" padding-top: 25px; ">Gastos Notariales    </td>
                                        <td>
                                         $ 
                                        </td>
                                        <td> <input  class="form-control" require autocomplete="off" type="number"  name="gastosnotarialesDeudor" id="gastosnotarialesDeudor" placeholder=" 53.000" require onkeypress="return soloNumeros(event)"  align="center" disabled required/></td>
                                      </tr>
                                      <tr>
                                        <td style=" padding-top: 25px; ">Hojas Notariales  </td>
                                         <td>
                                         $ 
                                        </td>
                                        <td> <input  class="form-control" require autocomplete="off" type="number" name="hojasnotarialesDeudor" id="hojasnotarialesDeudor"  require onkeypress="return soloNumeros(event)"  align="center" placeholder=" 18.000" disabled  required/></td>
                                      </tr>
                                      <tr>
                                        <td style=" padding-top: 25px; ">Fotocopias,Autenticaciones Y Biometria  </td>
                                         <td>
                                         $ 
                                        </td>
                                        <td> <input  class="form-control" require autocomplete="off" type="number" name="fotocopiasotrosDeudor" id="fotocopiasotrosDeudor"  require onkeypress="return soloNumeros(event)"  align="center" placeholder=" 100.000" disabled required/></td>
                                      </tr>

                                      <tr>
                                        <td style=" padding-top: 25px; ">Super Notariado y Registro </td>
                                         <td>
                                         $ 
                                        </td>
                                        <td> <input  class="form-control" require autocomplete="off" type="number" name="supernotariadoDeudor" id="supernotariadoDeudor"  require onkeypress="return soloNumeros(event)"  align="center" placeholder=" 11.000" disabled required/></td>
                                      </tr>
                                      <tr>
                                        <td style=" padding-top: 25px; ">Impuestos Otros 
                                        </td>
                                         <td>
                                         $ 
                                        </td>
                                        <td> <input  class="form-control"  require autocomplete="off" type="number" name="impDeudor" id="impDeudor"  require onkeypress="return soloNumeros(event)"  align="center" placeholder=" 40.000" disabled required/>
                                        </td>
                                      </tr>
                                        <tr>
                                        <td style=" padding-top: 25px; ">Registro  </td>
                                         <td>
                                         $ 
                                        </td>
                                        <td> <input  class="form-control" require autocomplete="off" type="number" name="supernotariadoDeudor" id="supernotariadoDeudor"  require onkeypress="return soloNumeros(event)"  align="center" placeholder=" 20.100" disabled required/></td>
                                      </tr>
                                      <tr>
                                         <td style=" padding-top: 25px; ">Beneficencia </td>
                                          <td>
                                         $ 
                                        </td>
                                        <td> <input  class="form-control" require autocomplete="off" type="number" name="benefiDeudor" id="benefiDeudor"  require onkeypress="return soloNumeros(event)"  align="center" placeholder=" 124.000" disabled required/>
                                        </td>
                                      </tr>
                                      
                                    
                                       <tr>
                                        <td style="">Iva </td>
                                         <td>
                                         $ 
                                        </td>
                                        <td> <input  class="form-control" require autocomplete="off" type="number" name="ivaDeudor" id="ivaDeudor"  require onkeypress="return soloNumeros(event)"  align="center" placeholder=" 33.364" disabled required/></td>
                                      </tr>
                                     
                                      
                                       <tr>
                                        <td style=" padding-top: 25px;">Total   </td>
                                         <td>
                                         $ 
                                        </td>
                                        <td style=" padding-top: 25px;"><input  class="form-control" require autocomplete="off" type="number" name="totalDeudor" id="totalDeudor" require onkeypress="return soloNumeros(event)"  align="center" placeholder=" 404.064" disabled required/></td>
                                      
                                      </tr>
                                     

                                     
                                    </table>
                          </div>
                         
                    </div>
                </div>
          <input class="btn btn-primary btn-lg " type="button" onclick="location.href='?c=solicitud';" value="Ver Respuesta" />
          
          <br><br><br>
<br>


</div>
    </main>
                
     
 </body> 
   