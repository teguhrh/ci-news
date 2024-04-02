<?php

namespace App\Models;

use CodeIgniter\Model;

class FormulirrModel extends Model
{
    protected $table      = 'formulirr';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['nama', 'ibu', 'bapak', 'tempat_lahir', 'kelamin', 'agama', 'anak_ke', 'kewarganegaraan'];
}
