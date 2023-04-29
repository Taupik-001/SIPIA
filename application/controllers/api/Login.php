<?php
defined('BASEPATH') or exit('No direct script access allowed');

require 'vendor/autoload.php';

use chriskacerguis\RestServer\RestController;

class Login extends RestController
{
    public function index_post()
    {
        $email = strtolower(trim($this->post('email')));
        $password = trim($this->post('password'));

        // Check if the username and password are correct
        $result = $this->db->get_where('tb_user', array('email' => $email, 'password' => $password))->row();

        if ($result) {
            $this->response([
                'status' => true,
                'message' => 'Success',
                'data' => $result
            ], RestController::HTTP_OK);
        } else {
            $this->response([
                'status' => false,
                'message' => 'Invalid'
            ], RestController::HTTP_UNAUTHORIZED);
        }
    }
}

// email:sajataupik599@gmail.com
// password:buatapasa
// id_level:3
