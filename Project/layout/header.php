  
    <!--== Preloader Area End ==-->
<header id="header-area" class="fixed-top">
    <!--== Header Area Start ==-->
    <div id="header-top"  class="d-none d-xl-block" class="col-lg-14"  style="width:100%; height:60px; padding-top: 10px;">
            <div class="container" style="width:100%;">
                <div class="row">
                    <!--== Single HeaderTop Start ==-->
  <div class="col-lg-3 text-left" style=" color:#ffd000; font-size:21px;">
                        <i class="fa fa-clock-o"></i> 09:00 -18:00
                    </div>
                    <div class="col-lg-5 text-left">
                        <div class="dropdown show">
                            <i class="fa fa-phone" style=" color:#ffd000; font-size:21px;"></i>
                            <a class="dropdown-toggle" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style=" color:#ffd000; font-size:21px;">SRC-
 
<?php
if(session_id()==''){

    session_start();
}

include ('connect.php');
$qu="SELECT * FROM about";
$res=mysqli_query($con,$qu); 
while($data=mysqli_fetch_assoc($res)) 
{echo$data['ContactNo'] ;}
?>

                   </a>

                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink" style=" background-color: black; color:#ffd000;">
                              

<?php

$qu="SELECT * FROM terminal";
$res=mysqli_query($con,$qu);
while($data=mysqli_fetch_assoc($res)) 
{echo" 
<option class='dropdown-item'  style='background-color:black; color:#ffd000;'>

<li  >".$data['City']."---".$data['Contact']."</li>

</option>


";
}?>

                            </div>
                        </div>
                    </div>

                    <!--== Single HeaderTop End ==-->
                    <!--== Single HeaderTop Start ==-->

                    <!--== Single HeaderTop End ==-->
                    <!--== Single HeaderTop Start ==-->
                  
                    <!--== Single HeaderTop End ==-->
                    <!--== Single HeaderTop Start ==-->
 <div class="col-lg-3 text-center">
 <?php
                              if(!isset($_SESSION['US']))  {  ?> 
                        <a style="text-align:center;"href="Loginuser.php" id="hello"> Cancel Ticket</a>
                     <?php } else { ?>
                                   
                        <a style="text-align:center;"href="cancelticket.php" id="hello"> Cancel Ticket</a>
                    
 <?php } ?>

</div>
                   
<?php
                                 if(!isset($_SESSION['US']))  {  ?>
                    <!--== Social Icons Start ==-->
                    <div class=" text-right">
                        
                            <div class="dropdown show">
                                <img type="image" width="40" height="40" src="assetsmainlayout/img/cicon.png" class=" dropdown-toggle" id="dml" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
       
                               
                                <div class="dropdown-menu" aria-labelledby="dml" style=" background-color: black; color:#ffd000;">
                             

                                    <a  class="dropdown-item" style=" background-color: black; color:#ffd000;" href="register.php">Register</a>
                                    <a  class="dropdown-item" style=" background-color: black; color:#ffd000;" href="loginuser.php">Login</a>
                                </div>

   
                     <?php } else { ?>    

<div class="dropdown show" >
  <img  type="image"  width="40" height="40"  src="assetsmainlayout/img/cicon.png"  class=" dropdown-toggle"  id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

 <div class="dropdown-menu" aria-labelledby="dropdownMenuLink" style=" color:#ffd000; background-color:rgba(0,0,0,0.5);"  >
   <!--== Service Page Content Start ==-->

  <ul class"form-group" style="padding:10px 10px 0px 10px;  opacity: 1;">
  <?php


$qu="SELECT * FROM user where UserName='$_SESSION[US]'";
$res=mysqli_query($con,$qu);
$data=mysqli_fetch_assoc($res);

?>  <li style="text-align: right"> <img type="image" width:"30px" height:"30px" src="assetsmainlayout/img/64 (6).png"/> <a  style="color: #ffd000;font-size: 12px;" href="editprofile2.php">Edit Profile</a></li>
  <center> <br> 
   <li style="font-size: 22px; color:#ffd000;"><?php  echo $data['UserName']; ?></li>
     <br> <li style="font-size: 15px; color:white;"><?php  echo $data['Name']; ?></li>
    <li style="font-size: 15px; color:white;"><?php  echo $data['Email']; ?></li>
   
   </center>
   
    <br>
 
<center> <li><a href="logout.php"> <img type="image" id="blink" width:"20px" height:"20px" src="assetsmainlayout/img/64 (2).png"> </a></li></center>
  

  </ul>   
 


</div>
    </div>

 
 
   </div>
   </div>
<?php } ?>

                        </div>
                    </div> 
                </div>
                <!--== Social Icons End ==-->

            </div>
        </div>
         <div id="header-bottom" style="width:100%; height:90px;padding-top:5px;">
            <div class="container">
                <div class="row">
                    <!--== Logo Start ==-->
                    <div class="col-lg-4">
                        <ul>
                            <li class="active">
                                <a href="" class="logo">
                                    <img src="assetsmainlayout/img/Untitled-1.png" alt="JSOFT" style="padding:10px; margin-top:10px; width:150px; height:160px;">
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!--== Logo End ==-->
                    <!--== Main Menu Start ==-->
                    <div class="col-lg-8 d-none d-xl-block">
                        <nav class="mainmenu text-center">
                            <ul>
                                <li><a href="index.php" style=" color:#ffd000; font-size:18px;">Home</a> </li>
                                <li><a href="About.php" style=" color:#ffd000; font-size:18px;">About</a></li>
                                
                                <li><a href="terminallayout.php" style=" color:#ffd000; font-size:18px;">Terminal</a></li>
                              <li><a href="bus.php" style=" color:#ffd000; font-size:18px;">Buses</a></li>
<li><a href="servicelayout.php" style=" color:#ffd000; font-size:18px;">Services</a></li>
                                <li><a href="FAQ.php" style=" color:#ffd000; font-size:18px;">FAQ</a>
                                    <?php
                                 if(!isset($_SESSION['US']))  {  ?>
                                <li><a href="contact.php" style=" color:#ffd000; font-size:18px;">Contact</a></li> <?php } else { ?>
                                    <li><a href="enquiry.php" style=" color:#ffd000; font-size:18px;">Enquiry</a></li> <?php } ?>

                            </ul>
                        </nav>
                   </div>
                    <!--== Main Menu End ==-->
                </div>
            </div>
        </div>
        <!--== Header Bottom End ==-->
  </header>