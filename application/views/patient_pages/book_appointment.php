<div class="container">
<?php echo heading($page_name,2,'class="text-center"');
/*---------------include page which contains functions of form's tags*/
$included_page=APPPATH.'/views/shared_pages/input_fields.php';
include($included_page);
?>
<?php echo validation_errors();?>
<?php
 echo form_open('patient_c/book_appointment');?>
 <div class="row">
 	
	<div class="col-md-2" style="font-size:1.2em;line-height: 1.7">
	<br/>
		<?php echo heading("Day",4,'class="btn-primary text-center"');?>
		<?php
		$days=array('Saturday','Sunday','Monday','Tuseday','Wednesday','Thurseday','Friday');
		for($i=0;$i<7;$i++):
			echo $days[$i];
			echo br(1);
		endfor;
		?>
	</div>		
	<div class="col-md-2" style="font-size:1.2em;line-height: 1.7">
	<br/>
		<?php echo heading("Time",4,'class="btn-primary text-center"');?>
		<?php
		for($i=1;$i<7;$i++):
			echo '08:00-19:00 hrs';
			echo br(1);
		endfor;
		echo 'Closed';
		?>
	</div>
	<div class="col-md-1">	
	</div>
	<div class="col-md-6">
		<?php
		 make_input_fields('Name*','text','p_name','Enter your full name');
		 make_input_fields('Email*','email','p_email','Enter your Email');
         ?>
         <div class="form-row">
            <div class="form-group col-md-6">
              <label>Phone Number*</label>
              <input type="number" class="form-control" name='p_phone' placeholder='Enter your phone Number' autofocus required>
            </div>
            <div class="form-group col-md-6">
              <label>Medical Service*</label>
              <select class="form-control">
                <option selected>Choose Medical Service...</option>
                    <option value=''>Dental</option>
                    <option value=''>Family Medicin</option>
                    <option value=''>Others</option>
              </select>
            </div>            
          </div>
        <div class="form-row">
            <div class="form-group col-md-6">
              <label>Appointment Date*</label>
              <input type="date" class="form-control" name='appt_date' placeholder='Choose appointment date' autofocus required>
            </div>
            <div class="form-group col-md-6">
              <label>Appointment Slot*</label>
              <select id="inputState" class="form-control">
                <option selected>Choose Appointment Slot...</option>
                    <option value=''>09:00 A.M - 12:00 P.M</option>
                    <option value=''>12:00 P.M - 04:00 P.M</option>
                    <option value=''>04:00 P.M - 08:00 P.M</option>
              </select>
            </div>            
          </div>

        <?php
		 make_textarea_field("Any notes for the doctor's office",'appt_note',"Enter any notes for the doctor's office");
		
		 ?>
         <div class="form-group">
            <div class="form-check">
              <input class="form-check-input" type="checkbox">
              <label class="form-check-label" for="gridCheck">
                I understand that this is only an appointment request and I will be secheduled only after aconfirmation call from ABC.
              </label>
            </div>
          </div>
		 <button type='submit' class='btn btn-primary btn-block'>Book Appointement</button>
 	</div>
 </div>
<?php
echo br(2);
 echo form_close();
 ?>

 

