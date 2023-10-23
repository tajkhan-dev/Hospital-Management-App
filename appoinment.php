<?php
session_start();



if(isset($_SESSION['username'])){

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
							<span class="text-white">Book your Seat</span>
							<h1 class="text-capitalize mb-5 text-lg">Appoinment</h1>
	
							<!-- <ul class="list-inline breadcumb-nav">
	
				<li class="list-inline-item"><a href="index.html" class="text-white">Home</a></li>
				<li class="list-inline-item"><span class="text-white">/</span></li>
				<li class="list-inline-item"><a href="#" class="text-white-50">Book your Seat</a></li>
			  </ul> -->
	
						</div>
					</div>
				</div>
			</div>
		</section>
		<?php include('components/appointment.php'); ?>
	
		
	
		<!-- footer Start -->
		<?php include('components/footer.php'); ?>
	
	
	
		<!-- 
		Essential Scripts
		=====================================-->
	
	
		<?php include('components/scripts.php'); ?>
	
	
	</body>
<?php

}else{
	header("Location:userAuth/login.php");
}
?>

