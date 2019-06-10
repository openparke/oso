
<!DOCTYPE html>
    <html>
        <head>
            <link rel="icon" href="archivos/img/logo.png">
            <meta charset="utf-8">
            <meta http-equiv="x-ua-compatible" content="ie=edge">
            <meta name="description" content="welcome to codeglim">
            <meta name='copyright' content='codeglim'>
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">    
            <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,700,900" rel="stylesheet"> 
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDnhgNBg6jrSuqhTeKKEFDWI0_5fZLx0vM" type="text/javascript"></script>   
            <link rel="stylesheet" href="modal/css/reset.css"> 
            <link rel="stylesheet" href="modal/css/style.css"> 
            <link rel="stylesheet" href="modal/css/demo.css">   
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
           <!--  <link rel="stylesheet" href="#" id="colors"> -->
          
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
            <title>Notaria 16</title>   
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> 
            <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
            <script type="text/javascript">
                $(document).ready(function() {
                    setTimeout(function() {
                        $(".content").fadeOut(1500);
                    },3000);
                 
                    setTimeout(function() {
                        $(".content2").fadeIn(1500);
                    },6000);
                });
                </script>
                       <script>
                $(document).ready(function(){
                 $("form").submit(function(){
                   var response = grecaptcha.getResponse();
                      if(response.length == 0){
                          alert('Valide su Captcha');
                    return false;
                 } 
                 });
                });
                </script>
                 <script type="text/javascript">
                 var onloadCallback = function() {
                 grecaptcha.render('html_element', {
                 'sitekey' : '6LfTIH4UAAAAAFpLHJtGMt2xZqaAwrlzH4D63pi'
                 });
                 };
            </script>
            <script type="text/javascript">
                 var onloadCallback = function() {
                 grecaptcha.render('html_element', {
                 'sitekey' : '6LfTIH4UAAAAAFpLHJtGMt2xZqaAwrlzH4D63pi'
                 });
                 };
            </script>
            <script src='https://www.google.com/recaptcha/api.js'></script>




            <script type="text/javascript">
function mostrarPassword(){
 var cambio = document.getElementById("Password");
 if(cambio.type == "password"){
 cambio.type = "text";
 $('.icon').removeClass('fa fa-eye-slash').addClass('fa fa-eye');
 }else{
 cambio.type = "password";
 $('.icon').removeClass('fa fa-eye').addClass('fa fa-eye-slash');
 }
 } 
 
 $(document).ready(function () {
 //CheckBox mostrar contraseña
 $('#ShowPassword').click(function () {
 $('#Password').attr('type', $(this).is(':checked') ? 'text' : 'password');
 });
});
</script>


 <style type="text/css">
     .field-icon {
  float: right;
  margin-left: -25px;
  margin-top: -25px;
  position: relative;
  z-index: 2;
}

