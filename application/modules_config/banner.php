<?
$module_name = 'banner';

$config['modules'][$module_name] = array(
										 	'controller_name' => 'admin/banner',
											'main_model' => 'admin/banner_model',
										 	'module_label' => 'Banners',
											'module_unit' => 'Banner',
											'restrictions' => 'own_content'
										 );

$config['modules'][$module_name]['fields'] = array(	
										
										'name' => array(	'label' => 'Nombre',
															'type' => 'text',
															'class' => 'title',
															'validation' => 'required',
															'visibility' => 'save|details|list'
																),
										'url' => array(	'label' => 'Url',
															'type' => 'text',
															'validation' => '',
															'visibility' => 'save|details|list',
															'description' => 'ej: http://wwww.google.com'
																),
										'url_target' => array(	'label' => 'Url Target',
															'type' => 'select',
															'options' => array(	0 => array('value' => 'self', 'label' => 'Self (misma ventana)'),
																				1 => array('value' => 'blank', 'label' => 'Blank (ventana nueva)'),
																				),
															'validation' => '',
															'visibility' => 'save|details|list',
																),						
										'bg_color' => array(	'label' => 'Color de fondo',
															'type' => 'text',
															'validation' => '',
															'visibility' => 'save|details',
															'description' => 'ej: #FFFFFF'
																),						

										'main_image' => array(	'label' => 'Imagen',
																'type' => 'image',
																'tag' => 'main_image',
																'thumbs' => array(	'0' => array('width' => 320, "height" => 320, "name" => '320'),
																					'1' => array('width' => 640, "height" => 640, "name" => '640'),
																					'2' => array('width' => 93, "height" => 90, "name" => 'thumb_on'),
																					'3' => array('width' => 93, "height" => 90, "name" => 'thumb_off'),
																					'4' => array('width' => 1500, "height" => 423, "name" => '980'),
																					'5' => array('width' => 476, "height" => 195, "name" => 'secondary')
																					),
																
																'visibility' => 'save|details'
																),
										'page_position' => array(	
																'label' => 'Posici&oacute;n',
																'type' => 'radio',
																'options' => array(	1 => array("value" => "centro","label" => "Centro"),
																					2 => array("value" => "secundario","label" => "Secundario")
																					),
																'validation' => '',
																'description' => 'Centro: banner grande en slider. Secundario: banner chico abajo del slider',
																'visibility' => 'save|details|list'
																),
																

										'active'	=> array(	'label' => 'Activo',
																'type' => 'checkbox',
																'value' => 1,
																'visibility' => 'save|details|list'
																));

$config['modules'][$module_name]['top_menu_actions'] = array( 	'sections_list' => array('method' => 'banner/show_list', 
																					   'url' => '#banner/show_list', 
																					   'class_name' => 'section', 
																					   'icon' => "ui-icon-clipboard", 
																					   'label' => "Listado de Banners"
																						),
																'add_banner' => array('url' => '#banner/create', 'method' => 'create', 'class_name' => 'banner', 'icon' => "ui-icon-plusthick", 'label' => "Agregar Banner"),
																);

$config['modules'][$module_name]['main_model_tabs'] = array( 	'details' => array( 'label' => 'Detalle',
								  			  	 				'url' => '#'.$module_name.'/details/'),
											'edit' => array( 	'label' => 'Editar',
											 					'url' => '#'.$module_name.'/edit/',)

																);

$config['modules'][$module_name]['datatable_actions'] = array( 	'details' => array( 'label' => 'Detalle',
								  			  	 				'url' => '#'.$module_name.'/details/'),
											'edit' => array( 	'label' => 'Editar',
											 					'url' => '#'.$module_name.'/edit/'),
											'delete' => array( 	'label' => 'Borrar',
																'dialog' => 'Borrar este banner?',
											 					'url' => '#'.$module_name.'/delete/'),
											);
?>