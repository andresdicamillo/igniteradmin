<?
class Product extends ADMIN_Controller
{
	public function show_tree()
	{			$config_tree['table'] = 'tags';

			$this->load->library('tree_json', $config_tree);

			$this->tree_json->show_list();

	}

	public function save_ajax_tree()
	{		

		$config_tree = array('table' => 'products_categories','id' => 'category_id');

		$this->load->library('tree_json', $config_tree);

		//$jstree->_create_default();

		//die();
		if(isset($_GET["reconstruct"])) {

			$this->tree_json->_reconstruct();

			die();

		}

		if(isset($_GET["analyze"])) {

			echo $this->tree_json->_analyze();

			die();

		}
		if($_REQUEST["operation"] && strpos($_REQUEST["operation"], "_") !== 0 )

		{

			header("HTTP/1.0 200 OK");

			header('Content-type: application/json; charset=utf-8');

			header("Cache-Control: no-cache, must-revalidate");

			header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");

			header("Pragma: no-cache");

			echo $this->tree_json->{$_REQUEST["operation"]}($_REQUEST);

			die();

		}

		

		$this->ajax_tree();

	}
	
	public function video_gallery($type,$id,$rand= NULL)
	{
		
		if(!$this->main_model->get($id) || !$this->has_permission('video_gallery'))
		{
			$this->show_list();
		}
		else
		{
			$this->get_file_manager();
		
			$this->data['form_action'] = base_url()."admin/".$this->class_name."/validate_save/video_gallery";			
			$this->data['form_url_success'] = $this->class_name."/video_gallery/".$type."/".$id."/".rand();
			$this->data['current_tab'] = 'video_gallery';
			$this->data['delete_url'] = base_url()."admin/".$this->class_name."/delete_file/".$this->file_manager->get_id()."/";
				
			$this->load->view("admin/common/inc.media.php",$this->data);
		}
	}
	

}

?>