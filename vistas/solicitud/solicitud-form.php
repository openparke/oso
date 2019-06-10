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
  <!-- tipo persona-->




  <script type="text/javascript">
    function tipop() {
      lista = document.solicitud.CATEGORIA;
      elegido = lista.selectedIndex;
      opcion = lista.options[elegido];

      tipopersona = opcion.text;

      escribe = document.getElementById("tipopersona");
      escribe.innerHTML = tipopersona;
      escribe.value = tipopersona;
    }
  </script>


  <!-- Fin tipo persona-->


  <!--desaparece-->


  <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
  <script type="text/javascript">
  $(document).ready(function() {
      setTimeout(function() {
          $(".aparece").fadeOut(1500);
      },15000);

      setTimeout(function() {
          $(".desaparece").fadeIn(1500);
      },16000);
  });
  </script>



  <!--fin desaparece-->


  <!-- tipo Acto-->
  <script type="text/javascript">
    function tipoact() {
      lista = document.solicitud.opcion;
      elegido = lista.selectedIndex;
      opcion = lista.options[elegido];

      tipoacto = opcion.text;

      escribe = document.getElementById("tipoacto");
      escribe.innerHTML = tipoacto;
      escribe.value = tipoacto;
    }
  </script>
  <!-- Fin tipo Acto-->



  <!-- habilitar un campo cuando se llene el otro-->
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>

  <script type="text/javascript">
    $(document).ready(function() {
      $('#ValEscritura').attr("disabled", true);
      $('#ValHipoteca').attr("disabled", true);
      $('#ValVenta').attr("disabled", true);
      $('#ValEscrituraboton').attr("disabled", true);
      $('#aceptar').attr("disabled", true);
      $('#cancelar').attr("disabled", true);
          $('#finalizado').attr("disabled", true);



      $('#correo').change(function() {
        var value = $(this).val();
        if (value.length == 0) {
          $('#ValEscritura').val('');
          $('#ValHipoteca').val('');
          $('#ValVenta').val('');

          $('#ValEscritura').attr("disabled", true);
          $('#ValHipoteca').attr("disabled", true);
          $('#ValVenta').attr("disabled", true);

        } else
          $('#ValEscritura').removeAttr("disabled");
          $('#ValHipoteca').removeAttr("disabled");
          $('#ValVenta').removeAttr("disabled");
      });

      $('#ValEscritura').change(function() {
        var value = $(this).val();
        if (value.length == 0) {
          $('#ValEscrituraboton').val('');
            $('#aceptar').val('');
              $('#cancelar').val('');
              $('#finalizado').val('');

          $('#ValEscrituraboton').attr("disabled", true);
          $('#aceptar').attr("disabled", true);
          $('#cancelar').attr("disabled", true);
            $('#finalizado').attr("disabled", true);

        } else
          $('#ValEscrituraboton').removeAttr("disabled");
          $('#aceptar').removeAttr("disabled");
          $('#cancelar').removeAttr("disabled");
            $('#finalizado').removeAttr("disabled");
      });

      $('#ValHipoteca').change(function() {
        var value = $(this).val();
        if (value.length == 0) {
          $('#ValEscrituraboton').val('');
            $('#aceptar').val('');
              $('#cancelar').val('');
              $('#finalizado').val('');

          $('#ValEscrituraboton').attr("disabled", true);
          $('#aceptar').attr("disabled", true);
          $('#cancelar').attr("disabled", true);
            $('#finalizado').attr("disabled", true);

        } else
          $('#ValEscrituraboton').removeAttr("disabled");
          $('#aceptar').removeAttr("disabled");
          $('#cancelar').removeAttr("disabled");
            $('#finalizado').removeAttr("disabled");
      });

      $('#ValVenta').change(function() {
        var value = $(this).val();
        if (value.length == 0) {
          $('#ValEscrituraboton').val('');
            $('#aceptar').val('');
              $('#cancelar').val('');
              $('#finalizado').val('');

          $('#ValEscrituraboton').attr("disabled", true);
          $('#aceptar').attr("disabled", true);
          $('#cancelar').attr("disabled", true);
            $('#finalizado').attr("disabled", true);

        } else
          $('#ValEscrituraboton').removeAttr("disabled");
          $('#aceptar').removeAttr("disabled");
          $('#cancelar').removeAttr("disabled");
            $('#finalizado').removeAttr("disabled");
      });

      $('#ValEscrituraboton').change(function() {
        var value = $(this).val();
        if (value.length == 0) {

        }

      });
    });
  </script>
  <!-- Fin habilitar un campo cuando se llene el otro-->


    <!-- boton finalizar ocultar-->




    <script type="text/javascript">
        function showveresto() {
            element = document.getElementById("veresto");
            check = document.getElementById("mirarbotones");
            if (check.checked) {
                element.style.display='block';
            }
            else {
                element.style.display='none';
            }
        }
    </script>

      <!-- fin boton finalizar ocultar-->




  <!-- Deshabilitar select-->
  <script>
    function quitarselect(select) {
      const value = select.value;
      let option = select.querySelector(`option[value="${value}"]`);
      select.disabled = true;
    }
  </script>
  <!-- Fin Deshabilitar select-->







  <!-- Ocultar/Mostrar matriculas-->
  <script>
    window.addEventListener("load", vermatriculas);

    function vermatriculas() {
      var x = document.getElementById('matriculasescondidas');
      if (x.style.display === 'none') {
        x.style.display = 'block';
      } else {
        x.style.display = 'none';
      }
    }
  </script>
  <!-- Fin Ocultar/Mostrar matriculas-->



  <!-- Ocultar/Mostrar liquidador-->

  <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $("#hide").on('click', function() {
        $("#contenidosimulador").hide();
        return false;
      });

      $("#ValEscrituraboton").on('click', function() {
        $("#contenidosimulador").show();
        return false;
      });
    });
  </script>

  <!-- Fin Ocultar/Mostrar liquidador-->

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
    <a style=" background-color:#7E7E7E;border-color:#7E7E7E " class="btn btn-primary btn-lg " href="?c=solicitud&a=registrarsolicitud">Cambiar Solicitud</a>
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

          <div class="card-body" id="fondo"   >





            <div align="center" class="content-wrapper">


              <!-- Formulario -->

              <div class="col-md-12">
                <form name="solicitud" class="form-horizontal" method="POST" enctype="multipart/form-data" action="?c=solicitud&a=Guardar">

                  <div >

                    <input class="form-control" name="id" type="hidden" value="<?=$p->getidsolicitud()?>" >
                  </div>
              </div>


              <?php
error_reporting(0);
$arr = ["Leasing", "Hipoteca" ];
$arr2 = ["Leasing ", "Hipoteca " ];


if( $_POST['opcion']=='Leasing'){
$opt=$_POST['opcion'];


$formulario = '




<!-- Formulario persona natural leasing -->

<div class="card mb-3 text-white bg-primary">
                <div class="card-body">

                  <h3> Formulario <strong>Leasing </strong> para persona : <strong>Natural </strong> .</h3>

                </div>
</div>

 <div class="alert alert-info" align="center">
 <strong > Datos del inmueble</strong>
 </div>

 <table style=" width: 90%" >
 <th>
 <!-- <label for="tipopersona" >Tipo Persona</label>-->
 </th>
 <th>
 <!-- <label for="tipoacto" >Tipo Acto</label>-->
 </th>
 <tr>
 <td>
 <input class="form-control" autocomplete="off" type="hidden" id="tipopersona" name="tipopersona" placeholder="tipopersona" value="Persona Natural"/>
 </td>
 <td>
 <input class="form-control" autocomplete="off" type="hidden" id="tipoacto" name="tipoacto" placeholder="tipoacto" value="Leasing"/>
 </td>
 </tr>
 </table>


 <!-- Primer inmueble-->

 <div align="center">
 <table>
 <th style="width: 500px;" >
 <label for="matriculainmobiliaria" >No Matricula ( del inmueble )</label>
 </th>

 <th style="width: 500px;" >
 <label for="documentoinformador">Si tiene un certificado por favor selecciónelo (esto es opcional)</label>
 </th>

 <th>
 </th>

 <tr>
 <td style=" padding-right: 20px">
 <input style="width: 100%" class="form-control" autocomplete="off" type="text" minlength="6" maxlength="50" name="matriculainmobiliaria" required placeholder="Ingrese el numero de a matricula inmobiliaria ejemplo ( 50c-000000 )" value=""/>
 </td>
 <td style="width: 500px;" align="center" >
 <input type="file" name="documentoinformador" id="documentoinformador" accept=".pdf" class="inputfile inputfile-5" data-multiple-caption="{count} files selected" style="opacity:0;font-size:100%;" value=""/>

 <label for="documentoinformador" style=" font-size:90%;" data-toggle="tooltip" ><span style=" width: 150px" ></span> <strong style=" font-size:100%;color: #fff;"> Seleccionar</strong></label>

 </td>

 <td>
 <button style="cursor: pointer;" type="button" class="btn btn-primary boton_mostrar" onClick="vermatriculas()"><strong><i class="fa fa-sort"></i></strong></button>

 </td>
 </tr>
 </table>
 </div>

 <!-- Fin Primer inmueble-->



 <div align="center" id="matriculasescondidas" >
 <br>
 <!-- Segundo inmueble-->
 <table>
 <th colspan="3" >
 <div class="alert alert-warning" align="center" >
 <strong> Si tiene mas de un numero de matricula ingréselos si no deje los espacios en blanco </strong>
 </div>

 <br>
 </th>


 <tr >
 <td style=" width: 500px;padding-right: 20px" >
 <input class="form-control" autocomplete="off" type="text" placeholder="Ingrese el numero de a matricula inmobiliaria ejemplo ( 50c-000000 )" name="estado" value=""/>
 </td>
 <td style="width: 500px;" align="center">
 <input type="file" name="documentonotaria" id="documentonotaria" accept=".pdf" class="inputfile inputfile-5" data-multiple-caption="{count} files selected" style="opacity:0;font-size:100%;" value=""/>

 <label for="documentonotaria" style=" font-size:90%;" data-toggle="tooltip" ><span style=" width: 150px" ></span> <strong style=" font-size:100%;color: #fff;"> Seleccionar</strong></label>
 </td>
 <td>
 <button type="hidden" style="visibility:hidden;padding-top: 0px;" class="btn btn-primary" ><strong> o </strong></button>
 </td>
 </tr>
 </table>
 <!-- Fin Segundo inmueble-->
 <br>
 <!-- Tercer inmueble-->
 <table>
 <th style="width: 500px;" >
 </th>

 <th style="width: 500px;" >
 </th>

 <th>
 </th>

 <tr >
 <td style=" padding-right: 20px" >
 <input class="form-control" autocomplete="off" type="text" placeholder="Ingrese el numero de a matricula inmobiliaria ejemplo ( 50c-000000 )" name="terceramatricula" value=""/>
 </td>
 <td style="width: 500px;" align="center">
 <input type="file" name="tercerdocumento" id="tercerdocumento" accept=".pdf" class="inputfile inputfile-5" data-multiple-caption="{count} files selected" style="opacity:0;font-size:100%;" value=""/>

 <label for="tercerdocumento" style=" font-size:90%;" data-toggle="tooltip" ><span style=" width: 150px" ></span> <strong style=" font-size:100%;color: #fff;"> Seleccionar</strong></label>

 </td>
 <td>
 <button type="hidden" style="visibility:hidden;padding-top: 0px;" class="btn btn-primary" ><strong> o </strong></button>
 </td>
 </tr>
 </table>
 <!-- Fin Tercer inmueble-->
 <br>
 <!-- Cuarto inmueble-->
 <table>
 <th style="width: 500px;" >
 </th>

 <th style="width: 500px;" >
 </th>

 <th>
 </th>

 <tr >
 <td style=" padding-right: 20px" >
 <input class="form-control" autocomplete="off" type="text" placeholder="Ingrese el numero de a matricula inmobiliaria ejemplo ( 50c-000000 )" name="cuartamatricula" value=""/>
 </td>
 <td style="width: 500px;" align="center">
 <input type="file" name="cuartodocumento" id="cuartodocumento" accept=".pdf" class="inputfile inputfile-5" data-multiple-caption="{count} files selected" style="opacity:0;font-size:100%;" value=""/>

 <label for="cuartodocumento" style=" font-size:90%;" data-toggle="tooltip" ><span style=" width: 150px" ></span> <strong style=" font-size:100%;color: #fff;"> Seleccionar</strong></label>

 </td>
 <td>
 <button type="hidden" style="visibility:hidden;padding-top: 0px;" class="btn btn-primary" ><strong> o </strong></button>
 </td>
 </tr>
 </table>
 <!--Fin Cuarto inmueble-->
 <br>
 <!-- Quinto inmueble-->
 <table>
 <th style="width: 500px;" >
 </th>

 <th style="width: 500px;" >
 </th>

 <th>
 </th>

 <tr >
 <td style=" padding-right: 20px" >
 <input class="form-control" autocomplete="off" type="text" placeholder="Ingrese el numero de a matricula inmobiliaria ejemplo ( 50c-000000 )" name="quintamatricula" value=""/>
 </td>
 <td style="width: 500px;" align="center">
 <input type="file" name="quintodocumento" id="quintodocumento" accept=".pdf" class="inputfile inputfile-5" data-multiple-caption="{count} files selected" style="opacity:0;font-size:100%;" value=""/>

 <label for="quintodocumento" style=" font-size:90%;" data-toggle="tooltip" ><span style=" width: 150px" ></span> <strong style=" font-size:100%;color: #fff;"> Seleccionar</strong></label>

 </td>
 <td>
 <button type="hidden" style="visibility:hidden;padding-top: 0px;" class="btn btn-primary" ><strong> o </strong></button>
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
 <input class="form-control" autocomplete="off" type="number" id="cedulapropietario" name="cedulapropietario" placeholder="Ingrese el numero de Documento o el Nit del propietario ( Futuro vendedor )" required value=""/>
 </td>
 <td>
 <select class="form-control" style="height:5%" name="estadocivilpropietario" required />

 <option value="">Seleccione el estado civil del propietario ( Futuro vendedor )</option>
 <option value="No se sabe">No se sabe</option>
 <option value="Entidad">Entidad</option>
 <option value="Casado con sociedad conyugal vigente">Casado con sociedad conyugal vigente</option>
 <option value="Casado con sociedad conyugal disuelta y liquidada">Casado con sociedad conyugal disuelta y liquidada</option>
 <option value="Soltero sin unión marital de hecho">Soltero sin unión marital de hecho</option>

 <option value="Soltero con unión marital de hecho">Soltero con unión marital de hecho</option>

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
 <label for="nombrelocatario" >Primer nombre del locatario </label>
 </th>
 <th style="width: 500px;">
 <label for="nombreotrolocatario" >Segundo nombre del locatario </label>
 </th>
 <tr>
 <td style=" padding-right: 20px">
 <input class="form-control" autocomplete="off" type="text" name="nombrelocatario" required placeholder="Ingrese el primer nombre del locatario ( Futuro comprador )" value=""/>
 </td>
 <td>
 <input class="form-control" autocomplete="off" type="text" name="nombreotrolocatario" placeholder="Ingrese el segundo nombre del locatario (opcional)" value=""/>
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
 <input class="form-control" autocomplete="off" type="text" placeholder="Ingrese el primer apellido del locatario ( Futuro comprador )" name="primerapellido" required value=""/>
 </td>
 <td>
 <input class="form-control" autocomplete="off" type="text" name="segundoapellido" placeholder="Ingrese el segundo apellido del locatario (opcional)" value=""/>
 </td>
 </tr>
 </table>
 </div>
 <br>

 <div align="center">
 <table>
 <th style="width: 500px;">
 <label for="cedulalocatario" >Numero de Documento del Locatario </label>
 </th>
 <th style="width: 500px;">
  <label for="tipodocumentolocatario" >Tipo de documento Locatario</label>
  </th>
 <tr>
 <td style=" padding-right: 20px">
 <input class="form-control" autocomplete="off" type="number" name="cedulalocatario" required placeholder="Ingrese el numero de documento del Locatario ( Futuro comprador )" value=""/>
 </td>
 <td>

 <select class="form-control" style="height:5%" name="tipodocumentolocatario" required />
 <option value="">Seleccione el tipo de documento del Locatario ( Futuro comprador )</option>
 <option value="Cédula de ciudadanía">Cédula de ciudadanía</option>
 <option value="Cédula de extranjería">Cédula de extranjería</option>
 <option value="Nit para personas jurídicas">Nit para personas jurídicas</option>
 <option value="Pasaporte">Pasaporte</option>
 </select>
 </td>
 </tr>
 </table>
 </div>
 <br>


 <div align="center">
 <table>
 <th style="width: 500px;">
 <label for="numerosolicitud" >Correo Electrónico</label>
 </th>
 <th style="width: 500px;">

  </th>
 <tr>
 <td style=" padding-right: 20px">
 <input id="correo" class="form-control" autocomplete="off" type="email" name="numerosolicitud" required placeholder="Ingrese el correo electrónico del Locatario ( Futuro comprador )" value=""/>
 </td>
 <td>
 </td>
 </tr>
 </table>
 </div>
 <br>



 <div class="alert alert-info">
 <strong> Si tiene alguna observación sobre esta solicitud por favor ingrésela ( esto es opcional )</strong>
 </div>


 <div class="">
 <label for="observacion" >Observaciones</label>

 <textarea class="form-control" autocomplete="off" type="text" name="observacion" rows="4" cols="50"></textarea>
 </div>

 <input class="form-control" autocomplete="off" type="hidden" id="ValHipoteca" name="ValHipoteca" placeholder="ValHipoteca" value=""/>
 <input class="form-control" autocomplete="off" type="hidden" id="ValVenta" name="ValVenta" placeholder="ValVenta" value=""/>
 <br>

 <div class="alert alert-info">
 <strong> Liquidador</strong>
 </div>


 <div >

 <input class="form-control" autocomplete="off" type="hidden" placeholder="Ingrese el primer apellido del locatario ( Futuro comprador )" name="fk_idautorizacion" value=""/>

 </div>



 <!-- Simulador -->

 <br>




 <br>

 <table style="width: 96%">
 <tr>
 <th>Valor escritura</th>
 <th>
 $
 </th>
 <th>
 <input class="form-control" require autocomplete="off" type="number" name="ValEscritura" id="ValEscritura" onkeypress="return soloNumeros(event)" placeholder="Digite Valor de la escritura" align="center" value="" required/>

 </th>
 <th style=" padding-left: 1%" >
 <p><a class="btn btn-primary" href="#" id="ValEscrituraboton"><i class="fa fa-eye"></i> Simular</a></p>


 </th>
 </table>
 <br>

 <div id="contenidosimulador" class="col-lg-12" style="display: none;">
 <table style="width: 96%">


 </tr>
 <tr>
 <td colspan="3">
 <br>
 <div class="alert alert-danger" style="width: 100%">
 <strong> Alerta!!! <br><br><br></strong> Estos simuladores son solo un aproximado, el Banco y la Notaria 16 NO se hacen responsables si el costo incrementa !!!
 </div>
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
 <td> <input class="form-control" require autocomplete="off" type="number" name="gastosnotarialesvendedor" id="gastosnotarialesvendedor" require onkeypress="return soloNumeros(event)" disabled align="center" required/></td>
 </tr>
 <!-- <tr>
 <td>Hojas Notariales</td>
 <td> <input class="form-control" require autocomplete="off" type="number" name="hojasnotarialesvendedor" id="hojasnotarialesvendedor" require onkeypress="return soloNumeros(event)" align="center" required/></td>
 </tr> -->
 <!-- <tr>
 <td>Fotocopias,Autenticaciones Y Biometria</td>
 <td> <input class="form-control" require autocomplete="off" type="number" name="fotocopiasotrosvendedor" id="fotocopiasotrosvendedor" require onkeypress="return soloNumeros(event)" align="center" required/></td>
 </tr> -->

 <!-- <tr>
 <td>Super Notariado y Registro</td>
 <td> <input class="form-control" require autocomplete="off" type="number" name="supernotariadovendedor" id="supernotariadovendedor" require onkeypress="return soloNumeros(event)" align="center" required/></td>
 </tr> -->

 <tr>
 <td >Retención en la fuente </td>
 <td>
 $
 </td>
 <td style=" padding-top: 5px; "> <input class="form-control" step=".01" require autocomplete="off" type="number" name="Retencion" id="Retencion" require onkeypress="return soloNumeros(event)" align="center" disabled required/>
 </td>
 </tr>
 <tr>
 <td>Iva</td>
 <td>
 $
 </td>
 <td style=" padding-top: 5px; "> <input class="form-control" require autocomplete="off" type="number" name="ivavendedor" id="ivavendedor" require onkeypress="return soloNumeros(event)" align="center" disabled required/></td>
 </tr>


 <tr>
 <td style=" padding-top: 25px; text-align: right;">Total Vendedor :
 </td>
 <td>
 </td>
 <td style=" padding-top: 25px; text-align: right;">

 <input class="form-control" require autocomplete="off" type="number" name="totalv" id="totalv" require onkeypress="return soloNumeros(event)" disabled align="center" required/>

 <!-- <input class="form-control" require autocomplete="off" type="number" name="totaljuridico" id="totaljuridico" require onkeypress="return soloNumeros(event)" disabled align="center" required/>--></td>

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
 <td> <input class="form-control" require autocomplete="off" type="number" name="gastosnotarialescomprador" id="gastosnotarialescomprador" require onkeypress="return soloNumeros(event)" align="center" disabled required/></td>
 </tr>
 <!-- <tr>
 <td>Hojas Notariales</td>
 <td> <input class="form-control" require autocomplete="off" type="number" name="hojasnotarialescomprador" id="hojasnotarialescomprador" require onkeypress="return soloNumeros(event)" align="center" required/></td>
 </tr>
 <tr>
 <td>Fotocopias,Autenticaciones Y Biometria</td>
 <td> <input class="form-control" require autocomplete="off" type="number" name="fotocopiasotroscomprador" id="fotocopiasotroscomprador" require onkeypress="return soloNumeros(event)" align="center" required/></td>
 </tr> -->

 <!-- <tr>
 <td>Super Notariado y Registro</td>
 <td> <input class="form-control" require autocomplete="off" type="number" name="supernotariadocomprador" id="supernotariadocomprador" require onkeypress="return soloNumeros(event)" align="center" required/></td>
 </tr>

 <tr>
 <td>Impuesto otros</td>
 <td> <input class="form-control" require autocomplete="off" type="number" name="impotros" id="impotros" require onkeypress="return soloNumeros(event)" align="center" required/></td>
 </tr> -->
 <tr>
 <td>Registro</td>
 <td>
 $
 </td>
 <td style=" padding-top: 5px; "> <input class="form-control" require autocomplete="off" type="number" name="registro" id="registro" require onkeypress="return soloNumeros(event)" align="center" disabled required/></td>
 </tr>
 <tr>
 <td>Beneficencia </td>
 <td>
 $
 </td>
 <td style=" padding-top: 5px; "> <input class="form-control" require autocomplete="off" type="number" name="benefi" id="benefi" require onkeypress="return soloNumeros(event)" align="center" disabled required/>
 </td>
 </tr>

 <tr>
 <td>Iva</td>
 <td>
 $
 </td>
 <td style=" padding-top: 5px; "> <input class="form-control" require autocomplete="off" type="number" name="ivacomprador" id="ivacomprador" require onkeypress="return soloNumeros(event)" align="center" disabled required/></td>
 </tr>

 <tr>
 <td style=" padding-top: 25px; text-align: right;">Total Comprador : </td>
 <td>

 </td>
 <td style=" padding-top: 25px; text-align: right;"><input class="form-control" require autocomplete="off" type="number" name="totalc" id="totalc" require onkeypress="return soloNumeros(event)" disabled align="center" required/></td>

 </tr>
 </table>
 <br>

<label  align="center" >He finalizado la solicitud</label> <br>
 <input class="animated-checkbox" type="checkbox" name="mirarbotones" id="mirarbotones" style=" zoom: 200% "   required  value="1" onchange="javascript:showveresto()" />





 <!-- Fin Simulador -->







<!--Fin Formulario persona natural leasing -->




';

}



