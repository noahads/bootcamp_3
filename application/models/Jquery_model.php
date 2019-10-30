<?php
date_default_timezone_set('Asia/Jakarta');
defined('BASEPATH') OR exit('No direct script access allowed');

class Jquery_model extends CI_model {

    public function cal($num1, $num2, $opt) {
        switch($opt) {
            case '*':
                $result = $num1 * $num2;
                break;
            case '/':
                $result = $num1 / $num2;
                break;
            case '+':
                $result = $num1 + $num2;
                break;
            case '-';
                $result = $num1 - $num2;
                break;
        }

        return $result;
    }

    public function search_database($search, $gender, $religion) {
        $this->db->from('user');

        $where = "(user_name LIKE '%$search%' OR user_address LIKE '%search%')";
        $this->db->where($where);
        $this->db->where('del', '0');

        if($gender != '') {
            $this->db->where('user_gender', $gender);
        }

        if($religion != '') {
            $this->db->where('user_religion', $religion);
        }

        $q = $this->db->get();
        $r = $q->result_array();
        return $r;
    }

    public function get_detail_long($pid) {
        $this->db->from('user');
        $this->db->where('user_pid', $pid);

        $q = $this->db->get();
        $r = $q->result_array();
        return $r;
    }

    public function get_detail($pid) {
        $q = $this->db->get_where('user', array('user_pid' => $pid));
        $r = $q->result_array();
        return $r[0];
    }

}
?>