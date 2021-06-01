<?php
include('connect.php');
if(isset($_POST['r'])){
$searchtext=$_POST['r'];
$q="Select * from route join services on route.Service=services.Service_Id join bus on route.Bus=bus.Bus_Id join terminal on route.Starting_Point=terminal.Terminal_Id where Route_Name LIKE '%$searchtext%'";
$rows=mysqli_query($con,$q);
}
else{
$q="Select * from route join services on route.Service=services.Service_Id join bus on route.Bus=bus.Bus_Id join terminal on route.Starting_Point=terminal.Terminal_Id ";
$rows=mysqli_query($con,$q);
}
?>

   <table class="table">
                <thead>
                  <tr>
                 
<th> Starting point </th>
<th> Ending Point </th>
<th> Route Name</th>
<th> Service</th>
<th> Bus </th>


<th><b> Edit </b></th>
<th><b> Delete </b></th>
</tr>
                </thead>
                <tbody>
<?php
while($data=mysqli_fetch_assoc($rows)){
$q="select * from terminal where Terminal_Id='$data[Ending_Point]'";
$d=mysqli_query($con,$q);
$d1=mysqli_fetch_assoc($d);
$q="select * from terminal where Terminal_Id='$data[Starting_Point]'";
$s=mysqli_query($con,$q);
$s1=mysqli_fetch_assoc($s);

echo "
<tr>

<td>".$s1['City']."</td>
<td>".$d1['City']."</td>
<td>".$data['Route_Name']."</td>
<td>".$data['Service']."</td>
<td>".$data['Plate']."</td>

<td><a href='routeedit.php?id=$data[Id]'>Edit</a></td>
<td><a href='routedelete.php?id=$data[Id]'>Delete</a></td>
</tr>";
}
?></tbody>
</table></div></center>