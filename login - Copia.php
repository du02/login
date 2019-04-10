<?php 
    // Open connection
    require_once("bd/connection_bd.php"); 
?>
<?php
    session_start();

    // Config. login
    if (isset($_POST["email"])){
        $email = $_POST["email"];
        $pass  = $_POST["pass"];

        //Search in BD - Pesquisa no BD
        $search_bd = "SELECT *";
        $search_bd .= " FROM info";
        $search_bd .= " WHERE email = '{$email}' and pass = '{$pass}' ";

        $access = mysqli_query($connect, $search_bd);
        if(!$access){
            die("ERRO connection TABLE");
        }

        $information = mysqli_fetch_assoc($access); 
        if(empty($information)){
            $msg = "Email ou Senha estão incorretos!"; // incorret email or pass
        }else{
            $_SESSION["user_portal"] = $information["user_id"]; 
            header("location: bem_vindo.php"); // go!
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <title>Sistema Escolar</title>
</head>
<body>
   <div class="container" >  
            <div class="col-lg-4 col-md-3 col-sm-2"></div>
            <div class="col-lg-4 col-md-6 col-sm-8">
               
                <!-- Login -->
                <form class="row loginbox" action="login.php" method="post">                    
                        <div class="col-lg-12">
                             <h2 class="singtext text-center">Sistema Login</h2>   
                        </div>
        
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <input class="form-control" type="text" name="email" placeholder="Email" required> 
                        </div>
                        <div class="col-lg-12  col-md-12 col-sm-12">
                            <input class="form-control" type="password" name="pass" placeholder="Senha" required>
                        </div>
                        <div class="col-lg-12  col-md-12 col-sm-12">
                            <input type="submit" class="btn submitButton animated pulse" value="Login"> 
                        </div>

                        <?php
                            //msg erro
                            if(isset($msg)){
                        ?>
                            <div class="col-lg-12 col-md-12 col-sm-12 erro_login animated shake">
                                <h5 class="text-center"><?php echo $msg; ?></h5>
                            </div>
                        <?php
                            }
                        ?>
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