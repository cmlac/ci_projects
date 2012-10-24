<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
	<!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>Projects</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width">

		<link rel="stylesheet" href="<?php echo base_url('css/bootstrap.min.css'); ?>">
		<style>
			body {
				padding-top: 60px;
				padding-bottom: 40px;
			}
		</style>
		<link rel="stylesheet" href="<?php echo base_url('css/main.css'); ?>">
		<link rel="stylesheet" href="<?php echo base_url('css/bootstrap-responsive.min.css'); ?>">
		<!--[if lt IE 9]>
		<script src="js/vendor/html5-3.6-respond-1.1.0.min.js"></script>
		<![endif]-->

	</head>

	<body style='background-color: #EDEDED;'>

		<?php $this -> load -> view('includes/top_bar'); ?>

		<div class="container">
			<!--[if lt IE 7]>
			<p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
			<![endif]-->

			<!-- This code is taken from http://twitter.github.com/bootstrap/examples/hero.html -->
			<text>
				<?php $this -> load -> view('includes/text'); ?>
			</text>

			<header>
				<?php $this -> load -> view('includes/header'); ?>
			</header>

			<div class="container">

				<div class="container-fluid">
					<div class="row-fluid">
						<div class="span2">
							<h1>Testing</h1>
							<hr>
							<p class="text-error">
								Camberwell Malvern Little Athletics Centre [CMLAC] is open to all children aged 5-14 years.
								<br />
								All children compete for fun, fitness and family enjoyment and are encouraged to participate in events in a
								<br />
								positive manner, regardless of athletic capability. Little Athletics takes place on Saturday mornings from
								<br />
								October to March, excluding the Christmas holiday period.
								<br />
							</p>
							<button class="btn btn-large btn-primary" type="button ">
								Register Here
							</button>
						</div>
						<body>
							<div class="span10">
								<div id="myCarousel" class="carousel slide">
									<!-- Carousel items -->
									<div class="carousel-inner">
										<div class="active item">
											<img src='img/Athletics2.jpg' alt=''>
											<div class="carousel-caption">
												<p>
													This is an Test 1 pics for the SlieShow
												</p>
											</div>
										</div>
										<div class="item">
											<img src='img/1-athletics.jpg' alt=''>
											<div class="carousel-caption">
												<p>
													This is an Test 2 pics for the SlieShow
												</p>
											</div>
										</div>
										<div class="item">
											<img src='img/Athletics2.jpg' alt=''>
											<div class="carousel-caption">
												<p>
													This is an Test 3 pics for the SlieShow
												</p>
											</div>
										</div>
									</div>
									<!-- Carousel nav -->
									<a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
									<a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
								</div>
							</div>
					</div>
				</div>
				<hr>
				<!-- Example row of columns -->
				<div class="span11">
				 
				</div>
				<canvas id="w" width="200" height="200"></canvas>
				<hr>

				<footer>
					<?php $this -> load -> view('includes/footer'); ?>
				</footer>

			</div>
			<!-- /container -->

			<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
			<script>
window.jQuery || document.write('<script src="<?php echo base_url('js/vendor/jquery-1.8.2.min.js'); ?>
				"><\/script>')
			</script>
			<script>
				var _gaq = [['_setAccount', 'UA-XXXXX-X'], ['_trackPageview']]; ( function(d, t) {
						var g = d.createElement(t), s = d.getElementsByTagName(t)[0];
						g.src = ('https:' == location.protocol ? '//ssl' : '//www') + '.google-analytics.com/ga.js';
						s.parentNode.insertBefore(g, s)
					}(document, 'script'));
			</script>
			<script src="<?php echo base_url('js/vendor/bootstrap.min.js'); ?>"></script>

			<script src="<?php echo base_url('js/plugins.js'); ?>"></script>

			<script src="<?php echo base_url('js/fokus.min.js'); ?>"></script>

			<script src="<?php echo base_url('js/main.js'); ?>"></script>
	</body>
</html>
