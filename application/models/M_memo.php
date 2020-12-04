<?php 

class M_Memo extends CI_Model{
	function get_join($where,$table){
		$this->db->select('*');
		$this->db->from('tdisposisi');
		$this->db->join('tsuratmasuk', 'tdisposisi.no_surat = tsuratmasuk.no_surat');
		$this->db->join('tb_divisi_subdivisi b', 'tdisposisi.kepada = b.id','left');
		$this->db->where($where);		
		$this->db->order_by('waktu', 'asc');
		
		return $this->db->get();
	}
}