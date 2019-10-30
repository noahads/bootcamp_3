<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    Class My_model extends CI_Model{
    public function kalkulator($angka1, $operasi, $angka2){
        if($operasi == '+'){
            $jumlah = $angka1 + $angka2;
        }
        else if($operasi == '-'){
            $jumlah = $angka1 - $angka2;
        }
        else if($operasi == '/'){
            $jumlah = $angka1 / $angka2;
        }
        else{
            $jumlah = $angka1 * $angka2;
        }

        return $jumlah;
    }
}
?>