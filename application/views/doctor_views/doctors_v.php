<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php 
$bar=APPPATH.'views/included_sections/navigation_bar.php';
include($bar);?>
<?php
    if($this->session->flashdata('user_registered')):?>
        <p class="alert alert-success"><?php echo $this->session->flashdata('user_registered');?></p>
<?php endif;?>
<div class="container d-md-block" style="margin-bottom: 2rem;"><!-- d-none -->
      <h6>ابحث عن دكتور</h6>
      <div class="row justify-content-center">
                    <div class="col-md-12">
                            <div class="card-body">
                                <form action="#" method="post" novalidate="novalidate">
                            
                                    <div class="row">
                                        <div class="col-lg-2 col-md-4 col-sm-12">
                                            <label class="lbl-doctor">المحافظة</label>
                                            <select class="form-control search-slt" id="exampleFormControlSelect1">
                                                <option>اختر المحافظة..</option>
                                                <option>صنعاء</option>
                                                <option>عدن</option>
                                                <option>تعز</option>
                                            </select>
                                        </div>
                                        
                                        <div class="col-lg-2 col-md-4 col-sm-12"> 
                                            <label class="lbl-doctor">النوع</label>                      
                                            <select class="form-control search-slt">
                                                <option>اختر النوع..</option>
                                                <option>ذكر</option>
                                                <option>أٌنثى</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-3 col-md-4 col-sm-12">
                                            <label class="lbl-doctor">التخصص</label>                       
                                            <select class="form-control search-slt" id="exampleFormControlSelect1">
                                                <option>اختر التخصص..</option>
                                                <option>اسنان</option>
                                                <option>جلدية</option>
                                                <option>اطفال</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-3 col-md-4 col-sm-12"> 
                                            <label class="lbl-doctor">كلمات</label>                           
                                            <input type="text" class="form-control search-slt" placeholder="اسم الطبيب">
                                        </div>
                                        <div class="col-lg-2 col-md-4 col-sm-12">
                                            <label style="visibility:hidden;">تاريخ الميلاد</label>
                                            <button type="button" class="btn btn-primary wrn-btn btn-block" style="border:none;">بحث <i class="fa fa-search" style="color:#fff;"></i></button>
                                        </div>
                                        
                                    </div>
                                
                                </form>
                            </div>       
                    </div>
            </div>        
      </div>

      <!-- -------------------------------------------------------- -->
      <div class="container show-doctor">    
       <div class="row"> 
            <?php 
                $doctor=APPPATH.'views/included_sections/doctor.php';
                include($doctor);
                include($doctor);
                include($doctor);
                include($doctor);
                include($doctor);
                include($doctor);
                include($doctor);
                include($doctor);
            ?> 
       </div> 
       <div class="container" aria-label="Page navigation example" style="margin-bottom: -2rem;">
          <ul class="pagination">
            <li class="page-item">
              <a class="page-link" href="#" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
                <span class="sr-only">Previous</span>
              </a>
            </li>
            <li class="page-item active" >
                <a href="#">
                    <span class="page-link">1
                        <span class="sr-only">(current)</span>
                    </span>
                </a>
            </li>
            
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
              <a class="page-link" href="#" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
                <span class="sr-only">Next</span>
              </a>
            </li>
          </ul>
        </div>       
    </div>
