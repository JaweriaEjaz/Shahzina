
    <section id="footer-area">
        <!-- Footer Widget Start -->
        <div class="footer-widget-area" style="back-ground:white;">
            <div class="container"  style="background-color: black; padding-top:19px; padding-bottom: 6px;">
                <div class="row">

 <!--== Footer Area Start ==-->        <!-- Single Footer Widget Start -->
                    <?php
include('connect.php');

$qu="SELECT * FROM about";
$res=mysqli_query($con,$qu);
while($data=mysqli_fetch_assoc($res)){echo"             <div class='col-lg-4 col-md-6'>
                        <img src='dashboard/$data[Image]'  style='height:210px; width:250px; margin-right:-40px;'>

                    </div>";}?>
                    <!-- Single Footer Widget End -->
                    <!-- Single Footer Widget Start -->
                    <div class="col-lg-4 col-md-6">

                        <div class="single-footer-widget">
                            <h2 style="margin-right:20px;">About Us</h2>
                            <div class="widget-body">
<?php

$qu="SELECT * FROM about";
$res=mysqli_query($con,$qu);
?>
                                <p style="font-size:16px;"><?php
 while($data=mysqli_fetch_assoc($res)) {echo $data['aboutfooter'];}?></p>

                            </div>


                        </div>
                    </div>
                    <!-- Single Footer Widget End -->
                    <!-- Single Footer Widget Start -->
                    <div class="col-lg-4 col-md-6">
                        <div class="single-footer-widget">
                            <h2 style="margin-right:20px;">    GET IN TOUCH</h2>
                            <div class="widget-body">
                                <div>

<?php
$qu="SELECT * FROM about";
$res=mysqli_query($con,$qu);
 while($data=mysqli_fetch_assoc($res)) {echo"
                    

                                    <ul style='margin-right:20px;' class='get-touch'>
                                        <li><i class='fa fa-map-marker'></i>    $data[Address]</li>
                                        <li><i class='fa fa-mobile'></i>  $data[ContactNo]</li>
                                        <li ><i class='fa fa-envelope'></i> $data[Email]</li>
                                    </ul> ";}?>
                                </div>
                                <div>

                                </div>
                               
                            </div>
                        </div>
                    </div>
                    <!-- Single Footer Widget End -->
                </div>
            </div>
        </div>
        <!-- Footer Widget End -->
        <!-- Footer Bottom Start -->
        <div class="footer-bottom-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <p>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;
                            <script>document.write(new Date().getFullYear());</script> All rights reserved |  by src travel agency <i class="fa fa-heart-o" aria-hidden="true"></i>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Bottom End -->
    </section>
    <!--== Footer Area End ==-->
    <!--== Scroll Top Area Start ==-->
    <div class="scroll-top">
        <img src="assetsmainlayout/img/1234.png" width="50" height="50" alt="JSOFT">
    </div>
    <!--== Scroll Top Area End ==-->