else if( $_POST['opcion']=='Hipoteca'){
$opt=$_POST['opcion'];

$formulario = '

<!--Formulario persona natural Hipoteca -->

<div class="card mb-3 text-white bg-primary">
                <div class="card-body">

                  <h3> Formulario de <strong> Credito Hipotecario </strong> para persona : <strong>Natural </strong> .</h3>

                </div>
</div>

 <div class="alert alert-info" align="center">
 <strong > Datos del inmueble</strong>
 </div>

 <table style=" width: 90%" >
 <th>
 <!-- <label for="tipopersona" >Tipo Persona</label>-->
 </th>
 <th>
 <!-- <label for="tipoacto" >Tipo Acto</label>-->
 </th>
 <tr>
 <td>
 <input class="form-control" autocomplete="off" type="hidden" id="tipopersona" name="tipopersona" placeholder="tipopersona" value="Persona Natural"/>
 </td>
 <td>
 <input class="form-control" autocomplete="off" type="hidden" id="tipoacto" name="tipoacto" placeholder="tipoacto" value="Hipoteca"/>
 </td>
 </tr>
 </table>


 <!-- Primer inmueble-->

 <div align="center">
 <table>
 <th style="width: 500px;" >
 <label for="matriculainmobiliaria" >No Matricula ( del inmueble )</label>
 </th>

 <th style="width: 500px;" >
 <label for="documentoinformador">Si tiene un certificado por favor selecciónelo (esto es opcional)</label>
 </th>

 <th>
 </th>

 <tr>
 <td style=" padding-right: 20px">
 <input style="width: 100%" class="form-control" autocomplete="off" type="text" minlength="6" maxlength="50" name="matriculainmobiliaria" required placeholder="Ingrese el numero de a matricula inmobiliaria ejemplo ( 50c-000000 )" value=""/>
 </td>
 <td style="width: 500px;" align="center" >
 <input type="file" name="documentoinformador" id="documentoinformador" accept=".pdf" class="inputfile inputfile-5" data-multiple-caption="{count} files selected" style="opacity:0;font-size:100%;" value=""/>

 <label for="documentoinformador" style=" font-size:90%;" data-toggle="tooltip" ><span style=" width: 150px" ></span> <strong style=" font-size:100%;color: #fff;"> Seleccionar</strong></label>

 </td>

 <td>
 <button style="cursor: pointer;" type="button" class="btn btn-primary boton_mostrar" onClick="vermatriculas()"><strong><i class="fa fa-sort"></i></strong></button>

 </td>
 </tr>
 </table>
 </div>

 <!-- Fin Primer inmueble-->



 <div align="center" id="matriculasescondidas" >
 <br>
 <!-- Segundo inmueble-->
 <table>
 <th colspan="3" >
 <div class="alert alert-warning" align="center" >
 <strong> Si tiene mas de un numero de matricula ingréselos si no deje los espacios en blanco </strong>
 </div>

 <br>
 </th>


 <tr >
 <td style=" width: 500px;padding-right: 20px" >
 <input class="form-control" autocomplete="off" type="text" placeholder="Ingrese el numero de a matricula inmobiliaria ejemplo ( 50c-000000 )" name="estado" value=""/>
 </td>
 <td style="width: 500px;" align="center">
 <input type="file" name="documentonotaria" id="documentonotaria" accept=".pdf" class="inputfile inputfile-5" data-multiple-caption="{count} files selected" style="opacity:0;font-size:100%;" value=""/>

 <label for="documentonotaria" style=" font-size:90%;" data-toggle="tooltip" ><span style=" width: 150px" ></span> <strong style=" font-size:100%;color: #fff;"> Seleccionar</strong></label>
 </td>
 <td>
 <button type="hidden" style="visibility:hidden;padding-top: 0px;" class="btn btn-primary" ><strong> o </strong></button>
 </td>
 </tr>
 </table>
 <!-- Fin Segundo inmueble-->
 <br>
 <!-- Tercer inmueble-->
 <table>
 <th style="width: 500px;" >
 </th>

 <th style="width: 500px;" >
 </th>

 <th>
 </th>

 <tr >
 <td style=" padding-right: 20px" >
 <input class="form-control" autocomplete="off" type="text" placeholder="Ingrese el numero de a matricula inmobiliaria ejemplo ( 50c-000000 )" name="terceramatricula" value=""/>
 </td>
 <td style="width: 500px;" align="center">
 <input type="file" name="tercerdocumento" id="tercerdocumento" accept=".pdf" class="inputfile inputfile-5" data-multiple-caption="{count} files selected" style="opacity:0;font-size:100%;" value=""/>

 <label for="tercerdocumento" style=" font-size:90%;" data-toggle="tooltip" ><span style=" width: 150px" ></span> <strong style=" font-size:100%;color: #fff;"> Seleccionar</strong></label>

 </td>
 <td>
 <button type="hidden" style="visibility:hidden;padding-top: 0px;" class="btn btn-primary" ><strong> o </strong></button>
 </td>
 </tr>
 </table>
 <!-- Fin Tercer inmueble-->
 <br>
 <!-- Cuarto inmueble-->
 <table>
 <th style="width: 500px;" >
 </th>

 <th style="width: 500px;" >
 </th>

 <th>
 </th>

 <tr >
 <td style=" padding-right: 20px" >
 <input class="form-control" autocomplete="off" type="text" placeholder="Ingrese el numero de a matricula inmobiliaria ejemplo ( 50c-000000 )" name="cuartamatricula" value=""/>
 </td>
 <td style="width: 500px;" align="center">
 <input type="file" name="cuartodocumento" id="cuartodocumento" accept=".pdf" class="inputfile inputfile-5" data-multiple-caption="{count} files selected" style="opacity:0;font-size:100%;" value=""/>

 <label for="cuartodocumento" style=" font-size:90%;" data-toggle="tooltip" ><span style=" width: 150px" ></span> <strong style=" font-size:100%;color: #fff;"> Seleccionar</strong></label>

 </td>
 <td>
 <button type="hidden" style="visibility:hidden;padding-top: 0px;" class="btn btn-primary" ><strong> o </strong></button>
 </td>
 </tr>
 </table>
 <!--Fin Cuarto inmueble-->
 <br>
 <!-- Quinto inmueble-->
 <table>
 <th style="width: 500px;" >
 </th>

 <th style="width: 500px;" >
 </th>

 <th>
 </th>

 <tr >
 <td style=" padding-right: 20px" >
 <input class="form-control" autocomplete="off" type="text" placeholder="Ingrese el numero de a matricula inmobiliaria ejemplo ( 50c-000000 )" name="quintamatricula" value=""/>
 </td>
 <td style="width: 500px;" align="center">
 <input type="file" name="quintodocumento" id="quintodocumento" accept=".pdf" class="inputfile inputfile-5" data-multiple-caption="{count} files selected" style="opacity:0;font-size:100%;" value=""/>

 <label for="quintodocumento" style=" font-size:90%;" data-toggle="tooltip" ><span style=" width: 150px" ></span> <strong style=" font-size:100%;color: #fff;"> Seleccionar</strong></label>

 </td>
 <td>
 <button type="hidden" style="visibility:hidden;padding-top: 0px;" class="btn btn-primary" ><strong> o </strong></button>
 </td>
 </tr>
 </table>
 <!-- Quinto inmueble-->


 </div>
 <br>
 <!-- Fin Segundo inmueble-->

 <br>

 <div class="alert alert-info" align="center">
 <strong> Datos del Actual propietario </strong>
 </div>
 <br>


 <div align="center">
 <table>
 <th style="width: 500px;">
 <label for="cedulapropietario" >No de Documento o Nit del Actual propietario  </label>
 </th>
 <th style="width: 500px;">
 <label for="estadocivilpropietario" >Estado Civil Actual propietario  </label>
 </th>
 <tr>
 <td style=" padding-right: 20px">
 <input class="form-control" autocomplete="off" type="number" id="cedulapropietario" name="cedulapropietario" placeholder="Ingrese el numero de Documento o el Nit del propietario ( Futuro vendedor )" required value=""/>
 </td>
 <td>
 <select class="form-control" style="height:5%" name="estadocivilpropietario" required />

 <option value="">Seleccione el estado civil del propietario ( Futuro vendedor )</option>
 <option value="No se sabe">No se sabe</option>
 <option value="Entidad">Entidad</option>
 <option value="Casado con sociedad conyugal vigente">Casado con sociedad conyugal vigente</option>
 <option value="Casado con sociedad conyugal disuelta y liquidada">Casado con sociedad conyugal disuelta y liquidada</option>
 <option value="Soltero sin unión marital de hecho">Soltero sin unión marital de hecho</option>

 <option value="Soltero con unión marital de hecho">Soltero con unión marital de hecho</option>

 </select>
 </td>
 </tr>
 </table>
 </div>
 <br>
 <br>


 <div class="alert alert-info" align="center">
 <strong> Datos del Locatario ( Deudor Hipotecario )</strong>
 </div>
 <br>

 <div align="center">
 <table>
 <th style="width: 500px;">
 <label for="nombrelocatario" >Primer nombre del Deudor </label>
 </th>
 <th style="width: 500px;">
 <label for="nombreotrolocatario" >Segundo nombre del Deudor</label>
 </th>
 <tr>
 <td style=" padding-right: 20px">
 <input class="form-control" autocomplete="off" type="text" name="nombrelocatario" required placeholder="Ingrese el primer nombre del Deudor Hipotecario" value=""/>
 </td>
 <td>
 <input class="form-control" autocomplete="off" type="text" name="nombreotrolocatario" placeholder="Ingrese el segundo nombre del Deudor Hipotecario (opcional)" value=""/>
 </td>
 </tr>
 </table>
 </div>
 <br>
 <div align="center">
 <table>
 <th style="width: 500px;">
 <label for="primerapellido" >Primer apellido del Deudor  </label>
 </th>
 <th style="width: 500px;">
 <label for="segundoapellido" >Segundo apellido del Deudor </label>
 </th>
 <tr>
 <td style=" padding-right: 20px">
 <input class="form-control" autocomplete="off" type="text" placeholder="Ingrese el primer apellido del Deudor Hipotecario" name="primerapellido" required value=""/>
 </td>
 <td>
 <input class="form-control" autocomplete="off" type="text" name="segundoapellido" placeholder="Ingrese el segundo apellido del Deudor Hipotecario (opcional)" value=""/>
 </td>
 </tr>
 </table>
 </div>
 <br>

 <div align="center">
 <table>
 <th style="width: 500px;">
 <label for="cedulalocatario" >Numero de Documento del Deudor  </label>
 </th>
 <th style="width: 500px;">
  <label for="tipodocumentolocatario" >Tipo de documento Deudor </label>
  </th>
 <tr>
 <td style=" padding-right: 20px">
 <input class="form-control" autocomplete="off" type="number" name="cedulalocatario" required placeholder="Ingrese el numero de documento del Deudor Hipotecario" value=""/>
 </td>
 <td>
 <select class="form-control" style="height:5%" name="tipodocumentolocatario" required />
 <option value="">Seleccione el tipo de documento del Locatario ( Futuro comprador )</option>
 <option value="Cédula de ciudadanía">Cédula de ciudadanía</option>
 <option value="Cédula de extranjería">Cédula de extranjería</option>
 <option value="Nit para personas jurídicas">Nit para personas jurídicas</option>
 <option value="Pasaporte">Pasaporte</option>
 </select>
 </td>
 </tr>
 </table>
 </div>
 <br>


 <div align="center">
 <table>
 <th style="width: 500px;">
 <label for="numerosolicitud" >Correo Electrónico</label>
 </th>
 <th style="width: 500px;">

  </th>
 <tr>
 <td style=" padding-right: 20px">
 <input id="correo" class="form-control" autocomplete="off" type="email" name="numerosolicitud" required placeholder="Ingrese el correo electrónico del Deudor Hipotecario" value=""/>
 </td>
 <td>
 </td>
 </tr>
 </table>
 </div>
 <br>



 <div class="alert alert-info">
 <strong> Si tiene alguna observación sobre esta solicitud por favor ingrésela ( esto es opcional )</strong>
 </div>


 <div class="">
 <label for="observacion" >Observaciones</label>

 <textarea class="form-control" autocomplete="off" type="text" name="observacion" rows="4" cols="50"></textarea>
 </div>
 <input class="form-control" autocomplete="off" type="hidden" id="ValEscritura" name="ValEscritura" placeholder="ValVenta" value=""/>
 <br>

 <div class="alert alert-info">
 <strong> Liquidador</strong>
 </div>


 <div >

 <input class="form-control" autocomplete="off" type="hidden" placeholder="Ingrese el primer apellido del locatario ( Futuro comprador )" name="fk_idautorizacion" value=""/>

 </div>



 <!-- Simulador -->

 <br>




 <div align="center" style=" padding-left: 5%" >
  <table  style="width:100%;">
    <th>
      <label   >Valor Venta</label>
    </th>
    <th>
      <label   >Valor Hipoteca</label>
    </th>
    <th ><label ></label>
    </th>
    <tr>
      <td style=" padding-right: 20px">
        <input class="form-control" require autocomplete="off" type="number" name="ValVenta" id="ValVenta" onkeypress="return soloNumeros(event)" placeholder="Digite Valor de la venta" align="center" value="" required/>

      </td>
      <td style=" padding-right: 20px">
        <input class="form-control" require autocomplete="off" type="number" name="ValHipoteca" id="ValHipoteca" onkeypress="return soloNumeros(event)" placeholder="Digite Valor de la Hipoteca" align="center" value="" required/>

      </td>
      <td>

      <a class="btn btn-primary" href="#" id="ValEscrituraboton"><i class="fa fa-eye"></i> Simular</a>

      </td>
    </tr>
  </table>
  <br>


</div>



 <div id="contenidosimulador" class="col-lg-12" style="display: none;">
   <table style="width:100%;">
     <tr>

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

                <!-- <ul class="nav nav-tabs" style="border-style:none;">
                   <li class="active"><a data-toggle="tab" style="border-style:none;" href="#home"></a></li>
                   <li><a data-toggle="tab" href="#menu3">Persona Natural</a></li>
                   <li><a data-toggle="tab" href="#menu4">Persona Juridica</a></li>

                 </ul>-->

                <!--  <div class="tab-content" style="width: 400px">
                   <br>
                   <div id="home" class="tab-pane fade in active">

                   </div>
                   <div id="menu3" class="tab-pane fade">-->
                  <input  class="form-control" require autocomplete="off" type="number" name="totalchipoteca" id="totalchipoteca" require onkeypress="return soloNumeros(event)" disabled align="center"  required/>
                <!--    </div>-->
                  <!--  <div id="menu4" class="tab-pane fade">
                    <input  class="form-control" require autocomplete="off" type="number" name="totalchipotecajuridico" id="totalchipotecajuridico" require onkeypress="return soloNumeros(event)" disabled align="center"  required/></td>
                   </div>-->

                 </div>
               </div>
           </tr>




   </table>
 <br>

  <label  align="center" >He finalizado la solicitud</label> <br>
   <input class="animated-checkbox" type="checkbox" name="mirarbotones" id="mirarbotones" style=" zoom: 200% "   required  value="1" onchange="javascript:showveresto()" />

 </div>

 <br><br>


 <!-- Fin Simulador -->



<!--Fin Formulario persona natural Hipoteca -->



';

}

