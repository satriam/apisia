<?php

namespace App\Models;

use CodeIgniter\Model;

class StudentsModel extends Model{

    protected $table = 'tbl_student';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'nim',
        'nama',
        'jk',
        'jurusan',
        'alamat',
    ];

    protected $validationRules = [
        'nim' => 'required',
        'nama'=> 'required',
        'jk' => 'required',
        'jurusan' => 'required',
        'alamat'=> 'required',
    ];

    protected $validationMessages = [
        'nim' =>[
            'required' => 'NIM tidak boleh kosong'
        ],
        'nama' =>[
            'required' => 'nama tidak boleh kosong'
        ],
        'jk' =>[
            'required' => 'Jenis kelamin tidak boleh kosong'
        ],
        'jurusan' =>[
            'required' => 'jurusan tidak boleh kosong'
        ],
        'alamat' =>[
            'required' => 'alamat tidak boleh kosong'
        ],
        
    ];
}