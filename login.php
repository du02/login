<?php 
    // Open connection
    require_once("bd/connection_bd.php"); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <title>Sistema Escolar</title>
</head>
<body>
   <div class="container" >  
            <div class="col-lg-4 col-md-3 col-sm-2"></div>
            <div class="col-lg-4 col-md-6 col-sm-8">
               
                <!-- Login -->
                <form class="row loginbox" action="login.php" method="POST">                    
                        <div class="col-lg-12">
                             <h2 class="singtext text-center">Sistema Escolar</h2>   
                        </div>
        
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <input class="form-control" type="text" name="email" placeholder="Email"> 
                        </div>
                        <div class="col-lg-12  col-md-12 col-sm-12">
                            <input class="form-control" type="password" name="pass" placeholder="Senha">
                        </div>
                        <div class="col-lg-12  col-md-12 col-sm-12">
                            <a href="index.php" class="btn  submitButton">Entrar</a> 
                        </div>
                </form>

            <div class="col-lg-4 col-md-3 col-sm-2"></div>
        </div>

        <!-- Javascript -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</body>
</html>

<?php
    // Close connection with BD
    require_once("bd/close_connection.php");
?>