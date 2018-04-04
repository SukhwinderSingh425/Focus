<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
session_start();
include_once("vars.php");
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Medical</title>
<?php
		include_once("extfiles.php");
	?>
	
</head>

<body>
	<div class="banner-w3" id="home">
		
		<?php
		include_once("header.php");
		
		?>


		<div class="container">

			<!-- header -->
			<header>

				<div class="flexslider-info">
					<section class="slider">
						<div class="flexslider">
							<ul class="slides">
								<li>
									<div class=" w3l-info">
										<div class="col-md-8  info-lleft-side">
											<h4>Welcome To Hospital</h4>
											<p>Vivamus sed porttitor felis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis
												egestas.Sed lorem enim, rutrum quis diam nec.</p>
										</div>
										<div class=" col-md-4 w3layouts_more-buttn">
											<a href="#" data-toggle="modal" data-target="#myModal">Read More</a>
										</div>
									</div>

								</li>
								<li>
									<div class=" w3l-info">
										<div class="col-md-8 info-lleft-side">
											<h4>Better Health Care</h4>
											<p>Vivamus sed porttitor felis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis
												egestas.Sed lorem enim, rutrum quis diam nec.</p>
										</div>
										<div class=" col-md-4 w3layouts_more-buttn">
											<a href="#" data-toggle="modal" data-target="#myModal">Read More</a>
										</div>
									</div>
								</li>
								<li>
									<div class=" w3l-info">
										<div class="col-md-8 info-lleft-side">
											<h4>Get YourSelf Fixed</h4>
											<p>Vivamus sed porttitor felis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis
												egestas.Sed lorem enim, rutrum quis diam nec.</p>
										</div>
										<div class=" col-md-4 w3layouts_more-buttn">
											<a href="#" data-toggle="modal" data-target="#myModal">Read More</a>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</section>
				</div>
			</header>
		</div>
		<div class="clearfix"> </div>
	</div>

	<!-- //header -->
	<!-- modal -->
	<div class="modal about-modal fade" id="myModal" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title">Medically</h4>
				</div>
				<div class="modal-body">
					<div class="out-info">
						<img src="images/g1.jpg" alt="" />
						<p>Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae,
							eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellu</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //modal -->
	
	<!--services 
	<div class="services " id="service">
		<div class="container">
			<h3 class="title tit-clr">OUR FACILITIES</h3>
			<div class="stats-info agileits w3layouts">
				<div class="col-md-3 col-sm-6 col-xs-6 agileits w3layouts stats-grid stats-grid-1">
					<div class="ser-icone"> <span class="fa fa-users font" aria-hidden="true"></span>
					</div>
					<div class=" agileits-w3layouts counter">3500</div>
					<div class="stat-info-w3ls">
						<h4 class="agileits w3layouts">Staff</h4>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-6 agileits w3layouts stats-grid stats-grid-2">
					<div class="ser-icone"> <span class="fa fa-medkit font" aria-hidden="true"></span>
					</div>
					<div class=" agileits-w3layouts counter">650</div>
					<div class="stat-info-w3ls">
						<h4 class="agileits w3layouts ">Branches</h4>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-6 stats-grid agileits w3layouts stats-grid-3">
					<div class="ser-icone"> <span class="fa fa-user-md font" aria-hidden="true"></span>
					</div>
					<div class=" agileits-w3layouts counter">1021</div>
					<div class="stat-info-w3ls">
						<h4 class="agileits w3layouts ">Doctors</h4>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-6 stats-grid agileits w3layouts stats-grid-4">
					<div class="ser-icone"> <span class="fa fa-heart font" aria-hidden="true"></span>
					</div>
					<div class=" agileits-w3layouts counter">1010</div>
					<div class="stat-info-w3ls">
						<h4 class="agileits w3layouts">operations</h4>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	
	
	-->
	<!--gallery
	<div class="gallery titl-bottom" id="gallery">

		<h3 class="title">Laboratory</h3>
		<div class="gallery-info">
			<div class="col-md-6 col-sm-6 gallery-grids glry-grid1 ">
				<div class="gallery-grids-top w3_agile_gallery_grid ">
					<a class="b-link-stripe" href="images/g4.jpg" data-lightbox="example-set" data-title="Making your life easier. ">
							<img src="images/g4.jpg" class="img-responsive" alt="">
							<div class="b-wrapper">			
							</div>
						</a>
				</div>
				<div class="gallery-grids-top">
					<div class="col-md-6 col-sm-6 bottom-grids w3_agile_gallery_grid">
						<a class="b-link-stripe" href="images/g1.jpg" data-lightbox="example-set" data-title="Making your life easier.">
								<img src="images/g1.jpg" class="img-responsive" alt="">
								<div class="b-wrapper">			
								</div>
							</a>
					</div>
					<div class="col-md-6 col-sm-6 bottom-grids w3_agile_gallery_grid">
						<a class="b-link-stripe" href="images/g2.jpg" data-lightbox="example-set" data-title="Making your life easier.">
								<img src="images/g2.jpg" class="img-responsive" alt="">
								<div class="b-wrapper">				
								</div>
							</a>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="col-md-3 col-sm-3 gallery-grids w3_agile_gallery_grid glry-grid2">
				<a class="b-link-stripe " href="images/g3.jpg" data-lightbox="example-set">
						<img src="images/g3.jpg" class="img-responsive" alt="">
						<div class="b-wrapper">			
						</div>
					</a>
			</div>
			<div class="col-md-3 col-sm-3 gallery-grids w3_agile_gallery_grid glry-grid3">
				<a class="b-link-stripe" href="images/g6.jpg" data-lightbox="example-set">
						<img src="images/g6.jpg" class="img-responsive" alt="">
						<div class="b-wrapper">				
						</div>
					</a>
				<a class="b-link-stripe" href="images/g5.jpg" data-lightbox="example-set">
						<img src="images/g5.jpg" class="img-responsive" alt="">
						<div class="b-wrapper">			
						</div>
					</a>
			</div>
			<div class="clearfix"></div>

		</div>

	</div>
	
	-->
	<!-- team
	
	<div class="team agileits" id="team">
		<div class="team-info">
			<div class="container">
				<h3 class="title ">Our specialists</h3>
				<div class="team-row">
					<div class="col-md-4 col-sm-4 col-xs-4 team-grids">
						<div class="team-agile-img">
							<a href="#"><img src="images/t1.jpg" alt="img"></a>

							<div class="view-caption">
								<div class="t-info">
									<h5>Director</h5>
									<p>John willky</p>
								</div>
								<ul>
									<li><a href="#"><span class="fa fa-facebook"></span></a></li>
									<li><a href="#"><span class="fa fa-twitter"></span></a></li>
									<li><a href="#"><span class="fa fa-google-plus"></span></a></li>
								</ul>
							</div>

						</div>

					</div>
					<div class="col-md-4 col-sm-4 col-xs-4 team-grids">
						<div class="team-agile-img">
							<a href="#"><img src="images/t2.jpg" alt="img"></a>
							<div class="view-caption">
								<div class="t-info">
									<h5>HOD</h5>
									<p>Lara kent</p>
								</div>
								<ul>
									<li><a href="#"><span class="fa fa-facebook"></span></a></li>
									<li><a href="#"><span class="fa fa-twitter"></span></a></li>
									<li><a href="#"><span class="fa fa-google-plus"></span></a></li>
								</ul>
							</div>
						</div>

					</div>


					<div class="col-md-4 col-sm-4 col-xs-4 team-grids">
						<div class="team-agile-img">
							<a href="#"><img src="images/t3.jpg" alt="img"></a>
							<div class="view-caption">
								<div class="t-info">
									<h5>Psyhologist</h5>
									<p>Jack will</p>
								</div>
								<ul>
									<li><a href="#"><span class="fa fa-facebook"></span></a></li>
									<li><a href="#"><span class="fa fa-twitter"></span></a></li>
									<li><a href="#"><span class="fa fa-google-plus"></span></a></li>
								</ul>
							</div>
						</div>

					</div>

				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	
	-->
	<!--testimonials
	
	<div class="testimonials" id="clients">
		<h3 class="title tit-clr">OUR CLIENTS</h3>
		<div class="container">
			<div class="clients-inn">
				<div class="clients_agile_slider">
					<div id="owl-demo" class="owl-carousel owl-theme">
						<div class="item">
							<div class="agile_tesimonials_content">
								<div class="about-midd-main">
									<img class="agile-img" src="images/c1.jpg" alt="img">
									<h4>Ketty way</h4>
									<p> Lorem ipsum adipiscing elit, sed do eiusmod idunt ut labore. sed do eiusmod </p>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="agile_tesimonials_content">
								<div class="about-midd-main">
									<img class="agile-img" src="images/c2.jpg" alt="img">
									<h4>Cleark Hill</h4>
									<p> Lorem ipsum adipiscing elit, sed do eiusmod idunt ut labore. sed do eiusmod </p>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="agile_tesimonials_content">
								<div class="about-midd-main">
									<img class="agile-img" src="images/c3.jpg" alt="img">
									<h4>Willson Doe</h4>
									<p> Lorem ipsum adipiscing elit, sed do eiusmod idunt ut labore. sed do eiusmod </p>
								</div>
							</div>
						</div>

					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	-->
	<!--subscribe-->
	<div class="subscribe text-center clr3">
		<div class="container">
			<h3 class="title">Subscribe</h3>
			<p>Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac,
			</p>
			<form action="#" method="post">
				<div class="user">
					<input type="email" name="Email" placeholder="Email Address" required="">
				</div>
				<input type="submit" value="Subscribe">
			</form>
		</div>
	</div>
	<!--//subscribe-->
	

	<?php
		include_once("footer.php");
	?>
</body>

</html>