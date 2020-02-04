<?php

defined('BASEPATH') or exit('No direct script access allowed');

class App_model extends CI_Model
{

  public function login($nik = "", $pass = "")
  {
    $nik_clear = stripslashes(strip_tags(htmlspecialchars($nik, ENT_QUOTES)));
    $pass_clear = stripslashes(strip_tags(htmlspecialchars($pass, ENT_QUOTES)));
    return $this->getUser($nik_clear, $pass_clear);
  }

  public function getUser($nik = "", $pass = "")
  {
    $query = $this->db->query("select * from user where nik = '$nik' and password = '$pass'");

    return $query;
  }

  public function getActive($user = "")
  {
    $query = "select dari hrsempltable";
    return true;
  }

  public function getRole($id)
  {
    $query = $this->db->query("select * from role where id = '$id->role_id'");
    return $query;
  }
}

/* End of file App_model.php */
