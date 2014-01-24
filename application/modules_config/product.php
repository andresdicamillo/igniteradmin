<?

$module_name = 'product';

$config['modules'][$module_name] = array(
										 	'controller_name' => 'admin/product',
											'main_model' => 'admin/product_model',
										 	'module_label' => 'Vehículos',
											'module_unit' => 'Vehículo',
										 );

$config['modules'][$module_name]['fields'] = array(	
										
										'product_type' => array(	'label' => 'Categor&iacute;a',
																'type' => 'radio',
																'options' => array(	1 => array("value" => "autos","label" => "Autos"),
																					2 => array("value" => "camionetas","label" => "Camionetas SUV"),
																					3 => array("value" => "utilitarios","label" => "Utilitarios")
																					),
																'validation' => 'required',
																'visibility' => 'save|details|list'

																),
										
										'name' => array(	'label' => 'Nombre',
															'type' => 'text',
															'class' => 'title',
															'validation' => 'required',
															'visibility' => 'save|details|list'
														),
										'brief'=> array(	'label' => 'Introducci&oacute;n',
															'type' => 'textarea',
															'class' => 'summernote',
															'validation' => 'required',
															'visibility' => 'save|details|list'
														),
										'performance'=> array(	'label' => 'Performance',
																'type' => 'textarea',
																'class' => 'summernote',
															'validation' => 'required',
															'visibility' => 'save|details'
														),
										'safety'=> array(	'label' => 'Seguridad',
																'type' => 'textarea',
																'class' => 'summernote',
															'validation' => 'required',
															'visibility' => 'save|details'
														),
										'main_image_1' => array(	'label' => 'Foto listado off',
																	'type' => 'image',
																	'tag' => 'main_image_1',
																	'validation' => '',
																	'visibility' => 'details|save',
																	),
										'main_image_2' => array(	'label' => 'Foto listado on',
																	'type' => 'image',
																	'tag' => 'main_image_2',
																	'validation' => '',
																	'visibility' => 'details|save',
																	),
										'main_image_3' => array(	'label' => 'Foto en desplegable',
																	'type' => 'image',
																	'tag' => 'main_image_3',
																	'validation' => '',
																	'visibility' => 'details|save',
																	),
										'main_image_4' => array(	'label' => 'Foto t&iacute;tulo del auto',
																	'type' => 'image',
																	'tag' => 'main_image_4',
																	'validation' => '',
																	'visibility' => 'details|save',
																	),
										'main_image_5' => array(	'label' => 'Foto t&iacute;tulo en intro',
																	'type' => 'image',
																	'tag' => 'main_image_5',
																	'validation' => '',
																	'visibility' => 'details|save',
																	),
										'main_image_6' => array(	'label' => 'Foto auto en intro',
																	'type' => 'image',
																	'tag' => 'main_image_6',
																	'validation' => '',
																	'visibility' => 'details|save',
																	),
										'gallery_interior' => array(	'label' => 'Galería Interior',
																	'validation' => '',
																	'type' => 'image',
																	'visibility' => 'media_gallery',
																	),
										'gallery_exterior' => array(	'label' => 'Galería Exterior',
																	'validation' => '',
																	'type' => 'image',
																	'visibility' => 'media_gallery',
																	),
										'gallery_performance' => array(	'label' => 'Galería Performance y Seguridad',
																	'validation' => '',
																	'type' => 'image',
																	'descriptions' => true,
																	'visibility' => 'media_gallery',
																	),
										'gallery_colors' => array(	'label' => 'Colores de autos',
																	'validation' => '',
																	'type' => 'image',
																	'descriptions' => true,
																	'visibility' => 'media_gallery',
																	),
										'priority'	=> array(	'label' => 'Prioridad',
																'type' => 'text',
																'visibility' => 'save|details|list'
																),
										'active'	=> array(	'label' => 'Activo',
																'type' => 'checkbox',
																'value' => 1,
																'visibility' => 'save|details|list'
																),
										);

$config['modules'][$module_name]['top_menu_actions'] = array( 	'products_list' => array('method' => 'show_list', 'url' => '#'.$module_name.'/show_list', 'class_name' => $config['modules'][$module_name], 'icon' => "ui-icon-clipboard", 'label' => "Listado de ".$config['modules'][$module_name]['module_label']),
																'add_product' => array('method' => 'create', 'url' => '#'.$module_name.'/create', 'class_name' => $config['modules'][$module_name], 'icon' => "ui-icon-plusthick", 'label' => "Agregar ".$config['modules'][$module_name]['module_unit']));

$config['modules'][$module_name]['main_model_tabs'] = array( 	'details' => array( 'label' => 'Detalle',
													  			  	 				'url' => '#'.$module_name.'/details/'),
																'media_gallery' => array( 'label' => 'Galerías',
													  			  	 				'url' => '#'.$module_name.'/media_gallery/image/'),
																'edit' => array( 	'label' => 'Editar',
																					'url' => '#'.$module_name.'/edit/',)
															);

$config['modules'][$module_name]['datatable_actions'] = array( 	'details' => array( 'label' => 'Detalle',
													  			  	 				'url' => '#'.$module_name.'/details/'),
																'save' => array( 	'label' => 'Editar',
																					'url' => '#'.$module_name.'/edit/'),
																'delete' => array( 	'label' => 'Borrar',
																					'dialog' => 'Borrar jugador?',
																					'url' => '#'.$module_name.'/delete/'),
											);
?>