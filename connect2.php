<?php
  $msg = "";
   if(isset($_POST['submit'])){
      $conn = new mysqli('localhost','root','Rockitlm4','test');
      mysqli_select_db($conn,'register');
    $username = $conn->real_escape_string($_POST['username']);
    $password = $conn->real_escape_string($_POST['password']);
  $sql=msql_query($conn, "SELECT id,password FROM rigster WHERE username='$username'");
  if($sql->num_rows>0){
    $data = $sql->fetch_array();
     if(password_verify($password, hash)){
      $msg="Wellcome";
     }
  } 
   }
   
   ?>
