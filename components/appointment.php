<?php include("connection.php")?>
<section class="section appoinment">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 ">
                <div class="appoinment-content">
                    <img src="images/about/img-3.jpg" alt="" class="img-fluid">
                    <div class="emergency">
                        <h2 class="text-lg"><i class="icofont-phone-circle text-lg"></i>+23 345 67980</h2>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-10 ">
                <div class="appoinment-wrap mt-5 mt-lg-0">
                    <h2 class="mb-2 title-color">Book appoinment</h2>
                    <p class="mb-4">Mollitia dicta commodi est recusandae iste, natus eum asperiores corrupti qui velit . Iste dolorum atque similique praesentium soluta.</p>
                    <form id="#" class="appoinment-form" method="post" action="#">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                   
                                        <select class="form-control" id="departselect" selected>

                                            <option value="">Select your country</option>






                                        </select>
                              

                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <select name="doc" class="form-control" id="docselect">
                                            <option value="">Select Doctor</option>
                                        </select>
                                 
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input name="date" id="date" type="text" class="form-control" placeholder="dd/mm/yyyy">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input name="myname" id="name" type="text" class="form-control" placeholder="enter your name">
                                </div>
                            </div>
                        </div>
                        <div class="form-group-2 mb-4">
                            <textarea name="message" id="message" class="form-control" rows="6" placeholder="Your Message"></textarea>
                        </div>


<input type="submit" value="submit" name="submit">

                    </form>
                    <?php 
                    if(isset($_POST['submit'])){

                        $name=$_POST['myname'];
                        $message=$_POST['message'];
                        $date=$_POST['date'];
                        $docid=$_POST['doc'];

                        $sql="INSERT INTO `appointments` (`patient_name`,`message`,`date`,`docid`)VALUES('$name','$message','$date','$docid')";
                        $result=$conn->query($sql);

                        echo "<script>
                        alert('appointment scheduled')
                        window.location.href='index.php'
                        </script>";
                    }                    
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>



<script>
    $(document).ready(function($) {
        function loadDepartment(type, deptid) {

            $.ajax({
                url: "getdept.php",
                type: "POST",
                data: {
                    type: type,
                    id: deptid
                },
                success: function(data) {
                    if (type === "doc") {

                        $("#docselect").html(data);
                    } else {
                        $("#departselect").append(data);

                    }
                },
                error: function(xhr, status, error) {
                    console.log("AJAX Error: " + error);
                }
            });
        }
        loadDepartment();
        $("#departselect").on("change", function() {
            var dept = $("#departselect").val()

            loadDepartment("doc", dept)

        })
    });
</script>