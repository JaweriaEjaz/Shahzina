<?php
include('connect.php');
if(isset($_POST['b'])){
$searchtext=$_POST['b'];
$q="Select * from bus where Plate LIKE '%$searchtext%'";
$rows=mysqli_query($con,$q);
}
else{
$q="Select * from bus";
$rows=mysqli_query($con,$q);
}
?>

 <table class="table">
                <thead>
                  <tr>
   
     
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
echo "
<tr>
<td>".$data['Seats']."</td>
<td>".$data['Plate']."</td>
<td>".$data['Purchase_Date']."</td>
<td><a href='busedit.php?id=$data[Bus_Id]'>Edit</a></td>
<td><a href='busdelete.php?id=$data[Bus_Id]'>Delete</a></td>
</tr>";
}
?>
</table>