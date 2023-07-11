<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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
|	https://codeigniter.com/userguide3/general/routing.html
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
$route['default_controller'] = 'LoginControllers';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['loginMe'] = 'LoginControllers/loginMe';
$route['logout'] = 'LogOutControllers';


// admin 
$route['adminDashboard'] = 'admin/DashboardControllers';
$route['addCandidate'] = 'admin/AddCandidateControllers';
$route['default_controller'] = 'LoginControllers';
$route['RegisterCandidate'] = 'admin/AddCandidateControllers/RegisterCandidate';
$route['ViewCandiateInfo/(:num)'] = 'admin/AddCandidateControllers/viewCandidateInformation/$1'; 
$route['editCandidateInfo/(:num)'] = 'admin/AddCandidateControllers/viewCandidateInformationforUpdate/$1'; 
$route['ViewCandiateDocument/(:num)/(:num)'] = 'admin/AddCandidateControllers/ViewCandiateDocument/$1/$2'; 


// super admin
$route['superadminDashboard'] = 'superadmin/SuperAdminDashboardControllers';
$route['admininformation'] = 'admin/DashboardControllers/AdminInformation';
$route['addnewadmin'] = 'superadmin/SuperAdminDashboardControllers/RegisteNewAdmin';
$route['UpdateAdminInformation/(:num)'] = 'admin/DashboardControllers/UpdateAdminInformation/$1'; 




// candidate
$route['candidateDashboard'] = 'candidate/CandidateDashboardControllers';
$route['viewCandidateInformationforUpdate/(:num)'] = 'admin/AddCandidateControllers/viewCandidateInformationforUpdate/$1'; 
$route['ExportCandidateInfoLog/(:num)'] = 'admin/AddCandidateControllers/createExcel/$1'; 

// viewCandidateInformationforUpdate



// mail
$route['registermail'] = 'mail/RegisterMailControllers/RegisterMail';







// $route['pdf/upload'] = 'PdfController/uploadPdf';  RegisterCandidate
// $route['pdf/view/(:num)'] = 'PdfController/viewPdf/$1';   get value as parameter













