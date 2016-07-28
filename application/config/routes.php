<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


$route['Admin_Dashboard'] = 'report_control/admin_dashboard';
$route['AdminPanel_Overview'] = 'report_control/adminoverview';
$route['New_Task'] = 'report_control/new_task';
$route['New_Client'] = 'report_control/new_client';
$route['User_Dashboard'] = 'report_control/DataOperator_dashboard';
$route['UserPanel_Overview'] = 'report_control/DataOperator_overview';
$route['TaskForm_submission'] = 'report_control/new_taskSubmission';
$route['ClientForm_submission'] = 'report_control/new_clientSubmission';
$route['DailyRepForm_submission'] = 'report_control/DailyReport_submission';
$route['DailyRepForm'] = 'report_control/DailyReport';
$route['NewTaskList'] = 'report_control/newTaskList';
$route['CurrentTaskList'] = 'report_control/currentTaskList';
$route['CompletedTaskList'] = 'report_control/completedTaskList';
$route['AllClientList'] = 'report_control/allClientList';
$route['New_TaskList'] = 'report_control/DO_NewTaskList';
$route['Current_TaskList'] = 'report_control/DO_CurrentTaskList';
$route['Completed_TaskList'] = 'report_control/DO_CompletedTaskList';
$route['Insert_NewTask'] = 'insert_control/NewTask';
$route['Insert_NewClient'] = 'insert_control/NewClient';
$route['Insert_NewEmployee'] = 'insert_control/NewEmployee';
$route['StatusChanged_Taken'] = 'insert_control/StatusChange_Taken';
$route['StatusChanged_Completed'] = 'insert_control/StatusChange_Comp';
$route['Insert_DailyReport'] = 'insert_control/NewDailyReport';
$route['AdminPswdChange'] = 'insert_control/ChangePassword_Admin';
$route['UserPswdChange'] = 'insert_control/ChangePassword_User';
$route['Delete_User'] = 'insert_control/DeleteEmployee';
$route['ChangeStatus_Taken'] = 'report_control/StatusChange_Taken';
$route['ChangeStatus_Complete'] = 'report_control/StatusChange_Completed';
$route['View_DailyReport'] = 'report_control/Table_DailyReportAdmin';
$route['My_DailyReport'] = 'report_control/Table_DailyReportUser';
$route['AdminSetting'] = 'report_control/settings_admin';
$route['UserSetting'] = 'report_control/settings_user';
$route['AdminPswdChanged'] = 'report_control/pswdChanged_admin';
$route['UserPswdChanged'] = 'report_control/pswdChanged_user';
$route['Add_NewEmployee'] = 'report_control/Add_NewEmp';
$route['UserAdded'] = 'report_control/NewEmp_Added';
$route['UserDeleted'] = 'report_control/Emp_Deleted';
$route['logout'] = 'login_control/logout';

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
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['default_controller'] = "login_control";
$route['404_override'] = '';


/* End of file routes.php */
/* Location: ./application/config/routes.php */