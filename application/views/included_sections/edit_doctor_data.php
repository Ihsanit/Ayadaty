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
          <?php 
            $personal_form=APPPATH.'views/included_sections/personal_data.php';
            include($personal_form);?>
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