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
    <link rel="stylesheet" href="assetsmainlayout/vendors/lightbox/simpleLightbox.css">
    <link rel="stylesheet" href="assetsmainlayout/vendors/nice-select/css/nice-select.css">
    <link rel="stylesheet" href="assetsmainlayout/vendors/animate-css/animate.css">
    <!-- main css -->
    <link rel="stylesheet" href="assetsmainlayout/css/style.css">
    <link rel="stylesheet" href="assetsmainlayout/css/responsive.css">

 <style>

.footer-widget-area
{background-color:#ffd000;
    
 
 }
 
       ul{list-style-type:none;}

        /*== Mobile Apps CSS Start ==*/

      #mobile-app-area {
      padding: 120px 0;
      position: relative;
      }

      #mobile-app-area #wrapper_mobileapp-video-bg .YTPOverlay {
     background-color: rgba(0, 0, 0, 0.8);
     }

     #mobile-app-area::after{
            background-image: url("assetsmainlayout/img/mobile-app.png");
         background-position: center center;
           background-repeat: no-repeat;
         background-size: contain;
           content: "";
           height: 90%;
            position: absolute;
           right: 0;
           top: 50%;
          -webkit-transform: translateY(-50%);
           transform: translateY(-50%);
            width: 50%;
        }
     .mobile-app-content h2 {
     color: #ffd000;
     font-size: 70px;}
     .mobile-app-content {
      color: #fff;
     font-size: 16px;
      font-weight: 600;
       }

       .mobile-app-content p {
     margin: 5px 0 20px
      }

      .app-btns a {
      border: 2px solid #ffd000;
      border-radius: 50px;
      color: #fff;
        display: inline-block;
     margin-right: 40px;
     padding: 10px 20px;
     -webkit-transition: all 0.4s ease 0s;
     transition: all 0.4s ease 0s;
      }
  
       .app-btns a i {
     font-size: 20px;
     margin-right: 5px;
      }

      .app-btns a:hover {
       background-color: #ffd000;
      }

        #mobileapp-video-bg {
     position: relative;
       }

        /*== Mobile Apps CSS End ==*/


        .slider-bg-1 {
     background-image: url("assetsmainlayout/img/car/1.jpg");
        }

      .slider-bg-2 {
     background-image: url("assetsmainlayout/img/car/121.jpg");
     }

     .slider-bg-3 {
     background-image: url("assetsmainlayout/img/car/imp2.jpg");
     }
     .abc {
     background-image: url("assetsmainlayout/img/abc.jpg");


     }    
      .booka-car-content {
height: 250px;

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
      ::placeholder {
     color:  #ffd000;
     opacity: 1;  }

      :-ms-input-placeholder { /* Internet Explorer 10-11 */
      color:  #ffd000;
        }

        ::-ms-input-placeholder 
        { /* Microsoft Edge */
        color:  #ffd000;
        }    /*== What Do Area CSS ==*/

        .we-do-bg-1          {
        background-image: url(assetsmainlayout/img/we-do/service-jh-9.jpg);
        }

        .we-do-bg-2 
        {
        background-image: url(assetsmainlayout/img/we-do/service-jh-11.jpg);
        }
     .we-do-bg-3 
      {
      background-image: url(assetsmainlayout/img/we-do/service-jh-10.jpg);
     }
     .single-we-do 
      {
       background-position: center center;
        background-size: cover;
       height: 300px;
     overflow: hidden;
       position: relative;
       -webkit-transition: 0.4s;
        transition: 0.4s;
       }
       .single-we-do:hover .we-do-content {
        bottom: 0;
        }
      .we-do-content 
                {
                  background-color: rgba(0, 0, 0, 0.7);
                 bottom: -100%;
                 color: #ffd000;
                 height: 100%;
                 left: 0;
                 position: absolute;
                 text-align: center;
                 -webkit-transition: all 0.4s ease 0s;
                 transition: all 0.4s ease 0s;
                 width: 100%;
                 }

                .we-do-content h3 {
                    color: #ffd000;
                    font-size: 22px;
                }

                .we-do-content p 
                {
                    margin: 15px 0 20px;
                }

                .we-do-content a 
                {
                    background-color: #ffd000;
                    border-radius: 2px;
                    color: #000;
                    display: inline-block;
                    font-size: 13px;
                    font-weight: 600;
                    padding: 8px 15px;
                }
     ul{list-style-type:none;}
      /*== What Do Area CSS ==*/


.panel-table .panel-body{
  padding:0;
background-color:black;
color:white;
}

.panel-table .panel-body .table-bordered{
  border-style: none;
  margin:0;style="background-color:black;color:white;
}

.panel-table .panel-body .table-bordered > thead > tr > th:first-of-type {
    text-align:center;
    width: 100px;style="background-color:black;color:white;
}

.panel-table .panel-body .table-bordered > thead > tr > th:last-of-type,
.panel-table .panel-body .table-bordered > tbody > tr > td:last-of-type {
  border-right: 0px;style="background-color:black;color:white;
}

.panel-table .panel-body .table-bordered > thead > tr > th:first-of-type,
.panel-table .panel-body .table-bordered > tbody > tr > td:first-of-type {
  border-left: 0px; style="background-color:black;color:white;
}

.panel-table .panel-body .table-bordered > tbody > tr:first-of-type > td{
  border-bottom: 0px;style="background-color:black;color:white; 
}

.panel-table .panel-body .table-bordered > thead > tr:first-of-type > th{
  border-top: 0px; style="background-color:black;color:white;
}

.panel-table .panel-footer .pagination{
  margin:0;  style="background-color:black;color:white;
}

/*
used to vertically center elements, may need modification if you're not using default sizes.
*/
.panel-table .panel-footer .col{
 line-height: 34px;
 height: 34px;
}

.panel-table .panel-heading .col h3{
 line-height: 30px;
 height: 30px;
}

.panel-table .panel-body .table-bordered > tbody > tr > td{
  line-height: 34px;
}







 </style>
</head>
<body class="loader-active"  style=" background-color: black;">
 <div class="preloader">
        <div class="preloader-spinner">
            <div class="loader-content">
                <img src="assetsmainlayout/img/preloader.gif" alt="JSOFT">
            </div>
        </div>
    </div>

    <?php
 include('header.php');
 ?>


    <section id="home-slider-area">
        <div class="home-slider-item slider-bg-1 ">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="slideshowcontent" >
                            <h1>BOOK A Ride TODAY!</h1>
                            <p> 15% DISCOUNT  <br> FOR OUR RETURNING CUSTOMERS</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="home-slider-item slider-bg-2 ">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="slideshowcontent">
                            <h1>SAVE YOUR MONEY</h1>
                            <p> DEALS ARE AVAILABLE <br> FOR CHILDREN AND SENIOR CITIZENS</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="home-slider-item slider-bg-3 ">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="slideshowcontent">
                            <h1>ENJOY YOUR JOURNEY</h1>
                            <p>ENJOY FREE MEAL<br> AND FREE WIFI</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
<section>
<div id="book-a-car " class="overlay">
        <div class="container" style="background-color: black;">
            <div class="row" style="background-color: black;">
            <div class="col-lg-12" style="background-color: black;">
                    <div class="booka-car-content " style=" background-color:rgba(0,0,0,0.5);">
                      <center>  <form  style=" opacity: 1;">
                           <div style="margin-top: -80px;">

                           <?php
                              if(!isset($_SESSION['US']))  {  ?> 

                            <a  href="Loginuser.php">	<img type="image" src="assetsmainlayout/img/bookgif.gif"></a>

                              <?php } else { ?>
                                <a  href="bus.php">	<img type="image" src="assetsmainlayout/img/bookgif.gif"></a>

                          <?php    } ?>
                              </div>
                        </form></center>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="about-area" class="section-padding">
     <div class="container">
            <div class="row">
                                         <!-- About Content Start -->
                                         <div class="col-lg-12 " >
                                   <div class="about-content booka-car-content abc">
                                   <div class="section-title  text-center ">
                                    <h2  style=" color:#ffd000;">About us</h2>
                                    <span class="title-line"><i class="fa fa-bus"></i></span>
                                    <p  style=" color:#ffd000; test-align:center;"> “We WANT TO MAKE MEMORIES ALL OVER THE COUNTRY”</p>
                                </div>
                                <?php


$qu="SELECT * FROM about ";
$res=mysqli_query($con,$qu);

?>
<p style="color:#ffd000;font: 25; text-align:center;" ><?php while($data=mysqli_fetch_assoc($res)) echo $data['About']; ?>
                                              
                                                </p>
            </div></div></div></div></section>
<section> 
        <div class="about-feature-area">
      <div class="row">
                    <!-- Single Fretutes Start -->



                    <div class="col-lg-4">
                        <div class="about-feature-item" style=" color:white;">
                            <i class="fa fa-clock-o"></i>
                            <h3>PUNCTUALITY</h3>
                            <p>Time is the most precious asset at this age & we care about it.</p>
                        </div> 
                   </div>
                    <!-- Single Fretutes End -->

                    <!-- Single Fretutes Start -->
                    <div class="col-lg-4">
                              <div class="about-feature-item" style=" color:white;">
                              <i class="fa fa-life-ring"></i>
                              <h3>Safety & Security</h3>
                               <p>SRC Travel assures its passengers a safe & secure journey.</p>
                              </div>
                    </div>
                    <!-- Single Fretutes End -->

                    <!-- Single Fretutes Start -->
                    <div class="col-lg-4">
                        <div class="about-feature-item" style=" color:white;">
                             <i class="fa fa-cog"></i>
                        <h3>Trained Crew</h3>
                        <p>Quality service can be provided by quality conscious people.</p>       </div>
                    </div>
                    <!-- Single Fretutes End -->
     </div>
       </div>
     <!-- About Fretutes End --> 
   </section>
 



 <section> 
        <div class="about-feature-area">
      <div class="row">
     <div class="col-lg-12">
                <div class="  text-center  ">
                    <h2 style=" color:#ffd000;" >Price List</h2>
                    <span class="title-line" style=" color:#ffd000;"><i style=" color:#ffd000;" class="fa fa-bus"></i></span>
                    

                </div>
            </div>
<?php

include('price.php');

?>


                
                    <!-- Single Fretutes End -->
     </div>
       </div>
     <!-- About Fretutes End --> 
   </section>
  <section id="service-area" class="section-padding" >
       <div class="container">
        <div class="row">
            <!-- Section Title Start -->
            <div class="col-lg-12"  >
                <div class="section-title  text-center">
                    <h2 style=" color:#ffd000;">Our Services</h2>
                    <span class="title-line"><i class="fa fa-bus"></i></span>
                    <p style=" color:#ffd000;"> “WE WANT TO MAKE MEMORIES ALL OVER THE COUNTRY”</p>
                </div>
            </div>
            <!-- Section Title End -->
        </div>
        <!-- Service Content Start -->
        <div class="row"   >
            <div class="col-lg-11 m-auto text-center">
                <div class="service-container-wrap">

                    <!-- Single Service Start -->
                    <div class="service-item" style=" background-color: white;">
                        <i class="fa fa-coffee"></i>
                        <h3>Refreshment</h3>
                        <p>Enjoy your journey with healthy & hygenic meal .</p>
                    </div>
                    <!-- Single Service End -->
                    <!-- Single Service Start -->
                    <div class="service-item" style=" background-color: white;">
                        <i class="fa fa-wifi"></i>
                        <h3>Free Wifi</h3>
                        <p>We provide quality service of  FREE WIFI  .</p>
                    </div>
                    <!-- Single Service End -->
                    <!-- Single Service Start -->
                    <div class="service-item" style=" background-color: white;">
                        <i class="fa fa-briefcase"></i>
                       
                        <h3>Luggage </h3>
                        <p>SRC Travel directly connect driver to the passenger.</p>
                    </div>
                    <!-- Single Service End -->
                </div>
            </div>
        </div>
        <!-- Service Content End -->
        </div>
  </section>
  <!--== Services Area End ==-->
    <!--== Mobile App Area Start ==-->
    <div id="mobileapp-video-bg"></div>
        <section id="mobile-app-area">
          <div class="container">
             <div class="row">
                <div class="col-lg-6">
                    <div class="mobile-app-content">
                        <h2>The Best travel Agency in Country</h2>
                        <p>Easy &amp; Fast - Book a car in 60 seconds</p>
                       
                    </div>
                </div>
              </div>
          </div>
        </section>
    </div>

 <!--==what do Area End ==-->
 <section id="what-do-area" class="section-padding">
           <div class="container">
          <div class="row">
            <!-- Section Title Start -->
            <div class="col-lg-12">
                <div class="section-title  text-center  ">
                    <h2 style=" color:#ffd000;" >WHAT WE DO</h2>
                    <span class="title-line"><i class="fa fa-bus"></i></span>
                    <p style=" color:#ffd000;">We Provide Ease To Our Customers</p>

                </div>
            </div>
            <!-- Section Title End -->
           </div>

           <div class="row">
            <!-- Single We Do Start -->
            <div class="col-lg-4 col-md-4">
                <div class="single-we-do we-do-bg-1">
                    <div class="we-do-content" style="  text-align: center;">
                        <div class="">
                            <div class="">
              <center>                   <h3  style="  text-align: center;">Customer Care</h3>
                                <p  style="  text-align: center;">We are here 24/7 for customers to learn about their needs</p>
              </center>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single We Do End -->
            <!-- Single We Do Start -->
            <div class="col-lg-4 col-md-4">
                <div class="single-we-do we-do-bg-2">
                    <div class="we-do-content">
                        <div class="display-table">
                            <div class="display-table-cell">
                                <center><h3  style="  text-align: center;"> Driving And Maintenance</h3></center>
                                <center>      <p  style="  text-align: center;">Conduct driving and maintenance training for better ride experience</p>
                                </center>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single We Do End -->
            <!-- Single We Do Start -->
            <div class="col-lg-4 col-md-4">
                <div class="single-we-do we-do-bg-3">
                    <div class="we-do-content">
                        <div class="display-table">
                            <div class="display-table-cell">
                             <center>    <h3  style="  text-align: center;" >Inspection Of Vehicles</h3>
                              <center><p  style="  text-align: center;"> Carry out special inspection of vehicles, and spare parts. </p>
                              </center>  
                             </center>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           <!-- Single We Do End -->
        </div>
   </section>
    <!--== What We Do Area End ==-->





<?php
include('footer.php');
?>










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