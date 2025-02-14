<?php      
    include('connect.php');  
   $userid=$_POST['userid'];
    $password = $_POST['password'];    
        $userid = stripcslashes($userid);  
        $password = stripcslashes($password);  
        $userid = mysqli_real_escape_string($connect, $userid);  
        $password = mysqli_real_escape_string($connect, $password);  
      
        $sql = "select * from logd where userid = '$userid' and password = '$password'";  
        $result = mysqli_query($connect, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            echo "<h1><center> welcome to latheef </center></h1>";  
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }     
?>  