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
 echo form_open('patient_c/book_appointment');?>
 <div class="row">
	<div class="col-md-3">
	</div>
	<div class="col-md-6">
		<?php
		 make_input_fields('Name','text','p_name','Enter your full name');
		 make_input_fields('Email','email','p_email','Enter your Email');
		 make_input_fields('Phone Number','number','p_phone','Enter your phone Number');
		 make_input_fields('Appointment Date','date','appt_date','Choose appointment date');
		 echo br(1);
		 ?>
		 <button type='submit' class='btn btn-primary btn-block'>Submit</button>
 	</div>
 </div>
<?php
echo br(2);
 echo form_close();
 ?>