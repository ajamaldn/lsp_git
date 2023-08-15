<?php
class M_admin extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function dt_barang()
    {
        $this->db->select('b.*, g.*');
        $this->db->from('barang b');
        $this->db->join('gudang g', 'g.id_gudang = b.id_gudang', 'left');

        $query = $this->db->get();
        return $query->result_array();
    }

    public function dt_gudang()
    {
        $this->db->select('*');
        $this->db->from('gudang');

        $query = $this->db->get();
        return $query->result_array();
    }


    public function dt_barang_add()
    {
        $data = array(
            'nama_barang' => $this->input->post('nama_barang'),
            'jumlah' => $this->input->post('jumlah'),
            'id_gudang' => $this->input->post('id_gudang')
        );

        $this->db->insert('barang', $data);
    }

    public function dt_barang_edit($id)
    {
        $data = array(
            'nama_barang' => $this->input->post('nama_barang'),
            'jumlah' => $this->input->post('jumlah'),
            'id_gudang' => $this->input->post('id_gudang')
        );
        $this->db->where('id_barang', $id);
        return $this->db->update('barang', $data);
    }
}
