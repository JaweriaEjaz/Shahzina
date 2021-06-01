<?php
include('dashboard.php');
include ('connect.php');
$id=$_GET['id'];
$qu="SELECT * FROM services WHERE Service_Id='$id'";
$res=mysqli_query($con,$qu);
$data=mysqli_fetch_assoc($res);
?>
<!--main content start-->
<section id="main-content">
 <div class="row mt">
  <div class="col-lg-12">
        <center><div class="form-panel"  style="width:80%;"> <h2 style="text-align: center;"></i> Edit Services </h2>
    
<br>

      <center>
      <div class="form">


        <form class="cmxform form-horizontal style-form" id="signupForm" method="POST" action="" enctype="multipart/form-data">
        



  <div class="form-group "  style="width:70%;">
          <label for="firstname" class="control-label col-lg-3"  style="font-size: 16px;color:black;">ID</label>
          <div class="col-lg-9">
    <input class=" form-control" id="firstname" name="Id" minlength="1" type="text" required  readonly value="<?php echo $data['Service_Id']; ?>" />
          </div>
        </div>

      
         <div class="form-group "  style="width:70%;">
          <label for="firstname" class="control-label col-lg-3"  style="font-size: 16px;color:black;">Service Name</label>
          <div class="col-lg-9">
         <input  class=" form-control" id="firstname" name="Service" minlength="1" type="text" data-toggle="tooltip" data-placement="right" title="Enter Service Name!" required  value="<?php echo $data['Service']; ?>"/>
          </div>
        </div>
       
       <div class="form-group "  style="width:70%;">
          <label for="firstname" class="control-label col-lg-3"  style="font-size: 16px;color:black;">Price</label>
          <div class="col-lg-9">
         <input  class=" form-control" id="firstname" name="price" minlength="1" type="text" data-toggle="tooltip" data-placement="right" title="Enter Service Price!" required  value="<?php echo $data['Price']; ?>"/>
          </div>
        </div>

        <div class="form-group "  style="width:70%;">
          <div class="col-lg-offset-2 col-lg-8">
            <button class="btn btn-theme" type="submit" name="btn">Update</button>
          </div>
        </div>


      </form>
    </div></center>
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
if(isset($_POST['btn'])){
  $a=$_POST["Service"];

  $d=$_POST["price"];


      $q="update services set Service ='$a',Price='$d' where Service_Id='$id'";
      $res=mysqli_query($con,$q);
      if($res)
      {
        echo "<script> alert('Updated'); window.location.href='serviceread.php';</script>";
      }
      else
      {
        echo "<script> alert('Error'); </script>";
      }
    
 
}

?>