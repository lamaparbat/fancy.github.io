<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- css link -->
    <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://use.fontawesome.com/1e8a3f354d.js"></script>
    <!-- ONLINE CDN -->
    <!-- owl carousel  -->
    <link rel="stylesheet" type="text/css" href="owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="owl.theme.default.min.css">
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css2?family=Faster+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Saira+Condensed:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Shrikhand&display=swap" rel="stylesheet">
    <!-- star rating -->
   
    <!-- animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.0/animate.compat.min.css" integrity="sha256-Qj+zEEvubER4lO5l200c3UfufBOsKTgpsgJU0/t3CoU=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.0/animate.compat.min.css" integrity="sha256-Qj+zEEvubER4lO5l200c3UfufBOsKTgpsgJU0/t3CoU=" crossorigin="anonymous" /> 
</head>
<body>
<!-- navbar -->
<nav class="navbar navbar-expand-md text-white" id="nav_box">
  <div class="container-fluid">
    <h4 class="navbar-brand mt-1" id="navbar_brand">FANCY</h4>
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
     <i class="fa fa-bars" id="bar"></i>
    </button>
  </div>
  <div class="collapse navbar-collapse" id="navbar">
  <ul class="nav navbar-nav ul">
    <a href="#"><li class="nav-item">HOME</li></a>
    <a href="#"><li class="nav-item">ABOUT</li></a>
    <a href="admin-login.php"><li class="nav-item">ADMIN-LOG</li></a>
    <a href="#"><li class="nav-item">HELP</li></a>
    <a href="login.php"><li class="nav-item">SIGN IN</li></a>
    <a href="signup.php"><li class="nav-item">SIGN UP</li></a>
  </ul>
</div>
  </div>
</nav>
          <!--  Panel-1 -->
<div class="container-fluid panel_1">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
      <li data-target="#myCarousel" data-slide-to="5"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" style="position: relative;">
      <div class="item active">
        <img src="image/fash6.png" alt="">
        <div class="carousel-caption">
          <h1>Fashion</h1>
          <p>With time, Fashion become part of my DNA</p>
        </div>
      </div>

      <div class="item">
        <img src="image/fash1.jpg" alt="">
        <div class="carousel-caption">
          <h3>QUOTES1</h3>
          <p>With time, Fashion become part of my DNA</p>
        </div>
      </div>
    
      <div class="item">
        <img src="image/fash.png" alt="">
        <div class="carousel-caption">
          <h3>QUOTES1</h3>
          <p>With time, Fashion become part of my DNA</p>
        </div>
      </div>
      <div class="item">
        <img src="image/fash3.png" alt="">
        <div class="carousel-caption text-dark">
          <h3>QUOTES1</h3>
          <p>With time, Fashion become part of my DNA</p>
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<div class="container-fluid bg-white pl-5 pr-5" id="carousel_footer">
  <div class="row">
    <div class="col-md-4" id="carousel_footer_col">
     <div class="row">
       <div class="col-md-4">
         <img src="image/shopping-bag.svg" class="card-img">
       </div>
       <div class="col-md-8 text-center">
         <h3>RELAIBLE PRODUCT</h3>
         <p>We serve your desire!</p>
       </div>
     </div>
    </div> 
    <div class="col-md-4" id="carousel_footer_col">
     <div class="row">
       <div class="col-md-4">
         <img src="image/app.svg" class="card-img">
       </div>
       <div class="col-md-8 text-center">
        <h3>ONLINE-SHOPPING</h3>
        <p>Let's shopping from our own</p>
       </div>
     </div>
    </div> 
    <div class="col-md-4" id="carousel_footer_col">
     <div class="row">
       <div class="col-md-4">
         <img src="image/pay.svg" class="card-img">
       </div>
       <div class="col-md-8 text-center">
         <h3>ONLINE-PAYMENT</h3>
         <p>You can pay from your home</p>
       </div>
     </div>
    </div> 

  </div>
</div>
<!-- card carousel -->  
<div class="container-fluid p-5 mt-0" id="card_carousel">
<h3 class="ml-5 text-center">AVAILABLE PRODUCT</h3>
  <div class="owl-carousel owl-theme p-5">
    <?php  
        $con = mysqli_connect('localhost','root','','newsfeed');
        $select_query = "SELECT * FROM post";
        $fire = mysqli_query($con,$select_query) or die(mysqli_error($con));
        while($row = mysqli_fetch_assoc($fire)){
    ?>
    <div class="item p-5">
      <div class="card">
      <img src="images/<?php echo $row['img']; ?>" height="200px">
      <div class="card-body">
          <div class="row lead ml-1">
            <div class="stars-existing starrr" data-rating='<?php echo $row['average']; ?>'></div>
            <input type="hidden" name="" class="post_id" value="<?php echo $row['post_id']; ?>">
          </div>
          <h4 class="card-title"><?php echo $row['name']; ?></h4>
          <h6 class="card-title">Price -$<?php echo $row['price']; ?></h6>
          <a href="#" class="btn btn-primary">Add To Cart</a>
      </div>
      </div> 
    </div>
  <?php } ?>

