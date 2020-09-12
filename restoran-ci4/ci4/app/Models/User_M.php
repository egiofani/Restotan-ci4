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

    public function verifyEmail($email)
    {
        $builder = $this->db->table('tbluser');
        $builder->where('email',$email);
        $result = $builder->get();
        if (!empty($result->getResultArray()))
         {
            return $result->getRowArray();
        }else {
            return false;
        }
    }

    public function updateAt($id)
    {
        $builder = $this->db->table('tbluser');
        $builder->where('iduser', $id);
        $builder->update(['update_at'=>date('Y-m-d h:i:s')]);
        if ($this->db->affectedRows()==1)
         {
            return true;
        }else {
            return false;
        }
    }
}

?>