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

    if (!ctype_alnum($nik)) {
      $this->session->set_flashdata('error_login', 'Protected !!');
      redirect();
    }
    if (count($user) > 0) {
      $matchingPass = $user[0]->password === $pass;

      if ($matchingPass) {
        $terminate = $this->app_model->getPreTerminate($user[0]->emplid);
        if (!$terminate) {
          $role = $this->app_model->getRole($user[0]->role_id)->result();
          if (count($role) > 0) {
            $app_id = "APP01-WEBINFO";
            $access = $this->app_model->getAppAccess($role[0]->id, $app_id);
            if ($access) {
              foreach ($user as $detail) {
                $this->session->set_userdata('name', $detail->name);
                $this->session->set_userdata('bu', $detail->bu);
                $this->session->set_userdata('roleid', $detail->role_id);
                $this->session->set_userdata('emplid', $detail->emplid);
                $this->session->set_userdata('sessionid', session_id());
                $this->session->set_userdata('user_id', $detail->user_id);
              }
              redirect('home');
            } else {
              $this->setErrorMessage("Anda tidak dapat mengakses app ini.");
            }
          } else {
            $this->setErrorMessage("Invalid Role");
          }
        } else {
          $this->setErrorMessage('User anda sudah tidak aktif, hubungi administrator');
        }
      } else {
        $this->setErrorMessage("Invalid Password");
      }
    } else {
      $this->setErrorMessage('Invalid NIK');
    }
  }

  function admin()
  {
    $data['username'] = trim($this->db->escape_str($this->input->post('username')));
    $data['password']  = $this->db->escape_str($this->input->post('password'));

    $user = $this->app_model->getWhere('admin', 'username', $data['username']);

    if ($user->num_rows() > 0) {
      $pass = $this->app_model->getWhereAnd('admin', 'username', 'password', $data);
      if ($pass->num_rows() < 0) {
        $this->setErrorMessageAdmin("Invalid Password");
      } else {
        foreach ($user->result() as $detail) {
          if ($detail->active != 1) {
            $this->setErrorMessageAdmin("User sudah tidak aktif");
          }
          $arr = array(
            'bu' => $detail->bu,
            'roleid' => $detail->role_id,
            'name' => $detail->name,
            'admin' => $detail->id
          );
          $this->session->set_userdata($arr);
          redirect('admin');
        }
      }
    } else {
      $this->setErrorMessageAdmin('Invalid Username');
    }
  }

  function setErrorMessage($msg = "")
  {
    $this->session->set_flashdata("error_login", $msg);
    redirect();
  }

  function setErrorMessageAdmin($msg = "")
  {
    $this->session->set_flashdata("error_login", $msg);
    redirect("admin");
  }

  public function logout()
  {
    $this->session->sess_destroy();
    $this->load->library('session');
    $this->setErrorMessage('You Are Logout!');
    redirect('home');
  }
}

/* End of file Auth.php */
