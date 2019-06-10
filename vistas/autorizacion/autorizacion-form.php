<!DOCTYPE html>
<html lang="en">
      <link rel="stylesheet" href="vistas/Inicio/template/css/default.css">

      <link rel='stylesheet' href='assets/css/bootstraplet.css'>


        <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>




<head>

    <!-- Tab (Persona Natural / Jurídica)-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <!-- Fin Tab (Persona Natural / Jurídica)-->


  <!-- Duplicar datos input-->
  <script language="javascript">
  function fAgrega()
  {
  document.getElementById("nombre2").value = document.getElementById("nombre").value;
  }

  function fapellido()
  {
  document.getElementById("apellido2").value = document.getElementById("apellido").value;
  }

  function ftelefono()
  {
  document.getElementById("telefono2").value = document.getElementById("telefono").value;
  }


  </script>
<!-- Fin Duplicar datos input-->





  <!-- Main CSS-->
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <meta http-equiv="Content-Type" content="text/html; charset=gb18030">

      <!-- Progress Bar-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- Fin Progress Bar-->



</head>

     <body class="app sidebar-mini rtl" style="background-color:#FDFEFE;">

    <!-- No usar click derecho
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
    Fin No usar click derecho-->



<main class="app-content" style="zoom:100%;background-color:#FDFEFE;">
       <div class="app-title">
        <div>
          <h1><i class="colorp fa fa-check-square"  ></i>  Autorización <?=$titulo?> </h1>
          <p></p>
        </div>
       </div>





             <div class="content-wrapper">
             <div class="col-md-9" style="padding-left: 10%;">
               <!-- Progress Bar-->
               <br>
                <div class="progress">
                              <div class="progress-bar progress-bar-striped active" role="progressbar"
                              aria-valuenow="5" aria-valuemin="0" aria-valuemax="100" style="width:5%">
                                5%
                              </div>
                </div>
               <br>
                <!-- Fin Progress Bar-->
              <div class="card">


              <div class="card-body" id="fondo">
              <div class="col-md-12" style="padding-left: 1%;">

                  <form action="?c=autorizacion&a=Guardar" method="POST" onsubmit="return validaCampos();">

                           <div class="form-group">

                            <input class="form-control" name="id" type="hidden" value="<?=$p->getidautorizacion()?>" >

                          </div>
                          <center>AUTORIZACI&OacuteN DE CENTRALES DE RIESGO</center>
                          <br>
                        <textarea class="form-control" id="exampleTextarea" rows="4" disabled >Declaro que la informaci&oacuten que he suministrado es ver&iacutedica y doy mi consentimiento expreso e irrevocable a DAVIVIENDA S.A. a quien represente sus derechos para consultar, en cualquier tiempo, en las centrales de riesgo toda la informaci&oacuten relevante para conocer mi desempe&ntildeo como deudor, mi capacidad de pago o para valorar el riesgo futuro de concederme un cr&eacutedito por parte de algunas de las entidades para la cual realice gesti&oacuten comercial.</textarea>


                 <br>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="form-check-input" type="checkbox"  name="aceptaprimer" id="aceptaprimer" required value="Si">       &nbsp &nbsp &nbspHe leido y acepto los terminos y condiciones de uso
                    </label>
                  </div>
                  <br>
                  <center>TRATAMIENTO DE DATOS</center>
                  <br>
                   <textarea class="form-control" id="exampleTextarea" rows="5" disabled>
Autorizo de forma expresa, previa e informa a NOTARIA 16 DE BOGOT&Aacute y/o a quien represente sus derechos para tratar la informaci&oacuten que he suministrado con los siguientes fines:
a) Consultar en cualquier tiempo en entidades p&uacuteblicas y privadas de datos toda la informaci&oacuten relevante, incluyendo sus datos personales y comerciales, financieros o de servicios;
b) consultar otros datos atinentes a sus relaciones comerciales, financieras y en general socioecon&oacutemicas que haya entregado o que consten en registros p&uacuteblicos, bases de datos p&uacuteblicas o documentos p&uacuteblicos ;
c) desarrollar procesos internos de estudio y an&aacutelisis de informaci&oacuten,
d) reporte de los resultados delos estudios y an&aacutelisis a las entidades de financiaci&oacuten para posible otorgamiento de cr&eacuteditos ;
e) destruir la documentaci&oacuten aportada en caso de no ser sujeto de cr&eacutedito.En todo caso el tratamiento de mis datos personales debe estar sujeto a la protecci&oacuten establecida en la Ley 1581 de 2018 de la Rep&uacuteblica de Colombia. sus decretos reglamentarios y las normas que los modifiquen as&iacute corno a la Pol&iacutetica de Privacidad publicada en www.notaria16.com En cualquier momento podr&eacute ejercer los derechos establecidos en estas normas y particularmente revocar la autorizaci&oacuten prestada o solicitar la supresi&oacuten de mis datos personales.Para el ejercicio del derecho en el tratamiento de los datos personales, podr&aacute contactarnos a trav&eacutes nuestro correo electr&oacutenico:tratamientoinformacion@notaria16.com . o a trav&eacutes de los medios que le sean posteriormente informados.</textarea>


                  <br>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="form-check-input" required type="checkbox"  name="aceptasegundo" id="aceptasegundo" value="Si">    &nbsp &nbsp &nbsp He leido y acepto los terminos y condiciones de uso
                    </label>
                  </div>
                  <br>

