<div class="container">
<?php echo heading($page_name,2,'class="text-center"');?>
<?php echo validation_errors();?>
<?php
function make_input_fields($f_label,$f_type,$f_name,$f_placehold){
	?>
<div class='form-group'>
	<?php
	 echo form_label($f_label);
	 $input_arr=array(
	 	'type'			=>$f_type,
	 	'name'			=>$f_name,
	 	'placeholder'	=>$f_placehold,
	 	'class'			=>'form-control'
	 	);
	 echo form_input($input_arr);
	?>	
</div>
<?php	
}//end make_register_fields function
?>
<?php
 echo form_open('user_c/register');?>
 <div class="row">
	<div class="col-md-3">
	</div>
	<div class="col-md-6">
		<?php
		 make_input_fields('Username','text','u_username','Enter username');
		 make_input_fields('Email','email','u_email','Enter Email');
		 make_input_fields('Password','password','u_password','Enter Password');
		 make_input_fields('Confirm Password','password','u_cpassword','Enter Confirm Password');
		 echo br(1);
		 ?>
		 <button type='submit' class='btn btn-primary btn-block'>Submit</button>
 	</div>
 </div>
<?php
echo br(2);
 echo form_close();
 ?>
