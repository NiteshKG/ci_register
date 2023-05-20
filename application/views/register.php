<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?php echo base_url().'assets/css/bootstrap.css' ?>">
	<title>Register</title>
</head>
<body>
	<div class="container">
		<?php
      $msg = $this->session->flashdata('msg');
	  if($msg!=""){
		echo "<div class='alert alert-success'>$msg</div>";
	  }

   ?>
		<div class="col-md-6">
		<div class="card mt-4">
  <div class="card-header">
    Register here
  </div>
  <form action="<?php echo base_url().'index.php/user/register/'; ?>" method="post" name="registerform">
  <div class="card-body">
    
    <p class="card-text">Please fill your details</p>
    <div class="form-group">
		<label for="name"><b>First name</b></label>
		<input type="text" name="first_name" id="first_name" value="<?php echo set_value(field : 'first_name') ?>" class="form-control" placeholder="First name">
		<label for=""><?php echo form_error('first_name')? form_error('first_name') : '' ;?></label>
	</div>
	<div class="form-group">
		<label for="name"><b>Last name</b></label>
		<input type="text" name="last_name" id="last_name" value="<?php echo set_value(field : 'last_name') ?>" class="form-control" placeholder="Last name">
		<label for=""><?php echo form_error('last_name')? form_error('last_name') : '' ;?></label>
	</div>
	<div class="form-group">
		<label for="name"><b>Email</b></label>
		<input type="email" name="email" id="email" value="<?php echo set_value(field : 'email') ?>" class="form-control" placeholder="Email">
		<label for=""><?php echo form_error('email')? form_error('email') : '' ;?></label>
	</div>
	<div class="form-group">
		<label for="name"><b>Phone</b></label>
		<input type="text" name="phone" id="phone" value="<?php echo set_value(field : 'phone') ?>" class="form-control" placeholder="Phone">
		<label for=""><?php echo form_error('phone')? form_error('phone') : '' ;?></label>
	</div>
	<div class="form-group">
		<label for="name"><b>Password</b></label>
		<input type="password" name="password" id="password" value="<?php echo set_value(field : 'password') ?>" class="form-control" placeholder="Password">
		<label for=""><?php echo form_error('password')? form_error('password') : '' ;?></label>
	</div>
	<div class="form-group">
		<button class="btn btn-block btn-primary">REGISTER NOW</button>
	</div>
  </div>
  </form>
</div>
		</div>
	</div>
</body>
</html>