else{

}



if( $_POST['opcion2']=='Leasing '){
$opt=$_POST['opcion2'];


$formulario = '



<!--Formulario persona Juridica leasing -->
<div class="card mb-3 text-white bg-primary">
    <div class="card-body">
      <h3> Formulario <strong>Leasing </strong> para persona : <strong>Jurídica </strong> .</h3>
    </div>
</div>

 <div class="alert alert-info" align="center">
 <strong > Datos del inmueble</strong>
 </div>

 <table style=" width: 90%" >
 <th>
 <!-- <label for="tipopersona" >Tipo Persona</label>-->
 </th>
 <th>
 <!-- <label for="tipoacto" >Tipo Acto</label>-->
 </th>
 <tr>
 <td>
 <input class="form-control" autocomplete="off" type="hidden" id="tipopersona" name="tipopersona" placeholder="tipopersona" value="Persona Jurídica"/>
 </td>
 <td>
 <input class="form-control" autocomplete="off" type="hidden" id="tipoacto" name="tipoacto" placeholder="tipoacto" value="Leasing"/>
 </td>
 </tr>
 </table>


 <!-- Primer inmueble-->

 <div align="center">
 <table>
 <th style="width: 500px;" >
 <label for="matriculainmobiliaria" >No Matricula ( del inmueble )</label>
 </th>

 <th style="width: 500px;" >
 <label for="documentoinformador">Si tiene un certificado por favor selecciónelo (esto es opcional)</label>
 </th>

 <th>
 </th>

 <tr>
 <td style=" padding-right: 20px">
 <input style="width: 100%" class="form-control" autocomplete="off" type="text" minlength="6" maxlength="50" name="matriculainmobiliaria" required placeholder="Ingrese el numero de a matricula inmobiliaria ejemplo ( 50c-000000 )" value=""/>
 </td>
 <td style="width: 500px;" align="center" >
 <input type="file" name="documentoinformador" id="documentoinformador" accept=".pdf" class="inputfile inputfile-5" data-multiple-caption="{count} files selected" style="opacity:0;font-size:100%;" value=""/>

 <label for="documentoinformador" style=" font-size:90%;" data-toggle="tooltip" ><span style=" width: 150px" ></span> <strong style=" font-size:100%;color: #fff;"> Seleccionar</strong></label>

 </td>

 <td>
 <button style="cursor: pointer;" type="button" class="btn btn-primary boton_mostrar" onClick="vermatriculas()"><strong><i class="fa fa-sort"></i></strong></button>

 </td>
 </tr>
 </table>
 </div>

 <!-- Fin Primer inmueble-->



 <div align="center" id="matriculasescondidas" >
 <br>
 <!-- Segundo inmueble-->
 <table>
 <th colspan="3" >
 <div class="alert alert-warning" align="center" >
 <strong> Si tiene mas de un numero de matricula ingréselos si no deje los espacios en blanco </strong>
 </div>

 <br>
 </th>


 <tr >
 <td style=" width: 500px;padding-right: 20px" >
 <input class="form-control" autocomplete="off" type="text" placeholder="Ingrese el numero de a matricula inmobiliaria ejemplo ( 50c-000000 )" name="estado" value=""/>
 </td>
 <td style="width: 500px;" align="center">
 <input type="file" name="documentonotaria" id="documentonotaria" accept=".pdf" class="inputfile inputfile-5" data-multiple-caption="{count} files selected" style="opacity:0;font-size:100%;" value=""/>

 <label for="documentonotaria" style=" font-size:90%;" data-toggle="tooltip" ><span style=" width: 150px" ></span> <strong style=" font-size:100%;color: #fff;"> Seleccionar</strong></label>
 </td>
 <td>
 <button type="hidden" style="visibility:hidden;padding-top: 0px;" class="btn btn-primary" ><strong> o </strong></button>
 </td>
 </tr>
 </table>
 <!-- Fin Segundo inmueble-->
 <br>
 <!-- Tercer inmueble-->
 <table>
 <th style="width: 500px;" >
 </th>

 <th style="width: 500px;" >
 </th>

 <th>
 </th>

 <tr >
 <td style=" padding-right: 20px" >
 <input class="form-control" autocomplete="off" type="text" placeholder="Ingrese el numero de a matricula inmobiliaria ejemplo ( 50c-000000 )" name="terceramatricula" value=""/>
 </td>
 <td style="width: 500px;" align="center">
 <input type="file" name="tercerdocumento" id="tercerdocumento" accept=".pdf" class="inputfile inputfile-5" data-multiple-caption="{count} files selected" style="opacity:0;font-size:100%;" value=""/>

 <label for="tercerdocumento" style=" font-size:90%;" data-toggle="tooltip" ><span style=" width: 150px" ></span> <strong style=" font-size:100%;color: #fff;"> Seleccionar</strong></label>

 </td>
 <td>
 <button type="hidden" style="visibility:hidden;padding-top: 0px;" class="btn btn-primary" ><strong> o </strong></button>
 </td>
 </tr>
 </table>
 <!-- Fin Tercer inmueble-->
 <br>
 <!-- Cuarto inmueble-->
 <table>
 <th style="width: 500px;" >
 </th>

 <th style="width: 500px;" >
 </th>

 <th>
 </th>

 <tr >
 <td style=" padding-right: 20px" >
 <input class="form-control" autocomplete="off" type="text" placeholder="Ingrese el numero de a matricula inmobiliaria ejemplo ( 50c-000000 )" name="cuartamatricula" value=""/>
 </td>
 <td style="width: 500px;" align="center">
 <input type="file" name="cuartodocumento" id="cuartodocumento" accept=".pdf" class="inputfile inputfile-5" data-multiple-caption="{count} files selected" style="opacity:0;font-size:100%;" value=""/>

 <label for="cuartodocumento" style=" font-size:90%;" data-toggle="tooltip" ><span style=" width: 150px" ></span> <strong style=" font-size:100%;color: #fff;"> Seleccionar</strong></label>

 </td>
 <td>
 <button type="hidden" style="visibility:hidden;padding-top: 0px;" class="btn btn-primary" ><strong> o </strong></button>
 </td>
 </tr>
 </table>
 <!--Fin Cuarto inmueble-->
 <br>
 <!-- Quinto inmueble-->
 <table>
 <th style="width: 500px;" >
 </th>

 <th style="width: 500px;" >
 </th>

 <th>
 </th>

 <tr >
 <td style=" padding-right: 20px" >
 <input class="form-control" autocomplete="off" type="text" placeholder="Ingrese el numero de a matricula inmobiliaria ejemplo ( 50c-000000 )" name="quintamatricula" value=""/>
 </td>
 <td style="width: 500px;" align="center">
 <input type="file" name="quintodocumento" id="quintodocumento" accept=".pdf" class="inputfile inputfile-5" data-multiple-caption="{count} files selected" style="opacity:0;font-size:100%;" value=""/>

 <label for="quintodocumento" style=" font-size:90%;" data-toggle="tooltip" ><span style=" width: 150px" ></span> <strong style=" font-size:100%;color: #fff;"> Seleccionar</strong></label>

 </td>
 <td>
 <button type="hidden" style="visibility:hidden;padding-top: 0px;" class="btn btn-primary" ><strong> o </strong></button>
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
 <input class="form-control" autocomplete="off" type="number" id="cedulapropietario" name="cedulapropietario" placeholder="Ingrese el numero de Documento o el Nit del propietario ( Futuro vendedor )" required value=""/>
 </td>
 <td>
 <select class="form-control" style="height:5%" name="estadocivilpropietario" required />

 <option value="">Seleccione el estado civil del propietario ( Futuro vendedor )</option>
 <option value="No se sabe">No se sabe</option>
 <option value="Entidad">Entidad</option>
 <option value="Casado con sociedad conyugal vigente">Casado con sociedad conyugal vigente</option>
 <option value="Casado con sociedad conyugal disuelta y liquidada">Casado con sociedad conyugal disuelta y liquidada</option>
 <option value="Soltero sin unión marital de hecho">Soltero sin unión marital de hecho</option>

 <option value="Soltero con unión marital de hecho">Soltero con unión marital de hecho</option>

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
 <th style="width: 1000px;">
 <label for="nombrelocatario" >Nombre / Entidad del locatario </label>
 </th>
 <!--<th style="width: 500px;">
  <label for="nombreotrolocatario" >Segundo nombre del locatario </label>
 </th>-->
 <tr>
 <td style=" padding-right: 20px">
 <input class="form-control" autocomplete="off" type="text" name="nombrelocatario" required placeholder="Ingrese el Nombre del locatario ( Futuro comprador )" value=""/>
 </td>
 <input class="form-control" autocomplete="off" type="hidden" name="nombreotrolocatario" placeholder="Ingrese el segundo nombre del locatario (opcional)" value=""/>
 </tr>
 </table>
 </div>
 <input class="form-control" autocomplete="off" type="hidden" placeholder="Ingrese el primer apellido del locatario ( Futuro comprador )" name="primerapellido"  value=""/>
 <input class="form-control" autocomplete="off" type="hidden" name="segundoapellido" placeholder="Ingrese el segundo apellido del locatario (opcional)" value=""/>
 <input class="form-control" autocomplete="off" type="hidden" name="tipodocumentolocatario" placeholder="Ingrese el segundo apellido del locatario (opcional)" value=""/>
 <br>
 <div align="center">
 <table>
 <th style="width: 500px;">
 <label for="cedulalocatario" >Nit o razon social del Locatario </label>
 </th>
 <th style="width: 500px;">
   <label for="numerosolicitud" >Correo Electrónico</label>
  </th>
 <tr>
 <td style=" padding-right: 20px">
 <input class="form-control" autocomplete="off" type="number" name="cedulalocatario" required placeholder="Ingrese el Nit o razon social del Locatario ( Futuro comprador )" value=""/>
 </td>
 <td>
   <input id="correo" class="form-control" autocomplete="off" type="email" name="numerosolicitud" required placeholder="Ingrese el correo electrónico del Locatario ( Futuro comprador )" value=""/>

 </td>
 </tr>
 </table>
 </div>
 <br>




 <div class="alert alert-info">
 <strong> Si tiene alguna observación sobre esta solicitud por favor ingrésela ( esto es opcional )</strong>
 </div>


 <div class="">
 <label for="observacion" >Observaciones</label>

 <textarea class="form-control" autocomplete="off" type="text" name="observacion" rows="4" cols="50"></textarea>
 </div>

 <input class="form-control" autocomplete="off" type="hidden" id="ValHipoteca" name="ValHipoteca" placeholder="ValHipoteca" value=""/>
 <input class="form-control" autocomplete="off" type="hidden" id="ValVenta" name="ValVenta" placeholder="ValVenta" value=""/>
 <br>

 <div class="alert alert-info">
 <strong> Liquidador</strong>
 </div>


 <div >

 <input class="form-control" autocomplete="off" type="hidden" placeholder="Ingrese el primer apellido del locatario ( Futuro comprador )" name="fk_idautorizacion" value=""/>

 </div>



 <!-- Simulador -->

 <br>




 <br>

 <table style="width: 96%">
 <tr>
 <th>Valor escritura</th>
 <th>
 $
 </th>
 <th>
 <input class="form-control" require autocomplete="off" type="number" name="ValEscritura" id="ValEscritura" onkeypress="return soloNumeros(event)" placeholder="Digite Valor de la escritura" align="center" value="" required/>

 </th>
 <th style=" padding-left: 1%" >
 <p><a class="btn btn-primary" href="#" id="ValEscrituraboton"><i class="fa fa-eye"></i> Simular</a></p>


 </th>
 </table>
 <br>

 <div id="contenidosimulador" class="col-lg-12" style="display: none;">
 <table style="width: 96%">


 </tr>
 <tr>
 <td colspan="3">
 <br>
 <div class="alert alert-danger" style="width: 100%">
 <strong> Alerta!!! <br><br><br></strong> Estos simuladores son solo un aproximado, el Banco y la Notaria 16 NO se hacen responsables si el costo incrementa !!!
 </div>
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
 <td> <input class="form-control" require autocomplete="off" type="number" name="gastosnotarialesvendedor" id="gastosnotarialesvendedor" require onkeypress="return soloNumeros(event)" disabled align="center" required/></td>
 </tr>
 <!-- <tr>
 <td>Hojas Notariales</td>
 <td> <input class="form-control" require autocomplete="off" type="number" name="hojasnotarialesvendedor" id="hojasnotarialesvendedor" require onkeypress="return soloNumeros(event)" align="center" required/></td>
 </tr> -->
 <!-- <tr>
 <td>Fotocopias,Autenticaciones Y Biometria</td>
 <td> <input class="form-control" require autocomplete="off" type="number" name="fotocopiasotrosvendedor" id="fotocopiasotrosvendedor" require onkeypress="return soloNumeros(event)" align="center" required/></td>
 </tr> -->

 <!-- <tr>
 <td>Super Notariado y Registro</td>
 <td> <input class="form-control" require autocomplete="off" type="number" name="supernotariadovendedor" id="supernotariadovendedor" require onkeypress="return soloNumeros(event)" align="center" required/></td>
 </tr> -->

 <tr>
 <td >Retención en la fuente </td>
 <td>
 $
 </td>
 <td style=" padding-top: 5px; "> <input class="form-control" step=".01" require autocomplete="off" type="number" name="Retencion" id="Retencion" require onkeypress="return soloNumeros(event)" align="center" disabled required/>
 </td>
 </tr>
 <tr>
 <td>Iva</td>
 <td>
 $
 </td>
 <td style=" padding-top: 5px; "> <input class="form-control" require autocomplete="off" type="number" name="ivavendedor" id="ivavendedor" require onkeypress="return soloNumeros(event)" align="center" disabled required/></td>
 </tr>


 <tr>
 <td style=" padding-top: 25px; text-align: right;">Total Vendedor :
 </td>
 <td>
 </td>
 <td style=" padding-top: 25px; text-align: right;">

 <!-- <input class="form-control" require autocomplete="off" type="number" name="totalv" id="totalv" require onkeypress="return soloNumeros(event)" disabled align="center" required/>-->

 <input class="form-control" require autocomplete="off" type="number" name="totaljuridico" id="totaljuridico" require onkeypress="return soloNumeros(event)" disabled align="center" required/></td>

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
 <td> <input class="form-control" require autocomplete="off" type="number" name="gastosnotarialescomprador" id="gastosnotarialescomprador" require onkeypress="return soloNumeros(event)" align="center" disabled required/></td>
 </tr>
 <!-- <tr>
 <td>Hojas Notariales</td>
 <td> <input class="form-control" require autocomplete="off" type="number" name="hojasnotarialescomprador" id="hojasnotarialescomprador" require onkeypress="return soloNumeros(event)" align="center" required/></td>
 </tr>
 <tr>
 <td>Fotocopias,Autenticaciones Y Biometria</td>
 <td> <input class="form-control" require autocomplete="off" type="number" name="fotocopiasotroscomprador" id="fotocopiasotroscomprador" require onkeypress="return soloNumeros(event)" align="center" required/></td>
 </tr> -->

 <!-- <tr>
 <td>Super Notariado y Registro</td>
 <td> <input class="form-control" require autocomplete="off" type="number" name="supernotariadocomprador" id="supernotariadocomprador" require onkeypress="return soloNumeros(event)" align="center" required/></td>
 </tr>

 <tr>
 <td>Impuesto otros</td>
 <td> <input class="form-control" require autocomplete="off" type="number" name="impotros" id="impotros" require onkeypress="return soloNumeros(event)" align="center" required/></td>
 </tr> -->
 <tr>
 <td>Registro</td>
 <td>
 $
 </td>
 <td style=" padding-top: 5px; "> <input class="form-control" require autocomplete="off" type="number" name="registro" id="registro" require onkeypress="return soloNumeros(event)" align="center" disabled required/></td>
 </tr>
 <tr>
 <td>Beneficencia </td>
 <td>
 $
 </td>
 <td style=" padding-top: 5px; "> <input class="form-control" require autocomplete="off" type="number" name="benefi" id="benefi" require onkeypress="return soloNumeros(event)" align="center" disabled required/>
 </td>
 </tr>

 <tr>
 <td>Iva</td>
 <td>
 $
 </td>
 <td style=" padding-top: 5px; "> <input class="form-control" require autocomplete="off" type="number" name="ivacomprador" id="ivacomprador" require onkeypress="return soloNumeros(event)" align="center" disabled required/></td>
 </tr>

 <tr>
 <td style=" padding-top: 25px; text-align: right;">Total Comprador : </td>
 <td>

 </td>
 <td style=" padding-top: 25px; text-align: right;"><input class="form-control" require autocomplete="off" type="number" name="totalc" id="totalc" require onkeypress="return soloNumeros(event)" disabled align="center" required/></td>

 </tr>
 </table>
 <br>

  <label  align="center" >He finalizado la solicitud</label> <br>
   <input class="animated-checkbox" type="checkbox" name="mirarbotones" id="mirarbotones" style=" zoom: 200% "   required  value="1" onchange="javascript:showveresto()" />

 </div>

 <br><br>


 <!-- Fin Simulador -->



<!--Fin Formulario persona Juridica leasing -->




';

}
else if( $_POST['opcion2']=='Hipoteca '){
$opt=$_POST['opcion2'];
$formulario = '



<!--Formulario persona Juridica Hipoteca -->

<div class="card mb-3 text-white bg-primary">
                <div class="card-body">

                  <h3> Formulario de <strong> Credito Hipotecario </strong> para persona : <strong>Jurídica </strong> .</h3>

                </div>
</div>

 <div class="alert alert-info" align="center">
 <strong > Datos del inmueble</strong>
 </div>

 <table style=" width: 90%" >
 <th>
 <!-- <label for="tipopersona" >Tipo Persona</label>-->
 </th>
 <th>
 <!-- <label for="tipoacto" >Tipo Acto</label>-->
 </th>
 <tr>
 <td>
 <input class="form-control" autocomplete="off" type="hidden" id="tipopersona" name="tipopersona" placeholder="tipopersona" value="Persona Jurídica"/>
 </td>
 <td>
 <input class="form-control" autocomplete="off" type="hidden" id="tipoacto" name="tipoacto" placeholder="tipoacto" value="Hipoteca"/>
 </td>
 </tr>
 </table>


 <!-- Primer inmueble-->

 <div align="center">
 <table>
 <th style="width: 500px;" >
 <label for="matriculainmobiliaria" >No Matricula ( del inmueble )</label>
 </th>

 <th style="width: 500px;" >
 <label for="documentoinformador">Si tiene un certificado por favor selecciónelo (esto es opcional)</label>
 </th>

 <th>
 </th>

 <tr>
 <td style=" padding-right: 20px">
 <input style="width: 100%" class="form-control" autocomplete="off" type="text" minlength="6" maxlength="50" name="matriculainmobiliaria" required placeholder="Ingrese el numero de a matricula inmobiliaria ejemplo ( 50c-000000 )" value=""/>
 </td>
 <td style="width: 500px;" align="center" >
 <input type="file" name="documentoinformador" id="documentoinformador" accept=".pdf" class="inputfile inputfile-5" data-multiple-caption="{count} files selected" style="opacity:0;font-size:100%;" value=""/>

 <label for="documentoinformador" style=" font-size:90%;" data-toggle="tooltip" ><span style=" width: 150px" ></span> <strong style=" font-size:100%;color: #fff;"> Seleccionar</strong></label>

 </td>

 <td>
 <button style="cursor: pointer;" type="button" class="btn btn-primary boton_mostrar" onClick="vermatriculas()"><strong><i class="fa fa-sort"></i></strong></button>

 </td>
 </tr>
 </table>
 </div>

 <!-- Fin Primer inmueble-->



 <div align="center" id="matriculasescondidas" >
 <br>
 <!-- Segundo inmueble-->
 <table>
 <th colspan="3" >
 <div class="alert alert-warning" align="center" >
 <strong> Si tiene mas de un numero de matricula ingréselos si no deje los espacios en blanco </strong>
 </div>

 <br>
 </th>


 <tr >
 <td style=" width: 500px;padding-right: 20px" >
 <input class="form-control" autocomplete="off" type="text" placeholder="Ingrese el numero de a matricula inmobiliaria ejemplo ( 50c-000000 )" name="estado" value=""/>
 </td>
 <td style="width: 500px;" align="center">
 <input type="file" name="documentonotaria" id="documentonotaria" accept=".pdf" class="inputfile inputfile-5" data-multiple-caption="{count} files selected" style="opacity:0;font-size:100%;" value=""/>

 <label for="documentonotaria" style=" font-size:90%;" data-toggle="tooltip" ><span style=" width: 150px" ></span> <strong style=" font-size:100%;color: #fff;"> Seleccionar</strong></label>
 </td>
 <td>
 <button type="hidden" style="visibility:hidden;padding-top: 0px;" class="btn btn-primary" ><strong> o </strong></button>
 </td>
 </tr>
 </table>
 <!-- Fin Segundo inmueble-->
 <br>
 <!-- Tercer inmueble-->
 <table>
 <th style="width: 500px;" >
 </th>

 <th style="width: 500px;" >
 </th>

 <th>
 </th>

 <tr >
 <td style=" padding-right: 20px" >
 <input class="form-control" autocomplete="off" type="text" placeholder="Ingrese el numero de a matricula inmobiliaria ejemplo ( 50c-000000 )" name="terceramatricula" value=""/>
 </td>
 <td style="width: 500px;" align="center">
 <input type="file" name="tercerdocumento" id="tercerdocumento" accept=".pdf" class="inputfile inputfile-5" data-multiple-caption="{count} files selected" style="opacity:0;font-size:100%;" value=""/>

 <label for="tercerdocumento" style=" font-size:90%;" data-toggle="tooltip" ><span style=" width: 150px" ></span> <strong style=" font-size:100%;color: #fff;"> Seleccionar</strong></label>

 </td>
 <td>
 <button type="hidden" style="visibility:hidden;padding-top: 0px;" class="btn btn-primary" ><strong> o </strong></button>
 </td>
 </tr>
 </table>
 <!-- Fin Tercer inmueble-->
 <br>
 <!-- Cuarto inmueble-->
 <table>
 <th style="width: 500px;" >
 </th>

 <th style="width: 500px;" >
 </th>

 <th>
 </th>

 <tr >
 <td style=" padding-right: 20px" >
 <input class="form-control" autocomplete="off" type="text" placeholder="Ingrese el numero de a matricula inmobiliaria ejemplo ( 50c-000000 )" name="cuartamatricula" value=""/>
 </td>
 <td style="width: 500px;" align="center">
 <input type="file" name="cuartodocumento" id="cuartodocumento" accept=".pdf" class="inputfile inputfile-5" data-multiple-caption="{count} files selected" style="opacity:0;font-size:100%;" value=""/>

 <label for="cuartodocumento" style=" font-size:90%;" data-toggle="tooltip" ><span style=" width: 150px" ></span> <strong style=" font-size:100%;color: #fff;"> Seleccionar</strong></label>

 </td>
 <td>
 <button type="hidden" style="visibility:hidden;padding-top: 0px;" class="btn btn-primary" ><strong> o </strong></button>
 </td>
 </tr>
 </table>
 <!--Fin Cuarto inmueble-->
 <br>
 <!-- Quinto inmueble-->
 <table>
 <th style="width: 500px;" >
 </th>

 <th style="width: 500px;" >
 </th>

 <th>
 </th>

 <tr >
 <td style=" padding-right: 20px" >
 <input class="form-control" autocomplete="off" type="text" placeholder="Ingrese el numero de a matricula inmobiliaria ejemplo ( 50c-000000 )" name="quintamatricula" value=""/>
 </td>
 <td style="width: 500px;" align="center">
 <input type="file" name="quintodocumento" id="quintodocumento" accept=".pdf" class="inputfile inputfile-5" data-multiple-caption="{count} files selected" style="opacity:0;font-size:100%;" value=""/>

 <label for="quintodocumento" style=" font-size:90%;" data-toggle="tooltip" ><span style=" width: 150px" ></span> <strong style=" font-size:100%;color: #fff;"> Seleccionar</strong></label>

 </td>
 <td>
 <button type="hidden" style="visibility:hidden;padding-top: 0px;" class="btn btn-primary" ><strong> o </strong></button>
 </td>
 </tr>
 </table>
 <!-- Quinto inmueble-->


 </div>
 <br>
 <!-- Fin Segundo inmueble-->

 <br>

 <div class="alert alert-info" align="center">
 <strong> Datos del Actual propietario </strong>
 </div>
 <br>


 <div align="center">
 <table>
 <th style="width: 500px;">
 <label for="cedulapropietario" >No de Documento o Nit del Actual propietario  </label>
 </th>
 <th style="width: 500px;">
 <label for="estadocivilpropietario" >Estado Civil Actual propietario  </label>
 </th>
 <tr>
 <td style=" padding-right: 20px">
 <input class="form-control" autocomplete="off" type="number" id="cedulapropietario" name="cedulapropietario" placeholder="Ingrese el numero de Documento o el Nit del propietario ( Futuro vendedor )" required value=""/>
 </td>
 <td>
 <select class="form-control" style="height:5%" name="estadocivilpropietario" required />

 <option value="">Seleccione el estado civil del propietario ( Futuro vendedor )</option>
 <option value="No se sabe">No se sabe</option>
 <option value="Entidad">Entidad</option>
 <option value="Casado con sociedad conyugal vigente">Casado con sociedad conyugal vigente</option>
 <option value="Casado con sociedad conyugal disuelta y liquidada">Casado con sociedad conyugal disuelta y liquidada</option>
 <option value="Soltero sin unión marital de hecho">Soltero sin unión marital de hecho</option>

 <option value="Soltero con unión marital de hecho">Soltero con unión marital de hecho</option>

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
 <th style="width: 1000px;">
 <label for="nombrelocatario" >Nombre / Entidad del locatario </label>
 </th>
 <!--<th style="width: 500px;">
  <label for="nombreotrolocatario" >Segundo nombre del locatario </label>
 </th>-->
 <tr>
 <td style=" padding-right: 20px">
 <input class="form-control" autocomplete="off" type="text" name="nombrelocatario" required placeholder="Ingrese el Nombre del locatario ( Futuro comprador )" value=""/>
 </td>
 <input class="form-control" autocomplete="off" type="hidden" name="nombreotrolocatario" placeholder="Ingrese el segundo nombre del locatario (opcional)" value=""/>
 </tr>
 </table>
 </div>
 <input class="form-control" autocomplete="off" type="hidden" placeholder="Ingrese el primer apellido del locatario ( Futuro comprador )" name="primerapellido"  value=""/>
 <input class="form-control" autocomplete="off" type="hidden" name="segundoapellido" placeholder="Ingrese el segundo apellido del locatario (opcional)" value=""/>
 <input class="form-control" autocomplete="off" type="hidden" name="tipodocumentolocatario" placeholder="Ingrese el segundo apellido del locatario (opcional)" value=""/>
 <br>
 <div align="center">
 <table>
 <th style="width: 500px;">
 <label for="cedulalocatario" >Nit o razon social del Locatario </label>
 </th>
 <th style="width: 500px;">
   <label for="numerosolicitud" >Correo Electrónico</label>
  </th>
 <tr>
 <td style=" padding-right: 20px">
 <input class="form-control" autocomplete="off" type="number" name="cedulalocatario" required placeholder="Ingrese el Nit o razon social del Locatario ( Futuro comprador )" value=""/>
 </td>
 <td>
   <input id="correo" class="form-control" autocomplete="off" type="email" name="numerosolicitud" required placeholder="Ingrese el correo electrónico del Locatario ( Futuro comprador )" value=""/>

 </td>
 </tr>
 </table>
 </div>
 <br>




 <div class="alert alert-info">
 <strong> Si tiene alguna observación sobre esta solicitud por favor ingrésela ( esto es opcional )</strong>
 </div>


 <div class="">
 <label for="observacion" >Observaciones</label>

 <textarea class="form-control" autocomplete="off" type="text" name="observacion" rows="4" cols="50"></textarea>
 </div>
 <input class="form-control" autocomplete="off" type="hidden" id="ValEscritura" name="ValEscritura" placeholder="ValVenta" value=""/>
 <br>

 <div class="alert alert-info">
 <strong> Liquidador</strong>
 </div>


 <div >

 <input class="form-control" autocomplete="off" type="hidden" placeholder="Ingrese el primer apellido del locatario ( Futuro comprador )" name="fk_idautorizacion" value=""/>

 </div>



 <!-- Simulador -->

 <br>




 <div align="center" style=" padding-left: 5%" >
  <table  style="width:100%;">
    <th>
      <label   >Valor Venta</label>
    </th>
    <th>
      <label   >Valor Hipoteca</label>
    </th>
    <th ><label ></label>
    </th>
    <tr>
      <td style=" padding-right: 20px">
        <input class="form-control" require autocomplete="off" type="number" name="ValVenta" id="ValVenta" onkeypress="return soloNumeros(event)" placeholder="Digite Valor de la venta" align="center" value="" required/>

      </td>
      <td style=" padding-right: 20px">
        <input class="form-control" require autocomplete="off" type="number" name="ValHipoteca" id="ValHipoteca" onkeypress="return soloNumeros(event)" placeholder="Digite Valor de la Hipoteca" align="center" value="" required/>

      </td>
      <td>

      <a class="btn btn-primary" href="#" id="ValEscrituraboton"><i class="fa fa-eye"></i> Simular</a>

      </td>
    </tr>
  </table>
  <br>


</div>



 <div id="contenidosimulador" class="col-lg-12" style="display: none;">
   <table style="width:100%;">
     <tr>

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

                <!-- <ul class="nav nav-tabs" style="border-style:none;">
                   <li class="active"><a data-toggle="tab" style="border-style:none;" href="#home"></a></li>
                   <li><a data-toggle="tab" href="#menu3">Persona Natural</a></li>
                   <li><a data-toggle="tab" href="#menu4">Persona Juridica</a></li>

                 </ul>-->

                <!--  <div class="tab-content" style="width: 400px">
                   <br>
                   <div id="home" class="tab-pane fade in active">

                   </div>
                   <div id="menu3" class="tab-pane fade">-->
                   <input  class="form-control" require autocomplete="off" type="number" name="totalchipotecajuridico" id="totalchipotecajuridico" require onkeypress="return soloNumeros(event)" disabled align="center"  required/></td>
                <!--    </div>-->
                  <!--  <div id="menu4" class="tab-pane fade">
                   </div>-->

                 </div>
               </div>
           </tr>




   </table>
 <br>

  <label  align="center" >He finalizado la solicitud</label> <br>
   <input class="animated-checkbox" type="checkbox" name="mirarbotones" id="mirarbotones" style=" zoom: 200% "   required  value="1" onchange="javascript:showveresto()" />

 </div>

 <br><br>


 <!-- Fin Simulador -->





<!--Fin Formulario persona Juridica Hipoteca -->



';

}