</div>
</div>
  


      <!-- panel3 -->
<div class="container-fluid pt-4 panel3">
  <div class="row" style="background-color: #333; color: #f1f1f1;">
    <div class="col-md-6" id="panel3_col1">
      <h1>JUST DO IT</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmotempor incididunt ut labore et dolore magna aliqua. Ut enim a
      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
      proide</p>
    </div>
    <div class="col-md-6" id="panel3_col2">
      <img src="image/svg1.svg" class="img-fluid ml-0 mt-5">
    </div>
  </div>
</div>
          <!-- panel-4 -->
<div class="container-fluid bg-white panel4">
  <h1 id="panel4_h1">What We Do?</h1>
  <div class="row description panel4_row">

    <div class="col-md-6 pl-5 pr-5 bg- text-center">
      <h3>Online Delivery</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
      proident</p>
      <img src="image/svg4.svg">
    </div>
    <div class="col-md-6 pl-5 pr-5 text-center">
      <h3>Festival Offer</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
       <img src="image/svg9.svg">
    </div>

  </div>
</div>
<!-- panel5 -->
<div class="container-fluid text-white rating" style=" background-color:#333;">
  <h3 class="text-center text-primary">DON'T FORGET TO SUBSCRIBE</h3>
   <div class="row pb-1">
  <?php 
   $con = mysqli_connect('localhost','root','','newsfeed');
   if(isset($_POST['subscribe'])){
     $subscriber = 0;
     $email = $_POST['email'];
     $subscriber++;
     $insert_query ="INSERT INTO website_rate(subscriber,email) VALUES('$subscriber','$email')";
     if($email ==""){
      // break;
     }else{
      mysqli_query($con,$insert_query);
     }
   }
   $select_query = "SELECT * FROM website_rate";
   $fire = mysqli_query($con,$select_query);
   while($row = mysqli_fetch_assoc($fire)){  
    ?>
   <h4 id="h4" style="margin-left: 130px; color: white;position: absolute;background-color: #333;">No. of Visitors: <?php echo $row['id']; ?></h4>
   <?php } ?><br><br>
   </div>
   <form method="post" action="index.php" id="rating_comment">
       <div class="row"><textarea name="email" placeholder="Enter your email.........." id="textarea" style="width: 250px; margin:auto;" required="required"></textarea></div><br>
       <div class="row mb-5"><button name="subscribe" type="submit" class="btn btn-success" onclick="subscribe()" style="margin: auto;">SUBSCRIBE  <i class="fa fa-heart" style="font-size: 13px;"></i></button></div>
    </form>
</div>

<!-- Footer -->
<div class="container-fluid  text-white pt-5 pb-5 pl-5 footer">
  <div class="row footer_row">

    <div class="col-md-3">
      <!-- <img src="image/logo.svg" class="card-img"> -->
      <h4 class="pb-3">FANCY NAME</h4>
      <div id="underline"></div>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elijb
         tempor incididunt ut labore et dolore magna aliqua. Ut en
         quis nostrud exDuis aute irure dolor in reprehenderit in.
         cillum dolore eu fugiat nulla pariatur.</p>
     </div>
     <div class="col-md-3 footer_col2">
       <h4 class="pb-3">PRODUCTS</h4>
       <div id="underline"></div>
       <a href="#">Tshirt Name Available now</a><br>
       <a href="#">Tshirt Name Available now</a><br>
       <a href="#">Tshirt Name Available now</a><br>
       <a href="#">Tshirt Name Available now</a><br>
    
     </div>
     <div class="col-md-3 footer_col3">
       <h4 class="pb-3">USEFUL LINK</h4>
       <div id="underline"></div>
        <a href="">Your Account</a><br>
        <a href="">Become an affiliate</><br>
        <a href="">Shipping Rates</a><br>
        <a href="">Help</a>
     </div> 
     <div class="col-md-3 footer_col4">
       <h4 class="pb-3">CONTACT</h4>
       <div id="underline"></div>
       <a href=""><i class="fa fa-home" id="footer_icon"></i>Sinamangal-9,Kathmandu</a><br>
       <a href=""><i class="fa fa-envelope" id="footer_icon"></i> parbatlama70@gmail.com</a><br>
       <a href=""><i class="fa fa-phone" id="footer_icon"></i> +977-9817890665</a><br>
       <a href=""><i class="fa fa-volume-control-phone" id="footer_icon"></i> +046-50-40</a>
     </div>
  </div><hr>
  <div class="row">
    <div class="col-md-6 copyright">
      <p>@ 2020 Copyright Parbhat Thangwal Lama</p>
    </div>
    <div class="col-md-6 footer_social_link">
      <img src="image/facebook.svg" height="30px" width="30px">
      <img src="image/whatsapp.svg" height="30px" width="30px">
      <img src="image/instagram.svg" height="30px" width="30px">
      <img src="image/twitter.svg" height="30px" width="30px">
      <img src="image/youtube.svg" height="30px" width="30px">
    </div>
  </div>