<!--
                  <div align="center" style=" padding-left: 0px"  class="content-wrapper"  >
                    <div    class="alert alert-info">
                   <strong>Seleccione si es una persona Natural o Jurídica</strong>
                 </div><br>


                  <ul  class="nav nav-pills " style=" width: 100%" >

                      <li style=" width: 50%; padding-left: 3%; padding-right: 1%;"><a class="btn-info" data-toggle="pill" href="#menu1">Persona Natural</a></li>
                      <li style=" width: 45%; "><a class="btn-info" data-toggle="pill" href="#menu2">Persona Jurídica</a></li>
                    </ul>


                    <div class="tab-content">


                        <div id="menu1" style=" background-color: white; width:100%; padding-top: 0px" class="tab-pane fade">
                                              <br>
                                              <div class="alert alert-info" >
                                               <strong>  Que tramite desea hacer (Persona Natural) </strong>
                                             <br><br>
                                             <div align="left" style=" padding-left: 20%" >
                                             <input type="radio" id="a" value="B" name="checkbox" class="mycheckbox" /> Leasing

                                             <br>
                                             <input type="radio" id="b" value="B" name="checkbox" class="mycheckbox" /> Crédito Hipotecario
                                             <br><br>
                                             </div>
                                             </div>


                          </div>


                      <div id="menu2" style=" background-color: white; width:100%; padding-top: 0px" class="tab-pane fade">
                                            <br>
                                            <div class="alert alert-info" >
                                             <strong>  Que tramite desea hacer (Persona Jurídica) </strong>
                                           <br><br>
                                           <div align="left" style=" padding-left: 20%" >
                                           <input type="radio" id="c" value="B" name="checkbox" class="mycheckbox" /> Leasing

                                           <br>
                                           <input type="radio" id="d" value="B" name="checkbox" class="mycheckbox" /> Crédito Hipotecario
                                           <br><br>
                                           </div>
                                           </div>
                                           <div class="alert alert-info" >
                                            <strong>  Datos del Cliente (Persona Jurídica)</strong>
                                          </div>

                        </div>

                    -->
                    <div align="center"class="content-wrapper"  >
                      <div    class="alert alert-info">
                     <strong> Datos de cliente</strong>
                   </div>
                        <br>

                                                                  <div class="form-group" >
                                                                      <table>
                                                                        <th style="width: 400px;">
                                                                           <label   for="nombre" >Nombre(s) del Cliente</label>
                                                                        </th>
                                                                        <th style="width: 400px;">
                                                                           <label   for="apellido" >Apellido(s) del Cliente</label>
                                                                        </th>
                                                                        <tr>
                                                                          <td>
                                                                            <input  class="form-control" autocomplete="off" onkeyup="fAgrega();" type="text" id="nombre" name="nombre" placeholder="Nombre(s) del Cliente" minlength="2"  maxlength="30"  value="<?=$p->getnombre()?>"/>
                                                                          </td>
                                                                           <td>
                                                                                <input  class="form-control" autocomplete="off" onkeyup="fapellido();" type="text" id="apellido" name="apellido" placeholder="Apellido(s) del Cliente" minlength="2" maxlength="30" value="<?=$p->getapellido()?>"/>
                                                                          </td>
                                                                        </tr>
                                                                      </table>
                                                                    </div>


                                                                    <div class="form-group" >
                                                                      <table>
                                                                        <th style="width: 400px;">
                                                                           <label   for="correo" >Tipo de documento del Cliente)</label>
                                                                        </th>
                                                                        <th style="width: 400px;">
                                                                          <label   for="telefono" >Numero de Documento del Cliente</label>
                                                                        </th>
                                                                        <tr>
                                                                          <td>
                                                                            <select class="form-control" style="height:5%" id="correo" name="correo" required  />
                                                                              <option value="">Seleccione el tipo de documento del Cliente</option>
                                                                              <option value="Cédula de ciudadanía" <?=$p->getcorreo()=="Cédula de ciudadanía" ? "selected": ""?> >Cédula de ciudadanía</option>

                                                                              <option value="Cédula de extranjería" <?=$p->getcorreo()=="Cédula de extranjería" ? "selected": ""?>>Cédula de extranjería</option>
                                                                              <option value="Nit para personas jurídicas" <?=$p->getcorreo()=="Nit para personas jurídicas" ? "selected": ""?>>Nit para personas jurídicas</option>
                                                                              <option value="Pasaporte" <?=$p->getcorreo()=="Pasaporte" ? "selected": ""?>>Pasaporte</option>

                                                                             </select>
                                                                          </td>
                                                                           <td>
                                                                                 <input  class="form-control" autocomplete="off" onkeyup="ftelefono();"  type="number" id="telefono" name="telefono" minlength="7"  maxlength="10" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" placeholder="No de Documento del Cliente" required pattern="[0-9]+" value="<?=$p->gettelefono()?>"/>

                                                                          </td>
                                                                        </tr>
                                                                      </table>
                                                                    </div>


                                                                               <br><br>
                                                                  <table>
                                                                          <tr>
                                                                            <td>
                                                                              <!-- Button trigger modal -->
                                                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                                                      <i class="fa fa-check-square"></i>Aceptar
                                                                    </button>

                                                                    <!-- Modal -->
                                                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                      <div class="modal-dialog" role="document">
                                                                        <div class="modal-content">
                                                                          <div class="modal-header">
                                                                            <i class="fa fa-exclamation-circle" style="font-size:20px;color: #FEC645 ;"></i> <h5 align="center" class="modal-title" id="exampleModalLabel"> &nbsp Autorización Para El Uso De Datos</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                              <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                          </div>
                                                                          <div class="modal-body">

                                                                            <!-- Datos Modal -->

                                                                            <div align="center" >
                                                                              <i class="fa fa-exclamation-circle" style="font-size:100px;color: #FEC645  ;"></i><br><br>
                                                                             <strong> Seguro que sus datos son correctos?</strong>
                                                                             </div>
                                                                             <br>




                                                                            <div class="alert alert-info" align="center">
                                                                             <strong>  Datos del Cliente</strong>
                                                                           </div>
                                                                            <br>



                                                                            <div class="form-group" >
                                                                                <table>
                                                                                  <th style="width: 400px;">
                                                                                     <label   for="nombre" >Nombre(s) del Cliente</label>
                                                                                  </th>
                                                                                  <th style="width: 400px;">
                                                                                     <label   for="apellido" >Apellido(s) del Cliente</label>
                                                                                  </th>
                                                                                  <tr>
                                                                                    <td>
                                                                                      <input  class="form-control"  disabled type="text" id="nombre2"/>
                                                                                    </td>
                                                                                     <td>
                                                                                       <input  class="form-control"  disabled type="text" id="apellido2"/>
                                                                                    </td>
                                                                                  </tr>
                                                                                </table>
                                                                              </div>


                                                                              <div class="form-group" >
                                                                                <label   for="telefono" >Numero de Documento del Cliente</label>
                                                                                 <input  class="form-control"  disabled type="text" id="telefono2"/>

                                                                              </div>

                                                                                <!-- Fin datos Modal -->




                                                                          </div>
                                                                          <div class="modal-footer">
                                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-cog"></i>Modificar</button>
                                                                            <form method="POST" id="2">
                                                                              <button class="btn btn-primary" type="submit" name="aceptar" value="Aceptar"  ><i class="fa fa-check-square"></i>Aceptar</button>
                                                                            </form>
                                                                          </div>
                                                                        </div>
                                                                      </div>
                                                                    </div>

                                                                  <!-- Fin Modal -->


                                                                            </td>

                                                                            <td>
                                                                             <form method="POST" id="1">
                                                                                <a href="index.php?c=autorizaciones" name="cancelar" value="cancelar" class="btn btn-secondary"><i class="	fa fa-window-close"></i>Cancelar</a>
                                                                             </form>
                                                                           </td>
                                                                         </tr>
                                                                          </table>

                      </div>
                    </div>
                  </div>


                   </form>
                           <br><br><br><br><br><br>

                </div>
              </div>
            </div>
          </div>
        </main>
        <br><br><br><br><br><br>



          <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/js/bootstrap.min.js'></script>

        <script type="text/javascript" src="assets/Validaciones/Programa.js"></script>


  </body>
  <br><br><br><br><br><br>

</html>
