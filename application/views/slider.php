<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-pause="false" >
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner justify-content-center">
    <div class="carousel-item active justify-content-center">
      <img class="d-block w-100" src="<?php echo base_url();?>assets/images/2.jpg?>/1000x500?auto=yes&bg=777&fg=555&text=First slide" alt="First slide">
        <div class="carousel-caption  d-md-block">
          <h5>نسهل لك الوصول لافضل الاطباء في اليمن</h5>
        </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo base_url();?>assets/images/1.jpg?>/1000x500?auto=yes&bg=666&fg=444&text=Second slide" alt="Second slide">
      <div class="carousel-caption d-md-block">
      <h5>مختلف الاطباء في معظم التخصصات تجدهم في مكان واحد</h5>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" opacity ="0.2" src="<?php echo base_url();?>assets/images/h1.jpg?>/1000x500?auto=yes&bg=555&fg=333&text=Third slide" alt="Third slide">
               <div class="carousel-caption d-md-block">
      <h5>Aydadaty offers Specialities, Doctors in One Place</h5>
       </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  <!-- <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next" >
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev" >
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a> -->
 
    <!-- search form of slider -->
    <div class="carousel-caption  d-md-block" style="position: absolute;  top: 40%;">
                    <div "col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <form action="#" method="post" novalidate="novalidate">
                            
                                    <div class="row">
                                        <div class="col-lg-4 col-md-3 col-sm-12 search-field">                       
                                            <select class="form-control search-slt" id="exampleFormControlSelect1">
                                                <option>اختر التخصص..</option>
                                                <?php if(count($specialties)):?>
                                                  <?php foreach ($specialties as $specialty):?>
                                                    <option><?php echo $specialty['specialty_name'];?></option>
                                                  <?php endforeach;?>
                                                <?php endif;?>
                                            </select>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-12 search-field">
                                            <select class="form-control search-slt" id="exampleFormControlSelect1">
                                                <option>اختر المحافظة..</option>
                                                <option>صنعاء</option>
                                                <option>عدن</option>
                                                <option>تعز</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-12 search-field">                            
                                            <input type="text" class="form-control search-slt" placeholder="اسم الطبيب">
                                        </div>
                                        <div class="col-lg-2 col-md-3 col-sm-12 search-field">
                                            <button type="button" class="btn btn-primary wrn-btn btn-block" style="border:none;">بحث <i class="fa fa-search" style="color:#fff;"></i></button>
                                        </div>
                                    </div>
                                
                                </form>
                            </div>
                        </div>            
                    </div>
    </div>
</div>