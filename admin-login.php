<!DOCTYPE html>
<html lang="en">
<head>
<title>SIGN IN</title>
 <meta name="viewport" content="width=device-width, initial-scale=1">
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
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

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
    <a href="#"><li class="nav-item">HELP</li></a>
    <a href="login.php"><li class="nav-item">SIGN IN</li></a>
    <a href="#"><li class="nav-item">SIGN UP</li></a>
  </ul>
</div>
  </div>
</nav>

<!------ Include the above in your HEAD tag ---------->
<div class="container p-5">    
   <div id="loginbox" style="margin-top:20px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">   
   <div class="panel panel-info" >
   <div class="panel-heading">
   <div class="panel-title text-dark" style="font-family: 'Faster One', cursive;">ADMIN</div>
   <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#">Forgot password?</a></div>
     </div>     
     <img src="image/svg2.svg" height="230px" width="230px" style="margin-left: 40px;">
     <div style="padding-top:40px" class="panel-body" >

         <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                            
         <form id="loginform" class="form-horizontal" role="form" method="post">
                                    
             <div style="margin-bottom: 25px" class="input-group">
                         <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                         <input id="login-username" type="text" class="form-control" name="username" id="email" value="" placeholder="Enter username">                                        
                     </div>
                                
         <div style="margin-bottom: 25px" class="input-group">
                     <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                      <input id="login-password" type="password" class="form-control" name="password"
                      id="password" placeholder="password">
                 </div>

              <div style="margin-top:10px" class="form-group">
                                    <!-- Button -->

                  <div class="col-sm-12 controls">
                    <input type="submit" name="login" class="btn btn-primary">
                 </div>
             </div>


            <div class="form-group">
                <div class="col-md-12 control">
                    <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                    Don't have an account! 
                    <a href="admin-signup.php"> Sign Up Here</a>
                    </div>
                </div>
            </div>    
        </form>     
     </div>                    
  </div>                   
</div>  
</body>
</html>
<!-- PHP backend script -->
<?php  
 $con = mysqli_connect('localhost','root','','newsfeed');
if(isset($_POST['login'])){
  $username = $_POST['username'];
  $password = $_POST['password'];
  $query = "SELECT * FROM admin";
  $fire = mysqli_query($con,$query) or die(mysqli_error($con));
  while($row = mysqli_fetch_assoc($fire)){
    if($row['username'] == $username && $row['password']==$password){
       echo "<script>location.assign('admin.php');</script>";
       break;
    }
  }
}

?>
