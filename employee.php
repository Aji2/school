
<!-- <?php
session_start();
if(!isset($_SESSION['loggedIN'])){
    header('Location:front.php');
    exit();
}
?> -->
<html>
    <head>
        <title>EMPLOYEE</title>
        <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Employee</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarColor02">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#"data-toggle="modal" data-target="#myModal">Create </a>
      </li>
      <!-- <li class="nav-item active">
        <a class="nav-link" href="#">Read</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">Update</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">Delete</a>
      </li> -->
    </ul>   
  </div>
  <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" name="search" id="search" placeholder="Search by Employee Name">
      <button class="btn btn-secondary my-2 my-sm-0" href="logout.php">Logout</button>
      
    </form>
</nav>
<div id="result"></div>
<div id="output">
    
</div>
<div class="container">
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
            <form id="create">
                <fieldset>
                    <legend>Employee</legend>
                    <div class="form-group">
                    <label >Name</label>
                    
                    <input type="text" class="form-control" name="name" id="name"  placeholder="Name">
                    </div>
                    <div class="form-group">
                    <label >Age</label>
                    <input type="text" class="form-control" name="age"id="age"  placeholder="Age">
                    </div>
                    <div class="form-group">
                    <label >Phone No</label>
                    <input type="text" class="form-control" name="phone" id="phone"  placeholder="Phone">
                    </div>
                    <div class="form-group">
                    <label >Address</label>
                    <input type="text" class="form-control" name="address" id="address"  placeholder="Address">
                    </div>
                    <div class="form-group">
                    <label >Salary</label>
                    <input type="text" class="form-control" name="salary" id="salary"  placeholder="Salary">
                    </div>
                    <div class="form-group">
                    <label >Year of Experience</label>
                    <select class="form-control"name="yop" id="yop">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                    </div>  
                    </fieldset>  
                    </div>
        <div class="modal-footer">
          <input type="hidden" id="txt" name="txt" value="0">
        <button type="submit" class="btn btn-dark" id="save">Save </button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>  
            </form>
        
      </div>
      
    </div>
  </div>
  
</div>
<script>
  //create
    $(document).ready(function(){
      $("#output").load("view.php");
        $("#save").click(function(/*event*/){
         //event.preventDefault();
         var id=$("#txt").val();
         if(id==0)
         {
            $.ajax({
                url:"insert.php",
                type:"POST",
                data:$("#create").serialize(),
                // success:function(a)
                // {
                //     alert(a);
              
                // }
            });
         }
         else
         {
          $.ajax({
                url:"update.php",
                type:"POST",
                data:$("#create").serialize(),
                success:function(a)
                {
                   $("#txt").val("0");
              
                }
            });
         }
        });
 //delete
        $(document).on("click",".del",function(){
          var del=$(this);
         var id=$(this).attr("data-id");
         
          $.ajax({
                url:"delete.php",
                type:"POST",
                data:{id:id},
                success:function()
                {
                    del.closest("tr").hide();
                }
          });

        });
//update
        $(document).on("click",".edit",function(){
          var edi=$(this);
         var id=$(this).attr("data-id");
         $("#txt").val(id);
         var name=edi.closest("tr").find("td:eq(1)").text();
         $("#name").val(name);
         var age=edi.closest("tr").find("td:eq(2)").text();
         $("#age").val(age);
         var phone=edi.closest("tr").find("td:eq(3)").text();
         $("#phone").val(phone);
         var address=edi.closest("tr").find("td:eq(4)").text();
         $("#address").val(address);
         var salary=edi.closest("tr").find("td:eq(5)").text();
         $("#salary").val(salary);
         var yop=edi.closest("tr").find("td:eq(6)").text();
         $("#yop").val(yop);
       
          });
//search
       $('#search').keyup(function(){
          var txt=$(this).val();
          if(txt =='')
          {
            $('#result').html('');
          }
          else{
           
            $.ajax({
              url:"fetch.php",
              method:"post",
              data:{search:txt},
              dataType:"text", 
              success:function(data)
              {
                $('#result').html(data);
              }
            });
          }
       });
    });
</script>
    </body>
</html>