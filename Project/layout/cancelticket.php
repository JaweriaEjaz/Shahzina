
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
  .footer-widget-area
{background-color:#ffd000;
  
 
 }
#page-title-area {
	background-image:url('assetsmainlayout/img/car/12.jpg');
	background-position: center center;
	background-size: cover;
	padding-top: 220px;
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

     } ul{list-style-type:none;}
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
                    <h2>Cancel Ticket</h2>
                    <span class="title-line"><i class="fa fa-car"></i></span>
                    <p>“TRAVEL IS THE ONLY THING YOU BUY THAT MAKES YOU RICHER.”</p>
                </div>
            </div>
            <!-- Page Title End -->
        </div>
    </div>
</section>
<br><br>
<center><h1 style=" color:#ffd000;text-align:center; " ><i>Travel More To Discover Yourself!<i> </h1></center><br>
 <!--================Contact Area =================-->


<br><br>

<?php
                                   $qun="select * from booking where Client_Id='$_SESSION[UI]' and status='Done'";
                                   $runn=mysqli_query($con,$qun);
                              ?>
                                 
 
                        <div class="contact-page-wrao ">
    <div class="container">
        <div class="row">
           <div class="col-lg-10 m-auto">
              <center>   <div class="contact-form">
                    <form class="cmxform form-horizontal style-form"  method="POST" action="cancelticket.php" enctype="multipart/form-data">

                        <div class="row">
                        	
                        		 <div class="col-lg-12 col-md-12">
                                <div class="name-input" center>
                                   <select name="book" style="width: 50%">
                             <?php      while($datan=mysqli_fetch_assoc($runn)) { ?>
                                   <option> <?php echo $datan['Book_Id'] ?></option>

                                   <?php 
                               } ?>
                                   </select>
                                   <div class="input-submit">
                            <button type="submit" name="submit">Cancel</button>
                        </div>
                                </div>
                            </div>
 </div>
                        	
                           
                           
                       <br><br>
                         

                      </div>

                       
                    </form>
                </div></center>
            </div>
        </div>
    </div>
</div>
<!--== Contact Page Area End ==-->
<br>

<br>

<!--================Contact Area =================-->
  <?php
 include('footer.php');
 ?>


<!--================Contact Success and Error message Area =================-->
<!--================End Contact Success and Error message Area =================-->




<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
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

<?php
include('connect.php');
if(isset($_POST['submit'])){
$b=$_POST['book'];
if(!$b){
    echo "<script>alert('Nothing to cancel');window.location.href='bus.php'</script>";
}
$query="select * from booking join dateview on booking.Datee_Id=dateview.Date_Id where Book_Id='$b'";
$result=mysqli_query($con,$query);
$data=mysqli_fetch_assoc($result);
$dd=$data['Date'];
$am=$data['Booking_Price'];
$seats=$data['Booking_Seats'];
$av=$data['Available_Seats'];
$new=$seats+$av;
echo $new;
$did=$data['Date_Id'];
$to=date("y-m-d");
$date1=date_create($dd);
$date2=date_create($to);
$diff=date_diff($date1,$date2);
$newdiff= $diff->format("%a");
if($newdiff>=2){
    $q="UPDATE booking SET Status='Cancelled',AmountToRefund='$am' WHERE Book_Id='$b'";
    $run=mysqli_query($con,$q);
    $qs="UPDATE dateview SET Available_Seats='$new' WHERE Date_Id='$did'";
$rs=mysqli_query($con,$qs);
    $runs=mysqli_query($con,$qs);
    if($run){
        echo "<script>alert('Booking Cancelled! All Refund');window.location.href='bus.php'</script>";
    }
}
elseif($newdiff==1){
    $newam=$am/2;
    $q="UPDATE booking SET Status='Cancelled',AmountToRefund='$newam' WHERE Book_Id='$b'";
    $run=mysqli_query($con,$q);
    $qs="UPDATE dateview SET Available_Seats='$new' WHERE Date_Id='$did'";
    $rs=mysqli_query($con,$qs);
    if($run){
        echo "<script>alert('Booking Cancelled! 50% Refund');window.location.href='bus.php'</script>";
    }
}
else{
$q="UPDATE booking SET Status='Cancelled',AmountToRefund='0' WHERE Book_Id='$b'";
$run=mysqli_query($con,$q);
$qs="UPDATE dateview SET Available_Seats='$new' WHERE Date_Id='$did'";
$rs=mysqli_query($con,$qs);
if($run){
    echo "<script>alert('Booking Cancelled! No Refund');window.location.href='bus.php'</script>";
}
}

}


?>