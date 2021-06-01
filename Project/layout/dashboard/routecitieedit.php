<?php
include('dashboard.php');
include ('connect.php');
$id=$_GET['id'];
$query="Select * from routecities where RC_Id='$id' " ";
$rows=mysqli_query($con,$query);
$data=mysqli_fetch_assoc($rows);
$r= $data['Routes_Id'];
$t= $data['Cities'];


?>


<!--main content start-->
<section id="main-content" >
 <div class="row mt" >
  <div class="col-lg-12"> <center><div class="form-panel"  style="width:80%;">
     <h2 style="text-align: center;"> Route Cities Edit </h2>
    <br>
   
      <center><div class="form">
        <form class="cmxform form-horizontal style-form" id="signupForm" method="POST" action="" enctype="multipart/form-data">
           <div class="form-group"  style="width:70%;">
          <label for="firstname" class="control-label col-lg-3" style="font-size: 16px;color:black;">ID</label>
          <div class="col-lg-9">
    <input class=" form-control" id="firstname" name="Id" minlength="1" type="text" required  readonly value="<?php echo $data['RC_Id']; ?>" />
          </div>
        </div>

        
  
        <div class="form-group "  style="width:70%;">
          <label for="routeid" class="control-label col-lg-3" style="font-size: 16px;color:black;">Route Name</label>
          <div class="col-lg-9">
                     <?php

$q="select * from route";
$rows=mysqli_query($con,$q);
echo "<select class='form-control' name='route'>";
 while($data = mysqli_fetch_assoc($rows))
            { 
                
                echo "<option  class=' col-lg-2' value='$data[Id]' ";
                if($r == $data['Id']) {
                  echo "selected='selected'";
                }
                echo ">$data[Route_Name]</option>\n";
}
echo "</select>";
?>
          </div>
        </div>
          
<div class="form-group"  style="width:70%;">
          <label for="startingpoint" class="control-label col-lg-3" style="font-size: 16px;color:black;">Starting Point</label>
          <div class="col-lg-9">
             <?php

$q="select distinct * from terminal";
$rows=mysqli_query($con,$q);
echo "<select class='form-control' name='cty'>";
echo '<option value="0">Select </option>';
 while($data = mysqli_fetch_assoc($rows))
            { 
                
                echo "<option  class=' col-lg-2' value='$data[Terminal_Id]' ";
                if($t == $data['Terminal_Id']) {
                  echo "selected='selected'";
                }
                echo ">$data[City]</option>\n";
}
echo "</select>";
?>
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
$a=$_POST["route"];
$b=$_POST["cty"];

$query="update routecities set Routes_Id='$a',Cities='$b' where RC_Id='$id'";
$result=mysqli_query($con,$query);
if($result)
{
echo "<script> alert('Updated');window.location.href='routecitiesread.php'; </script>";
}
else
{
echo "<script> alert('Error'); </script>";
}
}
?>