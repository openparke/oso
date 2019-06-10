<script type="text/javascript">
  function formatonumeros(input)
  {
  var num = input.value.replace(/\./g,'');
  if(!isNaN(num)){
  num = num.toString().split('').reverse().join('').replace(/(?=\d*\.?)(\d{3})/g,'$1.');
  num = num.split('').reverse().join('').replace(/^[\.]/,'');
  input.value = num;
  }

  else{ alert('Solo se permiten numeros');
  input.value = input.value.replace(/[^\d\.]*/g,'');
  }
  }
</script>
   <meta http-equiv="Content-Type" content="text/html; charset=gb18030">
   <link rel="stylesheet" href="archivos/css/bootstrap.min.css">
      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>

<script src="http://dav.notaria16.co/Simuladores/Leasing.js" type="text/javascript"></script>


</head>

<body style="background-color:#FDFEFE;">
     <main style="background-color:#FDFEFE;">

<div style="padding-left:20%;padding-top:2%;zoom:100%;background-color:#FDFEFE;"align="center" >
     <div class="section-heading" >
                     <div>
                          <h1><i class="colorp fa fa-th-list"  ></i> Simulador Leasing</h1>
                          <br>
                          <p></p>
                        </div>
                      <div class="container">
<br>
                    <div class="alert alert-danger" style="width: 100%">
                      <strong>
                          Alerta!!! <br><br><br></strong> Estos simuladores son solo un aproximado, el Banco y la Notaria 16 NO se hacen responsables si el costo incrementa !!!
                    </div>
                  </div>


                </div>
                  <form class="form-horizontal" method="POST" action="?c=simuladorleasing&a=Guardar">
                  <div class="form-group">

                    <input class="form-control" name="id" type="hidden" value="<?=$p->getidsimuladorleasing()?>" >

                  </div>


           <div class="section-content" >

                 <div class="content-wrapper" style="padding-right:2%;zoom:100%;background-color:#FDFEFE;" >

                        	<div style="padding:40px;padding-top:0px;">

                        	    <table style="width:80%;">
                                      <tr>
                                        <th>Valor escritura</th>
                                        <th>
                                          $
                                        </th>
                                        <th>

                                        <input class="form-control" autocomplete="off" type="text" name="valorleasing"  id="ValEscritura" onkeyup="formatonumeros(this)" onchange="formatonumeros(this)" placeholder="Digite Valor de la escritura" align="center" value="<?=$p->getvalorleasing()?>"  required/>



                                        </th>
                                      </tr>
                                      <tr>
                                        <td colspan="3">
                                          <br>
                                          <div class="alert alert-success">
                                            <strong>Gastos Vendedor</strong>
                                          </div>
                                        </td>

                                      </tr>
                                      <tr>
                                        <td>Gastos Notariales </td>
                                         <td>
                                         $
                                        </td>
                                        <td> <input  class="form-control" require autocomplete="off" type="number"  name="gastosnotarialesvendedor" id="gastosnotarialesvendedor"  require onkeypress="return soloNumeros(event)" disabled align="center"  required/></td>
                                      </tr>
                                     <!--  <tr>
                                        <td>Hojas Notariales</td>
                                        <td> <input  class="form-control" require autocomplete="off" type="number" name="hojasnotarialesvendedor" id="hojasnotarialesvendedor"  require onkeypress="return soloNumeros(event)"  align="center"  required/></td>
                                      </tr> -->
                                     <!--  <tr>
                                        <td>Fotocopias,Autenticaciones Y Biometria</td>
                                        <td> <input  class="form-control" require autocomplete="off" type="number" name="fotocopiasotrosvendedor" id="fotocopiasotrosvendedor"  require onkeypress="return soloNumeros(event)"  align="center"  required/></td>
                                      </tr> -->

                                     <!--  <tr>
                                        <td>Super Notariado y Registro</td>
                                        <td> <input  class="form-control" require autocomplete="off" type="number" name="supernotariadovendedor" id="supernotariadovendedor"  require onkeypress="return soloNumeros(event)"  align="center"  required/></td>
                                      </tr> -->

                                      <tr>
                                        <td >Retención en la fuente </td>
                                         <td>
                                         $
                                        </td>
                                        <td style=" padding-top: 5px; "> <input  class="form-control" step=".01" require autocomplete="off" type="number" name="Retencion" id="Retencion"  require onkeypress="return soloNumeros(event)"  align="center" disabled required/>
                                        </td>
                                      </tr>
                                       <tr>
                                        <td>Iva</td>
                                         <td>
                                         $
                                        </td>
                                        <td style=" padding-top: 5px; "> <input  class="form-control" require autocomplete="off" type="number" name="ivavendedor" id="ivavendedor"  require onkeypress="return soloNumeros(event)"  align="center" disabled required/></td>
                                      </tr>


                                       <tr>
                                        <td style=" padding-top: 25px; text-align: right;">Total Vendedor :
                                        </td>
                                        <td>
                                        </td>
                                        <td style=" padding-top: 25px; text-align: right;">
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
                                               <input  class="form-control" require autocomplete="off" type="number" name="totalv" id="totalv" require onkeypress="return soloNumeros(event)" disabled align="center"  required/>
                                              </div>
                                              <div id="menu2" class="tab-pane fade">
                                               <input  class="form-control" require autocomplete="off" type="number" name="totaljuridico" id="totaljuridico" require onkeypress="return soloNumeros(event)" disabled align="center"  required/></td>
                                              </div>

                                            </div>
                                          </div>
                                          </td>
                                      </tr>


                                      <tr>
                                        <td colspan="3">
                                          <br>
                                          <div class="alert alert-success">
                                            <strong>Gastos Comprador</strong>
                                          </div>
                                        </td>

                                      </tr>

                                      <tr>
                                        <td>Gastos Notariales </td>
                                         <td>
                                         $
                                        </td>
                                        <td> <input  class="form-control" require autocomplete="off" type="number" name="gastosnotarialescomprador" id="gastosnotarialescomprador"  require onkeypress="return soloNumeros(event)"  align="center" disabled required/></td>
                                      </tr>
                                     <!--  <tr>
                                        <td>Hojas Notariales</td>
                                        <td> <input  class="form-control" require autocomplete="off" type="number" name="hojasnotarialescomprador" id="hojasnotarialescomprador"  require onkeypress="return soloNumeros(event)"  align="center"  required/></td>
                                      </tr>
                                      <tr>
                                        <td>Fotocopias,Autenticaciones Y Biometria</td>
                                        <td> <input  class="form-control" require autocomplete="off" type="number" name="fotocopiasotroscomprador" id="fotocopiasotroscomprador"  require onkeypress="return soloNumeros(event)"  align="center"  required/></td>
                                      </tr> -->

                                   <!--    <tr>
                                        <td>Super Notariado y Registro</td>
                                        <td> <input  class="form-control" require autocomplete="off" type="number" name="supernotariadocomprador" id="supernotariadocomprador"  require onkeypress="return soloNumeros(event)"  align="center"  required/></td>
                                      </tr>

                                       <tr>
                                        <td>Impuesto otros</td>
                                        <td> <input  class="form-control" require autocomplete="off" type="number" name="impotros" id="impotros"  require onkeypress="return soloNumeros(event)"  align="center"  required/></td>
                                      </tr> -->
                                        <tr>
                                        <td>Registro</td>
                                         <td>
                                         $
                                        </td>
                                        <td style=" padding-top: 5px; "> <input  class="form-control" require autocomplete="off" type="number" name="registro" id="registro"  require onkeypress="return soloNumeros(event)" align="center" disabled required/></td>
                                      </tr>
                                      <tr>
                                         <td>Beneficencia </td>
                                          <td>
                                         $
                                        </td>
                                        <td style=" padding-top: 5px; "> <input  class="form-control" require autocomplete="off" type="number" name="benefi" id="benefi"  require onkeypress="return soloNumeros(event)"  align="center" disabled required/>
                                        </td>
                                      </tr>
                                       <tr>
                                         <td>Retención</td>
                                          <td>
                                         $
                                        </td>
                                        <td style=" padding-top: 5px; "> <input  class="form-control" require autocomplete="off" type="number" name="Retencionjuridico" id="Retencionjuridico"  require onkeypress="return soloNumeros(event)"  align="center" disabled required/>
                                        </td>
                                      </tr>
                                       <tr>
                                        <td>Iva</td>
                                         <td>
                                         $
                                        </td>
                                        <td style=" padding-top: 5px; "> <input  class="form-control" require autocomplete="off" type="number" name="ivacomprador" id="ivacomprador"  require onkeypress="return soloNumeros(event)"  align="center" disabled required/></td>
                                      </tr>

                                      <tr>
                                        <td style=" padding-top: 25px; text-align: right;">Total Comprador : </td>
                                         <td>

                                        </td>
                                        <td style=" padding-top: 25px; text-align: right;"><input  class="form-control" require autocomplete="off" type="number" name="totalc" id="totalc"  require onkeypress="return soloNumeros(event)" disabled align="center"  required/></td>

                                      </tr>
                                    </table><br><br>


                                     <input  class="form-control" autocomplete="off"  type="hidden" id="correo" name="correo" placeholder="Correo Electronico" maxlength="200"  value="<?=$correo?>"/>
                                     <input  class="form-control" autocomplete="off" type="datetime"  name="fechaleasing" id="fechaleasing" style="visibility:hidden;padding-top: 0px;" value="<?php echo date("d-m-Y");?>" />


                      <br>
                      <input type="checkbox" name="check" value="check" required>He terminado mi simulación<br>


                      <br><br>


                    <input type="text" onkeyup="formatonumeros(this)" onchange="formatonumeros(this)">

                  <table>
                          <tr>
                            <td>
                            <form method="POST" id="2">
                              <button class="btn btn-primary btn-lg" type="submit" name="aceptar" value="Aceptar" ><i class="fa fa-check-square"></i>Ver Respuesta</button>
                            </form>
                            </td>


                         </tr>
                          </table>

                      </form>

          </div>





                    </div>
                </div>
            </div>
        </div>




                <br>
                <br>

    </main>



 </body>


</html>
