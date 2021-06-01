<?php
include('dashboard.php');
include('connect.php');
$query="Select * from contact";

?>

 <section id="main-content">
        
           <section class="wrapper">
       
            <center> <div class="content-panel"  style="width:80%;">
            <h2 style="text-align: center;"></i>  Messages </h2>
  <div class="row">
          <div class="col-md-12">
              <hr>
              <table class="table">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                     <th>Message</th>
<th><b> Delete </b></th>
                  </tr>
                </thead>
                <tbody>
<?php
$qas="SELECT * FROM contact";
$sel=mysqli_query($con,$qas);
while($data=mysqli_fetch_assoc($sel)){
echo "<tr>
<td>".$data['Id']."</td>
<td>".$data['Name']."</td>
<td>".$data['Email']."</td>
<td>".$data['Message']."</td>
<td><a href='contactdelete.php?id=$data[Id]'>Delete</a></td>


</tr>";
}
?>
</table>



<!--$quu="select * from name where Id='$data[name]'";
$rowsu=mysqli_query($con,$quu);
$datau=mysqli_fetch_array($rowsu);
-->