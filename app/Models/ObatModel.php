<?php

namespace App\Models;

use CodeIgniter\Model;

class ObatModel extends Model{

    protected $table = 'obat';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'obat',
        'deskripsi',
        
    ];

    protected $validationRules = [
        'obat' => 'required',
        'deskripsi'=> 'required',
       
    ];

    protected $validationMessages = [
        'obat' =>[
            'required' => 'obat tidak boleh kosong'
        ],
        'deskripsi' =>[
            'required' => 'deskripsi tidak boleh kosong'
        ]       
    ];
}