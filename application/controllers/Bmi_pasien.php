<?php
defined('BASEPATH')OR exit('Nodirectscriptaccessallowed');
class Bmi_pasien extends CI_Controller {

    public function list() {
        $this->load->model('bmipasien_model');
        $data['bmipasien'] = $this->bmipasien_model->getAll();

        $this->load->view('layouts/header');
        $this->load->view('bmipasien/list', $data);
        $this->load->view('layouts/footer');
    }

    public function view($id) {
        $this->load->model('bmipasien_model');
        $bmipasien = $this->bmipasien_model->findById($id);

        if ($bmipasien == NULL) {
            $this->load->view('layouts/header');
            $this->load->view('error/error');
            $this->load->view('layouts/footer');
        }
        else {
            $data['bmipasien'] = $bmipasien;

            $this->load->view('layouts/header');
            $this->load->view('bmipasien/view', $data);
            $this->load->view('layouts/footer');
        }
    }
}


?>