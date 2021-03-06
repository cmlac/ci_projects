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

		<title>CMLAC Image Gallery</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width">
		<style type="text/css">
			body {
				background-color: #ccc
			}
			#gallery, #upload {
				margin: 10px auto;
				width: 100%;
				padding: 10px;
			}
			#blank_gallery {
				font-family: Arial;
				font-size: 18px;
				font-weight: bold;
				text-align: center;
			}
			.thumb {
				float: left;
				width: 150px;height 100px;
				padding: 10px;
				margin: 10px;
				background-color: rgb(23,117,187);
			}
			.thumb:hover {
				outline: 1px solid rgb(27,117,187);
			}

			#gallery li.span4 {
				margin-left: 0px;
			}

			a img {
				border: 1px solid #BBB;
				padding: 2px;
				margin: 10px 10px 10px 0;
					-moz-box-shadow: 0px 0px 10px #cbcbcb;
	-webkit-box-shadow: 0px 0px 10px #cbcbcb;
			}

		</style>

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

		<!--loading lightbox-->
		<script src="js/jquery-1.7.2.min.js"></script>
		<script src="js/lightbox.js"></script>
		<link href="css/lightbox.css" rel="stylesheet" />
		<!--lightbox ends-->

	</head>

	<body style='background-color: #EDEDED;'>
		
		<text>
			<?php $this -> load -> view('includes/top_bar'); ?>
		</text>
		<div class="container">
			<!--[if lt IE 7]>
			<p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
			<![endif]-->

			<!-- This code is taken from http://twitter.github.com/bootstrap/examples/hero.html -->
			<text>
				<?php $this -> load -> view('includes/text'); ?>
			</text>

			<div align="center">
				<div class="navbar">
					<div class="navbar-inner">
						<a class="brand" href="#">Title</a>
						<ul class="nav">
							<li>
								<a href="<?php echo base_url(""); ?>">Home</a>
							</li>
							<li class="active">
								<a href="">Gallery</a>
							</li>
							<li>
								<a href="<?php echo base_url("cmlacCal/display")?>">Events</a>
							</li>
						</ul>
					</div>
				</div>
			</div>

			<div class="container-fluid">
				<div class="row-fluid">
					<div class="span2">
						<h1>Welcome</h1>
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
						<button class="btn btn-large btn-primary" type="button">
							Register Here
						</button>
					</div>

					<div class="span10">
						<!-- Image Gallery begins-->
						<div id="gallery">

							<?php if (isset($images) && count($images)):?>
							<ul>
								<?php foreach($images as $image):
								?>

								<li class="span4">

									<a title=<?php echo $image['name']; ?> rel="lightbox[group1]" href="<?php echo $image['full']; ?>"> <img src="<?php echo $image['thumb']; ?>" /> </a>
									<form action="gallery.php" method="post"></form>
									<input type="checkbox" name="checkbox[]" value="<?=$image['id']; ?>"/>

									<!--delete link for each thumbnail-->
									<a class= "btn btn-mini" href="<?php echo base_url('gallery/delete_image/' . $image['id']); ?>"> Delete </a>

								</li>

								<?php endforeach; ?>
							</ul>

							<?php /* pagination

	 echo $this->table->generate($records);
	 echo $this->pagination->create_links();
	 */
							?>

							<?php else: ?>
							<div id="blank_gallery">
								No Images in this album - Please Upload an Image
							</div>
							<?php endif; ?>
						</div>
						
										<input type="submit" name="delete" value="Delete Selected" class="btn btn-primary">
						<a type="button" class="btn btn-primary" data-loading-text="Loading..."  href="#image_upload_modal" data-toggle="modal">Upload Image</a>

					</div><!-- end span10 -->
					

					<!-- modal window for uploading images begins-->

					<div class="modal fade" id="image_upload_modal">
					<div class="modal-header">
					<a class="close" data-dismiss="modal">&times;</a>
					<h3>Image Upload</h3>
					</div>
					<div class="modal-body">
					<div id="upload">
					<?php
					echo form_open_multipart('gallery');
					echo form_label('Image Upload', 'userfile');
					echo form_upload('userfile');
					echo form_submit('upload', 'Upload');
					echo form_close();
					?>
					</div>
					</div>
					<!-- modal window ends-->
					<div class="modal-footer">
					<a href="#" class="btn" data-dismiss="modal">Close</a>
					</div>
					</div>

					<!-- Image Gallery ends-->

					
					<!-- Example row of columns -->
					<div class="span11">
					<h4>Sponsor</h4>
					</div>

					</hr>

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
						var _gaq = [['_setAccount', 'UA-XXXXX-X'], ['_trackPageview']];
						( function(d, t) {
								var g = d.createElement(t), s = d.getElementsByTagName(t)[0];
								g.src = ('https:' == location.protocol ? '//ssl' : '//www') + '.google-analytics.com/ga.js';
								s.parentNode.insertBefore(g, s)
							}(document, 'script'));
					</script>
					<script src="<?php echo base_url('js/vendor/bootstrap.min.js'); ?>"></script>

					<script src="<?php echo base_url('js/plugins.js'); ?>"></script>

					<script src="<?php echo base_url('js/main.js'); ?>"></script>

	</body>
</html>
