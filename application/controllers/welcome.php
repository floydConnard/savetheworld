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
		/*
		 * DEBUG MOD
		 *
		 * $this->output->enable_profiler(TRUE);
		 * 
		 * I. HTML CONTACT FORM
		 * II. 
		 * 
		 * */
		
		// 
		$this->load->helper(array('form', 'url', 'html'));
		$this->load->library('javascript');
		
		$form_target = 'form/validate_form_contact';
		$form_attributes = array('id'=>'contact_form');
		
		$form_output = form_open($form_target, $form_attributes);
		//Début formulaire de contact
		
		
		// PREMIER FIELDSET
		$fieldset_coord_attributes = array('id'=>'form_fieldset_coord');
		
		$form_output .= form_fieldset('Vos Coordonnées', $fieldset_coord_attributes);
		
			// NOM --------------->
			$form_name_attributes = array(
			'name'=>'nom',
			'id'=>'name-input',
			'type'=>'text',
			'placehoder'=>'Votre nom (requis)',
			'pattern'=>'[a-zA-Z]+',
			'required'=>'1'
			);
			
			$form_output .= form_label('Votre nom',$form_name_attributes['id']);
			$form_output .= form_input($form_name_attributes);
			
			// EMAIL --------------->
			$form_mail_attributes = array(
			'name'=>'email',
			'id'=>'email-input',
			'type'=>'email',
			'placehoder'=>'votre-adresse@exemple.com',
			'required'=>'1'
			);
			
			$form_output .= form_label('Votre email',$form_mail_attributes['id']);
			$form_output .= form_input($form_mail_attributes);
			
			// TELEPHONE --------------->
			$form_tel_attributes = array(
			'name'=>'tel',
			'id'=>'tel-input',
			'type'=>'tel',
			'placehoder'=>'Votre téléphone'
			);
			
			$form_output .= form_label('Un téléphone ?',$form_tel_attributes['id']);
			$form_output .= form_input($form_tel_attributes);
			
			// SITE WEB --------------->
			$form_site_attributes = array(
			'name'=>'site',
			'id'=>'site-input',
			'type'=>'url',
			'placehoder'=>'www.exemple.com'
			);
			
			$form_output .= form_label('Vous avez un site web ?',$form_site_attributes['id']);
			$form_output .= form_input($form_site_attributes);
		
		// FIN PREMIER FIELDSET
		$form_output .= form_fieldset_close();
		
		
		// DEUXIEME FIELDSET
		$fieldset_msg_attributes = array('id'=>'form_fieldset_msg');
		
		$form_output .= form_fieldset('Votre Message', $fieldset_msg_attributes);
		
			// OBJET --------------->
			$form_object_attributes = array(
			'name'=>'object',
			'id'=>'object-input',
			'type'=>'text',
			'placehoder'=>'Nature du message',
			);
		
			$form_output .= form_label('Objet',$form_object_attributes['id']);
			$form_output .= form_input($form_object_attributes);
			
		
			// MESSAGE --------------->
			$form_msg_attributes = array(
			'name'=>'msg',
			'id'=>'msg-input',
			'placeholder'=>'Bonjour, ...',
			'required'=>'1'
			);
			
			$form_output .= form_label('Votre Message',$form_msg_attributes['id']);
			$form_output .= form_textarea($form_msg_attributes);
			
			// CHECK COPY --------------->
			$form_copy_attributes = array(
			'name'=>'copy',
			'id'=>'copy-input',
			);
			
			$form_output .= form_checkbox($form_copy_attributes);
			$form_output .= form_label('Je souhaite recevoir une copie de ce mail',$form_copy_attributes['id']);
					
						
		// FIN DU DEUXIEME FIELDSET
		$form_output .= form_fieldset_close();
		
		// SUBMIT & RESET
		$form_output .= form_submit('submit', 'Envoyer');
		$form_output .= form_reset('reset', 'Vider le formulaire');
		
		//Fin du formulaire de contact
		$form_output .= form_close();
		
		
		
		$data['form_output'] = $form_output;
		
		$this->load->view('home', $data);
	}
	
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */