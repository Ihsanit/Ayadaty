		<?php if(count($qualifications)):?>
			<?php $i=1;?>
			<?php foreach ($qualifications as $qualification):?> 			
				<div class="container bootstrap snippet tab1">
		            <div class="row">
		              <div class="col-sm-12">
		                <h5 style="display:inline-block;">بيانات الطبيب التعليمية(لديك <?php echo count($qualifications);?> مؤهلات يمكنك تصفحها او تعديلها)</h5><span>المؤهل<?php echo $i;?></span>
		              </div>
		            </div>
		            <div class="row">
		              <div class="col-sm-3"><!--left col-->
		              </div><!--/col-3-->
		              <div class="col-sm-9">
		                <div class="tab-content">
		                  <?php echo validation_errors();?>
		                  <form class="form" id="d_qualification_form" name="d_qualification_form" action="<?php echo base_url('updatequalification');?>" method="post" enctype="multipart/form-data">
		                    <input type="hidden" id="d_q_id" name="d_q_id" value="<?php echo $doctor['d_id'];?>">
		                    <input type="hidden" id="q_id" name="q_id" value="<?php echo $qualification['q_id'];?>">
		                    <input type="hidden" id="old_q_certificate" name="old_q_certificate" value="<?php echo $qualification['q_certificate']?>">
		                    <div class="form-group col-xs-6"> 
		                      <label>نوع المؤهل<span class="required"> *</span></label>
		                      <select class="form-control" id="d_qualification_type" name='d_qualification_type'autofocus required>
		                        <option value="" disabled selected>اختر نوع المؤهل..</option>
		                        <?php if(count($qualification_types)):?>
		                          <?php foreach ($qualification_types as $q_type):?>
		                          		<?php if($qualification['q_q_t_id']===$q_type['q_t_id']):?>
		                          			<option value=<?php echo $q_type['q_t_id'];?><?php echo set_select('d_qualification_type',$q_type['q_t_id']);?> selected><?php echo $q_type['q_t_name'];?></option>
		                          		<?php else:?>
		                            		<option value=<?php echo $q_type['q_t_id'];?><?php echo set_select('d_qualification_type',$q_type['q_t_id']);?>><?php echo $q_type['q_t_name'];?></option>
		                          		<?php endif;?>
		                          <?php endforeach;?>
		                        <?php endif;?>
		                      </select>
		                      <span class="error-msg" id="d_q_type_error_msg"></span>
		                    </div>
		                    <div class="form-group col-xs-6"> 
		                      <label>جهة الدراسة<span class="required"> *</span></label>
		                      <select class="form-control" id="d_university" name='d_university'autofocus required>
		                        <option value="" selected disabled>اختر جهة الدراسة..</option>
		                        <?php if(count($universities)):?>
		                          <?php foreach ($universities as $university):?>
		                          	<?php if($qualification['q_un_id']===$university['un_id']):?>
		                            	<option value=<?php echo $university['un_id'];?><?php echo set_select('d_university',$university['un_id']);?> selected><?php echo $university['un_name'];?></option>
		                         	<?php else:?>
		                         		<option value=<?php echo $university['un_id'];?><?php echo set_select('d_university',$university['un_id']);?>><?php echo $university['un_name'];?></option>
									<?php endif;?>
		                          <?php endforeach;?>
		                        <?php endif;?>
		                      </select>
		                      <span class="error-msg" id="d_university_error_msg"></span>
		                    </div>
		                    <div class="form-group col-xs-6"> 
		                      <label>التخصص<span class="required"> *</span></label>
		                      <select class="form-control" id="d_education_specialty" name='d_education_specialty'autofocus required>
		                        <option value="" selected disabled>اختر التخصص الدراسي..</option>
		                        <?php if(count($education_specialties)):?>
		                          <?php foreach ($education_specialties as $educ_specialty):?>
		                          	<?php if($qualification['q_e_s_id']===$educ_specialty['e_s_id']):?>
		                            	<option value=<?php echo $educ_specialty['e_s_id'];?><?php echo set_select('d_education_specialty',$educ_specialty['e_s_id']);?> selected><?php echo $educ_specialty['e_s_name'];?></option>
		                          	<?php else:?>
		                          		<option value=<?php echo $educ_specialty['e_s_id'];?><?php echo set_select('d_education_specialty',$educ_specialty['e_s_id']);?>><?php echo $educ_specialty['e_s_name'];?></option>
									<?php endif;?>
		                          <?php endforeach;?>
		                        <?php endif;?>
		                      </select>
		                      <span class="error-msg" id="d_education_specialty_error_msg"></span>
		                    </div>                                      
		                    <div class="form-row">
		                      <div class="form-group col-lg-6 col-md-12">
		                        <label>من<span class="required"> *</span></label>
		                        <input style="direction:ltr;" name="d_q_start_date" id="d_q_start_date" class="form-control" min='1899-01-01' value="<?php echo isset($qualification['q_start_date']) ? set_value('d_q_start_date', date('Y-m-d', strtotime($qualification['q_start_date']))) : set_value('d_q_start_date'); ?>" title="ادخل بداية الدراسة" autofocus required>
		                        <span class="error-msg" id="d_q_start_date_error_msg"></span>
		                      </div>
		                      <div class="form-group col-lg-6 col-md-12">
		                        <label>إلى<span class="required"> *</span></label>
		                        <input  style="direction:ltr;" name="d_q_graduate_date" id="d_q_graduate_date"  value="<?php echo isset($qualification['q_graduate_date']) ? set_value('d_q_graduate_date', date('Y-m-d', strtotime($qualification['q_graduate_date']))) : set_value('d_q_graduate_date'); ?>" class="form-control"  title="ادخل نهاية الدراسة" autofocus required>
		                        <span class="error-msg" id="d_q_graduate_date_error_msg"></span>
		                      </div>                                                    
		                    </div>
		                    <div class="form-row">
		                      <div class="form-group col-lg-6 col-md-12"> 
		                        <label>المعدل<span class="required"> *</span></label>
		                        <input type="number" class="form-control" id='d_q_gpa' name='d_q_gpa' min='1' max='100' value="<?php echo $qualification['q_gpa']; ?>" title="ادخل المعدل الدراسي" autofocus required>
		                        <span class="error-msg" id="d_q_gpa_error_msg"></span>
		                      </div>                                      
		                      <div class="form-group col-lg-6 col-md-12">
		                        <label>شهادة التخرج<span class="required"> *</span></label>
		                        <input type="file" class="form-control" id="d_q_certificate" name='d_q_certificate' title="ارفع شهادة الدراسة" autofocus>
		                        <span class="error-msg" id="d_q_certificate_error_msg"></span>
		                      </div>                                                    
		                    </div>                        
		                    <div class="form-group col-xs-12">
		                      	<br>
		                      	<button class="btn" type="submit" value="d_qualification_data_submit" id="d_qualification_data_submit" style="color:#fff;">حفظ</button>
		                 		<a class="nav-item nav-link btn btn-sm next-tab" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">التالي</a>
		                    </div>
		                  </form><!-- /form -->  
		                </div><!-- /tab-content -->
		              </div><!--/col-9-->
		            </div><!--/row-->
		            <?php $i++;?>
		        </div><!-- /container -->
			<?php endforeach;?>
			<!-- first to add qualifications -->
		<?php else:?>		
        <div class="container bootstrap snippet tab1" >
            <div class="row">
              <div class="col-sm-12">
                <h5>بيانات الطبيب التعليمية</h5>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-3"><!--left col-->
              </div><!--/col-3-->
              <div class="col-sm-9">
                <div class="tab-content">
                  <?php echo validation_errors();?>
                  <form class="form" id="d_qualification_form" name="d_qualification_form" action="<?php echo base_url('addqualification');?>" method="post" enctype="multipart/form-data">
                    <input type="hidden" id="d_q_id" name="d_q_id" value="<?php echo $doctor['d_id'];?>">
                    <div class="form-group col-xs-6"> 
                      <label>نوع المؤهل<span class="required"> *</span></label>
                      <select class="form-control" id="d_qualification_type" name='d_qualification_type'autofocus required>
                        <option value="" disabled selected>اختر نوع المؤهل..</option>
                        <?php if(count($qualification_types)):?>
                          <?php foreach ($qualification_types as $q_type):?>
                            <option value=<?php echo $q_type['q_t_id'];?><?php echo set_select('d_qualification_type',$q_type['q_t_id']);?>><?php echo $q_type['q_t_name'];?></option>
                          <?php endforeach;?>
                        <?php endif;?>
                      </select>
                      <span class="error-msg" id="d_q_type_error_msg"></span>
                    </div>
                    <div class="form-group col-xs-6"> 
                      <label>جهة الدراسة<span class="required"> *</span></label>
                      <select class="form-control" id="d_university" name='d_university'autofocus required>
                        <option value="" selected disabled>اختر جهة الدراسة..</option>
                        <?php if(count($universities)):?>
                          <?php foreach ($universities as $university):?>
                            <option value=<?php echo $university['un_id'];?><?php echo set_select('d_university',$university['un_id']);?>><?php echo $university['un_name'];?></option>
                          <?php endforeach;?>
                        <?php endif;?>
                      </select>
                      <span class="error-msg" id="d_university_error_msg"></span>
                    </div>
                    <div class="form-group col-xs-6"> 
                      <label>التخصص<span class="required"> *</span></label>
                      <select class="form-control" id="d_education_specialty" name='d_education_specialty'autofocus required>
                        <option value="" selected disabled>اختر التخصص الدراسي..</option>
                        <?php if(count($education_specialties)):?>
                          <?php foreach ($education_specialties as $educ_specialty):?>
                            <option value=<?php echo $educ_specialty['e_s_id'];?><?php echo set_select('d_education_specialty',$educ_specialty['e_s_id']);?>><?php echo $educ_specialty['e_s_name'];?></option>
                          <?php endforeach;?>
                        <?php endif;?>
                      </select>
                      <span class="error-msg" id="d_education_specialty_error_msg"></span>
                    </div>                                      
                    <div class="form-row">
                      <div class="form-group col-lg-6 col-md-12">
                        <label>من<span class="required"> *</span></label>
                        <input style="direction:ltr;" name="d_q_start_date" id="d_q_start_date" class="form-control" min='1899-01-01' value="<?php echo set_value('d_q_start_date'); ?>" title="ادخل بداية الدراسة" autofocus required>
                        <span class="error-msg" id="d_q_start_date_error_msg"></span>
                      </div>
                      <div class="form-group col-lg-6 col-md-12">
                        <label>إلى<span class="required"> *</span></label>
                        <input  style="direction:ltr;" name="d_q_graduate_date" id="d_q_graduate_date" value="<?php echo set_value('d_q_graduate_date'); ?>" class="form-control"  title="ادخل نهاية الدراسة" autofocus required>
                        <span class="error-msg" id="d_q_graduate_date_error_msg"></span>
                      </div>                                                    
                    </div>
                    <div class="form-row">
                      <div class="form-group col-lg-6 col-md-12"> 
                        <label>المعدل<span class="required"> *</span></label>
                        <input type="number" class="form-control" id='d_q_gpa' name='d_q_gpa' min='1' max='100' value="<?php echo set_value('d_q_gpa'); ?>" title="ادخل المعدل الدراسي" autofocus required>
                        <span class="error-msg" id="d_q_gpa_error_msg"></span>
                      </div>                                      
                      <div class="form-group col-lg-6 col-md-12">
                        <label>شهادة التخرج<span class="required"> *</span></label>
                        <input type="file" class="form-control" id="d_q_certificate" name='d_q_certificate' title="ارفع شهادة الدراسة" autofocus required>
                        <span class="error-msg" id="d_q_certificate_error_msg"></span>
                      </div>                                                    
                    </div>                        
                    <div class="form-group col-xs-12">
                      <br>
                      <button class="btn" type="submit" value="d_qualification_data_submit" id="d_qualification_data_submit" style="color:#fff;">حفظ</button>
                      <a class="nav-item nav-link btn btn-sm next-tab" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">التالي</a>
                    </div>
                  </form><!-- /form -->  
                </div><!-- /tab-content -->
              </div><!--/col-9-->
            </div><!--/row-->
        </div><!-- /container -->
    <?php endif;?>
    <?php if(count($qualifications)<3):?>
    	<div class="container bootstrap snippet tab1" >
            <div class="row">
              <div class="col-sm-12">
                <h5>بيانات الطبيب التعليمية</h5>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-3"><!--left col-->
              </div><!--/col-3-->
              <div class="col-sm-9">
                <div class="tab-content">
                  <?php echo validation_errors();?>
                  <form class="form" id="d_qualification_form" name="d_qualification_form" action="<?php echo base_url('addqualification');?>" method="post" enctype="multipart/form-data">
                    <input type="hidden" id="d_q_id" name="d_q_id" value="<?php echo $doctor['d_id'];?>">
                    <div class="form-group col-xs-6"> 
                      <label>نوع المؤهل<span class="required"> *</span></label>
                      <select class="form-control" id="d_qualification_type" name='d_qualification_type'autofocus required>
                        <option value="" disabled selected>اختر نوع المؤهل..</option>
                        <?php if(count($qualification_types)):?>
                          <?php foreach ($qualification_types as $q_type):?>
                            <option value=<?php echo $q_type['q_t_id'];?><?php echo set_select('d_qualification_type',$q_type['q_t_id']);?>><?php echo $q_type['q_t_name'];?></option>
                          <?php endforeach;?>
                        <?php endif;?>
                      </select>
                      <span class="error-msg" id="d_q_type_error_msg"></span>
                    </div>
                    <div class="form-group col-xs-6"> 
                      <label>جهة الدراسة<span class="required"> *</span></label>
                      <select class="form-control" id="d_university" name='d_university'autofocus required>
                        <option value="" selected disabled>اختر جهة الدراسة..</option>
                        <?php if(count($universities)):?>
                          <?php foreach ($universities as $university):?>
                            <option value=<?php echo $university['un_id'];?><?php echo set_select('d_university',$university['un_id']);?>><?php echo $university['un_name'];?></option>
                          <?php endforeach;?>
                        <?php endif;?>
                      </select>
                      <span class="error-msg" id="d_university_error_msg"></span>
                    </div>
                    <div class="form-group col-xs-6"> 
                      <label>التخصص<span class="required"> *</span></label>
                      <select class="form-control" id="d_education_specialty" name='d_education_specialty'autofocus required>
                        <option value="" selected disabled>اختر التخصص الدراسي..</option>
                        <?php if(count($education_specialties)):?>
                          <?php foreach ($education_specialties as $educ_specialty):?>
                            <option value=<?php echo $educ_specialty['e_s_id'];?><?php echo set_select('d_education_specialty',$educ_specialty['e_s_id']);?>><?php echo $educ_specialty['e_s_name'];?></option>
                          <?php endforeach;?>
                        <?php endif;?>
                      </select>
                      <span class="error-msg" id="d_education_specialty_error_msg"></span>
                    </div>                                      
                    <div class="form-row">
                      <div class="form-group col-lg-6 col-md-12">
                        <label>من<span class="required"> *</span></label>
                        <input style="direction:ltr;" name="d_q_start_date" id="d_q_start_date" class="form-control" min='1899-01-01' value="<?php echo set_value('d_q_start_date'); ?>" title="ادخل بداية الدراسة" autofocus required>
                        <span class="error-msg" id="d_q_start_date_error_msg"></span>
                      </div>
                      <div class="form-group col-lg-6 col-md-12">
                        <label>إلى<span class="required"> *</span></label>
                        <input  style="direction:ltr;" name="d_q_graduate_date" id="d_q_graduate_date" value="<?php echo set_value('d_q_graduate_date'); ?>" class="form-control"  title="ادخل نهاية الدراسة" autofocus required>
                        <span class="error-msg" id="d_q_graduate_date_error_msg"></span>
                      </div>                                                    
                    </div>
                    <div class="form-row">
                      <div class="form-group col-lg-6 col-md-12"> 
                        <label>المعدل<span class="required"> *</span></label>
                        <input type="number" class="form-control" id='d_q_gpa' name='d_q_gpa' min='1' max='100' value="<?php echo set_value('d_q_gpa'); ?>" title="ادخل المعدل الدراسي" autofocus required>
                        <span class="error-msg" id="d_q_gpa_error_msg"></span>
                      </div>                                      
                      <div class="form-group col-lg-6 col-md-12">
                        <label>شهادة التخرج<span class="required"> *</span></label>
                        <input type="file" class="form-control" id="d_q_certificate" name='d_q_certificate' title="ارفع شهادة الدراسة" autofocus required>
                        <span class="error-msg" id="d_q_certificate_error_msg"></span>
                      </div>                                                    
                    </div>                        
                    <div class="form-group col-xs-12">
                      <br>
                      <button class="btn" type="submit" value="d_qualification_data_submit" id="d_qualification_data_submit" style="color:#fff;">حفظ</button>
                      <a class="nav-item nav-link btn btn-sm next-tab" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">التالي</a>
                    </div>
                  </form><!-- /form -->  
                </div><!-- /tab-content -->
              </div><!--/col-9-->
            </div><!--/row-->
        </div><!-- /container -->
        <?php endif;?>