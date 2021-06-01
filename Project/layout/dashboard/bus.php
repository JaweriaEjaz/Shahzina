<?php
include('dashboard.php');
include('connect.php');
?>


<!--main content start-->
<section id="main-content">
 <div class="row mt">
  <div class="col-lg-12">
    <center><div class="form-panel"  style="width:80%;">
    <h2 style="text-align: center;"> Bus Insert</h2>
    <br>
    
      <center><div class="form">
          <form class="cmxform form-horizontal style-form" id="signupForm" method="POST" action="businsert.php" enctype="multipart/form-data">
       
              <div class="form-group "  style="width:70%;">
          <label for="seat" class="control-label col-lg-3" style="font-size: 16px;color:black;">Number Of Seats</label>
          <div class="col-lg-9">
            <input  class=" form-control" id="seat" name="seat" minlength="1" type="text"  required />
          </div>
            </div>
          

 
           <div class="form-group "  style="width:70%;">
              <label for="plate" class="control-label col-lg-3" style="font-size:16px;color:black;">Number Plate</label>
              <div class="col-lg-9">
               <input  class=" form-control" id="plate" name="plate" minlength="1" type="text" required />
               </div>
            </div>
            <div class="form-group "  style="width:70%;">
          <label for="purchase" class="control-label col-lg-3" style="font-size: 16px;color:black;">Purchase Date</label>
          <div class="col-lg-9">
            <input type="date" class=" form-control" id="purchase" name="date" minlength="1" type="text" required />
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
<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();   
});

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