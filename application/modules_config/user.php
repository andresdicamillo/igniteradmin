<?

$module_name = 'user';

$config['modules'][$module_name] = array(
										 	'controller_name' => 'admin/user',
											'main_model' => 'user_model',
										 	'module_label' => 'Distribuidores',
											'module_unit' => 'Distribuidor',
											'views_folder' => 'admin/auth',
										 );


$config['modules'][$module_name]['fields'] = array(	
									'username' => array('label' => 'Usuario',
														'type' => 'text',
														'validation' => 'required',
														'visibility' => 'save|details|list'
														),
									'email' => array(	'label' => 'Email',
														'type' => 'text',
														'validation' => 'required|valid_email',
														'visibility' => 'save|details|list'
														),
									'password' => array('label' => 'Contrase&ntilde;a',
														'type' => 'password',
														'validation' => 'required|matches[passconf]',
														'visibility' => 'create|edit_password'
														),
									'passconf' => array('label' => 'Repetir contrase&ntilde;a',
														'type' => 'password',
														'validation' => 'required',
														'visibility' => 'create|edit_password'
														),
									'fullname' => array(	'label' => 'Nombre completo',
															'type' => 'text',
															'visibility' => 'save|details|list'
															),
									'groups_names' => array(	'label' => 'Grupo',
															'type' => 'text',
															'visibility' => 'details|list'
															),
									
									'group_id' => array( 'label' => 'Grupo',
												'type' => 'radio',
												'validation' => 'required',
												'visibility' => 'save',
												'value' => 2,
												'options' => array(	1 => array("value" => "1","label" => "Administradores"),
																	2 => array("value" => "2","label" => "Proveedores"),
																	),
												),
									'country' => array( 'label' => 'Pa&iacute;s',
												'type' => 'select',
												'validation' => 'required',
												'visibility' => 'save|details|list',
												'options' => array(	1 => array("value" => "argentina","label" => "Argentina"),
																	),
												),
									'province_id' => array( 'label' => 'Provincia',
													'type' => 'select',
													'validation' => 'required',
													'visibility' => 'save',
													'source_table' => 'provinces',
													'source_index_id' => 'province_id',
													'source_fields' => array('name')
												),
									'province' => array( 'label' => 'Provincia',
													'type' => 'text',
													'validation' => 'required',
													'visibility' => 'details|list',
												),			
												
									
									'region' => array( 'label' => 'Region',
												'type' => 'select',
												'validation' => 'required',
												'visibility' => 'save|details|list',
												'options' => array(	1 => array("value" => "capital federal","label" => "Capital Federal"),
																	2 => array("value" => "buenos aires","label" => "Buenos Aires"),
																	3 => array("value" => "interior","label" => "Interior"),
																	),
												),			
												
									
									'active'	=> array(	'label' => 'Activo',
															'type' => 'checkbox',
															'value' => 1,
															'visibility' => 'save|details|list',
															));	



$config['modules'][$module_name]['top_menu_actions'] = array( 	'users_list' => array('method' => 'show_list', 'icon' => "ui-icon-clipboard", 'label' => "Listado de ".$config['modules'][$module_name]['module_label']),
							'add_user' => array('method' => 'create', 'icon' => "ui-icon-plusthick", 'label' => "Agregar ".$config['modules'][$module_name]['module_unit'])
						);

$config['modules'][$module_name]['main_model_tabs'] = array( 	'details' => array( 'label' => 'Detalle',
														'url' => '#'.$module_name.'/details/'),
									'edit' => array( 	'label' => 'Editar',
														'url' => '#'.$module_name.'/edit/'),
									'edit_conf' => array( 	'label' => 'Editar Configuracion',
														'url' => '#configuration/edit/'),
									
									'edit_password' => array( 	'label' => 'Modificar Contrase&ntilde;a',
														'url' => '#'.$module_name.'/edit_password/'));

$config['modules'][$module_name]['datatable_actions'] = array( 	'details' => array( 'label' => 'Detalle',
														'url' => '#'.$module_name.'/details/'),
									'edit' => array( 	'label' => 'Editar',
														'url' => '#'.$module_name.'/edit/'),
									'edit_conf' => array( 	'label' => 'Config',
														'url' => '#configuration/edit/'),					
									'delete' => array( 	'label' => 'Borrar',
														'dialog' => 'borrar el distribuidor?',
														'url' => '#user/delete/'),					
									
														);


?>