<head>

  <meta http-equiv="Content-Type" content="text/html; charset=gb18030">
   <link rel="stylesheet" href="Davivienda/css/bootstrap.min.css">
      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>

<script src="http://portal.notaria16.com/Delta/Mono/assets/Validaciones/calculoEscrituraNotarial.js" type="text/javascript"></script>

<script src="http://portal.notaria16.com/Delta/Mono/assets/Validaciones/calculoventahipoteca.js" type="text/javascript"></script>

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
                        <ul  class="nav nav-pills">
                        			<li class="active">
                                <a  href="#1a" data-toggle="tab">Leasing</a>
                        			</li>
                        			<li><a href="#2a" data-toggle="tab">Venta - Hipoteca</a>
                        			</li>
                        			<li><a href="#3a" data-toggle="tab">Cancelación Hipoteca</a>
                        			</li>
                          		
                        		</ul>
                        
                        			<div class="tab-content clearfix">
                        			  <div class="tab-pane active" id="1a">
                        			      
                        	<div style="padding:40px;">
                        	    <table style="width:100%;">
                                      <tr>
                                        <th>Valor escritura</th>
                                        <th>
                                          $
                                        </th>
                                        <th>  <input class="form-control"  require autocomplete="off" type="number" name="ValEscritura"  id="ValEscritura"require onkeypress="return soloNumeros(event)" placeholder="Digite Valor de la escritura" align="center"  required/>
                                          
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
                                        <td style=" padding-top: 25px; text-align: right;">Total Vendedor : </td>
                                         <td>
                                         
                                        </td>
                                        <td style=" padding-top: 25px; text-align: right;"><input  class="form-control" require autocomplete="off" type="number" name="totalv" id="totalv" require onkeypress="return soloNumeros(event)" disabled align="center"  required/></td>
                                      
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
                                    </table>
                        	</div>
                                 
                                     
                                  
                                  
                        				</div>
                                
                          <div class="tab-pane" id="2a">
                                  


                            <div style="padding:40px;">
                              <table style="width:100%;">
                                <tr>
                                  <th style="width: 20%">
                                    Valor Venta
                                  </th>
                                  
                                  <th style="width: 20%">
                                    <input class="form-control"  require autocomplete="off" type="number" name="ValVenta"  id="ValVenta"require onkeypress="return soloNumeros(event)" placeholder="Digite Valor de la venta" align="center"  required/>
                                  </th> 
                                  <th style="width: 20%">
                                    Valor Hipoteca
                                  </th>

                                  <th style="width: 40%">  
                                    <input class="form-control"  require autocomplete="off" type="number" name="ValHipoteca"  id="ValHipoteca"require onkeypress="return soloNumeros(event)" placeholder="Digite Valor de la hipoteca" align="center"  required/>
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
                                   <td>
                                  </td>                                   
                                  <td style=" padding-top: 25px; text-align: right;">Total Vendedor : $ </td>
                                  <td colspan="3"style=" padding-top: 25px; text-align: right;"><input  class="form-control" require autocomplete="off" type="number" name="totalvhipo" id="totalvhipo" require onkeypress="return soloNumeros(event)" disabled align="center"  required/>
                                  </td>
                                   <td>
                                  </td>
                                      
                                </tr>







                                <tr>
                                  <td colspan="4">
                                    <br>
                                    <div class="alert alert-success">
                                    <strong>Gastos Comprador</strong> 
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
                                   <td>
                                  </td>
                                  <td style=" padding-top: 25px; text-align: right;">Total Comprador : $ </td>
                                  <td colspan="3"style=" padding-top: 25px; text-align: right;"><input  class="form-control" require autocomplete="off" type="number" name="totalchipoteca" id="totalchipoteca" require onkeypress="return soloNumeros(event)" disabled align="center"  required/>
                                  </td>

                                   <td>
                                  </td>
                                      
                                </tr>
                                
                                 

                              </table>
                            </div>
                        	</div>













                                <div class="tab-pane" id="3a">
                                  


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
                          </div>
                          

                <br>
                <br>

                              
                    </div>
                </div>
    
</div>
    </main>
                
     
 </body> 
   