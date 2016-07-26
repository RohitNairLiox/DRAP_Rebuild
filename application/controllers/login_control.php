	<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_control extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$UserSession = $this->session->userdata('user_data');
			if ($UserSession)
			{
				$this->session->sess_destroy();
				redirect(base_url());
			}
			else
			{
		$this->form_validation->set_rules('username','Username','required|valid_email|xss_clean');
		$this->form_validation->set_rules('password','Password','required');
		$data['EmpName'] = $this->input->post('username');
		$data['EmpPswd'] = $this->input->post('password');
		if ($this->form_validation->run() === false)
		{
			$data['title'] = "Login Page";
			$this->load->view('templates/head',$data);
			$this->load->view('content/Login_Banner');
			$this->load->view('content/login_view',$data);
			$this->load->view('templates/tail');
		}
		else
		{
			
			$name = $this->input->post('username');
			$entered_key = $this->input->post('password');
			$query = $this->db->get_where('user_info',array('Username'=> $name));
			$row = $query->row_array();
			if(empty($row))
			{
				$data['title'] = "Login Page";
				$this->load->view('templates/head',$data);
				$this->load->view('content/Login_Banner');
				$this->load->view('templates/Error_Username');
				$this->load->view('content/login_view',$data);
				$this->load->view('templates/tail');
			}
			else
			{
	/* 			$this->load->library('session'); */
				$name = $row['Username'];
				$key = $row['Password'];
				$role = $row['Role'];
				$user = $row['Name'];
				
					if ($key === $entered_key)
					{
					$User_array = array($name,$key);
					$this->session->set_userdata('user_data',$User_array);
					$this->session->set_userdata('user_name',$user);
					$this->session->set_userdata('user_role',$role);
					$this->session->set_userdata('userName', $name);
						if ($role == "Admin")
						{
							
							redirect(base_url().Admin_Dashboard);
							/* echo "Admin"; */
						}
						elseif ($role == "DataOperator")
						{
							redirect(base_url().User_Dashboard);
						}
						else
						{
							echo "User Role not set; please meet the admin!";
						}
						/* redirect(base_url().dashboard); */
					}
					else
					{
						$data['title'] = "Login Page";
						$this->load->view('templates/head',$data);
						$this->load->view('content/Login_Banner');
						$this->load->view('templates/Error_Password');
						$this->load->view('content/login_view',$data);
						$this->load->view('templates/tail');
					}
			}	
		}
		}
	}
		public function logout(){
			$this->session->sess_destroy();
			redirect(base_url());
		}
}
?>