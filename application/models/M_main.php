<?php
class M_main extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    function del_data($tabel, $kolom, $id)
    {
        $this->db->delete($tabel, array($kolom => $id));
        if (!$this->db->affected_rows())
            return (FALSE);
        else
            return (TRUE);
    }

    function check_login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $query = $this->db->get_where('user', array('username' => $username, 'password' => $password));
        return $query->row_array();
    }

    public function dt_user()
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('id_user', $this->session->userdata('id_user'));

        $query = $this->db->get();
        return $query->row_array();
    }
}
