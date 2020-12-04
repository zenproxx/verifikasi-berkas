<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Tb_lembar_penelitian_imb extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Tb_lembar_penelitian_imb_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $tb_lembar_penelitian_imb = $this->Tb_lembar_penelitian_imb_model->get_all();

        $data = array(
            'tb_lembar_penelitian_imb_data' => $tb_lembar_penelitian_imb
        );

        $this->load->view('tb_lembar_penelitian_imb_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Tb_lembar_penelitian_imb_model->get_by_id($id);
        if ($row) {
            $data = array(
		'uniqid' => $row->uniqid,
		'no_agenda_berkas' => $row->no_agenda_berkas,
		'nama_bangunan' => $row->nama_bangunan,
		'jenis_bangunan' => $row->jenis_bangunan,
		'jumlah_unit' => $row->jumlah_unit,
	    );
            $this->load->view('tb_lembar_penelitian_imb_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tb_lembar_penelitian_imb'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('tb_lembar_penelitian_imb/create_action'),
	    'uniqid' => set_value('uniqid'),
	    'no_agenda_berkas' => set_value('no_agenda_berkas'),
	    'nama_bangunan' => set_value('nama_bangunan'),
	    'jenis_bangunan' => set_value('jenis_bangunan'),
	    'jumlah_unit' => set_value('jumlah_unit'),
	);
        $this->load->view('tb_lembar_penelitian_imb_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'no_agenda_berkas' => $this->input->post('no_agenda_berkas',TRUE),
		'nama_bangunan' => $this->input->post('nama_bangunan',TRUE),
		'jenis_bangunan' => $this->input->post('jenis_bangunan',TRUE),
		'jumlah_unit' => $this->input->post('jumlah_unit',TRUE),
	    );

            $this->Tb_lembar_penelitian_imb_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('tb_lembar_penelitian_imb'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Tb_lembar_penelitian_imb_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('tb_lembar_penelitian_imb/update_action'),
		'uniqid' => set_value('uniqid', $row->uniqid),
		'no_agenda_berkas' => set_value('no_agenda_berkas', $row->no_agenda_berkas),
		'nama_bangunan' => set_value('nama_bangunan', $row->nama_bangunan),
		'jenis_bangunan' => set_value('jenis_bangunan', $row->jenis_bangunan),
		'jumlah_unit' => set_value('jumlah_unit', $row->jumlah_unit),
	    );
            $this->load->view('tb_lembar_penelitian_imb_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tb_lembar_penelitian_imb'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('uniqid', TRUE));
        } else {
            $data = array(
		'no_agenda_berkas' => $this->input->post('no_agenda_berkas',TRUE),
		'nama_bangunan' => $this->input->post('nama_bangunan',TRUE),
		'jenis_bangunan' => $this->input->post('jenis_bangunan',TRUE),
		'jumlah_unit' => $this->input->post('jumlah_unit',TRUE),
	    );

            $this->Tb_lembar_penelitian_imb_model->update($this->input->post('uniqid', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('tb_lembar_penelitian_imb'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Tb_lembar_penelitian_imb_model->get_by_id($id);

        if ($row) {
            $this->Tb_lembar_penelitian_imb_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('tb_lembar_penelitian_imb'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tb_lembar_penelitian_imb'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('no_agenda_berkas', 'no agenda berkas', 'trim|required');
	$this->form_validation->set_rules('nama_bangunan', 'nama bangunan', 'trim|required');
	$this->form_validation->set_rules('jenis_bangunan', 'jenis bangunan', 'trim|required');
	$this->form_validation->set_rules('jumlah_unit', 'jumlah unit', 'trim|required');

	$this->form_validation->set_rules('uniqid', 'uniqid', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Tb_lembar_penelitian_imb.php */
/* Location: ./application/controllers/Tb_lembar_penelitian_imb.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2020-11-26 17:28:03 */
/* http://harviacode.com */