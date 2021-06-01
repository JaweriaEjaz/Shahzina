<?php
include('dashboard.php');
include('connect.php');
$q="select distinct * from route";
$rows=mysqli_query($con,$q);
?>

<!--main content start-->
<section id="main-content">
 <div class="row mt">
    <div class="col-lg-12">
     <center>
      <div class="form-panel"  style="width:80%;">
     <h2 style="text-align: center;"> Stop Insert</h2>
      <br>
      <div class="form">
          <center>
        <form  method="POST" action="stop2.php">
        <div class="form-group "  style="width:70%;">
  
          <label for="route" class="control-label col-lg-3" style="font-size: 16px;color:black;">Route</label>
          <div class="col-lg-7">
               <?php 
             
               echo "
               <div >
               <select  class='form-control' name='route'>";
               echo '<option value="0">Select</option>';
               while($data=mysqli_fetch_assoc($rows)){
               echo "<option class='form-group col-lg-2' value='$data[Id]'>".$data[Route_Name]." </option>";
               }
               echo "</select> 
               </div>";
               ?> 
           </div>
<button  class="btn btn-theme" class="control-label col-lg-2" type="submit" name="b">  GO</button>
         

        </div>
         </form></center>
         
       </div>
      <center> 
       <!-- /form-panel -->
   </div>
  </div>
</section>
<!-- /MAIN CONTENT -->
<!--main content end-->
 
