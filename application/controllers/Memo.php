<?php 
class Memo extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_memo');
	}
	
	function index()
	{	
		$data['query'] = $this->m_memo->get_join(array('kepada' => $this->session->userdata('data_user')), 'tdisposisi')->result();
		$this->load->view('memo/vw_memo',$data);
	}
	
	function show($id)
	{
		$this->m_core->edit_data(array('no_disposisi' => $id),array('status_surat' => 1), 'tdisposisi');
		$data['query'] = $this->m_memo->get_join(array('no_disposisi' => $id), 'tdisposisi')->result();
		$no_surat=$data['query'][0]->no_surat;
		$data['tracking'] = $this->m_memo->get_join(array('tsuratmasuk.no_surat' => $no_surat), 'tdisposisi')->result();
		$data['no_surat']=$no_surat;
		//print_r ($data['query']);
		$data['query_surat'] = $this->m_core->get_where(array('no_surat' => $no_surat),'tsuratmasuk' )->result();
		$this->load->view('memo/vw_showmemo',$data);
	}
}