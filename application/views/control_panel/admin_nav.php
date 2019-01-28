<div class="row">
<div class="col-3">
<ul class="nav flex-column nav-admin" style="background-color:#007bff; ">
  <li class="nav-item">
    <a class="nav-link active" href="<?php echo base_url();?>">Home</a>
  </li>
  <div class="dropdown-divider"></div>
 <li class="nav-item dropdown">
    <a id="user-control" class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Users</a>
    <div id="user-tabs" >
      <a class="dropdown-item" href="#">Sign Up</a>
      <a class="dropdown-item" href="#">Login</a>
      <a class="dropdown-item" href="#">Display</a>      
    </div>
  </li>
  <div class="dropdown-divider"></div>
  <li class="nav-item dropdown">
    <a id="service-control" class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Services</a>
    <div id="service-tabs" >
      <a class="dropdown-item" href="<?php echo base_url();?>services_c/create_service">Create Service</a>
      <a class="dropdown-item" href="<?php echo base_url();?>/services">Display Services</a>
    </div>
  </li>
  <div class="dropdown-divider"></div>
  <li class="nav-item dropdown">
    <a id="doctor-control" class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Doctors</a>
    <div id="doctor-tabs" >
      <a class="dropdown-item" href="<?php echo base_url();?>doctor_c/create_doctor">Create Doctor</a>
      <a class="dropdown-item" href="<?php echo base_url();?>Doctor_c/dispaly_doctors">Dispaly Doctors</a>    
    </div>
  </li>
  <div class="dropdown-divider"></div>
   <li class="nav-item dropdown">
    <a id="patient-control" class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Patients</a>
    <div id="patient-tabs" >
      <a class="dropdown-item" href="<?php echo base_url();?>patient_c/create_patient">Create Patient</a>
      <a class="dropdown-item" href="#">Dispaly Patients</a>    
    </div>
  </li>
  <div class="dropdown-divider"></div>
  <li class="nav-item">
    <a class="nav-link active" href="#">Link</a>
  </li>
  <div class="dropdown-divider"></div>
  <li class="nav-item">
    <a class="nav-link active" href="#" >Link</a>
  </li>
  <div class="dropdown-divider"></div>
  <li class="nav-item">
    <a class="nav-link active" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
  </li>
</ul>
</div>
<div class="col-9">
    <div class="tab-content" id="v-pills-tabContent">
      <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">...</div>
      <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">...</div>
      <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">...</div>
      <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">...</div>
    </div>
  </div>
</div>