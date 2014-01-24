<?

$module_name = 'configuration';
$config['modules'][$module_name] = array(
										 	'controller_name' => 'admin/configuration',
											'main_model' => 'admin/configuration_model',
										 	'module_label' => 'Configuracion',
											'module_unit' => 'Item',
											'restrictions' => 'own_content'
										 );
										 
$config['modules'][$module_name]['fields'] = array(	
										'username' => array('label' => 'Distribuidor',
															'type' => 'text',
															'validation' => '',
															'disabled' => true,
															'visibility' => 'details|list|edit'
															),

										'address' => array(	'label' => 'Direcci&oacute;n',
															'type' => 'text',
															'validation' => '',
															'visibility' => 'save|details'
															),

										'telephone' => array('label' => 'Tel&eacute;fono',
																'type' => 'text',
																'validation' => '',
																'visibility' => 'save|details|list'
																),

										'text_footer' => array('label' => 'Texto footer',
																'type' => 'text',
																'validation' => '',
																'visibility' => 'save|details'
																),

										'url_facebook' => array('label' => 'Facebook URL',
																'type' => 'text',
																'validation' => '',
																'visibility' => 'save|details|list'
																),

										'url_twitter' => array('label' => 'Twitter URL',
																'type' => 'text',
																'validation' => '',
																'visibility' => 'save|details|list'
																),
										
										'url_googleplus' => array('label' => 'Google Plus URL',
																'type' => 'text',
																'validation' => '',
																'visibility' => 'save|details'
																),
										
										'url_youtube' => array('label' => 'Youtube URL',
																'type' => 'text',
																'validation' => '',
																'visibility' => 'save|details'
																),

										'email' => array(		'label' => 'Email',
																'type' => 'text',
																'validation' => 'required',
																'visibility' => 'save|details|list'
																),
																
										'form_emails' => array(	'label' => 'Emails recibo de formulario',
																'type' => 'text',
																'validation' => '',
																'visibility' => 'save|details|list'
																),
																);


$config['modules'][$module_name]['top_menu_actions'] = array( 	'configuration_list' => array('url' => '#configuration/show_list', 'class_name' => 'configuration', 'method' => 'show_list', 'icon' => "ui-icon-clipboard", 'label' => "Listado de Configuraciones"),
												);


$config['modules'][$module_name]['datatable_actions'] = array( 	'details' => array( 'label' => 'Detalle',
																					'url' => '#'.$module_name.'/details/'),
																'edit' => array( 'label' => 'Editar',
																					'url' => '#'.$module_name.'/edit/')
																
														);



$config['modules']['configuration']['main_model_tabs'] = array( 	'details' => array( 'label' => 'Detalle',

														  			  	 				'url' => '#configuration/details/'),

																	'details_distr' => array( 'label' => 'Detalle distribuidor',

														  			  	 				'url' => '#user/details/'),

																	'save' => array( 	'label' => 'Editar',

																						'url' => '#configuration/edit/',

																						'tab' => 'details'),

																);?>