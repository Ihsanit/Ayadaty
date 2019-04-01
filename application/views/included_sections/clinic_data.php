        <?php if(count($clinics)):?>
          	<?php $i=1;?>
           	<?php foreach ($clinics as $clinic):?> 
            <div class="container bootstrap snippet tab3">
              <div class="row">
                <div class="col-sm-12">
                	<h5 style="display:inline-block">بيانات العمل الحالي
                		(لديك <?php echo count($clinics);?> العيادات يمكنك تصفحها او تعديلها)</h5><span>العيادة<?php echo $i;?></span>
                	</h5>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-3"><!--left col-->
                </div><!--/col-3-->
                <div class="col-sm-9">
                  <div class="tab-content">
                    <?php echo validation_errors();?>
                    <form class="form" id="d_clinic_form" name="d_clinic_form" action="<?php echo base_url('updateclinic');?>" method="post" enctype="multipart/form-data">
                      <input type="hidden" id="d_c_d_id" name="d_c_d_id" value="<?php echo $doctor['d_id'];?>">
                      <input type="hidden" id="c_id" name="c_id" value="<?php echo $clinic['c_id'];?>">
                      <div class="form-group col-xs-6"> 
                        <label>المسمى الوظيفي<span class="required"> *</span></label>
                        <input type="text" class="form-control" name="d_c_job_name" id="d_c_job_name" value="<?php echo $clinic['c_job_name']; ?>" placeholder="ادخل المسمى الوظيفي" title="المسمى الوظيفي" autofocus required>
                        <span class="error-msg" id="d_c_job_name_error_msg"></span>
                      </div>
                      <div class="form-group col-xs-6"> 
                        <label>اسم العيادة<span class="required"> *</span></label>
                        <input type="text" class="form-control" name="d_c_name" id="d_c_name" value="<?php echo $clinic['c_name']; ?>" placeholder="ادخل اسم العيادة" title="اسم العيادة" autofocus required>
                        <span class="error-msg" id="d_c_name_error_msg"></span>
                      </div>
                      <div class="form-row">
                        <div class="form-group col-lg-6 col-md-12">
                          <label>عنوان العيادة<span class="required"> *</span></label>
                          <select class="form-control" name='d_c_country_address' id='d_c_country_address' title="اختر الدولة"autofocus required>
                            <option selected disabled="">اختر الدولة..</option>
                            <option value=" <?php echo $clinic['c_country_address'];?>" selected>اليمن</option>
                          </select>
                          <span class="error-msg" id="d_c_country_address_error_msg"></span>
                        </div>
                        <div class="form-group col-lg-6 col-md-12">
                          <label style="visibility: hidden;">عنوان العمل*</label>
                          <select class="form-control" name='d_c_city_address' id='d_c_city_address' title="اختر المدينة"autofocus required>
                            <option selected="" disabled="">اختر المدينة..</option>
                            <?php if(count($cities)):?>
                              <?php foreach ($cities as $city):?> 
                              	<?php if($clinic['c_city_address']===$city['city_id']):?>
                                	<option value=<?php echo $city['city_id'];?><?php echo set_select('d_c_city_address',$city['city_id']);?> selected><?php echo $city['city_name'];?></option>
                              	<?php else:?>
                                	<option value=<?php echo $city['city_id'];?><?php echo set_select('d_c_city_address',$city['city_id']);?>><?php echo $city['city_name'];?></option>
                              	<?php endif;?>                                                
                              <?php endforeach;?>
                            <?php endif;?>
                          </select>
                          <span class="error-msg" id="d_c_city_address_error_msg"></span>
                        </div>            
                      </div>
                      <div class="form-group col-xs-6"> 
                        <input type="text" id="d_c_street_address" value="<?php echo $clinic['c_street_address'];?>" class="form-control" name='d_c_street_address' placeholder="ادخل الشارع"  title="عنوان الشارع" autofocus required><!-- pattern="^[A-Za-z0-9_ء-ي'\s]{5,200}+$" -->
                        <span class="error-msg" id="d_c_street_address_error_msg"></span>
                      </div>
                      <div class="form-group col-xs-6"> 
                        <input type="text" id="d_c_place_name" value="<?php echo $clinic['c_place_name'];?>" class="form-control" name='d_c_place_name' placeholder="ادخل اسم العمارة - رقم الشقة"  title="العمارة - رقم الشقة" autofocus ><!-- pattern="^[A-Za-z0-9_ء-ي'\s]{5,200}+$" -->
                        <span class="error-msg" id="d_c_place_name_error_msg"></span>
                      </div>
                      <div class="form-row">
                        <div class="form-group col-lg-6 col-md-12">
                          <label>ايام العمل<span class="required"> *</span></label>
                          <select class="form-control" name='d_c_day_start' id='d_c_day_start' title="اختر اول ايام الدوام"autofocus required>
                            <option selected disabled>اختر بداية الدوام..</option>
                            <?php if(count($days)):?>
                              <?php foreach ($days as $day):?>
                              	<?php if($clinic['c_day_start']===$day['day_id']):?>                                                 
                                <option value=<?php echo $day['day_id'];?><?php echo set_select('d_c_day_start',$day['day_id']);?> selected><?php echo $day['day_name'];?></option>
                              	<?php else:?>
                              		<option value=<?php echo $day['day_id'];?><?php echo set_select('d_c_day_start',$day['day_id']);?>><?php echo $day['day_name'];?></option>
								                <?php endif;?>
                              <?php endforeach;?>
                            <?php endif;?>
                          </select>
                          <span class="error-msg" id="d_c_day_start_error_msg"></span>
                        </div>
                        <div class="form-group col-lg-6 col-md-12">
                          <label style="visibility: hidden;">نهاية فترة الدوام</label>
                            <select class="form-control" name='d_c_day_end' name='d_c_day_end' title="اختر اخر ايام الدوام"autofocus required>
                              <option selected disabled>اختر نهاية الدوام..</option>
                              <?php if(count($days)):?>
                                <?php foreach ($days as $day):?>
                                	<?php if($clinic['c_day_end']===$day['day_id']):?>                                                 
                                  		<option value=<?php echo $day['day_id'];?><?php echo set_select('d_c_day_end',$day['day_id']);?> selected><?php echo $day['day_name'];?></option>
                                	<?php else:?>
                                		<option value=<?php echo $day['day_id'];?><?php echo set_select('d_c_day_end',$day['day_id']);?>><?php echo $day['day_name'];?></option>
									               <?php endif;?>
                                <?php endforeach;?>
                              <?php endif;?>
                            </select>
                            <span class="error-msg" id="d_c_day_end_error_msg"></span>
                        </div>            
                      </div> 
                      <?php $periods=$clinic['c_period'];?>
                      <?php $final_periods=explode(',',$periods);?> 
                      <div class="form-row">
                        <div class="form-group col-lg-6 col-md-12">
                        <label style="display:block;">فترات الدوام<span class="required"> *</span></label>
                          الصباح
                          <label class="checkbox" >
                              <input type="checkbox" name="periods[]" id="periods" value="الصباح" <?php if(in_array('الصباح',$final_periods)):echo 'checked'; endif;?>/>
                              <span class="info"></span>
                          </label>
                        </div>
                        <div class="form-group col-lg-6 col-md-12">
                        <label style="visibility: hidden; display:block;" >نهاية فترة الدوام</label>
                          المساء
                          <label class="checkbox">
                              <input type="checkbox" name="periods[]" id="periods" value="المساء" <?php if(in_array('المساء',$final_periods)):echo 'checked'; endif;?>/>
                              <span class="info"></span>
                          </label>
                        </div>           
                      </div>
                      <div class="form-group col-xs-6"> 
                        <label>ملخص عن عملك او عيادتك</label>
                        <textarea class="form-control" name="d_c_summary" id="d_c_summary" placeholder="ادخل ملخص عن عملك او يادتك" title="ملخص عن عملك او يادتك" autofocus  rows="3" cols="10"><?php echo $clinic['c_summary']; ?></textarea>
                      </div>                     
                      <div class="form-group col-xs-12">
                        <br>
                        <button class="btn" type="submit" value="d_clinic_data_update" id="d_clinic_data_submit" style="color:#fff;">حفظ</button>
                        
                      </div>
                    </form>  <!-- /form -->                              
                  </div><!-- /tab-content -->
                </div><!--/col-9-->
              </div><!--/row-->
              <?php $i++;?>
            </div><!-- /container -->
        <?php endforeach;?>
    <?php else:?>
            <div class="container bootstrap snippet tab3">
              <div class="row">
                <div class="col-sm-12"><h5>بيانات العمل الحالي</h5></div>
              </div>
              <div class="row">
                <div class="col-sm-3"><!--left col-->
                </div><!--/col-3-->
                <div class="col-sm-9">
                  <div class="tab-content">
                    <?php echo validation_errors();?>
                    <form class="form" id="d_clinic_form" name="d_clinic_form" action="<?php echo base_url('addclinic');?>" method="post" enctype="multipart/form-data">
                      <input type="hidden" id="d_c_d_id" name="d_c_d_id" value="<?php echo $doctor['d_id'];?>">
                      <div class="form-group col-xs-6"> 
                        <label>المسمى الوظيفي<span class="required"> *</span></label>
                        <input type="text" class="form-control" name="d_c_job_name" id="d_c_job_name" placeholder="ادخل المسمى الوظيفي" title="المسمى الوظيفي" autofocus required>
                        <span class="error-msg" id="d_c_job_name_error_msg"></span>
                      </div>
                      <div class="form-group col-xs-6"> 
                        <label>اسم العيادة<span class="required"> *</span></label>
                        <input type="text" class="form-control" name="d_c_name" id="d_c_name" placeholder="ادخل اسم العيادة" title="اسم العيادة" autofocus required>
                        <span class="error-msg" id="d_c_name_error_msg"></span>
                      </div>
                      <div class="form-row">
                        <div class="form-group col-lg-6 col-md-12">
                          <label>عنوان العيادة<span class="required"> *</span></label>
                          <select class="form-control" name='d_c_country_address' id='d_c_country_address' title="اختر الدولة"autofocus required>
                            <option selected disabled="">اختر الدولة..</option>
                            <option value='1' <?php echo set_select('d_c_country_address','1');?>>اليمن</option>
                          </select>
                          <span class="error-msg" id="d_c_country_address_error_msg"></span>
                        </div>
                        <div class="form-group col-lg-6 col-md-12">
                          <label style="visibility: hidden;">عنوان العمل*</label>
                          <select class="form-control" name='d_c_city_address' id='d_c_city_address' title="اختر المدينة"autofocus required>
                            <option selected="" disabled="">اختر المدينة..</option>
                            <?php if(count($cities)):?>
                              <?php foreach ($cities as $city):?>                                                 
                                <option value=<?php echo $city['city_id'];?><?php echo set_select('d_c_city_address',$city['city_id']);?>><?php echo $city['city_name'];?></option>
                              <?php endforeach;?>
                            <?php endif;?>
                          </select>
                          <span class="error-msg" id="d_c_city_address_error_msg"></span>
                        </div>            
                      </div>
                      <div class="form-group col-xs-6"> 
                        <input type="text" id="d_c_street_address" value="<?php echo set_value('d_c_street_address');?>" class="form-control" name='d_c_street_address' placeholder="ادخل الشارع"  title="عنوان الشارع" autofocus required><!-- pattern="^[A-Za-z0-9_ء-ي'\s]{5,200}+$" -->
                        <span class="error-msg" id="d_c_street_address_error_msg"></span>
                      </div>
                      <div class="form-group col-xs-6"> 
                        <input type="text" id="d_c_place_name" value="<?php echo set_value('d_c_place_name');?>" class="form-control" name='d_c_place_name' placeholder="ادخل اسم العمارة - رقم الشقة"  title="العمارة - رقم الشقة" autofocus ><!-- pattern="^[A-Za-z0-9_ء-ي'\s]{5,200}+$" -->
                        <span class="error-msg" id="d_c_place_name_error_msg"></span>
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
                          <span class="error-msg" id="d_c_day_start_error_msg"></span>
                        </div>
                        <div class="form-group col-lg-6 col-md-12">
                          <label style="visibility: hidden;">نهاية فترة الدوام</label>
                            <select class="form-control" name='d_c_day_end' id='d_c_day_end' title="اختر اخر ايام الدوام"autofocus required>
                              <option selected disabled>اختر نهاية الدوام..</option>
                              <?php if(count($days)):?>
                                <?php foreach ($days as $day):?>                                                 
                                  <option value=<?php echo $day['day_id'];?><?php echo set_select('d_c_day_end',$day['day_id']);?>><?php echo $day['day_name'];?></option>
                                <?php endforeach;?>
                              <?php endif;?>
                            </select>
                            <span class="error-msg" id="d_c_day_end_error_msg"></span>
                        </div>            
                      </div>
                      <!-- ---------------------------- -->
                      <div class="form-row">
                        <div class="form-group col-lg-6 col-md-12">
                        <label style="display:block;">فترات الدوام<span class="required"> *</span></label>
                          الصباح
                          <label class="checkbox" >
                              <input type="checkbox" name="periods[]" id="periods" value="الصباح" />
                              <span class="info"></span>
                          </label>
                        </div>
                        <div class="form-group col-lg-6 col-md-12">
                        <label style="visibility: hidden; display:block;" >نهاية فترة الدوام</label>
                          المساء
                          <label class="checkbox">
                              <input type="checkbox" name="periods[]" id="periods" value="المساء" />
                              <span class="info"></span>
                          </label>
                        </div>           
                      </div>
                      <!-- ------------------------------------------ -->    
                      <div class="form-group col-xs-6"> 
                        <label>ملخص عن عملك او عيادتك</label>
                        <textarea class="form-control" name="d_c_summary" id="d_c_summary" placeholder="ادخل ملخص عن عملك او يادتك" title="ملخص عن عملك او يادتك" autofocus  rows="3" cols="10"><?php echo set_value('d_c_summary'); ?></textarea>
                      </div>                     
                      <div class="form-group col-xs-12">
                        <br>
                        <button class="btn" type="submit" value="d_clinic_data_submit" id="d_clinic_data_submit" style="color:#fff;">حفظ</button>
                       </div>
                    </form>  <!-- /form -->                              
                  </div><!-- /tab-content -->
                </div><!--/col-9-->
              </div><!--/row-->
            </div><!-- /container -->
        <?php endif;?>
        <?php if(count($clinics)<3):?>
            <div class="container bootstrap snippet tab3">
              <div class="row">
                <div class="col-sm-12"><h5>بيانات العمل الحالي</h5></div>
              </div>
              <div class="row">
                <div class="col-sm-3"><!--left col-->
                </div><!--/col-3-->
                <div class="col-sm-9">
                  <div class="tab-content">
                    <?php echo validation_errors();?>
                    <form class="form" id="d_clinic_form" name="d_clinic_form" action="<?php echo base_url('addclinic');?>" method="post" enctype="multipart/form-data">
                      <input type="hidden" id="d_c_d_id" name="d_c_d_id" value="<?php echo $doctor['d_id'];?>">
                      <div class="form-group col-xs-6"> 
                        <label>المسمى الوظيفي<span class="required"> *</span></label>
                        <input type="text" class="form-control" name="d_c_job_name" id="d_c_job_name" placeholder="ادخل المسمى الوظيفي" title="المسمى الوظيفي" autofocus required>
                        <span class="error-msg" id="d_c_job_name_error_msg"></span>
                      </div>
                      <div class="form-group col-xs-6"> 
                        <label>اسم العيادة<span class="required"> *</span></label>
                        <input type="text" class="form-control" name="d_c_name" id="d_c_name" placeholder="ادخل اسم العيادة" title="اسم العيادة" autofocus required>
                        <span class="error-msg" id="d_c_name_error_msg"></span>
                      </div>
                      <div class="form-row">
                        <div class="form-group col-lg-6 col-md-12">
                          <label>عنوان العيادة<span class="required"> *</span></label>
                          <select class="form-control" name='d_c_country_address' id='d_c_country_address' title="اختر الدولة"autofocus required>
                            <option selected="" disabled="">اختر الدولة..</option>
                            <option value='1' <?php echo set_select('d_c_country_address','1');?>>اليمن</option>
                          </select>
                          <span class="error-msg" id="d_c_country_address_error_msg"></span>
                        </div>
                        <div class="form-group col-lg-6 col-md-12">
                          <label style="visibility: hidden;">عنوان العمل*</label>
                          <select class="form-control" name='d_c_city_address' id='d_c_city_address' title="اختر المدينة"autofocus required>
                            <option selected="" disabled>اختر المدينة..</option>
                            <?php if(count($cities)):?>
                              <?php foreach ($cities as $city):?>                                                 
                                <option value=<?php echo $city['city_id'];?><?php echo set_select('d_c_city_address',$city['city_id']);?>><?php echo $city['city_name'];?></option>
                              <?php endforeach;?>
                            <?php endif;?>
                          </select>
                          <span class="error-msg" id="d_c_city_address_error_msg"></span>
                        </div>            
                      </div>
                      <div class="form-group col-xs-6"> 
                        <input type="text" id="d_c_street_address" value="<?php echo set_value('d_c_street_address');?>" class="form-control" name='d_c_street_address' placeholder="ادخل الشارع"  title="عنوان الشارع" autofocus required><!-- pattern="^[A-Za-z0-9_ء-ي'\s]{5,200}+$" -->
                        <span class="error-msg" id="d_c_street_address_error_msg"></span>
                      </div>
                      <div class="form-group col-xs-6"> 
                        <input type="text" id="d_c_place_name" value="<?php echo set_value('d_c_place_name');?>" class="form-control" name='d_c_place_name' placeholder="ادخل اسم العمارة - رقم الشقة"  title="العمارة - رقم الشقة" autofocus ><!-- pattern="^[A-Za-z0-9_ء-ي'\s]{5,200}+$" -->
                        <span class="error-msg" id="d_c_place_name_error_msg"></span>
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
                          <span class="error-msg" id="d_c_day_start_error_msg"></span>
                        </div>
                        <div class="form-group col-lg-6 col-md-12">
                          <label style="visibility: hidden;">نهاية فترة الدوام</label>
                            <select class="form-control" name='d_c_day_end' id='d_c_day_end' title="اختر اخر ايام الدوام"autofocus required>
                              <option selected disabled>اختر نهاية الدوام..</option>
                              <?php if(count($days)):?>
                                <?php foreach ($days as $day):?>                                                 
                                  <option value=<?php echo $day['day_id'];?><?php echo set_select('d_c_day_end',$day['day_id']);?>><?php echo $day['day_name'];?></option>
                                <?php endforeach;?>
                              <?php endif;?>
                            </select>
                            <span class="error-msg" id="d_c_day_end_error_msg"></span>
                        </div>            
                      </div>
                      
                      <!-- ---------------------------- -->
                      <div class="form-row">
                        <div class="form-group col-lg-6 col-md-12">
                        <label style="display:block;">فترات الدوام<span class="required"> *</span></label>
                          الصباح
                          <label class="checkbox" >
                              <input type="checkbox" name="periods[]" id="periods" value="الصباح" />
                              <span class="info"></span>
                          </label>
                        </div>
                        <div class="form-group col-lg-6 col-md-12">
                        <label style="visibility: hidden; display:block;" >نهاية فترة الدوام</label>
                          المساء
                          <label class="checkbox">
                              <input type="checkbox" name="periods[]" id="periods" value="المساء" />
                              <span class="info"></span>
                          </label>
                        </div>           
                      </div>
                      <!-- ------------------------------------------ -->    
                      <div class="form-group col-xs-6"> 
                        <label>ملخص عن عملك او عيادتك</label>
                        <textarea class="form-control" name="d_c_summary" id="d_c_summary" placeholder="ادخل ملخص عن عملك او يادتك" title="ملخص عن عملك او يادتك" autofocus  rows="3" cols="10"><?php echo set_value('d_c_summary'); ?></textarea>
                      </div>                     
                      <div class="form-group col-xs-12">
                        <br>
                        <button class="btn" type="submit" value="d_clinic_data_submit" id="d_clinic_data_submit" style="color:#fff;">حفظ</button>
                       </div>
                    </form>  <!-- /form -->                              
                  </div><!-- /tab-content -->
                </div><!--/col-9-->
              </div><!--/row-->
            </div><!-- /container -->
            <?php endif;?>