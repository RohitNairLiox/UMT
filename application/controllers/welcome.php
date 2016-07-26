<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {


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
		
		$this->load->view('template/head');
		$this->load->view('template/navbar');
		$this->load->view('content/index_content');
		$this->load->view('template/sidebar');
		$this->load->view('template/footer');
		
		
	}
	
	public function login()
	{
		$this->load->view('template/head');
		$this->load->view('template/navbar');
		$this->load->view('content/login_content');
		$this->load->view('template/sidebar');
		$this->load->view('template/footer');
		
	}

            public function insert_to_db()
			{
				$this->load->helper(array('form', 'url'));

				$this->load->library('form_validation');
				
				$this->form_validation->set_rules('YourName', 'Your Name', 'required');
				$this->form_validation->set_rules('YourEmail', 'Your Email', 'valid_email');
				$this->form_validation->set_rules('Number1', 'Primary Number', 'required|numeric|exact_length[10]');
				$this->form_validation->set_rules('Number2', 'Secondary Number', 'numeric|exact_length[10]');
				$this->form_validation->set_rules('Time1', 'Preferred Hours : Start', 'required');
				$this->form_validation->set_rules('Time2', 'Preferred Hours : End', 'required');
				$this->form_validation->set_rules('Address', 'Address', 'required|max_length[250]');
				
				
				if ($this->form_validation->run() == FALSE)
				{
					
					$data['Error'] = 1; 
					
					
					
					
						
					$this->load->view('template/head');
					$this->load->view('template/navbar');
					$this->load->view('content/index_content',$data);
					$this->load->view('template/sidebar');
					$this->load->view('template/footer');
					 
				}
				else
				{
					$data['Name'] = $this->input->post('YourName');
					$data['Email'] = $this->input->post('YourEmail');	
					$data['Number1'] = $this->input->post('Number1');	
					$data['Number2'] = $this->input->post('Number2');		
					$data['Time1'] = $this->input->post('Time1');		
					$data['Time2'] = $this->input->post('Time2');		
					$data['Address'] = $this->input->post('Address');
							
							
					$this->load->model('database');
					$this->database->Insert_Data($data);
					
					$this->load->view('template/head');
					$this->load->view('template/navbar');
					$this->load->view('template/success');
					$this->load->view('template/sidebar');
					$this->load->view('template/footer');
				}
				
				/* Edited the above code in the function */
					
			
			/* redirect(base_url());//loading success view */
			}
			
		public function admin_login(){
			
			$this->load->view('template/head');
			$this->load->view('content/login_content');
			$this->load->view('template/footer');
			
		}
		public function login_process(){
			
		$username=$this->input->post('USRNAME');
		$password=$this->input->post('PSWD');
		if($username == 'sarathvalia@umt.org' && $password == 'Love2work'){
			$this->get_from_db();
		}
		else{
			
			$this->load->view('template/head');
			$this->load->view('content/login_content');
			$this->load->view('template/footer');
		}
	    }
		
			
		public function get_from_db(){
			
			$data['user_data'] = $this->get_user_data();
			$this->load->view('template/head');
			$this->load->view('template/navbar');
			$this->load->view('content/Order_content',$data);
			$this->load->view('template/sidebar');
			$this->load->view('template/footer');
			/* $data['Values'] = $this->database->Order_view(); 
			
			  
			$this->load->view('template/head');
			$this->load->view('template/navbar');
			$this->load->view('content/Order_content',$data);
			$this->load->view('template/sidebar');
			$this->load->view('template/footer');  */
			
		}
		private function get_user_data(){
			
			$this->load->model('database');
			$result = $this->database->Order_view(); 
			return $result;
		}
		public function delete_user_data(){
			$data['Data_ID'] = $this->input->post('DeleteBTN');
				$this->load->model('database');
				$this->database->Order_delete($data);

				$this->get_from_db();
		}
		
		
		
}
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */