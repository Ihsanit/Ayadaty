					<!--footer starts from here-->
		<footer class="footer">
			<div class="container bottom_border">
			<div class="row">
				<div class=" col-sm-4 col-md col-sm-4  col-12 col">
					<h5 class="headin5_amrc col_white_amrc pt2">Ayadaty</h5>
					<!--headin5_amrc-->
					<ul class="footer_ul_amrc">
						<li><a href="#">من نحن</a></li>
						<li><a href="#">فريق عيادني</a></li>
						<li><a href="#">القوانين والشروط</a></li>			
						<li><a href="#">اتفاقية الخصوصية</a></li>
						<li><a href="#">تواصل معنا</a></li>
					</ul>			
					<p><i class="fa fa-phone"></i>  +91-9999878398  </p>
					<p><i class="fa fa fa-envelope"></i> ihsan@ihsanit.com  </p>

				</div>


			<div class=" col-sm-4 col-md  col-12 col">
				<h5 class="headin5_amrc col_white_amrc pt2">روابط سريعة</h5>
				<!--headin5_amrc-->
				<ul class="footer_ul_amrc">
					<li><a href="#">التخصصات</a></li>		
					<li><a href="<?php echo base_url('showdoctors');?>">اطباء</a></li>
					<li><a href="<?php echo base_url('registerdoctor');?>">تسجيل طبيب</a></li>
					<li><a href="#">تسجيل دخول</a></li>
				</ul>	
				<!--footer_ul_amrc ends here-->
			</div>


			<div class=" col-sm-4 col-md  col-12 col">
				<h5 class="headin5_amrc col_white_amrc pt2">التخصصات</h5>
				<!--headin5_amrc-->
				<ul class="footer_ul_amrc">
					<?php if(count($specialties)):?>
                        <?php foreach ($specialties as $specialty):?>
                        	<li><a href="#"><?php echo $specialty['specialty_name'];?></a></li>
                        <?php endforeach;?>
                    <?php endif;?>
				</ul>	
				<!--footer_ul_amrc ends here-->
			</div>


			<div class=" col-sm-4 col-md  col-12 col">
				<h5 class="headin5_amrc col_white_amrc pt2">المحافظات</h5>
				<!--headin5_amrc ends here-->

				<ul class="footer_ul_amrc">
						<li><a href="#">صنعاء</a></li>
						<li><a href="#">عدن</a></li>
						<li><a href="#">تعز</a></li>			
						<li><a href="#">حضرموت</a></li>
						<li><a href="#">ذمار</a></li>									
						<li><a href="#">عمران</a></li>
						<li><a href="#">اب</a></li>
				</ul>	
				<!--footer_ul2_amrc ends here-->
			</div>
			</div>
			</div>


			<div style="background-color:#545454; padding:10px 0px;">
			
			<!--foote_bottom_ul_amrc ends here-->
			<p class="text-center" style="color:#CCC;">Copyright @2019 | Developed With by <a href="#" style="color:#13bfb1;">Ihsan IT</a></p>

			<ul class="social_footer_ul">
			<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
			<li><a href="#"><i class="fab fa-twitter"></i></a></li>
			<li><a href="#"><i class="fab fa-linkedin"></i></a></li>
			<li><a href="#"><i class="fab fa-instagram"></i></a></li>
			</ul>
			<!--social_footer_ul ends here-->
			</div>

		</footer>

		<!-- jQuery  JS-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<!-- jQuery-ui Js -->
		<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
		<!-- Popper JS -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
		<!-- Bootstrap JS -->
		<script src="<?php echo base_url();?>assets/css/bootstrap/js/bootstrap.min.js"></script>
		<!-- Counter JS -->
		<script src="<?php echo base_url();?>assets/js/jquery.counterup.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/jquery.waypoints.min.js"></script>
		<!-- IntrTelInput plugin -->
		<script src="<?php echo base_url();?>assets/js/intlTelInput.js"></script>
		<!-- My jquery script -->
		<script src="<?php echo base_url();?>assets/js/my_jquery_script.js"></script>
		<script>
        jQuery('.statistic-counter').counterUp({
                delay: 10,
                time: 2000
            }); 
        </script>
        <script>
