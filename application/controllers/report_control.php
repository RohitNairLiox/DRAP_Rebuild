<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Report_control extends CI_Controller {
	// Dashboard View
		public function admin_dashboard()
	{
		$this->UserLoginCheck();
			$data['TaskList_Data'] = $this->newTask_list();
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
			$data['TaskList_Data'] = $this->newTask_list();
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

		public function pswdChanged_admin()
	{
		$this->UserLoginCheck();
			$data['TaskList_Data'] = $this->newTask_list();
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
			$data['TaskList_Data'] = $this->newTask_list();
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

		public function DataOperator_dashboard()
	
	{
		$this->UserLoginCheck(); 
			$data['TaskList_Data'] = $this->newTask_list();
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
			$data['TaskList_Data'] = $this->newTask_list();
			$data['Emp_Name'] = $this->session->userdata('user_name');
			$data['title'] = "User Dashboard";
			$this->load->view('templates/head',$data);
			$this->load->view('templates/navbarDE',$data);
			$this->load->view('templates/sidebar_DataEntry');
			$this->load->view('content/Table_TasklistDE',$data);
			$this->load->view('templates/footer');
			$this->load->view('templates/tail');
		
		
	}
		public function StatusChange_Taken()
	{
		$this->UserLoginCheck();
			$data['TaskList_Data'] = $this->newTask_list();
			$data['Emp_Name'] = $this->session->userdata('user_name');
			$data['title'] = "User Dashboard";
			$this->load->view('templates/head',$data);
			$this->load->view('templates/navbarDE',$data);
			$this->load->view('templates/sidebar_DataEntry');
			$this->load->view('templates/StatusChange_Success');
			$this->load->view('content/Table_TasklistDE',$data);
			$this->load->view('templates/footer');
			$this->load->view('templates/tail');
		
		
	}
		public function StatusChange_Completed()
	{
		$this->UserLoginCheck();
	 		$data['TaskList_Data'] = $this->DOcurrentTask_list();
	 		$data['Emp_Name'] = $this->session->userdata('user_name');
			$data['title'] = "User Dashboard";
			$data['tableName'] = "Current Task List";
			$this->load->view('templates/head',$data);
			$this->load->view('templates/navbarDE',$data);
			$this->load->view('templates/sidebar_DataEntry');
			$this->load->view('templates/StatusChange_Success');
			$this->load->view('content/Table_TaskListTaken',$data);
			$this->load->view('templates/footer');
			$this->load->view('templates/tail');
	}
		
	// Form View
	
	 	public function new_task()
	 {
	 	$this->UserLoginCheck();
	 		$data['Emp_Name'] = $this->session->userdata('user_name');
			$data['title'] = "Admin Dashboard";
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
	    
	 	public function newTaskList()
	 {
	 	$this->UserLoginCheck();
	 		$data['TaskList_Data'] = $this->newTask_list();
	 		$data['Emp_Name'] = $this->session->userdata('user_name');
			$data['title'] = "Admin Dashboard";
			$data['tableName'] = "New Task List";
			$this->load->view('templates/head',$data);
			$this->load->view('templates/navbar',$data);
			$this->load->view('templates/sidebar_Admin');
			$this->load->view('content/Table_TaskList',$data);
			$this->load->view('templates/footer');
			$this->load->view('templates/tail');
	 }
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
			$this->load->view('content/Table_TaskListCurrent',$data);
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
			$this->load->view('content/Table_TaskListCompleted',$data);
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
	 	 public function DailyReport()
	 {
	 	$this->UserLoginCheck();
	 		$data['Emp_Name'] = $this->session->userdata('user_name');
			$data['title'] = "User Dashboard";
			$this->load->view('templates/head',$data);
			$this->load->view('templates/navbarDE',$data);
			$this->load->view('templates/sidebar_DataEntry');
			$this->load->view('content/DataEntry_DailyReport');
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
		 public function DO_NewTaskList()
	{
		$this->UserLoginCheck();
			$data['TaskList_Data'] = $this->newTask_list();
			$data['Emp_Name'] = $this->session->userdata('user_name');
			$data['title'] = "User Dashboard";
			$this->load->view('templates/head',$data);
			$this->load->view('templates/navbarDE',$data);
			$this->load->view('templates/sidebar_DataEntry');
			$this->load->view('content/Table_TasklistDE',$data);
			$this->load->view('templates/footer');
			$this->load->view('templates/tail');


	}
		 public function DO_CurrentTaskList()
	{
		$this->UserLoginCheck();
			$data['Emp_Name'] = $this->session->userdata('user_name');
			$data['TaskList_Data'] = $this->DOcurrentTask_list();
			$data['title'] = "User Dashboard";
			$data['tableName'] = "Current Task List";
			$this->load->view('templates/head',$data);
			$this->load->view('templates/navbarDE',$data);
			$this->load->view('templates/sidebar_DataEntry');
			$this->load->view('content/Table_TasklistTaken',$data);
			$this->load->view('templates/footer');
			$this->load->view('templates/tail');

	 } 
		 public function DO_CompletedTaskList()
	{
		$this->UserLoginCheck();
			$data['Emp_Name'] = $this->session->userdata('user_name');
			$data['TaskList_Data'] = $this->DOcompletedTask_list();
			$data['title'] = "User Dashboard";
			$data['tableName'] = "Completed Task List";
			$this->load->view('templates/head',$data);
			$this->load->view('templates/navbarDE',$data);
			$this->load->view('templates/sidebar_DataEntry');
			$this->load->view('content/Table_TasklistCompleted',$data);
			$this->load->view('templates/footer');
			$this->load->view('templates/tail');

	 } 
	/* Private functions to fetch data from DB */
		private function newTask_list()
		{
			
			$this->load->model('report_model');
			$result = $this->report_model->Task_list(); 
			return $result;
		}
		private function currentTask_list()
		{
			
			$this->load->model('report_model');
			$result = $this->report_model->TakenTask_list(); 
			return $result;
		}
		private function completedTask_list()
		{
			
			$this->load->model('report_model');
			$result = $this->report_model->CompletedTask_list(); 
			return $result;
		}
		private function DOcurrentTask_list()
		{
			
			$this->load->model('report_model');
			$result = $this->report_model->TakenTask_listPerUser(); 
			return $result;
		}
		private function DOcompletedTask_list()
		{
			
			$this->load->model('report_model');
			$result = $this->report_model->CompletedTask_listPerUser(); 
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
}
?>