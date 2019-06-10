
 <body style="background-color:#FDFEFE;">
     <main class="app-content" style="background-color:#FDFEFE;">
      <div class="app-title">
      
          <h1><i class="colorp fa fa-th-list" ></i> sucursal </h1>
          <p></p>
        </div>
        <ul class="app-breadcrumb breadcrumb side" >
       
        <li class="breadcrumb-item">Listar</li>          
          <li class="breadcrumb-item active"><a href="?c=sucursal&a=registrarsucursal">Registrar</a></li>
         

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
                    <th>Nombre</th>
                    <th>Direccion</th>
                    <th>Entidad</th>
                    <th>Tipo</th>
                    <th>Modificar</th>
                     
                  </tr>
                </thead>
                <body>
               
                <?php foreach($this->modelo->Listar() as $r):?>
                    <tr>
                        <td><?=$r->nombre?></td>
                        <td><?=$r->direccion?></td>
                        <td><?=$r->nombreentidad?></td>
                        <td><?=$r->tipo?></td>
                        <td><center><a class="colorb btn btn-primary" data-toggle="tooltip" data-placement="top" href="?c=sucursal&a=registrarsucursal&id=<?=$r->idsucursal?>"><i class="fa fa-gears" aria-hidden="true"></i></a></center>
                        </td>
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
