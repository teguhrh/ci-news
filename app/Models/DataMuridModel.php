<?php

namespace App\Models;

use CodeIgniter\Model;

class DataMuridModel extends Model
{
    protected $table      = 'datamurid';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['no_urut', 'nama_murid', 'kelamin', 'nama_orang_tua', 'nomor_daftar_induk', 'tgl_masuk', 'tgl_keluar', 'alasan_keluar', 'buku_di_ke'];
}
