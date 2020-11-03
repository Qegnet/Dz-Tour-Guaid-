<?php

  session_start();
  $msg = "";
   if(isset($_POST['submit'])){
  	  $conn = new mysqli('localhost','root','Rockitlm4','test');
  	mysqli_select_db($conn,'test');  
    $username = $conn->real_escape_string($_POST['username']);
    $email = $conn->real_escape_string($_POST['email']);
    $password = $conn->real_escape_string($_POST['password']);
    $cpassword = $conn->real_escape_string($_POST['cpassword']);
   if($password !=cpassword)
        $msg = "Please Check Your Password";
    else{
    	$hash=password_hash($password,PASSWORD_BCRYPT);
    	$reg= "INSERT INTO register (username,email,password) VALUES ('$username','$email','$hash')";
    	mysqli_query($conn,$reg);
    	echo "Resgisterd Successfuly";
    	
    }
    
   }
   
   ?>
