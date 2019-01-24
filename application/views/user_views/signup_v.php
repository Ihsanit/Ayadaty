<div>
	<?php
	$included_input=APPPATH.'/views/include_views/include_input.php';
	include($included_input);	
	echo validation_errors();?>
	<div class="book-container">
	<?php echo form_open('user_c/signup');?>	
		<div class="row">
			<div class="col-25 col-25-lbls">
    		<?php echo form_label('Name*');?>
    		</div>
    		<div class="col-75">
    		<?php make_input('','text','u_username','Your Username');?>
    		</div>
		</div>
		<div class="row">
			<div class="col-25 col-25-lbls">
    		<?php echo form_label('Email*');?>
    		</div>
    		<div class="col-75">
    		<?php make_input('','email','u_email','Your Email');?>
    		</div>
		</div>
		<div class="row">
			<div class="col-25 col-25-lbls">
    		<?php echo form_label('Password*');?>
    		</div>
    		<div class="col-75">
    		<?php make_input('','password','u_password','Your Password');?>
    		</div>
		</div>
		<div class="row">
			<div class="col-25 col-25-lbls">
    		<?php echo form_label('Confirm Password*');?>
    		</div>
    		<div class="col-75">
    		<?php make_input('','password','u_cpassword','Your Confirm Password');?>
    		</div>
		</div>
			<div class="row" style="text-align:center" >
			<button class="btn" type='submit' value="submit">Send</button>
	 	</div>
	</div>
	<?php echo form_close(); ?>
</div>