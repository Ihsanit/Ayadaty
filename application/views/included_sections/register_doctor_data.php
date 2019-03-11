<div class="container">
  <?php if($this->session->flashdata('doctor_registered')):?>
    <p class="alert alert-success"><?php echo $this->session->flashdata('doctor_registered');?></p>
  <?php endif;?>
  <?php if($this->session->flashdata('user_loggedin')):?>
    <p class="alert alert-success"><?php echo $this->session->flashdata('user_loggedin');?></p>
  <?php endif;?>
  <div class="row" style="display:block;">
    <div class="col-xs-12 ">
      <nav>
        <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
          <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-personal-data" role="tab" aria-controls="nav-personal-data" aria-selected="true">البيانات الشخصية</a>
          <a class="nav-item nav-link" id="nav-profile-tab"  href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">البيانات التعليمية</a>
          <a class="nav-item nav-link" id="nav-contact-tab"  href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">الخبرات</a>
          <a class="nav-item nav-link" id="nav-about-tab"  href="#nav-about" role="tab" aria-controls="nav-about" aria-selected="false">بيانات العيادات</a>
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
                <img id="uploaded_img" src="<?php echo base_url();?>assets/images/doctors/build/doctor_avatar.png" class="avatar img-circle img-thumbnail" alt="doctor avatar">
                <h6>ارفق صورتك الشخصية...</h6>
                <form  class="form" id="d_personal_form_update" name="d_personal_form_update"  method="post" enctype="multipart/form-data"><!-- action="<?php echo base_url('registerdoctor');?>" -->
                  <input type="file" id="d_img" name="d_img" class="text-center center-block file-upload">
                </div><!--/col-3-->
                <div class="col-sm-9">
                  <div class="tab-content">               
                    <div class="form-group col-xs-6"> 
                      <label>الاسم ثلاثيا مع اللقب<span class="required"> *</span></label>
                      <input type="text" id="d_name" value="<?php echo set_value('d_name'); $username= $this->session->userdata('u_username'); if(!empty($username)): echo $username; endif;?>" class="form-control" name="d_name" placeholder="ادخل اسم الطبيب ثلاثيا مع اللقب" title="اسم الطبيب ثلاثيا مع اللقب" autofocus required>
                      <span class="error-msg" id="d_name_error_msg"></span>
                    </div>
                    <div class="form-group col-xs-6">                     
                      <label>البريد الالكتروني<span class="required"> *</span></label>
                      <input type="email" id="d_email" value="<?php echo set_value('d_email'); $loggin_email= $this->session->userdata('u_email'); if(!empty($loggin_email)): echo $loggin_email; endif;?>" class="form-control" name="d_email" placeholder="yourname@email.com" title="عنوان البريد الاكتروني" autofocus required>
                      <span class="error-msg" id="d_email_error_msg"></span>
                    <div class="form-row">
                      <div class="form-group col-lg-6 col-md-12">
                        <label>رقم التلفون<span class="required"> *</span></label>
                        <input type="tel" id="d_phone" name="d_phone" value="<?php echo set_value('d_phone'); ?>"  class="form-control phone-style" title="رقم التلفون" autofocus required>
                        <span class="error-msg" id="d_phone_error_msg"></span>
                        <input type="hidden" id="d_mobile" name="d_mobile" value="" required>
                      </div>
                      <div class="form-group col-lg-6 col-md-12">
                        <label>النوع<span class="required"> *</span></label>
                        <select class="form-control" name='d_gender' id='d_gender' title="النوع" autofocus required>
                          <option value='' selected disabled>اختر النوع..</option>
                          <option value='1' <?php echo set_select('d_gender','1');?>>ذكر</option>
                          <option value='0' <?php echo set_select('d_gender','0');?>>أُنثى</option>
                        </select>
                        <span class="error-msg" id="d_gender_error_msg"></span>
                      </div>            
                    </div>
                    <div class="form-row">
                      <div class="form-group col-lg-6 col-md-12">
                        <label>تاريخ الميلاد<span class="required"> *</span></label>
                        <input  type="date" id="d_birth_date" min='1899-01-01' class="form-control" name='d_birth_date' value="<?php echo set_value('d_birth_date'); ?>" placeholder="تاريخ الميلاد" title="تاريخ الميلاد" autofocus>
                        <span class="error-msg" id="d_birth_date_error_msg"></span>
                      </div>
                      <div class="form-group col-lg-6 col-md-12">
                        <label>الجنسية<span class="required"> *</span></label>
                        <select name="nationality" id="nationality" class="form-control" style="direction:ltr;" title="الجنسية" title="اختر الجنسية"autofocus required>
                          <option value="" selected disabled>اختر الجنسية..</option>
                          <?php if(count($countries)):?>
                            <?php foreach ($countries as $country):?>                                                 
                              <option value=<?php echo $country['country_id'];?><?php echo set_select('nationality',$country['country_id']);?>><?php echo $country['country_name'];?></option>
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
                          <option value='1' <?php echo set_select('d_country_address','1');?>>اليمن</option>
                        </select>
                        <span class="error-msg" id="d_country_error_msg"></span>
                      </div>
                      <div class="form-group col-lg-6 col-md-12">
                        <label style="visibility: hidden;">عنوان المدينة<span class="required"> *</span></label>
                        <select name="city" class="form-control" id="city" title="عنوان المدينة" autofocus required>
  												<option value="" selected disabled>اختر المدينة..</option>
  												<?php if(count($cities)):?>
                            <?php foreach ($cities as $city):?>                                                 
                              <option value=<?php echo $city['city_id'];?><?php echo set_select('city',$city['city_id']);?>><?php echo $city['city_name'];?></option>
                            <?php endforeach;?>
                          <?php endif;?>
											  </select>
                        <span class="error-msg" id="d_city_error_msg"></span>
                      </div>            
                    </div>
                    <div class="form-group col-xs-6"> 
                      <input type="text" id="d_street_address" value="<?php echo set_value('d_street_address');?>" class="form-control" name='d_street_address' placeholder="ادخل الشارع"  title="عنوان الشارع" autofocus ><!-- pattern="^[A-Za-z0-9_ء-ي'\s]{5,200}+$" -->
                      <span class="error-msg" id="d_street_error_msg"></span>
                    </div>
                    <div class="form-group col-xs-6"> 
                      <label>عنوان صفحة الفيسبوك</label>
                      <input type="url" id="d_facebook_link" value="<?php echo set_value('d_facebook_link');?>" class="form-control" name='d_facebook_link' placeholder="ادخل رابط صفحة الفيسبوك" title="رابط صفحة الفيسبوك" autofocus>
                      <span class="error-msg" id="d_facebook_error_msg"></span>
                    </div>
                    <div class="form-group col-xs-6"> 
                      <label>عنوان صفحة تويتر</label>
                      <input type="url" id="d_twitter_link" value="<?php echo set_value('d_twitter_link');?>" class="form-control" name='d_twitter_link' placeholder="ادخل رابط صفحة تويتر" title="رابط صفحة تويتر" autofocus>
                      <span class="error-msg" id="d_twitter_error_msg"></span>
                    </div>
                    <div class="form-group col-xs-6">
                      <label>التخصص الطبي<span class="required"> *</span></label>
                      <select class="form-control" name='d_speciality' id="d_speciality" title="التخصص الطبي"autofocus required>
                        <option value="" selected disabled>اختر التخصص الطبي..</option>
                        <?php if(count($specialties)):?>
                          <?php foreach ($specialties as $specialty):?>
                            <option value=<?php echo $specialty['specialty_id'];?><?php echo set_select('d_speciality',$specialty['specialty_id']);?>><?php echo $specialty['specialty_name'];?></option>
                          <?php endforeach;?>
                        <?php endif;?>
                      </select>
                      <span class="error-msg" id="d_speciality_error_msg"></span>
                    </div>
                    <div class="form-group col-xs-6"> 
                      <label>كلمة المرور<span class="required"> *</span></label>
                      <input type="password" id="d_password" value="<?php echo set_value('d_password'); $password= $this->session->userdata('u_password'); if(!empty($password)): echo $password; endif;?>" class="form-control" name="d_password" placeholder="ادخل كلمة المرور" title="كلمة المرور">
                      <span class="error-msg" id="d_password_error_msg"></span>
                    </div>
                    <div class="form-group col-xs-6">
                      <label>تأكيد كلمة المرور<span class="required"> *</span></label>
                      <input type="password" id="d_password_c" value="<?php echo set_value('d_password_c'); $password_c= $this->session->userdata('u_password'); if(!empty($password_c)): echo $password_c; endif;?>" class="form-control" name="d_password_c" placeholder="ادخل تأكيد كلمة المرور" title="تأكيد كلمة المرور">
                      <span class="error-msg" id="d_password_c_error_msg"></span>
                    </div>                                      
                    <div class="form-group col-xs-12">
                      <br>
                      <button class="btn" type="submit" id="d_personal_data_submit" style="color:#fff;" value="send">حفظ</button>
                      <a class="nav-item nav-link btn btn-sm next-tab" id="nav-profile-tab" data-toggle="tab"  role="tab" aria-controls="nav-profile" aria-selected="false">التالي</a>
                    </div>
                  </div><!-- /tab-content -->
                </div><!--/col-9-->
              </form><!-- /form -->                              
            </div><!--/row-->
          </div><!-- /container snippet -->
        </div><!-- /nav-personal-data -->

                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                       <hr>
                       <div class="container bootstrap snippet">
                        <div class="row">
                          <div class="col-sm-12"><h5>بيانات الطبيب التعليمية</h5></div>
                        </div>
                        <div class="row">
                          <div class="col-sm-3"><!--left col-->
                            <div class="text-center">
                            </div></hr><br>
                              
                          </div><!--/col-3-->
                          <div class="col-sm-9">
                            <div class="tab-content">
                                    <form class="form" action="#" method="post" id="registrationForm2">
                                      <div class="form-group col-xs-6"> 
                                        <label>المؤهل*</label>
                                            <select class="form-control" name='d_qualification'autofocus required>
                                              <option selected>اختر المؤهل..</option>
                                              <option value='1'>PhD</option>
                                              <option value='0'>ماجستير</option>
                                            </select>
                                      </div>
                                      <div class="form-group col-xs-6"> 
                                        <label>جهة الدراسة*</label>
                                            <select class="form-control" name='d_university'autofocus required>
                                              <option selected>اختر جهة الدراسة..</option>
                                              <option value='1'>جامعة صنعاء</option>
                                              <option value='0'>جامعة عدن</option>
                                            </select>
                                      </div>
                                       <div class="form-group col-xs-6"> 
                                        <label>التخصص*</label>
                                            <select class="form-control" name='d_speciality'autofocus required>
                                              <option selected>اختر التخصص..</option>
                                              <option value='1'>طب عام</option>
                                              <option value='0'>طب اطفال</option>
                                            </select>
                                      </div>                                      
                                      <div class="form-row">
                                        <div class="form-group col-lg-6 col-md-12">
                                          <label>من*</label>
                                          <input type="date" class="form-control" name='d_start_education' title="ادخل بداية الدراسة" autofocus required>
                                        </div>
                                        <div class="form-group col-lg-6 col-md-12">
                                          <label>إلى*</label>
                                          <input type="date" class="form-control" name='d_end_education' title="ادخل نهاية الدراسة" autofocus required>
                                        </div>                                                    
                                      </div>
                                      <div class="form-row">
                                        <div class="form-group col-lg-6 col-md-12"> 
                                          <label>المعدل*</label>
                                          <input type="number" class="form-control" name='d_average' title="ادخل المعدل الدراسي" autofocus required>
                                        </div>                                      
                                        <div class="form-group col-lg-6 col-md-12">
                                          <label>شهادة التخرج*</label>
                                          <input type="file" class="form-control" name='d_certificate' title="ارفع شهادة الدراسة" autofocus required>
                                        </div>                                                    
                                      </div>                        
                                      <div class="form-group col-xs-12">
                                        <br>
                                        <button class="btn" type="submit" style="color:#fff;">حفظ</button>
                                        <button class="btn" type="submit" style="color:#fff;">اضافة مؤهل اخر</button>
                                        <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">التالي</a>
                                      </div>
                                  </form>                                
                                <hr>
                            </div><!-- /tab-content -->
                          </div><!--/col-9-->
                        </div><!--/row-->
                      </div>
                    </div>
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
                                    <form class="form" action="#" method="post" id="registrationForm3">
                                      <div class="form-group col-xs-6"> 
                                        <label>المسمى الوظيفي*</label>
                                        <input type="text" class="form-control" name="d_prev_job" placeholder="ادخل المسمى الوظيفي" title="ادخل المسمى الوظيفي" autofocus required>
                                      </div>
                                      <div class="form-group col-xs-6"> 
                                        <label>جهة العمل*</label>
                                        <input type="text" class="form-control" name="d_prev_company" placeholder="ادخل اسم جهة العمل" title="ادخل اسم جهة العمل" autofocus required>
                                      </div>
                                      <div class="form-row">
                                        <div class="form-group col-lg-6 col-md-12">
                                          <label>من*</label>
                                          <input type="date" class="form-control" name='d_start_education' title="ادخل بداية الدراسة" autofocus required>
                                        </div>
                                        <div class="form-group col-lg-6 col-md-12">
                                          <label>إلى*</label>
                                          <input type="date" class="form-control" name='d_end_education' title="ادخل نهاية الدراسة" autofocus required>
                                        </div>                                                    
                                      </div>
                                      <div class="form-group col-xs-6"> 
                                        <label>ملخص عن بعض مهام عملك السابق</label>
                                        <textarea class="form-control" name="d_detail_job" placeholder="ادخل ابرز مهام عملك" title="ادخل ابز مهام عملك" autofocus  rows="3" cols="10"></textarea>
                                      </div>
                                      <div class="form-row">                       
                                        <div class="form-group col-lg-6 col-md-12">
                                          <label>شهادة الخبرة ان وجد*</label>
                                          <input type="file" class="form-control" name='d_experinece_file' title="ارفع شهادة الدراسة" autofocus required>
                                        </div>                                                    
                                      </div>
                                      <div class="form-group col-xs-12">
                                        <br>
                                        <button class="btn" type="submit" style="color:#fff;">حفظ</button>
                                        <button class="btn" type="submit" style="color:#fff;">اضافة خبرة</button>
                                        <a class="btn nav-item nav-link" id="nav-about-tab" data-toggle="tab" href="#nav-about" role="tab" aria-controls="nav-about" aria-selected="false">التالي</a>


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
                                    <form class="form" action="#" method="post" id="registrationForm1">
                                      <div class="form-group col-xs-6"> 
                                        <label>العمل الحالي*</label>
                                            <select class="form-control" name='d_current_job'autofocus required>
                                              <option selected>اختر العمل الحالي..</option>
                                              <option value='1'>عام</option>
                                              <option value='0'>باطنية</option>
                                            </select>
                                      </div>
                                      <div class="form-group col-xs-6"> 
                                        <label>جهة العمل*</label>
                                        <input type="text" class="form-control" name="d_current_hospital" placeholder="ادخل جهة العمل الحالي" title="ادخل جهة العمل الحالي" autofocus required>
                                      </div>
                                      <div class="form-row">
                                        <div class="form-group col-lg-6 col-md-12">
                                          <label>عنوان العمل*</label>
                                            <select class="form-control" name='d_address_country_job' title="اختر الدولة"autofocus required>
                                              <option selected>اختر الدولة..</option>
                                              <option value='1'>اليمن</option>
                                              <option value='0'>مصر</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-lg-6 col-md-12">
                                          <label style="visibility: hidden;">عنوان العمل*</label>
                                            <select class="form-control" name='d_address_city_job' title="اختر المدينة"autofocus required>
                                              <option selected>اختر المدينة..</option>
                                              <option value='1'>صنعاء</option>
                                              <option value='0'>عدن</option>
                                            </select>
                                        </div>            
                                      </div>
                                      <div class="form-row">
                                        <div class="form-group col-lg-6 col-md-12">
                                          <label>ايام العمل*</label>
                                            <select class="form-control" name='d_start_day_job' title="اختر بداية الدوام"autofocus required>
                                              <option selected>اختر بداية الدوام..</option>
                                              <option value='1'>السبت</option>
                                              <option value='0'>الاحد</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-lg-6 col-md-12">
                                          <label style="visibility: hidden;">نهاية فترة الدوام</label>
                                            <select class="form-control" name='d_end_day_job' title="اختر بداية الدوام"autofocus required>
                                              <option selected>اختر نهاية الدوام..</option>
                                              <option value='1'>السبت</option>
                                              <option value='0'>الاحد</option>
                                            </select>
                                        </div>            
                                      </div>
                                      <div class="form-row">
                                        <div class="form-group col-lg-6 col-md-12">
                                          <label>اوقات العمل*</label>
                                            <select class="form-control" name='d_start_time_job' title="اختر بداية فترة الدوام"autofocus required>
                                              <option selected>اختر بداية فترة الدوام..</option>
                                              <option value='1'>8:00AM</option>
                                              <option value='0'>9:00AM</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-lg-6 col-md-12">
                                          <label style="visibility: hidden;">نهاية فترة الدوام</label>
                                            <select class="form-control" name='d_end_time_job' title="اختر نهاية فترة الدوام"autofocus required>
                                              <option selected>اختر نهاية فترة الدوام..</option>
                                              <option value='1'>8:00AM</option>
                                              <option value='0'>9:00AM</option>
                                            </select>
                                        </div>           
                                      </div>
                                      <div class="form-group col-xs-6"> 
                                        <label>ملخص عن عملك الحالي</label>
                                        <textarea class="form-control" name="d_detail_current_job" placeholder="ادخل ابرز مهام عملك" title="ادخل ابز مهام عملك" autofocus  rows="3" cols="10"></textarea>
                                      </div>                     
                                      <div class="form-group col-xs-12">
                                        <br>
                                        <button class="btn" type="submit" style="color:#fff;">حفظ</button>
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