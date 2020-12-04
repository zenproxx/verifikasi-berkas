<?php 
class Disposisi extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		
		$this->load->model('Model_disposisi');
		$this->load->model('m_core');
		
		
	}
	
	function input_disposisi($id)
	{	
		$hak=$this->session->userdata('data_user');
		$jenis=$this->session->userdata('jenis');
		$data['id'] = $id;
		$data['divisi_sub']=$this->Model_disposisi->getDivisi($hak,$jenis);
		$data['query'] = $this->m_core->get_where(array('id' => $id), 'tsuratmasuk')->result();
		$this->load->view('disposisi/vw_disposisi',$data);
		
	}
	
	function submit()
	{
		// INSERT BATCH MENGGUNAKAN ARRAY 3 DIMENSI 
		
		$this->form_validation->set_rules('keterangan','Catatan','trim|required');
		$this->form_validation->set_rules('tanggapan','Tanggapan','trim|required');
		
		$config['upload_path']		= './uploads/';
		$config['allowed_types']	= 'pdf|docx|doc';
		$config['max_size']			= '20000';
	
		$this->load->library('upload',$config);
			if (!$this->upload->do_upload('file_surat') ){
				$this->session->set_flashdata('error',$this->upload->display_errors() );
				redirect('memo');
			}

			if ( $this->form_validation->run() ){
				$get = $this->m_core->get_where(array('id' => ambil('id') ), 'tsuratmasuk')->row();
				
				for ($i = 0; $i < count($this->input->post('disposisi')); $i++){
							/* switch ($k){
								case "S" : $k = 1;break;
								case "M" : $k = 2;break;
							} */
								$data[] = array(
								'no_disposisi'		=> rand(1,900*2),
								'no_agenda'			=> $get->no_agenda,
								'no_surat'			=> $get->no_surat,
								'kepada'			=> ambil('disposisi'),
								'keterangan'		=> ambil('keterangan'),
								'status_surat'		=> false,
								'tanggapan'			=> ambil('tanggapan'),
								'nama_file'			=> $this->upload->data('file_name'),
					);
					
							
					if ($this->db->insert_batch('tdisposisi',$data) /* $this->m_core->insert_data($data,'tdisposisi' )*/  ){
						$this->session->set_flashdata('success','Data berhasil DISIMPAN');
						redirect('surat_masuk/');
					}else{
						echo "Tidak berhasil";
					}
				
					break;
					
		}
				
					
			}else{
				
			}
			
		
	}
}
