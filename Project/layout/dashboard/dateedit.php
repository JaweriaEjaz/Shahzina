<?php
include('dashboard.php');
include ('connect.php');
$id=$_GET['id'];
$query="Select * from dateview join stops on dateview.Stop_Id=stops.Stops_Id    where Date_Id='$id'";
$rows=mysqli_query($con,$query);
$data=mysqli_fetch_assoc($rows);
$r= $data['Stops_Name'];



?>


<!--main content start-->
<section id="main-content" >
 <div class="row mt" >
  <div class="col-lg-12"> <center><div class="form-panel"  style="width:80%;">
     <h2 style="text-align: center;"> Date Edit </h2>
    <br>
   
      <center><div class="form">
        <form class="cmxform form-horizontal style-form" id="signupForm" method="POST" action="" enctype="multipart/form-data">
          

        
  
        <div class="form-group "  style="width:70%;">
          <label for="routeid" class="control-label col-lg-3" style="font-size: 16px;color:black;">Stop Name</label>
          <div class="col-lg-9">
            <input  type="text" class=" form-control" readonly  id="avail" name="da" minlength="1" type="text" required value="<?php echo $data['Stops_Name']; ?>"/>
          </div>      
       </div>
        

     <div class="form-group "  style="width:70%;">
          <label for="avail" class="control-label col-lg-3" style="font-size: 16px;color:black;">Date</label>
          <div class="col-lg-9">
            <input  type="date" class=" form-control" id="avail" name="da" minlength="1" type="text" required value="<?php echo $data['Date']; ?>"/>
          </div>
        </div>

  <div class="form-group"  style="width:70%;">
          <div class="col-lg-offset-2 col-lg-10">
            <button class="btn btn-theme" type="submit" name="btn">Update</button>
    </div>
        </div>
      </form>
   </center>
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
if(isset($_POST["btn"]))
{

$b=$_POST["da"];


$query="update dateview set Date='$b' where Date_Id='$id'";
$result=mysqli_query($con,$query);
if($result)
{
echo "<script> alert('Updated');window.location.href='dateviewread.php'; </script>";
}
else
{
echo "<script> alert('Error'); </script>";
}
}
?>