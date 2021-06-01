<?php
include('dashboard.php');
include ('connect.php');
$id=$_GET['id'];
$query="select * from stops join route on stops.Route_Id  = route.Id join services on route.Service=services.Service_Id where Stops_Id='$id' ";
$rows=mysqli_query($con,$query);
$xyz=mysqli_fetch_assoc($rows);
$st= $xyz['Come_From'];
$ed= $xyz['Departure'];
$tim=$xyz['Time'];
$se=$xyz['Price_Per_KM'];

$q="select * from routecities join terminal on routecities.Cities=terminal.Terminal_Id ";
$rw=mysqli_query($con,$q);


$q="select * from routecities join terminal on routecities.Cities=terminal.Terminal_Id ";
$ro=mysqli_query($con,$q);
?>
<!--main content start-->
<section id="main-content">
 <div class="row mt">
    <div class="col-lg-12">
     <center>
      <div class="form-panel"  style="width:80%;">
     <h2 style="text-align: center;"> Stop Edit</h2>
      <br>
      <div class="form">
          <center>
       
<center>
 <form class="cmxform form-horizontal style-form" id="signupForm" method="POST" action="" enctype="multipart/form-data">

<div class="form-group "  style="width:70%;">
          <label for="totalprice" class="control-label col-lg-3" style="font-size: 16px;color:black;">Route</label>
          <div class="col-lg-9">
            <input  class=" form-control" id="d" minlength="1" type="text" readonly value="<?php echo $xyz['Route_Name'] ?>" required />
             <input  class=" form-control" id="d" name="route1" minlength="1" type="hidden" value="<?php echo $xyz['Route_Id'] ?>"  />
 </div>
        </div>




    <div class="form-group "  style="width:70%;">
          <label for="start" class="control-label col-lg-3" style="font-size: 16px;color:black;">Starting Point</label>
          <div class="col-lg-9">
             <?php 
 
          
         echo "
        <div >
         <select class='form-control' name='start'>";
                 
            while($xy=mysqli_fetch_assoc($rw)){
               echo "<option class='form-group col-lg-2' value='$xy[RC_Id]'";
 if($st == $xy['RC_Id']) {
                  echo "selected='selected'";
                }
              echo "> $xy[City] </option>\n";
                }
        echo "</select> 
         </div>";
         
           ?> </div>
        </div>
                     
                     
   <div class="form-group"  style="width:70%;">
         <label for="endingpoint" class="control-label col-lg-3" style="font-size: 16px;color:black;">Ending Point</label>
          <div class="col-lg-9">
            <?php 
 
          
         echo "
        <div >
         <select class='form-control' name='end'>";
                 
            while($yz=mysqli_fetch_assoc($ro)){
               echo "<option class='form-group col-lg-2' value='$yz[RC_Id]'";
 if($ed == $yz['RC_Id']) {
                  echo "selected='selected'";
                }
              echo "> $yz[City] </option>\n";
                }
        echo "</select> 
         </div>";
         
           ?></div>
        </div>
       
      <div class="form-group "  style="width:70%;">
          <label for="avail" class="control-label col-lg-3" style="font-size: 16px;color:black;">Stops Name</label>
          <div class="col-lg-9">
            <input  class=" form-control" id="avail" name="stname" minlength="1" type="text" required value="<?php echo $xyz['Stops_Name']; ?>"/>
          </div>
        </div>
        
                     
                     

       
 <div class="form-group "  style="width:70%;">
          <label for="availableseats" class="control-label col-lg-3" style="font-size: 16px;color:black;">Time</label>
          <div class="col-lg-9">

              <select class="form-control"  name="time">
                 <option selected ">SELECT</option>
                                  <option value="9:00" <?php if($tim == '9:00') {echo "selected='selected'";} ?> >9:00</option>
                                  <option   value="12:00" <?php if($tim == '12:00') {echo "selected='selected'";} ?> >12:00</option>
                                  <option value="15:00" <?php if($tim == '15:00') {echo "selected='selected'";} ?> >15:00</option>
                                  <option  value="18:00" <?php if($tim == '18:00') {echo "selected='selected'";} ?> >18:00</option>
                                  <option  value="21:00" <?php if($tim == '21:00') {echo "selected='selected'";} ?> >21:00</option>

                                </select>
          </div>
        </div>



  <div class="form-group "  style="width:70%;">
          <label for="priceperkm" class="control-label col-lg-3"  style="font-size: 16px;color:black;">Service Price</label>
          <div class="col-lg-9">
           
            <input  class=" form-control" id="sss" name="service" minlength="1" type="text" readonly value="<?php echo $xyz['Price'] ?>"required />
         </div>
     </div>  

<div class="form-group "  style="width:70%;">
          <label for="distance" class="control-label col-lg-3" style="font-size: 16px;color:black;">Distance</label>
          <div class="col-lg-9">
            <input  class=" form-control" id="dtt" name="distance" minlength="1" type="text" required value="<?php echo $xyz['Distance']; ?>"/>
          </div>
        </div>

<div class="form-group "  style="width:70%;">
          <label for="totalprice" class="control-label col-lg-3" style="font-size: 16px;color:black;">Total Price</label>
          <div class="col-lg-9">
            <input  class=" form-control" id="tpp" name="totalprice" minlength="1" type="text"  readonly required value="<?php echo $xyz['Total_Price']; ?>"/>
          </div>
        </div> 

  
          

        <div class="form-group "  style="width:70%;">
          <div class="col-lg-offset-2 col-lg-8">
            <button class="btn btn-theme" type="submit" name="btn">Update</button>
    </div>
        </div>
      </form></center>
    </div>
  </div>
  <!-- /form-panel -->
</div>
<!-- /col-lg-12 -->
</div>
<!-- /row -->
</section>
<!-- /wrapper -->
</section>
<!-- /MAIN CONTENT -->
<!--main content end-->

<!-- js placed at the end of the document so the pages load faster -->
<script> 

$(document).ready(function(){
    $("#dtt").change(function(){
        var aa = parseInt($('#dtt').val(), 10);
    var bb = parseInt($('#sss').val(), 10);
    var mul=aa*bb;
 $("#tpp").val(mul);
        });
    });

</script>


<?php

if(isset($_POST["btn"]))
{
$r=$_POST["route1"];
$p=$_POST["service"];
$c=$_POST["start"];
$d=$_POST["end"];
$t=$_POST["time"];
$di=$_POST["distance"];
$tp=$_POST["totalprice"];
$a=$_POST["stname"];
$query="update stops set Route_Id='$r',Price_Per_KM='$p',Come_From='$c',Departure='$d',Time='$t',
Distance='$di',Total_Price='$tp',Stops_Name='$a' where Stops_Id='$id'";
$result=mysqli_query($con,$query);
if($result)
{
echo "<script> alert('Updated'); window.location.href='stopsread.php';</script>";
}
else
{
echo mysqli_error($con);
}
}

?>