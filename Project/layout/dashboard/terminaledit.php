<?php
include('dashboard.php');
include ('connect.php');
$id=$_GET['id'];
$qu="SELECT * FROM terminal WHERE Terminal_Id='$id'";
$res=mysqli_query($con,$qu);
$data=mysqli_fetch_assoc($res);
?>
<!--main content start-->
<section id="main-content">
 <div class="row mt">
  <div class="col-lg-12">
  <center><div class="form-panel"  style="width:80%;">
     <h2 style="text-align: center;"> City Info Edit</h2>
    <br>
      <center><div class="form">
        <form class="cmxform form-horizontal style-form" id="signupForm" method="POST" action="" enctype="multipart/form-data">
   <div class="form-group "  style="width:70%;">
          <label for="firstname" class="control-label col-lg-3" style="font-size: 16px;color:black;">ID</label>
          <div class="col-lg-9">
    <input class=" form-control" id="firstname" name="Id" minlength="1" type="text" required  readonly value="<?php echo $data['Terminal_Id']; ?>" />
          </div>
        </div>

        
 <div class="form-group "  style="width:70%;">
          <label for="firstname" class="control-label col-lg-3" style="font-size: 16px;color:black;">Terminal Picture</label>
          <div class="col-lg-9">
            <img src="<?php echo $data['Image'];?>" height=55 width=55>
            <br><br><input accept="image/*" class=" form-control" id="pic" name="image"  type="file" />
          </div>
        </div>
    <div class="form-group "  style="width:70%;">
          <label for="city" class="control-label col-lg-3" style="font-size: 16px;color:black;">City</label>
          <div class="col-lg-9">
            <input class=" form-control" id="city" name="city" minlength="1" type="text" required value="<?php echo $data['City']; ?>"/>
          </div>
        </div>
        <div class="form-group "  style="width:70%;">
          <label for="address" class="control-label col-lg-3" style="font-size: 16px;color:black;">Address</label>
          <div class="col-lg-9">
            <input class=" form-control" id="address" name="address" minlength="1" type="text" required value="<?php echo $data['Address']; ?>"/>
          </div>
        </div>
      
         <div class="form-group "  style="width:70%;">
           
          <label for="contact" class="control-label col-lg-3" style="font-size: 16px;color:black;">Contact</label>
          <div class="col-lg-9">
            <input class="form-control " id="phone" name="contact" type="text" minlength="1" required value="<?php echo $data['Contact']; ?>"/>
          </div>
        </div>

       
      
       
         <div class="form-group "  style="width:70%;">
          <div class="col-lg-offset-2 col-lg-8">
            <button class="btn btn-theme" type="submit" name="submit">Update</button>
          </div>
        </div>
      </form></center>
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
if(isset($_POST["submit"]))
{
$c=$_POST["city"];
$p=$_POST["contact"];
$a=$_POST["address"];
$image = $_FILES['image']['name'];
$imgtn=$_FILES['image']['tmp_name'];
$imgty=$_FILES['image']['type'];
$imgsi=$_FILES['image']['size'];
$folder="myimages/";
if($imgty=="image/png" || $imgty=="image/jpg" || $imgty=="image/jpeg")
{
if($imgsi<=1000000)
{
$path= $folder . $image;
move_uploaded_file($imgtn,$path);
      $q="update terminal set image='$path', City ='$c',Contact='$p', Address='$a' where Terminal_Id='$id'";
      $res=mysqli_query($con,$q);
      if($res)
      {
        echo "<script> alert('Updated'); window.location.href='terminalread.php';</script>";
      }
      else
      {
       
 echo "<script> alert('Error');</script>";
       }
    }
    else
    {
      echo "<script> alert('Image size error'); </script>";
    }
  }
  else
  {
    echo "<script> alert('Image format error'); </script>";
  }
}

?>