/*
|-------------------------------------------------------------------------------------------------------------------------------------
|process  phone number field of doctor personal data form
|-------------------------------------------------------------------------------------------------------------------------------------
*/

		var input = document.querySelector("#d_phone");
		var output = document.querySelector("#d_phone_error_msg");
		var iti=intlTelInput(input, {
			allowDropdown: true,
		    geoIpLookup: function(callback) {
		        $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
		          var countryCode = (resp && resp.country) ? resp.country : "";
		          callback(countryCode);
		        });
		    },
     		initialCountry: "auto",
       		nationalMode: true,
       		preferredCountries: ['ye'],
    		utilsScript: "assets/js/utils.js?"
		});

		var check_d_phone = function() {
			var error_d_phone=false;
			if(iti.isValidNumber()) 
			{
				$("#d_phone_error_msg").hide();
				$("#d_phone").css("border","1px solid #34F458");
			}
			else
			{
				$("#d_phone_error_msg").html("يرجى ادخال رقم تلفون صحيح");
				$("#d_phone_error_msg").show();
				$("#d_phone").css("border","1px solid #F90A0A");
				error_d_phone=true;
			}
		};		
		input.addEventListener('focusout',check_d_phone);
/*
|-------------------------------------------------------------------------------------------------------------------------------------
|send doctor personal data using ajax to controller
|-------------------------------------------------------------------------------------------------------------------------------------
*/
$(document).ready(function(){
		
	$("#d_personal_data_submit").submit(function(){
		var mobile =iti.getNumber();
		$('#d_mobile').val(mobile);		
		var doctor_data=$("#d_personal_form").serialize();
		$.ajax({
            type:'POST',
            url:"<?php echo base_url('registerdoctor');?>",
            data:doctor_data,            
		   dataType: 'json',
		   contentType: false,
		   processData: false,
            success: function(data)
            {
            	alert("تمت اضافة بياناتك بنجاح يمكنك تسجيل الدخول");            	 
            },
            error: function(){
                alert('something went wrong...');
            } 
        });        
	});
/*
|-------------------------------------------------------------------------------------------------------------------------------------
|update phone of doctor during update personal data process 
|-------------------------------------------------------------------------------------------------------------------------------------
*/
	$("#d_phone").focusout(function(){
		var mobile =iti.getNumber();
		var old_mobile=$('#old_d_mobile').val();
		if(mobile!=null)
		{
			$('#d_mobile').val(mobile);
		}
		else
		{
			$('#d_mobile').val(old_mobile);
		}//end if        
	});//end  $("#d_phone").focusout()    
	
/*
|-------------------------------------------------------------------------------------------------------------------------------------
|add education doctor data
|-------------------------------------------------------------------------------------------------------------------------------------
*/
	$("#d_qualification_data_submit").submit(function(){
		var d_qualification_data=$("#d_qualification_form").serialize();
		
		$.ajax({
            type:'POST',
            url:"<?php echo base_url('addqualification');?>",
            data:d_qualification_data,            
		   dataType: 'json',
		   contentType: false,
		   processData: false,
            success: function(data)
            {
            	alert("تمت اضافة بياناتك بنجاح يمكنك تسجيل الدخول");            	 
            },
            error: function(){
                alert('something went wrong...');
            } 
        });        
	});
/*
|-------------------------------------------------------------------------------------------------------------------------------------
|add experience doctor data
|-------------------------------------------------------------------------------------------------------------------------------------
*/
	$("#d_experience_data_submit").submit(function(){
		var d_experience_data=$("#d_experience_form").serialize();	
		alert($('#e_d_id').val());	
		$.ajax({
            type:'POST',
            url:"<?php echo base_url('addexperience');?>",
            data:d_experience_data,            
		   dataType: 'json',
		   contentType: false,
		   processData: false,
            success: function(data)
            {
            	alert("تمت اضافة بياناتك بنجاح يمكنك تسجيل الدخول");            	 
            },
            error: function(){
                alert('something went wrong...');
            } 
        });        
	});





	




});//end ready()


					$(document).ready(function(e){
	var qual=1;
        //var html='<div class="container bootstrap snippet" id="inner_qual"'+qual+'"><div class="row"><div class="col-sm-12"><h5>بيانات الطبيب التعليمية</h5></div><input type="button" name="remove" id="'+qual+'" class="btn-add btn_remove_qual" style="background-color:red;" value="إزالة وظيفة"></div></div>'; 
/*        var html='<div id="innerJob'+job+'"><div class="row row-from-right"><div class="col-lg-2  col-sm-2 col-xs-12 requester-lbl" style="direction:rtl;"><label>الوظيفة السابقة </label></div><div class="col-lg-4 col-sm-4 col-xs-12 requester-input"><input  name="previous_job[]" type="text" class="input-cv input-cv-length" title="الوظيفة السابقة" pattern="^[A-Za-z_ء-ي\' ]+$" value="<?php if(isset($_POST["previous_job"])) echo $_POST["previous_job"];?>" /></div><div class="col-lg-2  col-sm-2 col-xs-12 requester-lbl" style="direction:rtl;"><label>جهة العمل</label></div><div class="col-lg-4 col-sm-4 col-xs-12 requester-input"><input  name="job_company[]" type="text" class="input-cv input-cv-length" title="جهة العمل" pattern="^[A-Za-z_ء-ي1-9\'- ]+$" value="<?php if(isset($_POST["job_company"])) echo $_POST["job_company"];?>"/></div></div><div class="row row-from-right"><div class="col-lg-2  col-sm-2 col-xs-12 requester-lbl" style="direction:rtl;"><label>من </label></div><div class="col-lg-4 col-sm-4 col-xs-12 requester-input"><input name="start_date[]" type="Date" style="padding: 0px 4px;width:210px; height:27px;color: Black; direction: rtl;" class="input-cv" title="من" value="<?php if(isset($_POST["start_date"])) echo $_POST["start_date"];?>" /></div><div class="col-lg-2  col-sm-2 col-xs-12 requester-lbl" style="direction:rtl;"><label>إلى</label></div><div class="col-lg-4 col-sm-4 col-xs-12 requester-input"><input  name="end_date[]" type="Date" style="padding: 0px 4px;width:210px; height:27px;color: Black; direction: rtl;" class="input-cv" title="إلى" value="<?php if(isset($_POST["end_date"])) echo $_POST["end_date"];?>" /></div></div><div class="row row-from-right"><div class="col-lg-2 col-sm-3 col-xs-12 requester-lbl" style="direction:rtl;" ><label>ماذا عملت في ذلك العمل ؟</label></div><div class="col-lg-4 col-sm-9 col-xs-12 requester-input"><textarea  name="previous_job_works[]"  type="text" title="ماذا عملت في ذلك العمل ؟ " style="width: 100%; height:40px;color: Black; direction: rtl;"><?php if(isset($_POST["previous_job_works[]"])) echo $_POST["previous_job_works[]"];?></textarea></div><div class="col-lg-2 col-md-3 col-xs-12 requester-lbl" style="direction:rtl;">     <label>شهادة الخبرة (إن وجدت) </label></div><div class="col-lg-4 col-sm-9 col-xs-12 " style="margin-top:-5px;"><input type="file" name="exp_selected_file[]" accept="application/pdf"   title="شهادة الخبرة"/></div></div><div class="row row-from-right"><div class="col-lg-2 col-xs-12 " style="direction:rtl;"><button type="button" name="remove" id="'+job+'" class="btn-add btn_remove_job" style="background-color:red;">إزالة وظيفة</button></div></div></div>';
*/        var max_jobs=3;
        //add jobs to the form 
        $('#edit_qualification').click(function(e){
            if(qual<=max_jobs)
            {
            	var html='<div class="container bootstrap snippet" id="inner_qual"><div class="row"><div class="col-sm-12"><h5>بيانات الطبيب التعليمية</h5></div></div><div class="row"><div class="col-sm-3"></div><div class="col-sm-9"><div class="tab-content"><?php echo validation_errors();?><form class="form" id="d_qualification_form" name="d_qualification_form" action="<?php echo base_url("addqualification");?>" method="post" enctype="multipart/form-data"><input type="hidden" id="d_q_id" name="d_q_id" value="<?php echo $doctor["d_id"];?>"><div class="form-group col-xs-6"><label>نوع المؤهل<span class="required"> *</span></label><select class="form-control" id="d_qualification_type" name="d_qualification_type"autofocus required><option value="" disabled selected>اختر نوع المؤهل..</option><?php if(count($qualification_types)):?><?php foreach ($qualification_types as $q_type):?><option value=<?php echo $q_type["q_t_id"];?><?php echo set_select("d_qualification_type",$q_type['q_t_id']);?>><?php echo $q_type["q_t_name"];?></option><?php endforeach;?><?php endif;?></select><span class="error-msg" id="d_q_type_error_msg"></span></div><div class="form-group col-xs-6"><label>جهة الدراسة<span class="required"> *</span></label><select class="form-control" id="d_university" name="d_university"autofocus required><option value="" selected disabled>اختر جهة الدراسة..</option><?php if(count($universities)):?><?php foreach ($universities as $university):?><option value=<?php echo $university["un_id"];?><?php echo set_select("d_university",$university["un_id"]);?>><?php echo $university["un_name"];?></option><?php endforeach;?><?php endif;?></select><span class="error-msg" id="d_university_error_msg"></span></div><div class="form-group col-xs-6"><label>التخصص<span class="required"> *</span></label><select class="form-control" id="d_education_specialty" name="d_education_specialty"autofocus required><option value="" selected disabled>اختر التخصص الدراسي..</option><?php if(count($education_specialties)):?><?php foreach ($education_specialties as $educ_specialty):?><option value=<?php echo $educ_specialty["e_s_id"];?><?php echo set_select("d_education_specialty",$educ_specialty["e_s_id"]);?>><?php echo $educ_specialty["e_s_name"];?></option><?php endforeach;?><?php endif;?></select><span class="error-msg" id="d_education_specialty_error_msg"></span></div><div class="form-row"><div class="form-group col-lg-6 col-md-12"><label>من<span class="required"> *</span></label><input style="direction:ltr;" name="d_q_start_date" id="d_q_start_date" class="form-control" min="1899-01-01" value="<?php echo set_value("d_q_start_date"); ?>" title="ادخل بداية الدراسة" autofocus required><span class="error-msg" id="d_q_start_date_error_msg"></span></div><div class="form-group col-lg-6 col-md-12"><label>إلى<span class="required"> *</span></label><input  style="direction:ltr;" name="d_q_graduate_date" id="d_q_graduate_date" value="<?php echo set_value("d_q_graduate_date"); ?>" class="form-control"  title="ادخل نهاية الدراسة" autofocus required><span class="error-msg" id="d_q_graduate_date_error_msg"></span></div></div><div class="form-row"><div class="form-group col-lg-6 col-md-12"><label>المعدل<span class="required"> *</span></label><input type="number" class="form-control" id="d_q_gpa" name="d_q_gpa" min="1" max="100" value="<?php echo set_value("d_q_gpa"); ?>" title="ادخل المعدل الدراسي" autofocus required><span class="error-msg" id="d_q_gpa_error_msg"></span></div><div class="form-group col-lg-6 col-md-12"><label>شهادة التخرج<span class="required"> *</span></label><input type="file" class="form-control" id="d_q_certificate" name="d_q_certificate" title="ارفع شهادة الدراسة" autofocus required><span class="error-msg" id="d_q_certificate_error_msg"></span></div></div><div class="form-group col-xs-12"><br><button class="btn" type="submit" value="d_qualification_data_submit" id="d_qualification_data_submit" style="color:#fff;">حفظ</button><button type="button" name="remove" id="'+qual+'" class="btn-add btn_remove_qual" style="background-color:red;" value="d_qual_other">ازالة مؤهل</button></div></form></div></div></div></div>';
                $('#nav-educational-data').append(html);
                qual++;
            }//end if
        });
        
        //remove job from form
        $('#nav-educational-data').on('click','.btn_remove_qual',function(e){
            var btn_id=$(this).attr("id");
            $("#other_qualification"+btn_id+"").remove();
            qual--;
        });
    });
        </script>
	</body>
</html>