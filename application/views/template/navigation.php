		<header>
		<nav>
			<div class="login-menu">			
				<a href="#"><i class="fas fa-sign-in-alt"></i> Login</a>
				<a href="<?php echo base_url();?>user_controllers/user_c/signup"><i class="fas fa-user-plus"></i> Sign Up</a>
				<a href="#">Log out</a>
			</div> 
			<label for="drop" class="toggle">Menu</label>
			<input type="checkbox" id="drop"/>
			<ul class="nav menu">
				<li>
			        <a href="#" class="active"><i class="fa fa-fw fa-home"></i>Home</a>
			    </li>
			    <li>
			        <a href="#">About</a>
			    </li>
			   	<li>
			        <a href="#">Services</a>
				    	<ul class="hidden">
				    		<li>
					    		<a href="#">Dental</a>
					    	</li>
					    	<li>
					    		<a href="#">Family medicine</a>
					    	</li>				   
					    </ul>		        
			    </li>
			    <li>
			        <a href="#">Specialist</a>
				    	<ul class="hidden">
				    		<li>
					    		<a href="#">specialist1</a>
					    	</li>
					    	<li>
					    		<a href="#">specialist2</a>
					    	</li>				   
					    </ul>		        
			    </li>
			    <li>
			       	<a href="#">Doctors</a>
			    </li>
			    <li>
			       	<a href="#"><i class="fa fa-fw fa-envelope"></i>Contact</a>
			    </li>
			    <li>
			       	<a href="javascript:void(0);" class="icon" onclick="menu_function()">
   						<i class="fa fa-bars"></i>
 					</a>
			    </li>
			    <li style="margin-left:380px">
			    
			    	<a href="<?php echo base_url();?>home_c" class="btn " >Book Appointment</a>
			    	
			    </li>
			    
			</ul>			
		</nav>
		</header>