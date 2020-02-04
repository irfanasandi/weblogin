<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

  function __construct()
  {
    parent::__construct();

    $this->username  = $this->session->userdata('username');
    $this->emplid  = $this->session->userdata('emplid');
    $this->name    = $this->session->userdata('name');
    $this->bu    = $this->session->userdata('bu');
    $this->levelid  = $this->session->userdata('levelid');
    $this->sessionid = $this->session->userdata('sessionid');
  }

  function index()
  {
    $data = array();
    $data["title"]   = "";
    if ($this->emplid == "") {
      redirect('auth');
    } else {
      $this->load->view('home', $data);
    }
  }
}

/* End of file Home.php */
