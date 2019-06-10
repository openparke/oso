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


 <body style="background-color:#FDFEFE;">
     <main class="app-content" style="background-color:#FDFEFE;">
      <div class="app-title">
      
          <h1><i class="colorp fa fa-th-list" ></i> Preguntas Frecuentes </h1>
          <p></p>
        </div>
        <ul class="app-breadcrumb breadcrumb side" >
       
        <li class="breadcrumb-item"></li>       
         <?php if($_SESSION['Rol']=="Administrador"):?><!-- Administrador-->
          <li class="breadcrumb-item">Listar</li>          
          <li class="breadcrumb-item active"><a href="?c=preguntas&a=registrarpreguntas">Registrar</a></li>
          <?php endif;?>
           <?php if($_SESSION['Rol']=="Notaria"):?><!-- Notaria-->
        <li class="breadcrumb-item">Listar</li>          
          <li class="breadcrumb-item active"><a href="?c=preguntas&a=registrarpreguntas">Registrar</a></li>
          <?php endif;?>

        </ul>
      </div>
     <br>
      <div class="row">
        <div class="col-md-11"  style="padding: 15px;">
          <div class="tile">
            <div class="tile-body">
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
                  <tr>
                    <!-- <th>Id Programa De Formacion</th> -->
                    <th>Preguntas</th>
                    <th>Respuestas</th>
                    <?php if($_SESSION['Rol']=="Administrador"):?><!-- Administrador-->
                     <th>Modificar</th>
                      <?php endif;?>
                  </tr>
                </thead>
                <body>
               
                <?php foreach($this->modelo->Listar() as $r):?>
                  <tr>
                   <!--  <td><?=$r->idpreguntas?></td>  -->
                    <td><?=$r->preguntas?></td>
                    <!-- <td><?=$r->respuestas?></td> -->
                    
                    <td>
                       <button type="button" class="colorb btn btn-danger btn-lg" data-toggle="modal" data-target="#myModal<?=$r->idpreguntas?>" style="font-size:80%;"> Respuesta </button>

        <!-- Modal -->
       <div class="modal fade" id="myModal<?=$r->idpreguntas?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
         <div class="modal-dialog" role="document">
           <div class="modal-content">
            <div class="modal-header">
           
            <h4 class="modal-title" id="myModalLabel" >Pregunta  :  <?=$r->preguntas?></h4>
             
                
           </div>
              <div class=" row modal-body" style="justify-content: center;" >
                   <p class="cd-signin-modal__fieldset">
                  <p>Respuesta : </p>
                 
             </div>
             <div style="padding-left: 30px; ">
                <p><?=$r->respuestas?></p>
             </div>
          <div class="modal-footer">
              <button type="button" class="colorb btn btn btn-info" data-dismiss="modal">Cerrar</button>
                    </td>
<?php if($_SESSION['Rol']=="Administrador"):?><!-- Administrador-->
                    <td><center><a class="colorb btn btn-primary" data-toggle="tooltip" data-placement="top"  href="?c=preguntas&a=registrarpreguntas&id=<?=$r->idpreguntas?>"><i class="fa fa-gears" aria-hidden="true"></i></a></center>
                    </td>
 <?php endif;?>



                  </tr>
                <?php endforeach;?>
                </body>
              </table>
            </div>
          </div>
        </div>
      </div>
    </main>
     
 </body> 