else{

}


?>


            

              





        <!-- Todos-->
              <div>
                <?php echo $formulario; ?>
              </div>
              <div id="veresto" style="display: none;">

              <table>
                <tr>
                  <td><input type="hidden" name="docprimernotaria" id="docprimernotaria"/></td>
                  <td><input type="hidden" name="docsegundonotaria" id="docsegundonotaria"/></td>
                  <td><input type="hidden" name="docterceronotaria" id="docterceronotaria"/></td>
                  <td><input type="hidden" name="doccuartonotaria" id="doccuartonotaria"/></td>
                  <td><input type="hidden" name="docquintonotaria" id="docquintonotaria"/></td>
                </tr>
                <tr>
                  <td><input type="hidden" name="checkprimero" id="checkprimero" value="No" /></td>
                  <td><input type="hidden" name="checksegundo" id="checksegundo" value="No"/></td>
                  <td><input type="hidden" name="checktercero" id="checktercero" value="No"/></td>
                  <td><input type="hidden" name="checkcuarto" id="checkcuarto" value="No"/></td>
                  <td><input type="hidden" name="checkquinto" id="checkquinto" value="No"/></td>
                </tr>
                <tr>
                  <td><input type="hidden" name="viabilidad" id="viabilidad"/></td>
                  <td><input type="hidden" name="observacionesnotaria" id="observacionesnotaria"/></td>
                  <td><input type="hidden" name="fechanotaria" id="fechanotaria" value="Sin Responder"/></td>
                  <td></td>
                  <td></td>
                </tr>
              </table>

              <table>
                  <th>
                    <input style="visibility:hidden;padding-top: 0px;" autocomplete="off" type="datetime"  name="fecha" id="fecha" value="<?php $timezone = -5; //(GMT -5:00) EST (U.S. & Canada)
                    echo gmdate("Y/m/j H:i:s a", time() + 3600*($timezone+date("I"))); ?>" />
                  </th>
                  <th>
                    <select style="visibility:hidden;padding-top: 0px;" name="sucursal" id="sucursal" >
                      <?php foreach($this->modelo->Listarsucursal() as $r): ?>
                      <option value="<?=$r->idsucursal?>" <?=$p->getsucursal()==$r->idsucursal ? "selected": ""?>><?=$r->nombre?> </option>
                      <?php endforeach;?>
                    </select>
                  </th>
                  <th>
                    <select style="visibility:hidden;padding-top: 0px;" name="fk_idnotaria" id="fk_idnotaria" >
                      <?php foreach($this->modelo->Listarnombresnotaria() as $r): ?>
                      <option value="<?=$r->idnotaria?>" <?=$p->getfk_idnotaria()==$r->idnotaria ? "selected": ""?>><?=$r->Nombresnotaria?> </option>
                      <?php endforeach;?>
                    </select></th>
                </table>



                              <div>
                                <table>
                                  <th>
                                      <form method="POST" id="2">
                                        <button class="btn btn-primary"  type="submit" id="aceptar" name="aceptar" value="Aceptar"><i class="fa fa-check-square"></i> Guardar </button>
                                      </form>
                                  </th>
                                  <th style=" padding-left:5px; " >
                                      <form>
                                        <button  class="btn btn-secondary" name="cancelar" id="cancelar" value="cancelar"><i class="	fa fa-window-close"></i> Cancelar </button>
                                      </form>
                                  </tr>
                                </table>
                              </div>
                              </form>

                            </div>


              </div>





          <!--Fin Todos-->







            <!-- Fin Formulario-->




            <div align="center" class="aparece">

              <div align="center" class="alert alert-info">
                <strong> Datos de la solicitud </strong>
                <br>
              </div>
                <br>
                <label>Seleccione el tipo de persona </label>
                <br><br>
                  <ul  class="nav nav-pills " style=" width: 100%">

                    <li style=" width: 50%; padding-left: 3%; padding-right: 1%;"><a class="btn-info" data-toggle="pill" href="#menu1">Persona Natural</a></li>
                    <li style=" width: 45%; "><a class="btn-info" data-toggle="pill" href="#menu2">Persona Jurídica</a></li>
                  </ul>

            </div>

            <div align="center" class="desaparece" style="display:none;">
            <!-- <br>
              <a style=" background-color:#7E7E7E;border-color:#7E7E7E " class="btn btn-primary btn-lg " href="?c=solicitud&a=registrarsolicitud">Cambiar Solicitud</a>
              -->
            </div>



            <div class="tab-content">
<br><br>

              <div id="menu1" style=" background-color: white; width:100%; padding-top: 0px" class="tab-pane fade">
                <br>




                <form name="personanatural" id="personanatural" method="post" action="">
                  <div style=" width: 100%" align="center">

                    <label>Seleccione el tipo de la solicitud</label>
                    <br>
                    <select style="height:5%; width: 93%; border-radius: 5px" id="opcion" name="opcion" onchange="this.form.submit()">
                      <option value="0">  Seleccione el tipo de solicitud que desea realizar </option>
                      <?php

                       foreach ($arr as $personanatural){

                       if($personanatural == $opt){
                       echo "<option value='{$personanatural}' selected >$personanatural</option>";
                       }else{
                       echo "<option value='{$personanatural}' >$personanatural</option>";
                       }

                       }

                       ?>

                    </select>
                  </div><br>


                </form>





              </div>


              <div id="menu2" style=" background-color: white; width:100%; padding-top: 0px" class="tab-pane fade">
                <br>


                <div style=" width: 100%" align="center">

                  <label>Seleccione el tipo de la solicitud</label>


                  <form name="personajuridica" id="personajuridica" method="post" action="">
                    <select style="height:5%; width: 93%; border-radius: 5px" id="opcion2" name="opcion2" onchange="this.form.submit()">
                      <option value="0">  Seleccione el tipo de solicitud que desea realizar </option>
                      <?php

                         foreach ($arr2 as $personajuridica){

                         if($personajuridica == $opt){
                         echo "<option value='{$personajuridica}' selected >$personajuridica</option>";
                         }else{
                         echo "<option value='{$personajuridica}' >$personajuridica</option>";
                         }

                         }

                         ?>

                    </select>


                  </form>
                </div><br>


              </div><br><br><br>
            </div>



            <!--fin mostrar dependiendo del select-->

          </div>

        </div>

</div>
<br><br><br><br><br><br><br>
  </main>


<?php endif;?>  <!-- Informador-->






























































