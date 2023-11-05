<?php
   if(!isset($_SESSION)) 
   { 
       session_start(); 
   } 
       require_once('database.php');
   if(isset($_REQUEST['submit'])) {
       $email = $_REQUEST['email'];
       $password = $_REQUEST['password'];
       $stmt = $conn->prepare("SELECT * FROM user");
       $stmt->execute();
       $user_count = $stmt->rowCount();
       if($user_count > 0){
           $row = $stmt->fetch(PDO::FETCH_BOTH);
           $password_hash  = $row['uPassword']; 
        $verify = password_verify($password , $password_hash);
           if($email = $row['uEmail'] && $password = $verify){
               $_SESSION['admin'] = $row;
               // echo"<pre>";
               // print_r($row);
               //header("Location:index.php?message= User Login Successfully &color=success");
               header("Location:index.php?message= User Login Successfully &color=success");
       }
       else{
           header("Location:login.php");
   
       }

    }
   }
   ?>