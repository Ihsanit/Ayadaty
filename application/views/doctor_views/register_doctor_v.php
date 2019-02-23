<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php 
$bar=APPPATH.'views/included_sections/navigation_bar.php';
include($bar);?>
 <div class="container">
 <?php
    if($this->session->flashdata('doctor_registered')):?>
        <p class="alert alert-success"><?php echo $this->session->flashdata('doctor_registered');?></p>
      <?php endif;?>
              <div class="row" style="display:block;">
                <div class="col-xs-12 ">
                  <nav>
                    <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                      <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-personal-data" role="tab" aria-controls="nav-personal-data" aria-selected="true">البيانات الشخصية</a>
                      <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">البيانات التعليمية</a>
                      <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">الخبرات</a>
                      <a class="nav-item nav-link" id="nav-about-tab" data-toggle="tab" href="#nav-about" role="tab" aria-controls="nav-about" aria-selected="false">بيانات العمل الحالي</a>
                    </div>
                  </nav>

                  <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-personal-data" role="tabpanel" aria-labelledby="nav-home-tab">
                      <hr>
                       <div class="container bootstrap snippet">
                        <div class="row">
                          <div class="col-sm-12"><h5>بيانات الطبيب الشخصية</h5></div>
                        </div>
                        <?php echo validation_errors();?>
                        <div class="row">                         
                          <div class="col-sm-3"><!--left col-->
                            <div class="text-center">
                                <img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="avatar img-circle img-thumbnail" alt="avatar">
                                <h6>Upload personal photo...</h6>
                                <form class="form" action="<?php echo base_url('registerdoctor');?>"  method="post" enctype="multipart/form-data">
                                  <input type="file" name="d_img" class="text-center center-block file-upload">
                            </div></hr><br>
                              
                          </div><!--/col-3-->
                          <div class="col-sm-9">
                            <div class="tab-content">
                                   
                                      <div class="form-group col-xs-6"> 
                                        <label>الاسم ثلاثيا مع اللقب*</label>
                                        <input type="text" class="form-control" name="d_name" placeholder="ادخل اسم الطبيب ثلاثيا مع اللقب" title="ادخل اسم الطبيب ثلاثيا مع اللقب" autofocus required>
                                      </div>
                                      <div class="form-group col-xs-6"> 
                                        <label>البريد الالكتروني*</label>
                                        <input type="email" class="form-control" name="d_email" placeholder="you@email.com" title="ادخل عنوان البريد الاكتروني" autofocus required>
                                      </div>
                                      <div class="form-row">
                                        <div class="form-group col-lg-6 col-md-12">
                                          <label>رقم التلفون*</label>
                                          <input type="tel" class="form-control" name='d_phone' placeholder="رقم التلفون" title="xxx-xxx-xxx" pattern="[0-9]{3}-[0-9]{3}-[0-9]{3}$" autofocus required>
                                        </div>
                                        <div class="form-group col-lg-6 col-md-12">
                                          <label>النوع*</label>
                                            <select class="form-control" name='d_gender'autofocus required>
                                              <option selected disabled>اختر النوع..</option>
                                              <option value='1'>ذكر</option>
                                              <option value='0'>أُنثى</option>
                                            </select>
                                        </div>            
                                      </div>
                                      <div class="form-row">
                                        <div class="form-group col-lg-6 col-md-12">
                                          <label>تاريخ الميلاد</label>
                                          <input type="date" class="form-control" name='d_birth_date' placeholder="تاريخ الميلاد" title="اختر تاريخ الميلاد" autofocus>
                                        </div>
                                        <div class="form-group col-lg-6 col-md-12">
                                          <label>الجنسية*</label>
                                          <?php 
                                          $nationality=APPPATH.'views/included_sections/nationalities.php';
                                          include($nationality);?>
                                        </div>            
                                      </div>                                   
                                      <div class="form-row">
                                        <div class="form-group col-lg-6 col-md-12">
                                          <label>العنوان*</label>
                                            <select class="form-control" name='d_country_address' title="اختر الدولة"autofocus required>
                                              <option selected disabled>اختر الدولة..</option>
                                              <option value='1'>اليمن</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-lg-6 col-md-12">
                                          <label style="visibility: hidden;">عنوان المدينة*</label>
                                          <?php 
                                          $city=APPPATH.'views/included_sections/cities.php';
                                          include($city);?>
                                        </div>            
                                      </div>
                                      <div class="form-group col-xs-6"> 
                                        <input type="text" class="form-control" name='d_street_address' placeholder="ادخل الشارع" pattern="^[A-Za-z0-9_ء-ي']{5,200}+$" title="ادخل الشارع" autofocus>
                                      </div>
                                      <div class="form-group col-xs-6"> 
                                          <label>عنوان صفحة الفيسبوك</label>
                                          <input type="url" class="form-control" name='d_facebook_link' placeholder="ادخل رابط صفحة الفيسبوك" title="ادخل رابط صفحة الفيسبوك" autofocus>
                                      </div>
                                      <div class="form-group col-xs-6"> 
                                          <label>عنوان صفحة تويتر</label>
                                          <input type="url" class="form-control" name='d_twitter_link' placeholder="ادخل رابط صفحة تويتر" title="ادخل رابط صفحة تويتر" autofocus>
                                      </div>
                                      <div class="form-group col-xs-6">
                                          <label>التخصص الطبي*</label>
                                            <select class="form-control" name='d_speciality' title="اختر التخصص الطبي"autofocus required>
                                              <option selected disabled>اختر التخصص الطبي..</option>
                                              <option value='1'>اسنان</option>
                                              <option value='0'>جلدية</option>
                                            </select>
                                      </div>
                                      <div class="form-group col-xs-6"> 
                                          <label>كلمة المرور*</label>
                                          <input type="password" class="form-control" name="d_password" placeholder="ادخل كلمة المرور" title="ادخل كلمة المرور">
                                      </div>
                                      <div class="form-group col-xs-6">
                                          <label>تأكيد كلمة المرور*</label>
                                          <input type="password" class="form-control" name="d_password_c" placeholder="ادخل تأكيد كلمة المرور" title="ادخل تأكيد كلمة المرور">
                                      </div>                                      
                                      <div class="form-group col-xs-12">
                                        <br>
                                        <button class="btn" type="submit" style="color:#fff;" value="send">حفظ</button>
                                        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">التالي</a>
                                      </div>
                                  </form>                                
                                <hr>
                            </div><!-- /tab-content -->
                          </div><!--/col-9-->
                        </div><!--/row-->
                      </div>
                                                      
                    </div><!-- end personal data tab -->
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
                                    <form class="form" action="##" method="post" id="registrationForm">
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
                                    <form class="form" action="##" method="post" id="registrationForm">
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
                                    <form class="form" action="##" method="post" id="registrationForm">
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
      </div>
