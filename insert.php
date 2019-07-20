<?php
include "config.php";
   $name=$_POST["name"];
 $age=$_POST["age"];
  $phone=$_POST["phone"];
  $address=$_POST["address"];
    $salary=$_POST["salary"];
$yop=$_POST["yop"]; 

echo 
   $sql="INSERT INTO `employee` (`name`, `age`,`phno`,`address`,`salary`,`yearofexp`) VALUES ('$name', '$age', '$phone','$address','$salary','$yop')";
    
 
   if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>