<?php if($_SESSION['Rol']=="Gerente"):?><!-- Gerente-->
  <!-- tipo persona-->


  <script type="text/javascript">
    function tipop() {
      lista = document.solicitud.CATEGORIA;
      elegido = lista.selectedIndex;
      opcion = lista.options[elegido];

      tipopersona = opcion.text;

      escribe = document.getElementById("tipopersona");
      escribe.innerHTML = tipopersona;
      escribe.value = tipopersona;
    }
  </script>


  <!-- Fin tipo persona-->


  <!--desaparece-->


  <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
  <script type="text/javascript">
  $(document).ready(function() {
      setTimeout(function() {
          $(".aparece").fadeOut(1500);
      },15000);

      setTimeout(function() {
          $(".desaparece").fadeIn(1500);
      },16000);
  });
  </script>



  <!--fin desaparece-->


  <!-- tipo Acto-->
  <script type="text/javascript">
    function tipoact() {
      lista = document.solicitud.opcion;
      elegido = lista.selectedIndex;
      opcion = lista.options[elegido];

      tipoacto = opcion.text;

      escribe = document.getElementById("tipoacto");
      escribe.innerHTML = tipoacto;
      escribe.value = tipoacto;
    }
  </script>
  <!-- Fin tipo Acto-->



  <!-- habilitar un campo cuando se llene el otro-->
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>

  <script type="text/javascript">
    $(document).ready(function() {
      $('#ValEscritura').attr("disabled", true);
      $('#ValHipoteca').attr("disabled", true);
      $('#ValVenta').attr("disabled", true);
      $('#ValEscrituraboton').attr("disabled", true);
      $('#aceptar').attr("disabled", true);
      $('#cancelar').attr("disabled", true);
          $('#finalizado').attr("disabled", true);



      $('#correo').change(function() {
        var value = $(this).val();
        if (value.length == 0) {
          $('#ValEscritura').val('');
          $('#ValHipoteca').val('');
          $('#ValVenta').val('');

          $('#ValEscritura').attr("disabled", true);
          $('#ValHipoteca').attr("disabled", true);
          $('#ValVenta').attr("disabled", true);

        } else
          $('#ValEscritura').removeAttr("disabled");
          $('#ValHipoteca').removeAttr("disabled");
          $('#ValVenta').removeAttr("disabled");
      });

      $('#ValEscritura').change(function() {
        var value = $(this).val();
        if (value.length == 0) {
          $('#ValEscrituraboton').val('');
            $('#aceptar').val('');
              $('#cancelar').val('');
              $('#finalizado').val('');

          $('#ValEscrituraboton').attr("disabled", true);
          $('#aceptar').attr("disabled", true);
          $('#cancelar').attr("disabled", true);
            $('#finalizado').attr("disabled", true);

        } else
          $('#ValEscrituraboton').removeAttr("disabled");
          $('#aceptar').removeAttr("disabled");
          $('#cancelar').removeAttr("disabled");
            $('#finalizado').removeAttr("disabled");
      });

      $('#ValHipoteca').change(function() {
        var value = $(this).val();
        if (value.length == 0) {
          $('#ValEscrituraboton').val('');
            $('#aceptar').val('');
              $('#cancelar').val('');
              $('#finalizado').val('');

          $('#ValEscrituraboton').attr("disabled", true);
          $('#aceptar').attr("disabled", true);
          $('#cancelar').attr("disabled", true);
            $('#finalizado').attr("disabled", true);

        } else
          $('#ValEscrituraboton').removeAttr("disabled");
          $('#aceptar').removeAttr("disabled");
          $('#cancelar').removeAttr("disabled");
            $('#finalizado').removeAttr("disabled");
      });

      $('#ValVenta').change(function() {
        var value = $(this).val();
        if (value.length == 0) {
          $('#ValEscrituraboton').val('');
            $('#aceptar').val('');
              $('#cancelar').val('');
              $('#finalizado').val('');

          $('#ValEscrituraboton').attr("disabled", true);
          $('#aceptar').attr("disabled", true);
          $('#cancelar').attr("disabled", true);
            $('#finalizado').attr("disabled", true);

        } else
          $('#ValEscrituraboton').removeAttr("disabled");
          $('#aceptar').removeAttr("disabled");
          $('#cancelar').removeAttr("disabled");
            $('#finalizado').removeAttr("disabled");
      });

      $('#ValEscrituraboton').change(function() {
        var value = $(this).val();
        if (value.length == 0) {

        }

      });
    });
  </script>
  <!-- Fin habilitar un campo cuando se llene el otro-->


    <!-- boton finalizar ocultar-->




    <script type="text/javascript">
        function showveresto() {
            element = document.getElementById("veresto");
            check = document.getElementById("mirarbotones");
            if (check.checked) {
                element.style.display='block';
            }
            else {
                element.style.display='none';
            }
        }
    </script>

      <!-- fin boton finalizar ocultar-->




  <!-- Deshabilitar select-->
  <script>
    function quitarselect(select) {
      const value = select.value;
      let option = select.querySelector(`option[value="${value}"]`);
      select.disabled = true;
    }
  </script>
  <!-- Fin Deshabilitar select-->







  <!-- Ocultar/Mostrar matriculas-->
  <script>
    window.addEventListener("load", vermatriculas);

    function vermatriculas() {
      var x = document.getElementById('matriculasescondidas');
      if (x.style.display === 'none') {
        x.style.display = 'block';
      } else {
        x.style.display = 'none';
      }
    }
  </script>
  <!-- Fin Ocultar/Mostrar matriculas-->



  <!-- Ocultar/Mostrar liquidador-->

  <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $("#hide").on('click', function() {
        $("#contenidosimulador").hide();
        return false;
      });

      $("#ValEscrituraboton").on('click', function() {
        $("#contenidosimulador").show();
        return false;
      });
    });
  </script>

  <!-- Fin Ocultar/Mostrar liquidador-->

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
    <a style=" background-color:#7E7E7E;border-color:#7E7E7E " class="btn btn-primary btn-lg " href="?c=solicitud&a=registrarsolicitud">Cambiar Solicitud</a>
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

          <div class="card-body" id="fondo"   >





            <div align="center" class="content-wrapper">


              <!-- Formulario -->

              <div class="col-md-12">
                <form name="solicitud" class="form-horizontal" method="POST" enctype="multipart/form-data" action="?c=solicitud&a=Guardar">

                  <div >

                    <input class="form-control" name="id" type="hidden" value="<?=$p->getidsolicitud()?>" >
                  </div>
              </div>


              <?php
error_reporting(0);
$arr = ["Leasing", "Hipoteca" ];
$arr2 = ["Leasing ", "Hipoteca " ];


if( $_POST['opcion']=='Leasing'){
$opt=$_POST['opcion'];


$formulario = '




<!-- Formulario persona natural leasing -->

<div class="card mb-3 text-white bg-primary">
                <div class="card-body">

                  <h3> Formulario <strong>Leasing </strong> para persona : <strong>Natural </strong> .</h3>

                </div>
</div>

 <div class="alert alert-info" align="center">
 <strong > Datos del inmueble</strong>
 </div>

 <table style=" width: 90%" >
 <th>
 <!-- <label for="tipopersona" >Tipo Persona</label>-->
 </th>
 <th>
 <!-- <label for="tipoacto" >Tipo Acto</label>-->
 </th>
 <tr>
 <td>
 <input class="form-control" autocomplete="off" type="hidden" id="tipopersona" name="tipopersona" placeholder="tipopersona" value="Persona Natural"/>
 </td>
 <td>
 <input class="form-control" autocomplete="off" type="hidden" id="tipoacto" name="tipoacto" placeholder="tipoacto" value="Leasing"/>
 </td>
 </tr>
 </table>


 <!-- Primer inmueble-->

 <div align="center">
 <table>
 <th style="width: 500px;" >
 <label for="matriculainmobiliaria" >No Matricula ( del inmueble )</label>
 </th>

 <th style="width: 500px;" >
 <label for="documentoinformador">Si tiene un certificado por favor selecciónelo (esto es opcional)</label>
 </th>

 <th>
 </th>

 <tr>
 <td style=" padding-right: 20px">
 <input style="width: 100%" class="form-control" autocomplete="off" type="text" minlength="6" maxlength="50" name="matriculainmobiliaria" required placeholder="Ingrese el numero de a matricula inmobiliaria ejemplo ( 50c-000000 )" value=""/>
 </td>
 <td style="width: 500px;" align="center" >
 <input type="file" name="documentoinformador" id="documentoinformador" accept=".pdf" class="inputfile inputfile-5" data-multiple-caption="{count} files selected" style="opacity:0;font-size:100%;" value=""/>

 <label for="documentoinformador" style=" font-size:90%;" data-toggle="tooltip" ><span style=" width: 150px" ></span> <strong style=" font-size:100%;color: #fff;"> Seleccionar</strong></label>

 </td>

 <td>
 <button style="cursor: pointer;" type="button" class="btn btn-primary boton_mostrar" onClick="vermatriculas()"><strong><i class="fa fa-sort"></i></strong></button>

 </td>
 </tr>
 </table>
 </div>

 <!-- Fin Primer inmueble-->



 <div align="center" id="matriculasescondidas" >
 <br>
 <!-- Segundo inmueble-->
 <table>
 <th colspan="3" >
 <div class="alert alert-warning" align="center" >
 <strong> Si tiene mas de un numero de matricula ingréselos si no deje los espacios en blanco </strong>
 </div>

 <br>
 </th>


 <tr >
 <td style=" width: 500px;padding-right: 20px" >
 <input class="form-control" autocomplete="off" type="text" placeholder="Ingrese el numero de a matricula inmobiliaria ejemplo ( 50c-000000 )" name="estado" value=""/>
 </td>
 <td style="width: 500px;" align="center">
 <input type="file" name="documentonotaria" id="documentonotaria" accept=".pdf" class="inputfile inputfile-5" data-multiple-caption="{count} files selected" style="opacity:0;font-size:100%;" value=""/>

 <label for="documentonotaria" style=" font-size:90%;" data-toggle="tooltip" ><span style=" width: 150px" ></span> <strong style=" font-size:100%;color: #fff;"> Seleccionar</strong></label>
 </td>
 <td>
 <button type="hidden" style="visibility:hidden;padding-top: 0px;" class="btn btn-primary" ><strong> o </strong></button>
 </td>
 </tr>
 </table>
 <!-- Fin Segundo inmueble-->
 <br>
 <!-- Tercer inmueble-->
 <table>
 <th style="width: 500px;" >
 </th>

 <th style="width: 500px;" >
 </th>

 <th>
 </th>

 <tr >
 <td style=" padding-right: 20px" >
 <input class="form-control" autocomplete="off" type="text" placeholder="Ingrese el numero de a matricula inmobiliaria ejemplo ( 50c-000000 )" name="terceramatricula" value=""/>
 </td>
 <td style="width: 500px;" align="center">
 <input type="file" name="tercerdocumento" id="tercerdocumento" accept=".pdf" class="inputfile inputfile-5" data-multiple-caption="{count} files selected" style="opacity:0;font-size:100%;" value=""/>

 <label for="tercerdocumento" style=" font-size:90%;" data-toggle="tooltip" ><span style=" width: 150px" ></span> <strong style=" font-size:100%;color: #fff;"> Seleccionar</strong></label>

 </td>
 <td>
 <button type="hidden" style="visibility:hidden;padding-top: 0px;" class="btn btn-primary" ><strong> o </strong></button>
 </td>
 </tr>
 </table>
 <!-- Fin Tercer inmueble-->
 <br>
 <!-- Cuarto inmueble-->
 <table>
 <th style="width: 500px;" >
 </th>

 <th style="width: 500px;" >
 </th>

 <th>
 </th>

 <tr >
 <td style=" padding-right: 20px" >
 <input class="form-control" autocomplete="off" type="text" placeholder="Ingrese el numero de a matricula inmobiliaria ejemplo ( 50c-000000 )" name="cuartamatricula" value=""/>
 </td>
 <td style="width: 500px;" align="center">
 <input type="file" name="cuartodocumento" id="cuartodocumento" accept=".pdf" class="inputfile inputfile-5" data-multiple-caption="{count} files selected" style="opacity:0;font-size:100%;" value=""/>

 <label for="cuartodocumento" style=" font-size:90%;" data-toggle="tooltip" ><span style=" width: 150px" ></span> <strong style=" font-size:100%;color: #fff;"> Seleccionar</strong></label>

 </td>
 <td>
 <button type="hidden" style="visibility:hidden;padding-top: 0px;" class="btn btn-primary" ><strong> o </strong></button>
 </td>
 </tr>
 </table>
 <!--Fin Cuarto inmueble-->
 <br>
 <!-- Quinto inmueble-->
 <table>
 <th style="width: 500px;" >
 </th>

 <th style="width: 500px;" >
 </th>

 <th>
 </th>

 <tr >
 <td style=" padding-right: 20px" >
 <input class="form-control" autocomplete="off" type="text" placeholder="Ingrese el numero de a matricula inmobiliaria ejemplo ( 50c-000000 )" name="quintamatricula" value=""/>
 </td>
 <td style="width: 500px;" align="center">
 <input type="file" name="quintodocumento" id="quintodocumento" accept=".pdf" class="inputfile inputfile-5" data-multiple-caption="{count} files selected" style="opacity:0;font-size:100%;" value=""/>

 <label for="quintodocumento" style=" font-size:90%;" data-toggle="tooltip" ><span style=" width: 150px" ></span> <strong style=" font-size:100%;color: #fff;"> Seleccionar</strong></label>

 </td>
 <td>
 <button type="hidden" style="visibility:hidden;padding-top: 0px;" class="btn btn-primary" ><strong> o </strong></button>
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
 <input class="form-control" autocomplete="off" type="number" id="cedulapropietario" name="cedulapropietario" placeholder="Ingrese el numero de Documento o el Nit del propietario ( Futuro vendedor )" required value=""/>
 </td>
 <td>
 <select class="form-control" style="height:5%" name="estadocivilpropietario" required />

 <option value="">Seleccione el estado civil del propietario ( Futuro vendedor )</option>
 <option value="No se sabe">No se sabe</option>
 <option value="Entidad">Entidad</option>
 <option value="Casado con sociedad conyugal vigente">Casado con sociedad conyugal vigente</option>
 <option value="Casado con sociedad conyugal disuelta y liquidada">Casado con sociedad conyugal disuelta y liquidada</option>
 <option value="Soltero sin unión marital de hecho">Soltero sin unión marital de hecho</option>

 <option value="Soltero con unión marital de hecho">Soltero con unión marital de hecho</option>

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
 <label for="nombrelocatario" >Primer nombre del locatario </label>
 </th>
 <th style="width: 500px;">
 <label for="nombreotrolocatario" >Segundo nombre del locatario </label>
 </th>
 <tr>
 <td style=" padding-right: 20px">
 <input class="form-control" autocomplete="off" type="text" name="nombrelocatario" required placeholder="Ingrese el primer nombre del locatario ( Futuro comprador )" value=""/>
 </td>
 <td>
 <input class="form-control" autocomplete="off" type="text" name="nombreotrolocatario" placeholder="Ingrese el segundo nombre del locatario (opcional)" value=""/>
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
 <input class="form-control" autocomplete="off" type="text" placeholder="Ingrese el primer apellido del locatario ( Futuro comprador )" name="primerapellido" required value=""/>
 </td>
 <td>
 <input class="form-control" autocomplete="off" type="text" name="segundoapellido" placeholder="Ingrese el segundo apellido del locatario (opcional)" value=""/>
 </td>
 </tr>
 </table>
 </div>
 <br>

 <div align="center">
 <table>
 <th style="width: 500px;">
 <label for="cedulalocatario" >Numero de Documento del Locatario </label>
 </th>
 <th style="width: 500px;">
  <label for="tipodocumentolocatario" >Tipo de documento Locatario</label>
  </th>
 <tr>
 <td style=" padding-right: 20px">
 <input class="form-control" autocomplete="off" type="number" name="cedulalocatario" required placeholder="Ingrese el numero de documento del Locatario ( Futuro comprador )" value=""/>
 </td>
 <td>

 <select class="form-control" style="height:5%" name="tipodocumentolocatario" required />
 <option value="">Seleccione el tipo de documento del Locatario ( Futuro comprador )</option>
 <option value="Cédula de ciudadanía">Cédula de ciudadanía</option>
 <option value="Cédula de extranjería">Cédula de extranjería</option>
 <option value="Nit para personas jurídicas">Nit para personas jurídicas</option>
 <option value="Pasaporte">Pasaporte</option>
 </select>
 </td>
 </tr>
 </table>
 </div>
 <br>


 <div align="center">
 <table>
 <th style="width: 500px;">
 <label for="numerosolicitud" >Correo Electrónico</label>
 </th>
 <th style="width: 500px;">

  </th>
 <tr>
 <td style=" padding-right: 20px">
 <input id="correo" class="form-control" autocomplete="off" type="email" name="numerosolicitud" required placeholder="Ingrese el correo electrónico del Locatario ( Futuro comprador )" value=""/>
 </td>
 <td>
 </td>
 </tr>
 </table>
 </div>
 <br>



 <div class="alert alert-info">
 <strong> Si tiene alguna observación sobre esta solicitud por favor ingrésela ( esto es opcional )</strong>
 </div>


 <div class="">
 <label for="observacion" >Observaciones</label>

 <textarea class="form-control" autocomplete="off" type="text" name="observacion" rows="4" cols="50"></textarea>
 </div>

 <input class="form-control" autocomplete="off" type="hidden" id="ValHipoteca" name="ValHipoteca" placeholder="ValHipoteca" value=""/>
 <input class="form-control" autocomplete="off" type="hidden" id="ValVenta" name="ValVenta" placeholder="ValVenta" value=""/>
 <br>

 <div class="alert alert-info">
 <strong> Liquidador</strong>
 </div>


 <div >

 <input class="form-control" autocomplete="off" type="hidden" placeholder="Ingrese el primer apellido del locatario ( Futuro comprador )" name="fk_idautorizacion" value=""/>

 </div>



 <!-- Simulador -->

 <br>




 <br>

 <table style="width: 96%">
 <tr>
 <th>Valor escritura</th>
 <th>
 $
 </th>
 <th>
 <input class="form-control" require autocomplete="off" type="number" name="ValEscritura" id="ValEscritura" onkeypress="return soloNumeros(event)" placeholder="Digite Valor de la escritura" align="center" value="" required/>

 </th>
 <th style=" padding-left: 1%" >
 <p><a class="btn btn-primary" href="#" id="ValEscrituraboton"><i class="fa fa-eye"></i> Simular</a></p>


 </th>
 </table>
 <br>

 <div id="contenidosimulador" class="col-lg-12" style="display: none;">
 <table style="width: 96%">


 </tr>
 <tr>
 <td colspan="3">
 <br>
 <div class="alert alert-danger" style="width: 100%">
 <strong> Alerta!!! <br><br><br></strong> Estos simuladores son solo un aproximado, el Banco y la Notaria 16 NO se hacen responsables si el costo incrementa !!!
 </div>
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
 <td> <input class="form-control" require autocomplete="off" type="number" name="gastosnotarialesvendedor" id="gastosnotarialesvendedor" require onkeypress="return soloNumeros(event)" disabled align="center" required/></td>
 </tr>
 <!-- <tr>
 <td>Hojas Notariales</td>
 <td> <input class="form-control" require autocomplete="off" type="number" name="hojasnotarialesvendedor" id="hojasnotarialesvendedor" require onkeypress="return soloNumeros(event)" align="center" required/></td>
 </tr> -->
 <!-- <tr>
 <td>Fotocopias,Autenticaciones Y Biometria</td>
 <td> <input class="form-control" require autocomplete="off" type="number" name="fotocopiasotrosvendedor" id="fotocopiasotrosvendedor" require onkeypress="return soloNumeros(event)" align="center" required/></td>
 </tr> -->

 <!-- <tr>
 <td>Super Notariado y Registro</td>
 <td> <input class="form-control" require autocomplete="off" type="number" name="supernotariadovendedor" id="supernotariadovendedor" require onkeypress="return soloNumeros(event)" align="center" required/></td>
 </tr> -->

 <tr>
 <td >Retención en la fuente </td>
 <td>
 $
 </td>
 <td style=" padding-top: 5px; "> <input class="form-control" step=".01" require autocomplete="off" type="number" name="Retencion" id="Retencion" require onkeypress="return soloNumeros(event)" align="center" disabled required/>
 </td>
 </tr>
 <tr>
 <td>Iva</td>
 <td>
 $
 </td>
 <td style=" padding-top: 5px; "> <input class="form-control" require autocomplete="off" type="number" name="ivavendedor" id="ivavendedor" require onkeypress="return soloNumeros(event)" align="center" disabled required/></td>
 </tr>


 <tr>
 <td style=" padding-top: 25px; text-align: right;">Total Vendedor :
 </td>
 <td>
 </td>
 <td style=" padding-top: 25px; text-align: right;">

 <input class="form-control" require autocomplete="off" type="number" name="totalv" id="totalv" require onkeypress="return soloNumeros(event)" disabled align="center" required/>

 <!-- <input class="form-control" require autocomplete="off" type="number" name="totaljuridico" id="totaljuridico" require onkeypress="return soloNumeros(event)" disabled align="center" required/>--></td>

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
 <td> <input class="form-control" require autocomplete="off" type="number" name="gastosnotarialescomprador" id="gastosnotarialescomprador" require onkeypress="return soloNumeros(event)" align="center" disabled required/></td>
 </tr>
 <!-- <tr>
 <td>Hojas Notariales</td>
 <td> <input class="form-control" require autocomplete="off" type="number" name="hojasnotarialescomprador" id="hojasnotarialescomprador" require onkeypress="return soloNumeros(event)" align="center" required/></td>
 </tr>
 <tr>
 <td>Fotocopias,Autenticaciones Y Biometria</td>
 <td> <input class="form-control" require autocomplete="off" type="number" name="fotocopiasotroscomprador" id="fotocopiasotroscomprador" require onkeypress="return soloNumeros(event)" align="center" required/></td>
 </tr> -->

 <!-- <tr>
 <td>Super Notariado y Registro</td>
 <td> <input class="form-control" require autocomplete="off" type="number" name="supernotariadocomprador" id="supernotariadocomprador" require onkeypress="return soloNumeros(event)" align="center" required/></td>
 </tr>

 <tr>
 <td>Impuesto otros</td>
 <td> <input class="form-control" require autocomplete="off" type="number" name="impotros" id="impotros" require onkeypress="return soloNumeros(event)" align="center" required/></td>
 </tr> -->
 <tr>
 <td>Registro</td>
 <td>
 $
 </td>
 <td style=" padding-top: 5px; "> <input class="form-control" require autocomplete="off" type="number" name="registro" id="registro" require onkeypress="return soloNumeros(event)" align="center" disabled required/></td>
 </tr>
 <tr>
 <td>Beneficencia </td>
 <td>
 $
 </td>
 <td style=" padding-top: 5px; "> <input class="form-control" require autocomplete="off" type="number" name="benefi" id="benefi" require onkeypress="return soloNumeros(event)" align="center" disabled required/>
 </td>
 </tr>

 <tr>
 <td>Iva</td>
 <td>
 $
 </td>
 <td style=" padding-top: 5px; "> <input class="form-control" require autocomplete="off" type="number" name="ivacomprador" id="ivacomprador" require onkeypress="return soloNumeros(event)" align="center" disabled required/></td>
 </tr>

 <tr>
 <td style=" padding-top: 25px; text-align: right;">Total Comprador : </td>
 <td>

 </td>
 <td style=" padding-top: 25px; text-align: right;"><input class="form-control" require autocomplete="off" type="number" name="totalc" id="totalc" require onkeypress="return soloNumeros(event)" disabled align="center" required/></td>

 </tr>
 </table>
 <br>

<label  align="center" >He finalizado la solicitud</label> <br>
 <input class="animated-checkbox" type="checkbox" name="mirarbotones" id="mirarbotones" style=" zoom: 200% "   required  value="1" onchange="javascript:showveresto()" />





 <!-- Fin Simulador -->







<!--Fin Formulario persona natural leasing -->




';

}



