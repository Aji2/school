<html>
<head>
<title>login</title>
<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Employee</a> 
</nav>
<div class="container">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title"><b>Employee login</b></h4>    
        </div>
        <div class="modal-body">
        <form action="login.php" method="POST">
            <fieldset> 
                <div class="form-group">
                <label>Email address</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                </div>
                <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                </div>   
            </fieldset>  
        <div class="modal-footer">
        <button type="submit" class="btn btn-dark"id="login">Login</button>
        <!-- <button type="button" class="btn btn-dark" href="signup.php">Sign in</button> -->
        </div>    
        </form>
        </div>
       
       
      </div>
    </div>
  </div>
</div>
<!-- <p id="response"></p> -->
</body>
<!-- <script>
$(document).ready(function(){
    $("#login").on('click',function(){
        var email=$("#email").val();
        var password=$("#password").val();
        //console.log(email,"email");
        if(email=="" || password =="")
        alert("please enter your input");
        else{
        $.ajax(
            {
                url:'login.php',
                method:"POST",
                data:{
                    email:email,
                    password:password,
                    
                },
                success:function(response){
                //    $("#response").html(response);
                    // console.log(response);
                    if(response != NULL){
                        // $_SESSION['sessionid']=response;
                    window.location.href='http://localhost/employee/front.php';
                  
                    }else{
                        console.log("Failed to load employee");
                   }
                },
                datatype:"Text"
            }
        );
    }
        
    });
});
</script> -->
</html>