.container{
  padding-top:50px;
  margin: auto;
}
 </style>

 <script type="text/javascript">
    $(".toggle-password").click(function() {

  $(this).toggleClass("fa-eye fa-eye-slash");
  var input = $($(this).attr("toggle"));
  if (input.attr("type") == "password") {
    input.attr("type", "text");
  } else {
    input.attr("type", "password");
  }
});
</script>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>




        </head>


        <br><br><br><br>



        <body style="width:100%;background-color: #17a2b8;">














            
            <div class="padre" style="display: flex;
              justify-content: center;
              align-items: center;">
              <div class="hijo" style="  background-color: #EAEAEA;border-radius:5px;
              width: 396px;">
  
                <div class="cd-signin-__block js-signin-block" data-type="login">
                    <form  class="cd-signin-modal__form" action="?c=Usuario&a=Iniciar"    method="POST">
                                    <p class="cd-signin-modal__fieldset">
                                        <label class="cd-signin-modal__label cd-signin-modal__label--username cd-signin-modal__label--image-replace" for="signup-username" >Usuario</label>
                                        <input   class="cd-signin-modal__input cd-signin-modal__input--full-width cd-signin-modal__input--has-padding cd-signin-modal__input--has-border" require onkeypress="" id="signup-username" placeholder="Usuario" name="Usuario" required autocomplete="off" type="text" >
                                        <span class="cd-signin-modal__error">Usuario incorrecto</span>
                                    </p>  
                                     
                                    <p class="cd-signin-modal__fieldset">
                                      <div style="background-color: white; border-radius: 5px;border-color: black;">
                                         <table >
                                          <td style="width: 10%">
                                                 
                                       <i style="padding-left: 15px;color: #CFCFCF" class="fa fa-key" aria-hidden="true"></i>
                                                
                                            </td>
                                            <td style="width: 80%">
                                                 
                                        <input  style="background: none; border: none; padding: 15px" class="cd-signin-modal__input cd-signin-modal__input--full-width -has-padding cd-signin-modal__input--has-border" id="Password" type="password"  placeholder="Contraseña" autocomplete="off" required name="Contrasena" > 
                                                
                                            </td>
                                            <td style="width: 10%" >
                                                 <button id="show_password" style="background: none; border: none; color: black;" class="btn btn-primary" type="button" onclick="mostrarPassword()"> <span class="fa fa-eye-slash icon"></span> </button>
                                            </td>
                                        </table>
                                      </div>
                                       
                                       
                                      
           
         
                                        <span class="cd-signin-modal__error">Contraseña incorrecta</span>
                                    </p>
                                   
                                    <p>

                                       <div class="g-recaptcha" data-sitekey="6LfTIH4UAAAAAFpLHJtGMt2xZqaAwrlzH4D63pi_"></div>
                                       <br><br>
                                          <input class="cd-signin-modal__input cd-signin-modal__input--full-width" type="submit"   value='Iniciar Sesión'></button>
                                       </form> 

                                    </p>
                                     
                                    
                    </form> 

                <?php   
             
                         if(isset($_GET["Aceptar"]) &&  $_GET["Aceptar"]=="error"){?>
                         
                         <br>
                           <div class="content alert alert-danger alert-dismissible">
                             <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                               <strong>ERROR:</strong> Usuario o Contraseña Equivocado
                           </div>
                <?php
            }
                ?> 
  
                </div> 

                <div class="cd-signin-modal__block js-signin-modal-block" data-type="signup">
                    <form class="cd-signin-modal__form">
                                

                                    <p class="cd-signin-modal__fieldset">
                                        <label class="cd-signin-modal__label cd-signin-modal__label--email cd-signin-modal__label--image-replace" for="signup-email">E-mail</label>
                                        <input class="cd-signin-modal__input cd-signin-modal__input--full-width cd-signin-modal__input--has-padding cd-signin-modal__input--has-border" id="signup-email" type="email" placeholder="E-mail">
                                        <span class="cd-signin-modal__error">Error message here!</span>
                                    </p>

                    </form>
                </div> 



                <div class="cd-signin-modal__block js-signin-modal-block" data-type="reset">
                                <p class="cd-signin-modal__message">¿Perdiste tu contraseña? Por favor, introduzca su dirección de correo electrónico. Recibirás un enlace para crear una nueva contraseña..</p>

                                    <form class="cd-signin-modal__form">
                                        <p class="cd-signin-modal__fieldset">
                                            <label class="cd-signin-modal__label cd-signin-modal__label--email cd-signin-modal__label--image-replace" for="reset-email">E-mail</label>
                                            <input class="cd-signin-modal__input cd-signin-modal__input--full-width cd-signin-modal__input--has-padding cd-signin-modal__input--has-border" id="reset-email" type="email" placeholder="E-mail">
                                            <span class="cd-signin-modal__error">Error message here!</span>
                                        </p>

                                        <p class="cd-signin-modal__fieldset">
                                            <input class="cd-signin-modal__input cd-signin-modal__input--full-width cd-signin-modal__input--has-padding" type="submit" value="Restablecer Contraseña">
                                        </p>
                                    </form>

                                        <p class="cd-signin-modal__bottom-message js-signin-modal-trigger"><a href="#0" data-signin="login">  Atrás para iniciar sesión</a></p>
                </div> 
                <a href="#0" class="cd-signin-modal__close js-close">Cerrar</a>
            </div> 


     
        </body>
    
     <script src="modal/js/placeholders.min.js"></script>
        <script src="modal/js/main.js"></script> 
      <!--   <script src="modal/assets/js/scripts.js"></script>    -->

