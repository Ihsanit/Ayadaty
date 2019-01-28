<div class="container">
<?php
/*Date: Jan,10,2019
*Author:Rabab Shalan
*Description: The page designed to display the service's details
*/
function display_service_dtls($service){
	?>
	 <div class="row">
	 	<div class='col-md-3 col-sm-12'>
	 		<div>
	 		<?php 
	 		$img_attributes=array(
	 			'src'=>site_url().'assets/images/services/'.$service['s_img'],	 			
	 			'height'=>200,
	 			'class'=>'thumb',
	 			'width'=>'100%'	 			);
	 		
	 		echo img($img_attributes);
	 		?>
	 		</div>
	 		
	 	</div>
	 	<div class='col-md-9 col-sm-12' >
	<h2><?php echo $service['s_title'];?></h2>
	<div><?php echo $service['s_description'];?></div>
	</div>
	</div>
	<?php echo br(1);?>
<?php
}//end display_service_dtls
function delete_service($service){	
	echo form_open('services_c/delete_service/'.$service['s_id']);?>
	<input type="submit" value="Delete" class="btn btn-danger pull-left btn-block">
<?php echo form_close();

}//end display_service_dtls
function edit_service($service){ ?>
	<a class="btn btn-secondary pull-left btn-block" href="<?php echo base_url();?>services_c/edit_service/<?php echo $service['s_id'];?>">Edit</a>	
<?php 

}//end 

display_service_dtls($service);
?>
<?php
if($this->session->userdata('logged_in')):?>
<div class="row">
	<div class='col-md-2'>
		<?php edit_service($service);?>
	</div>
	<div class='col-md-2'>
		<?php delete_service($service);?>
	</div>
</div>
<?php endif;?>
<?php echo br(2);?>
