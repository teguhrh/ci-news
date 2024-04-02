<?php

namespace App\Models;

use CodeIgniter\Model;

class FormulirModel extends Model
{
    protected $table      = 'formulir';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['nama_Lengkap', 'nama_Panggilan', 'tempat_Tanggal_Lahir', 'jenis_Kelamin', 'agama', 'anak_Ke', 'jumlah_Saudara', 'status_Keluarga', 'kewarganegaraan'];

    // FormulirModel.php
public function tampil_data($table)
{
    return $this->db->table($table)->get()->getResult();
}


}
