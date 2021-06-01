<?php
include('connect.php');
if(isset($_POST['bb'])){
$searchtext=$_POST['bb'];
$q="Select * from booking join dateview on booking.Datee_Id=dateview.Date_Id join user on booking.Client_Id=user.Id where Book_Id LIKE '%$searchtext%'";
$rows=mysqli_query($con,$q);
}
else{
$q="Select * from booking join dateview on booking.Datee_Id=dateview.Date_Id join user on booking.Client_Id=user.Id";
$rows=mysqli_query($con,$q);
}
?>

    <table class="table">
                <thead>
                  <tr>
<th> Id </th>
<th> Client ID </th>
<th> Seats</th>
<th> Date</th>
<th> Price</th>
<th> Status</th>
<th> Refund Amount</th>
<th><b>  </b></th>
<th><b>  </b></th>
</tr>
                </thead>
                <tbody>
<?php
while($data=mysqli_fetch_assoc($rows)){
echo "
<tr>
<td>".$data['Book_Id']."</td>
<td>".$data['UserName']."</td>
<td>".$data['Booking_Seats']."</td>
<td>".$data['Date']."</td>
<td>".$data['Booking_Price']."</td>
<td>".$data['Status']."</td>
<td>".$data['AmountToRefund']."</td>
</tr>";
}
?>
</table>