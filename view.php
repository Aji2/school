<?php
include "config.php";
?>

        <table class="table table-hover">
            
                <tr>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">Age</th>
                <th scope="col">Phno</th>
                <th scope="col">Address</th>
                <th scope="col">Salary</th>
                <th scope="col">Year of Exp</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
                </tr>
            
                <?php
                    $sql="select * from employee";
                    $res=$conn->query($sql);
                    if($res->num_rows>0)
                    {
                        $i=0;
                        while($row=$res->fetch_assoc())
                        {
                            $i++;
                            echo"<tr>";
                            echo"<td >{$i}</td>";
                            echo"<td>{$row["name"]}</td>";
                            echo"<td>{$row["age"]}</td>";
                            echo"<td>{$row["phno"]}</td>";
                            echo"<td>{$row["address"]}</td>";
                            echo"<td>{$row["salary"]}</td>";
                            echo"<td>{$row["yearofexp"]}</td>";
                            echo"<td ><button class='btn btn-dark edit' data-id='{$row["id"]}' data-toggle='modal' data-target='#myModal'>Edit</button></td>";
                            echo"<td ><button class='del' data-id='{$row["id"]}'>Delete</button></td>";
                            echo"</tr>";
                        }

                        
                    
                    }
                ?>
                
          </table> 

        
   