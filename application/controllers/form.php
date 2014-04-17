<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Form extends CI_Controller {

	public function validate_form_contact() {
		
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('nom', 'Nom', 'required|xss_clean');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|xss_clean');
		$this->form_validation->set_rules('msg', 'Message', 'required|xss_clean');
		
		if($this->form_validation->run()) {
			
			$this->load->library('email');
			
			$nom = $this->input->post('nom');
			$email = $this->input->post('email');
			$tel = $this->input->post('tel');
			$site = $this->input->post('site');
			$objet = $this->input->post('objet');
			$msg = $this->input->post('msg');
			
			$copie = 0;
			
			if($this->input->post('copie')) { $copie = 1; }
			
			$this->email->from($email, $nom);
			$this->email->to('nils.martin.88@gmail.com');
			if($copie == 1) {
				$this->email->cc($email);
			}

			if($this->input->post('objet')){
				$this->email->subject($this->input->post('objet'), TRUE);
			}
			else {
				$this->email->subject('Message du site internet de Nils Martin');
			}
			
			$this->email->message(
			'<p>de : '.$this->input->post('nom')
			.' - site - '.$site
			.' - tel - '.$tel
			.'</p>'
			.$this->input->post('msg'), TRUE);

			$this->email->send();
			
			$this->load->view('success_msg');
		}
	}
	
}