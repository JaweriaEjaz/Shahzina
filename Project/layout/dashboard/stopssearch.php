<?php
include('connect.php');
if(isset($_POST['sp'])){
$searchtext=$_POST['sp'];
$q="select * from stops join route on stops.Route_Id  = route.Id  where Stops_Name LIKE '%$searchtext%'";
$rows=mysqli_query($con,$q);
}
else{
$q="select * from stops join route on stops.Route_Id  = route.Id ";
$rows=mysqli_query($con,$q);
}

?>

 <table class="table">
                <thead>
                  <tr>

<th> Route Name </th>
<th> Starting Point</th>
<th> Ending Point</th>
<th> Stops Name</th>
<th> Time</th>
<th> Distance</th>
<th> Service Price </th>
<th> Total Price </th>


<th><b> Edit </b></th>
<th><b> Delete </b></th>
</tr>
                </thead>
                <tbody>
<?php
while($data=mysqli_fetch_assoc($rows))
{
$q="select * from routecities join terminal on routecities.Cities=terminal.Terminal_Id where RC_Id='$data[Come_From]'";
$a=mysqli_query($con,$q);
$a1=mysqli_fetch_assoc($a);
$q="select * from routecities join terminal on routecities.Cities=terminal.Terminal_Id  where RC_Id='$data[Departure]'";
$s=mysqli_query($con,$q);
$s1=mysqli_fetch_assoc($s);

echo "
<tr>

<td>".$data['Route_Name']."</td>
<td>".$a1['City']."</td>
<td>".$s1['City']."</td>
<td>".$data['Stops_Name']."</td>
<td>".$data['Time']."</td>
<td>".$data['Distance']."</td>
<td>".$data['Price_Per_KM']."</td>
<td>".$data['Total_Price']."</td>

<td><a href='stopsedit.php?id=$data[Stops_Id]'>Edit</a></td>
<td><a href='stopsdelete.php?id=$data[Stops_Id]'>Delete</a></td>
</tr>";
}
?>
</table>