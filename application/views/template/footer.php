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
        </script>
	</body>
</html>