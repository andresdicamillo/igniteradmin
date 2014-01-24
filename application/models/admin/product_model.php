<?

require_once(dirname(__FILE__)."/../simple_data_model.php");
class Product_model extends Simple_data_model
{
    public $db_index = 'product_id';
    public $db_table = 'products';
	public $delete_table = 'products_deleted';
	public $row_label = array('name');
	protected $db_fields = array(
								'product_type',
								'name',
								'brief',
								'performance',
								'safety',
								'file_manager_id',
								'hits',
                                'active',
                                'priority',
                                'date_created',
								'creator_id',
								'creator_name',
								);	
								
	public function add_hit($uid)
	{
		$this->logs->add_log('product','view',$this->get_id());
		$sql = "UPDATE ".$this->db_table." SET hits = hits + 1 WHERE ".$this->db_index." = ".$this->get_id();
		$this->db->query($sql);
		
		$sql= "INSERT INTO products_users ('".$this->get_id()."','".$uid."',NOW())";
		$this->db->query($sql);
	}
}

?>