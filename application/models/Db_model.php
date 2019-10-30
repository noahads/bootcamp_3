<?php
date_default_timezone_set('Asia/Jakarta');
defined('BASEPATH') OR exit('No direct script access allowed');

class Db_model extends CI_model {

    public function insert_data() {
        $data = array(
            'user_name' => 'rizky',
            'user_age' => 18,
            'user_gender' => '1',
        );

        if($this->db->insert('user', $data)) {
            return 200;
        } else {
            return 500;
        }
    }

    public function read() {
        //$this->db->select('user_name, user_gender');

        $this->db->from('user');
        $this->db->like('user_name', 'wil');
        $this->db->where('del', '0');

        $query = $this->db->get();
        $result = $query->result_array();

        return $result;
    }

    public function update_data($pid, $name, $age, $religion) {
        $datetime = date('Y-m-d H:i:s');

        $this->db->set('user_name', $name);
        $this->db->set('user_gender', $gender);
        $this->db->set('user_age', $age);
        $this->db->set('user_religion', $religion);

        $this->db->where('user_pid', $pid);

        if($this->db->update('user')) {
            return 200;
        } else {
            return 500;
        }
    }

    public function update_data2($pid, $name, $age, $religion) {
        $datetime = date('Y-m-d H:i:s');

        $array_update = array(
            'user_name' => $name,
            'user_gender' => $gender,
            'user_age' => $age
        );

        $this->db->where('user_pid', $pid);

        if($this->db->update('user', $array_update)) {
            return 200;
        } else {
            return 500;
        }
    }

    public function update($pid) {
        $this->db->where('user_pid', $pid);

        if($this->db->delete('user')) {
            return 200;
        } else {
            return 500;
        }
    }

}

?>