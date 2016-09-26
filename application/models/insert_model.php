<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
	

	
class Insert_model extends CI_Model{ 
	
	   function __construct()
    {
        parent::__construct();
		$this->load->database();
    }
	
	/* Data Insert Model Starts */
	public function Insert_Task($data){
	 
	 $this->db->insert('new_task',$data);
	
	}
	public function AddTaskReport($data){
	 
	 $Task_Uid = $data['Task_Uid'];
	 $Reported_by = $data['Reported_by'];
	 $report_content = $data['report_content'];
	 	$query = $this->db->simple_query("INSERT INTO task_report (Task_Uid, Reported_by, report_content, reportingTime) VALUES ( ".$this->db->escape($Task_Uid).", ".$this->db->escape($Reported_by).", ".$this->db->escape($report_content).", CURDATE())");
	 

	
	}
	public function Insert_DailyReport($data){
	 
	 $ClientID = $data['Client_id'];
	 $ClientName = $data['Client_name'];
	 $UserName = $this->session->userdata('user_name');
	 $ReportContent = $data['Report_Content'];
	 $Status = $data['Status'];

	 	     $query = $this->db->simple_query("INSERT INTO daily_report (Client_ID, Client_name, Reporting_person, Report_Content, Status, Reporting_Date) VALUES ( ".$this->db->escape($ClientID).",".$this->db->escape($ClientName).", ".$this->db->escape($UserName).", ".$this->db->escape($ReportContent).", ".$this->db->escape($Status).", CURDATE())");
	}
	public function Insert_Client($data){
	 
	 $Client_ID = $data['Client_ID'];
	 	$query = $this->db->query("SELECT Client_name FROM client_info WHERE Client_ID='$Client_ID'");
	 	$num_rows = $query->num_rows;
	 	if(empty($num_rows)){
	 		$this->db->insert('client_info',$data);
	 		$ErrorSet = null;
	 		$this->session->set_userdata('ErrorSet', $ErrorSet);

	 	}
	 	else{
	 		$ErrorSet = 1;
	 		$this->session->set_userdata('ErrorSet', $ErrorSet);
	 	}

	
	}
	public function Insert_Employee($data){
	 $Emp_UserName = $data['Username'];
	 	$query = $this->db->query("SELECT Uid FROM user_info WHERE Username='$Emp_UserName'");
	 	$num_rows = $query->num_rows;
	 		if(empty($num_rows)){
	 			$this->db->insert('user_info',$data);
	 			$ErrorSet = null;
	 			$this->session->set_userdata('ErrorSet', $ErrorSet);
	 		}
	 		else{
 				$ErrorSet = 1;
	 			$this->session->set_userdata('ErrorSet', $ErrorSet);
	 		}
	 
	
	}
	public function Delete_Employee($data){
		$id = $data['Emp_ID'];
		$this->db->delete('user_info', array('Uid' => $id));

	}
	public function Update_Employee($data){
		$id = $data['Emp_ID'];
		$Name = $data['Emp_Name'];
		$Username = $data['Emp_Username'];
		$UserPassword = $data['Emp_Password'];
		$UserRole = $data['Emp_Role'];
			$query = $this->db->simple_query("UPDATE user_info SET Name='$Name', Username='$Username', Password='$UserPassword', Role='$UserRole'  WHERE Uid='$id'");

	 		
	}

	public function Change_password($data)
	{
		$UserName = $this->session->userdata('userName');
		$UserPassword = $data['Password'];
			$query = $this->db->simple_query("UPDATE user_info SET Password='$UserPassword' WHERE Username='$UserName'");

	}
	public function StatusChange($data)
	{
		$NewStatus = $data['Status'];
		$UID = $data['Uid'];
		$query = $this->db->simple_query("UPDATE new_task SET Status=".$this->db->escape($NewStatus)." WHERE Uid=".$this->db->escape($UID)."");
	}
	/* Data Insert Model ENDS */
	
}
?>