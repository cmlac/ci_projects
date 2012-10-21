<!DOCTYPE HTML>
<html lang="en-US">
	<head>
		<title>CMLAC Login</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/cmlac_style.css " />
		<script type="text/javascript" src=" https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	</head>
	<body>
		<div id='pleft'>
			<h2>Please login to Access the Dashboard</h2>
			<?php
				if($this->session->flashdata('error'))
				{
					echo "<div class='message'>";
					echo $this->session->flashdata('error');
					echo "</div>";
				}
				$udata = array('name' => 'usrname', 'id'=> 'u', size=>15);
				$pdata = array('name' => 'password', 'id'=> 'p', size=>15);
				
				echo form_open("home/verify");
				echo "<p><label for='u'>Username:</label><br/>";
				echo form_input($udata) . "</p>";
				echo "<p><label for='p'>Password:</label><br/>";
				echo form_input($pdata) . "</p>";
				echo form_submit('submit', 'Login');
				echo form_close();
			?>
		</div>
	</body>
</html>