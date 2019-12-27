<?php

class SP_Model extends CI_model
{
    public function getAllPenyakit()
    {
        return $this->db->get('penyakit')->result_array();
    }

    public function getAllGejala()
    {
        return $this->db->get('gejala')->result_array();
    }

    public function getAllBobot()
    {
        return $this->db->get('bobot')->result_array();
    }

    public function getIdGejala($gejala)
    {
        $this->db->select('id_gejala');
        return $this->db->get_where('gejala', ['gejala' => $gejala])->result_array();
    }

    public function getIdPenyakitByIdGejala($id_gejala)
    {
        $this->db->select('id_penyakit');
        return $this->db->get_where('bobot', ['id_gejala' => $id_gejala])->result_array();
    }
}
