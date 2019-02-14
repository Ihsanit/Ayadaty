<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<section class="search-banner text-white py-5" id="search-banner" style="background-image:linear-gradient(rgba(0, 0, 0, 0.3),rgba(0, 0, 0, 0.3)),url(<?php echo base_url();?>assets/images/h1.jpg); background-repeat: no-repeat;background-size:cover;">
    <div class="container py-5 my-5">
        <div class="row text-center pb-4">
            <div class="col-md-12">
                <h2>مستشفى الوسام التخصصي</h2>
            </div>
        </div>
         <div class="container">
        <br/>
            <div class="row justify-content-center">
                            <div class="col-12 col-md-10 col-lg-8">
                                <form class="card card-sm">
                                    <div class="card-body row no-gutters align-items-center"> 
                                        <div class="col">
                                            <input style="border:none;" class="form-control form-control-borderless" type="search" placeholder="ابحث بالتخصص أو الطبيب ">
                                        </div>
                                         <div>
                                            <button type="button" class="btn btn-primary wrn-btn btn-block" style="border:none;">بحث <i class="fa fa-search" style="color:#fff;"></i></button>
                                        </div>
                                        
                                    </div>
                                </form>
                            </div>
            </div>
         </div>   
    
    </div>
</section>
<!-- services -->
<!-- Team -->
<section id="team" class="pb-5">
    <div class="container" >
        <h5 class="section-title h2">اعرف المزيد</h5>
        <div class="row hospital-row" style="padding-bottom: 1rem;"> 
	
	<div class="col-md-8">
		<span>
			<?php $desc='أكملت دورات تخصص في طب الأعصاب والعضلات ، انسداد رقمي ، زراعة الأسنان وطب الأسنان التجميلي من الولايات المتحدة الأمريكية. وهي عضو في الأكاديمية الأمريكية لطب الأسنان التجميلي. هي رئيسة رئيسية في مؤتمرات مختلفة. بصرف النظر عن طب الأسنان التجميلي. كما أنها تقوم بإعادة تأهيل الفم بالكامل وتتمتع بخبرة جيدة في اضطرابات الفك السفلي (TMD),أكملت دورات تخصص في طب الأعصاب والعضلات ، انسداد رقمي ، زراعة الأسنان وطب الأسنان التجميلي من الولايات المتحدة الأمريكية. وهي عضو في الأكاديمية الأمريكية لطب الأسنان التجميلي. هي رئيسة رئيسية في مؤتمرات مختلفة. بصرف النظر عن طب الأسنان التجميلي. كما أنها تقوم بإعادة تأهيل الفم بالكامل وتتمتع بخبرة جيدة في اضطرابات الفك السفلي (TMD)أكملت دورات تخصص في طب الأعصاب والعضلات ، انسداد رقمي ، زراعة الأسنان وطب الأسنان التجميلي من الولايات المتحدة الأمريكية. وهي عضو في الأكاديمية الأمريكية لطب الأسنان التجميلي. هي رئيسة رئيسية في مؤتمرات مختلفة. بصرف النظر عن طب الأسنان التجميلي. كما أنها تقوم بإعادة تأهيل الفم بالكامل وتتمتع بخبرة جيدة في اضطرابات الفك السفلي (TMD),أكملت دورات تخصص في طب الأعصاب والعضلات ، انسداد رقمي ، زراعة الأسنان وطب الأسنان التجميلي من الولايات المتحدة الأمريكية. وهي عضو في الأكاديمية الأمريكية لطب الأسنان التجميلي. هي رئيسة رئيسية في مؤتمرات مختلفة. بصرف النظر عن طب الأسنان التجميلي. كما أنها تقوم بإعادة تأهيل الفم بالكامل وتتمتع بخبرة جيدة في اضطرابات الفك السفلي (TMD)';
			echo word_limiter($desc,100);
			?>
		</span>
		<div style="padding-top: 1rem;">
		<a href="#" class='btn btn-sm 'style="border:2px #13bfb1 solid; color:#13bfb1;">اقرأ المزيد</a>
		</div>
	</div>
    <div class="col-md-4 ">
		<div style="margin-bottom:1rem;">
			<div class="text-center" id="pic-1">
					<img class="card-img-top" src="<?php echo base_url();?>assets/images/h1.jpg?>"/></div>
				
		</div>		
	</div>
			</div>
      
    </div>
