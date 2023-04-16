<?php

class M_kuliner extends CI_Model
{
    var $tabel = 'tb_kuliner';
    // Menampilkan Semua Data Dari Tabel kuliner
    function tampil_data()
    {
        return $this->db->get('tb_kuliner');
    }
    
    function get_data($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    // Memasukkan Data Ke Dalam Tabel kuliner
    function input_kuliner($data, $table)
    {
        $this->db->insert($table, $data);
    }

    function get_update($data, $where)
    {
        $this->db->where($where);
        $this->db->update($this->tabel, $data);
        return TRUE;
    }

    // Memasukkan Suatu Data dari Tabel kuliner berdasarkan ID
    function edit_data($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    // Menghapus suatu data dari tabel kuliner berdasarkan ID
    function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    // Menghitung jumalah data dari tabel kuliner
    function get_count()
    {
        $sql = "SELECT COUNT(id) as id FROM tb_kuliner";
        $result = $this->db->query($sql);
        return $result->row()->id;
    }
}
