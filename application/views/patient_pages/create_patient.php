<div class="container">
<?php echo heading($page_name,2,'class="text-center"');
/*---------------include page which contains functions of form's tags*/
$included_page=APPPATH.'/views/shared_pages/input_fields.php';
include($included_page);
?>
<?php echo validation_errors();?>
<?php
 echo form_open_multipart('patient_c/create_patient');?>
 <div class="row">
	
	<div class="col-md-2">
	</div>
	<div class="col-md-8">
		<?php
		 make_input_fields('Name*','text','p_name','Patient\'s full name');
		 make_input_fields('Email*','email','p_email','Patient\'s Email');
		 make_input_fields('Address*','text','p_address','Patient\'s Address');
         ?>
         <div class="form-row">
            <div class="form-group col-lg-6 col-md-12">
              <label>Phone Number*</label>
              <input type="number" class="form-control input-fields" name='p_phone' placeholder="Patient's phone Number" autofocus required>
            </div>
            <div class="form-group col-lg-6 col-md-12">
              <label>Gender*</label>
              <select class="form-control input-fields" name='p_gender'>
                <option selected>Choose Patient's Gender ...</option>
                    <option value='1'>Male</option>
                    <option value='0'>Female</option>
              </select>
            </div>            
          </div>          
        <div class="form-row">
            <div class="form-group col-lg-6 col-md-12">
              <label>Birth Date*</label>
              <input type="date" class="form-control input-fields" name='p_birth_date' placeholder="Doctor's Employed date" autofocus required>
            </div>
            <div class="form-group col-lg-6 col-md-12">
              <label>Service*</label>
              <select class="form-control input-fields" name='p_service'>
                <option selected>Choose Service...</option>
                    <option value='1'>Dental</option>
                    <option value='2'>General Medcine</option>
                    <option value='3'>Other</option>
              </select>
            </div>            
          </div>
          
		       
		 <button type='submit' class='btn btn-primary btn-block'>Send</button>
 	</div>
 </div>
<?php
echo br(2);
 echo form_close();
 ?>