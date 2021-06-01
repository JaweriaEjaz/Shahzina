<?php
include('dashboard.php');
include('connect.php');
$query="Select * from enquiry";

?>

 <section id="main-content">
      <section class="wrapper">

       
            <center> <div class="content-panel"  style="width:80%;">
            <h2 style="text-align: center;"></i>  Enquiry </h2>
  <div class="row">
          <div class="col-md-12">
              <hr>
              <table class="table">
                <thead>
                  <tr>
                    
                    <th>Name</th>
                    <th>Email</th>
                           <th>Booking ID</th>
                     <th>Enquiry</th>
                  </tr>
                </thead>
                <tbody>
<?php
$qas="SELECT * FROM enquiry";
$sel=mysqli_query($con,$qas);
while($data=mysqli_fetch_assoc($sel)){
echo "<tr>

<td>".$data['Name']."</td>
<td>".$data['Email']."</td>
<td>".$data['Customer_Id']."</td>
<td>".$data['Customer_Enquiry']."</td>
<td><a href='enquirymail.php?id=$data[Id]'>Respond</a></td>
<td><a href='enquirydelete.php?id=$data[Id]'>Delete</a></td>

</tr>";
}
?>
</table>



<!--$quu="select * from name where Id='$data[name]'";
$rowsu=mysqli_query($con,$quu);
$datau=mysqli_fetch_array($rowsu);
-->