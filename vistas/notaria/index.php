<main class="app-content" style="zoom:90%;background-color:#FDFEFE;">
      <div class="title">
        <div>
          <h1><i class="colorp fa fa-id-card"></i> Usuarios</h1>
          <p></p>
           <div align="right">
               <input type="button" class="btn btn-primary btn-lg" value="Registrar" style="cursor: pointer; background-color: #E30B16; border: none; color: white; text-decoration: none; border-radius: 5px;" onClick="window.location='?c=notaria&a=registrarnotaria'">
              
              
          </div>
          
        </div>
         <br>
  
      </div>
     
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
            <?php if($_SESSION['Rol']=="Legalizador"):?><!-- Legalizador-->
                  <tr>
                  
                    <th>Estado </th>                  
                    <th>Nombre Usuario</th>
                    <!-- <th>Apellidos(s)</th>
                    <th>Tipo de documento</th> -->
                    <th>Documento</th>
                    <th>Correo electronico</th>
                     <th>Nombre de la sucursal</th>
<!--                     <th>Correo institucional</th>
 -->                    <th>Rol</th>
                    
                   <!--este es el id del usuario del notaria<td>    <th>id del usuario</th>   -->
                    <th>Opciones</th>
                  </tr>
                </thead>
                <body >
                         
                <?php foreach($this->modelo->Listarinformadores() as $r):?>
                  <tr>
                           
                    <td><?=$r->Estados?></td>                 
                    <td><?=$r->Nombresnotaria?></td>
                  <!--   <td><?=$r->notaria?></td>
                    <td><?=$r->notaria?></td> -->
                    <td><?=$r->NumeroDocumentonotaria?></td>
                    <td><?=$r->CorreoElectroniconotaria?></td>
                     <td><?=$r->nombre?></td>
<!--                     <td><?=$r->notaria?></td>
 -->                    <td><?=$r->Rol?></td>
                    
                    <!--este es el id del usuario del notaria<td>      <     -?$r->fk_idUsuario?></td>         -->
                   
                    <!-- <td><center><a href="?c=notaria&a=notaria&id=<?=$r->notaria?>"><i class="fa fa-lg fa-refresh"></i></a></center></td> -->
                <td>

                <a class="btn btn-primary" data-toggle="tooltip" data-placement="top"  href="?c=notaria&a=Activo&id=<?=$r->idUsuario?>"><i class="	fa fa-check" aria-hidden="true"></i></a>
                <?php if($r->Estados == ""){  ?>
               
                  <a class="colorm btn btn-primary" data-toggle="tooltip" data-placement="top"  id="#2"><i class="fa fa-gears" aria-hidden="true" ></i></a>
                 
                                         
                      <?php }else{?>
                        <a class="colorb btn btn-primary" data-toggle="tooltip" data-placement="top" href="?c=notaria&a=registrarnotaria&id=<?=$r->idnotaria?>"><i class="fa fa-gears" aria-hidden="true"></i></a>

                      <?php }?>      
                 <a class="colorR btn btn-primary" data-toggle="tooltip" data-placement="top"  href="?c=notaria&a=Bloquear&id=<?=$r->idUsuario?>"><i class="fa fa-ban" aria-hidden="true"></i></a>

                  <a class="btn btn-primary" style="background: #E30B16 !important; border-color: #E30B16 !important;"data-toggle="tooltip" data-placement="top" href="?c=Usuario&a=Borrar&id=<?=$r->idUsuario?>"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                 
                
                  </tr>
                <?php endforeach;?>
          <?php endif;?>
          <?php if($_SESSION['Rol']=="Administrador"):?><!-- Administrador-->
                  <tr>
                     <th>Nombre de la sucursal</th>
                  <th>Rol</th>
                    <th>Estado </th>                  
                    <th>Nombre Usuario</th>
                    <!-- <th>Apellidos(s)</th>
                    <th>Tipo de documento</th> -->
                    <th>Documento</th>
                    <th>Correo electronico</th>
                    
<!--                     <th>Correo institucional</th>
 -->                    
                    
                   <!--este es el id del usuario del notaria<td>    <th>id del usuario</th>   -->
                    <th>Opciones</th>
                  </tr>
                </thead>
                <body >
                         
                <?php foreach($this->modelo->Listar() as $r):?>
                  <tr>

                    <td><?=$r->nombre?></td>
                           <td><?=$r->Rol?></td> 
                    <td><?=$r->Estados?></td>                 
                    <td><?=$r->Nombresnotaria?></td>
                  <!--   <td><?=$r->notaria?></td>
                    <td><?=$r->notaria?></td> -->
                    <td><?=$r->NumeroDocumentonotaria?></td>
                    <td><?=$r->CorreoElectroniconotaria?></td>
                     
<!--                     <td><?=$r->notaria?></td>
 -->                   
                    
                    <!--este es el id del usuario del notaria<td>      <     -?$r->fk_idUsuario?></td>         -->
                   
                    <!-- <td><center><a href="?c=notaria&a=notaria&id=<?=$r->notaria?>"><i class="fa fa-lg fa-refresh"></i></a></center></td> -->
                <td>

                <a class="btn btn-primary" data-toggle="tooltip" data-placement="top"  href="?c=notaria&a=Activo&id=<?=$r->idUsuario?>"><i class="  fa fa-check" aria-hidden="true"></i></a>
                <?php if($r->Estados == ""){  ?>
               
                  <a class="colorm btn btn-primary" data-toggle="tooltip" data-placement="top"  id="#2"><i class="fa fa-gears" aria-hidden="true" ></i></a>
                 
                                         
                      <?php }else{?>
                        <a class="colorb btn btn-primary" data-toggle="tooltip" data-placement="top" href="?c=notaria&a=registrarnotaria&id=<?=$r->idnotaria?>"><i class="fa fa-gears" aria-hidden="true"></i></a>

                      <?php }?>      
                 <a class="colorR btn btn-primary" data-toggle="tooltip" data-placement="top"  href="?c=notaria&a=Bloquear&id=<?=$r->idUsuario?>"><i class="fa fa-ban" aria-hidden="true"></i></a>

                  <a class="btn btn-primary" style="background: #E30B16 !important; border-color: #E30B16 !important;"data-toggle="tooltip" data-placement="top" href="?c=Usuario&a=Borrar&id=<?=$r->idUsuario?>"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                 
                
                  </tr>
                <?php endforeach;?>
          <?php endif;?>
               
                </body>
              </table>
            </div>
          </div>
        </div>
      </div>
    </main>
