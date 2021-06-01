
<?php session_start();?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="img/favicon.png" type="image/png">
<title>SRC _ Traveling Agencies</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assetsmainlayout/css/bootstrap.css">
    <link rel="stylesheet" href="assetsmainlayout/vendors/linericon/style.css">
    <link rel="stylesheet" href="assetsmainlayout/css/font-awesome.min.css">
    <link rel="stylesheet" href="assetsmainlayout/vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="assetsmainlayout/vendors/lightbox/simpleLightbox.css">
    <link rel="stylesheet" href="assetsmainlayout/vendors/nice-select/css/nice-select.css">
    <link rel="stylesheet" href="assetsmainlayout/vendors/animate-css/animate.css">
    <!-- main css -->
    <link rel="stylesheet" href="assetsmainlayout/css/style.css">
    <link rel="stylesheet" href="assetsmainlayout/css/responsive.css">



<style>

  ul{list-style-type:none;}
 .b{ 
        background-color:black;
     color:  #ffd000;
      border: 2px solid #ffd000;

      text-align: center;
     text-decoration: none;
     display: inline-block;
     font-size: 16px;
     width:160px;
        height:40px;
      }
       .b:hover{

      background-color: #ffd000;
      border-color: black;
     color: black;

     }

h3{ color:white; }

.footer-widget-area
{background-color:#ffd000;
  
 
 }
#hello{ 
        background-color:black;
     color:  #ffd000;
      border: 2px dashed #ffd000;
padding: 4.6px 2px 2px 2px;
      text-align:center;
     text-decoration: none;
     display: inline-block;
     font-size:18px;
     width:160px;
        height:40px;
  cursor: pointer;
  outline: none;
  
  border-radius: 7px;
  box-shadow: 5px 10px 18px #888888:
  text-decoration: none; }
#hello:hover{

      background-color: #ffd000;
      border-color: black;
     color: black;

     } 

}



</style>

</head>

 
<body  style="background-image:url('assetsmainlayout/img/car/12.jpg'); background-position: center; /* Center the image */
  background-repeat: no-repeat; /* Do not repeat the image */
  background-size: cover;">

<?php
include('header.php');
?>
<br>
<br>
<br>
    <!--== Service Page Content Start ==-->

            <!--== Login Page Content Start ==-->
    <section id="lgoin-page-wrap" class="section-padding">
        <div class="container">
            <div class="row">
 <div class="col-lg-5">
</div>
                <div class="col-lg-5 col-md-8 m-auto">

                	<div class="login-page-content"  style="background-color:white;" >
                		<div class="login-form">
                			<h3  style=" color:white">Log In</h3>
							<form  Method="POST" action="">
								
								<div class="username">
									<input style="background-color:white;" name="un" type="text" placeholder="User Name">
								</div>
								<div class="username">
								<input style="background-color:white;" name="pas" type="password" placeholder="Password">
								</div>
								
								<div class="log-btn">
									<button style="background-color:black; color:white" name="btn1" type="submit"><i class="fa fa-check-square"></i> Log In</button>
								</div>
							</form>
                		</div>
                		
                		
                		<div class="create-ac">
                			<p>Don't have an account? <a href="register.php" style=" color:#F39C12; font-Size:18px;">Sign Up</a></p>
                		</div>
                		<div class="login-menu">
                			<a href="about.php">About</a>
                			<span>|</span>
                			<a href="contact.php">Contact</a>
                		</div>
                	</div>
                </div>
        	</div>
        </div>
    </section>

<?php
include('footer.php');
?>
    <!--== Login Page Content End ==-->
<?php
include ('connect.php');

if(isset($_POST['btn1']))
{
$un=$_POST['un'];
$pas=$_POST['pas'];
$que="Select * from user where UserName='$un'";
$res=mysqli_query($con,$que);
$data=mysqli_fetch_assoc($res);
$ps=$data['Password'];
if( $pas==$ps)
{
$_SESSION['US']= $data['UserName'];
$_SESSION['UI']= $data['Id'];
echo "<script>  window.location.href='index.php'</script>";
}
else{
echo "<script> alert('Logged in failed'); </script>";
}


}?>
    <!--== Service Page Content End ==-->
<!--=======================Javascript============================-->
<!--=== Jquery Min Js ===-->
<script src="assetsmainlayout/js/jquery-3.2.1.min.js"></script>
<!--=== Jquery Migrate Min Js ===-->
<script src="assetsmainlayout/js/jquery-migrate.min.js"></script>
<!--=== Popper Min Js ===-->
<script src="assetsmainlayout/js/popper.min.js"></script>
<!--=== Bootstrap Min Js ===-->
<script src="assetsmainlayout/js/bootstrap.min.js"></script>
<!--=== Gijgo Min Js ===-->
<script src="assetsmainlayout/js/plugins/gijgo.js"></script>
<!--=== Vegas Min Js ===-->
<script src="assetsmainlayout/js/plugins/vegas.min.js"></script>
<!--=== Isotope Min Js ===-->
<script src="assetsmainlayout/js/plugins/isotope.min.js"></script>
<!--=== Owl Caousel Min Js ===-->
<script src="assetsmainlayout/js/plugins/owl.carousel.min.js"></script>
<!--=== Waypoint Min Js ===-->
<script src="~assetsmainlayout/js/plugins/waypoints.min.js"></script>
<!--=== CounTotop Min Js ===-->
<script src="assetsmainlayout/js/plugins/counterup.min.js"></script>
<!--=== YtPlayer Min Js ===-->
<script src="assetsmainlayout/js/plugins/mb.YTPlayer.js"></script>
<!--=== Magnific Popup Min Js ===-->
<script src="assetsmainlayout/js/plugins/magnific-popup.min.js"></script>
<!--=== Slicknav Min Js ===-->
<script src="assetsmainlayout/js/plugins/slicknav.min.js"></script>

<!--=== Mian Js ===-->
<script src="assetsmainlayout/js/main.js"></script>
</body>
</html>


