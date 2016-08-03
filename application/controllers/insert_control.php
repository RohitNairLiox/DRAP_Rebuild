 <?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Insert_control extends CI_Controller {
	
	public function NewTask(){
		$this->load->helper(array('form', 'url'));
		 
		$data['Client_name'] = $this->input->post('Client_Name');
		$data['Client_ID'] = $this->input->post('Client_ID');
		$data['Task_description'] = $this->input->post('Task_desc');
		$data['Specific_taskDetail'] = $this->input->post('specificTask_desc');
		$data['Start_date'] = $this->input->post('startDate');
		$data['Estimated_EndDate'] = $this->input->post('endDate');
		$data['Task_type'] = $this->input->post('Task_type');
		$data['Task_Severity'] = $this->input->post('Task_severity');
		$data['Extra_TaskDescription'] = $this->input->post('Extra_desc');
		$data['Status'] = "Not Taken";
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
				redirect('ClientForm_submission'); 
	}
	public function DeleteEmployee(){
		$data['Emp_ID'] = $this->input->post('Emp_ID');
		$this->load->model('insert_model');
		$this->insert_model->Delete_Employee($data);
			redirect('UserDeleted'); 

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
				redirect('UserAdded'); 
	}
	public function NewDailyReport(){
		$this->load->helper(array('form', 'url'));
		 
		$data['Client_name'] = $this->input->post('Client_Name');
		$data['Report_Content'] = $this->input->post('Reporting');
		$data['Status'] = $this->input->post('TaskStatus');
		
		$this->load->model('insert_model');
		$this->insert_model->Insert_DailyReport($data);
				redirect('DailyRepForm_submission'); 
	}	
	
	public function StatusChange_Taken(){

		$data['Status'] = $this->input->post('NewStatus');
		$data['Uid'] = $this->input->post('UID');
		$this->load->model('insert_model');
		$this->insert_model->StatusChange($data);
				redirect('ChangeStatus_Taken'); 
	}
	public function StatusChange_Comp(){

		$data['Status'] = $this->input->post('NewStatus');
		$data['Uid'] = $this->input->post('UID');
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
}
?>