else if( $_POST['opcion']=='Hipoteca'){
$opt=$_POST['opcion'];

$formulario = '

<!--Formulario persona natural Hipoteca -->

<div class="card mb-3 text-white bg-primary">
                <div class="card-body">

                  <h3> Formulario de <strong> Credito Hipotecario </strong> para persona : <strong>Natural </strong> .</h3>

                </div>
</div>

 <div class="alert alert-info" align="center">
 <strong > Datos del inmueble</strong>
 </div>

 <table style=" width: 90%" >
 <th>
 <!-- <label for="tipopersona" >Tipo Persona</label>-->
 </th>
 <th>
 <!-- <label for="tipoacto" >Tipo Acto</label>-->
 </th>
 <tr>
 <td>
 <input class="form-control" autocomplete="off" type="hidden" id="tipopersona" name="tipopersona" placeholder="tipopersona" value="Persona Natural"/>
 </td>
 <td>
 <input class="form-control" autocomplete="off" type="hidden" id="tipoacto" name="tipoacto" placeholder="tipoacto" value="Hipoteca"/>
 </td>
 </tr>
 </table>


 <!-- Primer inmueble-->

 <div align="center">
 <table>
 <th style="width: 500px;" >
 <label for="matriculainmobiliaria" >No Matricula ( del inmueble )</label>
 </th>

 <th style="width: 500px;" >
 <label for="documentoinformador">Si tiene un certificado por favor selecciónelo (esto es opcional)</label>
 </th>

 <th>
 </th>

 <tr>
 <td style=" padding-right: 20px">
 <input style="width: 100%" class="form-control" autocomplete="off" type="text" minlength="6" maxlength="50" name="matriculainmobiliaria" required placeholder="Ingrese el numero de a matricula inmobiliaria ejemplo ( 50c-000000 )" value=""/>
 </td>
 <td style="width: 500px;" align="center" >
 <input type="file" name="documentoinformador" id="documentoinformador" accept=".pdf" class="inputfile inputfile-5" data-multiple-caption="{count} files selected" style="opacity:0;font-size:100%;" value=""/>

 <label for="documentoinformador" style=" font-size:90%;" data-toggle="tooltip" ><span style=" width: 150px" ></span> <strong style=" font-size:100%;color: #fff;"> Seleccionar</strong></label>

 </td>

 <td>
 <button style="cursor: pointer;" type="button" class="btn btn-primary boton_mostrar" onClick="vermatriculas()"><strong><i class="fa fa-sort"></i></strong></button>

 </td>
 </tr>
 </table>
 </div>

 <!-- Fin Primer inmueble-->



 <div align="center" id="matriculasescondidas" >
 <br>
 <!-- Segundo inmueble-->
 <table>
 <th colspan="3" >
 <div class="alert alert-warning" align="center" >
 <strong> Si tiene mas de un numero de matricula ingréselos si no deje los espacios en blanco </strong>
 </div>

 <br>
 </th>


 <tr >
 <td style=" width: 500px;padding-right: 20px" >
 <input class="form-control" autocomplete="off" type="text" placeholder="Ingrese el numero de a matricula inmobiliaria ejemplo ( 50c-000000 )" name="estado" value=""/>
 </td>
 <td style="width: 500px;" align="center">
 <input type="file" name="documentonotaria" id="documentonotaria" accept=".pdf" class="inputfile inputfile-5" data-multiple-caption="{count} files selected" style="opacity:0;font-size:100%;" value=""/>

 <label for="documentonotaria" style=" font-size:90%;" data-toggle="tooltip" ><span style=" width: 150px" ></span> <strong style=" font-size:100%;color: #fff;"> Seleccionar</strong></label>
 </td>
 <td>
 <button type="hidden" style="visibility:hidden;padding-top: 0px;" class="btn btn-primary" ><strong> o </strong></button>
 </td>
 </tr>
 </table>
 <!-- Fin Segundo inmueble-->
 <br>
 <!-- Tercer inmueble-->
 <table>
 <th style="width: 500px;" >
 </th>

 <th style="width: 500px;" >
 </th>

 <th>
 </th>

 <tr >
 <td style=" padding-right: 20px" >
 <input class="form-control" autocomplete="off" type="text" placeholder="Ingrese el numero de a matricula inmobiliaria ejemplo ( 50c-000000 )" name="terceramatricula" value=""/>
 </td>
 <td style="width: 500px;" align="center">
 <input type="file" name="tercerdocumento" id="tercerdocumento" accept=".pdf" class="inputfile inputfile-5" data-multiple-caption="{count} files selected" style="opacity:0;font-size:100%;" value=""/>

 <label for="tercerdocumento" style=" font-size:90%;" data-toggle="tooltip" ><span style=" width: 150px" ></span> <strong style=" font-size:100%;color: #fff;"> Seleccionar</strong></label>

 </td>
 <td>
 <button type="hidden" style="visibility:hidden;padding-top: 0px;" class="btn btn-primary" ><strong> o </strong></button>
 </td>
 </tr>
 </table>
 <!-- Fin Tercer inmueble-->
 <br>
 <!-- Cuarto inmueble-->
 <table>
 <th style="width: 500px;" >
 </th>

 <th style="width: 500px;" >
 </th>

 <th>
 </th>

 <tr >
 <td style=" padding-right: 20px" >
 <input class="form-control" autocomplete="off" type="text" placeholder="Ingrese el numero de a matricula inmobiliaria ejemplo ( 50c-000000 )" name="cuartamatricula" value=""/>
 </td>
 <td style="width: 500px;" align="center">
 <input type="file" name="cuartodocumento" id="cuartodocumento" accept=".pdf" class="inputfile inputfile-5" data-multiple-caption="{count} files selected" style="opacity:0;font-size:100%;" value=""/>

 <label for="cuartodocumento" style=" font-size:90%;" data-toggle="tooltip" ><span style=" width: 150px" ></span> <strong style=" font-size:100%;color: #fff;"> Seleccionar</strong></label>

 </td>
 <td>
 <button type="hidden" style="visibility:hidden;padding-top: 0px;" class="btn btn-primary" ><strong> o </strong></button>
 </td>
 </tr>
 </table>
 <!--Fin Cuarto inmueble-->
 <br>
 <!-- Quinto inmueble-->
 <table>
 <th style="width: 500px;" >
 </th>

 <th style="width: 500px;" >
 </th>

 <th>
 </th>

 <tr >
 <td style=" padding-right: 20px" >
 <input class="form-control" autocomplete="off" type="text" placeholder="Ingrese el numero de a matricula inmobiliaria ejemplo ( 50c-000000 )" name="quintamatricula" value=""/>
 </td>
 <td style="width: 500px;" align="center">
 <input type="file" name="quintodocumento" id="quintodocumento" accept=".pdf" class="inputfile inputfile-5" data-multiple-caption="{count} files selected" style="opacity:0;font-size:100%;" value=""/>

 <label for="quintodocumento" style=" font-size:90%;" data-toggle="tooltip" ><span style=" width: 150px" ></span> <strong style=" font-size:100%;color: #fff;"> Seleccionar</strong></label>

 </td>
 <td>
 <button type="hidden" style="visibility:hidden;padding-top: 0px;" class="btn btn-primary" ><strong> o </strong></button>
 </td>
 </tr>
 </table>
 <!-- Quinto inmueble-->


 </div>
 <br>
 <!-- Fin Segundo inmueble-->

 <br>

 <div class="alert alert-info" align="center">
 <strong> Datos del Actual propietario </strong>
 </div>
 <br>


 <div align="center">
 <table>
 <th style="width: 500px;">
 <label for="cedulapropietario" >No de Documento o Nit del Actual propietario  </label>
 </th>
 <th style="width: 500px;">
 <label for="estadocivilpropietario" >Estado Civil Actual propietario  </label>
 </th>
 <tr>
 <td style=" padding-right: 20px">
 <input class="form-control" autocomplete="off" type="number" id="cedulapropietario" name="cedulapropietario" placeholder="Ingrese el numero de Documento o el Nit del propietario ( Futuro vendedor )" required value=""/>
 </td>
 <td>
 <select class="form-control" style="height:5%" name="estadocivilpropietario" required />

 <option value="">Seleccione el estado civil del propietario ( Futuro vendedor )</option>
 <option value="No se sabe">No se sabe</option>
 <option value="Entidad">Entidad</option>
 <option value="Casado con sociedad conyugal vigente">Casado con sociedad conyugal vigente</option>
 <option value="Casado con sociedad conyugal disuelta y liquidada">Casado con sociedad conyugal disuelta y liquidada</option>
 <option value="Soltero sin unión marital de hecho">Soltero sin unión marital de hecho</option>

 <option value="Soltero con unión marital de hecho">Soltero con unión marital de hecho</option>

 </select>
 </td>
 </tr>
 </table>
 </div>
 <br>
 <br>


 <div class="alert alert-info" align="center">
 <strong> Datos del Locatario ( Deudor Hipotecario )</strong>
 </div>
 <br>

 <div align="center">
 <table>
 <th style="width: 500px;">
 <label for="nombrelocatario" >Primer nombre del Deudor </label>
 </th>
 <th style="width: 500px;">
 <label for="nombreotrolocatario" >Segundo nombre del Deudor</label>
 </th>
 <tr>
 <td style=" padding-right: 20px">
 <input class="form-control" autocomplete="off" type="text" name="nombrelocatario" required placeholder="Ingrese el primer nombre del Deudor Hipotecario" value=""/>
 </td>
 <td>
 <input class="form-control" autocomplete="off" type="text" name="nombreotrolocatario" placeholder="Ingrese el segundo nombre del Deudor Hipotecario (opcional)" value=""/>
 </td>
 </tr>
 </table>
 </div>
 <br>
 <div align="center">
 <table>
 <th style="width: 500px;">
 <label for="primerapellido" >Primer apellido del Deudor  </label>
 </th>
 <th style="width: 500px;">
 <label for="segundoapellido" >Segundo apellido del Deudor </label>
 </th>
 <tr>
 <td style=" padding-right: 20px">
 <input class="form-control" autocomplete="off" type="text" placeholder="Ingrese el primer apellido del Deudor Hipotecario" name="primerapellido" required value=""/>
 </td>
 <td>
 <input class="form-control" autocomplete="off" type="text" name="segundoapellido" placeholder="Ingrese el segundo apellido del Deudor Hipotecario (opcional)" value=""/>
 </td>
 </tr>
 </table>
 </div>
 <br>

 <div align="center">
 <table>
 <th style="width: 500px;">
 <label for="cedulalocatario" >Numero de Documento del Deudor  </label>
 </th>
 <th style="width: 500px;">
  <label for="tipodocumentolocatario" >Tipo de documento Deudor </label>
  </th>
 <tr>
 <td style=" padding-right: 20px">
 <input class="form-control" autocomplete="off" type="number" name="cedulalocatario" required placeholder="Ingrese el numero de documento del Deudor Hipotecario" value=""/>
 </td>
 <td>
 <select class="form-control" style="height:5%" name="tipodocumentolocatario" required />
 <option value="">Seleccione el tipo de documento del Locatario ( Futuro comprador )</option>
 <option value="Cédula de ciudadanía">Cédula de ciudadanía</option>
 <option value="Cédula de extranjería">Cédula de extranjería</option>
 <option value="Nit para personas jurídicas">Nit para personas jurídicas</option>
 <option value="Pasaporte">Pasaporte</option>
 </select>
 </td>
 </tr>
 </table>
 </div>
 <br>


 <div align="center">
 <table>
 <th style="width: 500px;">
 <label for="numerosolicitud" >Correo Electrónico</label>
 </th>
 <th style="width: 500px;">

  </th>
 <tr>
 <td style=" padding-right: 20px">
 <input id="correo" class="form-control" autocomplete="off" type="email" name="numerosolicitud" required placeholder="Ingrese el correo electrónico del Deudor Hipotecario" value=""/>
 </td>
 <td>
 </td>
 </tr>
 </table>
 </div>
 <br>



 <div class="alert alert-info">
 <strong> Si tiene alguna observación sobre esta solicitud por favor ingrésela ( esto es opcional )</strong>
 </div>


 <div class="">
 <label for="observacion" >Observaciones</label>

 <textarea class="form-control" autocomplete="off" type="text" name="observacion" rows="4" cols="50"></textarea>
 </div>
 <input class="form-control" autocomplete="off" type="hidden" id="ValEscritura" name="ValEscritura" placeholder="ValVenta" value=""/>
 <br>

 <div class="alert alert-info">
 <strong> Liquidador</strong>
 </div>


 <div >

 <input class="form-control" autocomplete="off" type="hidden" placeholder="Ingrese el primer apellido del locatario ( Futuro comprador )" name="fk_idautorizacion" value=""/>

 </div>



 <!-- Simulador -->

 <br>




 <div align="center" style=" padding-left: 5%" >
  <table  style="width:100%;">
    <th>
      <label   >Valor Venta</label>
    </th>
    <th>
      <label   >Valor Hipoteca</label>
    </th>
    <th ><label ></label>
    </th>
    <tr>
      <td style=" padding-right: 20px">
        <input class="form-control" require autocomplete="off" type="number" name="ValVenta" id="ValVenta" onkeypress="return soloNumeros(event)" placeholder="Digite Valor de la venta" align="center" value="" required/>

      </td>
      <td style=" padding-right: 20px">
        <input class="form-control" require autocomplete="off" type="number" name="ValHipoteca" id="ValHipoteca" onkeypress="return soloNumeros(event)" placeholder="Digite Valor de la Hipoteca" align="center" value="" required/>

      </td>
      <td>

      <a class="btn btn-primary" href="#" id="ValEscrituraboton"><i class="fa fa-eye"></i> Simular</a>

      </td>
    </tr>
  </table>
  <br>


</div>



 <div id="contenidosimulador" class="col-lg-12" style="display: none;">
   <table style="width:100%;">
     <tr>

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

                <!-- <ul class="nav nav-tabs" style="border-style:none;">
                   <li class="active"><a data-toggle="tab" style="border-style:none;" href="#home"></a></li>
                   <li><a data-toggle="tab" href="#menu3">Persona Natural</a></li>
                   <li><a data-toggle="tab" href="#menu4">Persona Juridica</a></li>

                 </ul>-->

                <!--  <div class="tab-content" style="width: 400px">
                   <br>
                   <div id="home" class="tab-pane fade in active">

                   </div>
                   <div id="menu3" class="tab-pane fade">-->
                  <input  class="form-control" require autocomplete="off" type="number" name="totalchipoteca" id="totalchipoteca" require onkeypress="return soloNumeros(event)" disabled align="center"  required/>
                <!--    </div>-->
                  <!--  <div id="menu4" class="tab-pane fade">
                    <input  class="form-control" require autocomplete="off" type="number" name="totalchipotecajuridico" id="totalchipotecajuridico" require onkeypress="return soloNumeros(event)" disabled align="center"  required/></td>
                   </div>-->

                 </div>
               </div>
           </tr>




   </table>
 <br>

  <label  align="center" >He finalizado la solicitud</label> <br>
   <input class="animated-checkbox" type="checkbox" name="mirarbotones" id="mirarbotones" style=" zoom: 200% "   required  value="1" onchange="javascript:showveresto()" />

 </div>

 <br><br>


 <!-- Fin Simulador -->



<!--Fin Formulario persona natural Hipoteca -->



';

}

else{

}



