<!DOCTYPE html>
<html lang="en"><!-- Basic -->
<?php  $this->load->view('include/allheaderfile'); ?>
<body id="home" data-spy="scroll" data-target="#navbar-wd" data-offset="98">

	<!-- LOADER -->
     <!-- <div id="preloader">
		<div class="loader">
			<img src="assets/images/preloader.gif" alt="" />
		</div>
    </div>end loader -->
    <!-- END LOADER -->
	<?php $this->load->view('include/topbar'); ?>
	<?php $this->load->view('include/header'); ?>
	
	<!-- Start Banner -->
	<div class="ulockd-home-slider">
		<div class="container-fluid">
			<div class="row">
				<div class="pogoSlider" id="js-main-slider">
					<div class="pogoSlider-slide" data-transition="fade" data-duration="1500" style="background-image:url(assets/images/slider/01.png);">
						<div class="lbox-caption pogoSlider-slide-element">
							
						</div>
					</div>
					<div class="pogoSlider-slide" data-transition="fade" data-duration="1500" style="background-image:url(assets/images/slider/06.jpg);">
						<div class="lbox-caption pogoSlider-slide-element">
													</div>
					</div>
					<div class="pogoSlider-slide" data-transition="fade" data-duration="1500" style="background-image:url(assets/images/slider/03.png);">
						<div class="lbox-caption pogoSlider-slide-element">
							
						</div>
						
					</div>
				</div><!-- .pogoSlider -->
			</div>
		</div>
	</div>
	<!-- End Banner -->
	<?php	$this->load->view('student/course'); ?>
	<?php	$this->load->view('student/about'); ?>
	
	

	
	<!-- Start Footer -->
	<?php $this->load->view('include/footer'); ?>
	<!-- End Footer -->

	<?php //  $this->load->view('include/Contact'); ?>
	
	</body>
</html>