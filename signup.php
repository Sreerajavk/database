<?php
  
   require('connet.php');
   
    if(!(isset($_GET['username']) and isset($_GET['password']))){
  
      $username  = $_POST['username'];
      $password = $_POST['password'];
      echo $username;
      
      
     
      $query = "insert into user values('$username','$password')";
      $result = mysqli_query($connection , $query) ;}
      
   
?>
