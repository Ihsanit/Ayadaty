<div class="container">
<?php echo heading($page_name,2,'class="text-center"');?>
<?php echo form_open('user_c/login');?>
<?php 
$page=APPPATH.'/views/shared_pages/input_fields.php';//to include a page that contains function
include($page);
?>
<div class="row">
	<div class="col-md-3">
	</div>
	<div class="col-md-6">	
	<?php

		make_input_fields('Email','email','u_email','Enter Email');
 		make_input_fields('Password','password','u_password','Enter Password');
 		 echo br(1);
 	?>
 	<button type='submit' class='btn btn-primary btn-block'>Login</button>
	</div>	
</div>
<?php echo form_close();?>
<?php echo br(2); ?>