</div>


<!-- ------------------------------- -->
<!-- Tabs -->
<!-- <section id="tabs">
  <div class="container">
    <h6 class="section-title h1">Tabs</h6>
    <div class="row">
      <div class="col-xs-12 ">
        <nav>
          <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Home</a>
            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Profile</a>
            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Contact</a>
            <a class="nav-item nav-link" id="nav-about-tab" data-toggle="tab" href="#nav-about" role="tab" aria-controls="nav-about" aria-selected="false">About</a>
          </div>
        </nav>
        <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
          <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
            Et et consectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui minim occaecat veniam. Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est aute sit dolor anim. Velit non irure adipisicing aliqua ullamco irure incididunt irure non esse consectetur nostrud minim non minim occaecat. Amet duis do nisi duis veniam non est eiusmod tempor incididunt tempor dolor ipsum in qui sit. Exercitation mollit sit culpa nisi culpa non adipisicing reprehenderit do dolore. Duis reprehenderit occaecat anim ullamco ad duis occaecat ex.
          </div>
          <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
            Et et consectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui minim occaecat veniam. Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est aute sit dolor anim. Velit non irure adipisicing aliqua ullamco irure incididunt irure non esse consectetur nostrud minim non minim occaecat. Amet duis do nisi duis veniam non est eiusmod tempor incididunt tempor dolor ipsum in qui sit. Exercitation mollit sit culpa nisi culpa non adipisicing reprehenderit do dolore. Duis reprehenderit occaecat anim ullamco ad duis occaecat ex.
          </div>
          <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
            Et et consectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui minim occaecat veniam. Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est aute sit dolor anim. Velit non irure adipisicing aliqua ullamco irure incididunt irure non esse consectetur nostrud minim non minim occaecat. Amet duis do nisi duis veniam non est eiusmod tempor incididunt tempor dolor ipsum in qui sit. Exercitation mollit sit culpa nisi culpa non adipisicing reprehenderit do dolore. Duis reprehenderit occaecat anim ullamco ad duis occaecat ex.
          </div>
          <div class="tab-pane fade" id="nav-about" role="tabpanel" aria-labelledby="nav-about-tab">
            Et et consectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui minim occaecat veniam. Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est aute sit dolor anim. Velit non irure adipisicing aliqua ullamco irure incididunt irure non esse consectetur nostrud minim non minim occaecat. Amet duis do nisi duis veniam non est eiusmod tempor incididunt tempor dolor ipsum in qui sit. Exercitation mollit sit culpa nisi culpa non adipisicing reprehenderit do dolore. Duis reprehenderit occaecat anim ullamco ad duis occaecat ex.
          </div>
        </div>
      
      </div>
    </div>
  </div>
</section> -->
<!-- ./Tabs -->