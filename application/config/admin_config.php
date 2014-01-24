<?

$config['general']['admin'] = array('home_controller' => 'admin/x/',
									'user_session' => 'user',
									'login_page' => 'admin/user/login',	
									'start_page' => 'contact/show_list',
									);



$config['general']['admin']['sections'] = array(
									//'usuarios' =>array('url' => '#user/show_list', 'name' => 'USUARIOS'),
									'contact' => array('url' => '#contact/show_list', 'name' => 'CONTACTOS'),
									'used' => array('url' => '#used/show_list', 'name' => 'USADOS'),
									'product' => array('url' => '#product/show_list', 'name' => 'NUEVOS'),
									'banner' => array('url' => '#banner/show_list', 'name' => 'BANNERS'),
									//'dealer' => array('url' => '#dealer/show_list', 'name' => 'CONCESIONARIOS'),
									//'aftersale' => array('url' => '#aftersale/show_list', 'name' => 'POSTVENTAS'),
									
									);



$config['general']['admin']['table_icons'] = array(	'details' => 'glyphicon glyphicon-expand glyph-normal',
													'save' => 'glyphicon glyphicon-edit glyph-normal',
													'delete' => 'glyphicon glyphicon-trash glyph-normal');

foreach(glob( dirname(__FILE__)."/../modules_config/*.php") as $filename)

{

    include $filename;

}



?>