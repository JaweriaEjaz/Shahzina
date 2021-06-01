<?php
include('connect.php');
if(isset($_POST['b'])){
$searchtext=$_POST['b'];
$q="Select bus.Bus_Id,bus.Seats,bus.Bus_Service,bus.Status,bus.Plate,bus.Purchase_Date from bus join services on bus.Bus_Service=services.Service_Id where Plate LIKE '%$searchtext%'";
$rows=mysqli_query($con,$q);
}
else{
$q="Select bus.Bus_Id,bus.Seats,bus.Bus_Service,bus.Status,bus.Plate,bus.Purchase_Date from bus join services on bus.Bus_Service=services.Service_Id";
$rows=mysqli_query($con,$q);
}
?>

 <table class="table">
                <thead>
                  <tr>
    <th> Service Name </th> 
 <th> Status</th>      
<th> Seats </th>
<th> Bus No Plate </th>
<th>Purchase  Date</th>

<th><b> Edit </b></th>
<th><b> Delete </b></th>
</tr>
                </thead>
                <tbody>
<?php
while($data=mysqli_fetch_assoc($rows)){
$q="select * from services where Service_Id='$data[Bus_Service]'";
$p=mysqli_query($con,$q);
$d=mysqli_fetch_assoc($p);
echo "
<tr>
<td>".$d['Service']."</td>
<td>".$data['Status']."</td>
<td>".$data['Seats']."</td>
<td>".$data['Plate']."</td>
<td>".$data['Purchase_Date']."</td>
<td><a href='busedit.php?id=$data[Bus_Id]'>Edit</a></td>
<td><a href='busdelete.php?id=$data[Bus_Id]'>Delete</a></td>
</tr>";
}
?>
</table>