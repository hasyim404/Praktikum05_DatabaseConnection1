<?php

class Bmi extends CI_Controller {
    public function index() {
    // pasien 1
        // load pasien_model
        $this->load->model('pasien_model','pasien1');
        $this->pasien1->id=1;
        $this->pasien1->kode='P01001';
        $this->pasien1->nama='Faiz Fikri';
        $this->pasien1->tmp_lahir='Jakarta';
        $this->pasien1->tgl_lahir='2002-04-01';
        $this->pasien1->gender='L';
        // load bmi_model
        $this->load->model('bmi_model','bmi1');
        $this->bmi1->tinggi=169;
        $this->bmi1->berat=64.2;
        // load bmipasien_model
        $this->load->model('bmipasien_model','bmipasien1');
        $this->bmipasien1->id=1;
        $this->bmipasien1->tanggal='2021-04-03';
        $this->bmipasien1->pasien= $this->pasien1;
        $this->bmipasien1->bmi= $this->bmi1;

    // pasien 2
        // load pasien_model
        $this->load->model('pasien_model','pasien2');
        $this->pasien2->id=2;
        $this->pasien2->kode='P01002';
        $this->pasien2->nama='Anissa Pertiwi';
        $this->pasien2->tmp_lahir='Bogor';
        $this->pasien2->tgl_lahir='2002-04-02';
        $this->pasien2->gender='P';
        // load bmi_model
        $this->load->model('bmi_model','bmi2');
        $this->bmi2->tinggi=152;
        $this->bmi2->berat=40.2;
        // load bmipasien_model
        $this->load->model('bmipasien_model','bmipasien2');
        $this->bmipasien2->id=2;
        $this->bmipasien2->tanggal='2021-05-13';
        $this->bmipasien2->pasien= $this->pasien2;
        $this->bmipasien2->bmi= $this->bmi2; 

    // pasien 3
        // load pasien_model
        $this->load->model('pasien_model','pasien3');
        $this->pasien3->id=3;
        $this->pasien3->kode='P01003';
        $this->pasien3->nama='Joelpikri';
        $this->pasien3->tmp_lahir='Depok';
        $this->pasien3->tgl_lahir='2002-04-03';
        $this->pasien3->gender='L';
        // load bmi_model
        $this->load->model('bmi_model','bmi3');
        $this->bmi3->tinggi=170;
        $this->bmi3->berat=90.8;
        // load bmipasien_model
        $this->load->model('bmipasien_model','bmipasien3');
        $this->bmipasien3->id=3;
        $this->bmipasien3->tanggal='2021-05-24';
        $this->bmipasien3->pasien= $this->pasien3;
        $this->bmipasien3->bmi= $this->bmi3;
    // -
        $list_pasien = [$this->pasien1, $this->pasien2, $this->pasien3];
        $list_bmi = [$this->bmi1, $this->bmi2, $this->bmi3];
        $list_bmipasien = [$this->bmipasien1, $this->bmipasien2, $this->bmipasien3];
        $data['list_pasien'] = $list_pasien;
        $data['list_bmi'] = $list_bmi;
        $data['list_bmipasien'] = $list_bmipasien;

        $this->load->view('layouts/header');
        $this->load->view('bmi/index', $data);
        $this->load->view('layouts/footer');
    }
}
?>