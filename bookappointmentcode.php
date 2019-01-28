<div class="col-lg-4 col-md-7 col-sm-12">
                <div class="slider-box-appointment appointCol">
                    <div class="header">
                        <h3 class="heading">Book an Appointment</h3>
                    </div>
                    <hr class="hr-2">
	                <div class="body contactMainDiv">                    
						<?php
						 echo form_open('patient_c/book_appointment');					 
						 make_input_fields_other('text','p_name','Your Full Name');
						 make_input_fields_other('email','p_email','Your Email');
	         			?>
			            <div class="form-row">
				            <div class="form-group col-md-6">
				              <!-- <label>Phone Number*</label> -->
				              <input type="number" class="form-control book-input" name='p_phone' placeholder='Your phone No.' autofocus required>
				            </div>
				            <div class="form-group col-md-6">
				              <!-- <label>Medical Service*</label> -->
				              <select class="form-control book-input">
				                <option selected>Select Service</option>
				                    <option value=''>Dental</option>
				                    <option value=''>Family Medicin</option>
				                    <option value=''>Others</option>
				              </select>
				           	</div>            
			          	</div>
			        	<div class="form-row">
				            <div class="form-group col-md-6">
				              <!-- <label>Appointment Date*</label> -->
				              <input type="date" class="form-control book-input" name='appt_date' placeholder='Appointment Date' autofocus required>
							</div>
				            <div class="form-group col-md-6">
				              <!-- <label>Appointment Slot*</label> -->
				              <select id="inputState" class="form-control book-input">
				                <option selected>Appointment Slot</option>
				                    <option value=''>09:00 A.M - 12:00 P.M</option>
				                    <option value=''>12:00 P.M - 04:00 P.M</option>
				                    <option value=''>04:00 P.M - 08:00 P.M</option>
				              </select>
				            </div>            
			          	</div>

				        <?php make_textarea_field_other('appt_note',"Your any notes for the doctor's office");?>         
					 	<button type='submit' class='btn btn-black btn-block'>Book Appointement</button>
					</div><!-- end body-contant div -->
				</div><!-- end slider-box div -->
			</div><!-- end div col-lg-4 -->