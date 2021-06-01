<?php
include('dashboard.php');
include ('connect.php');
$id=$_GET['id'];
$query="Select * from route join services on route.Service=services.Service_Id join bus on route.Bus=bus.Bus_Id join terminal on route.Starting_Point=terminal.Terminal_Id where Id='$id' ";
$rows=mysqli_query($con,$query);
$dat=mysqli_fetch_assoc($rows);
$ser= $dat['Service'];
$start= $dat['Starting_Point'];
$end= $dat['Ending_Point'];
$bu= $dat['Bus'];

?>


<!--main content start-->
<section id="main-content" >
 <div class="row mt" >
  <div class="col-lg-12"> <center><div class="form-panel"  style="width:80%;">
     <h2 style="text-align: center;"> Edit Route</h2>
    <br>
   
      <center><div class="form">
        <form class="cmxform form-horizontal style-form" id="signupForm" method="POST" action="" enctype="multipart/form-data">
           <div class="form-group"  style="width:70%;">
          <label for="firstname" class="control-label col-lg-3" style="font-size: 16px;color:black;">ID</label>
          <div class="col-lg-9">
    <input class=" form-control" id="firstname" name="Id" minlength="1" type="text" required  readonly value="<?php echo $dat['Id']; ?>" />
          </div>
        </div>

        
  
          <div class="form-group"  style="width:70%;">
          <label for="startingpoint" class="control-label col-lg-3" style="font-size: 16px;color:black;">Starting Point</label>
          <div class="col-lg-9">
             <?php

$q="select * from terminal";
$rows=mysqli_query($con,$q);
echo "<select class='form-control' name='starting'>";
echo '<option value="0">Select </option>';
 while($data = mysqli_fetch_assoc($rows))
            { 
                
                echo "<option  class=' col-lg-2' value='$data[Terminal_Id]' ";
                if($start == $data['Terminal_Id']) {
                  echo "selected='selected'";
                }
                echo ">$data[City]</option>\n";
}
echo "</select>";
?>
      </div>
        </div>



                     
                     
   <div class="form-group"  style="width:70%;">
         <label for="endingpoint" class="control-label col-lg-3" style="font-size: 16px;color:black;">Ending Point</label>
          <div class="col-lg-9">
            <?php

$q="select * from terminal";
$rows=mysqli_query($con,$q);
echo "<select class='form-control' name='ending'>";
echo '<option value="0">Select </option>';
 while($data = mysqli_fetch_assoc($rows))
            { 
                
                echo "<option  class=' col-lg-2' value='$data[Terminal_Id]' ";
                if($end == $data['Terminal_Id']) {
                  echo "selected='selected'";
                }
                echo ">$data[City]</option>\n";
}
echo "</select>";
?></div>
        </div>

<div class="form-group "  style="width:70%;">
          <label for="distance" class="control-label col-lg-3" style="font-size: 16px;color:black;">Route Name</label>
          <div class="col-lg-9">
            <input  class=" form-control" id="distance" name="name" minlength="1" type="text" required value="<?php echo $dat['Route_Name']; ?>"/>
          </div>
        </div>
  <div class="form-group"  style="width:70%;">
          <label for="service" class="control-label col-lg-3" style="font-size: 16px;color:black;">Service</label>
          <div class="col-lg-9">
          <?php

$q="select * from services";
$rows=mysqli_query($con,$q);
echo "<select class='form-control' name='busservice'>";

 while($data = mysqli_fetch_assoc($rows))
            { 
                
                echo "<option  class=' col-lg-2' value='$data[Service_Id]' ";
                if($ser == $data['Service_Id']) {
                  echo "selected='selected'";
                }
                echo ">$data[Service]</option>\n";
}
echo "</select>";
?> </div>
</div>
  <div class="form-group"  style="width:70%;">
          <label for="bus" class="control-label col-lg-3" style="font-size: 16px;color:black;">Bus</label>
          <div class="col-lg-9">
        <?php

$q="select * from bus";
$rows=mysqli_query($con,$q);
echo "<select class='form-control' name='bus'>";
echo '<option value="0">Select </option>';
 while($data = mysqli_fetch_assoc($rows))
            { 
                
                echo "<option  class=' col-lg-2' value='$data[Bus_Id]' ";
                if($bu== $data['Bus_Id']) {
                  echo "selected='selected'";
                }
                echo ">$data[Plate]</option>\n";
}
echo "</select>";
?> </div>
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
$a=$_POST["starting"];
$b=$_POST["ending"];
$g=$_POST["busservice"];
$c=$_POST["bus"];
$p=$_POST["name"];

$query="update route set Starting_Point='$a',Ending_Point='$b',Service='$g',Bus='$c',Route_Name='$p' where Id='$id'";
$result=mysqli_query($con,$query);
if($result)
{
echo "<script> alert('Updated');window.location.href='routeread.php'; </script>";
}
else
{
echo "<script> alert('Error'); </script>";
}
}
?>