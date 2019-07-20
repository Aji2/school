<?php
include "config.php";
$output='';
$sql="SELECT * FROM employee WHERE name LIKE '%".$_POST["search"]."%'";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result)>0)
{   $output .='<h4 align="center"><b>Srearch Result</b></h4>';
   $output .= '
                <table class="table table-hover">
            
                <tr>
                   
                    <th scope="col">Name</th>
                    <th scope="col">Age</th>
                    <th scope="col">Phno</th>
                    <th scope="col">Address</th>
                    <th scope="col">Salary</th>
                    <th scope="col">Year of Exp</th>
                    
                </tr>';
        while($row = mysqli_fetch_array($result))
        {
            $output.='
            <tr>
            <td>'.$row["name"].'</td>
            <td>'.$row["age"].'</td>
            <td>'.$row["phno"].'</td>
            <td>'.$row["address"].'</td>
            <td>'.$row["salary"].'</td>
            <td>'.$row["yearofexp"].'</td>
            ';

           
        }
        echo $output;
}
else{
    echo 'data not found';
}
?>