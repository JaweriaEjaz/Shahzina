<?php
include('dashboard.php');
include('connect.php');
$query="Select * from user";
if(isset($_GET['searchbtn']))
{
$searchtext=$_GET['search'];
$query="Select * from user where Name='$searchtext'";
}

$rows=mysqli_query($con,$query);

?>
 <section id="main-content">
      <section class="wrapper">
    
 <div class="row">
          <div class="col-md-12">
            <div class="content-panel">
              <h4><i class="fa fa-angle-center"></i> User Records</h4>
              <hr>

              <table class="table">
                <thead>
                  <tr>


<tr>
<th> Id </th>
<th> Name </th>
<th> Username </th>
<th> Email </th>
<th> Password</th>

<th> Edit </th>
<th> Delete </th>
</tr>
<?php
while($data=mysqli_fetch_assoc($rows)){

echo "
<tr>
<td>".$data['Id']."</td>
<td>".$data['Name']."</td>
<td>".$data['UserName']."</td>
<td>".$data['Email']."</td>
<td>".$data['Password']."</td>

<td><a href='useredit.php?id=$data[Id]'>Edit</a></td>
<td><a href='userdelete.php?id=$data[Id]'>Delete</a></td>
</tr>";
}
?>
</table>
<!--$quu="select * from UserName where Id='$data[UserName]'";
$rowsu=mysqli_query($con,$quu);
$datau=mysqli_fetch_array($rowsu);--