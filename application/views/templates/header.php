<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset='utf-8'>
		<meta name='author' content="Rabab Shalan">
		<meta name="keywords" content="Ayadaty,ayadaty,dental,doctor,patient,service,codeigniter">
		<meta name="description" content="Ayadaty Website offer Medical Services">
		<meta name="viewport" content="width=device-width, initial-scale=1">		
		
		<title>
			Ayadaty
		</title>  
	</head>	
	<body>
		<nav>
			<a href="#">Dashboard</a>		
			<a href="<?php echo base_url();?>home_controllers/home_c/index">Ayadaty</a>
			<div>
				<ul>
					<li>
			        	<a href="#">Home</a>
			    	</li>
			    	<li>
			        	<a href="#">About</a>
			      	</li>
			   		<li>
			        	<a href="#">Our Services</a>
				    	<div>
					    	<a href="#">Dental</a>
					    	<a href="#">Family medicine</a>
				    	</div>		        
			    	</li>
			    	<li>
			        	<a href="#">Doctors</a>
			     	</li>
			      	<li>
			        	<a href="#">Contact</a>
			      	</li>
				</ul>		    
			    <ul>
			       	<li>
			       		<a href="#">Login</a>
				    </li>
				    <li>
				   		<a href="<?php echo base_url();?>user_controllers/user_c/signup">Sign Up</a>
				    </li>
				    <li>
						<a href="#">Log out</a>
				    </li>
				</ul>
			</div>
		</nav>
	
