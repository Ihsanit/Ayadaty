<?php
if(! function_exists('make_input'))
{
	function make_input($label,$type,$name,$placehold)
	{
		$input_arr=array
		(
		 	'type'			=>$type,
		 	'name'			=>$name,
		 	'placeholder'	=>$placehold,
		 	'size'			=>50
		);
		 echo form_input($input_arr);
		?>
		
		<?php

	}//end make_input() method
}
?>
<?php
if(! function_exists('make_textarea_field'))
{
function make_textarea_field($f_label,$f_name,$f_placehold){
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
<?php	
}//end make_register_fields function
}
?>