</section>

<div class="container d-md-block" style="margin-bottom: 2rem;"><!-- d-none -->
      <h6>اطباءنا</h6>
      <div class="row justify-content-center">
                    <div class="col-md-12">
                            <div class="card-body">
                                <form action="#" method="post" novalidate="novalidate">
                            
                                    <div class="row">
                                    	<div class="col-lg-4 col-md-4 col-sm-12">
                                            <label class="lbl-doctor">التخصص</label>                       
                                            <select class="form-control search-slt" id="exampleFormControlSelect1">
                                                <option>اختر التخصص..</option>
                                                <option>اسنان</option>
                                                <option>جلدية</option>
                                                <option>اطفال</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-3 col-md-4 col-sm-12"> 
                                            <label class="lbl-doctor">النوع</label>                      
                                            <select class="form-control search-slt">
                                                <option>اختر النوع..</option>
                                                <option>ذكر</option>
                                                <option>أٌنثى</option>
                                            </select>
                                        </div>
                                        
                                        <div class="col-lg-3 col-md-4 col-sm-12"> 
                                            <label class="lbl-doctor">كلمات</label>                           
                                            <input type="text" class="form-control search-slt" placeholder="اسم الطبيب">
                                        </div>
                                        <div class="col-lg-2 col-md-4 col-sm-12">
                                            <label style="visibility:hidden;">تاريخ الميلاد</label>
                                            <button type="button" class="btn btn-primary wrn-btn btn-block" style="border:none;">بحث <i class="fa fa-search" style="color:#fff;"></i></button>
                                        </div>
                                        
                                    </div>
                                
                                </form>
                            </div>       
                    </div>
            </div>        
      </div>

      <!-- -------------------------------------------------------- -->
      <div class="container show-doctor">    
       <div class="row"> 
            <?php 
                $doctor=APPPATH.'views/included_sections/doctor.php';
                include($doctor);
                include($doctor);
                include($doctor);
                include($doctor);
            ?> 
       </div> 
             
    </div>
    <br/>
    <br/>
    <br/>
    <!-- ----------------------Specialities------------------------ -->
    <section id="team" class="pb-5">
    <div class="container" >
        <h5 class="section-title h2">تخصصاتنا</h5>


    
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <label>غدد</label>
            </div>
            <div class="col-md-3 col-sm-6">
            	<p>اطفال</p>
            </div>
            <div class="col-md-3 col-sm-6">
                <p>اعصاب</p>
            </div>
			<div class="col-md-3 col-sm-6">
                <p>عيون</p>
            </div>
            <div class="col-md-3 col-sm-6">
                <label>تجميل</label>
            </div>
            <div class="col-md-3 col-sm-6">
            	<p>نساء وتوليد</p>
            </div>
            <div class="col-md-3 col-sm-6">
                <p>عظام</p>
            </div>
            <div class="col-md-3 col-sm-6">
                <p>اطفال</p>
            </div>
            <div class="col-md-3 col-sm-6">
                <label>جلدية</label>
            </div>
            <div class="col-md-3 col-sm-6">
            	<p>اسنان</p>
            </div>
            <div class="col-md-3 col-sm-6">
                <p>باطنية</p>
            </div>
            <div class="col-md-3 col-sm-6">
                <label>جلدية</label>
            </div>
            <div class="col-md-3 col-sm-6">
            	<p>اسنان</p>
            </div>
            <div class="col-md-3 col-sm-6">
                <p>باطنية</p>
            </div><div class="col-md-3 col-sm-6">
                <label>جلدية</label>
            </div>
            <div class="col-md-3 col-sm-6">
            	<p>اسنان</p>
            </div>
            
        </div>
                                       
</div>
                            
</section>
<div class="container-fluid" style="widht:100%; height:250px; min-height:250px; max-height:250px;     margin-top: 0px;"> 
	<img src="<?php echo base_url();?>assets/images/h1.jpg" style="widht:100%; height:250px; min-height:250px; max-height:250px;"/>
</div>


<!-- best clinics -->


<!-- ------------------------------- -->