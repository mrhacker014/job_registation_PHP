<?php
     $username = "root";
     $password = "";
     $server = 'localhost';
     $db = 'first_table';


     $con = mysqli_connect($server,$username,$password, $db);
      if($con){
          // echo "Connection Successful";
      ?>
      <script> alert("Connection Successfull"); </script>
      <?php
      }else{
          // echo "No connection";
      }
?>