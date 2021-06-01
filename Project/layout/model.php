<div class="container">
  
  <!-- Trigger the modal with a button -->
<?php
$query="select * from booking join dateview on booking.Datee_Id=dateview.Date_Id where  Client_Id='$_SESSION[UI]'";
$result=mysqli_query($con,$query);

?>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Your Post Bookings</h4>
        </div>
        <div class="modal-body">
         <div class="table-responsive">          
  <table class="table">
    <thead>
      <tr>
        <th>#</th>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Age</th>
        <th>City</th>
        <th>Country</th>
      </tr>
    </thead>
    <tbody>

      <tr>
        <td><?php $data[Book_Id] ?></td>
        <td>Anna</td>
        <td>Pitt</td>
        <td>35</td>
        <td>New York</td>
        <td>USA</td>
      </tr>
    </tbody>
  </table>
  </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="but" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>
<br>
<br>
<div class="container">
  
  <!-- Trigger the modal with a button -->
  <button type="button" class="but" data-toggle="modal" data-target="#myModal2">Current Booking</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
         
          <h4 class="modal-title">Your Booking</h4>
        </div>
        <div class="modal-body">
         <div class="table-responsive">          
  <table class="table">
    <thead>
      <tr>
        <th>Booking Id</th>
        <th>Seats</th>
        <th>Date</th>
        <th>Amount</th>
        <th>Status</th>
       
      </tr>
    </thead>
    <tbody>
    <?php while($data=mysqli_fetch_assoc($result))  { ?>
      <tr>
        <td><?php echo $data['Book_Id'] ?></td>
        <td><?php echo $data['Booking_Seats'] ?></td>
        <td><?php echo $data['Date'] ?></td>
        <td><?php echo $data['Booking_Price'] ?></td>
        <td><?php echo $data['Status'] ?></td>
        
      </tr>
<?php } ?>
    </tbody>
  </table>
  </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="but" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>
<br>
<br>
<div class="container">
  
  <!-- Trigger the modal with a button -->
  <a href = "cancelticket.php" type="button" class="but">Cancel Bookings </a>

  <!-- Modal -->
  <div class="modal fade" id="myModal3" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Your Post Bookings</h4>
        </div>
        <div class="modal-body">
         <div class="table-responsive">          
  <table class="table">
    <thead>
      <tr>
        <th>#</th>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Age</th>
        <th>City</th>
        <th>Country</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>Anna</td>
        <td>Pitt</td>
        <td>35</td>
        <td>New York</td>
        <td>USA</td>
      </tr>
    </tbody>
  </table>
  </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="but" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>