<?php
include('connect.php');
?>

 

 <!--== Service Page Content Start ==-->

<div class="container" >
    <div class="row">
     <br>
    <br>
<div class="col-lg-12">
            <div class="section-title  text-center">
                 <center>
<br>



  </div>
    </div>
    <div class="col-md-12 col-md-offset-1">
    <div class="panel panel-default panel-table" style="background-color:black;  ">
             
              <div class="panel-body" >
            <center>    <table class="table table-striped table-bordered table-list" >
                  <thead style="background-color:black; ">
                    <tr>
                       
<th style="background-color:black;color:#ffd000;width:160px; text-align: center; " >Starting</th>
<th style="background-color:black;color:#ffd000;  text-align: center;">Destination</th>
<th style="background-color:black;color:#ffd000;text-align: center;  ">Service </th>
<th style="background-color:black;color:#ffd000;  text-align: center;">Price</th>
		
                    </tr> 
                  </thead>



                              <tbody style="background-color:black;color:white; text-align: center;  ">
<?php


$q="Select * from stops ";
$rows=mysqli_query($con,$q);

while($data=mysqli_fetch_assoc($rows)){
$q="select * from routecities join terminal on routecities.Cities=terminal.Terminal_Id where RC_Id='$data[Come_From]'";
$a=mysqli_query($con,$q);
$a1=mysqli_fetch_assoc($a);
$q="select * from routecities join terminal on routecities.Cities=terminal.Terminal_Id  where RC_Id='$data[Departure]'";
$s=mysqli_query($con,$q);
$s1=mysqli_fetch_assoc($s);

$q="select * from services where Service_Id";
$p=mysqli_query($con,$q);
$p1=mysqli_fetch_assoc($p);
echo "
<tr>

<td>".$a1['City']."</td>
<td>".$s1['City']."</td>
<td>".$p1['Service']."</td>
<td>".$data['Total_Price']."</td>
</tr>";
}
?>
                        </tbody>
                </table>
            </center>
         
              </div>
              
</div></div></div>