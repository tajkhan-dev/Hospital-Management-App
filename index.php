<?php
session_start();



if(isset($_SESSION['username'])){

?>

<!DOCTYPE html>
<html lang="zxx">

<?php include('components/head.php'); ?>



<body id="top">


	<?php include('components/navbar.php'); ?>
	<!-- Slider Start -->
	<?php include('components/Hero-Slider.php'); ?>
	<!-- features -->
	<?php include('components/features.php'); ?>
	<!-- About -->
	<?php include('components/about.php'); ?>
	<!-- <section class="cta-section ">

	
</section> -->
	<!-- Appointment -->
	<?php include('components/appointment.php'); ?>
	<!-- testimonial -->
	<?php include('components/testimonial.php'); ?>
	<!-- partners -->
	<?php include('components/partner.php'); ?>
	<!-- footer Start -->
	<?php include('components/footer.php'); ?>
	<!-- 
    Essential Scripts
    =====================================-->
	<?php include('components/scripts.php'); ?>


</body>

</html>

<?php }else{
echo "<script>window.location.href='/Hospital-Management-App/userAuth/login.php'</script>"	;
}?>