<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
	

	
class Report_model extends CI_Model{ 
	
	   function __construct()
    {
        parent::__construct();
		$this->load->database();
    }
	
	
	/* Result Model Starts */

	public function Task_list()
		{

			$query = $this->db->query("SELECT * FROM new_task WHERE Status = 'Not Taken'");
			return $query->result();
		}
	public function Employee_list()
		{

			$query = $this->db->get('user_info');
			return $query->result();
		}
	public function TakenTask_list()
		{

			$query = $this->db->query("SELECT * FROM new_task WHERE Status = 'Taken'");
			return $query->result();
		}	
	public function CompletedTask_list()
		{

			$query = $this->db->query("SELECT * FROM new_task WHERE Status = 'Completed'");
			return $query->result();
		}
	public function Client_list()
		{

			$query = $this->db->get('client_info');
			return $query->result();
		}
	public function DailyReport_list()
		{

			$query = $this->db->get('daily_report');
			return $query->result();
		}
	public function DailyReport_listPerUser()
		{

			$User = $this->session->userdata('user_name');
			$query = $this->db->query("SELECT * FROM daily_report WHERE Reporting_person = '$User'");
			return $query->result();
		}
	public function TakenTask_listPerUser()
		{
			$User = $this->session->userdata('user_name');
			$query = $this->db->query("SELECT * FROM new_task WHERE (Status = 'Taken' AND Taken_by = '$User')");
			return $query->result();
		}
	public function CompletedTask_listPerUser()
		{
			$User = $this->session->userdata('user_name');	
			$query = $this->db->query("SELECT * FROM new_task WHERE (Status = 'Completed' AND Taken_by = '$User')");
			return $query->result();
		}
	public function NewTask_listPerUser()
		{

			$query = $this->db->query("SELECT * FROM new_task WHERE Status = 'Not Taken'");
			return $query->result();
		}


	/* Result Model ENDS */
}	
?>