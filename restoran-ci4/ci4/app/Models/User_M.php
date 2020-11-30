<?php namespace App\Models;
use CodeIgniter\Model;

class User_M extends Model
{
    protected $table = 'tbluser';

    protected $primaryKey = 'iduser';

    protected $allowedFields = ['user' , 'email' , 'password', 'aktif'];

    protected $validationRules    = [
        'email'     => 'valid_email|is_unique[tbluser.email]',
        'user'     => 'alpha_numeric_space|is_unique[tbluser.user]',

    ];

    protected $validationMessages = [
        'email'        => [
            'valid_email' => 'Harap Masukkan Email Dengan Benar',
            'is_unique' => 'Email Sudah terdaftar'


        ],
        'user'        => [
            'alpha_numeric_space' => 'Tidak boleh menggunakan simbol',
            'is_unique' => 'Nama Sudah Ada'

        ]
    ];    

    

    
}

?>