<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php require_once './ini.php'; ?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Topi Top</title>
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <!-- Bootstrap -->
        <link href="<?php echo URL;?>/Recursos/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" media="screen" href="<?php echo URL;?>/Recursos/css/estilos.css" />

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="stylesheet" href="<?php echo URL;?>/Recursos/css/animate.css">
        <link rel="stylesheet" href="<?php echo URL;?>/Recursos/css/normalize.css">
        
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="<?php echo URL;?>/Recursos/js/bootstrap.min.js"></script>
        
        <!-- This following line is only necessary in the case of using the option `scrollOverflow:true` -->
        <script type="text/javascript" src="<?php echo URL;?>/Recursos/js/vendors/scrolloverflow.min.js"></script>
        <script type="text/javascript" src="<?php echo URL;?>/Recursos/js/jquery.fullPage.min.js"></script>
        
        <style>

        </style>        

        <script>
          
        </script>

    </head>

    <body>

        <div class="container-fluid" style="background-image:url(./Recursos/img/fondo.jpg);background-size: cover;background-repeat: no-repeat;">
        
            <div class="row">
    
                <div class="col-lg-8 col-md-8 col-xs-12">
                    <img id=personas src="./Recursos/img/personas.png">
                </div>            
            
                            
                <div id=col2 class="col-lg-4s col-md-4 col-xs-12 text-center">
                    <img src="./Recursos/img/gritagol.png" style="width:50%;">
                    <br><br>
                    <h3 id=titulo>¡LA BLANQUIROJA <br> SE VA A RUSIA!</h3>
                    
                    <h5 id=subtitulo><b>Pero antes se preparará con duelos amistosos.</b></h5>
                    <br>
                    <p id=parrafo>Adivina el resultado de cada partido y podrás ganar un vale TopiTop de hasta <b>S/.300</b> y fabulosos premios.</p>
                    <br>
                    <button id=btncomenzar type="button" class="btn">COMENZAR</button>

                </div>
            </div>
        </div>


        <footer class="page-footer">
            <div class="col-lg-11 col-md-11 col-xs-10 ">
                <b id=terminos>TÉRMINOS Y CONDICIONES - BASES Y PREMIOS</b>
            </div>

            <div class="col-lg-1 col-md-1 col-xs-2">
                <img src="./Recursos/img/logo-topitop.png" style="width:85%;">
            </div>
            
        </footer>
    </body>
</html>
