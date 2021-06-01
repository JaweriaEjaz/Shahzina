<?php

include('connect.php');


if(isset($_POST['d'])){
$searchtext=$_POST['d'];
$q="Select * from dateview   join stops on dateview.Stop_Id=stops.Stops_Id  where Date LIKE '%$searchtext%'";
$r=mysqli_query($con,$q);
}
else{
$q="Select * from dateview   join stops on dateview.Stop_Id=stops.Stops_Id  where Date ";

$r=mysqli_query($con,$q);
}
?>

              <table class="table">
                <thead>
                  <tr>
                   
<th> Stop Name </th>
<th> Date </th>
<th> Available Seat </th>


<th><b> Edit </b></th>
<th><b> Delete </b></th>
</tr>
                </thead>
                <tbody>
<?php
while($data=mysqli_fetch_assoc($r)){

echo "
<tr>
<td>".$data['Stops_Name']."</td>
<td>".$data['Date']."</td>
<td>".$data['Available_Seats']."</td>

<td><a href='dateedit.php?id=$data[Date_Id]'>Edit</a></td>
<td><a href='datedelete.php?id=$data[Date_Id]'>Delete</a></td>
</tr>";
}
?>
</table>