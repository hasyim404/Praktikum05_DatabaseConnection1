<?php
defined('BASEPATH')OR exit('Nodirectscriptaccessallowed');
class Pasien extends CI_Controller {

    public function list(){ 
        $this->load->model('pasien_model');
        $data['pasien'] = $this->pasien_model->getAll(); //query

        $this->load->view('layouts/header');
        $this->load->view('pasien/list', $data);
        $this->load->view('layouts/footer');
    }

    public function view($id){
        $this->load->model('pasien_model');
        $pasien = $this->pasien_model->findById($id);

        if ($pasien == NULL){
            $this->load->view('layouts/header');
            $this->load->view('error/error');
            $this->load->view('layouts/footer');
        }
        else {
            $data['pasien'] = $pasien;

            $this->load->view('layouts/header');
            $this->load->view('pasien/view', $data);
            $this->load->view('layouts/footer');
        }
    }
}



?>