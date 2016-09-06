<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
	

	
class Report_model extends CI_Model{ 
	
	   function __construct()
    {
        parent::__construct();
		$this->load->database();
    }
	
	
	/* Result Model Starts */

	public function CurrentTask_list()
		{

			$query = $this->db->query("SELECT * FROM new_task WHERE Status = 'Current'");
			return $query->result();
		}
	public function CompletedTask_list()
		{

			$query = $this->db->query("SELECT * FROM new_task WHERE Status = 'Completed'");
			return $query->result();
		}
	public function ClientName_list()
		{

			$query = $this->db->query("SELECT Client_name, Client_ID FROM client_info");
			return $query->result();
		}
	public function Employee_list()
		{

			$query = $this->db->get('user_info');
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
	public function Fetch_TaskData($data)
		{
			$id = $data['Uid'];
				$query = $this->db->query("SELECT * FROM new_task WHERE Uid='$id'");
				return $query->result();
		}
	public function Fetch_previousReport($data)
		{
			$id = $data['Uid'];
				$query = $this->db->query("SELECT * FROM task_report WHERE Task_Uid='$id'");
				return $query->result();
		}


	/* Result Model ENDS */
}	
?>