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

  function ajax()
  {
    $this->load->model('admin/apps_model');
    $list = $this->apps_model->get_datatables();
    $data = array();
    $no = $_POST['start'];
    foreach ($list as $rows) {
      $no++;
      $row = array();
      $row[] = $no;
      $row[] = $rows->app_id;
      $row[] = $rows->name;
      $row[] = $rows->link;
      $row[] = $rows->icon;
      $row[] = '<div class="action-buttons">
            <div class="btn-group-vertical">
							<a style="margin:2px;" type="button" class="btn btn-primary btn-sm" href="' . site_url('admin/event/edit/' . trim(base64_encode($rows->id), '=') . '') . '" >
								<i class="ace-icon fa fa-pencil bigger-130"></i> Edit
							</a>
							<a style="margin:2px;" type="button" class="btn btn-primary btn-sm" href="#" data-href="' . site_url('admin/event/delete/' . trim(base64_encode($rows->id), '=') . '') . '" data-toggle="modal" data-target="#confirm-delete" >
								<i class="ace-icon fa fa-trash bigger-130"></i> Remove
							</a>
						</div>
					</div>';
      $data[] = $row;
    }
    $output = array(
      "draw" => $_POST['draw'],
      "recordsTotal" => $this->apps_model->count_all(),
      "recordsFiltered" => $this->apps_model->count_filtered(),
      "data" => $data,
    );
    echo json_encode($output);
  }
}

/* End of file App.php */
