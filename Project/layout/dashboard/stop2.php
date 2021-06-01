<?php
include('connect.php');
include('dashboard.php');

?>


 <?php


$id=$_POST['route'];

$q="select * from route join services on route.Service=services.Service_Id where route.Id='$id'";
$rw=mysqli_query($con,$q);
$rt=mysqli_fetch_assoc($rw);


$q="select * from routecities join terminal on routecities.Cities=terminal.Terminal_Id where routecities.Routes_Id='$id'";
$rw=mysqli_query($con,$q);


$q="select * from routecities join terminal on routecities.Cities=terminal.Terminal_Id where routecities.Routes_Id='$id'";
$ro=mysqli_query($con,$q);

?> 
<section id="main-content">
 <div class="row mt">
    <div class="col-lg-12">
     <center>
      <div class="form-panel"  style="width:80%;">
     <h2 style="text-align: center;"> Stop Insert</h2>
      <br>
      <div class="form">
          <center>
    <center>      
      <form class="cmxform form-horizontal style-form" id="signupForm" method="POST" action="stopsinsert.php" enctype="multipart/form-data">

          
 <div class="form-group "  style="width:70%;">
          <label for="totalprice" class="control-label col-lg-3" style="font-size: 16px;color:black;">Route</label>
          <div class="col-lg-9">
            <input  readonly class=" form-control" id="d" minlength="1" type="text" value="<?php echo $rt['Route_Name'] ?>" required />
             <input  class=" form-control" id="d" name="route1" minlength="1" type="hidden" value="<?php echo $id ?>"  />
 </div>
        </div>

<div class="form-group "  style="width:70%;">

          <label for="endingpoint" class="control-label col-lg-3" style="font-size: 16px;color:black;">Starting Point</label>
          <div class="col-lg-9">
            <?php 
 
          
         echo "
        <div >
         <select class='form-control' name='start'>";
                  echo '<option value="0">Select </option>';
            while($xy=mysqli_fetch_assoc($rw)){
               echo "<option class='form-group col-lg-2' value='$xy[RC_Id]'>". $xy[City] ." </option>";
                }
        echo "</select> 
         </div>";
         
           ?>
</div>
     </div>



     <div class="form-group "  style="width:70%;">

          <label for="endingpoint" class="control-label col-lg-3" style="font-size: 16px;color:black;">Ending Point</label>
          <div class="col-lg-9">
            <?php 
 
            
         echo "
        <div >
         <select class='form-control' name='end'>";
                  echo '<option value="0">Select </option>';
           while($yz=mysqli_fetch_assoc($ro)){
               echo "<option class='form-group col-lg-2' value='$yz[RC_Id]'>". $yz[City] ." </option>";
                }
        echo "</select> 
         </div>";
           ?> </div>
     </div>
 
<div class="form-group "  style="width:70%;">
          <label for="availableseats" class="control-label col-lg-3" style="font-size: 16px;color:black;">Stops  Name</label>
          <div class="col-lg-9">
            <input  class=" form-control" id="" name="stname" minlength="1"  type="text" required />
          </div>
        </div>                                                           
 <div class="form-group "  style="width:70%;">
          <label for="time" class="control-label col-lg-3" style="font-size: 16px;color:black;">Time</label>
          <div class="col-lg-9">
           
                                <select class="form-control"  name="time">
                                  <option selected ">Select </option>
                                  <option value="9:00">9:00</option>
                                  <option  value="12:00">12:00</option>
                                   <option value="15:00">15:00</option>
                                  <option  value="18:00">18:00</option>
                                  <option  value="21:00">21:00</option>
                                </select>  </div>
        </div>



 <div class="form-group "  style="width:70%;">
          <label for="priceperkm" class="control-label col-lg-3"  style="font-size: 16px;color:black;">Service Price</label>
          <div class="col-lg-9">
           
            <input  class=" form-control" id="ss" name="service" minlength="1" type="text" readonly value="<?php echo $rt['Price'] ?>"required />
         </div>
     </div>  


 <div class="form-group "  style="width:70%;">
          <label for="distance" class="control-label col-lg-3" style="font-size: 16px;color:black;">Distance</label>
          <div class="col-lg-9">
            <input  class=" form-control" id="dt" name="distance" minlength="1" type="text" required />
          </div>
        </div>
       
    
     
 <div class="form-group "  style="width:70%;">
          <label for="totalprice" class="control-label col-lg-3" style="font-size: 16px;color:black;">Total Price</label>
          <div class="col-lg-9">
            <input  class=" form-control" id="tp" name="totalprice"  minlength="1" type="text" required />
          </div>
        </div>

 


        <div class="form-group "  style="width:70%;">
          <div class="col-lg-offset-2 col-lg-8">
            <button class="btn btn-theme" type="submit" name="btn">Insert</button>
          </div>
        </div>
      </form></center>

</div></div></section>
<script> 

$(document).ready(function(){
    $("#dt").change(function(){
        var aa = parseInt($('#dt').val(), 10);
    var bb = parseInt($('#ss').val(), 10);
    var mul=aa*bb;
 $("#tp").val(mul);
        });
    });

</script>