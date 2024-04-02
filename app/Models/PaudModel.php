<?php

namespace App\Models;

use CodeIgniter\Model;

class PaudModel extends Model
{
    protected $table      = 'paud';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['no_urut', 'no_induk', 'nama_siswa_baru', 'kelamin', 'tempat_tgl_lahir', 'alamat', 'tempat_tinggal', 'ditempatkan'];
}
