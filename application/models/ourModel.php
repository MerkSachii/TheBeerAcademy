<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class ourModel extends CI_Model {
    private $sys;

    public function __construct() {
        parent::__construct();
        $this->sys = $this->load->database();
    }

    public function verifyCredentials($data) {
        
        $lastLogin = array(
            'lastLogin' => date("Y-m-d H:m:s"),
        );
        $condition = "email =" . "'" . $data['email'] . "' AND " . "password =" . "'" . $data['password'] . "'";
        $this->db->select("*");
        $this->db->from('users');
        $this->db->where($condition);
        $this->db->limit('1');
        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            $this->db->where($condition);
            $this->db->update('users', $lastLogin);
            return true;
        }
        else {
            return false;
        }
        
    }
   

}

?>
