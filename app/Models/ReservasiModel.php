<?php

namespace App\Models;

use CodeIgniter\Model;

class ReservasiModel extends Model{

    protected $table = 'reservasi';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'nama',
        'jam',
        'id_dokter'
    ];

    protected $validationRules = [
        'nama' => 'required',
        'jam'=> 'required',
        'id_dokter'=>'required'
    ];

    protected $validationMessages = [
        'nama' =>[
            'required' => 'nama tidak boleh kosong'
        ],
        'jam' =>[
            'required' => 'jam tidak boleh kosong'
        ], 
        'id_dokter'=>'dokter tidak boleh kosong'       
    ];
}