		<nav>
			<div class="login-menu">			
				<a onclick="document.getElementById('id01').style.display='block'" style="cursor:pointer;"><i class="fas fa-sign-in-alt"></i> Login</a>
				<a href=<?php echo base_url('signup');?>><i class="fas fa-user-plus"></i> Sign Up</a>
				<a href="#">Log out</a>
			</div> 
			<label for="drop" class="toggle">Menu</label>
			<input type="checkbox" id="drop"/>
			<ul class="nav menu">
				<li>
			        <a href=<?php echo base_url();?> class="active"><i class="fa fa-fw fa-home"></i>Home</a>
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
			    
			    	<a href=<?php echo base_url('booking');?> class="btn " >Book Appointment</a>
			    	
			    </li>
			    
			</ul>			
		</nav>
		<?php
		$included_login=APPPATH.'/views/user_views/login_v.php';
		include($included_login);
		?>
		<?php 
		if($this->session->flashdata('user_signedup')):?>
			<p class="alert alert-success"><?php echo $this->session->flashdata('user_signedup');?></p>
		<?php endif;?>
		<?php if($this->session->flashdata('user_loggedin')):?>
			<p class="alert alert-success"><?php echo $this->session->flashdata('user_loggedin');?></p>
		<?php endif;?>
