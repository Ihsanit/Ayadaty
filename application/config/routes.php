<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//A URL with "signup" in the first segment will be remapped to the "user_c" controller and signup method.
$route['signup']='user_c/signup';

//A URL with "login" in the first segment will be remapped to the "user_c" controller and login method.
$route['login']='user_c/login';

//A URL with "booking" in the first segment will be remapped to the "patient_c" controller and book_appointment method.
$route['booking'] = 'patient_c/book_appointment';

<<<<<<< HEAD
/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
/*Date: Jan,10,2019
*Author: Rabab Shalan
*Description: Customizing routing rules 
*/
$route['control']='control_panel_c/index';
$route['doctor_c']='doctor_c/display_doctors';
$route['user/register']='user_c/register';
$route['services/create']='services_c/create_service';
$route['services']='services_c';
$route['default_controller'] = 'home_c/show_page';
$route['(:any)']='home_c/show_page/$1';//URI specified

=======
$route['default_controller'] = 'home_c';
>>>>>>> a524b0b4914f0237a19039780383b3c85dce7329

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
