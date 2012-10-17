<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
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
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
        <![endif]-->

        <!-- This code is taken from http://twitter.github.com/bootstrap/examples/hero.html -->
		
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <a class="brand" href="#">Project name</a>
                    <div class="nav-collapse collapse">
                        <ul class="nav">
                            <li class="active"><a href="#">Home</a></li>
                            <li><a href="#about">About</a></li>
                            <li><a href="#contact">Contact</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li class="nav-header">Nav header</li>
                                    <li><a href="#">Separated link</a></li>
                                    <li><a href="#">One more separated link</a></li>
                                </ul>
                            </li>
                        </ul>
                        <form class="navbar-form pull-right">
                            <input class="span2" type="text" placeholder="Email">
                            <input class="span2" type="password" placeholder="Password">
                            <button type="submit" class="btn">Sign in</button>
                        </form>
                    </div><!--/.nav-collapse -->
                </div>
            </div>
        </div>
		
        <div class="container">
		     <div class="container-fluid">
		  <div class="row-fluid">
			<div class="span2">
			  <h1>Welcome</h1>
			  <hr>
			  <p class="text-error">Camberwell Malvern Little Athletics Centre [CMLAC] is open to all children aged 5-14 years. <br />
			  All children compete for fun, fitness and family enjoyment and are encouraged to participate in events in a <br />
			  positive manner, regardless of athletic capability. Little Athletics takes place on Saturday mornings from <br />
			  October to March, excluding the Christmas holiday period.<br />
			  </p>
			  <button type="button" class="btn">Register here</button>
			</div>
			<div class="span10">
			 <div id="myCarousel" class="carousel slide">
							<!-- Carousel items -->
							<div class="carousel-inner">
								<div class="active item">
									<img src='img/Athletics2.jpg' alt=''>
									<div class="carousel-caption">
										<p>This is an Test 1 pics for the SlieShow</p>
									</div>
								</div>
								<div class="item">
									<img src='img/1-athletics.jpg' alt=''>
									<div class="carousel-caption">
										<p>This is an Test 2 pics for the SlieShow</p>
									</div>
								</div>
								<div class="item">
									<img src='img/Athletics2.jpg' alt=''>
									<div class="carousel-caption">
										<p>This is an Test 3 pics for the SlieShow</p>
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
				<h4>Sponsor</h4>
            </div>
			<canvas id="w" width="200" height="200"></canvas>
            <hr>

            <footer>
                <?php $this->load->view('includes/footer');?>
            </footer>
		
        </div> <!-- /container -->
		
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="<?php echo base_url('js/vendor/jquery-1.8.2.min.js'); ?>"><\/script>')</script>
        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
		<script src="<?php echo base_url('js/vendor/bootstrap.min.js'); ?>"> </script>

        <script src="<?php echo base_url('js/plugins.js'); ?>"> </script>
		
		
        <script src="<?php echo base_url('js/fokus.min.js'); ?>"> </script>
		
		
		<script src="<?php echo base_url('js/main.js'); ?>"> </script>
    </body>
</html>