</div>
<!-- Footer-End -->
<!-- javascript CDN -->
<script src="https://use.fontawesome.com/0b71728948.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<!-- owl carousel cdn -->
<!-- <script src="jquery/jquery-3.5.2.min.js"></script> -->
<script src="owl.carousel.js"></script>
</body>
<script>
 $('.owl-carousel').owlCarousel({
    loop:false,
    margin:10,
    nav:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:4
        }
    }
})
  $(document).ready(function(){
   $('.item .carousel-caption h1').addClass('animated slideInLeft')  
   $('.item .carousel-caption p').addClass('animated zoomIn')  
   $('#carousel_footer .col-md-4').addClass('animated zoomIn')  
    window.addEventListener("scroll", function(){
      var scroll_pos = $(document).scrollTop()
      if(scroll_pos>500 && scroll_pos<600){
        $('#card_carousel .item .card').css('opacity','1')  
        $('.card').addClass('animated zoomIn')       
      } 
      if(scroll_pos>900 && scroll_pos<1000){
        $('#panel3_col1 h1').addClass('animated bounceInLeft') 
        $('#panel3_col1 p').addClass('animated zoomIn') 
        $('#panel3_col2').addClass('animated zoomIn') 
      }
            
    })
  })
  // Starrr plugin (https://github.com/dobtco/starrr)
var __slice = [].slice;

(function($, window) {
  var Starrr;

  Starrr = (function() {
    Starrr.prototype.defaults = {
      rating: void 0,
      numStars: 5,
      change: function(e, value) {}
    };

    function Starrr($el, options) {
      var i, _, _ref,
        _this = this;

      this.options = $.extend({}, this.defaults, options);
      this.$el = $el;
      _ref = this.defaults;
      for (i in _ref) {
        _ = _ref[i];
        if (this.$el.data(i) != null) {
          this.options[i] = this.$el.data(i);
        }
      }
      this.createStars();
      this.syncRating();
      this.$el.on('mouseover.starrr', 'span', function(e) {
        return _this.syncRating(_this.$el.find('span').index(e.currentTarget) + 1);
      });
      this.$el.on('mouseout.starrr', function() {
        return _this.syncRating();
      });
      this.$el.on('click.starrr', 'span', function(e) {
        return _this.setRating(_this.$el.find('span').index(e.currentTarget) + 1);
      });
      this.$el.on('starrr:change', this.options.change);
    }

    Starrr.prototype.createStars = function() {
      var _i, _ref, _results;

      _results = [];
      for (_i = 1, _ref = this.options.numStars; 1 <= _ref ? _i <= _ref : _i >= _ref; 1 <= _ref ? _i++ : _i--) {
        _results.push(this.$el.append("<span class='glyphicon .glyphicon-star-empty'></span>"));
      }
      return _results;
    };

    Starrr.prototype.setRating = function(rating) {
      if (this.options.rating === rating) {
        rating = void 0;
      }
      this.options.rating = rating;
      this.syncRating();
      return this.$el.trigger('starrr:change', rating);
    };

    Starrr.prototype.syncRating = function(rating) {
      var i, _i, _j, _ref;

      rating || (rating = this.options.rating);
      if (rating) {
        for (i = _i = 0, _ref = rating - 1; 0 <= _ref ? _i <= _ref : _i >= _ref; i = 0 <= _ref ? ++_i : --_i) {
          this.$el.find('span').eq(i).removeClass('glyphicon-star-empty').addClass('glyphicon-star');
        }
      }
      if (rating && rating < 5) {
        for (i = _j = rating; rating <= 4 ? _j <= 4 : _j >= 4; i = rating <= 4 ? ++_j : --_j) {
          this.$el.find('span').eq(i).removeClass('glyphicon-star').addClass('glyphicon-star-empty');
        }
      }
      if (!rating) {
        return this.$el.find('span').removeClass('glyphicon-star').addClass('glyphicon-star-empty');
      }
    };

    return Starrr;

  })();
  return $.fn.extend({
    starrr: function() {
      var args, option;

      option = arguments[0], args = 2 <= arguments.length ? __slice.call(arguments, 1) : [];
      return this.each(function() {
        var data;

        data = $(this).data('star-rating');
        if (!data) {
          $(this).data('star-rating', (data = new Starrr($(this), option)));
        }
        if (typeof option === 'string') {
          return data[option].apply(data, args);
        }
      });
    }
  });
})(window.jQuery, window);

$(function() {
  return $(".starrr").starrr();
});

$(document).ready(function() {
  $('.stars-existing').on('starrr:change', function(e, value){  
     // $(this).parent().find('.count-existing').html(value);
     var rate = value;
     var post_id = $(this).parent().find('.post_id').val();
     $.ajax({
        url:'insert.php',
        type:'post',
        data:{data:true,post_id,rate},
        success:function(data){
            // location.assign('index.php');
            // console.log(rate + " " + post_id)   
        }
     })
  })
});
  
</script>
</html>
