<?php

class M_login extends CI_Model
{
	var $tabel = 'tb_admin';
	function cek_login($table, $where)
	{
		return $this->db->get_where($table, $where);
	}

	function get_login($where, $table)
	{
		return $this->db->get_where($table, $where);
	}

	function input_admin($data, $table)
	{
		$this->db->insert($table, $data);
	}
}
