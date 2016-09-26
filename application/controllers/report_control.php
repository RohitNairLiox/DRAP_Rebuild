<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Report_control extends CI_Controller {
// Dashboard View
		public function admin_dashboard()
	{
		$this->UserLoginCheck();
			$data['TaskList_Data'] = $this->currentTask_list();
			$data['ClientList_Data'] = $this->Client_list();
			$data['Emp_Name'] = $this->session->userdata('user_name');
			$data['title'] = "Admin Dashboard";
			$data['tableName'] = "New Task List";
			$this->load->view('templates/head',$data);
			$this->load->view('templates/navbar',$data);
			$this->load->view('templates/sidebar_Admin');
			$this->load->view('templates/Welcome_banner');
			$this->load->view('content/AdminDashboard_content');
			$this->load->view('content/Table_TaskList',$data);
			$this->load->view('content/Table_ClientList',$data);
			$this->load->view('templates/footer');
			$this->load->view('templates/tail');
			
		
	}
		public function adminoverview()
	{
		$this->UserLoginCheck();
			$data['TaskList_Data'] = $this->currentTask_list();
			$data['ClientList_Data'] = $this->Client_list();
			$data['Emp_Name'] = $this->session->userdata('user_name');
			$data['title'] = "Admin Dashboard";
			$data['tableName'] = "New Task List";
			$this->load->view('templates/head',$data);
			$this->load->view('templates/navbar',$data);
			$this->load->view('templates/sidebar_Admin');
			$this->load->view('content/AdminDashboard_content');
			$this->load->view('content/Table_TaskList',$data);
			$this->load->view('content/Table_ClientList',$data);
			$this->load->view('templates/footer');
			$this->load->view('templates/tail');

			
			
		
	}
		public function DataOperator_dashboard()
	
	{
		$this->UserLoginCheck(); 
			$data['TaskList_Data'] = $this->currentTask_list();
			$data['Emp_Name'] = $this->session->userdata('user_name');
			$data['title'] = "User Dashboard";
			$this->load->view('templates/head',$data);
			$this->load->view('templates/navbarDE',$data);
			$this->load->view('templates/sidebar_DataEntry');
			$this->load->view('templates/Welcome_banner');
			$this->load->view('content/Table_TasklistDE',$data);
			$this->load->view('templates/footer');
			$this->load->view('templates/tail');
		
		
	}
		public function DataOperator_overview()
	{
		$this->UserLoginCheck();
			$data['TaskList_Data'] = $this->currentTask_list();
			$data['Emp_Name'] = $this->session->userdata('user_name');
			$data['title'] = "User Dashboard";
			$this->load->view('templates/head',$data);
			$this->load->view('templates/navbarDE',$data);
			$this->load->view('templates/sidebar_DataEntry');
			$this->load->view('content/Table_TasklistDE',$data);
			$this->load->view('templates/footer');
			$this->load->view('templates/tail');
		
		
	}
// Dashboard View ENDS 	
	
// Settings View  	

		public function settings_admin()
	{
		$this->UserLoginCheck();
			$data['title'] = "Admin Dashboard";
			$data['Emp_Name'] = $this->session->userdata('user_name');
			$this->load->view('templates/head',$data);
			$this->load->view('templates/navbar',$data);
			$this->load->view('templates/sidebar_Admin');
			$this->load->view('content/SettingsContent_admin');
			$this->load->view('templates/footer');
			$this->load->view('templates/tail');

	}


		public function settings_user()
	{
		$this->UserLoginCheck();
			$data['title'] = "Admin Dashboard";
			$data['Emp_Name'] = $this->session->userdata('user_name');
			$this->load->view('templates/head',$data);
			$this->load->view('templates/navbarDE',$data);
			$this->load->view('templates/sidebar_DataEntry');
			$this->load->view('content/SettingsContent_user');
			$this->load->view('templates/footer');
			$this->load->view('templates/tail');

	}
// Settings View ENDS

// Password change View

		public function pswdChanged_admin()
	{
		$this->UserLoginCheck();
			$data['TaskList_Data'] = $this->currentTask_list();
			$data['ClientList_Data'] = $this->Client_list();
			$data['Emp_Name'] = $this->session->userdata('user_name');
			$data['title'] = "Admin Dashboard";
			$data['tableName'] = "New Task List";
			$this->load->view('templates/head',$data);
			$this->load->view('templates/navbar',$data);
			$this->load->view('templates/sidebar_Admin');
			$this->load->view('templates/pswdChange_Success');
			$this->load->view('content/AdminDashboard_content');
			$this->load->view('content/Table_TaskList',$data);
			$this->load->view('content/Table_ClientList',$data);
			$this->load->view('templates/footer');
			$this->load->view('templates/tail');
			
		
	}

		public function pswdChanged_user()
	
	{
		$this->UserLoginCheck(); 
			$data['TaskList_Data'] = $this->currentTask_list();
			$data['Emp_Name'] = $this->session->userdata('user_name');
			$data['title'] = "User Dashboard";
			$this->load->view('templates/head',$data);
			$this->load->view('templates/navbarDE',$data);
			$this->load->view('templates/sidebar_DataEntry');
			$this->load->view('templates/pswdChange_Success');
			$this->load->view('content/Table_TasklistDE',$data);
			$this->load->view('templates/footer');
			$this->load->view('templates/tail');
		
		
	}

// Password change View ENDS
	
// Status change View
		public function StatusChange_Completed()
	{
		$this->UserLoginCheck();
	 		$data['TaskList_Data'] = $this->currentTask_list();
	 		$data['Emp_Name'] = $this->session->userdata('user_name');
			$data['title'] = "Admin Dashboard";
			$data['tableName'] = "Current Task List";
			$this->load->view('templates/head',$data);
			$this->load->view('templates/navbar',$data);
			$this->load->view('templates/sidebar_Admin');
			$this->load->view('templates/StatusChange_Success');
			$this->load->view('content/Table_TaskList',$data);
			$this->load->view('templates/footer');
			$this->load->view('templates/tail');
	}


// Status change View ENDS.
		
// Entry Form View
	
	 	public function new_task()
	 {
	 	$this->UserLoginCheck();
	 		$data['Emp_Name'] = $this->session->userdata('user_name');
			$data['title'] = "Admin Dashboard";
			$data['ClientName_Data'] = $this->ClientNames();
			$this->load->view('templates/head',$data);
			$this->load->view('templates/navbar',$data);
			$this->load->view('templates/sidebar_Admin');
			$this->load->view('content/DataEntry_TaskList',$data);
			$this->load->view('templates/footer');
			$this->load->view('templates/tail');
	 }

	 public function new_client()
	 
	 {
	 	$this->UserLoginCheck();
	 		$data['Emp_Name'] = $this->session->userdata('user_name');
			$data['title'] = "Admin Dashboard";
			$this->load->view('templates/head',$data);
			$this->load->view('templates/navbar',$data);
			$this->load->view('templates/sidebar_Admin');
			$this->load->view('content/DataEntry_ClientList',$data);
			$this->load->view('templates/footer');
			$this->load->view('templates/tail');
	 } 	
// Entry Form View ENDS

// Success Message View
	     public function new_taskSubmission()
	 {
	 	$this->UserLoginCheck();
	 		$data['Emp_Name'] = $this->session->userdata('user_name');
			$data['title'] = "Admin Dashboard";
			$this->load->view('templates/head',$data);
			$this->load->view('templates/navbar',$data);
			$this->load->view('templates/sidebar_Admin');
			$this->load->view('templates/tasksuccess_DataEntry');
			$this->load->view('content/DataEntry_TaskList');
			$this->load->view('templates/footer');
			$this->load->view('templates/tail');
	 }
	     public function DailyReport_submission()
	 {
	 	$this->UserLoginCheck();
	 		$data['Emp_Name'] = $this->session->userdata('user_name');
			$data['title'] = "User Dashboard";
			$this->load->view('templates/head',$data);
			$this->load->view('templates/navbarDE',$data);
			$this->load->view('templates/sidebar_DataEntry');
			$this->load->view('templates/Reportsuccess_DataEntry');
			$this->load->view('content/DataEntry_DailyReport');
			$this->load->view('templates/footer');
			$this->load->view('templates/tail');
	 }
	 	 public function new_clientSubmission()
	 {
	 	$this->UserLoginCheck();
	 		$data['Emp_Name'] = $this->session->userdata('user_name');
			$data['title'] = "Admin Dashboard";
			$this->load->view('templates/head',$data);
			$this->load->view('templates/navbar',$data);
			$this->load->view('templates/sidebar_Admin');
			$this->load->view('templates/clientsuccess_DataEntry');
			$this->load->view('content/DataEntry_ClientList');
			$this->load->view('templates/footer');
			$this->load->view('templates/tail');
	 }
	 	 public function new_clientSubmissionError()
	 {
	 	$this->UserLoginCheck();
	 		$data['Emp_Name'] = $this->session->userdata('user_name');
			$data['title'] = "Admin Dashboard";
			$this->load->view('templates/head',$data);
			$this->load->view('templates/navbar',$data);
			$this->load->view('templates/sidebar_Admin');
			$this->load->view('templates/clienterror_DataEntry');
			$this->load->view('content/DataEntry_ClientListError');
			$this->load->view('templates/footer');
			$this->load->view('templates/tail');
	 }	
	 	public function NewEmp_Added()
	{
		$this->UserLoginCheck();
			$data['Emp_Name'] = $this->session->userdata('user_name');
			$data['Emp_List'] = $this->Emp_list();
			$data['title'] = "Admin Dashboard";
			$this->load->view('templates/head',$data);
			$this->load->view('templates/navbar',$data);
			$this->load->view('templates/sidebar_Admin');
			$this->load->view('templates/NewEmp_Success');
			$this->load->view('content/DataEntry_EmpList');
			$this->load->view('content/Table_EmpList',$data);
			$this->load->view('templates/footer');
			$this->load->view('templates/tail');
			
		
	}
	 	public function NewEmp_AddedError()
	{
		$this->UserLoginCheck();
			$data['Emp_Name'] = $this->session->userdata('user_name');
			$data['Emp_List'] = $this->Emp_list();
			$data['title'] = "Admin Dashboard";
			$this->load->view('templates/head',$data);
			$this->load->view('templates/navbar',$data);
			$this->load->view('templates/sidebar_Admin');
			$this->load->view('templates/NewEmp_Error');
			$this->load->view('content/DataEntry_EmpListError');
			$this->load->view('content/Table_EmpList',$data);
			$this->load->view('templates/footer');
			$this->load->view('templates/tail');
			
		
	}

		public function Emp_Deleted()
	{
		$this->UserLoginCheck();
			$data['Emp_Name'] = $this->session->userdata('user_name');
			$data['Emp_List'] = $this->Emp_list();
			$data['title'] = "Admin Dashboard";
			$this->load->view('templates/head',$data);
			$this->load->view('templates/navbar',$data);
			$this->load->view('templates/sidebar_Admin');
			$this->load->view('templates/EmpDeleted_Success');
			$this->load->view('content/DataEntry_EmpList');
			$this->load->view('content/Table_EmpList',$data);
			$this->load->view('templates/footer');
			$this->load->view('templates/tail');
			
		
	}
		public function Emp_Updated()
	{
		$this->UserLoginCheck();
			$data['Emp_Name'] = $this->session->userdata('user_name');
			$data['Emp_List'] = $this->Emp_list();
			$data['title'] = "Admin Dashboard";
			$this->load->view('templates/head',$data);
			$this->load->view('templates/navbar',$data);
			$this->load->view('templates/sidebar_Admin');
			$this->load->view('templates/EmpUpdated_Success');
			$this->load->view('content/DataEntry_EmpList');
			$this->load->view('content/Table_EmpList',$data);
			$this->load->view('templates/footer');
			$this->load->view('templates/tail');
			
		
	}
			public function TaskReport()
	{
		
		$data['Uid'] = $this->session->flashdata('myTaskID');
		$this->load->model('report_model');
		$data['TaskData'] = $this->report_model->Fetch_TaskData($data);
		$data['PreviousReports'] = $this->report_model->Fetch_previousReport($data);
		$data['Emp_Name'] = $this->session->userdata('user_name');
		$data['title'] = "User Dashboard";
			$this->load->view('templates/head',$data);
			$this->load->view('templates/navbarDE',$data);
			$this->load->view('templates/sidebar_DataEntry');
			$this->load->view('templates/DataEntry_TaskReportSuccess',$data);
			$this->load->view('content/DataEntry_TaskReport',$data);
			$this->load->view('templates/footer');
			$this->load->view('templates/tail');

	}
// Success Message View ENDS

	 	public function currentTaskList()
	 {
	 	$this->UserLoginCheck();
	 		$data['TaskList_Data'] = $this->currentTask_list();
	 		$data['Emp_Name'] = $this->session->userdata('user_name');
			$data['title'] = "Admin Dashboard";
			$data['tableName'] = "Current Task List";
			$this->load->view('templates/head',$data);
			$this->load->view('templates/navbar',$data);
			$this->load->view('templates/sidebar_Admin');
			$this->load->view('content/Table_TaskList',$data);
			$this->load->view('templates/footer');
			$this->load->view('templates/tail');
	 }
	 	public function completedTaskList()
	 {
	 	$this->UserLoginCheck();
	 		$data['TaskList_Data'] = $this->completedTask_list();
	 		$data['Emp_Name'] = $this->session->userdata('user_name');
			$data['title'] = "Admin Dashboard";
			$data['tableName'] = "Completed Task List";
			$this->load->view('templates/head',$data);
			$this->load->view('templates/navbar',$data);
			$this->load->view('templates/sidebar_Admin');
			$this->load->view('content/Table_TaskListPrevious',$data);
			$this->load->view('templates/footer');
			$this->load->view('templates/tail');
	 }
	 	public function allClientList()
	 {
	 	$this->UserLoginCheck();
	 		$data['ClientList_Data'] = $this->Client_list();
	 		$data['Emp_Name'] = $this->session->userdata('user_name');
			$data['title'] = "Admin Dashboard";
			$this->load->view('templates/head',$data);
			$this->load->view('templates/navbar',$data);
			$this->load->view('templates/sidebar_Admin');
			$this->load->view('content/Table_ClientList',$data);
			$this->load->view('templates/footer');
			$this->load->view('templates/tail');
	 }
	 
	 	 public function DailyReport()
	 {
	 	$this->UserLoginCheck();
	 		$data['Emp_Name'] = $this->session->userdata('user_name');
			$data['title'] = "User Dashboard";
			$data['ClientName_Data'] = $this->ClientNames();
			$this->load->view('templates/head',$data);
			$this->load->view('templates/navbarDE',$data);
			$this->load->view('templates/sidebar_DataEntry');
			$this->load->view('content/DataEntry_DailyReport',$data);
			$this->load->view('templates/footer');
			$this->load->view('templates/tail');
	 }
	 	 public function Table_DailyReportAdmin()
	 {
	 	$this->UserLoginCheck();
	 		$data['DailyReport_Data'] = $this->DailyReport_list();
	 		$data['Emp_Name'] = $this->session->userdata('user_name');
			$data['title'] = "Admin Dashboard";
			$this->load->view('templates/head',$data);
			$this->load->view('templates/navbar',$data);
			$this->load->view('templates/sidebar_Admin');
			$this->load->view('content/Table_DailyReport',$data);
			$this->load->view('templates/footer');
			$this->load->view('templates/tail');
	 }
	     public function Table_DailyReportUser()
	 {
	 	$this->UserLoginCheck();
	 		$data['DailyReport_Data'] = $this->DailyReport_listUser();
	 		$data['Emp_Name'] = $this->session->userdata('user_name');
			$data['title'] = "User Dashboard";
			$this->load->view('templates/head',$data);
			$this->load->view('templates/navbarDE',$data);
			$this->load->view('templates/sidebar_DataEntry');
			$this->load->view('content/Table_DailyReport',$data);
			$this->load->view('templates/footer');
			$this->load->view('templates/tail');
	 }
	


		public function EmployeeList_Table()
	{
		$data['Emp_List'] = $this->Emp_list();
		$data['title'] = "User Dashboard";

			$this->load->view('templates/head',$data);
			$this->load->view('templates/navbar',$data);
			$this->load->view('templates/sidebar_Admin');

	}

		public function Add_NewEmp()
	{
		$this->UserLoginCheck();
			$data['Emp_Name'] = $this->session->userdata('user_name');
			$data['Emp_List'] = $this->Emp_list();
			$data['title'] = "Admin Dashboard";
			$this->load->view('templates/head',$data);
			$this->load->view('templates/navbar',$data);
			$this->load->view('templates/sidebar_Admin');
			$this->load->view('content/DataEntry_EmpList');
			$this->load->view('content/Table_EmpList',$data);
			$this->load->view('templates/footer');
			$this->load->view('templates/tail');
			
		
	}

		public function View_TaskReport()
	{
		$data['Uid'] = $this->input->post('Task_ID');
		$this->load->model('report_model');
		$data['PreviousReports'] = $this->report_model->Fetch_previousReport($data);
		$data['Emp_Name'] = $this->session->userdata('user_name');
		$data['title'] = "Admin Dashboard";
			$this->load->view('templates/head',$data);
			$this->load->view('templates/navbar',$data);
			$this->load->view('templates/sidebar_Admin');
			$this->load->view('content/Table_TaskReport',$data);
			$this->load->view('templates/footer');
			$this->load->view('templates/tail');			
			 
	}
		public function Edit_TaskReport()
	{
		$data['Uid'] = $this->input->post('Task_ID_Update');
		$this->load->model('report_model');
		$datalist['TaskData'] = $this->report_model->Fetch_TaskData($data);
		$datalist['ClientName_Data'] = $this->ClientNames();
		$data['Emp_Name'] = $this->session->userdata('user_name');
		$data['title'] = "Admin Dashboard";
			$this->load->view('templates/head',$data);
			$this->load->view('templates/navbar',$data);
			$this->load->view('templates/sidebar_Admin');
			$this->load->view('content/DataEntry_EditTaskReport',$datalist);
			$this->load->view('templates/footer');
			$this->load->view('templates/tail');			
			 
	}
		public function View_TaskReportPrevious()
	{
		$data['Uid'] = $this->input->post('Task_ID');
		$this->load->model('report_model');
		$data['PreviousReports'] = $this->report_model->Fetch_previousReport($data);
		$data['Emp_Name'] = $this->session->userdata('user_name');
		$data['title'] = "Admin Dashboard";
			$this->load->view('templates/head',$data);
			$this->load->view('templates/navbar',$data);
			$this->load->view('templates/sidebar_Admin');
			$this->load->view('content/Table_TaskReportPrevious',$data);
			$this->load->view('templates/footer');
			$this->load->view('templates/tail');			
			 
	}
		public function TaskReport_Data()
	{
		$data['Uid'] = $this->input->post('Task_ID');
		$this->load->model('report_model');
		$data['TaskData'] = $this->report_model->Fetch_TaskData($data);
		$data['PreviousReports'] = $this->report_model->Fetch_previousReport($data);

		$data['Emp_Name'] = $this->session->userdata('user_name');
		$data['title'] = "User Dashboard";
			$this->load->view('templates/head',$data);
			$this->load->view('templates/navbarDE',$data);
			$this->load->view('templates/sidebar_DataEntry');
			$this->load->view('content/DataEntry_TaskReport',$data);
			$this->load->view('templates/footer');
			$this->load->view('templates/tail');			
			 
	}

	/* Private functions to fetch data from DB */
		private function currentTask_list()
		{
			
			$this->load->model('report_model');
			$result = $this->report_model->CurrentTask_list(); 
			return $result;
		}
		private function completedTask_list()
		{
			
			$this->load->model('report_model');
			$result = $this->report_model->CompletedTask_list(); 
			return $result;
		}
		private function ReportingTask_list()
		{
			
			$this->load->model('report_model');
			$result = $this->report_model->Fetch_TaskData($data);
			return $result;
		}	
		private function Client_list()
		{
			
			$this->load->model('report_model');
			$result = $this->report_model->Client_list(); 
			return $result;
		}
		private function DailyReport_list()
		{
			
			$this->load->model('report_model');
			$result = $this->report_model->DailyReport_list(); 
			return $result;
		}
		private function Emp_list()
		{
			
			$this->load->model('report_model');
			$result = $this->report_model->Employee_list(); 
			return $result;
		}
		private function DailyReport_listUser()
		{
			
			$this->load->model('report_model');
			$result = $this->report_model->DailyReport_listPerUser(); 
			return $result;
		}
		private function UserLoginCheck()
		{
			$UserSession = $this->session->userdata('user_data');
			if (!$UserSession){ 
				redirect(base_url());
			}
		}
		private function ClientNames()
		{
			
			$this->load->model('report_model');
			$result = $this->report_model->ClientName_list(); 
			return $result;
		}
}
?>