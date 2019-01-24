<?php  
$included_input=APPPATH.'/views/include_views/include_input.php';
include($included_input);
echo validation_errors();?>

 <div class="book-container">

<?php echo form_open_multipart('patient_c/book_appointment');?> 	
	<div class="row">
    <div class="col-25 col-25-lbls">
    <?php echo form_label('Name*');?>
    </div>
    <div class="col-75">
    <?php make_input('','text','p_name','Your full name');?>
    </div>
  </div>
  <div class="row">
    <div class="col-25 col-25-lbls">
    <?php echo form_label('Email*');?>
    </div>
    <div class="col-75">
		 <?php make_input('','email','p_email','Your Email');?>
    </div>
  </div>
    <div class="row">
      <div class='col-25 col-25-lbls'>
        <label>Phone Number*</label>
      </div>
      <div class="col-25">
       <input type="number" name='p_phone' placeholder='Your phone Number' autofocus required>
      </div>
       <div class='col-25 col-25-lbls'>
        <label>Medical Service*</label>
      </div>
      <div class="col-25">
       <select>
        <option selected>Choose Medical Service...</option>
        <option value=''>Dental</option>
        <option value=''>Family Medicin</option>
        <option value=''>Others</option>
      </select>
      </div>
    </div>
      
     <div class="row">
      <div class='col-25 col-25-lbls'>
        <label>Appointment Date*</label>
      </div>
      <div class="col-25">
          <input type="date" name='appt_date' placeholder='Choose appointment date' autofocus required>      </div>
       <div class='col-25 col-25-lbls'>
        <label>Appointment Slot*</label>
      </div>
      <div class="col-25">
       <select>
        <option selected>Choose Appointment Slot...</option>
        <option value=''>09:00 A.M - 12:00 P.M</option>
        <option value=''>12:00 P.M - 04:00 P.M</option>
        <option value=''>04:00 P.M - 08:00 P.M</option>
      </select>
      </div>
    </div>        
    <div class="row">
    <div class="col-25 col-25-lbls">
    <?php echo form_label("Any notes for the doctor's office");?>
    </div>
    <div class="col-75">
      <?php make_textarea_field("",'appt_note',"Any notes for the doctor's office");?>
    </div>
  </div>  
   
    
    
    <div class="row">
    <div class="col-25">
    </div>
    <div class="col-75">
      <input type="checkbox">
      <label>
        I understand that this is only an appointment request and I will be secheduled only after aconfirmation call from Ayadaty.
      </label>
    </div>
    </div>
      <div class="row" style="text-align:center;">    
		<button class="btn" type='submit' value="submit">Book Appointement</button> 
    </div>
<?php
echo br(2);
 echo form_close();
 ?>
 </div>
 