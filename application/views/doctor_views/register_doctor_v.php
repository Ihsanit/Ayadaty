<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php 
$bar=APPPATH.'views/included_sections/navigation_bar.php';
include($bar);?>
<?php 
if(!$this->session->userdata('is_doctor') || !$this->session->userdata('logged_in') ):
  $doctor_v=APPPATH.'views/included_sections/register_doctor_data.php';
  include($doctor_v);
  
elseif($this->session->userdata('is_doctor') && $this->session->userdata('logged_in')):
  redirect(base_url('editdoctor'));
  endif;
?>


<!-- ------------------------------- -->
