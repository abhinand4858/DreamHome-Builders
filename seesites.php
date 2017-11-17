<?php

  session_start(); 
  $out = "";

  if(!isset($_SESSION['user']) ) {
      header("Location: index.php");
  }

  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
   error_reporting(E_ALL);

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
          <h1>Search client details</h1>
          
          <form method="post">

          <button type="submit" name="submit" class="button button-block"/>Display site info</button>
          
          <table style="width:100%">
             <tr>
              <th>Client ID</th>
              <th>Site ID</th>
              <th>City </th>
              <th>Country</th>
            </tr>
            <?php
                  if (isset($_POST['submit'])) {
          

                    $res = mysqli_query($conn, "SELECT * FROM site_info");
                    $row_num = mysqli_num_rows($res);

                    if($row_num > 0) {

                      while($row = mysqli_fetch_array($res)) {

                        echo "<tr><td>".$row['client_id']."</td>"."<td>".$row['site_id']."</td>"."<td>".$row['site_city']."</td>"."<td>".$row['site_country']."</td></tr>";
                      }
                    } else {
                      echo "<br>Not found";
                    }
                  }

                  ?>
            <tr>  
        </tr>
          </table>

          </form>
          

        </div>
        
      
</div> <!-- /form -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script  src="js/login.js"></script>

</body>
</html>
