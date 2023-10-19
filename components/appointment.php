<?php include("connection.php")  ?>
<section class="section appoinment">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 ">
                <div class="appoinment-content">
                    <img src="images/about/img-3.jpg" alt="" class="img-fluid">
                    <div class="emergency">
                        <h2 class="text-lg"><i class="icofont-phone-circle text-lg"></i>
                        +92 375 65981</h2>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-10 ">
                <div class="appoinment-wrap mt-5 mt-lg-0">
                    <h2 class="mb-2 title-color">Book appoinment</h2>
                    <p class="mb-4">Ready to book an appointment? Our user-friendly system ensures convenience. Secure your time with our experienced professionals today.</p>
                    <form id="#" class="appoinment-form" method="post" action="#">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <form action="#" method="post">
                                    <select name="deptselect" class="form-control" id="exampleFormControlSelect1" selected>
                                        <?php

                                        $query = "SELECT * FROM `departments`";

                                        $data = $conn->query($query);

                                        while ($row = mysqli_fetch_assoc($data)) {


                                        ?>
                                            <option value="doc1"><?php echo $row['deptname'] ?></option>

                                        <?php   }
                                      
                                        
                                        
                                        ?>
                                    </select>
                                    </form>

                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <form action="#" method="POST">

                                        <select class="form-control" id="exampleFormControlSelect2">
    
                                            <?php
    
                                            $query = "SELECT * FROM `doctors` WHERE deptid";
    
                                            $data = $conn->query($query);
    
                                            while ($row = mysqli_fetch_assoc($data)) {
    
    
                                            ?>
                                                <option><?php echo $row['deptname'] ?></option>
    
                                            <?php   } ?>
                                        </select>
                                    </form>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input name="date" id="date" type="text" class="form-control" placeholder="dd/mm/yyyy">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input name="time" id="time" type="text" class="form-control" placeholder="Time">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input name="name" id="name" type="text" class="form-control" placeholder="Full Name">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input name="phone" id="phone" type="Number" class="form-control" placeholder="Phone Number">
                                </div>
                            </div>
                        </div>
                        <div class="form-group-2 mb-4">
                            <textarea name="message" id="message" class="form-control" rows="6" placeholder="Your Message"></textarea>
                        </div>

                        <a class="btn btn-main btn-round-full" href="appoinment.html">Make Appoinment <i class="icofont-simple-right ml-2  "></i></a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>