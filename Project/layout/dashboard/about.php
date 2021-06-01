<?php
include('dashboard.php');
?>
<!--main content start-->
<section id="main-content">
 <div class="row mt">
  <div class="col-lg-12">
    <h4><center>Layout </center></h4>
    <div class="form-panel">
      <div class="form">
        <form class="cmxform form-horizontal style-form" id="signupForm" method="POST" action="aboutinsert.php" enctype="multipart/form-data">

        <div class="form-group ">
          <label for="firstname" class="control-label col-lg-2">Picture</label>
          <div class="col-lg-10">
            <input accept="image/*" class=" form-control" id="pic" name="image"  type="file" required  />
          </div>
        </div>
        <div class="form-group ">
          <label for="firstname" class="control-label col-lg-2">About</label>
          <div class="col-lg-10">
            <textarea cols="30" rows="10" class=" form-control" id="firstname" name="about" minlength="2" type="text" required></textarea>
          </div>
        </div>
       
      <div class="form-group ">
          <label for="confirm_password" class="control-label col-lg-2">Contact Number</label>
          <div class="col-lg-10">
            <input class="form-control " id="price" name="contactno" type="text" minlength="2" required  />
          </div>
        </div>

<div class="form-group ">
          <label for="confirm_password" class="control-label col-lg-2">Email</label>
          <div class="col-lg-10">
            <input class="form-control " id="price" name="email" type="text" minlength="2" required  />
          </div>
        </div>

<div class="form-group ">
          <label for="confirm_password" class="control-label col-lg-2">Address</label>
          <div class="col-lg-10"> 
            <input class="form-control " id="price" name="address" type="text" minlength="2" required  />
          </div>
        </div>
<div class="form-group ">
          <label for="confirm_password" class="control-label col-lg-2">Tag Line</label>
          <div class="col-lg-10"> 
            <input class="form-control " id="price" name="hr" type="text" minlength="2" required  />
          </div>
        </div>
        <div class="form-group">
          <div class="col-lg-offset-2 col-lg-10">
            <button class="btn btn-warning" type="submit" name="btn">Save</button>

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