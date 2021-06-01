<?php
include('connect.php');
if(session_id()==''){

    session_start();
}
if(!isset($_SESSION['US']))  { 
header('location:Loginuser.php');
}
?>

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
#page-title-area {
	background-image:url('assetsmainlayout/img/car/imp.jpg');
	background-position: center center;
	background-size: cover;
	padding-top: 220px;
}
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
      ul{list-style-type:none;}
#page-title-area {
  background-image:url('assetsmainlayout/img/car/12.jpg');
  background-position: center center;
  background-size: cover;
  padding-top: 220px;
}

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


     } 

</style>
</head>

 
<body style="background-color:black;" >
<?php
include('header.php');
?>
<!--== Page Title Area Start ==-->
<section id="page-title-area" class="section-padding overlay">
    <div class="container">
        <div class="row">
            <!-- Page Title Start -->
            <div class="col-lg-12">
                <div class="section-title  text-center">
                    <h2>BOOKING</h2>
                    <span class="title-line"><i class="fa fa-car"></i></span>
                    <p>“TRAVEL IS THE ONLY THING YOU BUY THAT MAKES YOU RICHER.”</p>
                </div>
            </div>
            <!-- Page Title End -->
        </div>
    </div>
</section>
 <!--================Contact Area =================-->




<br>
 <center><h1 style=" color:#ffd000;text-align:center; " ><i>Book Your Ride & Enjoy Journey<i> </h1></center><br>
<div class="contact-page-wrao ">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 m-auto">
                <div class="contact-form">
                 <center>   <form class="cmxform form-horizontal style-form"  method="POST" action="bookinginsert.php" enctype="multipart/form-data">
                        <div class="row">
                             <div class="col-lg-6 col-md-6" >
                                <div class="name-input">
                                   <input  type="HIDDEN" placeholder="No Of Seats" name="s2" id="a" minlength="1" value="<?php echo $_GET['p']?>" required >
                                    <input  type="HIDDEN" placeholder="No Of Seats" name="id" id="a" minlength="1" value="<?php echo $_GET['id']?>" required >
                                    <input  type="hidden" placeholder="No Of Seats" name="av"  minlength="1" value="<?php echo $_GET['av']?>" required >
                                    <input  type="text" placeholder="No Of Seats" id="b" name="s1" minlength="1" required>
                                  
                                </div>
                            </div>
                             <div class="col-lg-6 col-md-6" >
                                <div class="name-input">
                                    <input  type="text" placeholder="Total Price" id="c" name="tp" minlength="2" required>
                                    </div>
                                
                                </div>
                            </div>


                        
                          <br>
                       
                         

                        <div class="input-submit">
                            <button type="submit" name="submit">Book</button>
                        </div>
                        <br><br>
                    </form></center>
                </div>
            </div>
        </div>
    </div>
</div>
<!--== Contact Page Area End ==-->


<!--================Contact Area =================-->
    <?php
 include('footer.php');
 ?>

<!--================Contact Area =================-->



<!--================Contact Success and Error message Area =================-->
<!--================End Contact Success and Error message Area =================-->




<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script> 

$(document).ready(function(){
    $("#b").change(function(){
        var aa = parseInt($('#a').val(), 10);
    var bb = parseInt($('#b').val(), 10);
    var mul=aa*bb;
 $("#c").val(mul);
        });
    });


</script> 




<script src="assetsmainlayout/js/jquery-3.2.1.min.js"></script>
<script src="assetsmainlayout/js/popper.js"></script>
<script src="assetsmainlayout/js/bootstrap.min.js"></script>
<script src="assetsmainlayout/js/stellar.js"></script>
<script src="assetsmainlayout/vendors/lightbox/simpleLightbox.min.js"></script>
<script src="assetsmainlayout/vendors/nice-select/js/jquery.nice-select.min.js"></script>
<script src="assetsmainlayout/vendors/isotope/imagesloaded.pkgd.min.js"></script>
<script src="assetsmainlayout/vendors/isotope/isotope-min.js"></script>
<script src="assetsmainlayout/vendors/owl-carousel/owl.carousel.min.js"></script>
<script src="assetsmainlayout/js/jquery.ajaxchimp.min.js"></script>
<script src="assetsmainlayout/js/mail-script.js"></script>
<script src="assetsmainlayout/vendors/counter-up/jquery.waypoints.min.js"></script>
<script src="assetsmainlayout/vendors/counter-up/jquery.counterup.js"></script>
<script src="assetsmainlayout/vendors/popup/jquery.magnific-popup.min.js"></script>
<script src="assetsmainlayout/vendors/swiper/js/swiper.min.js"></script>
<script src="assetsmainlayout/vendors/scroll/jquery.mCustomScrollbar.js"></script>
<!-- contact js -->
<script src="assetsmainlayout/js/jquery.form.js"></script>
<script src="assetsmainlayout/js/jquery.validate.min.js"></script>
<script src="assetsmainlayout/js/contact.js"></script>
<!--gmaps Js-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
<script src="assetsmainlayout/js/gmaps.min.js"></script>
<script src="assetsmainlayout/js/theme.js"></script>
</body>
</html>
