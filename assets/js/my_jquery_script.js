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
	/*------------personla doctor data validation-----------------*/
	$(function(){
		$("#d_name_error_msg").hide();
		$("#d_email_error_msg").hide();
		$("#d_phone_error_msg").hide();
		$("#d_street_error_msg").hide();
		$("#d_facebook_error_msg").hide();
		$("#d_twitter_error_msg").hide();
		$("#d_password_error_msg").hide();
		$("#d_password_c_error_msg").hide();
		

		var error_d_name=false;
		var error_d_email=false;
		var error_d_phone=false;
		var error_d_street=false;
		var error_d_facebook=false;
		var error_d_twitter=false;
		var error_d_password=false;
		var error_d_password_c=false;

		$("#d_name").focusout(function(){
			check_d_name();
		});
		$("#d_email").focusout(function(){
			check_d_email();
		});
		$("#d_phone").focusout(function(){
			check_d_phone();
		});
		$("#d_street").focusout(function(){
			check_d_street();
		});
		$("#d_facebook").focusout(function(){
			check_d_facebook();
		});
		$("#d_twitter").focusout(function(){
			check_d_twitter();
		});
		$("#d_password").focusout(function(){
			check_d_password();
		});
		$("#d_password_c").focusout(function(){
			check_d_password_c();
		});
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
/*--------------------------check_d_phone()-------------------------*/
		function check_d_phone()
		{
			var pattern=/(77|73|71|70)\d{7}/;
			var phone =$("#d_phone").val();
			if(pattern.test(phone) && phone !=='')
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
		}//check_d_phone()
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
			/*var pattern=/^[A-Za-z0-9-_ء-ي'\s]{5,200}$/;
			var d_facebook=$("#d_facebook_link").val();
			if(pattern.test(d_facebook) && d_facebook !=='')
				{
					$("#d_facebook_error_msg").hide();
					$("#d_facebook_link").css("border","1px solid #34F458");
				}
				else
				{
					$("#d_facebook_error_msg").html('يجب ادخال عنوان الشارع يحتوي حروف او ارقام');
					$("#d_facebook_error_msg").show();
					$("#d_facebook_link").css("border","1px solid #F90A0A");
					error_d_facebook=true;

				}*/
		}//end check_d_facebook()
/*--------------------------check_d_twitter -------------------------*/
		function check_d_twitter()
		{
			/*var pattern=/^[A-Za-z0-9-_ء-ي'\s]{5,200}$/;
			var d_twitter=$("#d_twitter_link").val();
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

				}*/
		}//end check_d_twitter()
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
			if(password!==password_c)
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

	$("#d_personal_form").submit(function(){
		error_d_name=false;
		error_d_email=false;
		error_d_phone=false;
		error_d_street=false;
		error_d_facebook=false;
		error_d_twitter=false;
		error_d_password=false;
		error_d_password_c=false;

		check_d_name();
		check_d_email();
		check_d_phone();
		check_d_street();
		check_d_facebook();
		check_d_twitter();
		check_d_password();
		check_d_password_c();
		if(!error_d_name===false && !error_d_name===false && !error_d_email===false && !error_d_phone===false
		&& !error_d_street===false && !error_d_facebook===false && !error_d_twitter===false && !error_d_password===false
		&& !error_d_password_c===false)
		{
			alert('يرجى تعبئة البيانات بشكل صحيح');
			return false;
		}
	});//end 

});//end general function
	/*-------------------doctor profile image-----------------*/
	/*$('#d_personal_form').on('submit',function(e){
		e.preventDefault();
		if($('#d_img').val()=='')
			{
				alert('يرجى اختيار صورة البروفايل');
			}
			else
			{
				$.ajax({
					url:"<?php echo base_url();?>doctor_c/ajax_upload_profile",
					method:"POST",
					data:new FormData(this),
					contentType:false,
					cashe:false,
					processData:false,
					success:function(data)
					{
						$('uploaded_img').html(data);
					}
				});
			}
		});*/
	
});

	