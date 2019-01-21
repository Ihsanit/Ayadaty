<div>
	<?php
	$included_input=APPPATH.'/views/include_views/include_input.php';
	include($included_input);	
	echo validation_errors();
	echo form_open('user_controllers/user_c/signup');
	?>
	<div>
		<div>
			<?php
			make_input('Username','text','u_username','Your Username');
			make_input('Email','email','u_email','Your Email');
			make_input('Password','password','u_password','Your Password');
			make_input('Confirm Password','password','u_cpassword','Your Confirm Password');		 
			?>
			<button type='submit' value="submit">Send</button>
	 	</div>
	</div>
	<?php echo form_close(); ?>
</div>