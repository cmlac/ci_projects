<html>
<head>
	<style>
		A:link {color: white; text-decoration: none}
		A:visited {color: white; text-decoration: none}
		A:active {text-decoration: none}
		A:hover {text-decoration: underline}
	</style>
</head>
<body>
	<div class='row-fluid'>
		<div class='span12'>
			<div style='position: relative; bottom: -60px;' align='center'><font size='2' color='white' ><b>&copy; Camberwell Malvern Little Althetics Center 2012. All Right Reserved.</b></font></div>
			<div style='position: relative; bottom: -61px;' align='center'>
				<font size='1.5' color='white' ><b>
					<table width='180' align='center'>
						<tr align='center'>
							<td>
							<a data-toggle="modal" href="#admin_login">Admin Login</a>
							    <div class="modal hide fade" id="admin_login">
									<div class="modal-header">
									<h3><font color="red">Admin Login</font></h3>
									</div>
									<div class="modal-body">
									<p>
									<?php echo validation_errors(); ?>
									<?php echo form_open('verifylogin'); ?>
									<label for="username"><font color="black">Username:</font></label>
									  <input type="text" size="20" id="username" name="username"/>
									  <br/>
									  <label for="password"><font color="black">Password:</font></label>
									  <input type="password" size="20" id="passowrd" name="password"/>
									</p>
									</div>
									<div class="modal-footer">
									<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
									<button class="btn btn-success" href="<?php echo base_url('verifylogin'); ?>" class="btn btn-primary">Login</button>
									</div>
									</div>
							
							
							<td>Site Map</td>
							<td>Privacy</td>
						</tr>
					</table>
				</b></font>
			</div>
		</div>
		
	</div>

</body>
</html>