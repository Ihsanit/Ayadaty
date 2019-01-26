<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//A URL with "signup" in the first segment will be remapped to the "user_c" controller and signup method.
$route['signup']='user_c/signup';

//A URL with "login" in the first segment will be remapped to the "user_c" controller and login method.
$route['login']='user_c/login';

//A URL with "booking" in the first segment will be remapped to the "patient_c" controller and book_appointment method.
$route['booking'] = 'patient_c/book_appointment';

$route['default_controller'] = 'home_c';

$route['(:any)']='home_c';//URI specified
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
