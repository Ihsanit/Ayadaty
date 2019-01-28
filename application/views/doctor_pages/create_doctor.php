<div class="container">
<?php echo heading($page_name,2,'class="text-center"');
/*---------------include page which contains functions of form's tags*/
$included_page=APPPATH.'/views/shared_pages/input_fields.php';
include($included_page);
?>
<?php echo validation_errors();?>
<?php
 echo form_open_multipart('doctor_c/create_doctor');?>
 <div class="row">
	
	<div class="col-md-2">
	</div>
	<div class="col-md-8">
		<?php
		 make_input_fields('Name*','text','d_name','Doctor\'s full name');
		 make_input_fields('Email*','email','d_email','Doctor\'s Email');
		 make_input_fields('Address*','text','d_address','Doctor\'s Address');
         ?>
         <div class="form-row">
            <div class="form-group col-lg-6 col-md-12">
              <label>Phone Number*</label>
              <input type="number" class="form-control input-fields" name='d_phone' placeholder="Doctor's phone Number" autofocus required>
            </div>
            <div class="form-group col-lg-6 col-md-12">
              <label>Gender*</label>
              <select class="form-control input-fields" name='d_gender'>
                <option selected>Choose Doctor's Gender ...</option>
                    <option value='1'>Male</option>
                    <option value='0'>Female</option>
              </select>
            </div>            
          </div>
          <div class="form-row">            
            <div class="form-group col-lg-6 col-md-12">
              <label>Qualifier*</label>
              <select class="form-control input-fields" name='d_qualifier'>
                <option selected>Choose Doctor's Qualifier...</option>
                    <option value='5'>PhD</option>
                    <option value='4'>Master</option>
                    <option value='3'>Bachelor</option>
                    <option value='2'>Diploma</option>
                    <option value='1'>Other</option>
              </select>
            </div>
            <div class="form-group col-lg-6 col-md-12">
              <label>Experience Years</label>
              <select class="form-control input-fields" name="d_experience">
                <option selected>Choose Doctor's Experience Years ...</option>
                    <option value='0'>less than 1 Year</option>
                    <option value='1'>1-3 Years</option>
                    <option value='2'>3-6 Years</option>
                    <option value='3'>6-9 Years</option>
                    <option value='4'>more than 20 Year</option>
              </select>
            </div>            
          </div>
        <div class="form-row">
            <div class="form-group col-lg-6 col-md-12">
              <label>Employed Date*</label>
              <input type="date" class="form-control input-fields" name='d_employ_date' placeholder="Doctor's Employed date" autofocus required>
            </div>
            <div class="form-group col-lg-6 col-md-12">
              <label>Speciality*</label>
              <select class="form-control input-fields" name='d_speciality_id'>
                <option selected>Choose Doctor's Speciality...</option>
                    <option value='1'>Dental</option>
                    <option value='2'>General Medcine</option>
                    <option value='3'>Other</option>
              </select>
            </div>            
          </div>
          <?php make_input_fields('Monthaly Salary*','text','d_salary','Doctor\'s Monthaly Salary');?>

        <?php
		 make_textarea_field("Any notes about the doctor",'d_note',"Any notes about the doctor");		
		 ?> 
		 <div class="form-row">
			 <div class="form-group col-lg-6 col-md-12">
	  		<?php
		  		echo form_label('Personal Image');
		  		$personal_img_arr=array(
		  			'type'	=>	'file',
		  			'name'	=>	'd_personal_img',
		  			'class'	=>	'form-control-file input-fields',
		  			'size'	=>	'20',
		  			'style'=>'border-radius:4px'
		  			);  		
		  		echo form_upload($personal_img_arr);
	  		?>
	  		</div>

	  		 <div class="form-group col-lg-6 col-md-12">
	  		<?php
		  		echo form_label('Certificate File*');
		  		$certificate_file_arr=array(
		  			'type'	=>	'file',
		  			'name'	=>	'd_certificate',
		  			'class'	=>	'form-control-file input-fields',
		  			'size'	=>	'50',
		  			'style'=>'border-radius:4px'

		  			);  		
		  		echo form_upload($certificate_file_arr);
	  		?>
	  		</div> 
  		</div>      
		 <button type='submit' class='btn btn-primary btn-block'>Send</button>
 	</div>
 </div>
<?php
echo br(2);
 echo form_close();
 ?>