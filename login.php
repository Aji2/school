<?php
//print_r($_POST)
include "config.php";
session_start();

 

// if(isset($_POST['login'])){
     
     $email=$_POST['email'];
     $password=$_POST['password'];
    
     $sql = "SELECT `id` FROM `users` WHERE email='$email' AND password='$password'";
     $data=$conn->query($sql);
     $row=$data->fetch_assoc();
     if($row['id'] > 0){
       $_SESSION['loggedIN']=$row['id'];
      if(isset($_SESSION['loggedIN'])){
            header('Location:front.php');
           
        }
     
       //echo $row['id'];
    
     else {
         echo'please enter the correct input';
     }
    }
// }
?>