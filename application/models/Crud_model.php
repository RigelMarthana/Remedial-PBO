<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud_model extends CI_Model {
    public function __construct() {
        $this->load->database();
    }

    function createData() {
        $data = array (
            'Nama' => $this->input->post('Nama'),
            'Tngl_Lhr' => $this->input->post('Tngl_Lhr'),
            'NoHP' => $this->input->post('NoHP'),
        );
        $this->db->insert('tbl_name', $data);
    }

    function getAllData() {
        $query = $this->db->query('SELECT * FROM tbl_name');
        return $query->result();
    }

    function getData($Id) {
        $query = $this->db->query('SELECT * FROM tbl_name WHERE Id ='.$Id);
        return $query->row();
    }

    function
}
