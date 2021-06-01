<?php
include('connect.php');
if(session_id()==''){

    session_start();
}
?>
<?php
include('connect.php');
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
  padding-top:220px;}

  ul{list-style-type:none;}

h3{ color:white; }

.footer-widget-area
{background-color:#ffd000;
  
 
 }
.bt {
 background-color: #ffd000;/* Blue background */
border-radius:50px;
  border: none; /* Remove borders */
  color: white; /* White text */
 /* Some padding */
  font-size: 16px; /* Set a font size */
  cursor: pointer; /* Mouse pointer on hover */
}



     .but{ 
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
                    <h2>Profile</h2>
                    <span class="title-line"><i class="fa fa-car"></i></span>
                    <p>“TRAVEL IS THE ONLY THING YOU BUY THAT MAKES YOU RICHER.”</p>
                </div>
            </div>
            <!-- Page Title End -->
        </div>
    </div>
</section>
<br>
<center><h1 style=" color:#ffd000;text-align:center; " ><i>Travel More To Discover Yourself!<i> </h1></center><br>
    <!--== Page Title Area End ==-->

    <!--== Service Page Content Start ==-->
   <!--== FAQ Area Start ==-->
<section id="faq-page-area" >
    <div class="container">
        <div class="row">
            <!-- FAQ Content Start -->
            <div class="col-lg-8 ">
                <div class="faq-details-content">
                    <!-- Single FAQ Subject  Start -->
                    <div class="single-faq-sub">
                        <h2 style="color: #ffd000;">Edit Profile</h2>
                        <div class="single-faq-sub-content">
                      <div id="accordion">
                                <!-- Single FAQ Start -->
                                <div class="card">
                                   

                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                        <div class="card-body" style=" background-image:url('assetsmainlayout/img/car/ck.jpg'); background-position: center center;
  background-size: cover; padding-left: 150px;" >
                                       
<section>
      
      <div class="form" style="width: 600px;">
        <form class="cmxform form-horizontal style-form" id="" method="POST" action="" enctype="multipart/form-data">

         
         <div class="form-group "  >
          <label for="firstname" class="control-label col-lg-2" style="color: #ffd000;">Name</label>
          <div class="col-lg-7">
            <input  class=" form-control" id="firstname" name="name" minlength="2" type="text" required value="<?php echo $data['Name']; ?>"/>
          </div>
        </div>
        <div class="form-group "  >
          <label for="lastname" class="control-label col-lg-2" style="color: #ffd000;">Username</label>
          <div class="col-lg-7">
            <input  class=" form-control" id="lastname" readonly  minlength="2" type="text" required value="<?php echo $data['UserName']; ?>"/>

          </div>
        </div>
         <div class="form-group "  >
          <label for="email" class="control-label col-lg-2" style="color: #ffd000;">Email</label>
          <div class="col-lg-7">
            <input pattern="^[A-Za-z0-9-_]+(\.[_A-Za-z0-9-]+)*@[A-Za-z0-9]+(\.[A-Za-z0-9]+)*(\.[A-Za-z]{2,4})" class="form-control " id="email" name="email" type="email" value="<?php echo $data['Email']; ?>"/>
          </div>
        </div>
    <div class="form-group " >
          
          <label for="confirm_password" class="control-label col-lg-2" style="color: #ffd000;">Password</label>
          <div class="col-lg-7">
            <input type="password" class="form-control " id="password" name="pass" value="<?php echo $data['Password']; ?>"  />
          </div>
        </div>
       
        <div class="single-sidebar">
                        <div class="sidebar-body">
                            <div  class="social-icons text-center">
                               <button style="width:42px; height:41px;"class="bt" name="btn2" type="submit"><i style="background-color:#ffd000;color:black;" class="fa fa-pencil"></i></button>
                               
                               <a  href="registerdelete.php"><i style="background-color:#ffd000;color:red;" name="del" class="fa fa-trash-o"></i></a>
                               
                            </div>
                        </div>
                    </div>
     
      </form>
   
</div>
</section>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single FAQ End -->
                                <!-- Single FAQ Start -->
                               
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
                        <h3>Booking Informations</h3>

                        <div class="sidebar-body">
                            <div  class="social-icons text-center">
                                
                               <?php
include('model.php');
                               ?>
                            
                        </div>
                    </div>
                    <!-- Single Sidebar End -->
                    <!-- Single Sidebar Start -->
                    <!-- Single Sidebar End -->
                    <!-- Single Sidebar Start -->
                    
                    <!-- Single Sidebar End -->
                </div>
            </div>
            <!-- Sidebar Area End -->
        </div>

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

<?php
include('connect.php');
if(isset($_POST['btn2']))
{
  $i=$_SESSION['UI'];
  $a=$_POST["name"];
 $e=$_POST["email"];
 $p=$_POST["pass"];

      $q="update user set Name ='$a',Email='$e',Password='$p' where Id='$i'";
      $res=mysqli_query($con,$q);
      if($res)
      {
        echo "<script> alert('Updated'); window.location.href='editprofile2.php';</script>";
      }
      else
      {
        echo "<script> alert('Error'); </script>";
      }
    
 
}

?>
