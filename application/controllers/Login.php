<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

    public function index()
    {
        $data['pesan'] = "";
        $this->form_validation->set_rules('username', 'Username', 'required', array('required' => 'Username tidak boleh kosong'));
        $this->form_validation->set_rules('password', 'Password', 'required', array('required' => 'Password tidak boleh kosong'));
        if ($this->form_validation->run() == FALSE)
            $this->load->view("login", $data);
        else {
            if ($data['dt'] = $this->m_main->check_login()) {
                $data_user = array(
                    'id_user' => $data['dt']['id_user'],
                    'username' => $data['dt']['username']
                );
                $this->session->set_userdata($data_user);
                redirect(base_url('admin'));
            } else {
                $this->session->set_flashdata('false', 'Username atau Password salah!');
                $this->load->view("login", $data);
            }
        }
    }

    function logout()
    {
        unset(
            $_SESSION['id_user'],
            $_SESSION['username']
        );
        redirect(base_url('login'));
    }
}
