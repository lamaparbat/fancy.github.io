<?php   
 $con = mysqli_connect('localhost','root','','newsfeed');
$id = $_POST['id'];
$query = "DELETE FROM post WHERE id = $id";
$fire = mysqli_query($con,$query);
?>