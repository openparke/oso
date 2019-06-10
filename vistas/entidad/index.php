
 <body style="background-color:#FDFEFE;">
     <main class="app-content" style="background-color:#FDFEFE;">
      <div class="app-title">
      
          <h1><i class="colorp fa fa-th-list" ></i> entidad </h1>
          <p></p>
        </div>
        <ul class="app-breadcrumb breadcrumb side" >
       
        <li class="breadcrumb-item">Listar</li>          
          <li class="breadcrumb-item active"><a href="?c=entidad&a=registrarentidad">Registrar</a></li>
         

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
                    <!-- <th>Id Entidad</th>-->
                    <th>Nombre Entidad</th>
                    <th>Tipo Entidad</th>
                    <th>Modificar</th>
                     
                  </tr>
                </thead>
                <body>
               
                <?php foreach($this->modelo->Listar() as $r):?>
                  <tr>
                   <!--<td><?=$r->identidad?></td>-->
                    <td><?=$r->nombreentidad?></td>
                    <td><?=$r->tipo?></td>
                    
                    <td><center><a class="colorb btn btn-primary" data-toggle="tooltip" data-placement="top" href="?c=entidad&a=registrarentidad&id=<?=$r->identidad?>"><i class="fa fa-gears" aria-hidden="true"></i></a></center>
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
