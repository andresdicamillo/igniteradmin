<?php
require_once(dirname(__FILE__)."/front_init.php");
class Home extends Front_init
{
/*	
	public function __construct()
	{
		
		parent::__construct();
		$this->data['fields'] = array(	'name' => array(	'label' => 'Nombre y apellido',
																'type' => 'text',
																'validation' => 'required',
																'visibility' => 'contact|contact_used|service'
															),
										'email' => array(	'label' => 'Email',
															'type' => 'text',
															'validation' => 'required|valid_email',
															'visibility' => 'contact|contact_used|service'
															),
										'telephone' => array(	'label' => 'Tel&eacute;fono',
															'type' => 'text',
															'validation' => '',
															'visibility' => 'contact|contact_used|service'
															),
										'vim' => array(	'label' => 'Veh&iacute;culo y Modelo',
															'type' => 'text',
															'validation' => '',
															'visibility' => 'contact|service'
															),
										'service' => array(	'label' => 'Solicitar',
															'type' => 'radio',
															'version' => 'bootstrap',
															'options' => array(
																				0 => array('value' => 'service','label' => 'Servicio'),
																				1 => array('value' => 'repuesto','label' => 'Repuesto')),
															'validation' => '',
															'visibility' => 'service'
															),
										'chasis' => array(	'label' => 'Nro de chasis',
															'type' => 'text',
															'validation' => '',
															'visibility' => 'service'
															),								
										'message' => array(	'label' => 'Mensaje',
															'type' => 'textarea',
															'validation' => 'required',
															'visibility' => 'contact|contact_used|service'
															),
										'telephone' => array(	'label' => 'Tel&eacute;fono',
																'type' => 'text',
																'validation' => 'required',
																'visibility' => 'contact'
															),
										
												
								);
		$this->split_fields();

		$this->data['page_title'] = "Kia Motors Argentina";
		$this->data['page_description'] = "Encontrá acá toda la información acerca de la gama de vehículos Kia, la red de Concesionarios y Postventa oficial en Argentina";
	}

	public function index()
	{
		$this->data['section'] = 'home';
		// $this->clear_session();
		$this->get_banners();
		
		$this->load->view("front/index.php", $this->data);
	}
*/	
	
}