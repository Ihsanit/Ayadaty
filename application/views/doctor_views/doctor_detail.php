<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php 
$bar=APPPATH.'views/included_sections/navigation_bar.php';
include($bar);?>
<div class="container">
		<div class="card">
			<div class="container-fliud">			
				<div class="wrapper row">
				<?php if(count($d_data)):?>
					<?php foreach ($d_data as $doctor ): ?>
						<div class="col-md-3">
							<div class="tab-content" style="margin-bottom:1rem;">
							  <div class="tab-pane active" id="pic-1"><img src="<?php echo base_url();?>assets/images/doctors/personal/<?php echo $doctor['d_personal_img']; ?>"/></div>
							<div style="background-color:#13bfb1;">
								<div class="clinic-icon" style="padding: 10px 10px 0 10px;">
				                     <i class="fa fa-phone fa-md doctor-i-connection" ></i> 
				                     <span class="text-muted doctor-connection" ><?php echo $doctor['d_phone'];?></span>
				                </div>
				                <div class="clinic-icon" style="padding: 0 10px 10px 10px;">
				                     <i class="fa fa-envelope fa-md doctor-i-connection" ></i> 
				                     <span class="text-muted doctor-connection" ><?php echo $doctor['d_email'];?></span>
				                </div>
	                            </div>
							</div>
							<h6>اضف تقييمك</h6>
							<h6 class="card-title pb-3 text-center evalution-do">
			                    <span class="d-inline-flex"> 
			                        <a href="#" class="float-right d-inline-flex" style="text-decoration:none;">
			                            <i class="far fa-star fas-1x"></i>
			                            <i class="far fa-star fas"></i>
			                            <i class="far fa-star fas"></i>
			                            <i class="far fa-star fas"></i>                            
			                            <i class="far fa-star fas"></i>
			                        </a>
			                    </span>
	                		</h6>
						</div>
					<div class="col-md-9 evalution-do" style="padding-top:30px;">
						<div class="row">
							<div class="col-lg-6">
								<h4 class="product-title" style="color:#13bfb1;"><?php echo $doctor['c_name'];?></h4>
								<h6>د/<?php echo $doctor['d_name'];?></h6>
								<a href="#">
									<i class="fas fa-stethoscope fa-md"></i> 
		                        	<span class="text-muted" style="color:#13bfb1 !important;"><?php echo $doctor['specialty_name'];?></span>
		                    	</a>                    	
		                    	<div class="clinic-icon">
			                     <i class="fas fa-map-marker-alt fa-md"></i> 
			                     <span class="text-muted"><?php echo $doctor['city_name'].' - '.$doctor['c_street_address'].' - '.$doctor['c_place_name'];?></span>
			               		</div>
			               		<div class="clinic-icon">
			                     <i class="fas fa-map-marker-alt fa-md"></i> 
			                     <span class="text-muted">الكشف: 2000 ريال</span>
			               		</div>
		                    	<h6 class="card-title pb-3 evalution-dtl">
				                    <span class="d-inline-flex">التقييم العام
				                        <a href="#" class="float-right d-inline-flex" style="text-decoration:none; padding-right:50px;">
				                            <i class="far fa-star fas-1x fa-lg" style="width:30px;"></i>
				                            <i class="far fa-star fas fa-lg" style="width:30px;"></i>
				                            <i class="far fa-star fas fa-lg" style="width:30px;"></i>
				                            <i class="far fa-star fas fa-lg" style="width:30px;"></i>                            
				                            <i class="far fa-star fas fa-lg" style="width:30px;"></i>
				                        </a>
				                    </span>       
		                		</h6>
		                		
		                		<a href="#" class="btn btn-default btn-info float-left btn-more doctor-btn"><i style="color:#fff;" class="fas fa-angle-double-left"></i> حجز موعد</a>
		                		<br/>
		                		<br/>
		                		<br/>
		                	</div>
		                	<div class="col-lg-6">
		                	<!-- ---------------------------------- -->
		                	<div class="appointment" >
			                		<p style="text-align:center;">بيانات حجز موعد</p>
			                		<div id"divdays" style="width: 300px; margin:auto;">
			                			<div id="threedays" style="position:relative;" >
			                			</div>
			                		</div>
			                		<div class="daysarrows">
				                		<button class="prevday" type="button" id="prevDay" onclick="prevFunDay(-1);" ><i class="fa fa-angle-right fa-2x" ></i></button>
              							<button class="nextday" type="button" id="nextDay" onclick="nextFunDay(1);" ><i class="fa fa-angle-left fa-2x" ></i></button>
				                	</div>			                		
		                		</div>
                 	<!-- ------------------------------ -->
		                	</div>                
                		</div>                
                	</div>            

                <?php endforeach;?>
            <?php endif;?>

            </div>
                <div class="wrapper row">
                	<div class="col-md-3">
                	</div>
                	<div class="col-md-9">
						<div class="profile-head">                                   
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">الخبرات</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">التعليم</a>
                                </li>
                            </ul>
                        </div>

                        <div class="tab-content profile-tab" id="myTabContent" style="border:none; background-color:rgba(204, 204, 204, 0.2);margin-top:-32px;">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <span>أكملت دورات تخصص في طب الأعصاب والعضلات ، انسداد رقمي ، زراعة الأسنان وطب الأسنان التجميلي من الولايات المتحدة الأمريكية.

													وهي عضو في الأكاديمية الأمريكية لطب الأسنان التجميلي.

													هي رئيسة رئيسية في مؤتمرات مختلفة. بصرف النظر عن طب الأسنان التجميلي. كما أنها تقوم بإعادة تأهيل الفم بالكامل وتتمتع بخبرة جيدة في اضطرابات الفك السفلي (TMD)</span>
                                            </div>
                                        </div>  
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                        <div class="row">
                                            <div class="col-md-12">
                                            <span>حصلت على خبرة واسعة خلال السنوات القليلة الماضية في مجال طب الأسنان التجميلي والعصبي العضلي. هي رائدة في طب الأسنان العصبي العضلي في الهند.</span>
                                            </div>
                                        </div>
                            </div>
                        </div>
                    </div>
				</div>
				
			</div>
		</div>
	
</div>


	