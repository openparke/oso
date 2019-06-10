<!DOCTYPE html>
<html lang="en">
<head>
  <!-- alertas-->


    <script type="text/javascript" src="assets/alert/js/sweetalert2.js"></script>
    <script type="text/javascript" src="assets/alert/js/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="assets/alert/css/sweetalert2.css" type="text/css">
    <link rel="stylesheet" href="assets/alert/css/sweetalert2.min.css" type="text/css">
   
    <script src="assets/alert/js/jquery-2.1.4.min.js"></script>
 
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


       <script type="text/javascript">
        $(document).ready(function () {
            $('#2').submit(function (e) {
                e.preventDefault();
                //captura todos los valores que tiene el formulario es decir todos los input que esten en ese formulario...
                var datos=$(this).serialize();
                /*swal(
                 'Titulo del Mensaje',
                 'Mensaje',
                 'Tipo de mesaje'
                 );*/
                $.ajax({
                    type:"POST",
                   
                    data:datos,
                    success:function(data){
                      swal({
                            title: "Está Seguro De Cancelar ?",
                            text: "Si Cancela No Se Guardaran Los Datos",
                            icon: "warning",
                            buttons: ["No Cancelar", "Si Cancelar"],
                            dangerMode: true,
                          })
                          .then((willDelete) => {
                            if (willDelete) {
                               
                              
                              
                                        location.href='?c=sucursal'
                                      
                            } else {
                              swal("Los Datos No Se Eliminaron",
                               {
                                icon: "success",
                              });
                              
                             }
                          });
                        //imprimo el resultado en el div mensaje que procesa ajax
                      
                    }
                });
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#1').submit(function (e) {
                e.preventDefault();
                //captura todos los valores que tiene el formulario es decir todos los input que esten en ese formulario...
                var datos=$(this).serialize();
                /*swal(
                 'Titulo del Mensaje',
                 'Mensaje',
                 'Tipo de mesaje'
                 );*/
                $.ajax({
                    type:"POST",
                   
                    data:datos,
                    success:function(data){
                      swal({
                            title: "Está Seguro De Cancelar ?",
                            text: "Si Cancela No Se Guardaran Los Datos",
                            icon: "warning",
                            buttons: ["No Cancelar", "Si Cancelar"],
                            dangerMode: true,
                          })
                          .then((willDelete) => {
                            if (willDelete) {
                               
                                        location.href='?c=sucursal'
                                      
                            } 
                          });
                        //imprimo el resultado en el div mensaje que procesa ajax
                      
                    }
                });
            });
        });
    </script>
    
  


  
  <!-- alertas-->


 
</head>
 
    <body class="app sidebar-mini rtl"   >
  
      <main class="app-content">
       <div class="app-title">
        <div>
          <h1><i class="colorp fa fa-th-list"  ></i><?=$titulo?> sucursal</h1>
          <p></p>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
        <a href="index.php"><li class="breadcrumb-item" ><i class="colorp fa fa-home fa-lg" ></i></li></a>
        <li class="breadcrumb-item"></li>       
          <li class="breadcrumb-item"><a href="?c=sucursal">Listar</li>
          <li ></a></li>
           </ul>
           </div>
      
             <div class="content-wrapper">
             <div class="col-md-12">
              <div class="card">
              
              <div class="card-body">
              <div class="col-md-12">
                 <form class="form-horizontal" method="POST" action="?c=sucursal&a=Guardar">
                  <div class="form-group">
                                        
                    <input class="form-control" name="id" type="hidden" value="<?=$p->getidsucursal()?>" >
                                         
                  </div>

                  <div class="form-group">
                    <label   for="nombre" >Nombre Sucursal</label>
                      <input  class="form-control" autocomplete="off"  type="text" required name="nombre" placeholder="Digite el nombre de la sucursal"  value="<?=$p->getnombre()?>"/>
                  </div>
                   <div class="form-group">
                    <label   for="direccion" >Direccion Sucursal</label>
                      <input  class="form-control" autocomplete="off" type="text" required name="direccion"  placeholder="Digite la dirección de la sucursal"  value="<?=$p->getdireccion()?>"/>
                  </div>
                  
                  
                   <div class="form-group" >                    
                          <label  for="fk_identidad">Entidad</label>   
                          <select class="form-control" name="fk_identidad" id="fk_identidad" required >
                      <option value="">Seleccione la entidad</option>
                          <?php foreach($this->modelo->Listarentidad() as $r): ?>
                                <option value="<?=$r->identidad?>" <?=$p->getfk_identidad()==$r->identidad ? "selected": ""?> ><?=$r->nombreentidad?> </option>
                          <?php endforeach;?>
                        </select>
                  </div>
                 
                                  
                  <table>
                          <tr>
                            <td>
                            <form method="POST" id="2">
                              <button class="btn btn-primary" type="submit" name="aceptar" value="Aceptar" ><i class="fa fa-check-square"></i>Guardar</button> 
                            </form>
                            </td>
                            
                            <td>
                             <form method="POST" id="1">
                                <button class="btn btn-secondary" type="submit" name="cancelar" value="cancelar" ><i class="	fa fa-window-close"></i>Cancelar</button> 
                             </form>
                           </td>
                         </tr>
                          </table> 

                      </form>
                  
                </div>
              </div>
            </div>
          </div>
        </main>
        
        <script type="text/javascript" src="assets/Validaciones/Programa.js"></script>
        
        
  </body>

</html>