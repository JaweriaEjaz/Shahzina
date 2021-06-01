<?php
include('connect.php');
if(isset($_POST['q'])){
$searchtext=$_POST['q'];
$q="select * from services where Service LIKE '%$searchtext%'";
$rows=mysqli_query($con,$q);
}
else{
$q="select * from services";
$rows=mysqli_query($con,$q);
}
?>

<table class="table">
<thead>
<tr>
<th> Service Name </th>
<th>Service Price </th>


<th><b> Edit </b></th>
<th><b> Delete </b></th>
</tr>
</thead>
<tbody>
<?php

while($data=mysqli_fetch_assoc($rows))
{
echo "
<tr>
<td>".$data['Service']."</td>
<td>".$data['Price']."</td>
<td><a href='serviceedit.php?id=$data[Service_Id]'>Edit</a></td>
<td><a href='servicedelete.php?id=$data[Service_Id]'>Delete</a></td>
</tr>";
}
?></tbody>
</table>