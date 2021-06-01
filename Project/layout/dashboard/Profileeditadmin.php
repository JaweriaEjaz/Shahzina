<?php
include('dashboard.php');

?>
<section id="main-content">
 <div class="row mt">
  <div class="col-lg-12">
    <center><div class="form-panel"  style="width:80%;">
     <h2 style="text-align: center;"></i> Insert User Name </h4>
   
    <br>
<br>
       <center> <form class="cmxform form-horizontal style-form" id="signupForm" method="POST" action="" enctype="multipart/form-data">

       
       <div class="form-group "  style="width:60%;">
        <center>  <label for="firstname" style="font-size: 16px;color:black;" >User Name</label></center>
     <br>
            <div style="width:60%;">
          <input  class=" form-control" id="firstname" " name="id"  minlength="2" type="text" required />
           </div>  
        </div>
        
        
        <div class="form-group" style="width:70%;">
          <div class="col-lg-offset-2 col-lg-8">
            <button class="btn btn-theme" type="submit" name="btn">Search</button>

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