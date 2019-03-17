<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php 
$bar=APPPATH.'views/included_sections/navigation_bar.php';
include($bar);?>
<?php
    if($this->session->flashdata('user_registered')):?>
        <p class="alert alert-success"><?php echo $this->session->flashdata('user_registered');?></p>
<?php endif;?>
<div class="container d-md-block" style="margin-bottom: 2rem;"><!-- d-none -->
      <h6>ابحث عن دكتور</h6>
      <div class="row justify-content-center">
                    <div class="col-md-12">
                            <div class="card-body">
                                <form action="#" method="post" novalidate="novalidate">
                            
                                    <div class="row">
                                        <div class="col-lg-2 col-md-4 col-sm-12">
                                            <label class="lbl-doctor">المحافظة</label>
                                            <select class="form-control search-slt" id="" name="city">
                                                <option value="" selected disabled>اختر المحافظة..</option>
                                                <?php if(count($cities)):?>
                                                    <?php foreach ($cities as $city):?>                                                 
                                                        <option value=<?php echo $city['city_id'];?><?php echo set_select('city',$city['city_id']);?>><?php echo $city['city_name'];?></option>
                                                    <?php endforeach;?>
                                                <?php endif;?>
                                            </select>
                                        </div>
                                        
                                        <div class="col-lg-2 col-md-4 col-sm-12"> 
                                            <label class="lbl-doctor">النوع</label>                      
                                            <select class="form-control search-slt">
                                                <option>اختر النوع..</option>
                                                <option>ذكر</option>
                                                <option>أٌنثى</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-3 col-md-4 col-sm-12">
                                            <label class="lbl-doctor">التخصص</label>                       
                                            <select class="form-control search-slt" id="specialty" name="specialty">
                                                <option value="" selected disabled>اختر التخصص..</option>
                                                <?php if(count($specialties)):?>
                                                  <?php foreach ($specialties as $specialty):?>
                                                    <option value=<?php echo $specialty['specialty_id'];?><?php echo set_select('specialty',$specialty['specialty_id']);?>><?php echo $specialty['specialty_name'];?></option>
                                                  <?php endforeach;?>
                                                <?php endif;?>
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