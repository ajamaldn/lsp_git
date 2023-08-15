<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_admin');
    }

    public function index()
    {
        $data['judul'] = 'Daftar Barang';
        $data['page'] = 'dashboard';
        $data['barang'] = $this->m_admin->dt_barang();
        $this->tampil($data);
    }

    public function add_barang()
    {
        $this->m_admin->dt_barang_add();
        // $this->session->set_flashdata('success', 'Data berhasil ditambahkan');
        redirect(base_url('admin'));
    }

    public function edit_barang($id)
    {
        $this->m_admin->dt_barang_edit($id);
        redirect(base_url('admin'));
    }

    public function del_barang($id)
    {
        $this->m_umum->dt_del_edit($id);
        redirect(base_url('admin'));
    }

    public function tampil($data)
    {
        $this->load->view('admin/header', $data);
        $this->load->view('admin/body');
        $this->load->view('admin/footer');
    }
}
