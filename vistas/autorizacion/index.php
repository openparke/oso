
<script type="text/javascript">(function () { var ldk = document.createElement('script'); ldk.type = 'text/javascript'; ldk.async = true; ldk.src = 'https://s.cliengo.com/weboptimizer/5c1a61b9e4b0d5d7dc1217b5/5c1a6cd2e4b0d5d7dc1218f8.js'; var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ldk, s); })();</script>


 <body style="background-color:#FDFEFE;">
     <main class="app-content" style="background-color:#FDFEFE;">
      <div class="app-title">
      
          <h1><i class="colorp fa fa-th-list" ></i> Autorización </h1>
          <p></p>
        </div>
        <ul class="app-breadcrumb breadcrumb side" >
       
        <li class="breadcrumb-item"></li>       
        
          <li class="breadcrumb-item">Listar</li>          
          <li class="breadcrumb-item active"><a href="?c=autorizacion&a=registrarautorizacion">Registrar</a></li>
        

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
                    <th>idautorizacion</th>
                    <th>aceptaprimer</th>
                    <th>aceptasegundo</th>
                    <th>nombre</th>
                    <th>apellido</th>
                    <th>correo</th>
                    <th>telefono</th>
                    <th>Modificar</th>
                  </tr>
                </thead>
                <body>
               
                <?php foreach($this->modelo->Listar() as $r):?>
                  <tr>
                    <td><?=$r->idautorizacion?></td>
                    <td><?=$r->aceptaprimer?></td>
                    <td><?=$r->aceptasegundo?></td>
                    <td><?=$r->nombre?></td>
                    <td><?=$r->apellido?></td>
                    <td><?=$r->correo?></td>
                    <td><?=$r->telefono?></td>
                    <td>
                    <a class="colorb btn btn-primary" data-toggle="tooltip" data-placement="top" href="?c=autorizacion&a=registrarautorizacion&id=<?=$r->idautorizacion?>"><i class="fa fa-gears" aria-hidden="true"></i></a>
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
