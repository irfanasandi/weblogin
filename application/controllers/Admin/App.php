<?php

defined('BASEPATH') or exit('No direct script access allowed');

class App extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();

    $this->navigasi->set_active_menu('applications');

    $this->name  = $this->session->userdata('name');
    $this->emplid  = $this->session->userdata('emplid');
    $this->bu    = $this->session->userdata('bu');
    $this->levelid  = $this->session->userdata('levelid');
    $this->sessionid = $this->session->userdata('sessionid');
    $this->user_id = $this->session->userdata('user_id');
    $this->admin = $this->session->userdata('admin');

    $this->load->model('app_model');
  }

  public function index()
  {
    if ($this->admin == "" && $this->user_id == "") {
      redirect('home/admin');
    }

    $data['title'] = "APP LIST";
    $data['header'] = "List Aplikasi";
    $data["page"] = 'admin/app';
    $this->load->view('index_admin', $data);
  }

  public function ajax()
  {
    $apps = $this->app_model->master("apps")->result();
    echo json_encode($apps);
  }
}

/* End of file App.php */
