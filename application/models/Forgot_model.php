
    <?php
defined('BASEPATH') or exit('No direct script access
allowed');
class Forgot_model extends CI_Model
{
    public $table = 'user';
    public $id = 'user.id';
    public function __construct()
    {
        parent::__construct();
    }
    public function get()
    {
        $this->db->from($this->table);
        $query = $this->db->get();
        return $query->result_array();
    }
    function cek_email($table, $email){
        return $this->db->get_where($table, $email);
    }
 
      function set_password($table, $data){
          $this->db->where('email',$data['email']);
        return $this->db->update($table, $data);
     }
 
 
}
