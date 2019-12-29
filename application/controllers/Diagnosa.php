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

        // Ambil ID Gejala
        foreach ($gejala as $g) :
            $id_gejala[] = $this->SP_Model->getIdGejala($g);
        endforeach;

        // Ambil ID Penyakit
        foreach ($id_gejala as $id => $g) :
            $id_penyakit[] = $this->SP_Model->getIdPenyakitByIdGejala($g['id_gejala']);
        endforeach;

        //Ambil Nama Penyakit
        foreach ($id_penyakit as $arr1) :
            foreach ($arr1 as $arr2) :
                $nama_penyakit[] = $this->SP_Model->getNamaPenyakit($arr2['id_penyakit']);
            endforeach;
        endforeach;

        //Hapus Nama Penyakit yang Duplikat
        foreach ($nama_penyakit as $nama => $n) :
            $unik[] = $n['penyakit'];
        endforeach;
        $u = array_unique($unik);

        //Ambil CF penyakit
        foreach ($id_gejala as $id_g => $g) :
            foreach ($id_penyakit as $id_p => $pe) {
                foreach ($pe as $p) {
                    //$cf_penyakit[] = $this->SP_Model->getCfPenyakit($g['id_gejala'], $p['id_penyakit']);
                    $cf_penyakit[] = $g['id_gejala'] . ' ' . $p['id_penyakit'];
                }
            }
        endforeach;
        var_dump($id_gejala);
        var_dump($id_penyakit);
        var_dump($cf_penyakit);
        die;



        $data['nama_penyakit'] = $u;

        $data['judul'] = 'Hasil';
        $this->load->view('templates/header', $data);
        $this->load->view('diagnosa/hasil', $data);
        $this->load->view('templates/footer');
    }
}
