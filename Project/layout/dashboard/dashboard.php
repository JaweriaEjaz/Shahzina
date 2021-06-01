<?php session_start();?>
<?php
if ($_SESSION['admin']==null) {
    header('location:signin.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <title>DashBoard - SRC Traveling Agency</title>

    <!-- Favicons -->
    <link href="./assetsdashboard/img/favicon.png" rel="icon">
    <link href="./assetsdashboard/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Bootstrap core CSS -->
    <link href="./assetsdashboard/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!--external css-->
    <link href="./assetsdashboard/lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="./assetsdashboard/css/style.css" rel="stylesheet">
    <link href="./assetsdashboard/css/style-responsive.css" rel="stylesheet">
  <link href="./assetsdashboard/style.css" rel="stylesheet">
    <!-- =======================================================
      Template Name: Dashio
      Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
      Author: TemplateMag.com
      License: https://templatemag.com/license/
    ======================================================= -->

    <style>
        body{
            color: black;
        }


a, a:hover, a:focus {
    text-decoration: none;
    outline: none;
}
::selection {

    background: #fad102;
    color: #fff;
}
::-moz-selection {
    background: #fad102;
    color: #fff;
}

#container {
    width: 100%;
    height: 100%;
}

/* Bootstrap Modifications */
.modal-header {
    background: #fad102;
}

.modal-title {
    color: white;
}

.btn-round {
    border-radius: 20px;
    -webkit-border-radius: 20px;
}

.accordion-heading .accordion-toggle {
    display: block;
    cursor: pointer;
    border-top: 1px solid #F5F5F5;
    padding: 5px 0px;
    line-height: 28.75px;
    text-transform: uppercase;
    color: #1a1a1a;
    background-color: #ffffff;
    outline: none !important;
    text-decoration: none;
}



/*Theme Backgrounds*/

.bg-theme {
    background-color: #fad102;
}

.bg-theme02 {
    background-color: #ac92ec;
}

.bg-theme03 {
  background-color: #48cfad;
}

.bg-theme04 {
  background-color: #ed5565;
}
/*Theme Buttons*/

.btn-theme {
  color: #fff;
  background-color: #fad102;
  border-color: #fad102;
}
.btn-theme:hover,
.btn-theme:focus,
.btn-theme:active,
.btn-theme.active,
.open .dropdown-toggle.btn-theme {
  color: #fff;
  background-color:#fad102 ;
 
}

.btn-theme02 {
  color: #fff;
  background-color: #fad102;
  border-color: #fad102;
}
.btn-theme:hover,
.btn-theme:focus,
.btn-theme:active,
.btn-theme.active,
.open .dropdown-toggle.btn-theme {
  color: #fff;
  background-color:#fad102 ;
 
}

.btn-theme03 {
   color: #fff;
  background-color: #fad102;
  border-color: #fad102;
}
.btn-theme:hover,
.btn-theme:focus,
.btn-theme:active,
.btn-theme.active,
.open .dropdown-toggle.btn-theme {
  color: #fff;
  background-color:#fad102 ;
 
}

.btn-theme04 {
  color: #fff;
  background-color: #fad102;
  border-color: #fad102;
}
.btn-theme:hover,
.btn-theme:focus,
.btn-theme:active,
.btn-theme.active,
.open .dropdown-toggle.btn-theme {
  color: #fff;
  background-color:#fad102 ;
 
}
.btn-clear-g {
    color: #fad102;
    background: transparent;
    border-color: #fad102;
}

.btn-clear-g:hover {
    color: white;
}

hr {
  margin-top: 20px;
  margin-bottom: 20px;
  border: 0;
  border-top: 1px solid #797979;
}


.label-theme {
    background-color: #fad102;
}

.bg-theme {
    background-color: #fad102;
}

ul.top-menu > li > .logout {
    
    font-size: 12px;
    border-radius: 4px;
    -webkit-border-radius: 4px;
    border: 1px solid #64c3c2 !important;
    padding: 5px 15px;
    margin-right: 15px;
    background: #fad102;
    margin-top: 15px;
}

 /*sidebar navigation*/
ul.sidebar-menu li ul.sub li a:hover {
    color: white;
    background: transparent;
}

ul.sidebar-menu li ul.sub li.active a {
    color: #fad102;
    -webkit-transition: all 0.3s ease;
    -moz-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
    -ms-transition: all 0.3s ease;
    transition: all 0.3s ease;
    display: block;
}

ul.sidebar-menu li a{
    color: #aeb2b7;
    text-decoration: none;
    display: block;
    padding: 15px 0 15px 10px;
    font-size: 12px;
    outline: none;
    -webkit-transition: all 0.3s ease;
    -moz-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
    -ms-transition: all 0.3s ease;
    transition: all 0.3s ease;
}

ul.sidebar-menu li a.active, ul.sidebar-menu li a:hover, ul.sidebar-menu li a:focus {
    background: #fad102;
    color: #fff;
    display: block;

    -webkit-transition: all 0.3s ease;
    -moz-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
    -ms-transition: all 0.3s ease;
    transition: all 0.3s ease;
}


    </style>
</head>
<body style="background-color:#feffed;">
   








<section id="container">
          <header class="header black-bg">
            <div class="sidebar-toggle-box">
                <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
            </div>
            <!--logo start-->
             <a href="index.html" class="logo"><b>BUS<span style="color:#fad102"> RESERVATION</span></b></a> 
            <!--logo end-->
            
            <div class="top-menu" >
                <ul class="nav pull-right  top-menu" >

    <li ><a class="logout" href="enquiryread.php"  style="background-color:black; color:#fad102;">Enquiries</a></li>
      <li ><a class="logout " href="contactread.php"  style="background-color:black; color:#fad102;">Messeges</a></li>
<li ><a class="logout " href="aboutread.php"  style="background-color:black; color:#fad102;">Layout Edit</a></li>
 <li ><a class="logout " href="Signout.php" style="background-color:black; color:#fad102">Logout</a></li>
                </ul>
                
            </div>
        </header>


  <aside >
            <div id="sidebar" style= "color:#fad102" class="nav-collapse " > 
                <!-- sidebar menu start-->
               <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered">
          
          <?php echo "<a href='adminedit.php?id=".$_SESSION['admin2']."'/>";?> 
        
          <img src="<?php echo $_SESSION['admin1'];?>" class="img-circle" width="80"></a></p>
          <h5 class="centered"><?php echo $_SESSION['admin'];?></h5>
          <ul class="mt">
          </ul>




                    <li class="sub-menu" style="color:white">
                        <a href="javascript:;">
                            <i style="color:#ffd000;"style="color:#ffd000;"class="fa fa-desktop"></i>
                            <span style="color:white"><b>Bookings</b></span>
                        </a>
                        <ul class="sub">
                            <li style="color:white"><b><a href="Bookingread.php">View Bookings</a></b></li>
                           
                            
                        </ul>
                    </li>
                  

                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i  style="color:#ffd000;" class="fas fa-city"></i>
                            <span style="color:white"><b>Cities</b></span>
                        </a>
                        <ul class="sub">
                            <li style="color:white"><b><a href="Terminalread.php">View City Info</a></b></li>
                            <li  style="color:white"><b><a href="Terminal.php">Add City Info</a></b></li>
                           
                        </ul>
                    </li>
                   <li class="sub-menu">
                        <a href="javascript:;">
                            <i  style="color:#ffd000;" class="fa fa-tasks"></i>
                            <span style="color:white"><b>Services</b></span>
                        </a>

                        <ul class="sub">
                            <li style="color:white"><b><a href="Serviceread.php">View Service</a></b></li>
                            <li style="color:white"><b><a href="Service.php">Add Service</a></b></li>
                         
                        </ul>

                    </li>

                    <li class="sub-menu" style="color:white">
                        <a href="javascript:;">
                            <i style="color:#ffd000;" class="fa fa-bus"></i>
                            <span style="color:white"><b>Bus</b></span>
                        </a>
                        <ul class="sub">
                            <li style="color:white"><b><a href="Busread.php">View Bus</a></b></li>
                            <li style="color:white"><b><a href="Bus.php">Add Bus</a></b></li>
                            
                        </ul>
                    </li>
                    
                   
                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i style="color:#ffd000;" class="fas fa-route"></i>
                            <span style="color:white"><b>Route</b></span>
                        </a>
                        <ul class="sub">
                            <li style="color:white"><b><a href="Routeread.php">View Route</a></b></li>
                            <li  style="color:white"><b><a href="Route.php">Add Route</a></b></li>
                            
                        </ul>
                    </li>

   <li class="sub-menu">
                        <a href="javascript:;">
                            <i style="color:#ffd000;" class="fas fa-map-marked-alt"></i>
                            <span  style="color:white">Terminals</span>
                        </a>
                        <ul class="sub">
                                            
<li style="color:white"><b><a href="routecitiesread.php">View Terminals Stops</a></b></li>
                            <li  style="color:white"><b><a href="routecities.php">Add Terminals Stops</a></b></li>
                           


                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i style="color:#ffd000;" class="fas fa-directions"></i>
                            <span  style="color:white">Stops</span>
                        </a>
                        <ul class="sub">
                            <li style="color:white"><b><a href="Stopsread.php">View Stops</a></b></li>
                            <li style="color:white"><b><a href="Stops.php">Add Stops</a></b></li>
                           
                        </ul>
                    </li>
 

  <li class="sub-menu">
                        <a href="javascript:;">
                            <i style="color:#ffd000;" class="fa fa-calendar-check-o"></i>
                            <span style="color:white"><b>Date View</b></span>
                        </a>
                        <ul class="sub">
                            <li style="color:white"><b><a href="dateviewread.php">View Schedule</a></li></b>
                             <li style="color:white"><b><a href="date.php">Add Schedule</a></li></b>
                            

                        </ul>
                    </li>

 
                   
                </ul>
                <!-- sidebar menu end-->
            </div>
        </aside> <section id="main-content">
            <section class="wrapper">
                
            </section>
        <!--sidebar end-->
<?php

include('fetch/servicescript.php');
?>
<?php

include('fetch/datescript.php');
?>
<?php
include('fetch/busscript.php');
?>
<?php
include('fetch/terminalscript.php');
?>
<?php
include('fetch/bookingscript.php');
?>
<?php
include('fetch/routescript.php');
?>
<?php
include('fetch/routecitiesscript.php');
?>
<?php
include('fetch/stopsscript.php');
?>
    </section>
      <!-- js placed at the end of the document so the pages load faster -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script> 

$(document).ready(function(){
    $("#d").change(function(){
        var aa = parseInt($('#d').val(), 10);
    var bb = parseInt($('#s').val(), 10);
    var mul=aa*bb;
 $("#t").val(mul);
        });
    });


</script> 



    <script src="./assetsdashboard/lib/jquery/jquery.min.js"></script>
    <script src="./assetsdashboard/lib/bootstrap/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="./assetsdashboard/lib/jquery.dcjqaccordion.2.7.js"></script>
    <script src="./assetsdashboard/lib/jquery.scrollTo.min.js"></script>
    <script src="./assetsdashboard/lib/jquery.nicescroll.js" type="text/javascript"></script>
    <!--common script for all pages-->
    <script src="./assetsdashboard/lib/common-scripts.js"></script>
    <!--script for this page-->
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
</body>

</html>