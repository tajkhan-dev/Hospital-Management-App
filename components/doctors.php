


<?php include('./connection.php') ?>



<div class="col-12 text-center  mb-5">
				<div class="btn-group btn-group-toggle " data-toggle="buttons">
					<label class="btn active ">
						<input type="radio" name="shuffle-filter" value="all" checked="checked" />All Department
					</label>



<?php  

$cater_GET = "SELECT * FROM `departments`";

$res = $conn->query($cater_GET);

while($row = mysqli_fetch_assoc($res)){

?>

<label class="btn">



<input type="radio" name="shuffle-filter" value="cat<?php echo $row['deptid']?>" />

<?php echo $row['deptname']?>

</label>

<?php }?>


				</div>
			</div>

			<div class="row shuffle-wrapper portfolio-gallery">

                <?php  

$singleDoc_GET = "SELECT doctors.*,departments.deptname FROM `doctors` JOIN  departments ON  doctors.deptid = departments.deptid";


$resD = $conn->query($singleDoc_GET);


while($rowD = mysqli_fetch_assoc($resD)  ){

?>


<!-- 🔥 Magical Line ! -->
<!-- data-groups="[&quot;cat10&quot;,&quot;cat20&quot;]" -->

<div class="col-lg-3 col-sm-6 col-md-6 mb-4 shuffle-item" data-groups="[&quot;cat<?php echo $rowD['deptid']?>&quot;]">
					<div class="position-relative doctor-inner-box">
						<div class="doctor-profile">
							<div class="doctor-img">
								<img src="<?php echo $rowD['docpic']; ?>" alt="doctor-image" class="img-fluid w-100">
							</div>
						</div>
						<div class="content mt-3">
							<h4 class="mb-0"><a href="doctor-single.html">
                                <?php echo $rowD['docname']?></a></h4>
							<p><?php 

	echo $rowD['deptname'];

                            ?></p>
						</div>  
					</div>
				</div>
                
                <?php }?>
                
			</div>