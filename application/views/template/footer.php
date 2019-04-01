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

/*$(document).ready(function(){

  $('#sales').click(function() {
  $('#grid li:hidden').slice(0, 5).slideDown();
});
});*/
$(document).ready(function(){
  /*alert($('#d_id').val());*/
  $('.moreDays').click(function() {
    var id=0;
    $('.dayHidden').toggle(1000);
  /*$('.day'+id+' li:hidden').slice(0, 5).slideDown();*/
});
 // alert($('#time').attr('at'));
 $('#time00').click(function(){
  alert($('#time00').text());
 });
   
});



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
</script>
<script>
//--------------------- script of appointment days ----------------------
var diff=0;
(function getMonthDays()
{
  var today = new Date(), y = today.getFullYear(), m = today.getMonth()+1, d=today.getDate();  
  var lastDay = new Date(y, m , 0);
  var days = [];
  var nextDate = new Date();
  var timeDiff = Math.abs(lastDay.getTime() - today.getTime());
   diff = Math.ceil(timeDiff / (1000 * 3600 * 24));
  var monthDays='';
  for(var i=0; i<=diff;i++)
    {
      nextDate = new Date();
      nextDate.setDate(today.getDate() + i);                
      days.push(nextDate); 
      var output='';
      d=nextDate.getDate();
      output=m+"/"+d;
      document.getElementById('threedays').insertAdjacentHTML('beforebegin',"<div class='day day"+i+"'  id='day"+i+"'><h5>"+output+"</h5><ul id='times"+i+"'></ul><button type='button'>حجز</button></div>");
    
    }
})();
diff=diff+1;
var currentDay = 0; 
showDay(currentDay); 

function showDay(n) {
  var x = document.getElementsByClassName("day");
  x[n].style.display = "inline-block";
  if (n === 0) {
    document.getElementById("prevDay").style.display = "none";
  } else {
    document.getElementById("prevDay").style.display = "inline-block";
  }
  if (n == (diff-3)) {
    document.getElementById("nextDay").style.display = "none";
  } else {
    document.getElementById("nextDay").style.display = "inline-block";
  }
  
}

function nextFunDay(n) {
  var x = document.getElementsByClassName("day");
  x[currentDay].style.display = "none";
  x[currentDay+3].style.display = "inline-block";
  currentDay = currentDay + n;
  if (currentDay > (diff-3)) 
  {
    x[currentDay].style.display =  "inline-block";
    x[currentDay+3].style.display = "none";
    x[currentDay+2].style.display = "inline-block";
    x[currentDay+1].style.display = "inline-block";    
    showDay(currentDay);
    return false;
  } 

  showDay(currentDay);
}

function prevFunDay(n) 
{
  var x = document.getElementsByClassName("day");
  x[currentDay-1].style.display = "inline-block";
  x[currentDay].style.display = "inline-block";
  x[currentDay+2].style.display = "none";
  currentDay = currentDay + n;
  if (currentDay > (diff-3)) 
  {

    x[currentDay].style.display =  "inline-block";
    x[currentDay+3].style.display = "none";
    x[currentDay+2].style.display = "inline-block";
    x[currentDay+1].style.display = "inline-block";
    document.getElementById("nextDay").style.display = "none";
    return false;
  } 

  showDay(currentDay);
}

$(document).ready(function(){    
  $.ajax({
    type:'POST',
    url:'<?php echo base_url();?>Doctor_c/show_periods',
    dataType:'JSON',
    data:{d_id:$("#d_id").val(), c_id:$("#c_id").val()},
    success:function(data){ 
      for(var i=0; i<data.length; i++)
      {        
        for(var r=0; r<diff; r++)
           {
            if(i>=5)
            {
               
              $("#times"+r).append("<li class='dayHidden' id='time"+r+i+"'>"+data[i]['c_period']+"</li>");
            }
            else
            {
              $("#times"+r).append("<li id='time"+r+i+"'>"+data[i]['c_period']+"</li>");
           }//end if
       }//end for days per month
      }//end for depends on data from database      
    },
    error: function(){
      alert('Error...');
    }    
});
});//end ajax of periods
</script>
<!-- /script of appointment days -->
<script>
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab1");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "انهاء";
  } else {
    document.getElementById("nextBtn").innerHTML = "&gt;";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab1");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    //document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab1");

  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}
