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
    $user = $this->app_model->login($nik, $pass)->result();
    print_r($user[0]->nik);
    die();
    // var_dump($hasil->result());
    if (count($user) > 0) {
      $active = $this->app_model->getActive($user);
      if ($active) {
        $role = $this->app_model->getRole($user);
      } else {
        $this->setFlashdate('msg');
      }
    } else {
      $this->setFlashdate('mmm');
      $this->load->view('login');
    }
  }

  function setFlashdate($msg = "")
  {
    echo $msg;
    $this->load->view('login');
  }
}

/* End of file Auth.php */
