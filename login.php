<?php
 
  session_start();
  require('connet.php');
  /*$servername = "localhost";
   $username = "root";
   $password = "mysql";

// Create connection
$connection = new mysqli($servername, $username, $password);

// Check connection
   if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
    }
    $select_db = mysqli_select_db($connection,'login');
  
     if(!select_db){
        die("Database selection failed " . mysqli_error($connection));
        }*/
        
 if(isset($_POST['username']) and isset($_POST['password'])){
  
      $username  = $_POST['username'];
      $password = $_POST['password'];
      
      
     
      $query = "select* from user where username  = '$username' and password = '$password'";
      $result = mysqli_query($connection , $query) ;
           
      $count = mysqli_num_rows($result);

     if($count == 1){
        $_SESSION['username'] = $username;
        
        $username  = $_SESSION['username'];
          echo "Hai " . $username;
          echo "<a href = 'logout.php'> Logout </a> ";}
      else{
        echo "Invalid login credentials";
        }
        }
   
         
      
    
 
?>