</script>
<script>
/*multi-experience*/
var currentTab2 = 0; // Current tab is set to be the first tab (0)
showTab2(currentTab2); // Display the current tab

function showTab2(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab2");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn2").style.display = "none";
  } else {
    document.getElementById("prevBtn2").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn2").innerHTML = "انهاء";
  } else {
    document.getElementById("nextBtn2").innerHTML = "&gt;";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator2(n)
}

function nextPrev2(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab2");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm2()) return false;
  // Hide the current tab:
  x[currentTab2].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab2 = currentTab2 + n;
  // if you have reached the end of the form...
  if (currentTab2 >= x.length) {
    // ... the form gets submitted:
    //document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab2(currentTab2);
}

function validateForm2() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab2");

  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step2")[currentTab2].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator2(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step2");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}
</script>
<script>
/*multi-clinic*/
var currentTab3 = 0; // Current tab is set to be the first tab (0)
showTab3(currentTab3); // Display the current tab

function showTab3(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab3");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn3").style.display = "none";
  } else {
    document.getElementById("prevBtn3").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn3").innerHTML = "انهاء";
  } else {
    document.getElementById("nextBtn3").innerHTML = "&gt;";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator3(n)
}

function nextPrev3(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab3");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm3()) return false;
  // Hide the current tab:
  x[currentTab3].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab3 = currentTab3 + n;
  // if you have reached the end of the form...
  if (currentTab3 >= x.length) {
    // ... the form gets submitted:
    //document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab3(currentTab3);
}

function validateForm3() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab3");

  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step3")[currentTab3].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator3(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step3");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}
