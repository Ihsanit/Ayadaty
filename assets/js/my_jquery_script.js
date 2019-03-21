$(document).ready(function(){
	$("#user-control").click(function(){
		$("#user-tabs").toggle()
	});

	$("#service-control").click(function(){
		$("#service-tabs").toggle()
	});

	$("#doctor-control").click(function(){
		$("#doctor-tabs").toggle()
	});

	$("#patient-control").click(function(){
		$("#patient-tabs").toggle()
	});
	/*------------appointment dates--------------------------*/
	var date = new Date(), y = date.getFullYear(), m = date.getMonth(), d=date.getDate();
	
	var currentDay = new Date(y, m, d);
	var lastDay = new Date(y, m + 1, 0);
	alert(currentDay);
	alert(lastDay);
	/*var output = y + '/' +
		(m<10 ? '0' : '') + m + '/' +
		(d<10 ? '0' : '') + d;
	alert(output);*/
	
			                	
	/*------------personla doctor data validation-----------------*/
	$(function(){

		$("#d_name_error_msg").hide();
		$("#d_email_error_msg").hide();
		$("#d_gender_error_msg").hide();
		$("#d_birth_date_error_msg").hide();
		$("#d_nationality_error_msg").hide();
		$("#d_country_error_msg").hide();
		$("#d_city_error_msg").hide();
		$("#d_street_error_msg").hide();
		$("#d_facebook_error_msg").hide();
		$("#d_twitter_error_msg").hide();
		$("#d_speciality_error_msg").hide();
		$("#d_password_error_msg").hide();
		$("#d_password_c_error_msg").hide();
		

		var error_d_name=false;
		var error_d_email=false;
		var error_d_birth_date=false;
		var error_d_gender=false;
		var error_d_nationality=false;
		var error_d_country=false;
		var error_d_city=false;
		var error_d_street=false;
		var error_d_facebook=false;
		var error_d_twitter=false;
		var error_d_speciality=false;
		var error_d_password=false;
		var error_d_password_c=false;

		$("#d_name").focusout(function(){
			check_d_name();
		});
		$("#d_email").focusout(function(){
			check_d_email();
		});
		$("#d_birth_date").focusout(function(){
			check_d_birth_date();
		});
		$("#d_gender").focusout(function(){
			check_d_gender();
		});
		$("#nationality").focusout(function(){
			check_d_nationality();
		});
		$("#d_country_address").focusout(function(){
			check_d_country();
		});
		$("#city").focusout(function(){
			check_d_city();
		});
		$("#d_street_address").focusout(function(){
			check_d_street();
		});
		$("#d_facebook").focusout(function(){
			check_d_facebook();
		});
		$("#d_twitter").focusout(function(){
			check_d_twitter();
		});
		$("#d_speciality").focusout(function(){
			check_d_speciality();
		});
		$("#d_password").focusout(function(){
			check_d_password();
		});
		$("#d_password_c").focusout(function(){
			check_d_password_c();
		});
/*--------------------------check_education_data-------------------*/
		$("#d_q_type_error_msg").hide();
		$("#d_university_error_msg").hide();
		$("#d_education_specialty_error_msg").hide();
		$("#d_q_start_date_error_msg").hide();
		$("#d_q_graduate_date_error_msg").hide();
		$("#d_q_gpa_error_msg").hide();
		$("#d_q_certificate_error_msg").hide();

		var error_d_q_type=false;
		var error_d_q_university=false;
		var error_d_q_education_specialty=false;
		var error_d_q_start_date=false;
		var error_d_q_graduate_date=false;
		var error_d_q_gpa=false;
		var error_d_q_certificate=false;

		$("#d_qualification_type").focusout(function(){
			check_d_qualification_type();
		});
		$("#d_university").focusout(function(){
			check_d_university();
		});
		$("#d_education_specialty").focusout(function(){
			check_d_education_specialty();
		});
		$("#d_q_start_date").focusout(function(){
			check_d_q_start_date();
		});
		$("#d_q_graduate_date").focusout(function(){
			check_d_q_graduate_date();
		});
		$("#d_q_gpa").focusout(function(){
			check_d_q_gpa();
		});
		$("#d_q_certificate").focusout(function(){
			check_d_q_certificate();
		});
/*--------------------------check_experience_data-------------------*/
	
/*--------------------------check_d_name()-------------------------*/
		
		function check_d_name()
		{
			var pattern=/^[A-Za-z_ء-ي'\s]{5,200}$/;
			var d_name=$("#d_name").val();
			if(pattern.test(d_name) && d_name !=='')
				{
					$("#d_name_error_msg").hide();
					$("#d_name").css("border","1px solid #34F458");
				}
				else
				{
					$("#d_name_error_msg").html('الاسم يجب ان يحتوي حروف فقط');
					$("#d_name_error_msg").show();
					$("#d_name").css("border","1px solid #F90A0A");
					error_d_name=true;

				}//end if
		}//end check_d_name()
/*--------------------------check_d_email()-------------------------*/
		function check_d_email()
		{
			var pattern = /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/;
			var email=$("#d_email").val();
			if(pattern.test(email) && email !=='')
				{
					$("#d_email_error_msg").hide();
					$("#d_email").css("border","1px solid #34F458");
				}
				else
				{
					$("#d_email_error_msg").html("ادخل بريد الكتروني صحيح");
					$("#d_email_error_msg").show();
					$("#d_email").css("border","1px solid #F90A0A");
					error_d_email=true;
				}//end if

		}//end check_d_email()
/*--------------------------check_d_birth_date()-------------------------*/
		function check_d_birth_date()
		{			
			var d_birth_date =$("#d_birth_date").val();
			if(d_birth_date!=='')
			{
				$("#d_birth_date_error_msg").hide();
				$("#d_birth_date").css("border","1px solid #34F458");
			}
			else
			{
				$("#d_birth_date_error_msg").html("يرجى ادخال تاريخ الميلاد");
				$("#d_birth_date_error_msg").show();
				$("#d_birth_date").css("border","1px solid #F90A0A");
				error_d_birth_date=true;
			}
		}//check_d_birth_date()
/*--------------------------check_d_gender()-------------------------*/
		function check_d_gender()
		{			
			var d_gender =$("#d_gender").val();
			if(d_gender!==null)
			{
				$("#d_gender_error_msg").hide();
				$("#d_gender").css("border","1px solid #34F458");
			}
			else
			{
				$("#d_gender_error_msg").html("يرجى اختيار النوع");
				$("#d_gender_error_msg").show();
				$("#d_gender").css("border","1px solid #F90A0A");
				error_d_gender=true;
			}
		}//check_d_gender()
/*--------------------------check_d_nationality()-------------------------*/
		function check_d_nationality()
		{			
			var d_nationality =$("#nationality").val();
			if(d_nationality!==null)
			{
				$("#d_nationality_error_msg").hide();
				$("#nationality").css("border","1px solid #34F458");
			}
			else
			{
				$("#d_nationality_error_msg").html("يرجى اختيار الجنسية");
				$("#d_nationality_error_msg").show();
				$("#nationality").css("border","1px solid #F90A0A");
				error_d_nationality=true;
			}
		}//check_d_nationality()
/*--------------------------check_d_country()-------------------------*/
		function check_d_country()
		{			
			var d_country =$("#d_country_address").val();
			if(d_country!==null)
			{
				$("#d_country_error_msg").hide();
				$("#d_country_address").css("border","1px solid #34F458");
			}
			else
			{
				$("#d_country_error_msg").html("يرجى اختيار عنوان الدولة");
				$("#d_country_error_msg").show();
				$("#d_country_address").css("border","1px solid #F90A0A");
				error_d_nationality=true;
			}
		}//check_d_country()
/*--------------------------check_d_city()-------------------------*/
		function check_d_city()
		{			
			var d_city =$("#city").val();
			if(d_city!==null)
			{
				$("#d_city_error_msg").hide();
				$("#city").css("border","1px solid #34F458");
			}
			else
			{
				$("#d_city_error_msg").html("يرجى اختيار عنوان المدينة");
				$("#d_city_error_msg").show();
				$("#city").css("border","1px solid #F90A0A");
				error_d_city=true;
			}
		}//check_d_city()

/*--------------------------check_d_street()-------------------------*/
		function check_d_street()
		{
			var pattern=/^[A-Za-z_ء-ي'\s]{5,200}$/;
			var d_street=$("#d_street_address").val();
			if(pattern.test(d_street) && d_street !=='')
				{
					$("#d_street_error_msg").hide();
					$("#d_street_address").css("border","1px solid #34F458");
				}
				else
				{
					$("#d_street_error_msg").html('يجب ادخال عنوان الشارع يحتوي حروف او ارقام');
					$("#d_street_error_msg").show();
					$("#d_street_address").css("border","1px solid #F90A0A");
					error_d_street=true;

				}//end if
		}//check_d_street()
/*--------------------------check_d_facebook -------------------------*/
		function check_d_facebook()
		{
			var pattern=/(ftp|http|https):\/\/(\w+:{0,1}\w*@)?(\S+)(:[0-9]+)?(\/|\/([\w#!:.?+=&%@!\-\/]))?/;
/*			/(http(s)?:\\)?([\w-]+\.)+[\w-]+[.com|.in|.org]+(\[\?%&=]*)?/;
*/			var d_facebook=$("#d_facebook_link").val();
			if(pattern.test(d_facebook) && d_facebook !=='')
				{
					$("#d_facebook_error_msg").hide();
					$("#d_facebook_link").css("border","1px solid #34F458");
				}
				else
				{
					$("#d_facebook_error_msg").html('يجب ادخال رابط صفحتك في الفيسبوك');
					$("#d_facebook_error_msg").show();
					$("#d_facebook_link").css("border","1px solid #F90A0A");
					error_d_facebook=true;

				}
		}//end check_d_facebook()
/*--------------------------check_d_twitter -------------------------*/
		function check_d_twitter()
		{
			var pattern=/(http(s)?:\\)?([\w-]+\.)+[\w-]+[.com|.in|.org]+(\[\?%&=]*)?/;
/*			/^(?:(?:https?|ftp):\/\/)?(?:(?!(?:10|127)(?:\.\d{1,3}){3})(?!(?:169\.254|192\.168)(?:\.\d{1,3}){2})(?!172\.(?:1[6-9]|2\d|3[0-1])(?:\.\d{1,3}){2})(?:[1-9]\d?|1\d\d|2[01]\d|22[0-3])(?:\.(?:1?\d{1,2}|2[0-4]\d|25[0-5])){2}(?:\.(?:[1-9]\d?|1\d\d|2[0-4]\d|25[0-4]))|(?:(?:[a-z\u00a1-\uffff0-9]-*)*[a-z\u00a1-\uffff0-9]+)(?:\.(?:[a-z\u00a1-\uffff0-9]-*)*[a-z\u00a1-\uffff0-9]+)*(?:\.(?:[a-z\u00a1-\uffff]{2,})))(?::\d{2,5})?(?:\/\S*)?$/;
*/			var d_twitter=$("#d_twitter_link").val();
			if(pattern.test(d_twitter) && d_twitter !=='')
				{
					$("#d_twitter_error_msg").hide();
					$("#d_twitter_link").css("border","1px solid #34F458");
				}
				else
				{
					$("#d_twitter_error_msg").html('يجب ادخال عنوان الشارع يحتوي حروف او ارقام');
					$("#d_twitter_error_msg").show();
					$("#d_twitter_link").css("border","1px solid #F90A0A");
					error_d_twitter=true;

				}
		}//end check_d_twitter()
/*--------------------------check_d_specialty()-------------------------*/
		function check_d_speciality()
		{			
			var d_speciality =$("#d_speciality").val();
			if(d_speciality!==null)
			{
				$("#d_speciality_error_msg").hide();
				$("#d_speciality").css("border","1px solid #34F458");
			}
			else
			{
				$("#d_speciality_error_msg").html("يرجى اختيار التخصص الطبي");
				$("#d_speciality_error_msg").show();
				$("#d_speciality").css("border","1px solid #F90A0A");
				error_d_speciality=true;
			}
		}//check_d_speciality()
/*--------------------------check_d_password-------------------------*/
		function check_d_password()
		{
			var password_length=$("#d_password").val().length;
			if(password_length<5)
			{
				$("#d_password_error_msg").html("على الاقل 5 رموز");
				$("#d_password_error_msg").show();
				$("#d_password").css("border","1px solid #F90A0A");				
				error_d_password=true;
			}
			else
			{
				$("#d_password_error_msg").hide();
				$("#d_password").css("border","1px solid #34F458");

			}//end if length
		}//end check_d_password()
/*--------------------------check_d_password_c-------------------------*/
		function check_d_password_c()
		{
			var password=$("#d_password").val();
			var password_c=$("#d_password_c").val();
			if(password!==password_c || password_c=="")
			{
				$("#d_password_c_error_msg").html("كلمات المرور غير متطابقة");
				$("#d_password_c_error_msg").show();
				$("#d_password_c").css("border","1px solid #F90A0A");
				error_d_password_c=true;
			}
			else
			{
				$("#d_password_c_error_msg").hide();
				$("#d_password_c").css("border","1px solid #34F458");
			}//end if password!==password_c
		}//end check_d_password_c()
/*----------------------------------------educational doctor data methods--------------------------*/
/*--------------------------check_d_qualification_type()-------------------------*/
		function check_d_qualification_type()
		{			
			var d_qualification_type =$("#d_qualification_type").val();
			if(d_qualification_type!==null)
			{
				$("#d_q_type_error_msg").hide();
				$("#d_qualification_type").css("border","1px solid #34F458");
			}
			else
			{
				$("#d_q_type_error_msg").html("يرجى اختيار نوع المؤهل");
				$("#d_q_type_error_msg").show();
				$("#d_qualification_type").css("border","1px solid #F90A0A");
				error_d_q_type=true;
			}
		}//check_d_qualification_type()
/*--------------------------check_d_university()-------------------------*/
		function check_d_university()
		{			
			var d_university =$("#d_university").val();
			if(d_university!==null)
			{
				$("#d_university_error_msg").hide();
				$("#d_university").css("border","1px solid #34F458");
			}
			else
			{
				$("#d_university_error_msg").html("يرجى اختيار جهة الدراسة");
				$("#d_university_error_msg").show();
				$("#d_university").css("border","1px solid #F90A0A");
				error_d_q_university=true;
			}
		}//check_d_university()
/*--------------------------check_d_education_specialty()-------------------------*/
		function check_d_education_specialty()
		{			
			var d_education_specialty =$("#d_education_specialty").val();
			if(d_education_specialty!==null)
			{
				$("#d_education_specialty_error_msg").hide();
				$("#d_education_specialty").css("border","1px solid #34F458");
			}
			else
			{
				$("#d_education_specialty_error_msg").html("يرجى اختيار التخصص الدراسي");
				$("#d_education_specialty_error_msg").show();
				$("#d_education_specialty").css("border","1px solid #F90A0A");
				error_d_education_specialty=true;
			}
		}//check_d_education_specialty()
/*--------------------------check_d_q_start_date()-------------------------*/
		function check_d_q_start_date()
		{			
			var d_q_start_date =$("#d_q_start_date").val();
			if(d_q_start_date!=='')
			{
				$("#d_q_start_date_error_msg").hide();
				$("#d_q_start_date").css("border","1px solid #34F458");
			}
			else
			{
				$("#d_q_start_date_error_msg").html("يرجى اختيار بداية فترة الدراسة");
				$("#d_q_start_date_error_msg").show();
				$("#d_q_start_date").css("border","1px solid #F90A0A");
				error_d_q_start_date=true;
			}
		}//check_d_q_start_date()
/*--------------------------check_d_q_graduate_date()-------------------------*/
		function check_d_q_graduate_date()
		{			
			var d_q_graduate_date =$("#d_q_graduate_date").val();
			if(d_q_graduate_date!=='')
			{
				$("#d_q_graduate_date_error_msg").hide();
				$("#d_q_graduate_date").css("border","1px solid #34F458");
			}
			else
			{
				$("#d_q_graduate_date_error_msg").html("يرجى اختيار فترة التخرج الدراسي");
				$("#d_q_graduate_date_error_msg").show();
				$("#d_q_graduate_date").css("border","1px solid #F90A0A");
				error_d_q_graduate_date=true;
			}
		}//check_d_q_graduate_date()
/*--------------------------check_d_q_gpa()-------------------------*/
		function check_d_q_gpa()
		{			
			var d_q_gpa =$("#d_q_gpa").val();
			if(d_q_gpa!=='' )
			{
				$("#d_q_gpa_error_msg").hide();
				$("#d_q_gpa").css("border","1px solid #34F458");
			}
			else
			{
				$("#d_q_gpa_error_msg").html("يرجى ادخال المعدل الدراسي بين 0 و 100");
				$("#d_q_gpa_error_msg").show();
				$("#d_q_gpa").css("border","1px solid #F90A0A");
				error_d_q_gpa=true;
			}
		}//check_d_q_gpa()
/*--------------------------heck_d_q_certificate-------------------------*/
		function check_d_q_certificate()
		{			
			var d_q_certificate =$("#d_q_certificate").val();
			if(d_q_certificate!==null)
			{
				$("#d_q_certificate_error_msg").hide();
				$("#d_q_certificate").css("border","1px solid #34F458");
			}
			else
			{
				$("#d_q_certificate_error_msg").html("يرجى ارفاق صورة للمؤهل");
				$("#d_q_certificate_error_msg").show();
				$("#d_q_certificate").css("border","1px solid #F90A0A");
				error_d_q_gpa=true;
			}
		}//heck_d_q_certificate



	$("#d_personal_form").submit(function(){
		error_d_name=false;
		error_d_email=false;
		error_d_birth_date=false;
		error_d_gender=false;
		error_d_nationality=false;
		error_d_country=false;
		error_d_city=false;
		error_d_street=false;
		error_d_facebook=false;
		error_d_twitter=false;
		error_d_speciality=false;
		error_d_password=false;
		error_d_password_c=false;

		check_d_name();
		check_d_email();
		check_d_birth_date();
		check_d_gender();
		check_d_nationality();
		check_d_country();
		check_d_city();
		check_d_street();
		check_d_facebook();
		check_d_twitter();
		check_d_specialty();
		check_d_password();
		check_d_password_c();
		if(!error_d_name===false && !error_d_name===false && !error_d_email===false && !error_d_phone===false && 
		!error_d_gender===false && !error_d_birth_date===false	&& !error_d_street===false && 
		!error_d_nationality===false && !error_d_country===false && !error_d_city===false && !error_d_facebook===false && !error_d_twitter===false && 
		!error_d_speciality===false && !error_d_password===false && !error_d_password_c===false)
		{
			alert('يرجى تعبئة البيانات بشكل صحيح');
			return false;
		}
	});//end 
/*----------------------------------------submit education data--------------------------*/
$("#d_qualification_form").submit(function(){

		 error_d_q_type=false;
		 error_d_q_university=false;
		 error_d_q_education_specialty=false;
		 error_d_q_start_date=false;
		 error_d_q_graduate_date=false;
		 error_d_q_gpa=false;
		 error_d_q_certificate=false;

		
		check_d_qualification_type();
		check_d_university();
		check_d_education_specialty();
		check_d_q_start_date();
		check_d_q_graduate_date();
		check_d_q_gpa();
		check_d_q_certificate();
		

		if(!error_d_q_type===false && !error_d_q_university===false && !error_d_q_education_specialty===false &&
		!error_d_q_start_date===false && !error_d_q_graduate_date===false	&& !error_d_q_gpa===false && 
		!error_d_q_certificate)
		{
			alert('يرجى تعبئة البيانات بشكل صحيح');
			return false;
		}
	});//end 



});//end general function
/*------------------birth date of doctor---------------------*/
/*var maxDate= new Date();
$("#d_birth_date").datepicker({
	showAnim:"drop",
	numberOfMonth:1,
	maxDate:maxDate,
	dateFormat:dd/mm/yyyy
});*/

/*-------------------doctor profile image-----------------*/
	function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#uploaded_img').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#d_img").change(function () {
        readURL(this);
    });
    /*-----------------birth date of doctor------------------*/
	document.getElementById('d_birth_date').max = new Date().toISOString().split("T")[0];

	
	/*------------------------from to date--------------------*/
	$(function(){
		$("#d_q_start_date").datepicker({
			dateFormat:'dd/mm/yy',
			maxDate:0,
			onSelect:function(selectdate){
				var dt=new Date(selectdate);
				dt.setDate(dt.getDate()+1)
				$("#d_q_graduate_date").datepicker("option","minDate",dt);
				}

		});

		$("#d_q_graduate_date").datepicker({
			dateFormat:'dd/mm/yy',		
			onSelect:function(selectdate){
				var dt=new Date(selectdate);
				dt.setDate(dt.getDate()-1)
				$("#d_q_start_date").datepicker("option","maxDate",dt);

			}
		});
	});
	
/*-----------add another qualification---------------------*/
			//	$(document).ready(function(e){
	/*var qual=1;
          var max_jobs=3;
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
        });*/
   // });

});

	