<?php
function make_input_fields($f_label,$f_type,$f_name,$f_placehold){
	?>
<div class='form-group' > 
	<?php
	 echo form_label($f_label);
	 $input_arr=array(
	 	'type'			=>$f_type,
	 	'name'			=>$f_name,
	 	'placeholder'	=>$f_placehold,
	 	'class'			=>'form-control input-fields',
	 	'required'		=>'required',
	 	'autofocus'		=>'autofocus'
	 	);
	 echo form_input($input_arr);
	?>	
</div>
<?php	
}//end make_register_fields function
?>
<?php
function make_textarea_field($f_label,$f_name,$f_placehold){
	?>
<div class='form-group' >
	<?php
	 echo form_label($f_label);
	 $input_arr=array(
	 	'type'			=>'textarea',
	 	'name'			=>$f_name,
	 	'placeholder'	=>$f_placehold,
	 	'class'			=>'form-control input-fields',
	 	'autofocus'		=>'autofocus',
	 	'rows'			=>3
	 	);
	 echo form_textarea($input_arr);
	?>	
</div>
<?php	
}//end make_register_fields function
?>
<?php
function make_input_fields_other($f_type,$f_name,$f_placehold){
	?>
<div class='form-group' >
	<?php
	 $input_arr=array(
	 	'type'			=>$f_type,
	 	'name'			=>$f_name,
	 	'placeholder'	=>$f_placehold,
	 	'class'			=>'form-control book-input',
	 	'required'		=>'required',
	 	'autofocus'		=>'autofocus'
	 	);
	 echo form_input($input_arr);
	?>	
</div>
<?php	
}//end make_register_fields function
?>

<?php
function make_textarea_field_other($f_name,$f_placehold){
	?>
<div class='form-group' >
	<?php
	 $input_arr=array(
	 	'type'			=>'textarea',
	 	'name'			=>$f_name,
	 	'placeholder'	=>$f_placehold,
	 	'class'			=>'form-control book-input',
	 	'autofocus'		=>'autofocus',
	 	'rows'			=>3
	 	);
	 echo form_textarea($input_arr);
	?>	
</div>
<?php	
}//end make_register_fields function
?>