
<?php  
include "connection.php"
?>
<!DOCTYPE html>
<html lang="zxx">

<?php include('components/head.php'); ?>


<body id="top">
<?php include('components/navbar.php'); ?>


	


<section class="page-title bg-1">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">
          <span class="text-white">All Department</span>
          <h1 class="text-capitalize mb-5 text-lg">Care Department</h1>

          <!-- <ul class="list-inline breadcumb-nav">
            <li class="list-inline-item"><a href="index.html" class="text-white">Home</a></li>
            <li class="list-inline-item"><span class="text-white">/</span></li>
            <li class="list-inline-item"><a href="#" class="text-white-50">All Department</a></li>
          </ul> -->
        </div>
      </div>
    </div>
  </div>
</section>


<section class="section service-2">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-7 text-center">
				<div class="section-title">
					<h2>Award winning patient care</h2>
					<div class="divider mx-auto my-4"></div>
					<p>Lets know moreel necessitatibus dolor asperiores illum possimus sint voluptates incidunt molestias nostrum laudantium. Maiores porro cumque quaerat.</p>
				</div>
			</div>
		</div>

		<div class="row">
		<?php 

$query="SELECT * FROM `departments`";

$data=$conn->query($query);

while($row=mysqli_fetch_assoc($data)){
	

	?>

		
			<div class="col-lg-4 col-md-6 ">
				<div class="department-block mb-5">
					<img src="images/service/service-1.jpg" alt="" class="img-fluid w-100">
					<div class="content">
						<h4 class="mt-4 mb-2 title-color"><?php echo $row['deptname'] ?></h4>
						<p class="mb-4"><?php echo $row['deptdesc'] ?></p>
						
					</div>
				</div>
			</div>
			<?php } ?>

		
		</div>
	</div>
</section>

<!-- footer Start -->

<?php include('components/footer.php'); ?>

   

    <!-- 
    Essential Scripts
    =====================================-->

	<?php include('components/scripts.php'); ?>



  </body>
  </html>