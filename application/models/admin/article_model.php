<?
require_once(dirname(__FILE__)."/../simple_data_model.php");

class Article_model extends Simple_data_model
{

    public $db_index = 'article_id';
    public $db_table = 'articles';
	public $delete_table = 'articles_deleted';
	public $row_label = array('name');
	
	protected $db_fields = array(
								'title',
								'brief',
								'description',
								'web',
								'source',
								'file_manager_id',
								'views',
								'user_listed',
                                'active',
                                'date_created',
								'creator_id',
								'creator_name',
								);

	public function get_count_relation($model, $id = NULL)
	{
		switch($model)
		{
			case 'user':
				return $this->db->query("SELECT F.article_id , F.article FROM articles_users as FU INNER JOIN articles as F ON (F.article_id=FU.article_id) WHERE F.article_id = '".$id."' ")->num_rows();
				break;
			default: return false;
		}
	}
	
	public function get_image_panoramic()
	{
		return ($this->panoramic=='')?base_url().'assets_fe/images/defaults/panoramica.jpg':$this->panoramic;
	}

	public function get_image_logo()
	{
		return ($this->panoramic=='')?base_url().'assets_fe/images/defaults/logo.jpg':$this->logo;
	}

	public function add_view()
	{
		$this->logs->add_log('article','view',$this->get_id());
		$sql = "UPDATE ".$this->db_table." SET views = views + 1 WHERE ".$this->db_index." = ".$this->get_id();
		$this->db->query($sql);
	}
	
	public function add_user_listed($id = NULL)
	{
		$id = $id ? $id : $this->get_id();
		$sql = "UPDATE ".$this->db_table." SET user_listed = user_listed + 1 WHERE ".$this->db_index." = ".$this->get_id();
		$this->db->query($sql);			
	}

	public function get($opt)
	{
		if(!parent::get($opt))
			return 0;

		return 1;
	}
	
	protected function pre_save()
	{
		if($this->user_id)
		{
			$sql = "SELECT username FROM bitauth_users WHERE user_id = '".$this->user_id."'";
			$row = $this->db->query($sql)->row();
			$this->username = $row->username;
		}
	}

}
?>