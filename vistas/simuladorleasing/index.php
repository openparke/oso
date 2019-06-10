
 <body style="background-color:#FDFEFE;">
     <main class="app-content" style="background-color:#FDFEFE;">
      <div class="app-title">
      
          <h1><i class="colorp fa fa-th-list" ></i> simuladorleasing </h1>
          <p></p>
        </div>
        <ul class="app-breadcrumb breadcrumb side" >
       
        <li class="breadcrumb-item">Listar</li>          
          <li class="breadcrumb-item active"><a href="?c=simuladorleasing&a=registrarsimuladorleasing">Registrar</a></li>
         

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
                    <th>Id simuladorleasing</th>
                    <th>valorleasing</th>
                    <th>fechaleasing</th>
                   
                    <th>matriculainmobiliaria</th>
                                     
                    <th>correo</th>
                    <th>Modificar</th>
                     
                  </tr>
                </thead>
                <body>
               
                <?php foreach($this->modelo->Listarconcorreo() as $r):?>
                  <tr>
                <td><?=$r->idsimuladorleasing?></td>
                <td><?=$r->valorleasing?></td>
                <td><?=$r->fechaleasing?></td>
                
                <td><?=$r->matriculainmobiliaria?></td>
                
                <td><?=$r->correo?></td>
                    
                <td><center><a class="colorb btn btn-primary" data-toggle="tooltip" data-placement="top" href="?c=simuladorleasing&a=registrarsimuladorleasing&id=<?=$r->idsimuladorleasing?>"><i class="fa fa-gears" aria-hidden="true"></i></a></center>
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
