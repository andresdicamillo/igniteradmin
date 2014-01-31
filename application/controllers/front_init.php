<?
class Front_init extends CI_Controller
{
	protected $facebook_site = false;
	protected $working = true;
	
	public function __construct()
	{
		parent::__construct();
		
		$this->session->set_userdata(array('facebook_uid' => '666', 'is_logged_in' => TRUE));	

	}	

	public function clear_session()
	{
		// $this->session->sess_destroy();	
	}

	/*
	Splits the fields array into page_fields[$visible_page][field_id][field_attributes]
	*/
	protected function split_fields()
	{
		if(!is_array($this->data['fields'])) return 0;
		
		$file_types = array('image','video','archive');
		$this->data['page_fields'] = array();
		foreach($this->data['fields'] as $field_id => $attrs)
		{
			if($attrs['visibility'])
			{
				$visibilities = explode("|", $attrs['visibility']);
				foreach($visibilities as $visibility)
				{
					$this->data['page_fields'][$visibility][$field_id] = $attrs;	
				}
			}
			// insert file fields;
			if(in_array($attrs['type'],$file_types))
			{
				$this->file_fields[$field_id] = $attrs;
			}
		}
	}
	
	
	public function validate_contact_form($page)
	{
		$output['page'] = $page;
		$this->form_validation->set_message('matches', '%s y %s deben ser iguales');
		$this->form_validation->set_message('required', 'Falta completar este campo');
		$this->form_validation->set_message('valid_email', 'Este email no es v&aacute;lido');
		$this->form_validation->set_message('alpha_numeric_space', 'Este campo solo puede contener letras, n&uacute;meros y espacios');

		foreach($this->data['page_fields'][$page] as $field_id => $field)
		{
			$this->form_validation->set_rules($field_id, $field['label'], $field['validation']);
		}			

		if(!$this->form_validation->run())
		{
			$output['valid'] = 0;

			foreach($this->data['page_fields'][$page] as $field_id => $field)
			{
				$output['errors'][$field_id] = form_error($field_id);
			}
		}
		else
		{
			// $this->load_contact();
			$this->data['post'] = $this->input->post();
			$output = $this->validate_save_custom();
			
			if(!isset($output['valid']) || $output['valid'])
			{
				$this->load->model('admin/contact_model');
				$this->contact_model->set($this->data['post']);
				// $this->contact_model->update_only_setted();
				if($this->contact_model->save())
				{
					$this->load->library('email');
					$config['protocol'] = 'mail';
					$config['charset'] = 'utf-8';
					$config['mailtype'] = 'html';
		
					$this->email->initialize($config);

					$this->email->from('sitioweb@kia.com.ar', 'Sitio Web');
					$this->email->to('info@kia.com.ar'); 
		
					$body="Nombre y apellido:  ".$_POST['name']."<br>E-mail:  ".$_POST['email']."<br>Telefono:  ".$_POST['telephone']."<br>Veh&iacute;culo y Modelo:  ".$_POST['vim']."<br>Mensaje: ".$_POST['message'];
		
					$this->email->subject("Kia Autopremium - Mensaje de contacto de la pagina");
					$this->email->message($body);  
					$this->email->send();
					$output['valid'] = 1;
				}
				else
				{
					$output['valid'] = 0;
					$output['errors'] = $this->contact_model->get_error_message();	
				}
			}
		}
		echo json_encode($output);

	}
	
	protected function post_validate_save(){}
	
	protected function validate_save_custom()
	{
		$output['valid'] = 1;
		/*
		$sql = "SELECT contact_id FROM contacts WHERE fb_uid = '".$this->session->userdata('facebook_uid')."'";
		$row = $this->db->query($sql)->row();	
		if(!$row->contact_id)
		{
			$output['errors'] = 'Hubo un error! por favor seleccioná tu auto otra vez.';
			$output['valid'] = 0;;	
		}*/
		
		return $output;
	}
}

?>
