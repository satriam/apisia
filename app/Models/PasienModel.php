<?php

namespace App\Models;

use CodeIgniter\Model;

class PasienModel extends Model{

    protected $table = 'pasien';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'pasien',
        'status',
        
    ];

    protected $validationRules = [
        'pasien' => 'required',
        'status'=> 'required',
       
    ];

    protected $validationMessages = [
        'pasien' =>[
            'required' => 'pasien tidak boleh kosong'
        ],
        'status' =>[
            'required' => 'status tidak boleh kosong'
        ]       
    ];
}