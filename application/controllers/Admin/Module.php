<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Module extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();

    $this->navigasi->set_active_menu('module');

    $this->name  = $this->session->userdata('name');
    $this->levelid  = $this->session->userdata('levelid');
    $this->sessionid = $this->session->userdata('sessionid');
    $this->user_id = $this->session->userdata('user_id');
    $this->admin = $this->session->userdata('admin');

    $this->load->model('app_model');
  }

  public function index()
  {
    if ($this->admin == "") {
      redirect('home/admin');
    }

    $data['title'] = "APP MODULE LIST";
    $data['header'] = "List App Module";
    $data['apps'] = $this->app_model->master("apps");
    $data["page"] = 'admin/module';
    $this->load->view('index_admin', $data);
  }

  function ajax()
  {
    $this->load->model('admin/module_model');
    $list = $this->module_model->get_datatables();
    $data = array();
    $no = $_POST['start'];
    foreach ($list as $rows) {
      $no++;
      $row = array();
      $row[] = $no;
      $row[] = $rows->app_id;
      $row[] = $rows->name;
      $row[] = $rows->description;
      $row[] = $rows->status;
      $row[] = '<div class="action-buttons">
            <div class="btn-group-vertical">
							<a style="margin:2px;" type="button" class="btn btn-primary btn-sm edit-btn" data-id="' . $rows->id . '" href="#" data-toggle="modal" data-target="#modal-edit">
								<i class="ace-icon fa fa-pencil bigger-130"></i> Edit
							</a>
							<a style="margin:2px;" type="button" class="btn btn-primary btn-sm" href="#" data-href="' . site_url('admin/app/delete/' . trim(base64_encode($rows->id), '=') . '') . '" data-toggle="modal" data-target="#confirm-delete" >
								<i class="ace-icon fa fa-trash bigger-130"></i> Remove
							</a>
						</div>
					</div>';
      $data[] = $row;
    }
    $output = array(
      "draw" => $_POST['draw'],
      "recordsTotal" => $this->module_model->count_all(),
      "recordsFiltered" => $this->module_model->count_filtered(),
      "data" => $data,
    );
    echo json_encode($output);
  }

  function add()
  {
    $data = array();
    $data["title"] = "ADD APP";
    $data['page']       = 'admin/app_add';
    $data['mevent_main'] = $this->app_model->master('apps');
    $this->load->view('index_admin', $data);
  }

  function save()
  {
    $in["app_id"]    = $this->input->post('app_id');
    $in["name"]      = $this->input->post('name');
    $in["link"]      = $this->input->post('link');
    $in["icon"]      = $this->input->post('icon');

    $this->app_model->simpan("apps", $in);
    $this->session->set_flashdata('info', 'Berhasil menambahkan data.');
    redirect('admin/app');
  }

  function edit($id = null)
  {
    $data =  $this->app_model->edit("module", "id='" . $id . "'")->result();

    echo json_encode($data);
  }

  function update()
  {
    $in["id"]               = $this->input->post('id');
    $in["app_id"]           = $this->input->post('app_id');
    $in["name"]             = $this->input->post('name');
    $in["link"]             = $this->input->post('link');
    $in["icon"]             = $this->input->post('icon');

    $this->app_model->update("apps", $in, "id");

    $this->session->set_flashdata('info', 'Berhasil update.');
    redirect('admin/app');
  }

  function delete($id = null)
  {
    $id = base64_decode($id);
    $this->app_model->hapus($id, "id", "apps");
    $this->session->set_flashdata('info', 'Berhasil menghapus data.');
    redirect('admin/app');
  }
}

/* End of file App.php */
