<?php foreach ($doctors as $doctor ): ?>
<div class="col-lg-3 col-md-6">
         <div class="card" style="border-radius:unset;">
            <div class="card-img-top text-center" style="background-color: rgba(204, 204, 204, 0.3);">
                <a href="<?php echo base_url('doctordetail');?>">
                    <img class="doctor-img" src="<?php echo base_url();?>assets/images/doctors/personal/<?php echo $doctor['d_personal_img'];?>" alt="Card image cap" >
                </a>
            </div>
            
            <div class="card-body">
               <div class="clinic-icon">
                     <i class="fas fa-user-md fa-md"></i> 
                     <span class="text-muted">د.<?php echo $doctor['d_name'];?></span>
                </div>
                <div class="clinic-icon">
                    <a href="#">
                        <i class="fas fa-stethoscope fa-md"></i> 
                        <span class="text-muted" style="color:#13bfb1 !important;"><?php echo $doctor['specialty_name'];?></span>
                    </a>
                </div>
                <div class="clinic-icon" >
                    <a href="<?php echo base_url('hospitaldetail');?>" >
                         <i class="fas fa-hospital fa-md"></i> 
                         <span class="text-muted" style="color:#13bfb1 !important;">مستشفى الوسام</span>
                    </a>
                </div>
                <div class="clinic-icon">
                     <i class="fas fa-map-marker-alt fa-md"></i> 
                     <span class="text-muted"><?php echo $doctor['city_name'];?></span>
                </div>
                <h6 class="card-title pb-3">
                    <span class="float-right d-inline-flex share">
                        <a href="#" class="float-right d-inline-flex share" style="text-decoration:none;">
                            <i class="far fa-star fas-1x"></i>
                            <i class="far fa-star fas"></i>
                            <i class="far fa-star fas"></i>
                            <i class="far fa-star fas"></i>                            
                            <i class="far fa-star fas"></i>
                        </a>
                    </span>
                </h6>               

                <br/>
                <a href="<?php echo base_url('doctordetail');?>" class="btn btn-sm btn-info float-right btn-more doctor-btn"><i style="color:#fff;" class="fas fa-angle-double-left"></i> التفاصيل</a>
               
               <a href="#" class="btn btn-sm btn-info float-left btn-more doctor-btn"><i style="color:#fff;" class="fas fa-angle-double-left"></i> حجز موعد</a>
            </div>
         </div>
</div>
<?php endforeach; ?>