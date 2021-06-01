<?php
include('dashboard.php');
?>
<!--main content start-->
<section id="main-content">
 <div class="row mt">
  <div class="col-lg-12">
     <center><div class="form-panel"  style="width:80%;">
     <h2 style="text-align: center;">  City Info Insert</h2>
    <br>
      <center><div class="form">
        <form class="cmxform form-horizontal style-form" id="signupForm" method="POST" action="terminalinsert.php" enctype="multipart/form-data">

         <div class="form-group "  style="width:70%;">
          <label for="image" class="control-label col-lg-3" style="font-size: 16px;color:black;">Picture</label>
          <div class="col-lg-9">
            <br>
            <input accept="image/*" class=" form-control" id="pic" name="image"  type="file" required  />
          </div>
        </div>
        <div class="form-group "  style="width:70%;">
          <label for="city" class="control-label col-lg-3" style="font-size: 16px;color:black;">City</label>
          <div class="col-lg-9">
            <input class=" form-control" id="city" name="city" minlength="1" type="text" required>
          </div>
        </div>
       
         <div class="form-group "  style="width:70%;">
          <label for="address" class="control-label col-lg-3" style="font-size: 16px;color:black;">Address</label>
          <div class="col-lg-9">
            <input class=" form-control" id="address" name="address" minlength="1" type="text" required>
          </div>
        </div>
      
    <div class="form-group "  style="width:70%;">
          <label for="contact" class="control-label col-lg-3" style="font-size: 16px;color:black;">Contact</label>
          <div class="col-lg-9">
            <input class="form-control " id="ph" name="contact" type="text" minlength="1" required  />
          </div>
        </div>
         <div class="form-group "  style="width:70%;">
          <div class="col-lg-offset-2 col-lg-8">
            <button class="btn btn-theme" type="submit" name="btn">Insert</button>

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