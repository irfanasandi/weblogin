<?php

defined('BASEPATH') or exit('No direct script access allowed');

class App_model extends CI_Model
{

  function master($master)
  {
    $q = $this->db->query("select * from $master");
    return $q;
  }
  function manual_query($query)
  {
    $q = $this->db->query($query);
    return $q;
  }

  function simpan($tabel, $data)
  {
    $s = $this->db->insert($tabel, $data);
    return $s;
  }

  function getWhere($tabel, $kolom, $seleksi)
  {
    return $this->db->get_where($tabel, array($kolom => $seleksi));
  }

  public function getWhereAnd($tabel, $kolom, $kolom2, $seleksi)
  {
    $this->db->select('*');
    $this->db->where($kolom, $seleksi[$kolom]);
    $this->db->where($kolom2, $seleksi[$kolom2]);
    return $this->db->get($tabel);
  }

  function edit($tabel, $seleksi)
  {
    $query = $this->db->query("select * from $tabel where $seleksi");
    return $query;
  }

  function update($tabel, $isi, $seleksi)
  {
    $this->db->where($seleksi, $isi[$seleksi]);
    $this->db->update($tabel, $isi);
  }

  function update2($tabel, $isi, $seleksi, $seleksi2)
  {
    $this->db->where($seleksi, $isi[$seleksi]);
    $this->db->where($seleksi2, $isi[$seleksi2]);
    $this->db->update($tabel, $isi);
  }

  function hapus($id, $seleksi, $tabel)
  {
    $this->db->where($seleksi, $id);
    $this->db->delete($tabel);
  }

  public function login($nik = "", $pass = "")
  {
    $nik_clear = stripslashes(strip_tags(htmlspecialchars($nik, ENT_QUOTES)));
    $pass_clear = stripslashes(strip_tags(htmlspecialchars($pass, ENT_QUOTES)));
    return $this->getUser($nik_clear, $pass_clear);
  }

  public function getUser($nik = "")
  {
    $query = $this->db->query("select * from user where emplid = '$nik'");

    return $query;
  }

  public function matchPassword($nik = "", $pass = "")
  {
    $query = $this->db->query("select * from user where emplid = '$nik' and password = '$pass' ");
    if ($query->num_rows() > 0) {
      return true;
    } else {
      return false;
    }
  }

  public function getPreTerminate($id = "")
  {
    $this->live = $this->load->database("axapta", TRUE);
    $query = $this->live->query("select * from hrsemployeetable where emplid = '$id'");

    foreach ($query->result() as $get) {
      return $get->ERL_PRETERMINATE;
    }
  }

  public function getRole($role_id)
  {
    $query = $this->db->query("select * from role where id = '$role_id'");
    return $query;
  }

  public function getAppAccess($role = "", $app = "")
  {
    $query = $this->db->query("select * from hak_akses where role_id = $role and app_id = '$app'");
    if ($query->num_rows() > 0) {
      return true;
    } else {
      return 0;
    }
  }
}

/* End of file App_model.php */
