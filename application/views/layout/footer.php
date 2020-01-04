</div>
<div class="footer">
		<nav>
			<ul class="nav-buttom">
				<li><a class="page-scroll scroll" href="#home">Home</a></li>
				<li><a class="page-scroll scroll" href="#contact">Contact</a></li>
			</ul>
		</nav>
		<div class="container">
		<div class="colr-row col-md-6  ">
			
			
			<div class="col-md-6 col-sm-6 col-xs-6 copyright bottm-grid">
				<h3>Ikuti Kami</h3>
				<div class="icons">
					<ul>
						<li><a href="#"><span class="fa fa-facebook"></span></a></li>
						<li><a href="#"><span class="fa fa-twitter"></span></a></li>
						<li><a href="#"><span class="fa fa-rss"></span></a></li>
						<li><a href="#"><span class="fa fa-vk"></span></a></li>
					</ul>

				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="clearfix"> </div>
			</div>
			
			<!-- //Copyright -->
			<div class="clearfix"> </div>
		</div>
		</div>
	</div>
	<footer>
		<p>&copy;FebriMamluatulUlumi2018 </p>
	</footer>
	<!--menu script-->
	<script type='text/javascript' src='<?php echo base_url() ?>assets/js/jquery-2.2.3.min.js'></script>
	<script src="<?php echo base_url() ?>assets/bootstrap/js/bootstrap.js"></script>
	<!--//menu script-->
	<!--FlexSlider banner-->

	<script defer src="<?php echo base_url() ?>assets/js/jquery.flexslider.js"></script>
	<script type="text/javascript">
		$(window).load(function () {
			$('.flexslider').flexslider({
				animation: "slide",
				start: function (slider) {
					$('body').removeClass('loading');
				}
			});
		});
	</script>
	<!--End-slider-script-->
	<!-- OnScroll-Number-Increase-JavaScript -->
	<script src="<?php echo base_url() ?>assets/js/jquery.waypoints.min.js"></script>
	<script src="<?php echo base_url() ?>assets/js/jquery.countup.js"></script>
	<script>
		$('.counter').countUp();
	</script>
	<!-- //OnScroll-Number-Increase-JavaScript -->
	<script src="<?php echo base_url() ?>assets/js/jquery.chocolat.js"></script>

	<!--light-box-files -->
	<script type="text/javascript">
		$(function () {
			$('.w3_agile_gallery_grid a').Chocolat();
		});
	</script>
	<!-- //gallery -->
	<!--client carousel -->
	<script src="<?php echo base_url() ?>assets/js/owl.carousel.js"></script>
	<script>
		$(document).ready(function () {
			$("#owl-demo").owlCarousel({
				items: 1,
				itemsDesktop: [768, 1],
				itemsDesktopSmall: [414, 1],
				lazyLoad: true,
				autoPlay: true,
				navigation: true,

				navigationText: false,
				pagination: true,

			});

		});
	</script>
	<!-- start-smoth-scrolling -->
	<script type="text/javascript" src="<?php echo base_url() ?>assets/js/move-top.js"></script>
	<!-- <script type="text/javascript" src="<?php echo base_url() ?>assets1/js/easing.js"></script> -->
	<script type="text/javascript" src="<?php echo base_url() ?>assets/jquery/jquery.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>assets/bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({ scrollTop: $(this.hash).offset().top }, 1000);
			});
		});
	</script>
	<script type="text/javascript">
		$(document).ready(function () {

			$().UItoTop({ easingType: 'easeOutQuart' });

		});
	</script>
	<!-- //here ends scrolling icon -->
</body>

</html>