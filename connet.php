<?php

    $connection = mysqli_connect('localhost' , 'root' , 'mysql' );
    if(!$connection){
     die("connectin failed " . mysqli_error($connection));
     }
 
     
     $select_db = mysqli_select_db($connection,'login');
     
     if(!$select_db){
   
        die("Database selection failed " . mysqli_error($connection));
             echo "Connected  not successfully";
        }
        
     
?>
