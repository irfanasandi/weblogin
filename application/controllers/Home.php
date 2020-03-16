<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

  function __construct()
  {
    parent::__construct();

    $this->navigasi->set_active_menu('dashboard');

    $this->name  = $this->session->userdata('name');
    $this->emplid  = $this->session->userdata('emplid');
    $this->bu    = $this->session->userdata('bu');
    $this->levelid  = $this->session->userdata('levelid');
    $this->sessionid = $this->session->userdata('sessionid');
    $this->user_id = $this->session->userdata('user_id');

    $this->load->model('app_model');
  }

  function index()
  {
    $data = array();
    $data["title"]   = "Management Access";
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
    if ($this->emplid != "") {
      $data['role'] = $this->app_model->master('role');
      $data['apps'] = $this->app_model->master('apps');
      $data['modules'] = $this->app_model->master('module');
      $data['akses'] = $this->app_model->master('hak_akses');
      $data["page"] = 'page/home';
      $this->load->view('index', $data);
    } else {
      redirect();
    }
  }


  public function get_akses()
  {
    $roleId = $this->input->post('role');
    $data = $this->app_model->edit('hak_akses', 'role_id =' . $roleId)->result();
    echo json_encode($data);
  }

  public function get_akses_module()
  {
    $role_id = $this->input->post('role');
    $module_id = $this->input->post('module');

    $data = $this->app_model->edit('hak_akses', 'role_id =' . $role_id . 'and module_id =' . $module_id)->result();
    echo json_encode($data);
  }

  function updatePerModule()
  {
    $value = $this->input->post('value');
    $up['role_id'] = $this->input->post('role');
    $up['module_id'] = $this->input->post('module');
    $up['app_id'] = $this->input->post('app_id');
    $up['a_create'] = $value;
    $up['a_read'] = $value;
    $up['a_update'] = $value;
    $up['a_delete'] = $value;

    $select = $this->app_model->getWhereAnd('hak_akses', 'role_id', 'module_id', $up);

    if ($select->num_rows() > 0) {
      $this->app_model->update2('hak_akses', $up, 'role_id', 'module_id');
    } else {
      $this->app_model->simpan('hak_akses', $up);
    }
    echo json_encode('ok');
  }

  public function singleUpdate()
  {
    $up['module_id'] = $this->input->post('module_id');
    $up['app_id'] = $this->input->post('app_id');
    $up['role_id'] = $this->input->post('role_id');
    $up[$this->input->post('crud')] = $this->input->post('checked');


    $select = $this->app_model->getWhereAnd('hak_akses', 'role_id', 'module_id', $up);

    if ($select->num_rows() > 0) {
      $this->app_model->update2('hak_akses', $up, 'role_id', 'module_id');
    }

    echo ($this->db->last_query());
  }
}
/* End of file Home.php */
