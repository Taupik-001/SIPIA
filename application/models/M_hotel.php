<?php

class M_hotel extends CI_Model
{

    var $tabel = 'tb_hotel';
    // Menampilkan Semua Data Dari Tabel Hotel
    function tampil_data()
    {
        return $this->db->get('tb_hotel');
    }

    function get_data($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    // Memasukkan Data Ke Dalam Tabel Hotel
    function input_hotel($data, $table)
    {
        $this->db->insert($table, $data);
    }

    function get_update($data, $where)
    {
        $this->db->where($where);
        $this->db->update($this->tabel, $data);
        return TRUE;
    }

    // Memasukkan Suatu Data dari Tabel Hotel berdasarkan ID
    function edit_data($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    // Menghapus suatu data dari tabel Hotel berdasarkan ID
    function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    // Menghitung jumalah data dari tabel hotel
    function get_count()
	{
		$sql = "SELECT COUNT(id) as id FROM tb_hotel";
		$result = $this->db->query($sql);
		return $result->row()->id;
	}
}
