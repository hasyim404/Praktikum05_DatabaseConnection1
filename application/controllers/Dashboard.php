<?php
defined('BASEPATH')OR exit('Nodirectscriptaccessallowed');
class Dashboard extends CI_Controller {

    public function index(){
        $this->load->view('layouts/header');
        $this->load->view('dashboard/welcome');
        $this->load->view('layouts/footer');
    }
}

?>