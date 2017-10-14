<!DOCTYPE html>
<html lang="en">
<html>
<head>
	<link href="<?php echo base_url('assets/css/loginsignupstyle.css'); ?>" rel="stylesheet" />
</head>
<body style="background: url(<?php echo base_url('assets/images/signup.jpeg');?>) no-repeat; background-size: cover;">

	<div class="container" style="margin-top: 5%;">
		<h3 class="text-center" style="margin-bottom: 3%;">Sign in to:</h3>
		<h3 class="text-center" style="margin-bottom: 3%;">Document Tracking System</h3>
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<div class="panel panel-default" id="panel-body">
					<div class="loginpb panel-body">
						<form class="text-center" method="POST" action="<?php echo base_url('Access/log_in');?>">
			                <div class="input-group" >
			                  <div class="input-group-addon">
			                    <span class="glyphicon glyphicon-user"></span>
			                  </div>
			                  <input name="Username" type="text" class="form-control input-md" placeholder="Username">
			                </div>
			                <div class="input-group">
			                  <div class="input-group-addon">
			                    <span class="glyphicon glyphicon-lock"></span>
			                  </div>
			                  <input type="password" name="Password" class="form-control input-md" placeholder="Password">
			                </div>						
							<div class="form-group">
								<?php
									if($error&&$error!=null){
										echo'<p class="text-danger" >'.$error.'</p>';
									}
								?>
								<input type="submit" id="input-btn" class="btn btn-block btn-md btn-primary" value="Login">
							</div>		
							<a class="pull-left" href="<?php echo base_url('DTS/index');?>" >Back to Home</a>		
						</form>	
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>

