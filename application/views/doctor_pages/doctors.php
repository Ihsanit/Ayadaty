<div class="container">
<?php echo heading($page_name,2,'class="text-center"');?>
<?php
function display_doctor_layout(){	
	 
?>
	<div class="doctor-box-1">
		<?php 
            $img_attributes=array(
                'src'=>site_url().'assets/images/doctors/dr.png',                
                'class'=>'thumb rounded doctor-img',
                'alt'=>'Doctor profile image'
                );            
            ?>
            <a href="<?php echo base_url();?>doctor_c/display_doctor_detls"><?php echo img($img_attributes); ?> </a>
            
   		 <div class="doctor-details">
			<?php
			$dr='Dr.Rasheda Ali';
			echo heading($dr,5,'class="doctor-font"');?>
        	 <span>General Pratitioner</span>
		</div>
		<br/>
		<div class="doctor-profile">
			<a href="<?php echo base_url();?>doctor_c/display_doctor_detls" class="btn btn-primary btn-sm" style="color: white;">View profile</a>
		</div>
	</div>
<?php
}//end display_doctor_layout
?>
<div class="row">
	<div class="col-lg-3 col-md-6 col-sm-12">
		<?php echo display_doctor_layout();?>
	</div>
	 <div class="col-lg-3 col-md-6 col-sm-12">
		<?php echo display_doctor_layout();?>
	</div>
	<div class="col-lg-3 col-md-6 col-sm-12">
		<?php echo display_doctor_layout();?>
	</div>
	<div class="col-lg-3 col-md-6 col-sm-12">
		<?php echo display_doctor_layout();?>
	</div> 
</div>
<?php echo br(3);?>
