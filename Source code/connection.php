<?php      
    $host = "localhost";  
    $user = "root";  
    $password = '';  
    $db_name = "Library";  
    $con = mysqli_connect($host, $user, $password, $db_name);  //dabase connection
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  
?>  