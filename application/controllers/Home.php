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
    $data["title"]   = "Web Login";
    if ($this->emplid != "") {
      $this->landing();
    } else {
      $this->load->view('login', $data);
    }
  }

  function landing()
  {
    $data = array();
    $data["title"] = "Web Login";
    // $data["header"] = $this->app_model->profile($this->emplid);
    if ($this->emplid != "") {
      $data["page"] = 'page/home';
      $this->load->view('index', $data);
    } else {
      redirect();
    }
  }
}
/* End of file Home.php */
