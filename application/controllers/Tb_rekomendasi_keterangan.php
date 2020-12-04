<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Tb_rekomendasi_keterangan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Tb_rekomendasi_keterangan_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $tb_rekomendasi_keterangan = $this->Tb_rekomendasi_keterangan_model->get_all();

        $data = array(
            'tb_rekomendasi_keterangan_data' => $tb_rekomendasi_keterangan
        );

        $this->load->view('tb_rekomendasi_keterangan_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Tb_rekomendasi_keterangan_model->get_by_id($id);
        if ($row) {
            $data = array(
		'uniqid' => $row->uniqid,
		'lokasi_persil' => $row->lokasi_persil,
		'kelurahan' => $row->kelurahan,
		'kecamatan' => $row->kecamatan,
		'alas_hak' => $row->alas_hak,
	    );
            $this->load->view('tb_rekomendasi_keterangan_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tb_rekomendasi_keterangan'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('tb_rekomendasi_keterangan/create_action'),
	    'uniqid' => set_value('uniqid'),
	    'lokasi_persil' => set_value('lokasi_persil'),
	    'kelurahan' => set_value('kelurahan'),
	    'kecamatan' => set_value('kecamatan'),
	    'alas_hak' => set_value('alas_hak'),
	);
        $this->load->view('tb_rekomendasi_keterangan_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'lokasi_persil' => $this->input->post('lokasi_persil',TRUE),
		'kelurahan' => $this->input->post('kelurahan',TRUE),
		'kecamatan' => $this->input->post('kecamatan',TRUE),
		'alas_hak' => $this->input->post('alas_hak',TRUE),
	    );

            $this->Tb_rekomendasi_keterangan_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('tb_rekomendasi_keterangan'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Tb_rekomendasi_keterangan_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('tb_rekomendasi_keterangan/update_action'),
		'uniqid' => set_value('uniqid', $row->uniqid),
		'lokasi_persil' => set_value('lokasi_persil', $row->lokasi_persil),
		'kelurahan' => set_value('kelurahan', $row->kelurahan),
		'kecamatan' => set_value('kecamatan', $row->kecamatan),
		'alas_hak' => set_value('alas_hak', $row->alas_hak),
	    );
            $this->load->view('tb_rekomendasi_keterangan_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tb_rekomendasi_keterangan'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('uniqid', TRUE));
        } else {
            $data = array(
		'lokasi_persil' => $this->input->post('lokasi_persil',TRUE),
		'kelurahan' => $this->input->post('kelurahan',TRUE),
		'kecamatan' => $this->input->post('kecamatan',TRUE),
		'alas_hak' => $this->input->post('alas_hak',TRUE),
	    );

            $this->Tb_rekomendasi_keterangan_model->update($this->input->post('uniqid', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('tb_rekomendasi_keterangan'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Tb_rekomendasi_keterangan_model->get_by_id($id);

        if ($row) {
            $this->Tb_rekomendasi_keterangan_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('tb_rekomendasi_keterangan'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tb_rekomendasi_keterangan'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('lokasi_persil', 'lokasi persil', 'trim|required');
	$this->form_validation->set_rules('kelurahan', 'kelurahan', 'trim|required');
	$this->form_validation->set_rules('kecamatan', 'kecamatan', 'trim|required');
	$this->form_validation->set_rules('alas_hak', 'alas hak', 'trim|required');

	$this->form_validation->set_rules('uniqid', 'uniqid', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Tb_rekomendasi_keterangan.php */
/* Location: ./application/controllers/Tb_rekomendasi_keterangan.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2020-11-26 17:16:17 */
/* http://harviacode.com */