<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_admin');
        $this->login();
    }

    public function login()
    {
        if ($this->session->has_userdata('username'))
            return TRUE;
        else
            redirect(base_url('login'));
    }

    public function index()
    {
        $data['judul'] = 'Daftar Barang';
        $data['page'] = 'dashboard';
        $data['barang'] = $this->m_admin->dt_barang();
        $data['gudang'] = $this->m_admin->dt_gudang();
        $this->tampil($data);
    }

    public function add_barang()
    {
        $this->m_admin->dt_barang_add();
        $this->session->set_flashdata('success', 'Data barang telah ditambahkan');
        redirect(base_url('admin'));
    }

    public function edit_barang($id)
    {
        $this->m_admin->dt_barang_edit($id);
        $this->session->set_flashdata('success', 'Data barang telah diubah');
        redirect(base_url('admin'));
    }

    public function del_barang($id)
    {
        $this->m_main->del_data('barang', 'id_barang', $id);
        $this->session->set_flashdata('success', 'Data barang telah dihapus');
        redirect(base_url('admin'));
    }

    public function tampil($data)
    {
        $data['user'] = $this->m_main->dt_user();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/body');
        $this->load->view('admin/footer');
    }
}
