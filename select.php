<?php
    ob_start();
    session_start(); 

    if(!isset($_SESSION['user']) ) {
    	header("Location: index.php");
    }
?>

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Sign-Up/Login Form</title>
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
      <link rel="stylesheet" href="css/login.css">

  
</head>

<body>
  <div class="form" method="post">    
        
        <div id="login">   
          <h1>Choose any option</h1>
            <a href="searchcli.php"><button class="button button-block" name="btn-login"/>Search clients</button></a>
            <a href="updateretail.php"><button class="button button-block" name="btn-login"/>Update retailer info</button></a>
            <a href="addsite.php"><button class="button button-block" name="btn-login"/>Add new Site</button></a>
            <a href="seesites.php"><button class="button button-block" name="btn-login"/>See current sites</button></a>
        </div>
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script  src="js/login.js"></script>

</body>
</html>
