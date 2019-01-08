<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

    function index() {
        $this->load->model('berita_model','BM',true);
        $data['index'] = 2;
        $data['berita'] = $this->BM->getberitaspesifik();
    	$this->load->view('navbar', $data);
        $this->load->view('index2');
    }

     function index3() {
        $data['index'] = 3;
    	$this->load->view('navbar', $data);
        $this->load->view('index3');
    }
    function index4() {
        $data['index'] = 4;
    	$this->load->view('navbar', $data);
        $this->load->view('index4');
    }
    function index5() {
        $data['index'] = 5;
        $this->load->view('navbar', $data);
        $this->load->view('index5');
    }

    function showberita($id)
    {
        $data['index'] = 6;
        $this->load->model('berita_model','BM',true);
        $data['berita'] = $this->BM->getBerita($id);
            $this->load->view('navbar', $data);
            $this->load->view('landingberita', $data);  
    }

}
