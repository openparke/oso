 <?php if($_SESSION['Rol']=="Informador"):?><!-- Informador-->
  <aside class="app-sidebar">

      <ul class="app-menu">

              <li style="padding-left: 20%;"><img src="archivos/img/notaria/logob.png" style="width: 100px;" ></li><br>

            <li><a class="app-menu__item" href="index.php#top"><i class="app-menu__icon colorp fa fa-home" ></i><span class="app-menu__label" >Inicio</span></a></li>
            <li><a class="app-menu__item"  href="?c=autorizacion&a=registrarautorizacion"><i class="app-menu__icon colorp fa fa fa-clipboard" ></i><span class="app-menu__label" > Solicitud</span></a></li>

            <li><a class="app-menu__item" href="?c=simulador"><i class="app-menu__icon colorp fa fa-calculator" ></i><span class="app-menu__label" >Simulador Venta Hipoteca</span></a></li>
      </ul>


    </aside>
<?php endif;?>

    <head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
      <!-- Navs Tabs-->
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<!-- Fin Navs Tabs-->


   <link rel="stylesheet" href="Davivienda/css/bootstrap.min.css">
      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>


<script src="Simuladores/Ventahipoteca.js" type="text/javascript"></script>


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
                          Alerta!!! <br><br><br></strong> Este simulador  son solo un aproximado, el Banco y la Notaria 16 NO se hacen responsables si el costo incrementa !!!
                    </div>
                  </div>

                </div>
           <div class="section-content" >

                 <div class="content-wrapper" style="padding-right:2%;zoom:100%;background-color:#FDFEFE;" >



                        <div id="exTab1" class="container" style="background:white; padding:10px;border-radius: 15px;">


                              <div class="tab-content clearfix">




                            <div style="padding:40px;">
                              <table style="width:100%;">
                                <tr>
                                  <th style="width: 20%">
                                    Valor Venta
                                  </th>

                                  <th style="width: 20%">
                                    <input class="form-control"  require autocomplete="off" type="number" name="ValVenta"  id="ValVenta"require onkeypress="return soloNumeros(event)" placeholder=" Valor de la venta" align="center"  required/>
                                  </th>
                                  <th style="width: 20%">
                                    Valor Hipoteca
                                  </th>

                                  <th style="width: 40%">
                                    <input class="form-control"  require autocomplete="off" type="number" name="ValHipoteca"  id="ValHipoteca"require onkeypress="return soloNumeros(event)" placeholder=" Valor de la hipoteca" align="center"  required/>
                                  </th>
                                </tr>
                                <tr>
                                  <td colspan="4">
                                    <br>
                                    <div class="alert alert-success">
                                    <strong>Gastos Vendedor</strong>
                                    </div>
                                  </td>
                                </tr>


                                <tr>
                                  <td>
                                  </td>
                                  <td style=" padding-top: 25px; ">
                                    Gastos Notariales
                                  </td>
                                  <td align="right">
                                    $
                                  </td>
                                  <td>
                                    <input  class="form-control" require autocomplete="off" type="number"  name="gastosnotarialesvendedorhipo" id="gastosnotarialesvendedorhipo"  require onkeypress="return soloNumeros(event)" disabled align="center" required/>
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                  </td>
                                  <td style=" padding-top: 5px; ">
                                    Hojas Notariales
                                  </td>
                                  <td align="right">
                                    $
                                  </td>
                                  <td>
                                    <input  class="form-control" require autocomplete="off" type="number"  name="hojasnotarialesvendedorhipo" id="hojasnotarialesvendedorhipo"  require onkeypress="return soloNumeros(event)" disabled align="center" required/>
                                  </td>
                                </tr>
                               <!--  <tr>
                                  <td>
                                  </td>
                                  <td>
                                   Fotocopias,Autenticaciones
                                  </td>
                                  <td align="right">
                                    $
                                  </td>
                                  <td>
                                    <input  class="form-control" require autocomplete="off" type="number"  name="fotocopiasotrosvendedorhipo" id="fotocopiasotrosvendedorhipo"  require onkeypress="return soloNumeros(event)" disabled align="center" required/>
                                  </td>
                                </tr> -->
                               <!--  <tr>
                                  <td>
                                  </td>
                                  <td>
                                    Super Notariado
                                  </td>
                                  <td align="right">
                                    $
                                  </td>
                                  <td>
                                    <input  class="form-control" require autocomplete="off" type="number"  name="supernotariadovendedorhipo" id="supernotariadovendedorhipo"  require onkeypress="return soloNumeros(event)" disabled align="center" required/>
                                  </td>
                                </tr>  -->
                                <tr>
                                  <td>
                                  </td>
                                  <td style=" padding-top: 5px; ">
                                    Retención
                                  </td>
                                  <td align="right">
                                    $
                                  </td>
                                  <td style=" padding-top: 5px; ">
                                    <input  class="form-control" require autocomplete="off" type="number"  name="retencionvendedorhipo" id="retencionvendedorhipo"  require onkeypress="return soloNumeros(event)"  align="center" disabled required/>
                                  </td>
                                </tr>
                                <!-- <tr>
                                  <td>
                                  </td>
                                  <td>
                                    Iva
                                  </td>
                                  <td align="right">
                                    $
                                  </td>
                                  <td>
                                    <input  class="form-control" require autocomplete="off" type="number"  name="ivavendedorhipo" id="ivavendedorhipo"  require onkeypress="return soloNumeros(event)"  align="center" required/>
                                  </td>
                                </tr> -->

                                 <tr>
                                        <td style=" padding-top: 25px; text-align: right;" >Total Vendedor : </td>
                                         <td >

                                        </td>
                                        <td style=" padding-top: 25px; text-align: right;" colspan="2">
                                          <div >

                                            <ul class="nav nav-tabs" style="border-style:none;">
                                              <li class="active"><a data-toggle="tab" style="border-style:none;" href="#home"></a></li>
                                              <li><a data-toggle="tab" href="#menu1">Persona Natural</a></li>
                                              <li><a data-toggle="tab" href="#menu2">Persona Juridica</a></li>

                                            </ul>

                                            <div class="tab-content" style="width: 400px">
                                              <br>
                                              <div id="home" class="tab-pane fade in active">

                                              </div>
                                              <div id="menu1" class="tab-pane fade">
                                             <input  class="form-control" require autocomplete="off" type="number" name="totalvhipo" id="totalvhipo" require onkeypress="return soloNumeros(event)" disabled align="center"  required/>
                                              </div>
                                              <div id="menu2" class="tab-pane fade">
                                               <input  class="form-control" require autocomplete="off" type="number" name="totalvhipojuridico" id="totalvhipojuridico" require onkeypress="return soloNumeros(event)" disabled align="center"  required/></td>
                                              </div>

                                            </div>
                                          </div>
                                      </tr>







                                <tr>
                                  <td colspan="4">
                                    <br>
                                    <div class="alert alert-success">
                                    <strong>Gastos Comprador he hipotecante</strong>
                                    </div>
                                  </td>
                                </tr>


                                <tr>
                                  <td>
                                  </td>
                                  <td style=" padding-top: 25px; ">
                                    Gastos Notariales Venta
                                  </td>
                                  <td align="right">
                                    $
                                  </td>
                                  <td>
                                    <input  class="form-control" require autocomplete="off" type="number"  name="gastosnotarialescompradorhipoventa" id="gastosnotarialescompradorhipoventa"  require onkeypress="return soloNumeros(event)"  align="center" disabled required/>
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                  </td>
                                  <td>
                                    Hojas Notariales Venta
                                  </td>
                                  <td align="right">
                                    $
                                  </td>

                                  <td>
                                    <input  class="form-control" require autocomplete="off" type="number"  name="hojasnotarialescompradorhipoventa" id="hojasnotarialescompradorhipoventa"  require onkeypress="return soloNumeros(event)" disabled align="center" required/>
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                  </td>
                                  <td>
                                    Gastos Notariales Hipoteca
                                  </td>
                                  <td align="right">
                                    $
                                  </td>

                                 <td style=" padding-top: 5px; ">
                                    <input  class="form-control" require autocomplete="off" type="number"  name="gastosnotarialescompradorhipohipoteca" id="gastosnotarialescompradorhipohipoteca" disabled require onkeypress="return soloNumeros(event)"  align="center" required/>
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                  </td>
                                  <td>
                                    Hojas Notariales Hipoteca
                                  </td>
                                  <td align="right">
                                    $
                                  </td>
                                  <td style=" padding-top: 5px; ">
                                    <input  class="form-control" require autocomplete="off" type="number"  name="hojasnotarialescompradorhipohipoteca" id="hojasnotarialescompradorhipohipoteca"  require onkeypress="return soloNumeros(event)" disabled align="center" required/>
                                  </td>
                                </tr>
                               <!--  <tr>
                                  <td>
                                  </td>
                                  <td>
                                   Fotocopias,Autenticaciones
                                  </td>
                                  <td align="right">
                                    $
                                  </td>

                                  <td>
                                    <input  class="form-control" require autocomplete="off" type="number"  name="fotocopiasotroscompradorhipo" id="fotocopiasotroscompradorhipo"  require onkeypress="return soloNumeros(event)"  align="center" required/>
                                  </td>
                                </tr> -->
                                <!-- <tr>
                                  <td>
                                  </td>
                                  <td>
                                    Super Notariado
                                  </td>
                                  <td align="right">
                                    $
                                  </td>
                                  <td>
                                    <input  class="form-control" require autocomplete="off" type="number"  name="supernotariadocompradorhipo" id="supernotariadocompradorhipo"  require onkeypress="return soloNumeros(event)"  align="center" required/>
                                  </td>
                                </tr>  -->
                                <!-- <tr>
                                  <td>
                                  </td>
                                  <td>
                                    Impuestos y Otros
                                  </td>
                                  <td align="right">
                                    $
                                  </td>
                                  <td>
                                    <input  class="form-control" require autocomplete="off" type="number"  name="impuestoscompradorhipo" id="impuestoscompradorhipo"  require onkeypress="return soloNumeros(event)"  align="center" required/>
                                  </td>
                                </tr>  -->
                                <tr>
                                  <td>
                                  </td>
                                  <td>
                                    Registro Venta
                                  </td>
                                  <td align="right">
                                    $
                                  </td>
                                  <td style=" padding-top: 5px; ">
                                    <input  class="form-control" require autocomplete="off" type="number"  name="registrocompradorhipoventa" id="registrocompradorhipoventa"  require onkeypress="return soloNumeros(event)"  align="center" disabled required/>
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                  </td>
                                  <td>
                                    Registro Hipoteca
                                  </td>
                                  <td align="right">
                                    $
                                  </td>
                                  <td style=" padding-top: 5px; ">
                                    <input  class="form-control" require autocomplete="off" type="number"  name="registrocompradorhipohipoteca" id="registrocompradorhipohipoteca"  require onkeypress="return soloNumeros(event)" disabled align="center" required/>
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                  </td>
                                  <td>
                                    Beneficencia
                                  </td>
                                  <td align="right">
                                    $
                                  </td>
                                  <td style=" padding-top: 5px; ">
                                    <input  class="form-control" require autocomplete="off" type="number"  name="benecompradorhipo" id="benecompradorhipo"  require onkeypress="return soloNumeros(event)"  align="center" disabled required/>
                                  </td>
                                </tr>
                                <!-- <tr>
                                  <td>
                                  </td>
                                  <td>
                                    Iva Venta
                                  </td>
                                  <td align="right">
                                    $
                                  </td>
                                  <td>
                                    <input  class="form-control" require autocomplete="off" type="number"  name="ivacompradorventahipo" id="ivacompradorventahipo"  require onkeypress="return soloNumeros(event)"  align="center" required/>
                                  </td>
                                </tr> -->
                                <!--  <tr>
                                  <td>
                                  </td>
                                  <td>
                                    Iva Hipoteca
                                  </td>
                                  <td align="right">
                                    $
                                  </td>
                                  <td>
                                    <input  class="form-control" require autocomplete="off" type="number"  name="ivacompradorhipohipoteca" id="ivacompradorhipohipoteca"  require onkeypress="return soloNumeros(event)"  align="center" required/>
                                  </td>
                                </tr> -->

                                 <tr>
                                        <td style=" padding-top: 25px; text-align: right;" >Total Comprador : $ </td>
                                         <td >

                                        </td>
                                        <td style=" padding-top: 25px; text-align: right;" colspan="2">
                                          <div >

                                            <ul class="nav nav-tabs" style="border-style:none;">
                                              <li class="active"><a data-toggle="tab" style="border-style:none;" href="#home"></a></li>
                                              <li><a data-toggle="tab" href="#menu3">Persona Natural</a></li>
                                              <li><a data-toggle="tab" href="#menu4">Persona Juridica</a></li>

                                            </ul>

                                            <div class="tab-content" style="width: 400px">
                                              <br>
                                              <div id="home" class="tab-pane fade in active">

                                              </div>
                                              <div id="menu3" class="tab-pane fade">
                                             <input  class="form-control" require autocomplete="off" type="number" name="totalchipoteca" id="totalchipoteca" require onkeypress="return soloNumeros(event)" disabled align="center"  required/>
                                              </div>
                                              <div id="menu4" class="tab-pane fade">
                                               <input  class="form-control" require autocomplete="off" type="number" name="totalchipotecajuridico" id="totalchipotecajuridico" require onkeypress="return soloNumeros(event)" disabled align="center"  required/></td>
                                              </div>

                                            </div>
                                          </div>
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
