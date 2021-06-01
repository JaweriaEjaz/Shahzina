
<?php
include('connect.php');
if(isset($_POST['b'])){
$searchtext=$_POST['b'];
$a1="select * from terminal where city like '%$searchtext%'";
$b1=mysqli_query($con,$a1);
$c1=mysqli_fetch_assoc($b1);
if($c1!=null){
$a2="select * from routecities where Cities='$c1[Terminal_Id]'";
$b2=mysqli_query($con,$a2);
$c2=mysqli_fetch_assoc($b2);
if($c2!=null){
$a3="select * from stops where Come_From='$c2[RC_Id]'";
$b3=mysqli_query($con,$a3);
$c3=mysqli_fetch_assoc($b3);
if($c3!=null){
$query=" select * from dateview where Stop_Id='$c3[Stops_Id]' and Available_Seats>=1 and Date>= NOW()";
 $rows=mysqli_query($con,$query);
}}}}
else{
$query="select * from dateview where Available_Seats>=1 and Date>= NOW()";
$rows=mysqli_query($con,$query);
}
?>


<div class="col-md-12 col-md-offset-1">
    <div class="panel panel-default panel-table" style="background-color:black;  ">
             
              <div class="panel-body" >
            <center>    

<?php if(isset($rows)) { ?>

              <table class="table table-striped table-bordered table-list" >
                  <thead style="background-color:black; ">
                    <tr>
                       
<th style="background-color:black;color:#ffd000; width:150px;text-align: center; " >Starting Point</th>
<th style="background-color:black;color:#ffd000;text-align: center; " >Ending Point</th>
<th style="background-color:black;color:#ffd000;  text-align: center;"> Service </th>
<th style="background-color:black;color:#ffd000;text-align: center;  "> Seats </th>
<th style="background-color:black;color:#ffd000;  text-align: center;">Time</th>
<th style="background-color:black;color:#ffd000; text-align: center; ">Date</th>
<th style="background-color:black;color:#ffd000; text-align: center; " > Price </th>

<th style="background-color:black;color:#ffd000; text-align: center; "> Booking</th>
			
                    </tr> 
                  </thead>



                              <tbody style="background-color:black;color:white;  ">
<?php


while($data=mysqli_fetch_assoc($rows)){

$q="select * from stops join route  on  stops.Price_Per_KM=route.Id join services on route.Service=services.Service_Id where Stops_Id='$data[Stop_Id]'";
$r=mysqli_query($con,$q);
$r1=mysqli_fetch_assoc($r);


$q="select * from stops join routecities on  stops.Come_From=routecities.RC_Id  join terminal on routecities.Cities=terminal.Terminal_Id where Stops_Id='$data[Stop_Id]'";
$ad1=mysqli_query($con,$q);
$a12=mysqli_fetch_assoc($ad1);

$q="select * from stops join routecities on  stops.Departure=routecities.RC_Id  join terminal on routecities.Cities=terminal.Terminal_Id where Stops_Id='$data[Stop_Id]'";
$ad13=mysqli_query($con,$q);
$a123=mysqli_fetch_assoc($ad13);

$q="select * from stops where Stops_Id='$data[Stop_Id]'";
$ad=mysqli_query($con,$q);
$a2=mysqli_fetch_assoc($ad);



echo "



<tr style='background-color:black;color:#white; text-align: center;'>
<td>".$a12['City']."</td>
<td>".$a123['City']."</td>
<td>".$r1['Service']."</td>
<td>".$data['Available_Seats']."</td>
<td>".$a2['Time']."</td>
<td>".$data['Date']."</td>
<td>RS ".$a2['Total_Price']." /-</td>
<td><button class='btn ' style='background-color:#ffd000;color:white; '><a style='background-color:#ffd000;color:white; ' href='bookinglayout.php?id=".$data['Date_Id']."&p=".$a2['Total_Price']."&av=".$data['Available_Seats']."'>BOOK</a></button></td>
</tr>";
}
?>
                        </tbody>
                </table>

<?php } else { ?>
  <h3> No Data Found </h3>

<?php } ?>


