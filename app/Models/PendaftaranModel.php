<?php

namespace App\Models;

use CodeIgniter\Model;

class PendaftaranModel extends Model
{
    protected $table = 'pendaftaran';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'nama_lengkap',
        'nama_ayah',
        'nama_ibu',
        'tempat_tanggal_lahir',
        'jenis_kelamin',
        'agama',
        'anak_ke',
        'jumlah_saudara',
        'kewarganegaraan',
        'foto',
    ];
    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
}
