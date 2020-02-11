<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Home_model extends CI_Model
{


  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    return true;
  }
}

/* End of file Home_model.php */
