<!DOCTYPE html>
<html>
<head>
    <title>SIGN UP</title>
     <!-- font awesome -->
    <script src="https://use.fontawesome.com/0b71728948.js"></script>
  <!-- jquery cdn -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

  <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<!-- google font -->
<link href="https://fonts.googleapis.com/css2?family=Faster+One&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Saira+Condensed:wght@500&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
<!-- google font -->
 <link href="https://fonts.googleapis.com/css2?family=Faster+One&display=swap" rel="stylesheet">
<!-- font awesome -->
    <script src="https://use.fontawesome.com/0b71728948.js"></script>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
  <!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<!-- form -->
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
 <style>
  /*set entire body that is webpage *//
body{
  background: #383a3d;
  padding-top: 25vh;  
}
#navbar_brand{
  font-size: 30px;
  font-family: 'Faster One', cursive;
}
#bar{
  font-size: 25px;
}
.ul{
  /*padding: 10px;*/
  margin-left: 20px;
}
.ul a{
  text-decoration: none;
  color: white;
}
.ul li{
  padding: 10px;
  width: 100px;
  font-size: 18px;
  font-family: 'Saira Condensed', sans-serif;
  text-align: center;
  transition: 0.7s;
}
.ul li:hover{
  background-color: black;
  columns: white;
  border-color: black;
  border-radius: 10px;
} 

</style>
</head>
<body>
<!-- navbar -->
<nav class="navbar navbar-expand-md bg-dark text-white">
  <div class="container-fluid">
    <h4 class="navbar-brand mt-0 ml-5" id="navbar_brand">FANCY</h4>
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
     <i class="fa fa-bars" id="bar"></i>
    </button>
  </div>
  <div class="collapse navbar-collapse" id="navbar">
  <ul class="nav navbar-nav ul">
    <a href="index.php"><li class="nav-item">HOME</li></a>
    <a href="#"><li class="nav-item">ABOUT</li></a>
    <a href="admin-login.php"><li class="nav-item">ADMIN</li></a>
    <a href="#"><li class="nav-item">HELP</li></a>
    <a href="login.php"><li class="nav-item">SIGN IN</li></a>
  </ul>
</div>
  </div>
</nav>
<!-- signup box -->
 <div id="signupbox" style="margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
<div class="panel panel-info">
<div class="panel-heading">
    <div class="panel-title text-dark" style="font-family: 'Faster One', cursive;">FANCY</div>
</div>  
<div class="panel-body" >
    <form id="signupform" class="form-horizontal" role="form" method="post">
                                
        <div id="signupalert" style="display:none" class="alert alert-danger">
            <p>Error:</p>
            <span></span>
        </div>
                                    
          <div class="form-group">
            <label for="username" class="col-md-3 control-label">Username</label>
            <div class="col-md-9">
                <input type="text" class="form-control" name="username" placeholder="Enter username">
            </div>
        </div>
                                  
        <div class="form-group">
            <label for="email" class="col-md-3 control-label">Email</label>
            <div class="col-md-9">
                <input type="text" class="form-control" name="email" placeholder="Enter Email Address">
            </div>
        </div>
                                    
         <div class="form-group">
             <label for="password" class="col-md-3 control-label">Password</label>
            <div class="col-md-9">
                <input type="password" class="form-control" name="password" placeholder="Enter Password">
            </div>
        </div>
                                    
        <div class="form-group">
            <label for="icode" class="col-md-3 control-label">Phone No.</label>
            <div class="col-md-9">
                <input type="text" class="form-control" name="phone" placeholder="Enter Phone Number">
            </div>
        </div>

        <div class="form-group">
                                    <!-- Button -->                                        
            <div class="col-md-offset-3 col-md-9">
                <input type="submit" name="create" value="Create" for="create" class="btn btn-primary">
              <span style="margin-left:8px;">or</span>  
            </div>
        </div>
                                
         <div style="border-top: 1px solid #999; padding-top:20px"  class="form-group">
                                    
            <div class="col-md-offset-3 col-md-9">
                 <button id="btn-fbsignup" type="button" class="btn btn-primary"><i class="icon-facebook"></i>   Sign Up with Facebook</button>
            </div>                                           
              <link rel="stylesheet" type="text/css" href="public_html/style.css">                          
        </div>      
    </form>
  </div>
</div>                    
</div> 
</div>
</body>
</html>
<?php  
  $con = mysqli_connect('localhost','root','','newsfeed');
 if(isset($_POST['create'])){
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $phone = $_POST['phone'];
  //insert query
  $query = "INSERT INTO user(username,email,password,phone) VALUES('$username','$email','$password','$phone')";
  $fire = mysqli_query($con,$query) or die(mysqli_error($con));
  if($fire){
      echo "<script>location.assign('index.php');</script>";
    }
  }
 ?>
