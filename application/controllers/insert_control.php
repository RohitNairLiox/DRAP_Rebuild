 <?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Insert_control extends CI_Controller {
	
	public function NewTask(){
		$this->load->helper(array('form', 'url'));
		 
		$ClientName_Id = $this->input->post('Client_Name');
		$name_Id = explode("-",$ClientName_Id);
		$data['Client_name'] = $name_Id[0];
		$data['Client_ID'] = $name_Id[1];
		$data['Task_description'] = $this->input->post('Task_desc');
		$data['Specific_taskDetail'] = $this->input->post('specificTask_desc');
		$data['Start_date'] = $this->input->post('startDate');
		$data['Estimated_EndDate'] = $this->input->post('endDate');
		$data['Task_type'] = $this->input->post('Task_type');
		$data['Task_Severity'] = $this->input->post('Task_severity');
		$data['Extra_TaskDescription'] = $this->input->post('Extra_desc');
		$data['Status'] = "Current";
		$data['Time'] = date("d/m/Y h:i a");

		$this->load->model('insert_model');
		$this->insert_model->Insert_Task($data);
				redirect('TaskForm_submission'); 
	}

	public function NewClient(){
		$this->load->helper(array('form', 'url'));
		 
		$data['Client_ID'] = $this->input->post('Client_ID');
		$data['Client_name'] = $this->input->post('Client_Name');
		$data['Address'] = $this->input->post('Address');	
		$data['Client_type'] = $this->input->post('Task_severity');
		$data['Referred_by'] = $this->input->post('ReferredBy');
		$data['ResContact'] = $this->input->post('ResContactNo');
		$data['OffcContact'] = $this->input->post('OffcContactNo');
		$data['MobContact'] = $this->input->post('MobContactNo');
		$data['AltContact'] = $this->input->post('AltContactNo');
		$data['Email'] = $this->input->post('EmailId');
		$data['PAN_No'] = $this->input->post('PANNo');
		$data['ST_No'] = $this->input->post('STNo');
		$data['VAT_No'] = $this->input->post('VATNo');
		$data['CST_No'] = $this->input->post('CSTNo');
		$data['PTRC_No'] = $this->input->post('PTRCNo');
		$data['PTEC_No'] = $this->input->post('PTECNo');
		$data['TAN_No'] = $this->input->post('TANNo');
						
		$this->load->model('insert_model');
		$this->insert_model->Insert_Client($data);
		$ErrorMsg = $this->session->userdata('ErrorSet');
		$ErrorMsg = (string) $ErrorMsg; 

			if(empty($ErrorMsg)){
				redirect('ClientForm_submission');
			}
			else{
		 		$data['Emp_Name'] = $this->session->userdata('user_name');
				$data['title'] = "Admin Dashboard";
				$this->load->view('templates/head',$data);
				$this->load->view('templates/navbar',$data);
				$this->load->view('templates/sidebar_Admin');
				$this->load->view('templates/clienterror_DataEntry');
				$this->load->view('content/DataEntry_ClientListError',$data);
				$this->load->view('templates/footer');
				$this->load->view('templates/tail');
			}
			$this->session->unset_userdata('ErrorSet');


	}
	public function DeleteEmployee(){
		$data['Emp_ID'] = $this->input->post('Emp_ID');
		$this->load->model('insert_model');
		$this->insert_model->Delete_Employee($data);
			redirect('UserDeleted'); 

	}
	public function UpdateEmployee(){
		$data['Emp_ID'] = $this->input->post('Emp_ID_Update');
		$data['Emp_Name'] = $this->input->post('Emp_Name');
		$data['Emp_Username'] = $this->input->post('Emp_Username');
		$data['Emp_Password'] = $this->input->post('Emp_Password');
		$data['Emp_Role'] = $this->input->post('Emp_Role');
		$this->load->model('insert_model');
		$this->insert_model->Update_Employee($data);
			redirect('UserUpdated'); 

	}
	// THE CODE THAT I'M WORKING ON  THE CODE THAT I'M WORKING ON  THE CODE THAT I'M WORKING ON  THE CODE THAT I'M WORKING ON 
	public function EditEmployee(){
		$data['Emp_ID'] = $this->input->post('Emp_IDEdit');
			$this->load->model('report_model');
		$datalist['Emp_Data'] = $this->report_model->Fetch_employeeData($data);
			$data['Emp_Name'] = $this->session->userdata('user_name');
		 	$data['title'] = "Admin Dashboard";
				$this->load->view('templates/head',$data);
				$this->load->view('templates/navbar',$data);
				$this->load->view('templates/sidebar_Admin');
				$this->load->view('content/DataEntry_EditEmployee',$datalist);
				$this->load->view('templates/footer');
				$this->load->view('templates/tail');

	}
	public function NewEmployee(){
		$this->load->helper(array('form', 'url'));
		$EmpUserName = $this->input->post('Emp_Username');
		$Emp_UserName = $EmpUserName."@drap.app";
		$data['Name'] = $this->input->post('Emp_Name');
		$data['Username'] = $Emp_UserName;
		$data['Password'] = $this->input->post('Emp_Password');	
		$data['Role'] = $this->input->post('Emp_Role');
		
		$this->load->model('insert_model');
		$this->insert_model->Insert_Employee($data);
			$ErrorMsg = $this->session->userdata('ErrorSet');
			$ErrorMsg = (string) $ErrorMsg; 
				if(empty($ErrorMsg)){
					redirect('UserAdded'); 
				}
				else{
					redirect('UserAdded_Error');
				}
				$this->session->unset_userdata('ErrorSet');
	}
	public function NewDailyReport(){
		$this->load->helper(array('form', 'url'));
		 
		$Client_NameId = $this->input->post('Client_NameId');
		$name_Id = explode("-",$Client_NameId);
		$data['Client_id'] = $name_Id[1];
		$data['Client_name'] = $name_Id[0];
		$data['Report_Content'] = $this->input->post('Reporting');
		$data['Status'] = $this->input->post('TaskStatus');
		
		$this->load->model('insert_model');
		$this->insert_model->Insert_DailyReport($data);
				redirect('DailyRepForm_submission'); 
	}	

	public function TaskCompleted(){

		$data['Status'] = "Completed";
		$data['Uid'] = $this->input->post('Task_Uid');
		$this->load->model('insert_model');
		$this->insert_model->StatusChange($data);
				redirect('ChangeStatus_Complete'); 
	}
	public function ChangePassword_Admin()
	{
		$data['Password'] = $this->input->post('password_verify');
		$this->load->model('insert_model');
		$this->insert_model->Change_Password($data);
				redirect('AdminPswdChanged'); 


	}
	public function ChangePassword_User()
	{
		$data['Password'] = $this->input->post('password_verify');
		$this->load->model('insert_model');
		$this->insert_model->Change_Password($data);
			redirect('UserPswdChanged'); 
	}
	public function Add_TaskReport()
	{
		
		$data['Task_Uid'] = $this->input->post('getTask_Uid');
		$data['Reported_by'] = $this->session->userdata('user_name');
		$data['report_content'] = $this->input->post('addContent');
		$this->load->model('insert_model');
		$this->insert_model->AddTaskReport($data);
		$this->session->set_flashdata('myTaskID', $data['Task_Uid']);
			 redirect('TaskReported');
	}

}
?>