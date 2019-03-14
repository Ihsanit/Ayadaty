          <?php if(count($experiences)):?>
            <?php $i=1;?>
            <?php foreach ($experiences as $experience):?> 
            <div class="container bootstrap snippet tab2">
              <div class="row">
                <div class="col-sm-12" >
                  <h5 style="display:inline-block;">بيانات الخبرات
                    (لديك <?php echo count($experiences);?> الخبرات يمكنك تصفحها او تعديلها)</h5><span>الخبرة<?php echo $i;?></span>
                  </h5>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-3"><!--left col-->
                </div><!--/col-3-->
                <div class="col-sm-9">
                  <div class="tab-content">
                    <?php echo validation_errors();?>
                    <form class="form" id="d_experience_form" name="d_experience_form" action="<?php echo base_url('updateexperience');?>" method="post" enctype="multipart/form-data">
                      <input type="hidden" id="d_e_id" name="d_e_id" value="<?php echo $doctor['d_id'];?>">
                      <input type="hidden" id="e_id" name="e_id" value="<?php echo $experience['e_id'];?>">
                      <input type="hidden" id="old_e_certificate" name="old_e_certificate" value="<?php echo $experience['e_certificate'];?>">
                      <div class="form-group col-xs-6"> 
                        <label>المسمى الوظيفي<span class="required"> *</span></label>
                        <input type="text" class="form-control" name="d_e_job_name" id="d_e_job_name" value="<?php echo $experience['e_job_name']; ?>"placeholder="ادخل المسمى الوظيفي" title="المسمى الوظيفي السابق" autofocus required>
                        <span class="error-msg" id="d_e_job_name_error_msg"></span>
                      </div>
                      <div class="form-group col-xs-6"> 
                        <label>جهة العمل<span class="required"> *</span></label>
                        <input type="text" class="form-control" name="d_e_clinic_name" id="d_e_clinic_name" value="<?php echo $experience['e_clinic_name']; ?>" placeholder="ادخل اسم جهة العمل" title="جهة العمل" autofocus required>
                        <span class="error-msg" id="d_e_clinic_name_error_msg"></span>
                      </div>
                      <div class="form-group col-xs-6"> 
                        <label>العنوان<span class="required"> *</span></label>
                        <input type="text" class="form-control" name="d_e_place_address" id="d_e_place_address" value="<?php echo $experience['e_place_address']; ?>" placeholder="ادخل عنوان جهة العمل" title="عنوان جهة العمل" autofocus required>
                        <span class="error-msg" id="d_e_place_address_error_msg"></span>
                      </div>
                      <div class="form-row">
                        <div class="form-group col-lg-6 col-md-12">
                          <label>من<span class="required"> *</span></label>
                          <input type="date" class="form-control" name='d_e_start_date' id='d_e_start_date' value="<?php echo isset($experience['e_start_date']) ? set_value('d_e_start_date', date('Y-m-d', strtotime($experience['e_start_date']))) : set_value('d_e_start_date'); ?>" title="بداية فترة العمل" autofocus required>
                          <span class="error-msg" id="d_e_start_date_error_msg"></span>
                        </div>
                        <div class="form-group col-lg-6 col-md-12">
                          <label>إلى<span class="required"> *</span></label>
                          <input type="date" class="form-control" name='d_e_end_date' id='d_e_end_date' value="<?php echo isset($experience['e_end_date']) ? set_value('d_e_end_date', date('Y-m-d', strtotime($experience['e_end_date']))) : set_value('d_e_end_date'); ?>" title="نهاية فترة العمل" autofocus required>
                          <span class="error-msg" id="d_e_end_date_error_msg"></span>
                        </div>                                                    
                      </div>
                      <div class="form-group col-xs-6"> 
                        <label>ملخص عن بعض مهام عملك السابق</label>
                        <textarea class="form-control" name="d_e_job_summary" id="d_e_job_summary" placeholder="ادخل ابرز مهام عملك السب" title="ابز مهام عملك" autofocus  rows="3" cols="10"><?php echo $experience['e_job_summary'];?></textarea>
                      </div>
                      <div class="form-row">                       
                        <div class="form-group col-lg-6 col-md-12">
                          <label>شهادة الخبرة (ان وجدت)</label>
                          <input type="file" class="form-control" name='d_e_certificate' id='d_e_certificate' title="ارفع شهادة الخبرة ان وجدت" autofocus>
                        </div>                                                    
                      </div>
                      <div class="form-group col-xs-12">
                        <br>                                        
                        <button class="btn" type="submit" value="d_experience_data_submit" id="d_experience_data_submit" style="color:#fff;">حفظ</button>
                        <a class="nav-item nav-link btn btn-sm next-tab" id="nav-about-tab" data-toggle="tab" href="#nav-about" role="tab" aria-controls="nav-about" aria-selected="false">التالي</a>
                      </div>
                    </form> <!-- /form --> 
                  </div><!-- /tab-content -->
                </div><!--/col-9-->
              </div><!--/row-->
              <?php $i++;?>
            </div><!-- container -->
            <?php endforeach;?>
          <?php else:?>
            <div class="container bootstrap snippet tab2">
              <div class="row">
                <div class="col-sm-12"><h5>بيانات الخبرات</h5></div>
              </div>
              <div class="row">
                <div class="col-sm-3"><!--left col-->
                </div><!--/col-3-->
                <div class="col-sm-9">
                  <div class="tab-content">
                    <?php echo validation_errors();?>
                    <form class="form" id="d_experience_form" name="d_experience_form" action="<?php echo base_url('addexperience');?>" method="post" enctype="multipart/form-data">
                      <input type="hidden" id="d_e_id" name="d_e_id" value="<?php echo $doctor['d_id'];?>">
                      <div class="form-group col-xs-6"> 
                        <label>المسمى الوظيفي<span class="required"> *</span></label>
                        <input type="text" class="form-control" name="d_e_job_name" id="d_e_job_name" value="<?php echo set_value('d_e_job_name'); ?>"placeholder="ادخل المسمى الوظيفي" title="المسمى الوظيفي السابق" autofocus required>
                        <span class="error-msg" id="d_e_job_name_error_msg"></span>
                      </div>
                      <div class="form-group col-xs-6"> 
                        <label>جهة العمل<span class="required"> *</span></label>
                        <input type="text" class="form-control" name="d_e_clinic_name" id="d_e_clinic_name" value="<?php echo set_value('d_e_clinic_name'); ?>" placeholder="ادخل اسم جهة العمل" title="جهة العمل" autofocus required>
                        <span class="error-msg" id="d_e_clinic_name_error_msg"></span>
                      </div>
                      <div class="form-group col-xs-6"> 
                        <label>العنوان<span class="required"> *</span></label>
                        <input type="text" class="form-control" name="d_e_place_address" id="d_e_place_address" value="<?php echo set_value('d_e_place_address'); ?>" placeholder="ادخل عنوان جهة العمل" title="عنوان جهة العمل" autofocus required>
                        <span class="error-msg" id="d_e_place_address_error_msg"></span>
                      </div>
                      <div class="form-row">
                        <div class="form-group col-lg-6 col-md-12">
                          <label>من<span class="required"> *</span></label>
                          <input type="date" class="form-control" name='d_e_start_date' id='d_e_start_date' value="<?php echo set_value('d_e_start_date'); ?>" title="بداية فترة العمل" autofocus required>
                          <span class="error-msg" id="d_e_start_date_error_msg"></span>
                        </div>
                        <div class="form-group col-lg-6 col-md-12">
                          <label>إلى<span class="required"> *</span></label>
                          <input type="date" class="form-control" name='d_e_end_date' id='d_e_end_date' value="<?php echo set_value('d_e_end_date'); ?>" title="نهاية فترة العمل" autofocus required>
                          <span class="error-msg" id="d_e_end_date_error_msg"></span>
                        </div>                                                    
                      </div>
                      <div class="form-group col-xs-6"> 
                        <label>ملخص عن بعض مهام عملك السابق</label>
                        <textarea class="form-control" name="d_e_job_summary" id="d_e_job_summary" value="<?php echo set_value('d_e_job_summary'); ?>" placeholder="ادخل ابرز مهام عملك السب" title="ابز مهام عملك" autofocus  rows="3" cols="10"></textarea>
                      </div>
                      <div class="form-row">                       
                        <div class="form-group col-lg-6 col-md-12">
                          <label>شهادة الخبرة (ان وجدت)</label>
                          <input type="file" class="form-control" name='d_e_certificate' id='d_e_certificate' title="ارفع شهادة الخبرة ان وجدت" autofocus>
                        </div>                                                    
                      </div>
                      <div class="form-group col-xs-12">
                        <br>                                        
                        <button class="btn" type="submit" value="d_experience_data_submit" id="d_experience_data_submit" style="color:#fff;">حفظ</button>
                        <button class="btn" type="button" style="color:#fff;">اضافة خبرة</button>
                        <a class="nav-item nav-link btn btn-sm next-tab" id="nav-about-tab" data-toggle="tab" href="#nav-about" role="tab" aria-controls="nav-about" aria-selected="false">التالي</a>
                      </div>
                    </form> <!-- /form --> 
                  </div><!-- /tab-content -->
                </div><!--/col-9-->
              </div><!--/row-->
            </div><!-- container -->
          <?php endif;?>
          <?php if(count($experiences)<3):?>
            <div class="container bootstrap snippet tab2">
              <div class="row">
                <div class="col-sm-12"><h5>بيانات الخبرات</h5></div>
              </div>
              <div class="row">
                <div class="col-sm-3"><!--left col-->
                </div><!--/col-3-->
                <div class="col-sm-9">
                  <div class="tab-content">
                    <?php echo validation_errors();?>
                    <form class="form" id="d_experience_form" name="d_experience_form" action="<?php echo base_url('addexperience');?>" method="post" enctype="multipart/form-data">
                      <input type="hidden" id="d_e_id" name="d_e_id" value="<?php echo $doctor['d_id'];?>">
                      <div class="form-group col-xs-6"> 
                        <label>المسمى الوظيفي<span class="required"> *</span></label>
                        <input type="text" class="form-control" name="d_e_job_name" id="d_e_job_name" value="<?php echo set_value('d_e_job_name'); ?>"placeholder="ادخل المسمى الوظيفي" title="المسمى الوظيفي السابق" autofocus required>
                        <span class="error-msg" id="d_e_job_name_error_msg"></span>
                      </div>
                      <div class="form-group col-xs-6"> 
                        <label>جهة العمل<span class="required"> *</span></label>
                        <input type="text" class="form-control" name="d_e_clinic_name" id="d_e_clinic_name" value="<?php echo set_value('d_e_clinic_name'); ?>" placeholder="ادخل اسم جهة العمل" title="جهة العمل" autofocus required>
                        <span class="error-msg" id="d_e_clinic_name_error_msg"></span>
                      </div>
                      <div class="form-group col-xs-6"> 
                        <label>العنوان<span class="required"> *</span></label>
                        <input type="text" class="form-control" name="d_e_place_address" id="d_e_place_address" value="<?php echo set_value('d_e_place_address'); ?>" placeholder="ادخل عنوان جهة العمل" title="عنوان جهة العمل" autofocus required>
                        <span class="error-msg" id="d_e_place_address_error_msg"></span>
                      </div>
                      <div class="form-row">
                        <div class="form-group col-lg-6 col-md-12">
                          <label>من<span class="required"> *</span></label>
                          <input type="date" class="form-control" name='d_e_start_date' id='d_e_start_date' value="<?php echo set_value('d_e_start_date'); ?>" title="بداية فترة العمل" autofocus required>
                          <span class="error-msg" id="d_e_start_date_error_msg"></span>
                        </div>
                        <div class="form-group col-lg-6 col-md-12">
                          <label>إلى<span class="required"> *</span></label>
                          <input type="date" class="form-control" name='d_e_end_date' id='d_e_end_date' value="<?php echo set_value('d_e_end_date'); ?>" title="نهاية فترة العمل" autofocus required>
                          <span class="error-msg" id="d_e_end_date_error_msg"></span>
                        </div>                                                    
                      </div>
                      <div class="form-group col-xs-6"> 
                        <label>ملخص عن بعض مهام عملك السابق</label>
                        <textarea class="form-control" name="d_e_job_summary" id="d_e_job_summary" value="<?php echo set_value('d_e_job_summary'); ?>" placeholder="ادخل ابرز مهام عملك السب" title="ابز مهام عملك" autofocus  rows="3" cols="10"></textarea>
                      </div>
                      <div class="form-row">                       
                        <div class="form-group col-lg-6 col-md-12">
                          <label>شهادة الخبرة (ان وجدت)</label>
                          <input type="file" class="form-control" name='d_e_certificate' id='d_e_certificate' title="ارفع شهادة الخبرة ان وجدت" autofocus>
                        </div>                                                    
                      </div>
                      <div class="form-group col-xs-12">
                        <br>                                        
                        <button class="btn" type="submit" value="d_experience_data_submit" id="d_experience_data_submit" style="color:#fff;">حفظ</button>
                        <button class="btn" type="button" style="color:#fff;">اضافة خبرة</button>
                        <a class="nav-item nav-link btn btn-sm next-tab" id="nav-about-tab" data-toggle="tab" href="#nav-about" role="tab" aria-controls="nav-about" aria-selected="false">التالي</a>
                      </div>
                    </form> <!-- /form --> 
                  </div><!-- /tab-content -->
                </div><!--/col-9-->
              </div><!--/row-->
            </div><!-- container -->
          <?php endif;?>