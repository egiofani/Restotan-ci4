<?php namespace App\Models;
use CodeIgniter\Model;

class Pelanggan_M extends Model
{
    protected $table = 'tblpelanggan';

    protected $primaryKey = 'idpelanggan';

    protected $allowedFields = ['pelanggan', 'alamat' , 'email' , 'password' , 'telp'];

    protected $validationRules    = [
        'pelanggan'     => 'required|alpha_numeric_space|min_length[3]|is_unique[tblpelanggan.pelanggan]',
    ];

    protected $validationMessages = [
        'pelanggan'        => [
            'required' => 'Harap Inputkan Nama Pelanggan',
            'alpha_numeric_space' => 'Tidak boleh menggunakan simbol',
            'min_length' => 'Minimal 3 huruf',
            'is_unique' => 'Ada data yg sama'

        ]
    ];
}

?>