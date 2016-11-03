<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class ourModel extends CI_Model {
    private $sys;

    public function __construct() {
        parent::__construct();
        $this->sys = $this->load->database();
    }

    public function verifyCredentials($data) {

        $condition = "email =" . "'" . $data['username'] . "' AND " . "password =" . "'" . $data['password'] . "'";
        $this->db->select("*");
        $this->db->from('users');
        $this->db->where($condition);
        $this->db->limit('1');
        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return true;
        }
        else {
            return false;
        }

    }

    public function addUser($formdata) {
      $query = $this->db->insert('users',$formdata);
      return $query;
    }


}

?>
