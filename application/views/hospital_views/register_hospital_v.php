<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<?php 
$bar=APPPATH.'views/included_sections/navigation_bar.php';
include($bar);
?>
<!-- Register hospital data  -->
<div class="container">
  <div class="row" style="display:block;">
    <div class="col-xs-12">
      <div class="container bootstrap snippet">
        <div class="row">
          <div class="col-sm-1">
            
          </div>
          <div class="col-sm-10">
            <div class="tab-content">
            <?php echo validation_errors();?>
              <form class="form" action="<?php echo base_url('registerhospital');?>"  method="post" enctype="multipart/form-data">
                <div class="form-group col-xs-6"> 
                  <label>اسم المستشفى*</label>
                  <input type="text" class="form-control" name="h_name" placeholder="ادخل اسم المستشفى" title="ادخل اسم المستشفى" pattern="^[A-Za-z0-9_ء-ي']{5,200}+$" autofocus required>
                </div>
                <div class="form-group col-xs-6">
                  <label>اختصار اسم المستشفى(ان وجد)</label>
                  <input type="text" class="form-control" name="h_abbrev" placeholder="ادخل اختصار اسم المستشفى(ان وجد)" title="ادخل اختصار اسم المستشفى" pattern="^[A-Za-z0-9_ء-ي']{0,30}+$" autofocus>
                </div>                                      
                <div class="form-group col-xs-6"> 
                  <label>البريد الالكتروني للمستشفى*</label>
                  <input type="email" class="form-control" name='h_email' placeholder="ادخل البريد الالكتروني للمستشفى" title="ادخل البريد الالكتروني للمستشفى" autofocus required>
                </div>
                <div class="form-row">
                  <div class="form-group col-lg-6 col-md-12">
                    <label>رقم تلقون المستشفى*</label>                                                                                
                    <input type="text" class="form-control" name='h_phone' placeholder="رقم تلفون المستشفى" title="ادخل رقم تلفون المستشفى" pattern="^\d{9}$" autofocus required>
                  </div>
                  <div class="form-group col-lg-6 col-md-12">
                    <label>نوع المستشفى*</label>
                    <select class="form-control" name='h_type'autofocus required>
                      <option value="" selected disabled>اختر النوع..</option>
                      <option value='1'>حكومي</option>
                      <option value='0'>خاص</option>
                    </select>
                  </div>            
                </div>
                <div class="form-row" >
                  <div class="form-group col-lg-6 col-md-12">
                    <label>عنوان المستشفى*</label>
                    <select class="form-control" name='h_country_address' title="اختر الدولة"autofocus required>
                      <option value="" selected disabled>اختر الدولة..</option>
                      <option value='1'>اليمن</option>
                    </select> 
                  </div>
                  <div class="form-group col-lg-6 col-md-12">
                    <label style="visibility: hidden;">عنوان المدينة*</label>
                    <select class="form-control" name='h_city_address' title="اختر المدينة"autofocus required>
                      <option value="" selected disabled>اختر المدينة..</option>
                      <option value="1">صنعاء</option>
                      <option value="2">عدن</option>
                      <option value="3">تعز</option>
                      <option value="4">عمران</option> 
                    </select>
                  </div>            
                </div>
                <div class="form-group col-xs-6"> 
                  <input type="text" class="form-control" name='h_street_address' placeholder="ادخل الشارع" title="ادخل الشارع" pattern="^[A-Za-z0-9_ء-ي']{5,200}+$" autofocus>
                </div>
                <div class="form-group col-xs-6"> 
                  <label>التخصصات</label>
                  <textarea class="form-control" name="h_specialities" placeholder="ادخل التخصصات الموجودة في الامستشفى" title="ادخل التخصصات الموجودة في الامستشفى" autofocus  rows="3" cols="10"></textarea>
                </div>
                <div class="form-group col-xs-6"> 
                  <label>ملخص عن المستشفى</label>
                  <textarea class="form-control" name="h_detail" placeholder="ادخل ملخص عن المستشفى لا يقل عن 1500 حرف" title="ادخل ملخص عن المستشفى لا يقل عن 1500 حرف" autofocus  rows="9" cols="10" pattern="^[A-Za-z0-9_ء-ي']{5,200}+$" required></textarea>
                </div>
                <div class="form-row">
                  <div class="form-group col-lg-6 col-md-12">
                    <label>صورة المستشفى*</label>
                    <input type="file" class="form-control" name='h_img' title="ارفع صورة المستشفى" autofocus >
                  </div>
                  <div class="form-group col-lg-6 col-md-12">
                    <label>صورة الترخيص*</label>
                    <input type="file" class="form-control" name='h_license_img' title="ارفع صورة ترخيص المستشفى" autofocus >
                  </div>            
                </div>                                                              
                <div class="form-group col-xs-12">
                <br>
                  <button class="btn" type="submit" style="color:#fff;">حفظ</button>
                </div>
              </form> <!-- /form -->
            </div><!-- /tab-content -->
          </div><!-- /class="col-sm-110" -->
          <div class="col-sm-1">
          </div><!-- /class="col-sm-1" -->
        </div><!--/row-->
      </div><!-- /snippet -->
    </div><!-- /col-xs-12 -->
  </div><!-- /row -->
</div><!-- /container -->