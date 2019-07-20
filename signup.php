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
            <h4 class="modal-title"><b>Employee Signin</b></h4>    
        </div>
        <div class="modal-body">
        <form >
            <fieldset> 
                <div class="form-group">
                <label>Email address</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                </div>
                <div class="form-group">
                <label>Password </label>
                <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                </div>   
                <div class="form-group">
                <label>Re-Enter-Password</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                </div>   
            </fieldset>  
        <div class="modal-footer">
        <button type="submit" class="btn btn-dark"id="signin">Sign in</button>
        </div>    
        </form>
        </div>
       
       
      </div>
    </div>
  </div>
</div>
</body>
</html>