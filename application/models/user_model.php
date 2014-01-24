<?
// once resolved the problem of autoload class this should go away.
require_once(dirname(__FILE__)."/simple_data_model.php");

class User_model extends Simple_data_model
{
    public $db_index = 'user_id';
    public $db_table = 'bitauth_users';
	public $db_userdata_table = 'bitauth_userdata';
    protected $_db_user_pass = 'password';
    protected $_db_user_name = 'email';
    
    protected $session_key = 'user';
    protected $auto_write_session = false;
    
    public $first_login  = false;
    public $update_last_login = true;
    
    public $is_validated = false;

    public $controller = "user"; // useful for creating links depending on the controller

	public $post;
    protected $db_fields = array(
								'username',
								'email',
                                'password',
                                'fullname',
								'groups_names',
								'country',
								'province_id',
								'province',
								'region',
                                'active',
                                'last_login',
                                'date_created'
							);

    protected $db_fields_type = array(
                                        'user_id' => "int",
                                        'email' => "email",
                                        'active' => "int",
                                        'last_login' => "date",
                                        'date_created' => "date");

    public function  __construct() {
        parent::__construct();
    }

	

	public function post_get()
	{
		$sql = "SELECT group_id FROM bitauth_assoc WHERE ".$this->db_index." = '".$this->get_id()."'";
		$row = $this->db->query($sql)->row();
		
		if($row)
		{
			$this->group_id = $row->group_id;
		}
			
		$sql = "SELECT * FROM ".$this->db_userdata_table." WHERE  ".$this->db_index." = '".$this->get_id()."'";
		$result = $this->db->query($sql)->result_array();
		
		if(is_array($result))
		{
			$this->userdata = $result[0];
		}
		
	}

	protected function post_delete()
	{
		$sql = "DELETE FROM configurations WHERE configuration_id = '".$this->get_id()."'";
		$this->db->query($sql);	
	}
	protected function post_create()
	{
		$this->set_field('active',$this->post['active']);
		$sql = "INSERT INTO configurations (configuration_id, username, email) VALUES ('".$this->get_id()."','".$this->username."','".$this->email."')";
		$this->db->query($sql);
		
		$this->assign_admin_values();		
		$this->update();	
	}
	
	
	
	protected function pre_save()
	{
		$this->post = $this->input->post();
		if($this->post['group_id'])
		{
			
			$sql = "SELECT g.name FROM bitauth_groups AS g WHERE g.group_id = '".$this->post['group_id']."'";		
			$result = $this->db->query($sql)->result_array();
			if(is_array($result))
			{
				$this->set_field('groups_names',$result[0]['name']);
				$this->post['groups_names'] = $result[0]['name'];
			}
			$this->post['groups'] = array($this->post['group_id']);
			unset($this->post['group_id']);
		}
		
		if($this->post['province_id'])
		{
			$sql = "SELECT name FROM provinces WHERE province_id = '".$this->post['province_id']."'";
			$result = $this->db->query($sql)->result_array();
			if(is_array($result))
			{
				$this->set_field('province',$result[0]['name']);
				$this->post['province'] = $result[0]['name'];		
			}	
		}
		
		unset($this->post['passconf']);	
		$this->userdata = $this->post['userdata'];
		unset($this->post['userdata']);
	}
	
}
?>