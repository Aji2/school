<?php
include "config.php";
$sql="delete from employee where id=".$_POST["id"];
$conn->query($sql);
?>