<?php

namespace App\Models;

use CodeIgniter\Model;

class DokterModel extends Model{

    protected $table = 'dokter';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'nama',
        'jam',
        'jenis',
        
    ];

    protected $validationRules = [
        'nama' => 'required',
        'jam'=> 'required',
        'jenis'=> 'required',
       
    ];

    protected $validationMessages = [
        'nama' =>[
            'required' => 'Nama tidak boleh kosong'
        ],
        'jam' =>[
            'required' => 'Jam tidak boleh kosong'
        ],
        'jenis' =>[
            'required' => 'jenis tidak boleh kosong'
        ],    
    ];
}