<?php
include('dashboard.php');
include ('connect.php');
$id=$_GET['id'];
$query="Select * from bus join services on bus.Service=services.Id where bus.Id='$id'";

$rows=mysqli_query($con,$query);
$data=mysqli_fetch_assoc($rows);
$ser= $data['Service'];
echo $ser;
?>


<!--main content start-->
<section id="main-content">
 <div class="row mt">
  <div class="col-lg-12">
    <h2><i class="fa fa-center"></i> Edit Booking </h2><br>
    <div class="form-panel">
      <div class="form">
        <form class="cmxform form-horizontal style-form" id="signupForm" method="POST" action="" enctype="multipart/form-data">
         <div class="form-group ">
          <label for="bookid" class="control-label col-lg-2">Book ID</label>
          <div class="col-lg-10">
    <input class=" form-control" id="firstname" name="Id" minlength="2" type="text" required  readonly value="<?php echo $data['Id']; ?>" />
          </div>
        </div>

        
  
        <div class="form-group ">
          <label for="clientid" class="control-label col-lg-2">Client ID</label>
          <div class="col-lg-10">
            <input  class=" form-control" id="clientid" name="clientid" minlength="2" type="text" required value="<?php echo $data['Client']; ?>"/>
          </div>
        </div>



                     
                     
 <div class="form-group  col-lg-2' ">
          <label for="stopid" class="control-label col-lg-2">Stop ID</label>
          <div class="col-lg-10">
            <input  class=" form-control" id="stopid" name="stopid" minlength="2" type="text" required value="<?php echo $data['Stop']; ?>"/>
          </div>
        </div>

 <div class="form-group ">
          <label for="noofseats" class="control-label col-lg-2">No Of Seats</label>
          <div class="col-lg-10">
            <input  class=" form-control" id="noofseats" name="noofseats" minlength="2" type="text" required value="<?php echo $data['Seats']; ?>"/>
          </div>
        </div>

 <div class="form-group ">
          <label for="price" class="control-label col-lg-2">Price</label>
          <div class="col-lg-10">
            <input  class=" form-control" id="price" name="price" minlength="2" type="text" required value="<?php echo $data['Price']; ?>"/>
          </div>
        </div>

 <div class="form-group  ">
          <label for="service" class="control-label col-lg-2">Service</label>
   


  <div class="col-lg-10">
 <?php include('fetch/sereditfetch.php'); ?>
  </div>    
 </div>


        <div class="form-group">
          <div class="col-lg-offset-2 col-lg-10">
            <button class="btn btn-theme" type="submit" name="btn">Save</button>
    </div>
        </div>
      </form>
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
<script src="lib/jquery/jquery.min.js"></script>
<script src="lib/bootstrap/js/bootstrap.min.js"></script>
<script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
<script src="lib/jquery.scrollTo.min.js"></script>
<script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
<!--common script for all pages-->
<script src="lib/common-scripts.js"></script>
<!--script for this page-->
<script src="lib/jquery-ui-1.9.2.custom.min.js"></script>
<script type="text/javascript" src="lib/bootstrap-fileupload/bootstrap-fileupload.js"></script>
<script type="text/javascript" src="lib/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="lib/bootstrap-daterangepicker/date.js"></script>
<script type="text/javascript" src="lib/bootstrap-daterangepicker/daterangepicker.js"></script>
<script type="text/javascript" src="lib/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script>
<script type="text/javascript" src="lib/bootstrap-daterangepicker/moment.min.js"></script>
<script type="text/javascript" src="lib/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
<script src="lib/advanced-form-components.js"></script>
</body>
</html>
<?php
if(isset($_POST["btn"]))
{
$a=$_POST["seats"];
$b=$_POST["service"];
$g=$_POST["status"];
$c=$_POST["plate"];
$p=$_POST["date"];


$query="update bus set Seats='$a',Service='$b',Status='$g',Plate='$c',Date='$p' where Id='$id'";
$result=mysqli_query($con,$query);
if($result)
{
echo "<script> alert('Updated'); window.location.href='busread.php';</script>";
}
else
{
echo "<script> alert('Error'); </script>";
}
}

?>