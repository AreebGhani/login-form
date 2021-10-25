<?php

$server = "localhost";
$user = "root";
$password = "";
$database = "formdb";

$connect = mysqli_connect($server, $user, $password, $database);

if ($connect){
    echo '<script type="text/javascript">alert("DataBase Connected Successfully . . . ! !");</script>';
};

extract($_POST);

if (isset($_POST["submit"])) {

  $Emails = $_POST['email'];
  $Password = $_POST['password'];

  $Search_Email =  "select * from registered_users where Emails = '$Emails' ";

  $Query = mysqli_query( $connect, $Search_Email );
       
  $Count_Emails = mysqli_num_rows($Query);
   
    if($Count_Emails > 0){
         
      $Checked_Emails = mysqli_fetch_array($Query);
      $Check_Password = $Checked_Emails['Password'];

        if($Password == $Check_Password){
         
         ?>
            <script>

              alert("Login Successfully . . . ! !");

              location.replace('./login.html');

            </script>
         
         <?php
        
        } else {
       
         ?>
     
            <script>

              alert("Can't Login Incorrect Password . . . ! !");

              location.replace('./login.html');

            </script>
      
         <?php
      
        };

    } else {
       
     ?>
       
       <script>

          alert("Email Doesn't Exist . . . ! !");

          location.replace('./login.html');
       
        </script>
       
     <?php
    
    };

};

?>