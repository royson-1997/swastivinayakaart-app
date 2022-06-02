<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
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
|   example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|   http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|   $route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|   $route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['default_controller'] = "home";
$route['404_override'] = 'admin';

/*********** HOME DEFINED ROUTES *******************/
$route['annual-report'] = 'home/annualReport';
$route['financial-results'] = 'home/quarterlyFinancialResults';
$route['shareholding-pattern'] = 'home/shareholdingPattern';
$route['unclaimed-divided'] = 'home/unclaimedDivided';
$route['declaration-of-evoting-results'] = 'home/declarationOfEvotingResults';
$route['unclaimed-shares'] = 'home/unclaimedShares';

$route['team'] = 'home/managementTeam';
$route['announcements'] = 'home/announcements';
$route['policy'] = 'home/companyPolicy';
$route['download'] = 'home/download';

/*********** ADMIN DEFINED ROUTES *******************/

$route['admin'] = 'login';
$route['admin/loginMe'] = 'login/loginMe';
$route['admin/login'] = 'login/loginMe';
$route['admin/dashboard'] = 'user';
$route['admin/logout'] = 'user/logout';
$route['admin/userListing'] = 'user/userListing';
$route['admin/userListing/(:num)'] = "user/userListing/$1";
$route['admin/addNew'] = "user/addNew";

$route['admin/addNewUser'] = "user/addNewUser";
$route['admin/editOld'] = "user/editOld";
$route['admin/editOld/(:num)'] = "user/editOld/$1";
$route['admin/editUser'] = "user/editUser";
$route['admin/deleteUser'] = "user/deleteUser";
$route['admin/loadChangePass'] = "user/loadChangePass";
$route['admin/changePassword'] = "user/changePassword";
$route['admin/pageNotFound'] = "user/pageNotFound";
$route['admin/checkEmailExists'] = "user/checkEmailExists";

$route['admin/forgotPassword'] = "login/forgotPassword";
$route['admin/resetPasswordUser'] = "login/resetPasswordUser";
$route['admin/resetPasswordConfirmUser'] = "login/resetPasswordConfirmUser";
$route['admin/resetPasswordConfirmUser/(:any)'] = "login/resetPasswordConfirmUser/$1";
$route['admin/resetPasswordConfirmUser/(:any)/(:any)'] = "login/resetPasswordConfirmUser/$1/$2";
$route['admin/createPasswordUser'] = "login/createPasswordUser";

$route['admin/report-document-type'] = "admin/reportDocumentType";
$route['admin/report-document-type/(:num)'] = "admin/reportDocumentType/$1";

$route['admin/team-document-type'] = "admin/teamDocumentType";
$route['admin/team-document-type/(:num)'] = "admin/teamDocumentType/$1";

$route['admin/announcements-document-type'] = "admin/announcementsDocumentType";
$route['admin/announcements-document-type/(:num)'] = "admin/announcementsDocumentType/$1";

$route['admin/policy-document-type'] = "admin/policyDocumentType";
$route['admin/policy-document-type/(:num)'] = "admin/policyDocumentType/$1";

$route['admin/download-document-type'] = "admin/downloadDocumentType";
$route['admin/download-document-type/(:num)'] = "admin/downloadDocumentType/$1";

$route['admin/report-document-upload'] = "admin/reportDocumentUpload";
$route['admin/report-document-upload/(:num)'] = "admin/reportDocumentUpload/$1";

$route['admin/team-document-upload'] = "admin/teamDocumentUpload";
$route['admin/team-document-upload/(:num)'] = "admin/teamDocumentUpload/$1";

$route['admin/announcements-document-upload'] = "admin/announcementsDocumentUpload";
$route['admin/announcements-document-upload/(:num)'] = "admin/announcementsDocumentUpload/$1";

$route['admin/policy-document-upload'] = "admin/policyDocumentUpload";
$route['admin/policy-document-upload/(:num)'] = "admin/policyDocumentUpload/$1";

$route['admin/download-document-upload'] = "admin/downloadDocumentUpload";
$route['admin/download-document-upload/(:num)'] = "admin/downloadDocumentUpload/$1";

$route['admin/contact-document-upload'] = "admin/contactDocumentUpload";
$route['admin/contact-document-upload/(:num)'] = "admin/contactDocumentUpload/$1";



// $route['admin/changeStatus'] = "admin/changeStatus";


/* End of file routes.php */
/* Location: ./application/config/routes.php */
