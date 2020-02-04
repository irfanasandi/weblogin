<?php

defined('BASEPATH') or exit('No direct script access allowed');

class App_model extends CI_Model
{

  public function login($nik, $pass)
  {
    $nik_clear = stripslashes(strip_tags(htmlspecialchars($nik, ENT_QUOTES)));
    $pass_clear = stripslashes(strip_tags(htmlspecialchars($pass, ENT_QUOTES)));
    if ($this->getUser($nik_clear, $pass_clear)) {
      
    }
  }

  public function getUser($nik, $pass)
  {
    $query = $this->db->query("select * from user where nik = '$nik' and password = '$pass'");

    return $query;
  }
}

/* End of file App_model.php */
