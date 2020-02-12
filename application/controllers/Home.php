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
    $this->user_id = $this->session->userdata('user_id');

    $this->load->model('app_model');
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
      $data['role'] = $this->app_model->master('role');
      $data['apps'] = $this->app_model->master('apps');
      $data['modules'] = $this->app_model->master('module');
      $data['akses'] = $this->app_model->master('hak_akses');
      $data["page"] = 'page/home';
      $this->load->view('index2', $data);
    } else {
      redirect();
    }
  }

  public function get_akses()
  {
    $roleId = $this->input->post('role');
    $data = $this->app_model->edit('hak_akses', 'id =' . $roleId)->result();
    echo json_encode($data);
  }

  function updatePerModule()
  {
    $value = $this->input->post('value');
    $up['role_id'] = $this->input->post('role');
    $up['module_id'] = $this->input->post('module');
    $up['a_create'] = $value;
    $up['a_read'] = $value;
    $up['a_update'] = $value;
    $up['a_delete'] = $value;

    // $select = $this->app_model->manual_query("select * from hak_akses where role_id = " . $up['role_id'] . " and module_id =" . $up['module_id'] . "");

    $select = $this->app_model->getWhereAnd('hak_akses', 'role_id', 'module_id', $up);
    // $data = $this->app_model->update2('hak_akses', $up, 'role_id', 'module_id');
    print_r($this->db->last_query());
  }
}
/* End of file Home.php */
