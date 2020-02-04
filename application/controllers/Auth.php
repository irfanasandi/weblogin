<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{


  public function __construct()
  {
    parent::__construct();
    //Do your magic here
    $this->load->model('app_model');
  }


  public function index()
  {
    $nik = trim($this->db->escape_str($this->input->post('nik')));
    $pass  = $this->db->escape_str($this->input->post('password'));
    $hasil = $this->app_model->login($nik, $pass);

    if (count($hasil) > 0) {
      echo "OK";
    } else {
      $this->load->view('login');
    }
  }
}

/* End of file Auth.php */
