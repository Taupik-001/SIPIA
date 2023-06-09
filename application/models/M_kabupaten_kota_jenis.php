<?php

class m_kabupaten_kota_jenis extends CI_Model
{

    var $tabel = 'tb_kabupaten_kota_jenis';
    function tampil_data()
    {
        return $this->db->get('tb_kabupaten_kota_jenis');
    }


    function get_kabupaten_kota_jenis_byid($id)
    {
        $this->db->from($this->tabel);
        $this->db->where('id', $id);

        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return $query->result();
        }
    }

    function input_kabupaten_kota_jenis($data, $table)
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
}
