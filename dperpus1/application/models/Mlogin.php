 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mlogin extends CI_Model {

	 
		public $tabel = 't_user';

		public function getDefaultValues()
		{
			return [
						'username' => '',
						'password' => ''
				   ];
		}

		public function getValidationRules()
		{
			return [
						[
							'field' => 'username',
							'label' => 'Username',
							'rules' => 'required'
						],

						[
							'field' => 'password',
							'label' => 'Password',
							'rules' => 'required'
						],
				   ];
		}

		public function validate()
		{
			$this->load->library('form_validation');
			$rules = $this->getValidationRules();
			$this->form_validation->set_rules($rules);
			$this->form_validation->set_error_delimiters(' <div class="alert alert-warning alert-dismissable">
														 <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>',
														  '</div>');
			
			return $this->form_validation->run();
		}

		public function run($input)
		{
			$input->password = password_verify($input->password);

			$user = $this->db->where('username', $input->username)
							 ->where('password', $input->password)
							 ->get($this->tabel)
							 ->row();



			if (count($user)) {
				$sess_data = [
					'login' => true,
					'username' => $user->username
				];
			$this->session->set_userdata($sess_data);
			echo "login berhasil";
			return true;
			}
			echo "login gagal";
			return false;
		}

		
	
}