if( $_POST['opcion2']=='Leasing '){
$opt=$_POST['opcion2'];


$formulario = '



<!--Formulario persona Juridica leasing -->
<div class="card mb-3 text-white bg-primary">
    <div class="card-body">
      <h3> Formulario <strong>Leasing </strong> para persona : <strong>Jurídica </strong> .</h3>
    </div>
</div>

 <div class="alert alert-info" align="center">
 <strong > Datos del inmueble</strong>
 </div>

 <table style=" width: 90%" >
 <th>
 <!-- <label for="tipopersona" >Tipo Persona</label>-->
 </th>
 <th>
 <!-- <label for="tipoacto" >Tipo Acto</label>-->
 </th>
 <tr>
 <td>
 <input class="form-control" autocomplete="off" type="hidden" id="tipopersona" name="tipopersona" placeholder="tipopersona" value="Persona Jurídica"/>
 </td>
 <td>
 <input class="form-control" autocomplete="off" type="hidden" id="tipoacto" name="tipoacto" placeholder="tipoacto" value="Leasing"/>
 </td>
 </tr>
 </table>


 <!-- Primer inmueble-->

 <div align="center">
 <table>
 <th style="width: 500px;" >
 <label for="matriculainmobiliaria" >No Matricula ( del inmueble )</label>
 </th>

 <th style="width: 500px;" >
 <label for="documentoinformador">Si tiene un certificado por favor selecciónelo (esto es opcional)</label>
 </th>

 <th>
 </th>

 <tr>
 <td style=" padding-right: 20px">
 <input style="width: 100%" class="form-control" autocomplete="off" type="text" minlength="6" maxlength="50" name="matriculainmobiliaria" required placeholder="Ingrese el numero de a matricula inmobiliaria ejemplo ( 50c-000000 )" value=""/>
 </td>
 <td style="width: 500px;" align="center" >
 <input type="file" name="documentoinformador" id="documentoinformador" accept=".pdf" class="inputfile inputfile-5" data-multiple-caption="{count} files selected" style="opacity:0;font-size:100%;" value=""/>

 <label for="documentoinformador" style=" font-size:90%;" data-toggle="tooltip" ><span style=" width: 150px" ></span> <strong style=" font-size:100%;color: #fff;"> Seleccionar</strong></label>

 </td>

 <td>
 <button style="cursor: pointer;" type="button" class="btn btn-primary boton_mostrar" onClick="vermatriculas()"><strong><i class="fa fa-sort"></i></strong></button>

 </td>
 </tr>
 </table>
 </div>

 <!-- Fin Primer inmueble-->



 <div align="center" id="matriculasescondidas" >
 <br>
 <!-- Segundo inmueble-->
 <table>
 <th colspan="3" >
 <div class="alert alert-warning" align="center" >
 <strong> Si tiene mas de un numero de matricula ingréselos si no deje los espacios en blanco </strong>
 </div>

 <br>
 </th>


 <tr >
 <td style=" width: 500px;padding-right: 20px" >
 <input class="form-control" autocomplete="off" type="text" placeholder="Ingrese el numero de a matricula inmobiliaria ejemplo ( 50c-000000 )" name="estado" value=""/>
 </td>
 <td style="width: 500px;" align="center">
 <input type="file" name="documentonotaria" id="documentonotaria" accept=".pdf" class="inputfile inputfile-5" data-multiple-caption="{count} files selected" style="opacity:0;font-size:100%;" value=""/>

 <label for="documentonotaria" style=" font-size:90%;" data-toggle="tooltip" ><span style=" width: 150px" ></span> <strong style=" font-size:100%;color: #fff;"> Seleccionar</strong></label>
 </td>
 <td>
 <button type="hidden" style="visibility:hidden;padding-top: 0px;" class="btn btn-primary" ><strong> o </strong></button>
 </td>
 </tr>
 </table>
 <!-- Fin Segundo inmueble-->
 <br>
 <!-- Tercer inmueble-->
 <table>
 <th style="width: 500px;" >
 </th>

 <th style="width: 500px;" >
 </th>

 <th>
 </th>

 <tr >
 <td style=" padding-right: 20px" >
 <input class="form-control" autocomplete="off" type="text" placeholder="Ingrese el numero de a matricula inmobiliaria ejemplo ( 50c-000000 )" name="terceramatricula" value=""/>
 </td>
 <td style="width: 500px;" align="center">
 <input type="file" name="tercerdocumento" id="tercerdocumento" accept=".pdf" class="inputfile inputfile-5" data-multiple-caption="{count} files selected" style="opacity:0;font-size:100%;" value=""/>

 <label for="tercerdocumento" style=" font-size:90%;" data-toggle="tooltip" ><span style=" width: 150px" ></span> <strong style=" font-size:100%;color: #fff;"> Seleccionar</strong></label>

 </td>
 <td>
 <button type="hidden" style="visibility:hidden;padding-top: 0px;" class="btn btn-primary" ><strong> o </strong></button>
 </td>
 </tr>
 </table>
 <!-- Fin Tercer inmueble-->
 <br>
 <!-- Cuarto inmueble-->
 <table>
 <th style="width: 500px;" >
 </th>

 <th style="width: 500px;" >
 </th>

 <th>
 </th>

 <tr >
 <td style=" padding-right: 20px" >
 <input class="form-control" autocomplete="off" type="text" placeholder="Ingrese el numero de a matricula inmobiliaria ejemplo ( 50c-000000 )" name="cuartamatricula" value=""/>
 </td>
 <td style="width: 500px;" align="center">
 <input type="file" name="cuartodocumento" id="cuartodocumento" accept=".pdf" class="inputfile inputfile-5" data-multiple-caption="{count} files selected" style="opacity:0;font-size:100%;" value=""/>

 <label for="cuartodocumento" style=" font-size:90%;" data-toggle="tooltip" ><span style=" width: 150px" ></span> <strong style=" font-size:100%;color: #fff;"> Seleccionar</strong></label>

 </td>
 <td>
 <button type="hidden" style="visibility:hidden;padding-top: 0px;" class="btn btn-primary" ><strong> o </strong></button>
 </td>
 </tr>
 </table>
 <!--Fin Cuarto inmueble-->
 <br>
 <!-- Quinto inmueble-->
 <table>
 <th style="width: 500px;" >
 </th>

 <th style="width: 500px;" >
 </th>

 <th>
 </th>

 <tr >
 <td style=" padding-right: 20px" >
 <input class="form-control" autocomplete="off" type="text" placeholder="Ingrese el numero de a matricula inmobiliaria ejemplo ( 50c-000000 )" name="quintamatricula" value=""/>
 </td>
 <td style="width: 500px;" align="center">
 <input type="file" name="quintodocumento" id="quintodocumento" accept=".pdf" class="inputfile inputfile-5" data-multiple-caption="{count} files selected" style="opacity:0;font-size:100%;" value=""/>

 <label for="quintodocumento" style=" font-size:90%;" data-toggle="tooltip" ><span style=" width: 150px" ></span> <strong style=" font-size:100%;color: #fff;"> Seleccionar</strong></label>

 </td>
 <td>
 <button type="hidden" style="visibility:hidden;padding-top: 0px;" class="btn btn-primary" ><strong> o </strong></button>
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
 <input class="form-control" autocomplete="off" type="number" id="cedulapropietario" name="cedulapropietario" placeholder="Ingrese el numero de Documento o el Nit del propietario ( Futuro vendedor )" required value=""/>
 </td>
 <td>
 <select class="form-control" style="height:5%" name="estadocivilpropietario" required />

 <option value="">Seleccione el estado civil del propietario ( Futuro vendedor )</option>
 <option value="No se sabe">No se sabe</option>
 <option value="Entidad">Entidad</option>
 <option value="Casado con sociedad conyugal vigente">Casado con sociedad conyugal vigente</option>
 <option value="Casado con sociedad conyugal disuelta y liquidada">Casado con sociedad conyugal disuelta y liquidada</option>
 <option value="Soltero sin unión marital de hecho">Soltero sin unión marital de hecho</option>

 <option value="Soltero con unión marital de hecho">Soltero con unión marital de hecho</option>

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
 <th style="width: 1000px;">
 <label for="nombrelocatario" >Nombre / Entidad del locatario </label>
 </th>
 <!--<th style="width: 500px;">
  <label for="nombreotrolocatario" >Segundo nombre del locatario </label>
 </th>-->
 <tr>
 <td style=" padding-right: 20px">
 <input class="form-control" autocomplete="off" type="text" name="nombrelocatario" required placeholder="Ingrese el Nombre del locatario ( Futuro comprador )" value=""/>
 </td>
 <input class="form-control" autocomplete="off" type="hidden" name="nombreotrolocatario" placeholder="Ingrese el segundo nombre del locatario (opcional)" value=""/>
 </tr>
 </table>
 </div>
 <input class="form-control" autocomplete="off" type="hidden" placeholder="Ingrese el primer apellido del locatario ( Futuro comprador )" name="primerapellido"  value=""/>
 <input class="form-control" autocomplete="off" type="hidden" name="segundoapellido" placeholder="Ingrese el segundo apellido del locatario (opcional)" value=""/>
 <input class="form-control" autocomplete="off" type="hidden" name="tipodocumentolocatario" placeholder="Ingrese el segundo apellido del locatario (opcional)" value=""/>
 <br>
 <div align="center">
 <table>
 <th style="width: 500px;">
 <label for="cedulalocatario" >Nit o razon social del Locatario </label>
 </th>
 <th style="width: 500px;">
   <label for="numerosolicitud" >Correo Electrónico</label>
  </th>
 <tr>
 <td style=" padding-right: 20px">
 <input class="form-control" autocomplete="off" type="number" name="cedulalocatario" required placeholder="Ingrese el Nit o razon social del Locatario ( Futuro comprador )" value=""/>
 </td>
 <td>
   <input id="correo" class="form-control" autocomplete="off" type="email" name="numerosolicitud" required placeholder="Ingrese el correo electrónico del Locatario ( Futuro comprador )" value=""/>

 </td>
 </tr>
 </table>
 </div>
 <br>




 <div class="alert alert-info">
 <strong> Si tiene alguna observación sobre esta solicitud por favor ingrésela ( esto es opcional )</strong>
 </div>


 <div class="">
 <label for="observacion" >Observaciones</label>

 <textarea class="form-control" autocomplete="off" type="text" name="observacion" rows="4" cols="50"></textarea>
 </div>

 <input class="form-control" autocomplete="off" type="hidden" id="ValHipoteca" name="ValHipoteca" placeholder="ValHipoteca" value=""/>
 <input class="form-control" autocomplete="off" type="hidden" id="ValVenta" name="ValVenta" placeholder="ValVenta" value=""/>
 <br>

 <div class="alert alert-info">
 <strong> Liquidador</strong>
 </div>


 <div >

 <input class="form-control" autocomplete="off" type="hidden" placeholder="Ingrese el primer apellido del locatario ( Futuro comprador )" name="fk_idautorizacion" value=""/>

 </div>



 <!-- Simulador -->

 <br>




 <br>

 <table style="width: 96%">
 <tr>
 <th>Valor escritura</th>
 <th>
 $
 </th>
 <th>
 <input class="form-control" require autocomplete="off" type="number" name="ValEscritura" id="ValEscritura" onkeypress="return soloNumeros(event)" placeholder="Digite Valor de la escritura" align="center" value="" required/>

 </th>
 <th style=" padding-left: 1%" >
 <p><a class="btn btn-primary" href="#" id="ValEscrituraboton"><i class="fa fa-eye"></i> Simular</a></p>


 </th>
 </table>
 <br>

 <div id="contenidosimulador" class="col-lg-12" style="display: none;">
 <table style="width: 96%">


 </tr>
 <tr>
 <td colspan="3">
 <br>
 <div class="alert alert-danger" style="width: 100%">
 <strong> Alerta!!! <br><br><br></strong> Estos simuladores son solo un aproximado, el Banco y la Notaria 16 NO se hacen responsables si el costo incrementa !!!
 </div>
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
 <td> <input class="form-control" require autocomplete="off" type="number" name="gastosnotarialesvendedor" id="gastosnotarialesvendedor" require onkeypress="return soloNumeros(event)" disabled align="center" required/></td>
 </tr>
 <!-- <tr>
 <td>Hojas Notariales</td>
 <td> <input class="form-control" require autocomplete="off" type="number" name="hojasnotarialesvendedor" id="hojasnotarialesvendedor" require onkeypress="return soloNumeros(event)" align="center" required/></td>
 </tr> -->
 <!-- <tr>
 <td>Fotocopias,Autenticaciones Y Biometria</td>
 <td> <input class="form-control" require autocomplete="off" type="number" name="fotocopiasotrosvendedor" id="fotocopiasotrosvendedor" require onkeypress="return soloNumeros(event)" align="center" required/></td>
 </tr> -->

 <!-- <tr>
 <td>Super Notariado y Registro</td>
 <td> <input class="form-control" require autocomplete="off" type="number" name="supernotariadovendedor" id="supernotariadovendedor" require onkeypress="return soloNumeros(event)" align="center" required/></td>
 </tr> -->

 <tr>
 <td >Retención en la fuente </td>
 <td>
 $
 </td>
 <td style=" padding-top: 5px; "> <input class="form-control" step=".01" require autocomplete="off" type="number" name="Retencion" id="Retencion" require onkeypress="return soloNumeros(event)" align="center" disabled required/>
 </td>
 </tr>
 <tr>
 <td>Iva</td>
 <td>
 $
 </td>
 <td style=" padding-top: 5px; "> <input class="form-control" require autocomplete="off" type="number" name="ivavendedor" id="ivavendedor" require onkeypress="return soloNumeros(event)" align="center" disabled required/></td>
 </tr>


 <tr>
 <td style=" padding-top: 25px; text-align: right;">Total Vendedor :
 </td>
 <td>
 </td>
 <td style=" padding-top: 25px; text-align: right;">

 <!-- <input class="form-control" require autocomplete="off" type="number" name="totalv" id="totalv" require onkeypress="return soloNumeros(event)" disabled align="center" required/>-->

 <input class="form-control" require autocomplete="off" type="number" name="totaljuridico" id="totaljuridico" require onkeypress="return soloNumeros(event)" disabled align="center" required/></td>

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
 <td> <input class="form-control" require autocomplete="off" type="number" name="gastosnotarialescomprador" id="gastosnotarialescomprador" require onkeypress="return soloNumeros(event)" align="center" disabled required/></td>
 </tr>
 <!-- <tr>
 <td>Hojas Notariales</td>
 <td> <input class="form-control" require autocomplete="off" type="number" name="hojasnotarialescomprador" id="hojasnotarialescomprador" require onkeypress="return soloNumeros(event)" align="center" required/></td>
 </tr>
 <tr>
 <td>Fotocopias,Autenticaciones Y Biometria</td>
 <td> <input class="form-control" require autocomplete="off" type="number" name="fotocopiasotroscomprador" id="fotocopiasotroscomprador" require onkeypress="return soloNumeros(event)" align="center" required/></td>
 </tr> -->

 <!-- <tr>
 <td>Super Notariado y Registro</td>
 <td> <input class="form-control" require autocomplete="off" type="number" name="supernotariadocomprador" id="supernotariadocomprador" require onkeypress="return soloNumeros(event)" align="center" required/></td>
 </tr>

 <tr>
 <td>Impuesto otros</td>
 <td> <input class="form-control" require autocomplete="off" type="number" name="impotros" id="impotros" require onkeypress="return soloNumeros(event)" align="center" required/></td>
 </tr> -->
 <tr>
 <td>Registro</td>
 <td>
 $
 </td>
 <td style=" padding-top: 5px; "> <input class="form-control" require autocomplete="off" type="number" name="registro" id="registro" require onkeypress="return soloNumeros(event)" align="center" disabled required/></td>
 </tr>
 <tr>
 <td>Beneficencia </td>
 <td>
 $
 </td>
 <td style=" padding-top: 5px; "> <input class="form-control" require autocomplete="off" type="number" name="benefi" id="benefi" require onkeypress="return soloNumeros(event)" align="center" disabled required/>
 </td>
 </tr>

 <tr>
 <td>Iva</td>
 <td>
 $
 </td>
 <td style=" padding-top: 5px; "> <input class="form-control" require autocomplete="off" type="number" name="ivacomprador" id="ivacomprador" require onkeypress="return soloNumeros(event)" align="center" disabled required/></td>
 </tr>

 <tr>
 <td style=" padding-top: 25px; text-align: right;">Total Comprador : </td>
 <td>

 </td>
 <td style=" padding-top: 25px; text-align: right;"><input class="form-control" require autocomplete="off" type="number" name="totalc" id="totalc" require onkeypress="return soloNumeros(event)" disabled align="center" required/></td>

 </tr>
 </table>
 <br>

  <label  align="center" >He finalizado la solicitud</label> <br>
   <input class="animated-checkbox" type="checkbox" name="mirarbotones" id="mirarbotones" style=" zoom: 200% "   required  value="1" onchange="javascript:showveresto()" />

 </div>

 <br><br>


 <!-- Fin Simulador -->



<!--Fin Formulario persona Juridica leasing -->




';

}
else if( $_POST['opcion2']=='Hipoteca '){
$opt=$_POST['opcion2'];
$formulario = '



<!--Formulario persona Juridica Hipoteca -->

<div class="card mb-3 text-white bg-primary">
                <div class="card-body">

                  <h3> Formulario de <strong> Credito Hipotecario </strong> para persona : <strong>Jurídica </strong> .</h3>

                </div>
</div>

 <div class="alert alert-info" align="center">
 <strong > Datos del inmueble</strong>
 </div>

 <table style=" width: 90%" >
 <th>
 <!-- <label for="tipopersona" >Tipo Persona</label>-->
 </th>
 <th>
 <!-- <label for="tipoacto" >Tipo Acto</label>-->
 </th>
 <tr>
 <td>
 <input class="form-control" autocomplete="off" type="hidden" id="tipopersona" name="tipopersona" placeholder="tipopersona" value="Persona Jurídica"/>
 </td>
 <td>
 <input class="form-control" autocomplete="off" type="hidden" id="tipoacto" name="tipoacto" placeholder="tipoacto" value="Hipoteca"/>
 </td>
 </tr>
 </table>


 <!-- Primer inmueble-->

 <div align="center">
 <table>
 <th style="width: 500px;" >
 <label for="matriculainmobiliaria" >No Matricula ( del inmueble )</label>
 </th>

 <th style="width: 500px;" >
 <label for="documentoinformador">Si tiene un certificado por favor selecciónelo (esto es opcional)</label>
 </th>

 <th>
 </th>

 <tr>
 <td style=" padding-right: 20px">
 <input style="width: 100%" class="form-control" autocomplete="off" type="text" minlength="6" maxlength="50" name="matriculainmobiliaria" required placeholder="Ingrese el numero de a matricula inmobiliaria ejemplo ( 50c-000000 )" value=""/>
 </td>
 <td style="width: 500px;" align="center" >
 <input type="file" name="documentoinformador" id="documentoinformador" accept=".pdf" class="inputfile inputfile-5" data-multiple-caption="{count} files selected" style="opacity:0;font-size:100%;" value=""/>

 <label for="documentoinformador" style=" font-size:90%;" data-toggle="tooltip" ><span style=" width: 150px" ></span> <strong style=" font-size:100%;color: #fff;"> Seleccionar</strong></label>

 </td>

 <td>
 <button style="cursor: pointer;" type="button" class="btn btn-primary boton_mostrar" onClick="vermatriculas()"><strong><i class="fa fa-sort"></i></strong></button>

 </td>
 </tr>
 </table>
 </div>

 <!-- Fin Primer inmueble-->



 <div align="center" id="matriculasescondidas" >
 <br>
 <!-- Segundo inmueble-->
 <table>
 <th colspan="3" >
 <div class="alert alert-warning" align="center" >
 <strong> Si tiene mas de un numero de matricula ingréselos si no deje los espacios en blanco </strong>
 </div>

 <br>
 </th>


 <tr >
 <td style=" width: 500px;padding-right: 20px" >
 <input class="form-control" autocomplete="off" type="text" placeholder="Ingrese el numero de a matricula inmobiliaria ejemplo ( 50c-000000 )" name="estado" value=""/>
 </td>
 <td style="width: 500px;" align="center">
 <input type="file" name="documentonotaria" id="documentonotaria" accept=".pdf" class="inputfile inputfile-5" data-multiple-caption="{count} files selected" style="opacity:0;font-size:100%;" value=""/>

 <label for="documentonotaria" style=" font-size:90%;" data-toggle="tooltip" ><span style=" width: 150px" ></span> <strong style=" font-size:100%;color: #fff;"> Seleccionar</strong></label>
 </td>
 <td>
 <button type="hidden" style="visibility:hidden;padding-top: 0px;" class="btn btn-primary" ><strong> o </strong></button>
 </td>
 </tr>
 </table>
 <!-- Fin Segundo inmueble-->
 <br>
 <!-- Tercer inmueble-->
 <table>
 <th style="width: 500px;" >
 </th>

 <th style="width: 500px;" >
 </th>

 <th>
 </th>

 <tr >
 <td style=" padding-right: 20px" >
 <input class="form-control" autocomplete="off" type="text" placeholder="Ingrese el numero de a matricula inmobiliaria ejemplo ( 50c-000000 )" name="terceramatricula" value=""/>
 </td>
 <td style="width: 500px;" align="center">
 <input type="file" name="tercerdocumento" id="tercerdocumento" accept=".pdf" class="inputfile inputfile-5" data-multiple-caption="{count} files selected" style="opacity:0;font-size:100%;" value=""/>

 <label for="tercerdocumento" style=" font-size:90%;" data-toggle="tooltip" ><span style=" width: 150px" ></span> <strong style=" font-size:100%;color: #fff;"> Seleccionar</strong></label>

 </td>
 <td>
 <button type="hidden" style="visibility:hidden;padding-top: 0px;" class="btn btn-primary" ><strong> o </strong></button>
 </td>
 </tr>
 </table>
 <!-- Fin Tercer inmueble-->
 <br>
 <!-- Cuarto inmueble-->
 <table>
 <th style="width: 500px;" >
 </th>

 <th style="width: 500px;" >
 </th>

 <th>
 </th>

 <tr >
 <td style=" padding-right: 20px" >
 <input class="form-control" autocomplete="off" type="text" placeholder="Ingrese el numero de a matricula inmobiliaria ejemplo ( 50c-000000 )" name="cuartamatricula" value=""/>
 </td>
 <td style="width: 500px;" align="center">
 <input type="file" name="cuartodocumento" id="cuartodocumento" accept=".pdf" class="inputfile inputfile-5" data-multiple-caption="{count} files selected" style="opacity:0;font-size:100%;" value=""/>

 <label for="cuartodocumento" style=" font-size:90%;" data-toggle="tooltip" ><span style=" width: 150px" ></span> <strong style=" font-size:100%;color: #fff;"> Seleccionar</strong></label>

 </td>
 <td>
 <button type="hidden" style="visibility:hidden;padding-top: 0px;" class="btn btn-primary" ><strong> o </strong></button>
 </td>
 </tr>
 </table>
 <!--Fin Cuarto inmueble-->
 <br>
 <!-- Quinto inmueble-->
 <table>
 <th style="width: 500px;" >
 </th>

 <th style="width: 500px;" >
 </th>

 <th>
 </th>

 <tr >
 <td style=" padding-right: 20px" >
 <input class="form-control" autocomplete="off" type="text" placeholder="Ingrese el numero de a matricula inmobiliaria ejemplo ( 50c-000000 )" name="quintamatricula" value=""/>
 </td>
 <td style="width: 500px;" align="center">
 <input type="file" name="quintodocumento" id="quintodocumento" accept=".pdf" class="inputfile inputfile-5" data-multiple-caption="{count} files selected" style="opacity:0;font-size:100%;" value=""/>

 <label for="quintodocumento" style=" font-size:90%;" data-toggle="tooltip" ><span style=" width: 150px" ></span> <strong style=" font-size:100%;color: #fff;"> Seleccionar</strong></label>

 </td>
 <td>
 <button type="hidden" style="visibility:hidden;padding-top: 0px;" class="btn btn-primary" ><strong> o </strong></button>
 </td>
 </tr>
 </table>
 <!-- Quinto inmueble-->


 </div>
 <br>
 <!-- Fin Segundo inmueble-->

 <br>

 <div class="alert alert-info" align="center">
 <strong> Datos del Actual propietario </strong>
 </div>
 <br>


 <div align="center">
 <table>
 <th style="width: 500px;">
 <label for="cedulapropietario" >No de Documento o Nit del Actual propietario  </label>
 </th>
 <th style="width: 500px;">
 <label for="estadocivilpropietario" >Estado Civil Actual propietario  </label>
 </th>
 <tr>
 <td style=" padding-right: 20px">
 <input class="form-control" autocomplete="off" type="number" id="cedulapropietario" name="cedulapropietario" placeholder="Ingrese el numero de Documento o el Nit del propietario ( Futuro vendedor )" required value=""/>
 </td>
 <td>
 <select class="form-control" style="height:5%" name="estadocivilpropietario" required />

 <option value="">Seleccione el estado civil del propietario ( Futuro vendedor )</option>
 <option value="No se sabe">No se sabe</option>
 <option value="Entidad">Entidad</option>
 <option value="Casado con sociedad conyugal vigente">Casado con sociedad conyugal vigente</option>
 <option value="Casado con sociedad conyugal disuelta y liquidada">Casado con sociedad conyugal disuelta y liquidada</option>
 <option value="Soltero sin unión marital de hecho">Soltero sin unión marital de hecho</option>

 <option value="Soltero con unión marital de hecho">Soltero con unión marital de hecho</option>

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
 <th style="width: 1000px;">
 <label for="nombrelocatario" >Nombre / Entidad del locatario </label>
 </th>
 <!--<th style="width: 500px;">
  <label for="nombreotrolocatario" >Segundo nombre del locatario </label>
 </th>-->
 <tr>
 <td style=" padding-right: 20px">
 <input class="form-control" autocomplete="off" type="text" name="nombrelocatario" required placeholder="Ingrese el Nombre del locatario ( Futuro comprador )" value=""/>
 </td>
 <input class="form-control" autocomplete="off" type="hidden" name="nombreotrolocatario" placeholder="Ingrese el segundo nombre del locatario (opcional)" value=""/>
 </tr>
 </table>
 </div>
 <input class="form-control" autocomplete="off" type="hidden" placeholder="Ingrese el primer apellido del locatario ( Futuro comprador )" name="primerapellido"  value=""/>
 <input class="form-control" autocomplete="off" type="hidden" name="segundoapellido" placeholder="Ingrese el segundo apellido del locatario (opcional)" value=""/>
 <input class="form-control" autocomplete="off" type="hidden" name="tipodocumentolocatario" placeholder="Ingrese el segundo apellido del locatario (opcional)" value=""/>
 <br>
 <div align="center">
 <table>
 <th style="width: 500px;">
 <label for="cedulalocatario" >Nit o razon social del Locatario </label>
 </th>
 <th style="width: 500px;">
   <label for="numerosolicitud" >Correo Electrónico</label>
  </th>
 <tr>
 <td style=" padding-right: 20px">
 <input class="form-control" autocomplete="off" type="number" name="cedulalocatario" required placeholder="Ingrese el Nit o razon social del Locatario ( Futuro comprador )" value=""/>
 </td>
 <td>
   <input id="correo" class="form-control" autocomplete="off" type="email" name="numerosolicitud" required placeholder="Ingrese el correo electrónico del Locatario ( Futuro comprador )" value=""/>

 </td>
 </tr>
 </table>
 </div>
 <br>




 <div class="alert alert-info">
 <strong> Si tiene alguna observación sobre esta solicitud por favor ingrésela ( esto es opcional )</strong>
 </div>


 <div class="">
 <label for="observacion" >Observaciones</label>

 <textarea class="form-control" autocomplete="off" type="text" name="observacion" rows="4" cols="50"></textarea>
 </div>
 <input class="form-control" autocomplete="off" type="hidden" id="ValEscritura" name="ValEscritura" placeholder="ValVenta" value=""/>
 <br>

 <div class="alert alert-info">
 <strong> Liquidador</strong>
 </div>


 <div >

 <input class="form-control" autocomplete="off" type="hidden" placeholder="Ingrese el primer apellido del locatario ( Futuro comprador )" name="fk_idautorizacion" value=""/>

 </div>



 <!-- Simulador -->

 <br>




 <div align="center" style=" padding-left: 5%" >
  <table  style="width:100%;">
    <th>
      <label   >Valor Venta</label>
    </th>
    <th>
      <label   >Valor Hipoteca</label>
    </th>
    <th ><label ></label>
    </th>
    <tr>
      <td style=" padding-right: 20px">
        <input class="form-control" require autocomplete="off" type="number" name="ValVenta" id="ValVenta" onkeypress="return soloNumeros(event)" placeholder="Digite Valor de la venta" align="center" value="" required/>

      </td>
      <td style=" padding-right: 20px">
        <input class="form-control" require autocomplete="off" type="number" name="ValHipoteca" id="ValHipoteca" onkeypress="return soloNumeros(event)" placeholder="Digite Valor de la Hipoteca" align="center" value="" required/>

      </td>
      <td>

      <a class="btn btn-primary" href="#" id="ValEscrituraboton"><i class="fa fa-eye"></i> Simular</a>

      </td>
    </tr>
  </table>
  <br>


</div>



 <div id="contenidosimulador" class="col-lg-12" style="display: none;">
   <table style="width:100%;">
     <tr>

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

                <!-- <ul class="nav nav-tabs" style="border-style:none;">
                   <li class="active"><a data-toggle="tab" style="border-style:none;" href="#home"></a></li>
                   <li><a data-toggle="tab" href="#menu3">Persona Natural</a></li>
                   <li><a data-toggle="tab" href="#menu4">Persona Juridica</a></li>

                 </ul>-->

                <!--  <div class="tab-content" style="width: 400px">
                   <br>
                   <div id="home" class="tab-pane fade in active">

                   </div>
                   <div id="menu3" class="tab-pane fade">-->
                   <input  class="form-control" require autocomplete="off" type="number" name="totalchipotecajuridico" id="totalchipotecajuridico" require onkeypress="return soloNumeros(event)" disabled align="center"  required/></td>
                <!--    </div>-->
                  <!--  <div id="menu4" class="tab-pane fade">
                   </div>-->

                 </div>
               </div>
           </tr>




   </table>
 <br>

  <label  align="center" >He finalizado la solicitud</label> <br>
   <input class="animated-checkbox" type="checkbox" name="mirarbotones" id="mirarbotones" style=" zoom: 200% "   required  value="1" onchange="javascript:showveresto()" />

 </div>

 <br><br>


 <!-- Fin Simulador -->





<!--Fin Formulario persona Juridica Hipoteca -->



';

}

else{

}


?>


            

              





        <!-- Todos-->
              <div>
                <?php echo $formulario; ?>
              </div>
              <div id="veresto" style="display: none;">

              <table>
                <tr>
                  <td><input type="hidden" name="docprimernotaria" id="docprimernotaria"/></td>
                  <td><input type="hidden" name="docsegundonotaria" id="docsegundonotaria"/></td>
                  <td><input type="hidden" name="docterceronotaria" id="docterceronotaria"/></td>
                  <td><input type="hidden" name="doccuartonotaria" id="doccuartonotaria"/></td>
                  <td><input type="hidden" name="docquintonotaria" id="docquintonotaria"/></td>
                </tr>
                <tr>
                  <td><input type="hidden" name="checkprimero" id="checkprimero" value="No" /></td>
                  <td><input type="hidden" name="checksegundo" id="checksegundo" value="No"/></td>
                  <td><input type="hidden" name="checktercero" id="checktercero" value="No"/></td>
                  <td><input type="hidden" name="checkcuarto" id="checkcuarto" value="No"/></td>
                  <td><input type="hidden" name="checkquinto" id="checkquinto" value="No"/></td>
                </tr>
                <tr>
                  <td><input type="hidden" name="viabilidad" id="viabilidad"/></td>
                  <td><input type="hidden" name="observacionesnotaria" id="observacionesnotaria"/></td>
                  <td><input type="hidden" name="fechanotaria" id="fechanotaria" value="Sin Responder"/></td>
                  <td></td>
                  <td></td>
                </tr>
              </table>

              <table>
                  <th>
                    <input style="visibility:hidden;padding-top: 0px;" autocomplete="off" type="datetime"  name="fecha" id="fecha" value="<?php $timezone = -5; //(GMT -5:00) EST (U.S. & Canada)
                    echo gmdate("Y/m/j H:i:s a", time() + 3600*($timezone+date("I"))); ?>" />
                  </th>
                  <th>
                    <select style="visibility:hidden;padding-top: 0px;" name="sucursal" id="sucursal" >
                      <?php foreach($this->modelo->Listarsucursal() as $r): ?>
                      <option value="<?=$r->idsucursal?>" <?=$p->getsucursal()==$r->idsucursal ? "selected": ""?>><?=$r->nombre?> </option>
                      <?php endforeach;?>
                    </select>
                  </th>
                  <th>
                    <select style="visibility:hidden;padding-top: 0px;" name="fk_idnotaria" id="fk_idnotaria" >
                      <?php foreach($this->modelo->Listarnombresnotaria() as $r): ?>
                      <option value="<?=$r->idnotaria?>" <?=$p->getfk_idnotaria()==$r->idnotaria ? "selected": ""?>><?=$r->Nombresnotaria?> </option>
                      <?php endforeach;?>
                    </select></th>
                </table>



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



              </div>





          <!--Fin Todos-->







            <!-- Fin Formulario-->




            <div align="center" class="aparece">

              <div align="center" class="alert alert-info">
                <strong> Datos de la solicitud </strong>
                <br>
              </div>
                <br>
                <label>Seleccione el tipo de persona </label>
                <br><br>
                  <ul  class="nav nav-pills " style=" width: 100%">

                    <li style=" width: 50%; padding-left: 3%; padding-right: 1%;"><a class="btn-info" data-toggle="pill" href="#menu1">Persona Natural</a></li>
                    <li style=" width: 45%; "><a class="btn-info" data-toggle="pill" href="#menu2">Persona Jurídica</a></li>
                  </ul>

            </div>

            <div align="center" class="desaparece" style="display:none;">
            <!-- <br>
              <a style=" background-color:#7E7E7E;border-color:#7E7E7E " class="btn btn-primary btn-lg " href="?c=solicitud&a=registrarsolicitud">Cambiar Solicitud</a>
              -->
            </div>



            <div class="tab-content">
<br><br>

              <div id="menu1" style=" background-color: white; width:100%; padding-top: 0px" class="tab-pane fade">
                <br>




                <form name="personanatural" id="personanatural" method="post" action="">
                  <div style=" width: 100%" align="center">

                    <label>Seleccione el tipo de la solicitud</label>
                    <br>
                    <select style="height:5%; width: 93%; border-radius: 5px" id="opcion" name="opcion" onchange="this.form.submit()">
                      <option value="0">  Seleccione el tipo de solicitud que desea realizar </option>
                      <?php

                       foreach ($arr as $personanatural){

                       if($personanatural == $opt){
                       echo "<option value='{$personanatural}' selected >$personanatural</option>";
                       }else{
                       echo "<option value='{$personanatural}' >$personanatural</option>";
                       }

                       }

                       ?>

                    </select>
                  </div><br>


                </form>





              </div>


              <div id="menu2" style=" background-color: white; width:100%; padding-top: 0px" class="tab-pane fade">
                <br>


                <div style=" width: 100%" align="center">

                  <label>Seleccione el tipo de la solicitud</label>


                  <form name="personajuridica" id="personajuridica" method="post" action="">
                    <select style="height:5%; width: 93%; border-radius: 5px" id="opcion2" name="opcion2" onchange="this.form.submit()">
                      <option value="0">  Seleccione el tipo de solicitud que desea realizar </option>
                      <?php

                         foreach ($arr2 as $personajuridica){

                         if($personajuridica == $opt){
                         echo "<option value='{$personajuridica}' selected >$personajuridica</option>";
                         }else{
                         echo "<option value='{$personajuridica}' >$personajuridica</option>";
                         }

                         }

                         ?>

                    </select>


                  </form>
                </div><br>


              </div><br><br><br>
            </div>



            <!--fin mostrar dependiendo del select-->

          </div>

        </div>

</div>
<br><br><br><br><br><br><br>
  </main>


<?php endif;?>  <!-- Gerente-->











































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
    <div align="right">
    <a style=" background-color:#7E7E7E;border-color:#7E7E7E " class="btn btn-primary btn-lg " href="?c=solicitud&a=registrarsolicitud">Cambiar Solicitud</a>
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
                <form name="solicitud" class="form-horizontal" method="POST" enctype="multipart/form-data" action="?c=solicitud&a=Guardar">

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
               <input style="width: 100%" class="form-control" autocomplete="off" type="text" minlength="6" maxlength="50" name="matriculainmobiliaria" value="<?=$p->getmatriculainmobiliaria()?>"/>
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
                     <button type="button" class="btn btn-danger btn-lg" data-toggle="modal"style="font-size:80%;width: 230px;background-color: gray;border-color: gray;"> Sin Certificado </button>
                    <?php }}?>
                    
                      <!-- ver certificado 1-->
                 
               </td>








               <td style="width: 400px; padding-top: 10px"  >
                    <!-- ver certificado 1 Notaria -->
                   
                    <?php 
                    if (isset($r->docprimernotaria)){
                    if((substr($r->docprimernotaria,(strlen($r->docprimernotaria))-4)) == ".pdf"){ ?>
                    <a class="colorr btn btn-info btn-lg"  data-toggle="modal" data-target="#myModaldocprimero<?=$r->idsolicitud?>"  style="font-size:80%;width: 230px;background-color: #17A4B7;border-color: #17A4B7; color: white; " data-toggle="tooltip" >Ver Certificado</a>

                    <!-- Modal -->
                                <div class="modal fade" id="myModaldocprimero<?=$r->idsolicitud?>" role="dialog">
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
                     <button type="button" class="btn btn-danger btn-lg" data-toggle="modal"style="font-size:80%;width: 230px;background-color: gray;border-color: gray;"> Sin Certificado </button>
                    <?php }}?>
                    
                      <!-- ver certificado 2-->

               </td>
               <td>
               <input class="form-control" autocomplete="off" type="text" value=""/>
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
                     <button type="button" class="btn btn-danger btn-lg" data-toggle="modal"style="font-size:80%;width: 230px;background-color: gray;border-color: gray;"> Sin Certificado </button>
                    <?php }}?>
                    
                      <!-- ver certificado 3-->
                     
             
               </td>

               <td>
               <input class="form-control" autocomplete="off" type="text" value=""/>
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
                     <button type="button" class="btn btn-danger btn-lg" data-toggle="modal"style="font-size:80%;width: 230px;background-color: gray;border-color: gray;"> Sin Certificado </button>
                    <?php }}?>
                    
                      <!-- ver certificado 4-->
                
                 
               </td>

               <td>
               <input class="form-control" autocomplete="off" type="text" value=""/>
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
                     <button type="button" class="btn btn-danger btn-lg" data-toggle="modal"style="font-size:80%;width: 230px;background-color: gray;border-color: gray;"> Sin Certificado </button>
                    <?php }}?>
                    
                      <!-- ver certificado 5-->
                 
               
               <input type="file" name="quintodocumento" id="quintodocumento" accept=".pdf" class="inputfile inputfile-5" data-multiple-caption="{count} files selected" style="opacity:0;font-size:100%;" value=""/>
               </td>
               <td>
               <input class="form-control" autocomplete="off" type="text" value=""/>
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


              <label>docsegundonotaria </label>
              <input class="form-control" autocomplete="off" type="text" name="docsegundonotaria" id="docsegundonotaria" value="<?=$p->getdocsegundonotaria()?>"/>
              <label>docterceronotaria </label>
              <input class="form-control" autocomplete="off" type="text" name="docterceronotaria" id="docterceronotaria" value="<?=$p->getdocterceronotaria()?>"/>
              <label>doccuartonotaria </label>
              <input class="form-control" autocomplete="off" type="text" name="doccuartonotaria" id="doccuartonotaria" value="<?=$p->getdoccuartonotaria()?>"/>
              <label>docquintonotaria </label>
              <input class="form-control" autocomplete="off" type="text" name="docquintonotaria" id="docquintonotaria" value="<?=$p->getdocquintonotaria()?>"/>
              
             
              
              


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
                                        <button  class="btn btn-secondary" name="cancelar" id="cancelar" value="cancelar"><i class="	fa fa-window-close"></i> Cancelar </button>
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








<!--Todos-->
  <script src="assets/file/js/custom-file-input.js"></script>
  <script type="text/javascript" src="assets/Validaciones/Programa.js"></script>


</body>

</html>


<!--Todos-->
