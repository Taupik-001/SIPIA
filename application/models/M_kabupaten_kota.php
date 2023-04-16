<?php

class M_kabupaten_kota extends CI_Model
{

    var $tabel = 'tb_kabupaten_kota';
    function tampil_data()
    {
        return $this->db->get('tb_kabupaten_kota');
    }

    function input_kabupaten_kota($data, $table)
    {
        $this->db->insert($table, $data);
    }

    function edit_data($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    function get_data($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    function get_update($data, $where)
    {
        $this->db->where($where);
        $this->db->update($this->tabel, $data);
        return TRUE;
    }

    function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }


    function get_count_kabupaten()
	{
		$sql = "SELECT COUNT(id) as id FROM tb_kabupaten_kota WHERE jenis_kabupaten_kota = 1";
		$result = $this->db->query($sql);
		return $result->row()->id;
	}
    function get_count_kota()
	{
		$sql = "SELECT COUNT(id) as id FROM tb_kabupaten_kota WHERE jenis_kabupaten_kota = 2";
		$result = $this->db->query($sql);
		return $result->row()->id;
	}
    
}
