<!-- Session --> <?php require "./inc/session_start.php" ?> <!-- Session -->


<!doctype html>
<html lang="es">
  <head>
    <!-- head --> <?php include "./inc/head.php" ?> <!-- head -->
  </head>
  <body>

 

    <?php

      if(!isset($_GET['vista']) || $_GET['vista'] == ""){
        $_GET['vista'] = "login";
      }
      if(is_file("./vistas/".$_GET['vista'].".php") 
        && $_GET['vista'] !="login"
          && $_GET['vista'] !="404" ){

                // Navbar
            include "./inc/navbar.php";  
            // Vista
            include "./vistas/".$_GET['vista'].".php";        
            // Footer
            include "./inc/footer.php";  
            // Scripts
            include "./inc/script.php"; 

      }else{

        if($_GET['vista'] == "login"){
          include "./vistas/login.php";      
        }else{ 
          include "./vistas/404.php";      
        }
      }    
     ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>








        
  </body>
  

  
</html>
