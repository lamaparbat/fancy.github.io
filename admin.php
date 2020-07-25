<!DOCTYPE html>
<html>
<head>
  <title></title>
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
  body{
    font-size: 18px;
     font-family: 'Saira Condensed', sans-serif;
  }
.navbar{
  padding-top: 10px;
  padding-bottom: 10px;
}
#navbar_brand{
  font-size: 30px;
  font-family: 'Faster One', cursive;
}
.ul li input{
  margin-left: 15px;
  padding: 5px;
  margin-top: 10px;
}
.ul li #file{
  margin-top: 14px;
  padding: 5px;
  width: 170px;
}
#post{
  margin-top: 10px;
  height: 40px;
  width: 100px;
}
#logout_btn{
  margin-top: 10px;
  margin-left: 20px;
  height: 40px;
  width: 100px;
  position:relative;
}
#post_no{
      font-size: 18px;
      position: fixed;
      margin-top:60px;
      margin-left:120px;
       font-family: 'Saira Condensed', sans-serif;
       z-index:1;
}
</style>
</head>
<body>
<!-- navbar -->
<nav class="navbar navbar-expand-md bg-dark text-white navbar-fixed-top">
  <div class="container-fluid">
  <h4 class="navbar-brand mt-0 ml-5" id="navbar_brand">FANCY</h4>
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
     <i class="fa fa-bars" id="bar"></i>
    </button>
  </div>
  <div class="collapse navbar-collapse" id="navbar">
  <form method="post" action="" enctype="multipart/form-data">
  <ul class="nav navbar-nav ul">
   <li class="nav-item"><input type="file" name="img" id="file" class="btn btn-info" required="required"/></li>
   <li class="nav-item"><input type="text" name="name" required="required"/ placeholder="Enter name of T-shirt"></li>
   <li class="nav-item"><input type="text" name="price" required="required"/ placeholder="Enter price of T-shirt"></li>
   <li class="nav-item"><input type="text" name="discount" required="required"/ placeholder="Enter discount of T-shirt"></li>
   <input type="submit" name="post" id="post" value="POST" class="btn btn-primary ml-5">
  </ul>
</form>
   <button class="btn btn-danger" id="logout_btn" onclick="logout()">LOGOUT</button>
</div>
  </div>
</nav>
<!--Post container-->
<div class="container" id="cart">
   <h3 class="ml-4">AVAILABLE PRODUCT</h3>
   <div id="under_bar"></div><br>
    <div class="row">
        <?php  
              $con = mysqli_connect('localhost','root','','newsfeed');
              $select_query = "SELECT * FROM post";
              $fire = mysqli_query($con,$select_query);
              while($row = mysqli_fetch_assoc($fire)){
          ?>
            <div class="col-md-3 pb-5 mt-5" id="column">
                <div class="card">
                <img src="images/<?php echo $row['img']; ?>" class="card-img" height="150px">
                <div class="card-body">
                     <h4 class="card-title"><?php echo $row['name']; ?></h4><hr>
                    <h6 class="card-title">Price -$<?php echo $row['price']; ?></h6>
                    <h6 class="card-title">Discount -$<?php echo $row['discount']; ?></h6>
                    <h6 class="card-title">VAT - $0.00</h6>
                    <h6 class="card-title"><b>Total -$<?php echo $row['total']; ?></b></h6>
                    <a href="#" class="btn btn-primary" onclick="delete_post(<?php echo $row['id']; ?>)">DELETE</a>
                </div>
              </div> 
            </div>
    <?php } ?>
     </div>
    </div>

</body>
<script>
//text popup after posted and delete

$('#posted').hide();
$('#deleted').hide();

function delete_post(id){
  var id = id;
  $.ajax({
    url:'delete.php',
    type:'post',
    data:{data:true,id},
    success:function(result){
      $('#deleted').show();
      location.assign('admin.php');
    }
  })
}
//logout
function logout(){
  location.assign('https://lama-fancy.000webhostapp.com/admin-login.php');
}
</script>
</html>
<?php 
    $con = mysqli_connect('localhost','root','','newsfeed');
   if(isset($_POST['post'])){
    $name = $_POST['name'];
    $price = $_POST['price'];
    $discount = $_POST['discount'];
    $total= $price + $discount;
    $img = $_FILES['img']['name'];
    $temp_img_name = $_FILES['img']['tmp_name'];
    move_uploaded_file($temp_img_name, "images/$img");
    $insert_query = "INSERT INTO post(name,price,discount,total,img) VALUES('$name','$price','$discount','$total','$img')";
    $fire = mysqli_query($con,$insert_query);

    if($fire){
       echo "<script>$('#posted').show();</script>";
       echo "<script>location.assign('admin.php');</script>";
      }
  }
?>