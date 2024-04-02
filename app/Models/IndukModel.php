<?php

namespace App\Models;

use CodeIgniter\Model;

class IndukModel extends Model
{
    protected $table      = 'induk';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['lengkap', 'panggilan', 'kelamin', 'tempat_tgl_lahir', 'agama', 'kewarganegaraan', 'jumlah_saudara', 'bahasa', 'berat', 'tinggi', 'alamat', 'telepon', 'tinggal', 'jarak'];
}
