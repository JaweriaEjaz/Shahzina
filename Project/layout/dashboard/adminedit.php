<?php
include('dashboard.php');
include ('connect.php');
$id=$_GET['id'];
$qu="SELECT * FROM admin WHERE Id='$id'";
$res=mysqli_query($con,$qu);
$data=mysqli_fetch_assoc($res);
?>

<section id="main-content">
 <div class="row mt">
  <div class="col-lg-12">
        <center><div class="form-panel"  style="width:80%;"> <h2 style="text-align: center;"></i> Edit Profile </h2>
    
<br>

      <center>
      <div class="form">
        <form class="cmxform form-horizontal style-form" id="signupForm" method="POST" action="" enctype="multipart/form-data">

         <div class="form-group "  style="width:70%;">
          <label for="firstname" class="control-label col-lg-2">Image</label>
          <div class="col-lg-10">
            <input accept="image/*" class=" form-control" id="pic" name="image"  type="file" required value="<?php echo $data['Image']; ?>" />
        <Br><br>  </div>
        </div>
         <div class="form-group "  style="width:70%;">
          <label for="firstname" class="control-label col-lg-2">Name</label>
          <div class="col-lg-10">
            <input  class=" form-control" id="firstname" name="name" minlength="2" type="text" required value="<?php echo $data['Name']; ?>"/>
          </div>
        </div>
        <div class="form-group "  style="width:70%;">
          <label for="lastname" class="control-label col-lg-2">Username</label>
          <div class="col-lg-10">
            <input  class=" form-control" id="lastname" readonly name="uname" minlength="2" type="text" required value="<?php echo $data['UserName']; ?>"/>

          </div>
        </div>
         <div class="form-group "  style="width:70%;">
          <label for="email" class="control-label col-lg-2">Email</label>
          <div class="col-lg-10">
            <input pattern="^[A-Za-z0-9-_]+(\.[_A-Za-z0-9-]+)*@[A-Za-z0-9]+(\.[A-Za-z0-9]+)*(\.[A-Za-z]{2,4})" class="form-control " id="email" name="email" type="email" value="<?php echo $data['Email']; ?>"/>
          </div>
        </div>
 <div class="form-group "  style="width:70%;">
          <label for="confirm_password" class="control-label col-lg-2">Password</label>
          <div class="col-lg-10">
            <input type="password" class="form-control " id="password" name="pass" value="<?php echo $data['Password']; ?>"  />
          </div>
        </div>
       
        
       <div class="form-group "  style="width:70%;">
          <div class="col-lg-offset-2 col-lg-10">
            <button class="btn btn-theme" type="submit" name="btn">Change</button>

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
</section><?php
if(isset($_POST["btn"]))
{
$c=$_POST["name"];
$p=$_POST["email"];
$a=$_POST["pass"];
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
      $q="update admin set Image='$path',Name ='$c',Email='$p',Password='$a' where Id='$id'";
      $res=mysqli_query($con,$q);
      if($res)
      {
        echo "<script> alert('Updated'); window.location.href='dashboard.php';</script>";
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
<!-- /MAIN CONTENT -->
<!--main content end-->