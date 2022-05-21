<?php

namespace App\Models;

use CodeIgniter\Model;

class matkulModel extends Model{

    protected $table = 'tbl_matakuliah';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'nama_mata_kuliah',
        'status',
    ];

    protected $validationRules = [
        'nama_mata_kuliah' => 'required',
        'status'=> 'required',
    ];

    protected $validationMessages = [
        'nama_mata_kuliah' =>[
            'required' => 'Mata kuliah tidak boleh kosong'
        ],
        'status' =>[
            'required' => 'status tidak boleh kosong'
        ],        
    ];
}