</script>
<script>
	$(document).ready(function(){

		/*--------------------------check_experience_data-------------------*/
		$("#d_e_job_name_error_msg").hide();
		$("#d_e_clinic_name_error_msg").hide();
		$("#d_e_place_address_error_msg").hide();
		$("#d_e_start_date_error_msg").hide();
		$("#d_e_end_date_error_msg").hide();

		var error_d_e_job_name=false;
		var error_d_e_clinic_name=false;
		var error_d_e_place_address=false;
		var error_d_e_start_date=false;
		var error_d_e_end_date=false;

		$("#d_e_job_name").focusout(function(){
			check_d_e_job_name();
		});
		$("#d_e_clinic_name").focusout(function(){
			check_d_e_clinic_name();
		});
		$("#d_e_place_address").focusout(function(){
			check_d_e_place_address();
		});
		$("#d_e_start_date").focusout(function(){
			check_d_e_start_date();
		});
		$("#d_e_end_date").focusout(function(){
			check_d_e_end_date();
		});

		/*--------------------------check_d_e_job_name-------------------------*/
		function check_d_e_job_name()
		{		
			var pattern=/^[A-Za-z_ء-ي'\s]{5,200}$/;
			var d_e_job_name=$("#d_e_job_name").val();
			if(pattern.test(d_e_job_name) && d_e_job_name !=='')
				{
					$("#d_e_job_name_error_msg").hide();
					$("#d_e_job_name").css("border","1px solid #34F458");
				}
			else
				{
					$("#d_e_job_name_error_msg").html('المسمى الوظيفي يجب ان يحتوي حروف فقط');
					$("#d_e_job_name_error_msg").show();
					$("#d_e_job_name").css("border","1px solid #F90A0A");
					error_d_e_job_name=true;
			}
		}//check_d_e_job_name
/*--------------------------check_d_e_clinic_name-------------------------*/
		function check_d_e_clinic_name()
		{			
			var pattern=/^[A-Za-z_ء-ي'\s]{5,200}$/;
			var d_e_clinic_name=$("#d_e_clinic_name").val();
			if(pattern.test(d_e_clinic_name) && d_e_clinic_name !=='')
				{
					$("#d_e_clinic_name_error_msg").hide();
					$("#d_e_clinic_name").css("border","1px solid #34F458");
				}
			else
				{
					$("#d_e_clinic_name_error_msg").html('اسم جهة العمل يجب ان يحتوي حروف فقط');
					$("#d_e_clinic_name_error_msg").show();
					$("#d_e_clinic_name").css("border","1px solid #F90A0A");
					error_d_e_clinic_name=true;
			}
		}//check_d_e_clinic_name
/*--------------------------check_d_e_place_address-------------------------*/
		function check_d_e_place_address()
		{			
			var pattern=/^[A-Za-z_ء-ي'\s]{5,200}$/;
			var d_e_place_address=$("#d_e_place_address").val();
			if(pattern.test(d_e_place_address) && d_e_place_address !=='')
				{
					$("#d_e_place_address_error_msg").hide();
					$("#d_e_place_address").css("border","1px solid #34F458");
				}
			else
				{
					$("#d_e_place_address_error_msg").html('عنوان جهة العمل يجب ان يحتوي حروف فقط');
					$("#d_e_place_address_error_msg").show();
					$("#d_e_place_address").css("border","1px solid #F90A0A");
					error_d_e_place_address=true;
			}
		}//check_d_e_place_address
/*--------------------------check_d_e_start_date()-------------------------*/
		function check_d_e_start_date()
		{			
			var d_e_start_date =$("#d_e_start_date").val();
			if(d_e_start_date!=='')
			{
				$("#d_e_start_date_error_msg").hide();
				$("#d_e_start_date").css("border","1px solid #34F458");
			}
			else
			{
				$("#d_e_start_date_error_msg").html("يرجى اختيار تاريخ بداية مدة العمل");
				$("#d_e_start_date_error_msg").show();
				$("#d_e_start_date").css("border","1px solid #F90A0A");
				error_d_e_start_date=true;
			}
		}//check_d_e_start_date()
/*--------------------------check_d_e_end_date()-------------------------*/
		function check_d_e_end_date()
		{			
			var d_e_end_date =$("#d_e_end_date").val();
			if(d_e_end_date!=='')
			{
				$("#d_e_end_date_error_msg").hide();
				$("#d_e_end_date").css("border","1px solid #34F458");
			}
			else
			{
				$("#d_e_end_date_error_msg").html("يرجى اختيار تاريخ نهاية مدة العمل");
				$("#d_e_end_date_error_msg").show();
				$("#d_e_end_date").css("border","1px solid #F90A0A");
				error_d_e_end_date=true;
			}
		}//check_d_e_start_date()

		/*----------------------------------------submit experience data--------------------------*/
	$("#d_experience_form").submit(function(){

		error_d_e_job_name=false;
		error_d_e_clinic_name=false;
		error_d_e_place_address=false;
		error_d_e_start_date=false;
		error_d_e_end_date=false;
		
		
		check_d_e_job_name();
		check_d_e_clinic_name();
		check_d_e_place_address();
		check_d_e_start_date();
		check_d_e_end_date();

		if(!error_d_e_job_name===false && !error_d_e_clinic_name===false && !error_d_e_place_address===false 
			&& !check_d_e_start_date===false && !check_d_e_end_date===false)
		{

			alert('يرجى تعبئة البيانات بشكل صحيح');
			return false;
		}
	});//end  experience form
	});//end function of check experince data
</script>
<script>
	$(document).ready(function(){


		/*--------------------------check_clinic_data-------------------*/
		$("#d_c_job_name_error_msg").hide();
		$("#d_c_name_error_msg").hide();
		$("#d_c_country_address_error_msg").hide();
		$("#d_c_city_address_error_msg").hide();
		$("#d_c_street_address_error_msg").hide();
		$("#d_c_place_name_error_msg").hide();
		$("#d_c_day_start_error_msg").hide();
		$("#d_c_day_end_error_msg").hide();
		$("#d_c_period_start_error_msg").hide();
		$("#d_c_period_end_error_msg").hide();

		var error_d_c_job_name=false;
		var error_d_c_name=false;
		var error_d_c_country_address=false;
		var error_d_c_city_address=false;
		var error_d_c_street_address=false;
		var error_d_c_place_name=false;
		var error_d_c_day_start=false;
		var error_d_c_day_end=false;
		var error_d_c_period_start=false;
		var error_d_c_period_end=false;

		$("#d_c_job_name").focusout(function(){
			check_d_c_job_name();
		});
		$("#d_c_name").focusout(function(){
			check_d_c_name();
		});
		$("#d_c_country_address").focusout(function(){
			check_d_c_country_address();
		});
		$("#d_c_city_address").focusout(function(){
			check_d_c_city_address();
		});
		$("#d_c_street_address").focusout(function(){
			check_d_c_street_address();
		});
		$("#d_c_place_name").focusout(function(){
			check_d_c_place_name();
		});
		$("#d_c_day_start").focusout(function(){
			check_d_c_day_start();
		});
		$("#d_c_day_end").focusout(function(){
			check_d_c_day_end();
		});
		$("#d_c_period_start").focusout(function(){
			check_d_c_period_start();
		});
		$("#d_c_period_end").focusout(function(){
			check_d_c_period_end();
		});

		/*--------------------------check_d_c_job_name-------------------------*/
		function check_d_c_job_name()
		{		
			var pattern=/^[A-Za-z_ء-ي'\s]{5,200}$/;
			var d_c_job_name=$("#d_c_job_name").val();
			if(pattern.test(d_c_job_name) && d_c_job_name !=='')
				{
					$("#d_c_job_name_error_msg").hide();
					$("#d_c_job_name").css("border","1px solid #34F458");
				}
			else
				{
					$("#d_c_job_name_error_msg").html('المسمى الوظيفي يجب ان يحتوي حروف فقط');
					$("#d_c_job_name_error_msg").show();
					$("#d_c_job_name").css("border","1px solid #F90A0A");
					error_d_c_job_name=true;
			}
		}//check_d_c_job_name
/*--------------------------check_d_c_name-------------------------*/
		function check_d_c_name()
		{			
			var pattern=/^[A-Za-z_ء-ي'\s]{5,200}$/;
			var d_c_name=$("#d_c_name").val();
			if(pattern.test(d_c_name) && d_c_name !=='')
				{
					$("#d_c_name_error_msg").hide();
					$("#d_c_name").css("border","1px solid #34F458");
				}
			else
				{
					$("#d_c_name_error_msg").html('اسم العيادة او المستشفى يجب ان يحتوي حروف فقط');
					$("#d_c_name_error_msg").show();
					$("#d_c_name").css("border","1px solid #F90A0A");
					error_d_c_name=true;
			}
		}//check_d_c_name
/*--------------------------check_d_c_country_address()-------------------------*/
		function check_d_c_country_address()
		{			
			var d_c_country_address =$("#d_c_country_address").val();
			if(d_c_country_address!==null)
			{
				$("#d_c_country_address_error_msg").hide();
				$("#d_c_country_address").css("border","1px solid #34F458");
			}
			else
			{
				$("#d_c_country_address_error_msg").html("يرجى اختيار عنوان الدولة");
				$("#d_c_country_address_error_msg").show();
				$("#d_c_country_address").css("border","1px solid #F90A0A");
				error_d_c_country_address=true;
			}
		}//check_d_c_country_address()
/*--------------------------check_d_c_city_address()-------------------------*/
		function check_d_c_city_address()
		{			
			var d_c_city_address =$("#d_c_city_address").val();
			if(d_c_city_address!==null)
			{
				$("#d_c_city_address_error_msg").hide();
				$("#d_c_city_address").css("border","1px solid #34F458");
			}
			else
			{
				$("#d_c_city_address_error_msg").html("يرجى اختيار عنوان المدينة");
				$("#d_c_city_address_error_msg").show();
				$("#d_c_city_address").css("border","1px solid #F90A0A");
				error_d_c_city_address=true;
			}
		}//check_d_c_city_address()

/*--------------------------check_d_c_street_address()-------------------------*/
		function check_d_c_street_address()
		{
			var pattern=/^[A-Za-z_ء-ي'\s]{5,200}$/;
			var d_c_street_address=$("#d_c_street_address").val();
			if(pattern.test(d_c_street_address) && d_c_street_address !=='')
				{
					$("#d_c_street_address_error_msg").hide();
					$("#d_c_street_address").css("border","1px solid #34F458");
				}
				else
				{
					$("#d_c_street_address_error_msg").html('يجب ادخال عنوان الشارع يحتوي حروف او ارقام');
					$("#d_c_street_address_error_msg").show();
					$("#d_c_street_address").css("border","1px solid #F90A0A");
					error_d_c_street_address=true;

				}//end if
		}//check_d_c_street_address()
/*--------------------------check_d_c_street_address-------------------------*/
		function check_d_c_place_name()
		{			
			var pattern=/^[A-Za-z_ء-ي'\s]{5,200}$/;
			var d_c_place_name=$("#d_c_place_name").val();
			if(pattern.test(d_c_place_name) && d_c_place_name !=='')
				{
					$("#d_c_place_name_error_msg").hide();
					$("#d_c_place_name").css("border","1px solid #34F458");
				}
			else
				{
					$("#d_c_place_name_error_msg").html('اسم عمارة وشقة العيادة يجب ان يحتوي حروف فقط');
					$("#d_c_place_name_error_msg").show();
					$("#d_c_place_name").css("border","1px solid #F90A0A");
					error_d_e_place_address=true;
			}
		}//check_d_c_place_name
/*--------------------------check_d_c_day_start()-------------------------*/
		function check_d_c_day_start()
		{			
			var d_c_day_start =$("#d_c_day_start").val();
			if(d_c_day_start!==null)
			{
				$("#d_c_day_start_error_msg").hide();
				$("#d_c_day_start").css("border","1px solid #34F458");
			}
			else
			{
				$("#d_c_day_start_error_msg").html("يرجى اختيار اول ايام الدوام");
				$("#d_c_day_start_error_msg").show();
				$("#d_c_day_start").css("border","1px solid #F90A0A");
				error_d_c_day_start=true;
			}
		}//check_d_c_day_start()
/*--------------------------check_d_c_day_end()-------------------------*/
		function check_d_c_day_end()
		{			
			var d_c_day_end =$("#d_c_day_end").val();
			if(d_c_day_end!==null)
			{
				$("#d_c_day_end_error_msg").hide();
				$("#d_c_day_end").css("border","1px solid #34F458");
			}
			else
			{
				$("#d_c_day_end_error_msg").html("يرجى اختيار اخر ايام الدوام");
				$("#d_c_day_end_error_msg").show();
				$("#d_c_day_end").css("border","1px solid #F90A0A");
				error_d_c_day_end=true;
			}
		}//check_d_c_day_end()
/*--------------------------check_d_c_period_start()-------------------------*/
		function check_d_c_period_start()
		{			
			var d_c_period_start =$("#d_c_period_start").val();
			if(d_c_period_start!==null)
			{
				$("#d_c_period_start_error_msg").hide();
				$("#d_c_period_start").css("border","1px solid #34F458");
			}
			else
			{
				$("#d_c_period_start_error_msg").html("يرجى اختيار بداية فترة الدوام");
				$("#d_c_period_start_error_msg").show();
				$("#d_c_period_start").css("border","1px solid #F90A0A");
				error_d_c_period_start=true;
			}
		}//check_d_c_period_start()
/*--------------------------check_d_c_period_end()-------------------------*/
		function check_d_c_period_end()
		{			
			var d_c_period_end =$("#d_c_period_end").val();
			if(d_c_period_end!==null)
			{
				$("#d_c_period_end_error_msg").hide();
				$("#d_c_period_end").css("border","1px solid #34F458");
			}
			else
			{
				$("#d_c_period_end_error_msg").html("يرجى اختيار نهاية فترة الدوام");
				$("#d_c_period_end_error_msg").show();
				$("#d_c_period_end").css("border","1px solid #F90A0A");
				error_d_c_period_end=true;
			}
		}//check_d_c_period_end()

		/*----------------------------------------submit clinic data--------------------------*/
	$("#d_clinic_form").submit(function(){

		error_d_c_job_name=false;
		error_d_c_name=false;
		error_d_c_country_address=false;
		error_d_c_city_address=false;
		error_d_c_street_address=false;
		error_d_c_place_name=false;
		error_d_c_day_start=false;
		error_d_c_day_end=false;
		error_d_c_period_start=false;
		error_d_c_period_end=false;

		check_d_c_job_name();
		check_d_c_name();
		check_d_c_country_address();
		check_d_c_city_address();
		check_d_c_street_address();
		check_d_c_place_name();
		check_d_c_day_start();
		check_d_c_day_end();
		check_d_c_period_start();
		check_d_c_period_end();
		
		if(!error_d_c_job_name===false && !error_d_c_name===false && !error_d_c_country_address===false 
			&& !error_d_c_city_address===false && !error_d_c_street_address===false 
			&& !error_d_c_place_name===false && !error_d_c_day_start===false
			&& !error_d_c_day_end===false && !error_d_c_period_start===false && !error_d_c_period_end===false)
		{

			alert('يرجى تعبئة البيانات بشكل صحيح');
			return false;
		}
	});//end  experience form
	});//end function of check experince data
    
</script>

 <script type="text/javascript">
    $(document).on("click",".pagination a",function() {
        var theUrl=$(this).attr('href');
        $('#doctor_data').load(theUrl);
        return false;
    });
    </script>
	</body>
</html>