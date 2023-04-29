<?php
defined('BASEPATH') or exit('No direct script access allowed');

require 'vendor/autoload.php';

use chriskacerguis\RestServer\RestController;

class Kabupatenkota extends RestController
{

    function __construct()
    {
        // Construct the parent class
        parent::__construct();
    }

    public function index_get($id = 0)
    {
        $check_data = $this->db->get_where('tb_kabupaten_kota', ['id' => $id])->result();

        // Jika Mengisikan id Kabupaten/Kota
        if ($id) {
            if ($check_data) {
                $this->response($check_data, RestController::HTTP_OK);
            } else {
                $this->response([
                    'status' => false,
                    'message' => 'Data Tidak Ditemukan',
                ], 404);
            }
        } else {
            $data = $this->db->get('tb_kabupaten_kota')->result();
            $this->response($data, RestController::HTTP_OK);
        }
    }
}
