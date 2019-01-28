<div class="container">
<?php 
/*Date: Jan,10,2019
*Author:Rabab Shalan
*Description: The view is designed to display the services of clinc
*/
 echo "$page_name of clinic";
 function display_services($services){
	 foreach ($services as $service) :?>
	 <div class="row">
	 	<div class='col-md-3 col-sm-12'>
	 		<div>
	 		<?php 
	 		$img_attributes=array(
	 			'src'=>site_url().'assets/images/services/'.$service['s_img'],
	 			'width'=>'100%',
	 			'height'=>200,
	 			'class'=>'thumb rounded'
	 			);
	 		
	 		echo img($img_attributes);
	 		?>
	 		</div>
	 		
	 	</div>

	 	<div class='col-md-9 col-sm-12' >
		<h3><?php echo $service['s_title'];?></h3>
		<?php 
		echo word_limiter($service['s_description'],60);
		echo br(2);?>

		<p><a href="<?php echo site_url('services_c/display_service_details/'.$service['s_id']);?>" class='btn btn-primary'>Read More</a></p>
	 	</div>
	 	</div>
	 <?php
	 echo br(2); 
	 endforeach; 
}//end display_services function

display_services($services);
?>
