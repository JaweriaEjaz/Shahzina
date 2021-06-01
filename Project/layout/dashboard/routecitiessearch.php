<?php
include('connect.php');
if(isset($_POST['c'])){
$searchtext=$_POST['c'];
$q="Select * from routecities  join terminal on routecities.Cities=terminal.Terminal_Id  where City LIKE '%$searchtext%'";
$rows=mysqli_query($con,$q);
}
else{
$q="Select * from routecities";
$rows=mysqli_query($con,$q);
}
?>

  <table class="table">
                <thead>
                  <tr>
                 
<th> Route Id </th>
<th> Terminal Stops </th>


<th><b> Edit </b></th>
<th><b> Delete </b></th>
</tr>
                </thead>
                <tbody>
<?php
while($data=mysqli_fetch_assoc($rows)){
$q="select * from terminal where Terminal_Id='$data[Cities]'";
$p=mysqli_query($con,$q);
$d=mysqli_fetch_assoc($p);
$q="select * from route where Id='$data[Routes_Id]'";
$n=mysqli_query($con,$q);
$n1=mysqli_fetch_assoc($n);
echo "
<tr>

<td>".$n1['Route_Name']."</td>
<td>".$d['City']."</td>

<td><a href='routecitieedit.php?id=$data[RC_Id]'>Edit</a></td>
<td><a href='routecitiesdelete.php?id=$data[RC_Id]'>Delete</a></td>
</tr>";
}
?>
</table>