<!DOCTYPE html>
<head>
	
</head>
<body>
	<h1>ggggg</h1>
	<?php foreach ($nothings as $nothing1 ) :?>		
	<?php 
	$title=$nothing1['s_title'];
	$desc=$nothing1['s_description'];
	?>
	<strong><?php echo $title; ?> </strong>
	<strong><?php  echo $desc;?> </strong>
	<hr>
	<?php 
	endforeach;?>
	<?php echo validation_errors();?>
	<?php echo form_open('nothing_c/process'); ?>

	<h5>Username</h5>
	<input type="text" name="username" value="" size="50" />

	<h5>Password</h5>
	<input type="text" name="password" value="" size="50" />

	<h5>Password Confirm</h5>
	<input type="text" name="passconf" value="" size="50" />

	<h5>Email Address</h5>
	<input type="text" name="email" value="" size="50" />

	<div><input type="submit" value="Submit" /></div>

	</form>
</body>
</html>