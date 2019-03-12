<div class="container">
  <?php if($this->session->flashdata('doctor_edited')):?>
    <p class="alert alert-success"><?php echo $this->session->flashdata('doctor_edited');?></p>
  <?php endif;?> 
  <?php if($this->session->flashdata('qualification_added')):?>
    <p class="alert alert-success"><?php echo $this->session->flashdata('qualification_added');?></p>
  <?php endif;?>
  <?php if($this->session->flashdata('experience_added')):?>
    <p class="alert alert-success"><?php echo $this->session->flashdata('experience_added');?></p>
  <?php endif;?> 
  <?php if($this->session->flashdata('clinic_added')):?>
    <p class="alert alert-success"><?php echo $this->session->flashdata('clinic_added');?></p>
  <?php endif;?>  
  <div class="row" style="display:block;">
    <div class="col-xs-12 ">
      <nav>
        <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
          <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-personal-data" role="tab" aria-controls="nav-personal-data" aria-selected="true">البيانات الشخصية</a>
          <a class="nav-item nav-link " id="nav-profile-tab" data-toggle="tab" href="#nav-educational-data" role="tab" aria-controls="nav-profile" aria-selected="false">البيانات التعليمية</a>
          <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">الخبرات</a>
          <a class="nav-item nav-link" id="nav-about-tab" data-toggle="tab" href="#nav-about" role="tab" aria-controls="nav-about" aria-selected="false">بيانات العيادات</a>
        </div><!-- /div nav -->
      </nav><!-- /nav -->

      <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-personal-data" role="tabpanel" aria-labelledby="nav-home-tab">
          <hr>
          <div class="container bootstrap snippet">
            <div class="row">
              <div class="col-sm-12">
                <h5>بيانات الطبيب الشخصية</h5>
              </div>
            </div>
            <?php echo validation_errors();?>                       
            <div class="row">                         
              <div class="col-sm-3"><!--right col-->               
                <img id="uploaded_img" src="<?php echo base_url();?>assets/images/doctors/personal/<?php echo $doctor['d_personal_img'];?>" class="avatar img-circle img-thumbnail" alt="doctor avatar">
                <h6>ارفق صورتك الشخصية...</h6>
                <form  class="form" id="d_personal_form_update" name="d_personal_form_update" action="<?php echo base_url('updatedoctor');?>" method="post" enctype="multipart/form-data">
                  <input type="hidden" id="d_id" name="d_id" value="<?php echo $doctor['d_id'];?>">
                  <input type="file" id="d_img" name="d_img" class="text-center center-block file-upload">
                  <input type="hidden" id="old_d_img" name="old_d_img" value="<?php echo $doctor['d_personal_img']?>">
                </div><!--/col-3-->
                <div class="col-sm-9">
                  <div class="tab-content">               
                    <div class="form-group col-xs-6"> 
                      <label>الاسم ثلاثيا مع اللقب<span class="required"> *</span></label>
                      <input type="text" id="d_name" value="<?php echo $doctor['d_name'];?>" class="form-control" name="d_name" placeholder="ادخل اسم الطبيب ثلاثيا مع اللقب" title="اسم الطبيب ثلاثيا مع اللقب" autofocus required>
                      <span class="error-msg" id="d_name_error_msg"></span>
                    </div>
                    <div class="form-group col-xs-6"> 
                      <label>البريد الالكتروني<span class="required"> *</span></label>
                      <input type="email" id="d_email" value="<?php echo $doctor['d_email'];?>" class="form-control" name="d_email" placeholder="yourname@email.com" title="عنوان البريد الاكتروني" autofocus required>
                      <span class="error-msg" id="d_email_error_msg"></span>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-lg-6 col-md-12">
                        <label>رقم التلفون<span class="required"> *</span></label>
                        <input type="tel" id="d_phone" name="d_phone" value="<?php echo $doctor['d_phone'];?>"  class="form-control phone-style" title="رقم التلفون" autofocus required>
                        <span class="error-msg" id="d_phone_error_msg"></span>
                        <input type="hidden" id="d_mobile" name="d_mobile" value="" required>
                        <input type="hidden" id="old_d_mobile" name="old_d_mobile" value="<?php echo $doctor['d_phone']?>">
                      </div>
                      <div class="form-group col-lg-6 col-md-12">
                        <label>النوع<span class="required"> *</span></label>
                        <select class="form-control" name='d_gender' id="d_gender" title="النوع" autofocus required>
                          <option value="" selected disabled>اختر النوع..</option>
                          <?php if($doctor['d_gender']===1): ?>
                            <option value='1' <?php echo set_select('d_gender','1');?> selected>ذكر</option>
                            <option value='0' <?php echo set_select('d_gender','0');?>>أُنثى</option>
                          <?php else:?>
                            <option value='1' <?php echo set_select('d_gender','1');?>>ذكر</option>
                            <option value='0' <?php echo set_select('d_gender','0');?> selected>أُنثى</option> 
                          <?php endif;?> 
                        </select>
                        <span class="error-msg" id="d_gender_error_msg"></span>
                      </div>            
                    </div>
                    <div class="form-row">
                      <div class="form-group col-lg-6 col-md-12">
                        <label>تاريخ الميلاد<span class="required"> *</span></label>
                        <input  type="date" id="d_birth_date" min='1899-01-01' class="form-control" name='d_birth_date' value="<?php echo isset($doctor['d_birth_date']) ? set_value('d_birth_date', date('Y-m-d', strtotime($doctor['d_birth_date']))) : set_value('d_birth_date'); ?>" placeholder="تاريخ الميلاد" title="تاريخ الميلاد" autofocus>
                        <span class="error-msg" id="d_birth_date_error_msg"></span>
                      </div>
                      <div class="form-group col-lg-6 col-md-12">
                        <label>الجنسية<span class="required"> *</span></label>
                        <select name="nationality" id="nationality" class="form-control" style="direction:ltr;" title="الجنسية" title="اختر الجنسية"autofocus required>
                          <option value="" selected disabled>اختر الجنسية..</option>
                          <?php if(count($countries)):?>
                            <?php foreach ($countries as $country):?>
                              <?php if($doctor['d_nationality']===$country['country_id']):?>
                                <option value=<?php echo $country['country_id'];?><?php echo set_select('nationality',$country['country_id']);?> selected><?php echo $country['country_name'];?></option>
                              <?php else:?>
                                <option value=<?php echo $country['country_id'];?><?php echo set_select('nationality',$country['country_id']);?>><?php echo $country['country_name'];?></option>
                              <?php endif;?>
                            <?php endforeach;?>
                          <?php endif;?>
                        </select>
                        <span class="error-msg" id="d_nationality_error_msg"></span>
                      </div>            
                    </div>                                   
                    <div class="form-row">
                      <div class="form-group col-lg-6 col-md-12">
                        <label>العنوان<span class="required"> *</span></label>
                        <select class="form-control" name='d_country_address' id="d_country_address" title="عنوان الدولة"autofocus required>
                          <option value="" selected disabled>اختر الدولة..</option>
                          <option value="<?php echo $doctor['d_country_address'];?>" selected>اليمن</option>
                        </select>
                        <span class="error-msg" id="d_country_error_msg"></span>
                      </div>
                      <div class="form-group col-lg-6 col-md-12">
                        <label style="visibility: hidden;">عنوان المدينة<span class="required"> *</span></label>
                        <select name="city" class="form-control" id="city" title="عنوان المدينة" autofocus required>
                          <option value="" selected disabled>اختر المدينة..</option>
                          <?php if(count($cities)):?>
                            <?php foreach ($cities as $city):?>
                              <?php if($doctor['d_city_address']===$city['city_id']):?>
                                <option value=<?php echo $city['city_id'];?><?php echo set_select('city',$city['city_id']);?> selected><?php echo $city['city_name'];?></option>
                              <?php else:?>
                                <option value=<?php echo $city['city_id'];?><?php echo set_select('city',$city['city_id']);?>><?php echo $city['city_name'];?></option>
                              <?php endif;?>
                            <?php endforeach;?>
                          <?php endif;?>
                        </select>
                        <span class="error-msg" id="d_city_error_msg"></span>
                      </div>            
                    </div>
                    <div class="form-group col-xs-6"> 
                      <input type="text" id="d_street_address" value="<?php echo $doctor['d_street_address'];?>" class="form-control" name='d_street_address' placeholder="ادخل الشارع"  title="عنوان الشارع" autofocus ><!-- pattern="^[A-Za-z0-9_ء-ي'\s]{5,200}+$" -->
                      <span class="error-msg" id="d_street_error_msg"></span>
                    </div>
                    <div class="form-group col-xs-6"> 
                      <label>عنوان صفحة الفيسبوك</label>
                      <input type="url" id="d_facebook_link" value="<?php echo $doctor['d_facebook_link'];?>" class="form-control" name='d_facebook_link' placeholder="ادخل رابط صفحة الفيسبوك" title="رابط صفحة الفيسبوك" autofocus>
                      <span class="error-msg" id="d_facebook_error_msg"></span>
                    </div>
                    <div class="form-group col-xs-6"> 
                      <label>عنوان صفحة تويتر</label>
                      <input type="url" id="d_twitter_link" value="<?php echo $doctor['d_twitter_link'];?>" class="form-control" name='d_twitter_link' placeholder="ادخل رابط صفحة تويتر" title="رابط صفحة تويتر" autofocus>
                      <span class="error-msg" id="d_twitter_error_msg"></span>
                    </div>
                    <div class="form-group col-xs-6">
                      <label>التخصص الطبي<span class="required"> *</span></label>
                      <select class="form-control" name='d_speciality' title="التخصص الطبي"autofocus required>
                        <option value="" selected disabled>اختر التخصص الطبي..</option>
                        <?php if(count($specialties)):?>
                          <?php foreach ($specialties as $specialty):?>
                            <?php if($doctor['d_specialty_id']===$specialty['specialty_id']):?>
                              <option value=<?php echo $specialty['specialty_id'];?><?php echo set_select('d_speciality',$specialty['specialty_id']);?> selected><?php echo $specialty['specialty_name'];?></option>
                            <?php else:?>
                              <option value=<?php echo $specialty['specialty_id'];?><?php echo set_select('d_speciality',$specialty['specialty_id']);?>><?php echo $specialty['specialty_name'];?></option>
                            <?php endif;?>
                          <?php endforeach;?>
                        <?php endif;?>
                      </select>
                      <span class="error-msg" id="d_speciality_error_msg"></span>
                    </div>
                    <div class="form-group col-xs-6"> 
                      <label>كلمة المرور<span class="required"> *</span></label>
                      <input type="password" id="d_password" value="<?php echo $doctor['d_password'];?>" class="form-control" name="d_password" placeholder="ادخل كلمة المرور" title="كلمة المرور">
                      <span class="error-msg" id="d_password_error_msg"></span>
                    </div>
                    <div class="form-group col-xs-6">
                      <label>تأكيد كلمة المرور<span class="required"> *</span></label>
                      <input type="password" id="d_password_c" value="<?php echo $doctor['d_password'];?>" class="form-control" name="d_password_c" placeholder="ادخل تأكيد كلمة المرور" title="تأكيد كلمة المرور">
                      <span class="error-msg" id="d_password_c_error_msg"></span>
                    </div>                                      
                    <div class="form-group col-xs-12">
                      <br>
                      <button class="btn" type="submit" id="d_personal_data_update" style="color:#fff;" value="send">حفظ</button>
                      <a class="nav-item nav-link btn btn-sm next-tab" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">التالي</a>
                    </div>
                  </div><!-- /tab-content -->
                </div><!--/col-9-->
              </form><!-- /form -->                              
            </div><!--/row-->
          </div><!-- /container snippet -->
        </div><!-- /nav-personal-data -->

        <div class="tab-pane fade" id="nav-educational-data" role="tabpanel" aria-labelledby="nav-profile-tab">
          <hr>
          <!-- mutli-qualification -->
          <?php if(count($qualifications)):?>
          <div style="overflow:auto;">
            <div style="float:left;">
              <button type="button" id="prevBtn" onclick="nextPrev(-1)">&lt;</button>
              <button type="button" id="nextBtn" onclick="nextPrev(1)">&gt;</button>
            </div>
          </div> 
        <?php endif;?>
          <!-- /mutli-qualification -->
          <!-- here education form -->
          <?php 
            $education_form=APPPATH.'views/included_sections/education_data.php';
            include($education_form);?> 
          <!-- multi-qualification -->
          <?php if(count($qualifications)):?>
          <!-- Circles which indicates the steps of the form: -->
          <div style="text-align:center;margin-top:40px;">
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
          </div>
        <?php endif;?>
          <!-- /mutli-qualification -->
        </div><!-- /nav-educational-data -->
                    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                      <hr>
                       <div class="container bootstrap snippet">
                        <div class="row">
                          <div class="col-sm-12"><h5>بيانات الخبرات</h5></div>
                        </div>
                        <div class="row">
                          <div class="col-sm-3"><!--left col-->
                            <div class="text-center">
                            </div></hr><br>
                              
                          </div><!--/col-3-->
                          <div class="col-sm-9">
                            <div class="tab-content">
                                    <?php echo validation_errors();?>
                                    <form class="form" id="d_experience_form" name="d_experience_form" action="<?php echo base_url('addexperience');?>" method="post" enctype="multipart/form-data">
                                      <input type="hidden" id="d_e_id" name="d_e_id" value="<?php echo $doctor['d_id'];?>">
                                      <div class="form-group col-xs-6"> 
                                        <label>المسمى الوظيفي<span class="required"> *</span></label>
                                        <input type="text" class="form-control" name="d_e_job_name" id="d_e_job_name" value="<?php echo set_value('d_e_job_name'); ?>"placeholder="ادخل المسمى الوظيفي" title="المسمى الوظيفي السابق" autofocus required>
                                      </div>
                                      <div class="form-group col-xs-6"> 
                                        <label>جهة العمل<span class="required"> *</span></label>
                                        <input type="text" class="form-control" name="d_e_clinic_name" id="d_e_clinic_name" value="<?php echo set_value('d_e_clinic_name'); ?>" placeholder="ادخل اسم جهة العمل" title="جهة العمل" autofocus required>
                                      </div>
                                      <div class="form-group col-xs-6"> 
                                        <label>العنوان<span class="required"> *</span></label>
                                        <input type="text" class="form-control" name="d_e_place_address" id="d_e_place_address" value="<?php echo set_value('d_e_place_address'); ?>" placeholder="ادخل عنوان جهة العمل" title="عنوان جهة العمل" autofocus required>
                                      </div>
                                      <div class="form-row">
                                        <div class="form-group col-lg-6 col-md-12">
                                          <label>من<span class="required"> *</span></label>
                                          <input type="date" class="form-control" name='d_e_start_date' id='d_e_start_date' value="<?php echo set_value('d_e_start_date'); ?>" title="بداية فترة العمل" autofocus required>
                                        </div>
                                        <div class="form-group col-lg-6 col-md-12">
                                          <label>إلى<span class="required"> *</span></label>
                                          <input type="date" class="form-control" name='d_e_end_date' id='d_e_end_date' value="<?php echo set_value('d_e_end_date'); ?>" title="نهاية فترة العمل" autofocus required>
                                        </div>                                                    
                                      </div>
                                      <div class="form-group col-xs-6"> 
                                        <label>ملخص عن بعض مهام عملك السابق</label>
                                        <textarea class="form-control" name="d_e_job_summary" id="d_e_job_summary" value="<?php echo set_value('d_e_job_summary'); ?>" placeholder="ادخل ابرز مهام عملك السب" title="ابز مهام عملك" autofocus  rows="3" cols="10"></textarea>
                                      </div>
                                      <div class="form-row">                       
                                        <div class="form-group col-lg-6 col-md-12">
                                          <label>شهادة الخبرة (ان وجدت)</label>
                                          <input type="file" class="form-control" name='d_e_certificate' id='d_e_certificate' title="ارفع شهادة الخبرة ان وجدت" autofocus required>
                                        </div>                                                    
                                      </div>
                                      <div class="form-group col-xs-12">
                                        <br>                                        
                                        <button class="btn" type="submit" value="d_experience_data_submit" id="d_experience_data_submit" style="color:#fff;">حفظ</button>
                                        <button class="btn" type="button" style="color:#fff;">اضافة خبرة</button>
                                        <a class="nav-item nav-link btn btn-sm next-tab" id="nav-about-tab" data-toggle="tab" href="#nav-about" role="tab" aria-controls="nav-about" aria-selected="false">التالي</a>


                                      </div>
                                  </form>                                
                                <hr>
                            </div><!-- /tab-content -->
                          </div><!--/col-9-->
                        </div><!--/row-->
                      </div>
                    </div>
                    <div class="tab-pane fade" id="nav-about" role="tabpanel" aria-labelledby="nav-about-tab">
                      <hr>
                       <div class="container bootstrap snippet">
                        <div class="row">
                          <div class="col-sm-12"><h5>بيانات العمل الحالي</h5></div>
                        </div>
                        <div class="row">
                          <div class="col-sm-3"><!--left col-->
                            <div class="text-center">
                            </div></hr><br>
                              
                          </div><!--/col-3-->
                          <div class="col-sm-9">
                            <div class="tab-content">
                                    <?php echo validation_errors();?>
                                    <form class="form" id="d_clinic_form" name="d_clinic_form" action="<?php echo base_url('addclinic');?>" method="post" enctype="multipart/form-data">
                                      <input type="hidden" id="d_c_d_id" name="d_c_d_id" value="<?php echo $doctor['d_id'];?>">
                                      <div class="form-group col-xs-6"> 
                                        <label>المسمى الوظيفي<span class="required"> *</span></label>
                                        <input type="text" class="form-control" name="d_c_job_name" id="d_c_job_name" placeholder="ادخل المسمى الوظيفي" title="المسمى الوظيفي" autofocus required>
                                      </div>
                                      
                                      <div class="form-group col-xs-6"> 
                                        <label>اسم العيادة<span class="required"> *</span></label>
                                        <input type="text" class="form-control" name="d_c_name" id="d_c_name" placeholder="ادخل اسم العيادة" title="اسم العيادة" autofocus required>
                                      </div>
                                      <div class="form-row">
                                        <div class="form-group col-lg-6 col-md-12">
                                          <label>عنوان العيادة<span class="required"> *</span></label>
                                            <select class="form-control" name='d_c_country_address' id='d_c_country_address' title="اختر الدولة"autofocus required>
                                              <option selected disabled="">اختر الدولة..</option>
                                              <option value='1' <?php echo set_select('d_c_country_address','1');?>>اليمن</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-lg-6 col-md-12">
                                          <label style="visibility: hidden;">عنوان العمل*</label>
                                            <select class="form-control" name='d_c_city_address' id='d_c_city_address' title="اختر المدينة"autofocus required>
                                              <option selected>اختر المدينة..</option>
                                              <?php if(count($cities)):?>
                            <?php foreach ($cities as $city):?>                                                 
                              <option value=<?php echo $city['city_id'];?><?php echo set_select('d_c_city_address',$city['city_id']);?>><?php echo $city['city_name'];?></option>
                            <?php endforeach;?>
                          <?php endif;?>
                                            </select>
                                        </div>            
                                      </div>
                                      <div class="form-group col-xs-6"> 
                                         <input type="text" id="d_c_street_address" value="<?php echo set_value('d_c_street_address');?>" class="form-control" name='d_c_street_address' placeholder="ادخل الشارع"  title="عنوان الشارع" autofocus required><!-- pattern="^[A-Za-z0-9_ء-ي'\s]{5,200}+$" -->
                      
                                        </div>
                                        <div class="form-group col-xs-6"> 
                                         <input type="text" id="d_c_place_name" value="<?php echo set_value('d_c_place_name');?>" class="form-control" name='d_c_place_name' placeholder="ادخل اسم العمارة - رقم الشقة"  title="العمارة - رقم الشقة" autofocus ><!-- pattern="^[A-Za-z0-9_ء-ي'\s]{5,200}+$" -->
                      
                                        </div>
                                      <div class="form-row">
                                        <div class="form-group col-lg-6 col-md-12">
                                          <label>ايام العمل<span class="required"> *</span></label>
                                            <select class="form-control" name='d_c_day_start' id='d_c_day_start' title="اختر اول ايام الدوام"autofocus required>
                                              <option selected disabled>اختر بداية الدوام..</option>
                                                <?php if(count($days)):?>
                            <?php foreach ($days as $day):?>                                                 
                              <option value=<?php echo $day['day_id'];?><?php echo set_select('d_c_day_start',$day['day_id']);?>><?php echo $day['day_name'];?></option>
                            <?php endforeach;?>
                          <?php endif;?>
                                            </select>
                                        </div>
                                        <div class="form-group col-lg-6 col-md-12">
                                          <label style="visibility: hidden;">نهاية فترة الدوام</label>
                                            <select class="form-control" name='d_c_day_end' name='d_c_day_end' title="اختر اخر ايام الدوام"autofocus required>
                                              <option selected disabled>اختر نهاية الدوام..</option>
                                              <?php if(count($days)):?>
                            <?php foreach ($days as $day):?>                                                 
                              <option value=<?php echo $day['day_id'];?><?php echo set_select('d_c_day_end',$day['day_id']);?>><?php echo $day['day_name'];?></option>
                            <?php endforeach;?>
                          <?php endif;?>
                                            </select>
                                        </div>            
                                      </div>
                                      <div class="form-row">
                                        <div class="form-group col-lg-6 col-md-12">
                                          <label>اوقات العمل<span class="required"> *</span></label>
                                            <select class="form-control" name='d_c_period_start' id='d_c_period_start' title="اختر بداية فترة الدوام"autofocus required>
                                              <option selected disabled>اختر بداية فترة الدوام..</option>
                                               <?php if(count($periods)):?>
                            <?php foreach ($periods as $period):?>                                                 
                              <option value=<?php echo $period['period_id'];?><?php echo set_select('d_c_period_start',$period['period_id']);?>><?php echo $period['period_name'];?></option>
                            <?php endforeach;?>
                          <?php endif;?>
                                            </select>
                                        </div>
                                        <div class="form-group col-lg-6 col-md-12">
                                          <label style="visibility: hidden;">نهاية فترة الدوام</label>
                                            <select class="form-control" name='d_c_period_end' id='d_c_period_end' title="اختر نهاية فترة الدوام"autofocus required>
                                              <option selected disabled>اختر نهاية فترة الدوام..</option>
                                              <?php if(count($periods)):?>
                            <?php foreach ($periods as $period):?>                                                 
                              <option value=<?php echo $period['period_id'];?><?php echo set_select('d_c_period_end',$period['period_id']);?>><?php echo $period['period_name'];?></option>
                            <?php endforeach;?>
                          <?php endif;?>
                                            </select>
                                        </div>           
                                      </div>
                                      <div class="form-group col-xs-6"> 
                                        <label>ملخص عن عملك او عيادتك</label>
                                        <textarea class="form-control" name="d_c_summary" id="d_c_summary" placeholder="ادخل ملخص عن عملك او يادتك" title="ملخص عن عملك او يادتك" autofocus  rows="3" cols="10"><?php echo set_value('d_c_summary'); ?></textarea>
                                      </div>                     
                                      <div class="form-group col-xs-12">
                                        <br>
                                        <button class="btn" type="submit" value="d_clinic_data_submit" id="d_clinic_data_submit" style="color:#fff;">حفظ</button>
                                        <button class="btn" type="submit" style="color:#fff;">اضافة عمل اخر</button>
                                      </div>
                                  </form>                                
                                <hr>
                            </div><!-- /tab-content -->
                          </div><!--/col-9-->
                        </div><!--/row-->
                      </div>
                    </div>
                  </div>
                
                </div>
    </div>
    </div>
  </div><!-- /row -->
</div><!-- /container -->