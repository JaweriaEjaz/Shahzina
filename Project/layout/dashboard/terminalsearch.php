<?php
include('connect.php');
if(isset($_POST['t'])){
$searchtext=$_POST['t'];
$q="select * from terminal where City LIKE '%$searchtext%'";
$rows=mysqli_query($con,$q);
}
else{
$q="select * from terminal";
$rows=mysqli_query($con,$q);
}
?>


 <table class="table">
                <thead>
                  <tr>
                   
<th> Id </th>
<th> Image </th>
<th> City </th>
<th> Contact</th>
<th> Address</th>

<th><b> Edit </b></th>
<th><b> Delete </b></th>
</tr>
                </thead>
                <tbody>



<?php
$qas="SELECT * FROM terminal";
$sel=mysqli_query($con,$qas);
while($data=mysqli_fetch_assoc($rows)){
echo "
<tr>
<td>".$data['Terminal_Id']."</td>
<td><img src='$data[Image]' height=55 width=55></td>
<td>".$data['City']."</td>
<td>".$data['Contact']."</td>
<td>".$data['Address']."</td>
<td><a href='terminaledit.php?id=$data[Terminal_Id]'>Edit</a></td>
<td><a href='terminaldelete.php?id=$data[Terminal_Id]'>Delete</a></td>
</tr>";
}
?>
</table>