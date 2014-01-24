<?
class Contact extends ADMIN_Controller
{
	
	public function show_list()
	{
		parent::show_list();	
	}
	
	public function make_client($contact_id)
	{
		$this->main_model->make_client($contact_id);
		$this->show_list();	
	}

}
?>