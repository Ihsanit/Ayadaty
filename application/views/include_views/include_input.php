<?php
if(! function_exists('make_input'))
{
	function make_input($label,$type,$name,$placehold)
	{
		?>
		<div>
		<?php
		echo form_label($label);
		$input_arr=array
		(
		 	'type'			=>$type,
		 	'name'			=>$name,
		 	'placeholder'	=>$placehold,
		 	'size'			=>50
		);
		 echo form_input($input_arr);
		?>
		</div>
		<?php

	}//end make_input() method
}
?>