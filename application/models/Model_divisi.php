<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Model_divisi extends CI_Model {

    function getDivisi($hak,$jenis)
    {
        
        $this->db->select('*');
        $this->db->from('tb_divisi_subdivisi a');
        $parent=substr($hak,0,1);
        $this->db->where('a.id_parent=\''.$hak.'\'');
        /* $this->db->where('a.id_parent=\''.$parent.'\' and a.id <>\''.$hak.'\'');
        if ($jenis==1) {
            $this->db->where('a.id_parent=\''.$hak.'\'');
        } */
		return $this->db->get()->result_array();
    }

}