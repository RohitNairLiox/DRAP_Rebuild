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
	public function Insert_DailyReport($data){
	 
	 $ClientName = $data['Client_name'];
	 $UserName = $this->session->userdata('user_name');
	 $ReportContent = $data['Report_Content'];
	 $Status = $data['Status'];

	 	     $query = $this->db->simple_query("INSERT INTO daily_report (Client_name, Reporting_person, Report_Content, Status, Reporting_Date) VALUES ( ".$this->db->escape($ClientName).", ".$this->db->escape($UserName).", ".$this->db->escape($ReportContent).", ".$this->db->escape($Status).", CURDATE())");
	}
	public function Insert_Client($data){
	 
	 $this->db->insert('client_info',$data);
	
	}
	public function Insert_Employee($data){
	 
	 $this->db->insert('user_info',$data);
	
	}
	public function Insert_adultTeachers($data){
	 
	 $this->db->insert('adult_teachers',$data);
	
	}
	public function Insert_adultStaffs($data){
	 
	 $this->db->insert('adult_staffs',$data);
	
	}
	public function Delete_Employee($data){
		$id = $data['Emp_ID'];
		$this->db->delete('user_info', array('Uid' => $id));

	}
	public function Change_password($data)
	{
		$UserName = $this->session->userdata('userName');
		$UserPassword = $data['Password'];
			$query = $this->db->simple_query("UPDATE user_info SET Password='$UserPassword' WHERE Username='$UserName'");

	}
	public function StatusChange($data)
	{
		$UserName = $this->session->userdata('user_name');
		$NewStatus = $data['Status'];
		$UID = $data['Uid'];
		$query = $this->db->simple_query("UPDATE new_task SET Status=".$this->db->escape($NewStatus)." WHERE Uid=".$this->db->escape($UID)."");
		$query = $this->db->simple_query("UPDATE new_task SET Taken_by=".$this->db->escape($UserName)." WHERE Uid=".$this->db->escape($UID)."");
		$query = $this->db->simple_query("UPDATE new_task SET Time=NOW() WHERE Uid=".$this->db->escape($UID)."");
	}
	/* Data Insert Model ENDS */
	
}
?>