<?php

include "config.php";
$name=$_POST["name"];
$age=$_POST["age"];
 $phone=$_POST["phone"];
 $address=$_POST["address"];
$salary=$_POST["salary"];
$yop=$_POST["yop"]; 
$id=$_POST["txt"]; 
$sql = " UPDATE `employee` SET name='$name', age='$age', phno='$phone', address='$address', salary='$salary', yearofexp='$yop' WHERE id='$id' ";
$conn->query($sql);
?>