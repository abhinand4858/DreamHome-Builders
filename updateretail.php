<?php

  session_start(); 
  $out = "";

   ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
   error_reporting(E_ALL);

  if(!isset($_SESSION['user']) ) {
      header("Location: index.php");
  }

 

  include('connect.php');
  $dbcon = mysqli_select_db($conn,'Host Builders');

  if ( !$dbcon ) {
      die("Database Connection failed : " . mysql_error());
  } 

?>

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Search clients</title>
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

      <link rel="stylesheet" href="css/forms.css">  
</head>

<body>
<div class="form">
      
      
        <div id="signup">   
          <h1>Retailer ID to be updated</h1>
          
          <form method="post">

            <div class="field-wrap">
            <label>
              Retailer id<span class="req">*</span>
            </label>
            <input type="text" name="ret-id" required autocomplete="off"/>
          </div>

            <h1>Enter new values</h1>

          <div class="field-wrap">
            <label>
              Retailer Name<span class="req">*</span>
            </label>
            <input type="text" name="ret-name" required autocomplete="off"/>
          </div>


          <div class="field-wrap">
            <label>
              Phone number<span class="req">*</span>
            </label>
            <input type="text" name="ret-ph" required autocomplete="off"/>
          </div>


          <div class="field-wrap">
            <label>
              Street<span class="req">*</span>
            </label>
            <input type="text" name="ret-st" required autocomplete="off"/>
          </div>


          <div class="field-wrap">
            <label>
              Country<span class="req">*</span>
            </label>
            <input type="text" name="ret-cou" required autocomplete="off"/>
          </div>
      
          
          <button type="submit" name="ret-submit" class="button button-block"/>Update</button>
          
          <?php
                if (isset($_POST['ret-submit'])) {
                  $retid = $_POST['ret-id'];
                  $retname = $_POST['ret-name'];
                  $retph = $_POST['ret-ph'];
                  $retst = $_POST['ret-st'];
                  $retcou = $_POST['ret-cou'];

                  $res = mysqli_query($conn, "UPDATE ret_info SET ret_name ='$retname', ret_phone ='$retph', street ='$retst', country='$retcou' WHERE ret_id=$retid ");
                  //echo $retid." ".$retname." ".$retph." ".$retst." ".$retcou;

                  if($res) {
                    echo "<br><h2>Updated!</h2>";
                  }
                    else {
                      echo "<br>Error!";
                    }
                  
                }

                ?>
           
          </form>
          

        </div>
        
</div> <!-- /form -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script  src="js/login.js"></script>

</body>
</html>
