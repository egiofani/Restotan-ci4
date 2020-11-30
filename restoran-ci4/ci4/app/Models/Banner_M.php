<?php

namespace App\Models;

use CodeIgniter\Model;

class Banner_M extends Model
{

    protected $table = 'tblbanner';

    protected $primaryKey = 'id';

    protected $allowedFields = ['banner', 'gambar' , 'link'];
}