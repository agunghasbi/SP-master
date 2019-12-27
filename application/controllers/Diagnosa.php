<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Diagnosa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('SP_Model');
        $this->load->helper('url');
    }

    public function index()
    {
        $data['judul'] = 'Diagnosa';
        $data['gejala'] = $this->SP_Model->getAllGejala();
        $this->load->view('templates/header', $data);
        $this->load->view('diagnosa/diagnosa', $data);
        $this->load->view('templates/footer');
    }

    public function pembobotan()
    {
        $data['gejala'] = $_POST['gejala'];
        $data['judul'] = 'Pembobotan';
        $this->load->view('templates/header', $data);
        $this->load->view('diagnosa/pembobotan', $data);
        $this->load->view('templates/footer');
    }

    public function hasil()
    {
        $j = $this->input->post('jumlah');
        $array = array();
        $i = 1;
        while ($i <= $j) {
            $array[] = $this->input->post('bobot' . $i);
            $i++;
        }
        $gejala = $this->input->post('gejala');
        $bobot = $array;
        $data['bobot_gejala'] = array_combine($gejala, $bobot);

        foreach ($gejala as $g) :
            $id_gejala[] = $this->SP_Model->getIdGejala($g);
        endforeach;
        var_dump($id_gejala);
        die;

        foreach ($id_gejala as $id) :
        //$id_penyakit[] = $this->SP_Model->getIdPenyakitByIdGejala($id);
        endforeach;


        $data['judul'] = 'Hasil';
        $this->load->view('templates/header', $data);
        $this->load->view('diagnosa/hasil', $data);
        $this->load->view('templates/footer');
    }
}
