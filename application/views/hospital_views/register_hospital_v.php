<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php 
$bar=APPPATH.'views/included_sections/navigation_bar.php';
include($bar);?>
<div class="container">
  <div class="row" style="display:block;">
    <div class="col-xs-12">
                       <div class="container bootstrap snippet">
                        <div class="row">
                          <div class="col-sm-1">
                            
                          </div>
                          <div class="col-sm-10">
                            <div class="tab-content">
                                    <form class="form" action="#" method="post" id="registrationForm">
                                      <div class="form-group col-xs-6"> 
                                        <label>اسم المستشفى*</label>
                                        <input type="text" class="form-control" name="h_name" placeholder="ادخل اسم المستشفى" title="ادخل اسم المستشفى" autofocus required>
                                      </div>

                                      <div class="form-group col-xs-6"> 
                                        <label>اختصار اسم المستشفى(ان وجد)</label>
                                        <input type="text" class="form-control" name="h_abbrev_name" placeholder="ادخل اختصار اسم المستشفى(ان وجد)" title="ادخل اختصار اسم المستشفى" autofocus required>
                                      </div>
                                      <div class="form-group col-xs-6"> 
                                        <label>البريد الالكتروني للمستشفى*</label>
                                          <input type="email" class="form-control" name='h_email' placeholder="ادخل البريد الالكتروني للمستشفى" title="ادخل البريد الالكتروني للمستشفى" autofocus required>
                                      </div>
                                       <div class="form-row">
                                        <div class="form-group col-lg-6 col-md-12">
                                          <label>رقم تلقون المستشفى*</label>
                                          <input type="number" class="form-control" name='h_phone' placeholder="رقم تلفون المستشفى" title="ادخل رقم تلفون المستشفى" autofocus required>
                                        </div>
                                        <div class="form-group col-lg-6 col-md-12">
                                            <label>نوع المستشفى*</label>
                                            <select class="form-control" name='h_type'autofocus required>
                                              <option selected>اختر النوع..</option>
                                              <option value='1'>حكومي</option>
                                              <option value='0'>خاص</option>
                                            </select>
                                        </div>            
                                      </div>
                                      <div class="form-row" >
                                        <div class="form-group col-lg-6 col-md-12">
                                          <label>عنوان المستشفى*</label>
                                            <select class="form-control" name='h_address_country' title="اختر الدولة"autofocus required>
                                              <option selected>اختر الدولة..</option>
                                              <option value='1'>اليمن</option>
                                              <option value='0'>مصر</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-lg-6 col-md-12">
                                          <label style="visibility: hidden;">عنوان المدينة*</label>
                                            <select class="form-control" name='h_address_city' title="اختر المدينة"autofocus required>
                                              <option selected>اختر المدينة..</option>
                                              <option value='1'>صنعاء</option>
                                              <option value='0'>عدن</option>
                                            </select>
                                        </div>            
                                      </div>
                                      <div class="form-group col-xs-6"> 
                                          <input type="text" class="form-control" name='h_address_street' placeholder="ادخل الشارع" title="ادخل الشارع" autofocus>
                                      </div>
                                      <div class="form-group col-xs-6"> 
                                        <label>التخصصات</label>
                                        <textarea class="form-control" name="h_specialities" placeholder="ادخل التخصصات الموجودة في الامستشفى" title="ادخل التخصصات الموجودة في الامستشفى" autofocus  rows="3" cols="10"></textarea>
                                      </div>
                                      <div class="form-group col-xs-6"> 
                                        <label>ملخص عن المستشفى</label>
                                        <textarea class="form-control" name="h_detail" placeholder="ادخل ملخص عن المستشفى لا يقل عن 1500 حرف" title="ادخل ملخص عن المستشفى لا يقل عن 1500 حرف" autofocus  rows="9" cols="10"></textarea>
                                      </div>
                                      <div class="form-row">
                                        <div class="form-group col-lg-6 col-md-12">
                                          <label>صورة المستشفى*</label>
                                          <input type="file" class="form-control" name='h_img' title="ارفع صورة المستشفى" autofocus required>
                                        </div>
                                        <div class="form-group col-lg-6 col-md-12">
                                          <label>صورة الترخيص*</label>
                                          <input type="file" class="form-control" name='h_' title="ارفع صورة ترخيص المستشفى" autofocus required>
                                        </div>            
                                      </div>                                                              
                                      <div class="form-group col-xs-12">
                                        <br>
                                        <button class="btn" type="submit" style="color:#fff;">حفظ</button>
                                      </div>
                                  </form> 
                            </div><!-- /tab-content -->
                          </div>
                          <div class="col-sm-1">
                            
                          </div>
                        </div><!--/row-->
                     
    </div>
  </div>
</div>
</div>