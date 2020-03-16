<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{


  public function __construct()
  {
    parent::__construct();
    $this->navigasi->set_active_menu('dashboard');
    $this->admin = $this->session->userdata('admin');
    $this->levelid  = $this->session->userdata('levelid');

    $this->load->model('app_model');
  }

  function index()
  {
    $data['title'] = "Login Admin";
    if ($this->admin != "") {
      $this->landing_admin();
    } else {
      $this->load->view('login_admin', $data);
    }
  }

  function landing_admin()
  {
    $data = array();
    $data["title"] = "Web Login";
    if ($this->admin != "") {
      $data['role'] = $this->app_model->master('role');
      $data['apps'] = $this->app_model->master('apps');
      $data['modules'] = $this->app_model->master('module');
      $data['akses'] = $this->app_model->master('hak_akses');
      $data["page"] = 'admin/admin';
      $this->load->view('index_admin', $data);
    } else {
      redirect();
    }
  }
}

/* End of file Admin.php */
