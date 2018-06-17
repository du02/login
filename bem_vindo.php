<?php 
    // Open connection
    require_once("bd/connection_bd.php");
?>
<?php 
    // Session + Protect page - Add in all page back. 
    require_once("bd/session_protect_page.php");
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <title>Sistema Escolar</title>

    <style>
      body {
        padding-top: 54px;
      }
      @media (min-width: 992px) {
        body {
          padding-top: 56px;
        }
      }
      .img{
        margin-top: 5%;
      }
      .logout{
        margin-top: 10%;
      }
    </style>
  </head>
  <body>

    <!-- Page Content -->
    <div class="container">
      
      <div class="row">
        <div class="col-lg-12 text-center">
          <h1 class="mt-5">Bem vindo!</h1>
          <p class="lead">Esse é apenas um teste de login.</p>
          <img src="img/manu01.png" width="25%" class="img">

          <?php
              //msg 
              if(empty($_POST["email"])){
          ?>
              <div class="col-lg-12 col-md-12 col-sm-12 logout">
                  <h5 class="text-center"><a href="logout.php">Sair</a></h5>
              </div>
          <?php
                }
          ?>
        </div>
      </div>
    </div>

  <!-- Javascript -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>
<?php
    // Close connection with BD
    require_once("bd/close_connection.php");
?>