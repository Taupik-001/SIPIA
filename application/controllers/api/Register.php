<?php
defined('BASEPATH') or exit('No direct script access allowed');

require 'vendor/autoload.php';

use chriskacerguis\RestServer\RestController;

class Register extends RestController
{
    // public function index_post()
    // {
    //     $email = strtolower(trim($this->post('email')));

    //     // Check if email already exists in the database
    //     $existingUser = $this->db->get_where('tb_user', array('email' => $email))->row();

    //     if ($existingUser) {
    //         // If email already exists, return an error response
    //         $this->response([
    //             'status' => false,
    //             'message' => 'Email already exists in the database.'
    //         ], RestController::HTTP_UNAUTHORIZED);
    //         return;
    //     }

    //     // If email doesn't exist, proceed with inserting the new user
    //     $data = array(
    //         'nama' => ucwords(strtolower(trim($this->post('nama')))),
    //         'email' => $email,
    //         'password' => trim($this->post('password')),
    //         'no_telp' => str_replace(array(' ', '-'), '', $this->post('no_telp')),
    //         'id_level' => '3',
    //     );

    //     $insert = $this->db->insert('tb_user', $data);
    //     if ($insert) {
    //         $this->response([
    //             'status' => true,
    //             'message' => 'Success',
    //             'data' => $data
    //         ], RestController::HTTP_OK);
    //     } else {
    //         $this->response([
    //             'status' => false,
    //             'message' => 'Failed'
    //         ], RestController::HTTP_UNAUTHORIZED);
    //     }
    // }

    public function index_post()
    {
        $email = strtolower(trim($this->post('email')));

        // Check if email already exists in the database
        $existingUser = $this->db->get_where('tb_user', array('email' => $email))->row();

        if ($existingUser) {
            // If email already exists, return an error response
            $this->response([
                'status' => false,
                'message' => 'Email already exists in the database.'
            ], RestController::HTTP_UNAUTHORIZED);
            return;
        }

        // Check if the no_telp field is a number
        $no_telp = $this->post('no_telp');
        if (!is_numeric($no_telp)) {
            // If no_telp is not a number, return an error response
            $this->response([
                'status' => false,
                'message' => 'Invalid phone number. Please enter a valid phone number.'
            ], RestController::HTTP_UNAUTHORIZED);
            return;
        }

        // If email and no_telp are valid, proceed with inserting the new user
        $data = array(
            'nama' => ucwords(strtolower(trim($this->post('nama')))),
            'email' => $email,
            'password' => trim($this->post('password')),
            'no_telp' => trim($no_telp),
            'id_level' => '3',
        );

        $insert = $this->db->insert('tb_user', $data);
        if ($insert) {
            $this->response([
                'status' => true,
                'message' => 'Success',
                'data' => $data
            ], RestController::HTTP_OK);
        } else {
            $this->response([
                'status' => false,
                'message' => 'Failed'
            ], RestController::HTTP_UNAUTHORIZED);
        }
    }
}

// email:sajataupik599@gmail.com
// password:buatapasa
// id_level:3
