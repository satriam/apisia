<?php

namespace App\Controllers;

use CodeIgniter\API\ResponseTrait;
use CodeIgniter\RESTful\ResourceController;

class Matkul extends ResourceController
{
    use ResponseTrait;

    protected $modelName = 'App\Models\matkulModel';
    protected $format    = 'json';

    public function index()
    {
        // return $this->respond($this->model->findAll());
        $data = $this->model->orderBy('id', 'asc')->findAll();
        return $this->respond($data, 200);
    }

    public function show($id = null)
    {
        $data = $this->model->where('id', $id)->find();     
        if($data) {
            return $this->respond($data, 200);
        }else {
            return $this->failNotFound("Data Tidak Ditemukan!");
        }
    }

    public function create()
    {
        $data = $this->request->getPost();

        if (empty($data)) {
            return $this->fail("Data yang diinput Kosong");
        }

        $save = $this->model->save($data);

        if(!$save){
            return $this->fail($this->model->errors());
        }

        $response = [
            'status' => 201,
            'error' => null,
            'message' => [
                'success' => "Berhasil Menambahkan Data"
            ]
        ];

        return $this->respondCreated($response);
    }

    public function update($id = null)
    {
        $data = $this->request->getRawInput();
        $data['id'] = $id;

        $check_data = $this->model->where('id', $id)->find();
        if(!$check_data){
            return $this->failNotFound("Data tidak ditemukan");
        }
      

        $save = $this->model->save($data);

        if(!$save){
            return $this->fail($this->model->errors());
        }

        $response = [
            'status' => 200,
            'error' => null,
            'message' => [
                'success' => "Berhasil mengubah Data"
            ]
        ];

        return $this->respondUpdated($response);
    }

    public function delete($id = null)
    {
        $check_data = $this->model->where('id', $id)->find();

        if($check_data){
            $this->model->delete($id);

            $response = [
                'status' => 200,
                'error' => null,
                'message' => [
                    'success' => "Berhasil menghapus Data"
                    ]
                ];

            return $this->respondDeleted($response);

        }else {
            return $this->failNotFound("Data tidak ditemukan");
        }
    }
    // ...
}