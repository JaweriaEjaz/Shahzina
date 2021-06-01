
<section>
      
      <div class="form" style="width: 600px;">
        <form class="cmxform form-horizontal style-form" id="" method="POST" action="" enctype="multipart/form-data">

         
         <div class="form-group "  >
          <label for="firstname" class="control-label col-lg-2" style="color: #ffd000;">Name</label>
          <div class="col-lg-7">
            <input  class=" form-control" id="firstname" name="name" minlength="2" type="text" required value="<?php echo $data['Name']; ?>"/>
          </div>
        </div>
        <div class="form-group "  >
          <label for="lastname" class="control-label col-lg-2" style="color: #ffd000;">Username</label>
          <div class="col-lg-7">
            <input  class=" form-control" id="lastname" readonly  minlength="2" type="text" required value="<?php echo $data['UserName']; ?>"/>

          </div>
        </div>
         <div class="form-group "  >
          <label for="email" class="control-label col-lg-2" style="color: #ffd000;">Email</label>
          <div class="col-lg-7">
            <input pattern="^[A-Za-z0-9-_]+(\.[_A-Za-z0-9-]+)*@[A-Za-z0-9]+(\.[A-Za-z0-9]+)*(\.[A-Za-z]{2,4})" class="form-control " id="email" name="email" type="email" value="<?php echo $data['Email']; ?>"/>
          </div>
        </div>
    <div class="form-group " >
          
          <label for="confirm_password" class="control-label col-lg-2" style="color: #ffd000;">Password</label>
          <div class="col-lg-7">
            <input type="password" class="form-control " id="password" name="pass" value="<?php echo $data['Password']; ?>"  />
          </div>
        </div>
       
        
     
      </form>
   
</div>
</section>

<!-- /MAIN CONTENT -->
<!--main content end-->

<?php
include('connect.php');
if(isset($_POST('btn2')){
  $i=$_SESSION['UI'];
  $a=$_POST["name"];
 $e=$_POST["email"];
 $p=$_POST["pass"];

      $q="update user set Name ='$a',Email='$e',Password='$p' where Id='$i'";
      $res=mysqli_query($con,$q);
      if($res)
      {
        echo "<script> alert('Updated'); window.location.href='editprofile2.php';</script>";
      }
      else
      {
        echo "<script> alert('Error'); </script>";
      }
    
 
}

?>