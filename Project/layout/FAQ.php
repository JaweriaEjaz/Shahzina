<?php
include('connect.php');
if(session_id()==''){

    session_start();
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
    <link rel="stylesheet" href=assetsmainlayout/"vendors/lightbox/simpleLightbox.css">
    <link rel="stylesheet" href="assetsmainlayout/vendors/nice-select/css/nice-select.css">
    <link rel="stylesheet" href="assetsmainlayout/vendors/animate-css/animate.css">
    <!-- main css -->
    <link rel="stylesheet" href="assetsmainlayout/css/style.css">
    <link rel="stylesheet" href="assetsmainlayout/css/responsive.css">




<style>
#page-title-area {
	background-image:url('assetsmainlayout/img/car/12.jpg');
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

h3{ color:white; }

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
 ul{list-style-type:none;}
</style>

</head>

 
<body style="background-color:black;">
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
                    <h2>FAQ's</h2>
                    <span class="title-line"><i class="fa fa-car"></i></span>
                    <p>“TRAVEL IS THE ONLY THING YOU BUY THAT MAKES YOU RICHER.”</p>
                </div>
            </div>
            <!-- Page Title End -->
        </div>
    </div>
</section>
<!--== Page Title Area End ==-->
<!--== FAQ Area Start ==-->
<section id="faq-page-area" >
    <div class="container">
        <div class="row">
            <!-- FAQ Content Start -->
            <div class="col-lg-8">
                <div class="faq-details-content">
                    <!-- Single FAQ Subject  Start -->
                    <div class="single-faq-sub">
                        <h3>General</h3>
                        <div class="single-faq-sub-content">
                            <div id="accordion">
                                <!-- Single FAQ Start -->
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                <span>What is a reservation number?</span>
                                                <i class="fa fa-angle-down"></i>
                                                <i class="fa fa-angle-up"></i>
                                            </button>
                                        </h5>
                                    </div>

                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                        <div class="card-body">
                                            Your reservation number is an unique number that recognize its reservation. Each reservation has its own reservation numbers.
                                        </div>
                                    </div>
                                </div>
                                <!-- Single FAQ End -->
                                <!-- Single FAQ Start -->
                                <div class="card">
                                    <div class="card-header" id="headingTwo">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                <span>Can I make a reservation by email?</span>
                                                <i class="fa fa-angle-down"></i>
                                                <i class="fa fa-angle-up"></i>
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                        <div class="card-body">
                                            We do not accept reservations by e-mail. Please make a reservation online or call the operating bus company directly for reservations.
                                        </div>
                                    </div>
                                </div>
                                <!-- Single FAQ Start -->
                                <!-- Single FAQ End -->
                                <div class="card">
                                    <div class="card-header" id="headingThree">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                <span>How far in advance can I make a reservation?</span>
                                                <i class="fa fa-angle-down"></i>
                                                <i class="fa fa-angle-up"></i>
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                        <div class="card-body">
                                            The reservation sales period differs from bus routes, it varies from 1-6 months prior to your travel date. You can check out the sales period by referring to the "Bookable Days of Operation” listed above the schedule of each bus service.
                                        </div>
                                    </div>
                                </div>
                                <!-- Single FAQ End -->
                            </div>
                        </div>
                    </div>
                    <!-- Single FAQ Subject End -->
                    <!-- Single FAQ Subject  Start -->
                    <div class="single-faq-sub">
                        <h3>On The Bus</h3>
                        <div class="single-faq-sub-content">
                            <div id="accordion_2">
                                <!-- Single FAQ Start -->
                                <div class="card">
                                    <div class="card-header" id="heading4">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                                <span>Can I bring any animals into the bus?</span>
                                                <i class="fa fa-angle-down"></i>
                                                <i class="fa fa-angle-up"></i>
                                            </button>
                                        </h5>
                                    </div>

                                    <div id="collapse4" class="collapse" aria-labelledby="heading4" data-parent="#accordion_2">
                                        <div class="card-body">
                                            Any living creatures except for guide dogs is prohibited to bring on board.
                                        </div>
                                    </div>
                                </div>
                                <!-- Single FAQ End -->
                                <!-- Single FAQ Start -->
                                <div class="card">
                                    <div class="card-header" id="headingFour">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                <span>Can I drink alcohol beverage on the bus?</span>
                                                <i class="fa fa-angle-down"></i>
                                                <i class="fa fa-angle-up"></i>
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion_2">
                                        <div class="card-body">
                                            We are sorry but consumption of alcohol beverage is prohibited on the bus.
                                        </div>
                                    </div>
                                </div>
                                <!-- Single FAQ Start -->
                                <!-- Single FAQ End -->
                                <div class="card">
                                    <div class="card-header" id="headingFive">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                                <span>Can I get a refund if I cancel my online booking?</span>
                                                <i class="fa fa-angle-down"></i>
                                                <i class="fa fa-angle-up"></i>
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion_2">
                                        <div class="card-body">
                                            You can make cancellations on our website via “Manage my Booking” before the cancellation deadline. Some tickets cannot be canceled online; if you get such a message, please contact designated customer service prior to your scheduled departure time. If you don't show up for a service and fail to cancel your reservation prior to scheduled departure, you are considered a no-show and all money associated with the reservation is forfeited.
                                        </div>
                                    </div>
                                </div>
                                <!-- Single FAQ End -->
                                <!-- Single FAQ End -->
                                <div class="card">
                                    <div class="card-header" id="headingSix">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                                <span>What is the luggage policy for the bus I am going to take?</span>
                                                <i class="fa fa-angle-down"></i>
                                                <i class="fa fa-angle-up"></i>
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion_2">
                                        <div class="card-body">
                                            Luggage policy varies depending on the bus companies. Please check the luggage allowance page that each operating bus company prepares.
                                        </div>
                                    </div>
                                </div>
                                <!-- Single FAQ End -->
                            </div>
                        </div>
                    </div>
                    <!-- Single FAQ Subject End -->
                </div>
            </div>
            <!-- FAQ Content End -->
            <!-- Sidebar Area Start -->
            <div class="col-lg-4">
<br><br>
                <div class="sidebar-content-wrap m-t-50">
                    <!-- Single Sidebar Start -->
                    <div class="single-sidebar">
                        <h3>For More Informations</h3>

                        <div class="sidebar-body">

                            <?php
include('connect.php');

$qu="SELECT * FROM about";
$res=mysqli_query($con,$qu);

?>
                            <p style="color: white;"><i class="fa fa-mobile"></i><?php while($data=mysqli_fetch_assoc($res)) echo $data['ContactNo']; ?></p>
                            <p style="color: white;"><i class="fa fa-clock-o"></i> Mon - Sat 8.00 - 18.00</p>
                        </div>
                    </div>
                    <!-- Single Sidebar End -->
                    <!-- Single Sidebar Start -->
                    <!-- Single Sidebar End -->
                    <!-- Single Sidebar Start -->
                    <div class="single-sidebar">
                        <h3>Connect with Us</h3>

                        <div class="sidebar-body">
                            <div  class="social-icons text-center">
                                <a  href="https://en-gb.facebook.com/login/" target="_blank"><i style="background-color:#ffd000" class="fa fa-facebook"></i></a>
                                <a href="https://twitter.com/login?lang=en" target="_blank"><i style="background-color:#ffd000" class="fa fa-twitter"></i></a>
                               <a href="https://www.linkedin.com/login" target="_blank"><i style="background-color:#ffd000" class="fa fa-linkedin"></i></a>
                                <a href="https://dribbble.com/session/new" target="_blank"><i style="background-color:#ffd000" class="fa fa-dribbble"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Single Sidebar End -->
                </div>
            </div>
            <!-- Sidebar Area End -->
        </div>
<center><h1 style=" color:white;text-align:center; " ><i>If Query Doesn't Solve Feel Free To Contact..<i> </h1></center><br>
    </div>
</section>

 <?php
 include('footer.php');
 ?>
<!--== FAQ Area End ==-->
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


