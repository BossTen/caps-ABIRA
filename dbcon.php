      <?php
         $dbhost = 'localhost';
         $dbuser = 'root';
         $dbpass = '';
         $dbtable = "abira";
         $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbtable);
   
         if(! $conn ){
            die('Could not connect: ' . mysqli_error());
         }
         //echo 'Connected successfully';
         //mysqli_close($conn);
      ?>