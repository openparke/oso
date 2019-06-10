<main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="colorp fa fa-th-list" ></i> Portal Notarial</h1>
          <p></p>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
        <a href="index.php"><li class="breadcrumb-item" ><i class="colorp fa fa-home fa-lg" ></i></li></a>
        <li class="breadcrumb-item"></li>       

        <li class="breadcrumb-item">Listar</li>
   
       
          <li class="breadcrumb-item active"><a href="?c=informacion&a=registrarinformacion">Registrar</a></li>
        </ul>
      </div>
     
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
                  <tr>

                 <!--   <th>Id informacion De Formacion</th> -->
                    <th>No de Matricula</th>
                    <th>Estado Civil</th>
                    <th>Tipo de documento</th>
                    <th>Número de documento</th>
                    <th>No de solicitud</th>
                    <th>Modificar</th>
                  </tr>
                </thead>
                <body>
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
                <?php foreach($this->modelo->Listar() as $r):?>
                  <tr>

<!--                     <td><?=$r->idinformacion?></td> -->
                    <td><?=$r->matricula?></td>
                    <td><?=$r->estadocivil?></td>
                    <td><?=$r->tipodocumento?></td>
                    <td><?=$r->numerodocumento?></td>
                    <td><?=$r->solicitud?></td>
                    <td><center>                                        
                      
                        <a class="colorb btn btn-primary" data-toggle="tooltip" data-placement="top" title="Modificar"href="?c=informacion&a=registrarinformacion&id=<?=$r->idinformacion?>"><i class="fa fa-gears" aria-hidden="true"> </a></td></center></td>


                  </tr>
                <?php endforeach;?>
                </body>
              </table>
            </div>
          </div>
        </div>
      </div>
    </main>