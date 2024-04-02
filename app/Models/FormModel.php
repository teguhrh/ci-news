<?php

namespace App\Models;

use CodeIgniter\Model;

class FormModel extends Model
{
    protected $table                = 'form';
    protected $primaryKey           = 'id_form';
    protected $returnType           = 'object';
    protected $useTimestamps        = true;
    protected $allowedFields        = ['nama_lengkap', 'nama_ayah', 'nama_ibu', 'tempat_tanggal_lahir', 'jenis_kelamin', 'agama', 'anak_ke', 'jumlah_saudara', 'kewarganegaraan', 'berkas'];

}
