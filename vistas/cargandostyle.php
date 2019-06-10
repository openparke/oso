<html>
	<head>
        <!-- Cargando-->
           <!-- inicio scripts fondo blanco -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
            <script type="text/javascript">
                $(window).load(function() {
                    $(".loader").fadeOut("slow");
                });
            </script>
            <!-- fin scripts fondo blanco -->
            
            
            <!-- inicio estilo fondo blanco -->
                <style type="text/css">
                    .loader {
                        position: fixed;
                        left: 0px;
                        top: 0px;
                        width: 100%;
                        height: 100%;
                        z-index: 9999;
                        background: url('') 50% 50% no-repeat rgb(249,249,249);
                        opacity: 1;
                    }
                    	
                </style>
            <!-- fin estilo fondo blanco -->        
                    
            <!-- inicio estilo logo -->         
                <style type="text/css">
                    .spinner {
                      margin: 100px auto;
                      width: 500px;
                      height: 100px;
                      text-align: center;
                      font-size: 10px;
                    }
                    
                    .spinner > div {
                      background-color: #CFCFCF;
                      height: 100%;
                      width: 12px;
                      display: inline-block;
                      
                      -webkit-animation: sk-stretchdelay 1.2s infinite ease-in-out;
                      animation: sk-stretchdelay 1.2s infinite ease-in-out;
                    }
                    
                    .spinner .rect2 {
                      -webkit-animation-delay: -1.1s;
                      animation-delay: -1.1s;
                    }
                    
                    .spinner .rect3 {
                      -webkit-animation-delay: -1.0s;
                      animation-delay: -1.0s;
                    }
                    
                    .spinner .rect4 {
                      -webkit-animation-delay: -0.9s;
                      animation-delay: -0.9s;
                    }
                    
                    .spinner .rect5 {
                      -webkit-animation-delay: -0.8s;
                      animation-delay: -0.8s;
                    }
                    
                    @-webkit-keyframes sk-stretchdelay {
                      0%, 40%, 100% { -webkit-transform: scaleY(0.4) }  
                      20% { -webkit-transform: scaleY(1.0) }
                    }
                    
                    @keyframes sk-stretchdelay {
                      0%, 40%, 100% { 
                        transform: scaleY(0.4);
                        -webkit-transform: scaleY(0.4);
                      }  20% { 
                        transform: scaleY(1.0);
                        -webkit-transform: scaleY(1.0);
                      }
                    }
                </style>
            <!--fin inicio estilo logo -->
        
        
            <!-- inicio div mostrar barras -->
                <div class="loader">
                    <br><br><br><br><br><br><br><br>
                    <div class="spinner">
                        <div class="rect1"></div>
                        <div class="rect2"></div>
                        <div class="rect3"></div>
                        <div class="rect4"></div>
                        <div class="rect5"></div>
                    </div>
                </div>
            <!-- fin div mostrar barras -->
        <!-- fin cargando -->

	</head>
	<body>
	
	</body>
</html>