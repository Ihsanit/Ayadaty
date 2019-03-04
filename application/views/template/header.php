<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
	<meta charset='UTF-8'>
	<meta name='viewport' content="width=device-width, initial-scale=1">
	<meta name="description" content="Web Site Offers Medical Specialities, Doctors In Deffirent Governatates">
	<meta name="keywords" content="Ayadaty, عياداتي, Speciality, Doctor, Hospital, Clinic, Yemen">
	<meta name="author" content="IhsanIT Team">
	<link rel="icon" href="<?php echo base_url();?>assets/images/logo1.ico" type="image/x-icon">
	<title>Ayadaty</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap/css/bootstrap-rtl.css">
	<!-- Fontawesome Style -->
	<link rel="stylesheet" href="<?php  echo base_url();?>assets/css/fontawesome/css/all.min.css">
	<!-- jQuery-ui-css -->
	<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
	<!-- IntelTelInput Style -->
	<link rel="stylesheet" type="text/css" href="<?php  echo base_url();?>assets/css/intlTelInput.css">
	<!-- My Style -->
	<link rel="stylesheet" type="text/css" href="<?php  echo base_url();?>assets/css/style.css">
	
	<!-- fonts -->
	<!-- <link href="https://fonts.googleapis.com/css?family=Tajawal" rel="stylesheet"> -->
	<link href="https://fonts.googleapis.com/css?family=Changa" rel="stylesheet">
	<style type="text/css">
		 .iti-flag {background-image: url("<?php echo base_url();?>assets/images/flags/flags.png");}
 
@media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
  .iti-flag {background-image: url("<?php echo base_url();?>assets/images/flags/flags@2x.png");}
}
	</style>
</head>
<body>
	<nav class='navbar navbar-expand-lg bg-dark navbar-dark fixed-top'>
		<div class='container'>
			<a href="<?php echo base_url();?>" class='navbar-brand'>Ayadaty</a>
			<button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarCollapse">
				<ul class="navbar-nav ml-auto">										
					<li class="nav-item dropdown">
					    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">التخصصات</a>
					    <div class="dropdown-menu nav-item-link">
					    <?php if(count($specialties)):?>
                            <?php foreach ($specialties as $specialty):?>
                                <a class="dropdown-item" href="#"><?php echo $specialty['specialty_name'];?></a>
                            <?php endforeach;?>
                        <?php endif;?>		      					      
					    </div>
					</li>
					<li class="nav-item">
						<a href="<?php echo base_url('showdoctors');?>" class="nav-link">اطباء</a>				
					</li>
					<?php if($this->session->userdata('logged_in')):?>
					<li class="nav-item">
						<a href="<?php echo base_url('editdoctor');?>" class="nav-link">تسجيل طبيب</a>						
					</li>
					
				<?php else:?>
					<li class="nav-item">
						<a href="<?php echo base_url('registerdoctor');?>" class="nav-link">تسجيل طبيب</a>						
					</li>
				<?php endif;?>
					<li class="nav-item">
						<a href="<?php echo base_url();?>" class="nav-link">من نحن</a>						
					</li>					
				</ul>
				<ul class="navbar-nav ml-auto">
					<?php if(!$this->session->userdata('logged_in')):?>
						<li class="nav-item">
							<a href="<?php echo base_url('signup');?>" class="nav-link">انشاء حساب</a>						
						</li>					
						<li class="nav-item">
							<span class="nav-link">|</span>					
						</li>
						<li class="nav-item">
							<a href="<?php echo base_url('login');?>" class="nav-link">تسجيل دخول</a>						
						</li>
					<?php endif;?>
					<?php if($this->session->userdata('logged_in')):?>
						<li class="nav-item">
							<a href="<?php echo base_url('logout');?>" class="nav-link">تسجيل خروج</a>						
						</li>
					<?php endif;?>
				</ul>
			</div>
		</div>	
		
	</nav>
	
