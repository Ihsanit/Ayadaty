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
          <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-experience-data" role="tab" aria-controls="nav-contact" aria-selected="false">الخبرات</a>
          <a class="nav-item nav-link" id="nav-about-tab" data-toggle="tab" href="#nav-clinic-data" role="tab" aria-controls="nav-about" aria-selected="false">بيانات العيادات</a>
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
        <div class="tab-pane fade" id="nav-experience-data" role="tabpanel" aria-labelledby="nav-contact-tab">
          <hr>
           <!-- mutli-experience -->
          <?php if(count($experiences)):?>
          <div style="overflow:auto;">
            <div style="float:left;">
              <button type="button" id="prevBtn2" onclick="nextPrev2(-1)">&lt;</button>
              <button type="button" id="nextBtn2" onclick="nextPrev2(1)">&gt;</button>
            </div>
          </div> 
        <?php endif;?>
          <!-- /mutli-experience -->
          <!-- here experience form -->
        <?php 
            $experience_form=APPPATH.'views/included_sections/experience_data.php';
            include($experience_form);?> 
          <!-- multi-experience -->
          <?php if(count($experiences)):?>
          <!-- Circles which indicates the steps of the form: -->
          <div style="text-align:center;margin-top:40px;">
            <span class="step2"></span>
            <span class="step2"></span>
            <span class="step2"></span>
          </div>
        <?php endif;?>
          <!-- /mutli-experience -->
        </div><!-- /nav-experience-data -->
        <div class="tab-pane fade" id="nav-clinic-data" role="tabpanel" aria-labelledby="nav-about-tab">
          <hr>
          <!-- mutli-clinics -->
          <?php if(count($clinics)):?>
          <div style="overflow:auto;">
            <div style="float:left;">
              <button type="button" id="prevBtn3" onclick="nextPrev3(-1)">&lt;</button>
              <button type="button" id="nextBtn3" onclick="nextPrev3(1)">&gt;</button>
            </div>
          </div> 
        <?php endif;?>
          <!-- /mutli-clinics -->
          <!-- here clinic form -->
          <?php 
            $clinic_form=APPPATH.'views/included_sections/clinic_data.php';
            include($clinic_form);?>
            
          <?php if(count($clinics)):?>
          <!-- Circles which indicates the steps of the form: -->
          <div style="text-align:center;margin-top:40px;">
            <span class="step3"></span>
            <span class="step3"></span>
            <span class="step3"></span>
          </div>
        <?php endif;?>
        </div><!-- /nav-clinic-data -->
      </div><!-- /tab-content -->                
    </div><!-- /col-xs-12 -->
  </div><!-- /row -->
</div><!-- /container -->