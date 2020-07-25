<?php 
  $con = mysqli_connect('localhost','root','','newsfeed');
 $average=$total=$total_rate=0;
 $rate = $_POST['rate'];
 $post_id = $_POST['post_id'];
 $select_query="SELECT * FROM post";
 $fire2=mysqli_query($con,$select_query) or die(mysqli_error($con));
 while($row=mysqli_fetch_assoc($fire2)){
     $total++;
     $total_rate =$total_rate+$rate;
 }
 $average =round($total_rate/$total);
 $insert_query = "UPDATE post SET rate='$rate',average='$average' WHERE post_id='$post_id'";
 $fire = mysqli_query($con,$insert_query) or die(mysqli_error($con));
 if($fire){
 	echo "inserted!";
 }
?>