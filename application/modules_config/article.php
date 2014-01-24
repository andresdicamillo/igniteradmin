<?

$module_name = 'article';

$config['modules'][$module_name] = array(
										 	'controller_name' => 'admin/article',
											'main_model' => 'admin/article_model',
										 	'module_label' => 'Art&iacute;culos',
											'module_unit' => 'Art&iacute;culo',
											'restrictions' => 'own_content',
										 );

$config['modules'][$module_name]['fields'] = array(	

										'creator_name' => array(	'label' => 'Distribuidor',
																'type' => 'text',
																'class' => '',
																'validation' => '',
																'disabled' => true,
																'visibility' => 'details|edit|list'
																	),
										'title' => array(	'label' => 'T&iacute;tulo',
															'type' => 'text',
															'class' => 'title',
															'validation' => 'required',
															'visibility' => 'save|details|list'
																),
										'brief' => array(		'label' => 'Resumen',
																'type' => 'textarea',
																'class' => 'summernote',
																'validation' => 'required',
																'visibility' => 'save|details'
																),						
										'description' => array(	'label' => 'Descripci&oacute;n',
																'type' => 'textarea',
																'class' => 'summernote',
																'validation' => 'required',
																'visibility' => 'save|details'
																),
										'web' => array(	'label' => 'Web',
																'type' => 'text',
																'validation' => '',
																'visibility' => 'save|details'
																),
										'source' => array(	'label' => 'Fuente',
																'type' => 'text',
																'validation' => '',
																'visibility' => 'save|details'
																),
										'image_portada' => array('label' => 'Imagen de listado',
																	'type' => 'image',
																	'tag' => 'image_list',
																	'validation' => '',
																	'visibility' => 'details|save'
																	),											
										'image_gallery' => array('label' => 'Galer&iacute;a de fotos',
																'type' => 'image',
																'class' => 'button',
																'validation' => '',
																'visibility' => 'media_gallery'
																),
										'active'	=> array(	'label' => 'Activo',
																'type' => 'checkbox',
																'value' => 1,
																'visibility' => 'save|details|list'
																));



$config['modules'][$module_name]['top_menu_actions'] = array( 	'articles_list' => array('method' => 'show_list', 'url' => '#'.$module_name.'/show_list', 'class_name' => $config['modules'][$module_name], 'icon' => "ui-icon-clipboard", 'label' => "Listado de ".$config['modules'][$module_name]['module_label']),
																'add_article' => array('method' => 'create', 'url' => '#'.$module_name.'/create', 'class_name' => $config['modules'][$module_name], 'icon' => "ui-icon-plusthick", 'label' => "Agregar ".$config['modules'][$module_name]['module_unit']));

$config['modules'][$module_name]['main_model_tabs'] = array( 	'details' => array( 'label' => 'Detalle',
								  			  	 				'url' => '#'.$module_name.'/details/'),
											'save' => array( 	'label' => 'Editar',
											 					'url' => '#'.$module_name.'/edit/',
																'tab' => 'details'),
											'media_gallery' => array( 	'label' => 'Galer&iacute;a de fotos',
								  			  	 						'url' => '#'.$module_name.'/media_gallery/image/') ,
																);

$config['modules'][$module_name]['datatable_actions'] = array( 	'details' => array( 'label' => 'Detalle',
								  			  	 				'url' => '#'.$module_name.'/details/'),
											'save' => array( 	'label' => 'Editar',
											 					'url' => '#'.$module_name.'/edit/'),
											'delete' => array( 	'label' => 'Borrar',
																'dialog' => 'Borrar este articulo?',
											 					'url' => '#'.$module_name.'/delete/'),
											);


?>