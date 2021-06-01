<?php
include('dashboard.php');
include('connect.php');





?>
 <section id="main-content">
      <section class="wrapper">
    
  <div class="row">
          <div class="col-md-12">
            <div class="content-panel">
              <h2><i class="fa fa-angle-center"></i> About</h2>
              <hr>
              <table class="table">
                <thead>
                  <tr>
                   
<th> Id </th>
<th> Image </th>
<th> About </th>
<th> Contact</th>
<th> Email</th>
<th> Address</th>
<th> Tag Line</th>


<th><b> Edit </b></th>

</tr>
                </thead>
                <tbody>



<?php
$qas="SELECT * FROM about";

$rows=mysqli_query($con,$qas);
while($data=mysqli_fetch_assoc($rows)){
echo "
<tr>
<td>".$data['Id']."</td>
<td><img src='$data[Image]' height=55 width=55></td>
<td>".$data['About']."</td>
<td>".$data['ContactNo']."</td>
<td>".$data['Email']."</td>
<td>".$data['Address']."</td>
<td>".$data['aboutfooter']."</td>
<td><a href='aboutedit.php?id=$data[Id]'>Edit</a></td>

</tr>";
}
?>
</table>